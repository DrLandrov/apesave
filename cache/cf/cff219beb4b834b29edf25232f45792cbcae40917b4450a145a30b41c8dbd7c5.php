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
            echo "       
";
            // line 8
            if ((isset($context["myItemsForSale"]) ? $context["myItemsForSale"] : null)) {
                // line 9
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["myItemsForSale"]) ? $context["myItemsForSale"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
                    // line 10
                    echo "        <table id=\"mylisting\">
            <tr>
                
        
                <!--<li id=\"itemrow";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
                    echo "\"></li>-->
          <td>      ";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
                    echo "
        </td>
                <td><div id=\"pimage\"><a href=\"/buyit/";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "productID", array()), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
                    echo "\"></a></div></td>
                <td><center><b><u>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pName", array()), "html", null, true);
                    echo "</u></b></center></td>
                <td>\$";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pPrice", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "pLocation", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "description", array()), "html", null, true);
                    echo "</td> 
                <hr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            <tr>
            
        </table>
    
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
        return array (  105 => 35,  100 => 32,  97 => 31,  93 => 29,  86 => 24,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  59 => 17,  54 => 15,  50 => 14,  44 => 10,  39 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}



{% block content %}
    {% if sessionUser %}
       
{% if myItemsForSale %}
    {% for ci in myItemsForSale %}
        <table id=\"mylisting\">
            <tr>
                
        
                <!--<li id=\"itemrow{{ci.ID}}\"></li>-->
          <td>      {{ci.ID}}
        </td>
                <td><div id=\"pimage\"><a href=\"/buyit/{{ci.productID}}\"><img src=\"{{ci.image}}\"></a></div></td>
                <td><center><b><u>{{ci.pName}}</u></b></center></td>
                <td>\${{ci.pPrice}}</td>
                <td>{{ci.pLocation}}</td>
                <td>{{ci.description}}</td> 
                <hr>
            {% endfor %}
            <tr>
            
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
