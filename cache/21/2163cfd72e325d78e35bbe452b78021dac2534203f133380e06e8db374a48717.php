<?php

/* master.html.twig */
class __TwigTemplate_ba35520475804ef4ecf6b512bb3272c8565a1d20efc146bf4495ca79e466f735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"/styles.css\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "        
    </head>
    <header>
        <div id=\"menu\"><ul><li><a href=\"/index\">Home</a></li><li><a href=\"/products\">Shop</a></li><li><a href=\"/sell\">Sell</a></li><li><a href=\"/myaccount\">My Account</a></li><li>";
        // line 11
        if ((isset($context["sessionUser"]) ? $context["sessionUser"] : null)) {
            echo "<a href=\"/logoutpage\">Logout</a>";
        } else {
            echo "<a href=\"/login\">Login";
        }
        echo "</a></li><li><a href=\"/contactus\">Contact Us</a></li><li><input type=\"text\" name=\"search\" placeholder=\"Search..\"></li></ul></div>
    </header>
    <body>

        <div id=\"centerContent\">

            <div id=\"content\">";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

        </div>
            <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-85726817-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
    <footer id=\"footer\">                
        &copy; Copyright 2016 by <a href=\"http://domain.invalid/\">ApeSave</a>.
    </footer>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        ";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  89 => 7,  86 => 6,  81 => 5,  52 => 17,  39 => 11,  34 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"/styles.css\" />
        <title>{% block title %}{% endblock %}</title>
        {% block head %}
        {% endblock %}
        
    </head>
    <header>
        <div id=\"menu\"><ul><li><a href=\"/index\">Home</a></li><li><a href=\"/products\">Shop</a></li><li><a href=\"/sell\">Sell</a></li><li><a href=\"/myaccount\">My Account</a></li><li>{% if sessionUser %}<a href=\"/logoutpage\">Logout</a>{% else %}<a href=\"/login\">Login{% endif %}</a></li><li><a href=\"/contactus\">Contact Us</a></li><li><input type=\"text\" name=\"search\" placeholder=\"Search..\"></li></ul></div>
    </header>
    <body>

        <div id=\"centerContent\">

            <div id=\"content\">{% block content %}{% endblock %}</div>

        </div>
            <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-85726817-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
    <footer id=\"footer\">                
        &copy; Copyright 2016 by <a href=\"http://domain.invalid/\">ApeSave</a>.
    </footer>
</html>";
    }
}
