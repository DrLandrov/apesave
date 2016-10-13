<?php

/* contactus.html.twig */
class __TwigTemplate_beeed87dd0c90581a3730141dab5481ca9cf8eb9e720c3f031a70d290cf889f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "contactus.html.twig", 1);
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
        echo "SEND COMMENT";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "            
<h1>SEND A COMMENT OR IDEA</h1>

";
        // line 9
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 10
            echo "    <ul id=\"error\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 12
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </ul>
";
        }
        // line 16
        echo "
<form id=\"comment\" method=\"post\">
    FIRST NAME: <br> <input type=\"text\" name=\"uName\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "uName", array()), "html", null, true);
        echo "\"><br>
    LAST NAME: <br> <input type=\"text\" name=\"fName\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "fName", array()), "html", null, true);
        echo "\"><br>
    EMAIL: <br> <input type=\"text\" name=\"lName\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "lName", array()), "html", null, true);
        echo "\"><br>
    COMMENT: <br> <input type=\"text\" name=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "email", array()), "html", null, true);
        echo "\"><br>
    <input type=\"submit\" value=\"Send Comment\">
</form>

";
    }

    public function getTemplateName()
    {
        return "contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 16,  61 => 14,  52 => 12,  48 => 11,  45 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}SEND COMMENT{% endblock %}

{% block content %}
            
<h1>SEND A COMMENT OR IDEA</h1>

{% if errorList %}
    <ul id=\"error\">
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form id=\"comment\" method=\"post\">
    FIRST NAME: <br> <input type=\"text\" name=\"uName\" value=\"{{v.uName}}\"><br>
    LAST NAME: <br> <input type=\"text\" name=\"fName\" value=\"{{v.fName}}\"><br>
    EMAIL: <br> <input type=\"text\" name=\"lName\" value=\"{{v.lName}}\"><br>
    COMMENT: <br> <input type=\"text\" name=\"email\" value=\"{{v.email}}\"><br>
    <input type=\"submit\" value=\"Send Comment\">
</form>

{% endblock %}
    ";
    }
}
