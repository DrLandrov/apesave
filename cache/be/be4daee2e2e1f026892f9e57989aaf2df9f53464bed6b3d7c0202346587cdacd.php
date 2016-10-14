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
    <header>
        <div id=\"menu\"><ul><li><a href=\"/index\">Home</a></li><li><a href=\"/products\">Shop</a></li><li><a href=\"/sell\">Sell</a></li><li><a href=\"/myaccount\">My Account</a></li><li>";
        // line 10
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            echo "<a href=\"/logout\">Logout";
        } else {
            echo "<a href=\"/login\">Login";
        }
        echo "</a></li><li><a href=\"/contactus\">Contact Us</a></li><li><input type=\"text\" name=\"search\" placeholder=\"Search..\"></li></ul></div>
    </header>
    <body>
        
        <div id=\"centerContent\">
            
            <div id=\"content\">";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
            
        </div>
    </body>
    <footer id=\"footer\">                
                    &copy; Copyright 2016 by <a href=\"http://domain.invalid/\">ApeSave</a>.
            </footer>
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

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  71 => 7,  68 => 6,  63 => 5,  51 => 16,  38 => 10,  34 => 8,  32 => 6,  28 => 5,  22 => 1,);
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
    <header>
        <div id=\"menu\"><ul><li><a href=\"/index\">Home</a></li><li><a href=\"/products\">Shop</a></li><li><a href=\"/sell\">Sell</a></li><li><a href=\"/myaccount\">My Account</a></li><li>{% if sessionUser %}<a href=\"/logout\">Logout{% else %}<a href=\"/login\">Login{% endif %}</a></li><li><a href=\"/contactus\">Contact Us</a></li><li><input type=\"text\" name=\"search\" placeholder=\"Search..\"></li></ul></div>
    </header>
    <body>
        
        <div id=\"centerContent\">
            
            <div id=\"content\">{% block content %}{% endblock %}</div>
            
        </div>
    </body>
    <footer id=\"footer\">                
                    &copy; Copyright 2016 by <a href=\"http://domain.invalid/\">ApeSave</a>.
            </footer>
</html>";
    }
}
