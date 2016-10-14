<?php

/* sell.html.twig */
class __TwigTemplate_4aa73361053f5272fd19b57eece953785e4b67a4efa63cf14cb0268d9c04c2e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "sell.html.twig", 1);
        $this->blocks = array(
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            echo "   
        ";
            // line 7
            if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
                // line 8
                echo "            <ul>
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 10
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            </ul>
        ";
            }
            // line 14
            echo "
        <form method=\"post\" enctype=\"multipart/form-data\">
            <!--No Post get for image in index file-->
            <h1>Sell Item</h1>
            Product Name:<br> <input type=\"text\" name=\"name\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "pName", array()), "html", null, true);
            echo "\"><br>
            Image:<br> <input type=\"file\" name=\"image\"><br> 
            Description:<br> <textarea cols=\"20\" rows=\"4\" name=\"description\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "description", array()), "html", null, true);
            echo "</textarea><br>
            Price:<br> <input type=\"text\" name=\"price\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "pPrice", array()), "html", null, true);
            echo "\"><br>
            Location:<br> <input type=\"text\" name =\"location\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "pLocation", array()), "html", null, true);
            echo "\"><br>
            <input type=\"submit\" value=\"sell\">
        </form>
    ";
        } else {
            // line 26
            echo "        <p>Please login to sell</p>
        <a href=\"/login\">Login</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "sell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  77 => 22,  73 => 21,  69 => 20,  64 => 18,  58 => 14,  54 => 12,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}



{% block content %}
    {% if sessionUser %}   
        {% if errorList %}
            <ul>
                {% for error in errorList %}
                    <li>{{ error }}</li>
                    {% endfor %}
            </ul>
        {% endif %}

        <form method=\"post\" enctype=\"multipart/form-data\">
            <!--No Post get for image in index file-->
            <h1>Sell Item</h1>
            Product Name:<br> <input type=\"text\" name=\"name\" value=\"{{v.pName}}\"><br>
            Image:<br> <input type=\"file\" name=\"image\"><br> 
            Description:<br> <textarea cols=\"20\" rows=\"4\" name=\"description\">{{v.description}}</textarea><br>
            Price:<br> <input type=\"text\" name=\"price\" value=\"{{v.pPrice}}\"><br>
            Location:<br> <input type=\"text\" name =\"location\" value=\"{{v.pLocation}}\"><br>
            <input type=\"submit\" value=\"sell\">
        </form>
    {% else %}
        <p>Please login to sell</p>
        <a href=\"/login\">Login</a>
    {% endif %}
{% endblock %}

";
    }
}
