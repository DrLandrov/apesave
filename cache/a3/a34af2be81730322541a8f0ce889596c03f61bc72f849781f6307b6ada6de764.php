<?php

/* register_success.html.twig */
class __TwigTemplate_1bd493da69cf081484ba0a6c7fe0305df60399471a7681227ba2a75fc4b7f937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register_success.html.twig", 1);
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
        echo "    <h1>Registration successful</h1>
    <a href=\"/login\">Click to login</a>
";
    }

    public function getTemplateName()
    {
        return "register_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}Successful registration{% endblock %}

{% block content %}
    <h1>Registration successful</h1>
    <a href=\"/login\">Click to login</a>
{% endblock %}
";
    }
}
