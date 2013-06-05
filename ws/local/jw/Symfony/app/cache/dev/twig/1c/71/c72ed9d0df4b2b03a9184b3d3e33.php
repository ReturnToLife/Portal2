<?php

/* ReturnEpiWSBundle:WS:materielmanager.html.twig */
class __TwigTemplate_1c71c72ed9d0df4b2b03a9184b3d3e33 extends Twig_Template
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
        echo "<div class=\"row\"><form method=\"post\" id=\"matosdelform\">
<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_manager", array("name" => $this->getContext($context, "name"), "tool" => twig_lower_filter($this->env, $this->getContext($context, "tool")), "item" => "item", "id" => 0)), "html", null, true);
        echo "\">
Ajouter une entrée</a><br/><br/>
";
        // line 4
        $context["it"] = 0;
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "infos"), "materiel", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "\t";
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
            echo " ><br />
\t\t\t<strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nom", array(), "array"), "html", null, true);
            echo " : ";
            echo $this->getAttribute($this->getContext($context, "item"), "description", array(), "array");
            echo "</strong><br />
\t\t\tStatut actuel : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "statut", array(), "array"), "html", null, true);
            echo " --- Possédé ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nombre", array(), "array"), "html", null, true);
            echo " fois<br />
\t\t\tNote : ";
            // line 13
            echo $this->getAttribute($this->getContext($context, "item"), "note", array(), "array");
            echo "
\t\t<div style=\"float:right;\">
\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_manager", array("name" => $this->getContext($context, "name"), "tool" => twig_lower_filter($this->env, $this->getContext($context, "tool")), "item" => "item", "id" => $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"))), "html", null, true);
            echo "\">
\t\tModifier</a> <a id = \"deleclic";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
            echo "\" 
\t\tonclick=\"document.getElementById('delebox";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
            echo "').style.display = 'block';
\t\tdocument.getElementById('deleclic";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
            echo "').style.display = 'none';\">Supprimer</a>
\t\t<div style=\"display:none\" id=\"delebox";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
            echo "\"><a 
\t\tonclick=\"document.getElementById('iddelmatos').value = ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
            echo ";
\t\tdocument.getElementById('matosdelform').submit();\" >
\t\tConfirmer la suppression</a></div></div><br /><br /></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "<br/><br/>
<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_manager", array("name" => $this->getContext($context, "name"), "tool" => twig_lower_filter($this->env, $this->getContext($context, "tool")), "item" => "item", "id" => 0)), "html", null, true);
        echo "\">
Ajouter une entrée</a></div><input type=\"text\" style=\"display:none;\"
 name=\"iddelmatos\" id=\"iddelmatos\"/></form>";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:materielmanager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  61 => 13,  55 => 12,  49 => 11,  46 => 10,  42 => 9,  37 => 8,  34 => 7,  31 => 6,  27 => 5,  25 => 4,  20 => 2,  17 => 1,);
    }
}
