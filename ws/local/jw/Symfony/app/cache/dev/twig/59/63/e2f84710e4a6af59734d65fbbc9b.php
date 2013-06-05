<?php

/* ReturnEpiWSBundle:WS:vitrinemanager.html.twig */
class __TwigTemplate_5963e2f84710e4a6af59734d65fbbc9b extends Twig_Template
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
        echo "<div class=\"row\"><form method=\"post\">
";
        // line 2
        $context["it"] = 0;
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "infos"), "visible", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "\t";
            if (((($this->getAttribute($this->getContext($context, "item"), "name", array(), "array") != "groupe") && ($this->getAttribute($this->getContext($context, "item"), "name", array(), "array") != "vitrine")) && ($this->getAttribute($this->getContext($context, "item"), "name", array(), "array") != "membres"))) {
                // line 6
                echo "\t\t";
                $context["it"] = ($this->getContext($context, "it") + 1);
                // line 7
                echo "\t\t<div class=\"row\"
\t\t\t";
                // line 8
                if (($this->getContext($context, "it") % 2 == 0)) {
                    echo " style=\"background-color:#EEEEFF;\"
\t\t\t";
                } else {
                    // line 9
                    echo " style=\"background-color:#EEFFEE;\"
\t\t\t";
                }
                // line 10
                echo " ><br/>&nbsp;&nbsp;
\t\t\t<strong>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name", array(), "array"), "html", null, true);
                echo " : </strong>
\t\t\tAfficher <input type=\"radio\" name=\"vitrine";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id_outil_gestion", array(), "array"), "html", null, true);
                echo "\"
\t\t\t";
                // line 13
                if (($this->getAttribute($this->getContext($context, "item"), "visible", array(), "array") == 1)) {
                    echo " checked=\"checked\" ";
                }
                echo " value=\"1\" />
\t\t\tNe pas afficher <input type=\"radio\" name=\"vitrine";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id_outil_gestion", array(), "array"), "html", null, true);
                echo "\"
\t\t\t";
                // line 15
                if (($this->getAttribute($this->getContext($context, "item"), "visible", array(), "array") == 0)) {
                    echo " checked=\"checked\" ";
                }
                echo " value=\"0\" />
\t\t\t<br/><br/>
\t\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "<br/>
<input type=\"submit\" value=\"Modifier\" name=\"sendmodifvitrine\" id=\"sendmodifvitrine\"/>
</div></form>";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:vitrinemanager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  65 => 15,  61 => 14,  55 => 13,  51 => 12,  47 => 11,  44 => 10,  40 => 9,  35 => 8,  32 => 7,  29 => 6,  26 => 4,  22 => 3,  20 => 2,  17 => 1,);
    }
}
