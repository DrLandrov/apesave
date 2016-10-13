<?php

/* products.html.twig */
class __TwigTemplate_b8fde550cdd5d72ca30619626470f568dadb3a9c77f04f3eaa7bf96f419f0b69 extends Twig_Template
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
            echo "            <tr id=\"itemrow";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "\">
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "description", array()), "html", null, true);
            echo "</td>
                <td><img height=100 src=\"/upload/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
            echo "\"></td>
            </tr>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
        return array (  81 => 21,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  50 => 12,  46 => 11,  42 => 9,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
            <tr id=\"itemrow{{ci.ID}}\">
                <td>{{ci.pName}}</td>
                <td>{{ci.pPrice}}</td>
                <td>{{ci.pLocation}}</td>
                <td>{{ci.description}}</td>
                <td><img height=100 src=\"/upload/{{ ci.image}}\"></td>
            </tr>
            </table>
        {% endfor %}
   
    

{% endblock %}
";
    }
}
