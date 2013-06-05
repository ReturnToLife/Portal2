<?php

/* ReturnEpiWSBundle:WS:example.html.twig */
class __TwigTemplate_c29474da28ca8410fab6ced88a658b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ReturnEpiWSBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'banner' => array($this, 'block_banner'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ReturnEpiWSBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<script>
\t
\tfunction createRequestObject()
\t{
\t\tvar tmpXmlHttpObject;
\t\tif (window.XMLHttpRequest)
\t\t{ 
\t\t\ttmpXmlHttpObject = new XMLHttpRequest();
\t\t}
\t\telse if (window.ActiveXObject)
\t\t{
\t\t\ttmpXmlHttpObject = new ActiveXObject(\"Microsoft.XMLHTTP\");
\t\t}
\t\treturn tmpXmlHttpObject;
\t}
\t
\t</script>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "\t<h1>Content here</h1>
";
    }

    // line 37
    public function block_banner($context, array $blocks = array())
    {
        // line 38
        echo "\t";
        $this->displayParentBlock("banner", $context, $blocks);
        echo "
";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:example.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  108 => 45,  101 => 42,  98 => 41,  91 => 38,  88 => 37,  83 => 34,  80 => 33,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
