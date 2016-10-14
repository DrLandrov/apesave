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
        echo "         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forSaleItems"]) ? $context["forSaleItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
            // line 5
            echo "         <div id=\"listing\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "<br>
                <div id=\"pimage\"><a href=\"/buyit\"><img height=100 src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
            echo "\"></a></div><br>
                <center><b><u>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
            echo "</u></b></center><br>
                Price:<b> \$";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
            echo "</b><br>
                Item Location: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
            echo "<br>
                Description: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "description", array()), "html", null, true);
            echo "<br>
                <br>
                <button id=\"buyitbutton\" onclick=\"location.href='/buyit'\">Buy It</button><br>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block content %}
         {% for ci in forSaleItems %}
         <div id=\"listing\">
                {{ci.ID}}<br>
                <div id=\"pimage\"><a href=\"/buyit\"><img height=100 src=\"{{ci.image}}\"></a></div><br>
                <center><b><u>{{ci.pName}}</u></b></center><br>
                Price:<b> \${{ci.pPrice}}</b><br>
                Item Location: {{ci.pLocation}}<br>
                Description: {{ci.description}}<br>
                <br>
                <button id=\"buyitbutton\" onclick=\"location.href='/buyit'\">Buy It</button><br>
        </div>
        {% endfor %}
{% endblock %}
";
    }
}
