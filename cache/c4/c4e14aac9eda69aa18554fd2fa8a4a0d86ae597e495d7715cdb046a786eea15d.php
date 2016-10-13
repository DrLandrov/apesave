<?php

/* login.html.twig */
class __TwigTemplate_0573300c835c9b8dc6c370cbc422e11aa02b5e138fb6a70b7c19663517af9e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Successful registration";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Login</h1>
    ";
        // line 8
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 9
            echo "        <p> YOU ARE ALREADY LOGGED IN! <a href=\"/myaccount\">GO TO YOUR ACCOUNT</a>
    
    ";
        }
        // line 12
        echo "    ";
        if ((isset($context["loginFailed"]) ? $context["loginFailed"] : null)) {
            // line 13
            echo "        <p>Invalid username or password</p>
    ";
        }
        // line 15
        echo "
    <form method=\"post\">
        Email:<br> <input type=\"text\" name=\"email\"><br>
        Password:<br> <input type=\"password\" name=\"pass\"><br>
        <input type=\"submit\" value=\"Login\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 13,  49 => 12,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}Successful registration{% endblock %}

{% block content %}

    <h1>Login</h1>
    {% if sessionUser %}
        <p> YOU ARE ALREADY LOGGED IN! <a href=\"/myaccount\">GO TO YOUR ACCOUNT</a>
    
    {% endif %}
    {% if loginFailed %}
        <p>Invalid username or password</p>
    {% endif %}

    <form method=\"post\">
        Email:<br> <input type=\"text\" name=\"email\"><br>
        Password:<br> <input type=\"password\" name=\"pass\"><br>
        <input type=\"submit\" value=\"Login\">
    </form>

{% endblock %}
";
    }
}
