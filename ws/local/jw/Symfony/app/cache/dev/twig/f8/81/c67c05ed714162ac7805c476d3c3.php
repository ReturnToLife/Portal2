<?php

/* ReturnEpiWSBundle::layout.html.twig */
class __TwigTemplate_f881c67c05ed714162ac7805c476d3c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        return "::base.html.twig";
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
\t";
        // line 17
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:banner.html.twig")->display($context);
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
\t";
        // line 22
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:header.html.twig")->display($context);
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "\t";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t";
        // line 31
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  99 => 30,  96 => 29,  89 => 26,  86 => 25,  82 => 22,  77 => 21,  74 => 20,  70 => 17,  65 => 16,  62 => 15,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
