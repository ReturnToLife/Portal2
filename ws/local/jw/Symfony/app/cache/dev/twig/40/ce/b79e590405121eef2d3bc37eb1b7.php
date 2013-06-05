<?php

/* ReturnEpiWSBundle:WS:assocontent.html.twig */
class __TwigTemplate_40ceb79e590405121eef2d3bc37eb1b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'event' => array($this, 'block_event'),
            'event1' => array($this, 'block_event1'),
            'event2' => array($this, 'block_event2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((!twig_test_empty($this->getContext($context, "tool")))) {
            // line 2
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->getContext($context, "tool"), "html", null, true);
            echo " de l'association ";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</h1>
\t\t";
            // line 3
            $template = $this->env->resolveTemplate((("ReturnEpiWSBundle:WS:" . twig_lower_filter($this->env, $this->getContext($context, "tool"))) . "display.html.twig"));
            $template->display(array_merge($context, array("infos" => $this->getContext($context, "infos"))));
            // line 4
            echo "\t";
        } else {
            // line 5
            echo "\t<div class=\"divassoevent\">
\t";
            // line 6
            $this->displayBlock('event', $context, $blocks);
            // line 34
            echo "\t</div>

\t<h1> Page vitrine de l'asso ";
            // line 36
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</h1>
\t";
            // line 37
            echo $this->getAttribute($this->getContext($context, "asso"), "content", array(), "array");
            echo "
\t
\t";
        }
    }

    // line 6
    public function block_event($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<div class=\"divevent\" style=\"float:left;\">
\t\t\t";
        // line 8
        $this->displayBlock('event1', $context, $blocks);
        // line 19
        echo "\t\t</div>
\t\t<div class=\"divevent\" style=\"float:right;\">
\t\t\t";
        // line 21
        $this->displayBlock('event2', $context, $blocks);
        // line 32
        echo "\t\t</div>
\t";
    }

    // line 8
    public function block_event1($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t<div style=\"width:45%;height:100%;float:left;\"><img style=\"width:100%;\" src='
\t\t\t";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "image", array(), "array")) {
            echo " events[0][\"image\"]
\t\t\t";
        } else {
            // line 11
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/default.gif"), "html", null, true);
            echo " ";
        }
        echo "' /> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "image", array(), "array"), "html", null, true);
        echo " </div>
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"width:55%;height:100%;float:right;\"><b>";
        // line 13
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "titre", array(), "array");
        echo "</b><br />
\t\t\t\t";
        // line 14
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "contenu", array(), "array");
        echo "<br /><br />
\t\t\t\t<div style=\"float:right;\">";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "parution", array(), "array") != 0)) {
            // line 16
            echo "\t\t\t\t<strong>Date de l'event</strong><br/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "parution", array(), "array"), "html", null, true);
        }
        echo "</div></div>
\t\t\t</div>
\t\t\t";
    }

    // line 21
    public function block_event2($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t<div style=\"width:45%;height:100%;float:left;\"><img style=\"width:100%;\" src='
\t\t\t";
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "image", array(), "array")) {
            echo " events[1][\"image\"]
\t\t\t";
        } else {
            // line 24
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/default.gif"), "html", null, true);
            echo " ";
        }
        echo "' /></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"width:55%;height:100%;float:right;\"><b>";
        // line 26
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "titre", array(), "array");
        echo "</b><br />
\t\t\t\t";
        // line 27
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "contenu", array(), "array");
        echo "<br /><br />
\t\t\t\t<div style=\"float:right;\">";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "parution", array(), "array") != 0)) {
            // line 29
            echo "\t\t\t\t<strong>Date de l'event</strong><br/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "parution", array(), "array"), "html", null, true);
        }
        echo "</div></div>
\t\t\t</div>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:assocontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 29,  142 => 28,  138 => 27,  134 => 26,  126 => 24,  121 => 23,  118 => 22,  115 => 21,  106 => 16,  104 => 15,  100 => 14,  96 => 13,  86 => 11,  81 => 10,  78 => 9,  75 => 8,  70 => 32,  68 => 21,  64 => 19,  62 => 8,  59 => 7,  56 => 6,  48 => 37,  44 => 36,  40 => 34,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  22 => 2,  20 => 1,);
    }
}
