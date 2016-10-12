<?php

/* master.html.twig */
class __TwigTemplate_1bbd72419c847c5ab5a692855b373a7395ba64c46bd2ce46c729d53d348b3b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'menucontent' => array($this, 'block_menucontent'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"/styles.css\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        <div id=\"menu\">";
        // line 10
        $this->displayBlock('menucontent', $context, $blocks);
        echo "</div>
        <div id=\"centerContent\">
            <div id=\"content\">";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
            <div id=\"footer\">                
                    &copy; Copyright 2016 by <a href=\"http://domain.invalid/\">you</a>.
            </div>
        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        ";
    }

    // line 10
    public function block_menucontent($context, array $blocks = array())
    {
        echo "<ul><li>Home</li><li>Shop</li><li>Buy</li><li>Sell</li><li>My Account</li><li>Contact Us</li></ul>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  67 => 10,  63 => 7,  60 => 6,  55 => 5,  44 => 12,  39 => 10,  35 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"/styles.css\" />
        <title>{% block title %}{% endblock %}</title>
        {% block head %}
        {% endblock %}
    </head>
    <body>
        <div id=\"menu\">{% block menucontent %}<ul><li>Home</li><li>Shop</li><li>Buy</li><li>Sell</li><li>My Account</li><li>Contact Us</li></ul>{% endblock %}</div>
        <div id=\"centerContent\">
            <div id=\"content\">{% block content %}{% endblock %}</div>
            <div id=\"footer\">                
                    &copy; Copyright 2016 by <a href=\"http://domain.invalid/\">you</a>.
            </div>
        </div>
    </body>
</html>";
    }
}
