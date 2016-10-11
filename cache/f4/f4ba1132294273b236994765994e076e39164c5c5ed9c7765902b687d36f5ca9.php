<?php

/* logout_success.html.twig */
class __TwigTemplate_0d4b3419a6c67f10c72526559e6b5f8b389820ee513a4bbde0c62f2c1afa4933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "logout_success.html.twig", 1);
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
        echo "Logged out";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
<h1>Logged out</h1>

<a href=\"/\">Click to continue</a>

";
    }

    public function getTemplateName()
    {
        return "logout_success.html.twig";
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

{% block title %}Logged out{% endblock %}

{% block content %}
    
<h1>Logged out</h1>

<a href=\"/\">Click to continue</a>

{% endblock %}";
    }
}
