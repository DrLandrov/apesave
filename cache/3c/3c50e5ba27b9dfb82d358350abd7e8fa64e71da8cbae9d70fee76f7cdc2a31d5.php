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
        echo "    ";
        if ((isset($context["adList"]) ? $context["adList"] : null)) {
            // line 10
            echo "        <table border=\"1\">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Price</th>
                <th>Name</th>
                <th>Operations</th>
            </tr>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adList"]) ? $context["adList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 19
                echo "                <tr>
                    <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "ID", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "pName", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "image", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "price", array()), "html", null, true);
                echo "</td> 
                    <td><a href='/postad/";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "ID", array()), "html", null, true);
                echo "'>Edit Ad</a></td>

                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </table>
    ";
        } else {
            // line 30
            echo "        <p>There are no ads yet</p>   
    ";
        }
        // line 32
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
        return array (  96 => 32,  92 => 30,  88 => 28,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  59 => 19,  55 => 18,  45 => 10,  42 => 9,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

{% endblock %}
";
    }
}
