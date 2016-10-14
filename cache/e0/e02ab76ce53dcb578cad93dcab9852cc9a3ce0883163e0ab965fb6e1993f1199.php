<?php

/* buyit.html.twig */
class __TwigTemplate_9bb3ce466cebbe542015aca52e3bcbabd3fe22ca9947a5578efc5c326779b4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "buyit.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["itemDescription"]) ? $context["itemDescription"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
            // line 8
            echo "           
            <div id=\"listing\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "<br>
                <div id=\"pimage\"><img height=100 src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
            echo "\"></div><br>
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
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "   
";
    }

    public function getTemplateName()
    {
        return "buyit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block content %}
    
        <a href=\"/register\">Register</a>
        <a href=\"/login\">Login</a><br>
         {% for ci in itemDescription %}
           
            <div id=\"listing\">
                {{ci.ID}}<br>
                <div id=\"pimage\"><img height=100 src=\"{{ci.image}}\"></div><br>
                <center><b><u>{{ci.pName}}</u></b></center><br>
                Price:<b> \${{ci.pPrice}}</b><br>
                Item Location: {{ci.pLocation}}<br>
                Description: {{ci.description}}<br>
                <br>
        </div>
        {% endfor %}
   
{% endblock %}
";
    }
}
