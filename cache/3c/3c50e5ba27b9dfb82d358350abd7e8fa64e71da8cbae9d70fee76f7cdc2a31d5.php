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
        echo "<a href=\"/sell\">Post an Add</a>
<a href=\"/register\">Register</a>
";
        // line 6
        if ((isset($context["adList"]) ? $context["adList"] : null)) {
            // line 7
            echo "    <table border=\"1\">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Price</th>
            <th>Name</th>
            <th>Operations</th>
        </tr>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adList"]) ? $context["adList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 16
                echo "            <tr>
                <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "ID", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "pName", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "image", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "price", array()), "html", null, true);
                echo "</td> 
                <td><a href='/postad/";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "ID", array()), "html", null, true);
                echo "'>Edit Ad</a></td>
                
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </table>
    ";
        } else {
            // line 27
            echo "        <p>There are no ads yet</p>   
";
        }
        // line 29
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
        return array (  88 => 29,  84 => 27,  80 => 25,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  51 => 16,  47 => 15,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block content %}
<a href=\"/sell\">Post an Add</a>
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
