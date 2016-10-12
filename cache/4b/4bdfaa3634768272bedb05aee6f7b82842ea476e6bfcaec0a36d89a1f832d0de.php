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
        echo "    ";
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            // line 7
            echo "        <a href=\"/sell\">Post an Add</a>
    ";
        } else {
            // line 9
            echo "        <a href=\"/register\">Register</a>
    ";
        }
        // line 11
        echo "    ";
        if ((isset($context["adList"]) ? $context["adList"] : null)) {
            // line 12
            echo "        <table border=\"1\">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Price</th>
                <th>Name</th>
                <th>Operations</th>
            </tr>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adList"]) ? $context["adList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 21
                echo "                <tr>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "ID", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "pName", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "image", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "price", array()), "html", null, true);
                echo "</td> 
                    <td><a href='/postad/";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "ID", array()), "html", null, true);
                echo "'>Edit Ad</a></td>

                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </table>
    ";
        } else {
            // line 32
            echo "        <p>There are no ads yet</p>   
    ";
        }
        // line 34
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
        return array (  103 => 34,  99 => 32,  95 => 30,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  66 => 21,  62 => 20,  52 => 12,  49 => 11,  45 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block head %}<h1>All Ads</h1> {% endblock %} 

{% block content %}
    {% if sessionUser %}
        <a href=\"/sell\">Post an Add</a>
    {% else %}
        <a href=\"/register\">Register</a>
    {% endif %}
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
