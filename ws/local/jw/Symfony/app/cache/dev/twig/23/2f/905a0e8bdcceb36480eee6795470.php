<?php

/* ReturnEpiWSBundle:WS:materieldisplay.html.twig */
class __TwigTemplate_232f905a0e8bdcceb36480eee6795470 extends Twig_Template
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
        echo "<div class=\"row\">
";
        // line 2
        $context["it"] = 0;
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "infos"), "materiel", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "\t";
            $context["it"] = ($this->getContext($context, "it") + 1);
            // line 5
            echo "\t\t<div class=\"row\"
\t\t\t";
            // line 6
            if (($this->getContext($context, "it") % 2 == 0)) {
                echo " style=\"background-color:#EEEEFF;\"
\t\t\t";
            } else {
                // line 7
                echo " style=\"background-color:#EEFFEE;\"
\t\t\t";
            }
            // line 8
            echo " ><br />
\t\t\t<strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nom", array(), "array"), "html", null, true);
            echo " : ";
            echo $this->getAttribute($this->getContext($context, "item"), "description", array(), "array");
            echo "</strong><br />
\t\t\tStatut actuel : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "statut", array(), "array"), "html", null, true);
            echo " --- Possédé ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nombre", array(), "array"), "html", null, true);
            echo " fois<br />
\t\t\tNote : ";
            // line 11
            echo $this->getAttribute($this->getContext($context, "item"), "note", array(), "array");
            echo "<br /><br /></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "<br/><br/>";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:materieldisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  56 => 11,  50 => 10,  44 => 9,  41 => 8,  37 => 7,  32 => 6,  29 => 5,  26 => 4,  22 => 3,  20 => 2,  17 => 1,);
    }
}
