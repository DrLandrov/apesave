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
        echo "    
        <a href=\"/register\">Register</a>
        <a href=\"/login\">Login</a><br>
         ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forSaleItems"]) ? $context["forSaleItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
            // line 8
            echo "           
            <div id=\"listing\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "<br>
                <div id=\"pimage\"><a href=\"/buyit/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "productID", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
            echo "\"></a></div><br>
                <center><b><u>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
            echo "</u></b></center><br>
                Price:<b> \$";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
            echo "</b><br>
                Item Location: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
            echo "<br>
                Description: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "description", array()), "html", null, true);
            echo "<br>
                <br>
                <button id=\"buyitbutton\" onclick=\"location.href='/buyit/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "productID", array()), "html", null, true);
            echo "'\">Buy It</button> 
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  71 => 17,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  48 => 11,  44 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block content %}
    
        <a href=\"/register\">Register</a>
        <a href=\"/login\">Login</a><br>
         {% for ci in forSaleItems %}
           
            <div id=\"listing\">
                {{ci.ID}}<br>
                <div id=\"pimage\"><a href=\"/buyit/{{ci.productID}}\"><img src=\"{{ci.image}}\"></a></div><br>
                <center><b><u>{{ci.pName}}</u></b></center><br>
                Price:<b> \${{ci.pPrice}}</b><br>
                Item Location: {{ci.pLocation}}<br>
                Description: {{ci.description}}<br>
                <br>
                <button id=\"buyitbutton\" onclick=\"location.href='/buyit/{{ci.productID}}'\">Buy It</button> 
        </div>
        {% endfor %}
{% endblock %}
";
    }
}
