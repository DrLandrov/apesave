<?php

/* payment.html.twig */
class __TwigTemplate_287e5d95deaf840138443dce2bc11c60ca89ec1f8c020efff808f363f35dc002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "payment.html.twig", 1);
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
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itemDescription"]) ? $context["itemDescription"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ci"]) {
            // line 6
            echo "
        <div id=\"listing\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "ID", array()), "html", null, true);
            echo "<br>
            <div id=\"pimage\"><img height=100 src=\"/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ci"], "image", array()), "html", null, true);
            echo "\"></div><br>
            <br>
            <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                <input type=\"hidden\" name=\"encrypted\" 
                       value=\"-----BEGIN PKCS7-----MIIHLwYJKoZIhvcNAQcEoIIHIDCCBxwCAQExggEwM
                       IIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3V
                       udGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0cz
                       ERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQ
                       YJKoZIhvcNAQEBBQAEgYASg38ThYRipmplT05NZ0lpV2s/bf1n3mQMq20BF/GmbDty3AB7CH/
                       Et3NFhuXYFAjWKXRkOKKzseXsjvSGQpQGgY8PmG6G2QmaEiqFmpVH3TdLnZ82CVeXBE+NokMsE
                       dYUdWRsdosbjKBEFEMLhmIJcPMabR9CnUDHF/sNv+ZnkTELMAkGBSsOAwIaBQAwgawGCSqGSIb3
                       DQEHATAUBggqhkiG9w0DBwQIumlfi6zmPcKAgYjRQm7QE+7ervnwMJ5AHA75MJCDApBUpUeHH49A
                       xERu4AVdEJbzCnbC5wxojNmjgygabTHGmJ43+jDYpw/AAJiDPnYzSPO3MtG3iigVyhI9I12mliGN
                       L5XKUYHuNVcNGjMZIJ8jxBguyXGKEN1paCmd8DCKnterT+mVBR5gjpAS/frPjrTfgtp8oIIDhzCCA
                       4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEW
                       MBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmV
                       fY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA
                       0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQG
                       A1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2Vyd
                       HMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSI
                       b3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC
                       0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9
                       kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1m
                       SUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCz
                       AJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1
                       UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb2
                       2CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3Y
                       CDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GE
                       Yj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQ
                       GEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMu
                       MRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cG
                       FsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcN
                       MTYxMDE2MTk1MzQzWjAjBgkqhkiG9w0BCQQxFgQUTxwnE1/t3gmpKlwwLusVgXPHNHkwDQYJKoZIhvcNAQEBBQ
                       AEgYA2e5enqR2J4THPa98RjXW1kE/FPjeykDc5FrJr11JGDYOzg4NovYVEHabJUV1JZwof7QtZYzmjQlCGSVvD
                       yd4y6ZPNHA/6/3Ioub8isOAZkjN8SpOKSHcT8DO8Iyv05iUY9X396CD3iLsi0UapQCKJscYcpzkz+3088Xkq7x
                       pp1Q==-----END PKCS7-----
                       \">
                <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif\" 
                       border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
                <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" 
                     width=\"1\" height=\"1\">
            </form>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ci'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
";
    }

    public function getTemplateName()
    {
        return "payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 55,  46 => 9,  42 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"master.html.twig\" %}

{% block content %}

    {% for ci in itemDescription %}

        <div id=\"listing\">
            {{ci.ID}}<br>
            <div id=\"pimage\"><img height=100 src=\"/{{ci.image}}\"></div><br>
            <br>
            <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                <input type=\"hidden\" name=\"encrypted\" 
                       value=\"-----BEGIN PKCS7-----MIIHLwYJKoZIhvcNAQcEoIIHIDCCBxwCAQExggEwM
                       IIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3V
                       udGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0cz
                       ERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQ
                       YJKoZIhvcNAQEBBQAEgYASg38ThYRipmplT05NZ0lpV2s/bf1n3mQMq20BF/GmbDty3AB7CH/
                       Et3NFhuXYFAjWKXRkOKKzseXsjvSGQpQGgY8PmG6G2QmaEiqFmpVH3TdLnZ82CVeXBE+NokMsE
                       dYUdWRsdosbjKBEFEMLhmIJcPMabR9CnUDHF/sNv+ZnkTELMAkGBSsOAwIaBQAwgawGCSqGSIb3
                       DQEHATAUBggqhkiG9w0DBwQIumlfi6zmPcKAgYjRQm7QE+7ervnwMJ5AHA75MJCDApBUpUeHH49A
                       xERu4AVdEJbzCnbC5wxojNmjgygabTHGmJ43+jDYpw/AAJiDPnYzSPO3MtG3iigVyhI9I12mliGN
                       L5XKUYHuNVcNGjMZIJ8jxBguyXGKEN1paCmd8DCKnterT+mVBR5gjpAS/frPjrTfgtp8oIIDhzCCA
                       4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEW
                       MBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmV
                       fY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA
                       0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQG
                       A1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2Vyd
                       HMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSI
                       b3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC
                       0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9
                       kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1m
                       SUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCz
                       AJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1
                       UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb2
                       2CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3Y
                       CDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GE
                       Yj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQ
                       GEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMu
                       MRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cG
                       FsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcN
                       MTYxMDE2MTk1MzQzWjAjBgkqhkiG9w0BCQQxFgQUTxwnE1/t3gmpKlwwLusVgXPHNHkwDQYJKoZIhvcNAQEBBQ
                       AEgYA2e5enqR2J4THPa98RjXW1kE/FPjeykDc5FrJr11JGDYOzg4NovYVEHabJUV1JZwof7QtZYzmjQlCGSVvD
                       yd4y6ZPNHA/6/3Ioub8isOAZkjN8SpOKSHcT8DO8Iyv05iUY9X396CD3iLsi0UapQCKJscYcpzkz+3088Xkq7x
                       pp1Q==-----END PKCS7-----
                       \">
                <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif\" 
                       border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
                <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" 
                     width=\"1\" height=\"1\">
            </form>

        </div>
    {% endfor %}

{% endblock %}";
    }
}
