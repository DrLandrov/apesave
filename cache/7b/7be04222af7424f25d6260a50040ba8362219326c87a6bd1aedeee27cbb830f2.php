<?php

/* sell.html.twig */
class __TwigTemplate_4aa73361053f5272fd19b57eece953785e4b67a4efa63cf14cb0268d9c04c2e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "sell.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        echo "<h1>Sell Item</h1>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 7
            echo "    <ul>
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </ul>
";
        }
        // line 13
        echo "
<form method=\"post\">
    <!--No Post get for image in index file-->
    Image: <input type=\"file\" name=\"image\"><br> 
    Description: <textarea cols=\"20\" rows=\"4\" name=\"msg\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "msg", array()), "html", null, true);
        echo "</textarea><br>
    Price: <input type=\"text\" name=\"price\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "price", array()), "html", null, true);
        echo "\"><br>
    Contact Email: <input type=\"email\" name=\"contactEmail\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "contactEmail", array()), "html", null, true);
        echo "\"><br>
    <input type=\"submit\" value=\"Post ad\">
</form>

";
    }

    public function getTemplateName()
    {
        return "sell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 18,  66 => 17,  60 => 13,  56 => 11,  47 => 9,  43 => 8,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block head %}<h1>Sell Item</h1>{% endblock %}

{% block content %}
{% if errorList %}
    <ul>
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form method=\"post\">
    <!--No Post get for image in index file-->
    Image: <input type=\"file\" name=\"image\"><br> 
    Description: <textarea cols=\"20\" rows=\"4\" name=\"msg\">{{v.msg}}</textarea><br>
    Price: <input type=\"text\" name=\"price\" value=\"{{v.price}}\"><br>
    Contact Email: <input type=\"email\" name=\"contactEmail\" value=\"{{v.contactEmail}}\"><br>
    <input type=\"submit\" value=\"Post ad\">
</form>

{% endblock %}

";
    }
}
