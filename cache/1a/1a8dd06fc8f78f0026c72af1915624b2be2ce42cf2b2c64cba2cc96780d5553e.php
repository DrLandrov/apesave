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
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        echo "<h1>Sell Item</h1>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 7
            echo "    <ul>
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </ul>
";
        }
        // line 13
        echo "
<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">
    <!--No Post get for image in index file-->
    Product Name: <input type=\"text\" name=\"pName\"><br>
    Image: <input type=\"file\" name=\"image\"><br> 
    Description: <textarea cols=\"20\" rows=\"4\" name=\"description\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "description", array()), "html", null, true);
        echo "</textarea><br>
    Price: <input type=\"text\" name=\"price\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "price", array()), "html", null, true);
        echo "\"><br>
    Location:<input type=\"text\" name =\"location\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "location", array()), "html", null, true);
        echo "\"><br>
    <input type=\"submit\" value=\"postadd\">
</form>

";
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
        return array (  75 => 20,  71 => 19,  67 => 18,  60 => 13,  56 => 11,  47 => 9,  43 => 8,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block head %}<h1>Sell Item</h1>{% endblock %}

{% block content %}
{% if errorList %}
    <ul>
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">
    <!--No Post get for image in index file-->
    Product Name: <input type=\"text\" name=\"pName\"><br>
    Image: <input type=\"file\" name=\"image\"><br> 
    Description: <textarea cols=\"20\" rows=\"4\" name=\"description\">{{v.description}}</textarea><br>
    Price: <input type=\"text\" name=\"price\" value=\"{{v.price}}\"><br>
    Location:<input type=\"text\" name =\"location\" value=\"{{v.location}}\"><br>
    <input type=\"submit\" value=\"postadd\">
</form>

{% endblock %}

";
    }
}
