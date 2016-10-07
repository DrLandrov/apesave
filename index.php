<?php

require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));

DB::$dbName = 'todorest';
DB::$user = 'todorest';
DB::$password = 'rABaD56nBADjmrCb';
DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

// FIXME: add monolog

function nonsql_error_handler($params) {
    global $app, $log;
    $log->error("Database error: " . $params['error']);
    http_response_code(500);
    header('content-type: application/json');
    echo json_encode("Internal server error");
    die;
}

function sql_error_handler($params) {
    global $app, $log;
    $log->error("SQL error: " . $params['error']);
    $log->error(" in query: " . $params['query']);
    http_response_code(500);
    header('content-type: application/json');
    echo json_encode("Internal server error");
    die; // don't want to keep going if a query broke
}

$app = new \Slim\Slim();

\Slim\Route::setDefaultConditions(array(
    'ID' => '\d+'
));

$app->response->headers->set('content-type', 'application/json');

function isTodoItemValid($todo, &$error, $skipID = FALSE) {
    /* TODO: validate the following:
     * 1. All fields ID, title, dueDate, isDone are present and none other
     * 2. ID is valid numercial value 1 or graeter
     * 3. title is 1-100 characters long
     * 4. dueDate is a valid date between 2000-01-01 and 2099-01-01
     * 5. isDone is either 'true' or 'false'
     * In case of failed validation requirement $log->debug() the reason.
     */
    if (count($todo) != ($skipID ? 3 : 4)) {
        $error = 'Invalid number of fields in data provided';
        return FALSE;
    }
    if (!$skipID) {
        if ((!isset($todo['ID']) || (!is_numeric($todo['ID'])))) {
            $error = 'ID must be provided and must be a number';
            return FALSE;
        }
    }
    if (!isset($todo['title']) || !isset($todo['dueDate']) || !isset($todo['isDone'])) {
        $error = 'The passed fields do not correspond to the expected list';
        return FALSE;
    }
    if (strlen($todo['title']) < 1 || strlen($todo['title']) > 100) {
        $error = 'Title is not valid';
        return FALSE;
    }
    if (!in_array($todo['isDone'], array('true', 'false'))) {
        $error = 'isDone is not true nor false';
        return FALSE;
    }
    $f = 'Y-m-d';
    $tempDate = explode('-', $todo['dueDate']);
    if (count($tempDate) != 3) {
        $error = 'dueDate is not in the correct format';
        return FALSE;
    } elseif (!checkdate($tempDate[1], $tempDate[2], $tempDate[0])
            || date($todo['dueDate'], $f) < date('2000-01-01', $f)
            || date($todo['dueDate'], $f) > date('2099-01-01', $f)) {
        $error = 'dueDate could not be parsed into a valid date between 2000-01-01 and 2099-01-01';
        return FALSE;
    }
    return TRUE;
}

$app->get('/todoitems', function() {
    $recordList = DB::query("SELECT * FROM todoitems");
    echo json_encode($recordList, JSON_PRETTY_PRINT);
});

$app->get('/todoitems/:ID', function($ID) use ($app) {
//    sleep(1);
    $record = DB::queryFirstRow("SELECT * FROM todoitems WHERE ID=%d", $ID);
    // 404 if record not found
    if (!$record) {
        $app->response->setStatus(404);
        echo json_encode("Record not found");
        return;
    }
    echo json_encode($record, JSON_PRETTY_PRINT);
});

$app->delete('/todoitems/:ID', function($ID) {
    DB::delete('todoitems', "ID=%d", $ID);
    echo 'true';
});

$app->post('/todoitems', function() use ($app, $log) {
    $body = $app->request->getBody();
    $record = json_decode($body, TRUE);
    // FIXME: verify $record contains all and only fields required with valid values
    if (!isTodoItemValid($record, $error, TRUE)) {
        $app->response->setStatus(400);
        $log->debug("POST /todoitems verification failed: " . $error);
        echo json_encode($error);
        //echo json_encode("Bad request - data validation failed");
        return;
    }
    DB::insert('todoitems', $record);
    echo DB::insertId();
    // POST / INSERT is special - returns 201
    $app->response->setStatus(201);
});

$app->put('/todoitems/:ID', function($ID) use ($app) {
    $body = $app->request->getBody();
    $record = json_decode($body, TRUE);
    $record['ID'] = $ID; // prevent changing of ID
    // FIXME: verify $record contains all and only fields required with valid values
    if (!isTodoItemValid($record, $error)) {
        $app->response->setStatus(400);
        $log->debug("POST /todoitems verification failed: " . $error);
        echo json_encode("Bad request - data validation failed");
        return;
    }
    DB::update('todoitems', $record, "ID=%d", $ID);
    echo json_encode(TRUE); // same as: echo 'true';
});

$app->run();
