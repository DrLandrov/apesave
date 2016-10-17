<?php

/* login_success.html.twig */
class __TwigTemplate_8e88fd0e1efe30dbde5a5ddcfc4cd71baa8a763c4f0a25fc27ff3f99c3915f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login_success.html.twig", 1);
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
        echo "Successful login";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
<h1>Login successful</h1>

<a href=\"/\">Click to continue</a>

";
    }

    public function getTemplateName()
    {
        return "login_success.html.twig";
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

{% block title %}Successful login{% endblock %}

{% block content %}
    
<h1>Login successful</h1>

<a href=\"/\">Click to continue</a>

{% endblock %}
";
    }
}
