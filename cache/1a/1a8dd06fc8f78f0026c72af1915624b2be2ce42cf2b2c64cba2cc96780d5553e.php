<?php

/* sell.html.twig */
class __TwigTemplate_0723ca4eee01a820f40956012fb31979c73c24c23b91eab0014a6ad060410843 extends Twig_Template
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
<<<<<<< HEAD
        <form method=\"post\" enctype=\"multipart/form-data\">
=======
        <form  method=\"post\" enctype=\"multipart/form-data\">
>>>>>>> 6f8f34866fb4e4f7df7aad49ea66c5fdb961edb1
            <!--No Post get for image in index file-->
            <h1>Sell Item</h1>
            Product Name:<br> <input type=\"text\" name=\"pName\"><br>
            Image:<br> <input type=\"file\" name=\"image\"><br> 
            Description:<br> <textarea cols=\"20\" rows=\"4\" name=\"description\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "description", array()), "html", null, true);
            echo "</textarea><br>
            Price:<br> <input type=\"text\" name=\"price\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "price", array()), "html", null, true);
            echo "\"><br>
            Location:<br> <input type=\"text\" name =\"location\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "location", array()), "html", null, true);
            echo "\"><br>
            <input type=\"submit\" value=\"sell\">
        </form>
    ";
        } else {
            // line 30
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
        return array (  85 => 30,  78 => 26,  74 => 25,  70 => 24,  58 => 14,  54 => 12,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 6,  28 => 5,  11 => 1,);
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

<<<<<<< HEAD
        <form method=\"post\" enctype=\"multipart/form-data\">
=======
        <form  method=\"post\" enctype=\"multipart/form-data\">
>>>>>>> 6f8f34866fb4e4f7df7aad49ea66c5fdb961edb1
            <!--No Post get for image in index file-->
            <h1>Sell Item</h1>
            Product Name:<br> <input type=\"text\" name=\"pName\"><br>
            Image:<br> <input type=\"file\" name=\"image\"><br> 
            Description:<br> <textarea cols=\"20\" rows=\"4\" name=\"description\">{{v.description}}</textarea><br>
            Price:<br> <input type=\"text\" name=\"price\" value=\"{{v.price}}\"><br>
            Location:<br> <input type=\"text\" name =\"location\" value=\"{{v.location}}\"><br>
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
