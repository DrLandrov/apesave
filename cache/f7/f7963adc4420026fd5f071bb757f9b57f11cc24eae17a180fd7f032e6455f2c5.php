<?php

/* postad_success.html.twig */
class __TwigTemplate_137dde5d9f5be8f4e061f196c368f951ced17c0b4aee1fbd075673651dd9c5d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "postad_success.html.twig", 1);
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
        echo "<h1>Item Posted Successfully</h1>";
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
<p>The add: [";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo ", it's ";
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
        echo "\$ ]
   was successfully added.
</p>
<a href=\"/\">Click to continue</a>

";
    }

    public function getTemplateName()
    {
        return "postad_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  60 => 13,  56 => 11,  47 => 9,  43 => 8,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block head %}<h1>Item Posted Successfully</h1>{% endblock %}

{% block content %}
{% if errorList %}
    <ul>
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<p>The add: [{{description}}, it's {{price}}\$ ]
   was successfully added.
</p>
<a href=\"/\">Click to continue</a>

{% endblock %}
";
    }
}
