<?php

/* ReturnEpiWSBundle:WS:materielmanageritem.html.twig */
class __TwigTemplate_acd2570630d8c2095590554da5d7890c extends Twig_Template
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
        echo "<div class=\"row\"><form method=\"post\" 
";
        // line 2
        if (($this->getContext($context, "id") != 0)) {
            echo " id=\"matosmodform\" ";
        } else {
            echo " id=\"matosaddform\" ";
        }
        // line 3
        echo "action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_manager", array("name" => $this->getContext($context, "name"), "tool" => twig_lower_filter($this->env, $this->getContext($context, "tool")))), "html", null, true);
        echo "\">
<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_manager", array("name" => $this->getContext($context, "name"), "tool" => twig_lower_filter($this->env, $this->getContext($context, "tool")))), "html", null, true);
        echo "\">
Retour à la liste du matériel de l'asso <strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "</strong></a><br/><br/>

<strong>";
        // line 7
        if (($this->getContext($context, "id") != 0)) {
            echo " Formulaire de modification ";
        } else {
            // line 8
            echo " Formulaire d'ajout ";
        }
        echo "</strong>
<br /><br />
* Nom : <input type=\"text\" size=60 ";
        // line 10
        if (($this->getContext($context, "id") != 0)) {
            echo "value=\"";
            echo $this->getAttribute($this->getAttribute($this->getContext($context, "infos"), "materiel", array(), "array"), "nom", array(), "array");
            echo "\"";
        }
        // line 11
        echo "name=\"nommatos\" id=\"nommatos\" /><br /><br />Description : <br />
<textarea name=\"descmatos\" id=\"descmatos\" cols=\"50\" rows=\"5\">
";
        // line 13
        if (($this->getContext($context, "id") != 0)) {
            echo $this->getAttribute($this->getAttribute($this->getContext($context, "infos"), "materiel", array(), "array"), "description", array(), "array");
        }
        echo "</textarea><br /><br />
Statut : <select name=\"statutmatos\" id=\"statutmatos\" >
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "infos"), "statut", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "statut", array(), "array"), "html", null, true);
            echo "\"
";
            // line 16
            if ((($this->getContext($context, "id") != 0) && ($this->getAttribute($this->getContext($context, "item"), "statut", array(), "array") == $this->getAttribute($this->getAttribute($this->getContext($context, "infos"), "materiel", array(), "array"), "statut", array(), "array")))) {
                echo "selected=\"selected\"";
            }
            echo ">
";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "statut", array(), "array"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "</select> 
&nbsp;&nbsp; * Nombre : <input type=\"text\" ";
        // line 18
        if (($this->getContext($context, "id") != 0)) {
            // line 19
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "infos"), "materiel", array(), "array"), "nombre", array(), "array"), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "name=\"nbrmatos\" id=\"nbrmatos\" size=2 /><br /><br />Note : <br />
<textarea name=\"notematos\" id=\"notematos\" cols=\"50\" rows=\"3\">
";
        // line 22
        if (($this->getContext($context, "id") != 0)) {
            echo $this->getAttribute($this->getAttribute($this->getContext($context, "infos"), "materiel", array(), "array"), "note", array(), "array");
        }
        echo "</textarea><br /><br />
";
        // line 23
        if (($this->getContext($context, "id") != 0)) {
            // line 24
            echo "<input type=\"submit\" value=\"Modifier\" name=\"sendmodmatos\" id=\"sendmodmatos\" />
";
        } else {
            // line 26
            echo "<input type=\"submit\" value=\"Ajouter\" name=\"sendaddmatos\" id=\"sendaddmatos\" />
";
        }
        // line 28
        echo "<br/><br/>
<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_manager", array("name" => $this->getContext($context, "name"), "tool" => twig_lower_filter($this->env, $this->getContext($context, "tool")))), "html", null, true);
        echo "\">
Retour à la liste du matériel de l'asso <strong>";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "</strong></a></div>
<input type=\"text\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" style=\"display:none;\"
 name=\"saveiditem\" id=\"saveiditem\" />
</form>";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:materielmanageritem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  124 => 30,  120 => 29,  117 => 28,  113 => 26,  109 => 24,  107 => 23,  101 => 22,  97 => 20,  92 => 19,  90 => 18,  81 => 17,  75 => 16,  67 => 15,  60 => 13,  56 => 11,  50 => 10,  44 => 8,  40 => 7,  35 => 5,  31 => 4,  26 => 3,  20 => 2,  17 => 1,);
    }
}
