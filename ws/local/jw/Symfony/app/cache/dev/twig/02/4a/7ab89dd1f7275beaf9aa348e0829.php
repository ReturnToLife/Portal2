<?php

/* ::base.html.twig */
class __TwigTemplate_024a7ab89dd1f7275beaf9aa348e0829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'banner' => array($this, 'block_banner'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>
\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>

\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t\t
\t\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "\t</head>

\t<body>
\t\t<div class=\"topws\">
\t\t\t<div class=\"divbanner\">
\t\t\t";
        // line 23
        $this->displayBlock('banner', $context, $blocks);
        // line 25
        echo "\t\t\t</div>
\t\t\t<div class=\"divheader\">
\t\t\t";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"divcontent\">
\t\t<br />
\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "\t\t</div>
\t\t<div class=\"divfooter\">
\t\t";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "\t\t<div/>
\t\t\t<footer>
\t\t\t\tThe sky's the limit &copy;JW
\t\t\t</footer>
\t\t</div>
\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "\t\tReturn-to_life
\t\t";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "\t\t
\t\t";
    }

    // line 23
    public function block_banner($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "\t\t";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 38,  130 => 37,  126 => 34,  123 => 33,  119 => 28,  116 => 27,  112 => 24,  109 => 23,  104 => 16,  101 => 15,  94 => 12,  91 => 11,  86 => 7,  83 => 6,  73 => 39,  71 => 37,  67 => 35,  65 => 33,  59 => 29,  57 => 27,  53 => 25,  51 => 23,  44 => 18,  42 => 15,  39 => 14,  37 => 11,  33 => 9,  31 => 6,  24 => 1,);
    }
}
