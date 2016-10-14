<?php

/* logout_success.html.twig */
class __TwigTemplate_b6f411d3bce6a49614b47ae12df2a0ef8607a3615b457fc7289c31e26a2fe0e9 extends Twig_Template
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
