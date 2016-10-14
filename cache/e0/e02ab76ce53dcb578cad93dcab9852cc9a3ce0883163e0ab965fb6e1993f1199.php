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
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}{# empty Twig template #}
";
    }
}
