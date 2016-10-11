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
    <body>
        <div id=\"centerContent\">
            <div id=\"content\">";
        // line 11
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

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  58 => 7,  55 => 6,  50 => 5,  39 => 11,  34 => 8,  32 => 6,  28 => 5,  22 => 1,);
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
