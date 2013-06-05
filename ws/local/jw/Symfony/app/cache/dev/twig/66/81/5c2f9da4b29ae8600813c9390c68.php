<?php

/* ReturnEpiWSBundle:WS:search.html.twig */
class __TwigTemplate_66815c2f9da4b29ae8600813c9390c68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ReturnEpiWSBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'banner' => array($this, 'block_banner'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ReturnEpiWSBundle::layout.html.twig";
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
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t";
        if (twig_test_empty($this->getAttribute($this->getContext($context, "results"), "articles", array(), "array"))) {
            // line 17
            echo "\t\t<h2>Pas d'articles correspondant à la recherche '";
            echo twig_escape_filter($this->env, $this->getContext($context, "searchval"), "html", null, true);
            echo "'</h2>
\t";
        } else {
            // line 19
            echo "\t\t<h2>Résultats d'articles :</h2>
\t\t";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "results"), "articles", array(), "array"));
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
                // line 21
                echo "\t\t\t<div class=\"rowarticles\"
\t\t\t\t";
                // line 22
                if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
                    echo " style=\"background-color:#EEEEFF;\"
\t\t\t\t";
                } else {
                    // line 23
                    echo " style=\"background-color:#EEFFEE;\"
\t\t\t\t";
                }
                // line 24
                echo ">
\t\t\t\t<br />
\t\t\t\t<div style=\"width:25%; position:absolute; margin-left:2%;\">
\t\t\t\t\t<img style=\"width:100%;\" src='
\t\t\t\t\t";
                // line 28
                if ($this->getAttribute($this->getContext($context, "item"), "image", array(), "array")) {
                    echo " item[\"image\"]
\t\t\t\t\t";
                } else {
                    // line 29
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/default.gif"), "html", null, true);
                    echo " ";
                }
                echo "' />
\t\t\t\t\t";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "image", array(), "array"), "html", null, true);
                echo " <br /><br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\tPublication :<br /> ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "parution", array(), "array"), "html", null, true);
                echo "<br />
\t\t\t\t\t\tConcernés : ";
                // line 33
                echo $this->getAttribute($this->getContext($context, "item"), "ecole", array(), "array");
                echo "<br />
\t\t\t\t\t\tPromotion : ";
                // line 34
                echo $this->getAttribute($this->getContext($context, "item"), "promo", array(), "array");
                echo "<br />
\t\t\t\t\t\tVille : ";
                // line 35
                echo $this->getAttribute($this->getContext($context, "item"), "ville", array(), "array");
                echo "<br />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"rowarticlescontent\" style=\"margin-left:30%;\">
\t\t\t\t\t<a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_article", array("id" => $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"))), "html", null, true);
                echo "\">
\t\t\t\t\t<h1>";
                // line 40
                echo $this->getAttribute($this->getContext($context, "item"), "titre", array(), "array");
                echo "</h1><br /></a>
\t\t\t\t\t<div class=\"row\" ><strong>Preview :</strong><br />
\t\t\t\t\t";
                // line 42
                echo $this->getAttribute($this->getContext($context, "item"), "contenu", array(), "array");
                echo " </div>
\t\t\t\t</div>
\t\t\t\t<br />
\t\t\t</div>
\t\t";
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
            // line 47
            echo "\t";
        }
        // line 48
        echo "\t";
        if (twig_test_empty($this->getAttribute($this->getContext($context, "results"), "events", array(), "array"))) {
            // line 49
            echo "\t\t<h2>Pas d'events correspondant à la recherche '";
            echo twig_escape_filter($this->env, $this->getContext($context, "searchval"), "html", null, true);
            echo "'</h2>
\t";
        } else {
            // line 51
            echo "\t\t<h2>Résultats d'events :</h2>
\t\t";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "results"), "events", array(), "array"));
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
                // line 53
                echo "\t\t\t<div class=\"rowarticles\"
\t\t\t\t";
                // line 54
                if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
                    echo " style=\"background-color:#EEEEFF;\"
\t\t\t\t";
                } else {
                    // line 55
                    echo " style=\"background-color:#EEFFEE;\"
\t\t\t\t";
                }
                // line 56
                echo ">
\t\t\t\t<br />
\t\t\t\t<div style=\"width:16%; position:absolute; margin-left:2%;\">
\t\t\t\t\t<img style=\"width:100%;\" src='
\t\t\t\t\t";
                // line 60
                if ($this->getAttribute($this->getContext($context, "item"), "image", array(), "array")) {
                    echo " item[\"image\"]
\t\t\t\t\t";
                } else {
                    // line 61
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/default.gif"), "html", null, true);
                    echo " ";
                }
                echo "' />
\t\t\t\t\t";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "image", array(), "array"), "html", null, true);
                echo " <br /><br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\tPublication :<br /> ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "parution", array(), "array"), "html", null, true);
                echo "<br />
