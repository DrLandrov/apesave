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
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forSaleItems"]) ? $context["forSaleItems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
                // line 6
                echo "         <div id=\"listing\">
            
                <!--<li id=\"itemrow";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
                echo "\"></li>-->
                ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
                echo "<br>
                <div id=\"pimage\"><a href=\"/buyit\"><img height=100 src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
                echo "\"></a></div><br>
                <center><b><u>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
                echo "</u></b></center><br>
                Price:<b> \$";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
                echo "</b><br>
                Item Location: ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
                echo "<br>
                Description: ";
                // line 14
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
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        <a href=\"/register\">Register</a>
        <a href=\"/login\">Login</a><br>
         ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forSaleItems"]) ? $context["forSaleItems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
                // line 24
                echo "           
            <div id=\"listing\">
            
                <!--<li id=\"itemrow";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
                echo "\"></li>-->
                ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
                echo "<br>
                <div id=\"pimage\"><a href=\"/buyit\"><img height=100 src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
                echo "\"></a></div><br>
                <center><b><u>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
                echo "</u></b></center><br>
                Price:<b> \$";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
                echo "</b><br>
                Item Location: ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
                echo "<br>
                Description: ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "description", array()), "html", null, true);
                echo "<br>
                <br>
                <button id=\"buyitbutton\" onclick=\"location.href='/buyit'\">Buy It</button> 
        </div>
                    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    ";
        }
        // line 40
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
        return array (  134 => 40,  131 => 39,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  90 => 24,  86 => 23,  82 => 21,  79 => 20,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block content %}
    {% if sessionUser %}
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
    {% else %}
        <a href=\"/register\">Register</a>
        <a href=\"/login\">Login</a><br>
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
                <button id=\"buyitbutton\" onclick=\"location.href='/buyit'\">Buy It</button> 
        </div>
                    
        {% endfor %}
    {% endif %}
    
        
       
   
{% endblock %}
";
    }
}
