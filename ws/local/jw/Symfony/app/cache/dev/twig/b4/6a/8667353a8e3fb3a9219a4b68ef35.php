<?php

/* ReturnEpiWSBundle:WS:assobanner.html.twig */
class __TwigTemplate_b46a8667353a8e3fb3a9219a4b68ef35 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_asso", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">
<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/" . $this->getContext($context, "name")) . "banner.jpg")), "html", null, true);
        echo "\" height=150 width=600
style=\"display:block; margin-left:auto; margin-right:auto;\" /></a>";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:assobanner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  17 => 1,  309 => 92,  304 => 91,  301 => 90,  292 => 77,  290 => 76,  286 => 75,  282 => 74,  274 => 72,  269 => 71,  266 => 70,  263 => 69,  254 => 64,  252 => 63,  248 => 62,  244 => 61,  234 => 59,  229 => 58,  226 => 57,  223 => 56,  218 => 80,  216 => 69,  212 => 67,  210 => 56,  207 => 55,  204 => 54,  196 => 85,  192 => 84,  188 => 82,  186 => 54,  183 => 53,  177 => 51,  174 => 50,  171 => 49,  160 => 40,  155 => 37,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  118 => 30,  114 => 28,  111 => 27,  94 => 26,  87 => 23,  85 => 22,  80 => 21,  77 => 20,  73 => 17,  68 => 16,  65 => 15,  58 => 12,  55 => 11,  48 => 8,  45 => 7,  38 => 4,  35 => 3,);
    }
}
