<?php

/* ReturnEpiWSBundle:WS:groupes.html.twig */
class __TwigTemplate_5079ecf926ae2ae6245dc66982fed2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ReturnEpiWSBundle::layout.html.twig");

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
";
    }

    // line 15
    public function block_banner($context, array $blocks = array())
    {
        // line 16
        echo "\t";
        $this->displayParentBlock("banner", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "\t<h1> Groupes Page </h1>
";
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:groupes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  90 => 27,  85 => 24,  82 => 23,  75 => 20,  72 => 19,  65 => 16,  62 => 15,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
