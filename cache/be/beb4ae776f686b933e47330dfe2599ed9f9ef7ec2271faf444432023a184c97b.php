<?php

/* logoutpage.html.twig */
class __TwigTemplate_f064e040eaa06a7681aa0664e5212a943c29f05822ca639cd315d3b6ddf87b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "logoutpage.html.twig", 1);
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
        echo "Log Out";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Logout</h1>
    ";
        // line 8
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 9
            echo "        <p> Are you sure you want to logout? <br>
        <a href=\"/myaccount\">No</a> or <a href=\"/logout\">Yes</a>
";
        }
    }

    public function getTemplateName()
    {
        return "logoutpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}Log Out{% endblock %}

{% block content %}

    <h1>Logout</h1>
    {% if sessionUser %}
        <p> Are you sure you want to logout? <br>
        <a href=\"/myaccount\">No</a> or <a href=\"/logout\">Yes</a>
{% endif %}
{% endblock %}
";
    }
}
