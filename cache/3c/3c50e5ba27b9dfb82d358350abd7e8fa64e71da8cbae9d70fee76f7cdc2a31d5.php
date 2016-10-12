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
        echo "<h1>All Ads</h1> ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<a href=\"/postad\">Post an Add</a>
<a href=\"/register\">Register</a>
";
        // line 8
        if ((isset($context["adList"]) ? $context["adList"] : null)) {
            // line 9
            echo "    <table border=\"1\">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Price</th>
            <th>Name</th>
            <th>Operations</th>
        </tr>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adList"]) ? $context["adList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 18
                echo "            <tr>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "ID", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "pName", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "image", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "price", array()), "html", null, true);
                echo "</td> 
                <td><a href='/postad/";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "ID", array()), "html", null, true);
                echo "'>Edit Ad</a></td>
                
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </table>
    ";
        } else {
            // line 29
            echo "        <p>There are no ads yet</p>   
";
        }
        // line 31
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
        return array (  95 => 31,  91 => 29,  87 => 27,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  58 => 18,  54 => 17,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block head %}<h1>All Ads</h1> {% endblock %} 

{% block content %}
<a href=\"/postad\">Post an Add</a>
<a href=\"/register\">Register</a>
{% if adList %}
    <table border=\"1\">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Price</th>
            <th>Name</th>
            <th>Operations</th>
        </tr>
            {% for ad in adList %}
            <tr>
                <td>{{ad.ID}}</td>
                <td>{{ad.pName}}</td>
                <td>{{ad.image}}</td>
                <td>{{ad.price}}</td> 
                <td><a href='/postad/{{ad.ID}}'>Edit Ad</a></td>
                
            </tr>
            {% endfor %}
    </table>
    {% else %}
        <p>There are no ads yet</p>   
{% endif %}

{% endblock %}{# empty Twig template #}
";
    }
}
