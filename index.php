<?php

session_start();

// enable on-demand class loader
require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));

DB::$dbName = 'rolex';
DB::$user = 'Rolex';
DB::$password = 'FjbrEpcBptEGavuq';
// DB::$host = '127.0.0.1'; // sometimes needed on Mac OSX
DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

function nonsql_error_handler($params) {
    global $app, $log;
    $log->error("Database error: " . $params['error']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

function sql_error_handler($params) {
    global $app, $log;
    $log->error("SQL error: " . $params['error']);
    $log->error(" in query: " . $params['query']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die; // don't want to keep going if a query broke
}

// instantiate Slim - router in front controller (this file)
// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

/*
\Slim\Route::setDefaultConditions(array(
    'id' => '\d+'
)); */

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}

$app->get('/', function() use ($app) {    
    $app->render('index.html.twig',
            array('sessionUser' => $_SESSION['user']));
});

// State 1: first show
$app->get('/register', function() use ($app, $log) {
    $app->render('register.html.twig');
});
// State 2: submission
$app->post('/register', function() use ($app, $log) {
    $uName = $app->request->post('uName');
    $fName = $app->request->post('fName');
    $lName = $app->request->post('lName');
    $email = $app->request->post('email');
    $pass1 = $app->request->post('pass1');
    $pass2 = $app->request->post('pass2');
    $valueList = array ('uName' => $uName, 'email' => $email, 'fName' => $fName, 'lName' => $lName);
    // submission received - verify
    $errorList = array();
    if (strlen($uName) < 4) {
        array_push($errorList, "Username must be at least 4 characters long");
        unset($valueList['uName']);
    }
    if (strlen($fName) < 2) {
        array_push($errorList, "First name must be at least 2 characters long");
        unset($valueList['fName']);
    }
    if (strlen($lName) < 2) {
        array_push($errorList, "Last name must be at least 2 characters long");
        unset($valueList['lName']);
    }
    /*
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        array_push($errorList, "Email does not look like a valid email");
        unset($valueList['email']);
    } else {
        $user = DB::queryFirstRow("SELECT ID FROM users WHERE email=%s", $email);        
        if ($user) {
            array_push($errorList, "Email already registered");
            unset($valueList['email']);
        }
    }
     */
    /*
    if (!preg_match('/[0-9;\'".,<>`~|!@#$%^&*()_+=-]/', $pass1) || (!preg_match('/[a-z]/', $pass1)) || (!preg_match('/[A-Z]/', $pass1)) || (strlen($pass1) < 6)) {
        array_push($errorList, "Password must be at least 6 characters " .
                "long, contain at least one upper case, one lower case, " .
                " one digit or special character");
    } else if ($pass1 != $pass2) {
        array_push($errorList, "Passwords don't match");
    }
     */
    //
    if ($errorList) {
        // STATE 3: submission failed        
        $app->render('register.html.twig', array(
            'errorList' => $errorList, 'v' => $valueList
        ));
    } else {
        // STATE 2: submission successful
        DB::insert('users', array(
            'username' => $uName, 'email' => $email, 'password' => $pass1, 'firstName' => $fName, 'lastName' => $lName, 
        ));
        $id = DB::insertId();
        $log->debug(sprintf("User %s created", $uName));
        $app->render('register_success.html.twig');
    }
});

// State 1: first show
$app->get('/login', function() use ($app, $log) {
    $app->render('login.html.twig');
});
// State 2: submission
$app->post('/login', function() use ($app, $log) {
    $email = $app->request->post('email');
    $pass = $app->request->post('pass');
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);    
    if (!$user) {
        $log->debug(sprintf("User failed for email %s from IP %s",
                    $email, $_SERVER['REMOTE_ADDR']));
        $app->render('login.html.twig', array('loginFailed' => TRUE));
    } else {
        // password MUST be compared in PHP because SQL is case-insenstive
        if ($user['password'] == $pass) {
            // LOGIN successful
            unset($user['password']);
            $_SESSION['user'] = $user;
            $log->debug(sprintf("User %s logged in successfuly from IP %s",
                    $user['ID'], $_SERVER['REMOTE_ADDR']));
            $app->render('login_success.html.twig');
        } else {
            $log->debug(sprintf("User failed for email %s from IP %s",
                    $email, $_SERVER['REMOTE_ADDR']));
            $app->render('login.html.twig', array('loginFailed' => TRUE));            
        }
    }
});

$app->get('/sell', function() use ($app, $log) {
    $_SESSION['user'] = array();
    $app->render('sell.html.twig');
});



$app->get('/logout', function() use ($app, $log) {
    $_SESSION['user'] = array();
    $app->render('logout_success.html.twig');
});
// =======================POSTING ITEM ============================

$app->post('/sell(/:id)', function($id = '') use ($app, $log) {
    
    
    $description = $app->request->post('description');
    $price = $app->request->post('price');
    $location = $app->request->post('location');
    $image = $app->request->post('image');
    $pName = $app->request->post('pName');
    $fileUpload = $app->request->post($_FILES['picFile']);

    $valueList = array(
        'description' => $description,
        'pPrice' => $price,
        'image' => $image,
        'pLocation'=>$location,
        'pName'=>$pName);
    
    $errorList = array();
    
    if (strlen($description) < 5 || strlen($description) >300 ) {
        array_push($errorList, "Description must be at least 5 and at most 300 characters long");
        // unset($valueList['msg']);
    }
    
    if (($price == "")
            || !is_numeric($price)
            || ($price < 0) 
            || ($price > 1000000)) {
        array_push($errorList, "Price must be provided and between 0 and 1000000");
        unset($valueList['price']);
    }
    
    
    if ($errorList) {
        // State 3: failed submission
        $app->render('sell.html.twig',
                array(
                    'errorList' => $errorList,
                    'v' => $valueList
                ));
    } else {
        // State 2: successful submission
        if ($id === '') {
            DB::insert('products',
                array(
                    'description'=>$description,
                    'pPrice'=>$price,
                    'pLocation'=>$location,
                    'pName'=>$pName
            ));
        } else {
            DB::update('products', 
                    array(
                    'description'=>$description,
                    'pPrice'=>$price,
                    'pLocation'=>$location,
                    'pName'=>$pName
            ),
                    'ID=%s', $id);
        }
        $app->render('postad_success.html.twig', array(
            'description'=>$description,
            'price'=>$price
        ));
    }
});

// FIRST SHOW
$app->get('/postadd(/:id)', function($id = '') use ($app) {
    if ($id === '') {
        $app->render('sell.html.twig');
        return;
    }
    $ad = DB::queryOneRow("SELECT * FROM products WHERE ID=%d", $id);
    if (!$ad) {
        $app->render("sell.html.twig");
    } else {
        $app->render("sell.html.twig", array("v" => $ad));
    }
});

$app->run();
