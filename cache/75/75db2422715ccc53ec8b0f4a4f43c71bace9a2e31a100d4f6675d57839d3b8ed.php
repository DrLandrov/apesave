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
        // line 8
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 9
            echo "    <p>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sessionUser"]) ? $context["sessionUser"] : null), "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sessionUser"]) ? $context["sessionUser"] : null), "email", array()), "html", null, true);
            echo ").
        <a href=\"/sell\">Click to sell</a> You may <a href=\"/logout\">logout</a>.</p>
";
        } else {
            // line 12
            echo "<p><div id=\"buy\"><a href=\"/login\">BUY/SELL</a></div><div id=\"reg\"><a href=\"/register\">REGISTER</a></div><div id=\"browse\"><a href=\"/products\">BROWSE</a></div></p>
";
        }
        // line 14
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
        return array (  57 => 14,  53 => 12,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
<p><div id=\"buy\"><a href=\"/login\">BUY/SELL</a></div><div id=\"reg\"><a href=\"/register\">REGISTER</a></div><div id=\"browse\"><a href=\"/products\">BROWSE</a></div></p>
{% endif %}

{% endblock %}
";
    }
}
