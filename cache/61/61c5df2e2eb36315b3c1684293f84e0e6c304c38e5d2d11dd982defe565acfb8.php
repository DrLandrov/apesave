<?php

/* products.html.twig */
class __TwigTemplate_b34f28d8daa4fc0664f4fb71fc0e8dac7edfe0f830a823350245b3cde8482695 extends Twig_Template
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
        echo "         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forSaleItems"]) ? $context["forSaleItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
            // line 5
            echo "           
            <div id=\"listing\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "<br>
                <div id=\"pimage\"><a href=\"/buyit/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "productID", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
            echo "\"></a></div><br>
                <center><b><u>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
            echo "</u></b></center><br>
                Price:<b> \$";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
            echo "</b><br>
                Item Location: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
            echo "<br>
                Description: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "description", array()), "html", null, true);
            echo "<br>
                <br>
                
                <button id=\"buyitbutton\" onclick=\"location.href='/buyit/";
            // line 15
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
        return array (  68 => 15,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  44 => 8,  40 => 7,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block content %}
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
