<?php

/* buyit.html.twig */
class __TwigTemplate_283d94211d4ebf9e0f778843bb2e3c6d186de7cd7a26dcdf0d18796c91a860e7 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
         ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forSaleItems"]) ? $context["forSaleItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
            // line 7
            echo "         <div id=\"listing\">
            
                <!--<li id=\"itemrow";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "\"></li>-->
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "<br>
                <div id=\"pimage\"><a href=\"/buyit\"><img height=100 src=\"";
            // line 11
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
                <button id=\"buyitbutton\" onclick=\"location.href='/buyit'\">Buy It</button><br>
               
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
        return array (  78 => 21,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}


{% block content %}
    
         {% for ci in forSaleItems %}
         <div id=\"listing\">
            
                <!--<li id=\"itemrow{{ci.ID}}\"></li>-->
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
        
        {% endblock %}";
    }
}
