<?php

/* emailus.html.twig */
class __TwigTemplate_2d260e7c6f21aef98efc19182e39c5f52c01a961875c4a3842cff27829a428bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <body>
        <h1>Email from ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["fName"]) ? $context["fName"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lName"]) ? $context["lName"] : null), "html", null, true);
        echo "</h1>
        <p>This is the comment: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["comment"]) ? $context["comment"] : null), "html", null, true);
        echo "</p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "emailus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<html>
    <body>
        <h1>Email from {{email}} {{fName}} {{lName}}</h1>
        <p>This is the comment: {{comment}}</p>
    </body>
</html>";
    }
}
