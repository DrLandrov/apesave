<?php

/* index.html.twig */
class __TwigTemplate_7a1544ad81aa47e1953835ecf9c38361d5f4e9f6781b1801bf5443eccfa75f16 extends Twig_Template
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

    ";
        // line 8
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 9
            echo "        <p>Hello, ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sessionUser"]) ? $context["sessionUser"] : null), "uName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sessionUser"]) ? $context["sessionUser"] : null), "email", array()), "html", null, true);
            echo ".
        
        <br>
        <p><div id=\"buy\"><a href=\"/sell\">SELL</a></div><div id=\"browse\"><a href=\"/products\">SHOP</a></div></p>
    
";
        } else {
            // line 15
            echo "<h1>Welcome to Ape Save</h1>
<p><div id=\"buy\"><a href=\"/sell\">SELL</a></div><div id=\"reg\"><a href=\"/register\">REGISTER</a></div><div id=\"browse\"><a href=\"/products\">SHOP</a></div></p>
";
        }
        // line 18
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
        return array (  61 => 18,  56 => 15,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}APE SAVE{% endblock %}

{% block content %}
    

    {% if sessionUser %}
        <p>Hello, {{sessionUser.uName}} {{sessionUser.email}}.
        
        <br>
        <p><div id=\"buy\"><a href=\"/sell\">SELL</a></div><div id=\"browse\"><a href=\"/products\">SHOP</a></div></p>
    
{% else %}
<h1>Welcome to Ape Save</h1>
<p><div id=\"buy\"><a href=\"/sell\">SELL</a></div><div id=\"reg\"><a href=\"/register\">REGISTER</a></div><div id=\"browse\"><a href=\"/products\">SHOP</a></div></p>
{% endif %}

{% endblock %}
";
    }
}
