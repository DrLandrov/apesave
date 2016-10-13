<?php

/* master.html.twig */
class __TwigTemplate_a7528dc639a6e387dc10cd573f3ab2725bbd9cb2ed119d6eb17d77e3b121a3bb extends Twig_Template
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
    <header><div id=\"menu\"><ul><li><a href=\"/index\">Home</a></li><li><a href=\"/products\">Shop</a></li><li><a href=\"/products\">Buy</a></li><li><a href=\"/sell\">Sell</a></li><li><a href=\"/myaccount\">My Account</a></li><li><a href=\"/login\">Login</a></li><li><a href=\"/contactus\">Contact Us</a></li></ul></div><input type=\"text\" name=\"search\" placeholder=\"Search..\">
    </header>
    <body>
        
        <div id=\"centerContent\">
            <div id=\"content\">";
        // line 14
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

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  62 => 7,  59 => 6,  54 => 5,  42 => 14,  34 => 8,  32 => 6,  28 => 5,  22 => 1,);
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
    <header><div id=\"menu\"><ul><li><a href=\"/index\">Home</a></li><li><a href=\"/products\">Shop</a></li><li><a href=\"/products\">Buy</a></li><li><a href=\"/sell\">Sell</a></li><li><a href=\"/myaccount\">My Account</a></li><li><a href=\"/login\">Login</a></li><li><a href=\"/contactus\">Contact Us</a></li></ul></div><input type=\"text\" name=\"search\" placeholder=\"Search..\">
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
