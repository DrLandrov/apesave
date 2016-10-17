<?php

/* register.html.twig */
class __TwigTemplate_ac95706749431053b1fc5e5d5316cd283c6539910e2fa9c01acb966c6c2de3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
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
        echo "Register user";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "            
<h1>Register user</h1>
";
        // line 8
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 9
            echo "        <p> YOU ARE ALREADY REGISTERED! <br>
            Would you like to <a href=\"/myaccount\">go to your account</a> OR <a href=\"/logout\">logout</a>
    
    
    ";
        } else {
            // line 14
            echo "        
";
            // line 15
            if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
                // line 16
                echo "    <ul id=\"error\">
    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 18
                    echo "        <li>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "    </ul>
";
            }
            // line 22
            echo "   
<form id=\"register\" method=\"post\">
    Username: <br> <input type=\"text\" name=\"uName\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "uName", array()), "html", null, true);
            echo "\"><br>
    First Name: <br> <input type=\"text\" name=\"fName\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "fName", array()), "html", null, true);
            echo "\"><br>
    Last Name: <br> <input type=\"text\" name=\"lName\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "lName", array()), "html", null, true);
            echo "\"><br>
    Email: <br> <input type=\"text\" name=\"email\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "email", array()), "html", null, true);
            echo "\"><br>
    Password: <br> <input type=\"password\" name=\"pass1\"><br>
    Password (repeated): <br> <input type=\"password\" name=\"pass2\"><br>
    <input type=\"submit\" value=\"Register\">
</form>
    
";
        }
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 22,  72 => 20,  63 => 18,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block title %}Register user{% endblock %}

{% block content %}
            
<h1>Register user</h1>
{% if sessionUser %}
        <p> YOU ARE ALREADY REGISTERED! <br>
            Would you like to <a href=\"/myaccount\">go to your account</a> OR <a href=\"/logout\">logout</a>
    
    
    {% else %}
        
{% if errorList %}
    <ul id=\"error\">
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}
   
<form id=\"register\" method=\"post\">
    Username: <br> <input type=\"text\" name=\"uName\" value=\"{{v.uName}}\"><br>
    First Name: <br> <input type=\"text\" name=\"fName\" value=\"{{v.fName}}\"><br>
    Last Name: <br> <input type=\"text\" name=\"lName\" value=\"{{v.lName}}\"><br>
    Email: <br> <input type=\"text\" name=\"email\" value=\"{{v.email}}\"><br>
    Password: <br> <input type=\"password\" name=\"pass1\"><br>
    Password (repeated): <br> <input type=\"password\" name=\"pass2\"><br>
    <input type=\"submit\" value=\"Register\">
</form>
    
{% endif %}
{% endblock %}
    ";
    }
}
