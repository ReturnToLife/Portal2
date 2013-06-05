<?php

/* ReturnEpiWSBundle:WS:banner.html.twig */
class __TwigTemplate_871430d230c7647a01b69801991ddade extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_accueil"), "html", null, true);
        echo "\"><h1>Banner here</h1></a>";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
