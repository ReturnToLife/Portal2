<?php

/* ReturnEpiWSBundle:WS:asso.html.twig */
class __TwigTemplate_59c82eb8a65e322677654c7e1284334d extends Twig_Template
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
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:assobanner.html.twig")->display(array_merge($context, array("name" => $this->getContext($context, "name"))));
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
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:assoheader.html.twig")->display(array_merge($context, array("visible" => $this->getContext($context, "visible"), "name" => $this->getContext($context, "name"))));
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
\t";
        // line 28
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:assocontent.html.twig")->display(array_merge($context, array("events" => $this->getContext($context, "events"), "asso" => $this->getContext($context, "asso"))));
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t";
        // line 34
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:assofooter.html.twig")->display(array_merge($context, array("asso" => $this->getContext($context, "asso"))));
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:asso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  101 => 33,  98 => 32,  94 => 28,  89 => 27,  86 => 26,  82 => 22,  77 => 21,  74 => 20,  70 => 17,  65 => 16,  62 => 15,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
