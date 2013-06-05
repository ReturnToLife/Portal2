<?php

/* ReturnEpiWSBundle:WS:index.html.twig */
class __TwigTemplate_f9203a26eb525bc89789df95a08b5703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ReturnEpiWSBundle::layoutIndex.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'banner' => array($this, 'block_banner'),
            'header' => array($this, 'block_header'),
            'flash' => array($this, 'block_flash'),
            'event1' => array($this, 'block_event1'),
            'event2' => array($this, 'block_event2'),
            'artgeneral' => array($this, 'block_artgeneral'),
            'artpedago' => array($this, 'block_artpedago'),
            'artlabo' => array($this, 'block_artlabo'),
            'artasso' => array($this, 'block_artasso'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ReturnEpiWSBundle::layoutIndex.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_banner($context, array $blocks = array())
    {
        // line 16
        echo "\t";
        $this->displayParentBlock("banner", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_flash($context, array $blocks = array())
    {
        // line 24
        echo "\t<form method=\"post\" id=\"sendflash\" name=\"sendflash\">
\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "flashs"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "\t\t<div class=\"divflash\">
\t\t\t<div class=\"divflashcontent\">";
            // line 27
            echo $this->getAttribute($this->getContext($context, "item"), "contenu", array(), "array");
            echo "</div>
\t\t\t<a onclick=\"document.getElementById('difflash').value = 1;
\t\t\tdocument.getElementById('flashid').value = ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
            echo ";
\t\t\tdocument.forms['sendflash'].submit();\">+1</a> /
\t\t\t<a onclick=\"document.getElementById('difflash').value = -1;
\t\t\tdocument.getElementById('flashid').value = ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
            echo ";
\t\t\tdocument.forms['sendflash'].submit();\">-1</a>
\t\t\t<div style=\"float:right\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flashscores"), ($this->getAttribute($this->getContext($context, "loop"), "index") - 1), array(), "array"), "html", null, true);
            echo "</div>
\t\t</div>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "\t<input type=\"text\" value=\"0\" id=\"difflash\" name=\"difflash\" style=\"display:none;\" />
\t<input type=\"text\" value=\"0\" id=\"flashid\" name=\"flashid\" style=\"display:none;\" />
\t</form>
";
    }

    // line 42
    public function block_event1($context, array $blocks = array())
    {
        // line 43
        echo "\t<div style=\"width:45%;height:100%;float:left;\"><img style=\"width:100%;\" src='
\t";
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "image", array(), "array")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "image", array(), "array"))), "html", null, true);
            echo " 
\t";
        } else {
            // line 45
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/default.gif"), "html", null, true);
            echo " ";
        }
        echo "' /> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "image", array(), "array"), "html", null, true);
        echo " </div>
\t<div class=\"row\">
\t\t<div style=\"width:55%;height:100%;float:right;\"><b>";
        // line 47
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "titre", array(), "array");
        echo "</b><br />
\t\t";
        // line 48
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "contenu", array(), "array");
        echo "<br /><br />
\t\t<div style=\"float:right;\">";
        // line 49
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "parution", array(), "array") != 0)) {
            // line 50
            echo "\t\t<strong>Date de l'event</strong><br/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 0, array(), "array"), "parution", array(), "array"), "html", null, true);
        }
        echo "</div></div>
\t</div>
";
    }

    // line 53
    public function block_event2($context, array $blocks = array())
    {
        // line 54
        echo "\t<div style=\"width:45%;height:100%;float:left;\"><img style=\"width:100%;\" src='
\t";
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "image", array(), "array")) {
            echo " events[1][\"image\"]
\t";
        } else {
            // line 56
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/default.gif"), "html", null, true);
            echo " ";
        }
        echo "' /></div>
\t<div class=\"row\">
\t\t<div style=\"width:55%;height:100%;float:right;\"><b>";
        // line 58
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "titre", array(), "array");
        echo "</b><br />
\t\t";
        // line 59
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "contenu", array(), "array");
        echo "<br /><br />
\t\t<div style=\"float:right;\">";
        // line 60
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "parution", array(), "array") != 0)) {
            // line 61
            echo "\t\t<strong>Date de l'event</strong><br/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "events"), 1, array(), "array"), "parution", array(), "array"), "html", null, true);
        }
        echo "</div></div>
\t</div>
";
    }

    // line 65
    public function block_artgeneral($context, array $blocks = array())
    {
        // line 66
        $this->displayParentBlock("artgeneral", $context, $blocks);
        echo "
";
    }

    // line 68
    public function block_artpedago($context, array $blocks = array())
    {
        // line 69
        $this->displayParentBlock("artpedago", $context, $blocks);
        echo "
";
    }

    // line 71
    public function block_artlabo($context, array $blocks = array())
    {
        // line 72
        $this->displayParentBlock("artlabo", $context, $blocks);
        echo "
";
    }

    // line 74
    public function block_artasso($context, array $blocks = array())
    {
        // line 75
        $this->displayParentBlock("artasso", $context, $blocks);
        echo "
";
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 79,  270 => 78,  264 => 75,  261 => 74,  255 => 72,  252 => 71,  246 => 69,  243 => 68,  237 => 66,  234 => 65,  225 => 61,  223 => 60,  219 => 59,  215 => 58,  207 => 56,  202 => 55,  199 => 54,  196 => 53,  187 => 50,  185 => 49,  181 => 48,  177 => 47,  167 => 45,  160 => 44,  157 => 43,  154 => 42,  147 => 37,  130 => 34,  125 => 32,  119 => 29,  114 => 27,  111 => 26,  94 => 25,  91 => 24,  88 => 23,  81 => 20,  78 => 19,  71 => 16,  68 => 15,  61 => 12,  58 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,);
    }
}