\t\t\t\t\t\tConcernés : ";
                // line 65
                echo $this->getAttribute($this->getContext($context, "item"), "ecole", array(), "array");
                echo "<br />
\t\t\t\t\t\tPromotion : ";
                // line 66
                echo $this->getAttribute($this->getContext($context, "item"), "promo", array(), "array");
                echo "<br />
\t\t\t\t\t\tVille : ";
                // line 67
                echo $this->getAttribute($this->getContext($context, "item"), "ville", array(), "array");
                echo "<br />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"rowarticlescontent\" style=\"margin-left:20%;\">
\t\t\t\t\t<a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_article", array("id" => $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"))), "html", null, true);
                echo "\">
\t\t\t\t\t<h1>";
                // line 72
                echo $this->getAttribute($this->getContext($context, "item"), "titre", array(), "array");
                echo "</h1><br /></a>
\t\t\t\t\t<div class=\"row\" ><strong>Preview :</strong><br />
\t\t\t\t\t";
                // line 74
                echo $this->getAttribute($this->getContext($context, "item"), "contenu", array(), "array");
                echo " </div>
\t\t\t\t</div>
\t\t\t\t<br />
\t\t\t</div>
\t\t";
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
            // line 79
            echo "\t";
        }
        // line 80
        echo "\t";
        if (twig_test_empty($this->getAttribute($this->getContext($context, "results"), "flashs", array(), "array"))) {
            // line 81
            echo "\t\t<h2>Pas de flash news correspondant à la recherche '";
            echo twig_escape_filter($this->env, $this->getContext($context, "searchval"), "html", null, true);
            echo "'</h2>
\t";
        } else {
            // line 83
            echo "\t\t<h2>Résultats de flash news :</h2>
\t\t<form method=\"post\" id=\"sendflash\" name=\"sendflash\">
\t\t";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "results"), "flashs", array(), "array"));
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
                // line 86
                echo "\t\t\t<div class=\"rowarticles\"
\t\t\t\t";
                // line 87
                if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
                    echo " style=\"background-color:#EEEEFF;\"
\t\t\t\t";
                } else {
                    // line 88
                    echo " style=\"background-color:#EEFFEE;\"
\t\t\t\t";
                }
                // line 89
                echo ">
\t\t\t\t<br /><br />
\t\t\t\t\t<div class=\"divflashcontent\">";
                // line 91
                echo $this->getAttribute($this->getContext($context, "item"), "contenu", array(), "array");
                echo "</div>
\t\t\t\t\t<a onclick=\"document.getElementById('difflash').value = 1;
\t\t\t\t\tdocument.getElementById('flashid').value = ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
                echo ";
\t\t\t\t\tdocument.forms['sendflash'].submit();\">+1</a> /
\t\t\t\t\t<a onclick=\"document.getElementById('difflash').value = -1;
\t\t\t\t\tdocument.getElementById('flashid').value = ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"), "html", null, true);
                echo ";
\t\t\t\t\tdocument.forms['sendflash'].submit();\">-1</a>
\t\t\t\t\t<div style=\"float:right\">";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flashscores"), ($this->getAttribute($this->getContext($context, "loop"), "index") - 1), array(), "array"), "html", null, true);
                echo "</div>
\t\t\t\t<br /><br />
\t\t\t</div>
\t\t";
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
            // line 102
            echo "\t\t<input type=\"text\" value=\"0\" id=\"difflash\" name=\"difflash\" style=\"display:none;\" />
\t\t<input type=\"text\" value=\"0\" id=\"flashid\" name=\"flashid\" style=\"display:none;\" />
\t\t</form><br />
\t";
        }
    }

    // line 108
    public function block_banner($context, array $blocks = array())
    {
        // line 109
        echo "\t";
        $this->displayParentBlock("banner", $context, $blocks);
        echo "
";
    }

    // line 112
    public function block_header($context, array $blocks = array())
    {
        // line 113
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 116
    public function block_footer($context, array $blocks = array())
    {
        // line 117
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 117,  401 => 116,  394 => 113,  391 => 112,  384 => 109,  381 => 108,  373 => 102,  355 => 98,  350 => 96,  344 => 93,  339 => 91,  335 => 89,  331 => 88,  326 => 87,  323 => 86,  306 => 85,  302 => 83,  296 => 81,  293 => 80,  290 => 79,  271 => 74,  266 => 72,  262 => 71,  255 => 67,  251 => 66,  247 => 65,  243 => 64,  238 => 62,  231 => 61,  226 => 60,  220 => 56,  216 => 55,  211 => 54,  208 => 53,  191 => 52,  188 => 51,  182 => 49,  179 => 48,  176 => 47,  157 => 42,  152 => 40,  148 => 39,  141 => 35,  137 => 34,  133 => 33,  129 => 32,  124 => 30,  117 => 29,  112 => 28,  106 => 24,  102 => 23,  97 => 22,  94 => 21,  77 => 20,  74 => 19,  68 => 17,  65 => 16,  62 => 15,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
