<?php

/* products.html.twig */
class __TwigTemplate_3f9482da578cf84afffa00c9d4dc79a00391160009b7775c7adb885668e8e979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "products.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 5
            echo "        <a href=\"/sell\">Post an Add</a>
    ";
        } else {
            // line 7
            echo "        <a href=\"/register\">Register</a>
    ";
        }
        // line 9
        echo "    
        <table border=\"1\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forSaleItems"]) ? $context["forSaleItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
            // line 12
            echo "            <tr>
                <td id=\"itemrow";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "\"></td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "description", array()), "html", null, true);
            echo "</td>
                <td><img height=100 src=\"/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
            echo "\"></td>
            </tr>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "   
";
    }

    public function getTemplateName()
    {
        return "products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  50 => 12,  46 => 11,  42 => 9,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block content %}
    {% if sessionUser %}
        <a href=\"/sell\">Post an Add</a>
    {% else %}
        <a href=\"/register\">Register</a>
    {% endif %}
    
        <table border=\"1\">
        {% for ci in forSaleItems %}
            <tr>
                <td id=\"itemrow{{ci.ID}}\"></td>
                <td>{{ci.pName}}</td>
                <td>{{ci.pPrice}}</td>
                <td>{{ci.pLocation}}</td>
                <td>{{ci.description}}</td>
                <td><img height=100 src=\"/{{ ci.image}}\"></td>
            </tr>
            </table>
        {% endfor %}
   
{% endblock %}
";
    }
}
