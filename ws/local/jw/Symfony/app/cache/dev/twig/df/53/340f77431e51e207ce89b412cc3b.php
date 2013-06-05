<?php

/* ReturnEpiWSBundle:WS:header.html.twig */
class __TwigTemplate_df53340f77431e51e207ce89b412cc3b extends Twig_Template
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
        echo "
";
        // line 2
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "student"), "method") != null)) {
            // line 3
            echo "\t<br /><form method=\"post\" name=\"dcform\">
\t&nbsp;&nbsp;<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_accueil"), "html", null, true);
            echo "\">Index</a>
\t&nbsp;&nbsp;<a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_publications"), "html", null, true);
            echo "\">Publications</a>
\t&nbsp;&nbsp;<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_groupes"), "html", null, true);
            echo "\">Mes groupes</a>
\t&nbsp;&nbsp;<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_assos"), "html", null, true);
            echo "\">Assos</a>
\t\t<input type=\"submit\" value=\"Disconnect\" name=\"senddc\" id=\"senddc\" style=\"float:right;\" />
\t</form><br />
";
        } else {
            // line 11
            echo "<br /><form method=\"post\" name=\"loginform\"><strong>
\tLogin <input type=\"text\" name=\"login\" id=\"login\" size=\"10\" />&nbsp;&nbsp;
\tPassword <input type=\"password\" name=\"mdp\" id=\"mdp\" size=\"10\" />
\t<input type=\"submit\" value=\"Login\" name=\"sendlogin\" id=\"sendlogin\" style=\"float:right;\" />
</strong></form><br />
";
        }
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  37 => 7,  33 => 6,  29 => 5,  25 => 4,  22 => 3,  20 => 2,  17 => 1,);
    }
}
