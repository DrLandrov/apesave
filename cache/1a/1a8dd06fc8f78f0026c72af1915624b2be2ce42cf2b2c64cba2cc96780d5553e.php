<?php

/* sell.html.twig */
class __TwigTemplate_0723ca4eee01a820f40956012fb31979c73c24c23b91eab0014a6ad060410843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "sell.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        echo "<h1>Sell Item</h1>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 7
            echo "    <ul>
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </ul>
";
        }
        // line 13
        echo "
<form method=\"post\">
    <!--No Post get for image in index file-->
    Image: <input type=\"file\" name=\"image\"><br> 
    Description: <textarea cols=\"20\" rows=\"4\" name=\"msg\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "msg", array()), "html", null, true);
        echo "</textarea><br>
    Price: <input type=\"text\" name=\"price\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "price", array()), "html", null, true);
        echo "\"><br>
    Location:<input type=\"text\" name =\"location\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "location", array()), "html", null, true);
        echo "\"><br>
    <input type=\"submit\" value=\"Post ad\">
</form>
<!--\$app->post('/postad(/:id)', function(\$id = '') use (\$app) {
    \$Description = \$app->request->post('msg');
    \$price = \$app->request->post('price');
    \$contactEmail = \$app->request->post('contactEmail');

    \$valueList = array(
        'msg' => \$Description,
        'price' => \$price,
        'contactEmail'=>\$contactEmail);
    // \$name = \$_POST['name']; // pure-PHP way - NOT recommended
    \$errorList = array();
    
    if (strlen(\$Description) < 5 || strlen(\$Description) >300 ) {
        array_push(\$errorList, \"Description must be at least 5 and at most 300 characters long\");
        // unset(\$valueList['msg']);
    }
    
    if ((\$price == \"\")
            || !is_numeric(\$price)
            || (\$price < 0) 
            || (\$price > 1000000)) {
        array_push(\$errorList, \"Price must be provided and between 0 and 1000000\");
        unset(\$valueList['price']);
    }
    
    if (filter_var(\$contactEmail, FILTER_VALIDATE_EMAIL) === FALSE) {
        array_push(\$errorList, \"Email does not look like a valid email\");
        unset(\$valueList['contactEmail']);
    }
    
    if (\$errorList) {
        // State 3: failed submission
        \$app->render('postad.html.twig',
                array(
                    'errorList' => \$errorList,
                    'v' => \$valueList
                ));
    } else {
        // State 2: successful submission
        if (\$id === '') {
            DB::insert('products',
                array(
                    'description'=>\$description,
                    'price'=>\$price,
                    'contactEmail'=>\$contactEmail
            ));
        } else {
            DB::update('products', 
                    array(
                    'description'=>\$description,
                    'price'=>\$price,
                    'contactEmail'=>\$contactEmail
            ),
                    'ID=%s', \$id);
        }
        \$app->render('postad_success.html.twig', array(
            'msg'=>\$Description,
            'price'=>\$price,
            'email'=>\$contactEmail
        ));
    }

});

// FIRST SHOW
\$app->get('/postad(/:id)', function(\$id = '') use (\$app) {
    if (\$id === '') {
        \$app->render('postad.html.twig');
        return;
    }
    \$ad = DB::queryOneRow(\"SELECT * FROM products WHERE ID=%d\", \$id);
    if (!\$ad) {
        \$app->render(\"editad_notfound.html.twig\");
    } else {
        \$app->render(\"postad.html.twig\", array(\"v\" => \$ad));
    }
});-->

";
    }

    public function getTemplateName()
    {
        return "sell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 18,  66 => 17,  60 => 13,  56 => 11,  47 => 9,  43 => 8,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block head %}<h1>Sell Item</h1>{% endblock %}

{% block content %}
{% if errorList %}
    <ul>
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form method=\"post\">
    <!--No Post get for image in index file-->
    Image: <input type=\"file\" name=\"image\"><br> 
    Description: <textarea cols=\"20\" rows=\"4\" name=\"msg\">{{v.msg}}</textarea><br>
    Price: <input type=\"text\" name=\"price\" value=\"{{v.price}}\"><br>
    Location:<input type=\"text\" name =\"location\" value=\"{{v.location}}\"><br>
    <input type=\"submit\" value=\"Post ad\">
</form>
<!--\$app->post('/postad(/:id)', function(\$id = '') use (\$app) {
    \$Description = \$app->request->post('msg');
    \$price = \$app->request->post('price');
    \$contactEmail = \$app->request->post('contactEmail');

    \$valueList = array(
        'msg' => \$Description,
        'price' => \$price,
        'contactEmail'=>\$contactEmail);
    // \$name = \$_POST['name']; // pure-PHP way - NOT recommended
    \$errorList = array();
    
    if (strlen(\$Description) < 5 || strlen(\$Description) >300 ) {
        array_push(\$errorList, \"Description must be at least 5 and at most 300 characters long\");
        // unset(\$valueList['msg']);
    }
    
    if ((\$price == \"\")
            || !is_numeric(\$price)
            || (\$price < 0) 
            || (\$price > 1000000)) {
        array_push(\$errorList, \"Price must be provided and between 0 and 1000000\");
        unset(\$valueList['price']);
    }
    
    if (filter_var(\$contactEmail, FILTER_VALIDATE_EMAIL) === FALSE) {
        array_push(\$errorList, \"Email does not look like a valid email\");
        unset(\$valueList['contactEmail']);
    }
    
    if (\$errorList) {
        // State 3: failed submission
        \$app->render('postad.html.twig',
                array(
                    'errorList' => \$errorList,
                    'v' => \$valueList
                ));
    } else {
        // State 2: successful submission
        if (\$id === '') {
            DB::insert('products',
                array(
                    'description'=>\$description,
                    'price'=>\$price,
                    'contactEmail'=>\$contactEmail
            ));
        } else {
            DB::update('products', 
                    array(
                    'description'=>\$description,
                    'price'=>\$price,
                    'contactEmail'=>\$contactEmail
            ),
                    'ID=%s', \$id);
        }
        \$app->render('postad_success.html.twig', array(
            'msg'=>\$Description,
            'price'=>\$price,
            'email'=>\$contactEmail
        ));
    }

});

// FIRST SHOW
\$app->get('/postad(/:id)', function(\$id = '') use (\$app) {
    if (\$id === '') {
        \$app->render('postad.html.twig');
        return;
    }
    \$ad = DB::queryOneRow(\"SELECT * FROM products WHERE ID=%d\", \$id);
    if (!\$ad) {
        \$app->render(\"editad_notfound.html.twig\");
    } else {
        \$app->render(\"postad.html.twig\", array(\"v\" => \$ad));
    }
});-->

{% endblock %}

";
    }
}
