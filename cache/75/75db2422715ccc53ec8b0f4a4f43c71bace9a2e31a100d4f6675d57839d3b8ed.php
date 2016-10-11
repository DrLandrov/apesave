<?php

/* index.html.twig */
class __TwigTemplate_a26e97307f16c38e313839c87f742bc49c7dc31e2bd8a1d6077b8a101e8c60c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
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
        echo "APE SAVE";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
<h1>Welcome to Ape Save</h1>

";
        // line 9
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 10
            echo "    <p>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sessionUser"]) ? $context["sessionUser"] : null), "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sessionUser"]) ? $context["sessionUser"] : null), "email", array()), "html", null, true);
            echo ").
        <a href=\"/sell\">Click to sell</a> You may <a href=\"/logout\">logout</a>.</p>
";
        } else {
            // line 13
            echo "<p><a href=\"/login\">BUY/SELL</a> or <a href=\"/register\">REGISTER</a> or <a href=\"/sell\">SELL</a></p>
";
        }
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  54 => 13,  45 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}APE SAVE{% endblock %}

{% block content %}
    
<h1>Welcome to Ape Save</h1>

{% if sessionUser %}
    <p>Hello {{sessionUser.name}} ({{sessionUser.email}}).
        <a href=\"/sell\">Click to sell</a> You may <a href=\"/logout\">logout</a>.</p>
{% else %}
<p><a href=\"/login\">BUY/SELL</a> or <a href=\"/register\">REGISTER</a> or <a href=\"/sell\">SELL</a></p>
{% endif %}

{% endblock %}
";
    }
}
