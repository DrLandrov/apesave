<?php

/* myaccount.html.twig */
class __TwigTemplate_597f13f656bb4fe5059b2e7a9d1d83ea60271dd1e3b7e4ac82b916b3cc082ddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "myaccount.html.twig", 1);
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
            // line 7
            echo "        <a href=\"/sell\">Sell</a>
";
            // line 8
            if ((isset($context["myItemsForSale"]) ? $context["myItemsForSale"] : null)) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["myItemsForSale"]) ? $context["myItemsForSale"] : null));
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
                <td><a href='/sell/";
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
                echo "        <p>YOU DONT HAVE ANYTHING FOR SALE</p>   
";
            }
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "        <p>Please login to access My Account</p>
        <a href=\"/login\">Login</a>
    ";
        }
        // line 35
        echo "

";
    }

    public function getTemplateName()
    {
        return "myaccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  93 => 32,  90 => 31,  86 => 29,  82 => 27,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  53 => 18,  49 => 17,  39 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}



{% block content %}
    {% if sessionUser %}
        <a href=\"/sell\">Sell</a>
{% if myItemsForSale %}
    <table border=\"1\">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Price</th>
            <th>Name</th>
            <th>Operations</th>
        </tr>
            {% for ad in myItemsForSale %}
            <tr>
                <td>{{ad.ID}}</td>
                <td>{{ad.pName}}</td>
                <td>{{ad.image}}</td>
                <td>{{ad.price}}</td> 
                <td><a href='/sell/{{ad.ID}}'>Edit Ad</a></td>
                
            </tr>
            {% endfor %}
    </table>
    {% else %}
        <p>YOU DONT HAVE ANYTHING FOR SALE</p>   
{% endif %}
    {% else %}
        <p>Please login to access My Account</p>
        <a href=\"/login\">Login</a>
    {% endif %}


{% endblock %}{# empty Twig template #}
";
    }
}
