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
                echo "    
       <div id=\"listing\">
        <ul>
        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["myItemsForSale"]) ? $context["myItemsForSale"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
                    // line 13
                    echo "                <li><img height=100 src=\"/upload/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
                    echo "\"></li>
                <li id=\"itemrow";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
                    echo "\"></li>
                <li>";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
                    echo "</li>
                <li>";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
                    echo "</li>
                <li>";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
                    echo "</li>
                <li>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "description", array()), "html", null, true);
                    echo "</li>
            </ul>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        </div>
    
    ";
            } else {
                // line 24
                echo "        <p>YOU DONT HAVE ANYTHING FOR SALE</p>   
";
            }
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        <p>Please login to access My Account</p>
        <a href=\"/login\">Login</a>
    ";
        }
        // line 30
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
        return array (  95 => 30,  90 => 27,  87 => 26,  83 => 24,  78 => 21,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  48 => 13,  44 => 12,  39 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}



{% block content %}
    {% if sessionUser %}
        <a href=\"/sell\">Sell</a>
{% if myItemsForSale %}
    
       <div id=\"listing\">
        <ul>
        {% for ci in myItemsForSale %}
                <li><img height=100 src=\"/upload/{{ ci.image}}\"></li>
                <li id=\"itemrow{{ci.ID}}\"></li>
                <li>{{ci.pName}}</li>
                <li>{{ci.pPrice}}</li>
                <li>{{ci.pLocation}}</li>
                <li>{{ci.description}}</li>
            </ul>
            {% endfor %}
        </div>
    
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
