<?php

/* ReturnEpiWSBundle:WS:assofooter.html.twig */
class __TwigTemplate_4cc4abfd2ae53c1c17967892f8844e3d extends Twig_Template
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
        echo $this->getAttribute($this->getContext($context, "asso"), "footer", array(), "array");
        echo "
<div style=\"float:right;\">
<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_accueil"), "html", null, true);
        echo "\">Index Return</a></div>";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:assofooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  17 => 1,  311 => 93,  308 => 92,  299 => 79,  297 => 78,  293 => 77,  289 => 76,  281 => 74,  276 => 73,  273 => 72,  270 => 71,  261 => 66,  259 => 65,  255 => 64,  251 => 63,  241 => 61,  236 => 60,  233 => 59,  230 => 58,  225 => 82,  223 => 71,  219 => 69,  217 => 58,  214 => 57,  211 => 56,  203 => 87,  199 => 86,  195 => 84,  193 => 56,  190 => 55,  184 => 53,  181 => 52,  178 => 51,  167 => 42,  162 => 39,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  125 => 32,  121 => 30,  118 => 29,  101 => 28,  94 => 25,  92 => 24,  87 => 23,  84 => 22,  77 => 18,  73 => 17,  68 => 16,  65 => 15,  58 => 12,  55 => 11,  48 => 8,  45 => 7,  38 => 4,  35 => 3,);
    }
}
