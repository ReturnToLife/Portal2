<?php

/* ReturnEpiWSBundle:WS:footer.html.twig */
class __TwigTemplate_18c878669a3b8abf8bd0644ad176fdba extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "student"), "method") != null)) {
            // line 2
            echo "\t<fieldset style=\"float:right;\"><legend> Recherche générale </legend>
\t<br /><form method=\"post\" name=\"dcform\" action=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_search"), "html", null, true);
            echo "\">
\t\t\t<input type=\"text\" name=\"searchval\" id=\"searchval\" />
\t\t\t<input type=\"submit\" value=\"Chercher\" name=\"sendsearch\" id=\"sendsearch\" />
\t</form></fieldset>
";
        } else {
            // line 8
            echo "<h1>Footer here</h1>
";
        }
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  22 => 3,  19 => 2,  17 => 1,);
    }
}
