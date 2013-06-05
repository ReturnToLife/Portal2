<?php

/* ReturnEpiWSBundle:WS:article.html.twig */
class __TwigTemplate_3457c7b3872aa1c62716dc2ac76ef4b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ReturnEpiWSBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'banner' => array($this, 'block_banner'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "\t<div style=\"width:25%; position:absolute; margin-left:2%;\">
\t\t<img style=\"width:100%;\" src='
\t\t";
        // line 26
        if ($this->getAttribute($this->getContext($context, "article"), "image", array(), "array")) {
            echo " article[\"image\"]
\t\t";
        } else {
            // line 27
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/default.gif"), "html", null, true);
            echo " ";
        }
        echo "' />
\t\t";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "image", array(), "array"), "html", null, true);
        echo " <br /><br />
\t\t<div class=\"row\">
\t\t\tPublication : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "parution", array(), "array"), "html", null, true);
        echo "<br />
\t\t\tConcernés : ";
        // line 31
        echo $this->getAttribute($this->getContext($context, "article"), "ecole", array(), "array");
        echo "<br />
\t\t\tPromotion : ";
        // line 32
        echo $this->getAttribute($this->getContext($context, "article"), "promo", array(), "array");
        echo "<br />
\t\t\tVille : ";
        // line 33
        echo $this->getAttribute($this->getContext($context, "article"), "ville", array(), "array");
        echo "
\t\t\t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contribs"));
        foreach ($context['_seq'] as $context["contrib_type"] => $context["contrib_tab"]) {
            // line 35
            echo "\t\t\t\t<br /><br /><strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "contrib_type"), "html", null, true);
            echo " :</strong><br />
\t\t\t\t";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contrib_tab"));
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
                if (($this->getAttribute($this->getContext($context, "loop"), "index") > 1)) {
                    echo ",";
                }
                // line 37
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
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
            // line 38
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contrib_type'], $context['contrib_tab'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "\t\t</div>
\t</div>
\t<div class=\"rowarticlescontent\" style=\"margin-left:30%;\">
\t\t<h1>";
        // line 42
        echo $this->getAttribute($this->getContext($context, "article"), "titre", array(), "array");
        echo "</h1><br />
\t\t<div class=\"row\" >
\t\t";
        // line 44
        echo $this->getAttribute($this->getContext($context, "article"), "contenu", array(), "array");
        echo " </div>
\t</div>
";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 49,  189 => 48,  182 => 44,  177 => 42,  172 => 39,  166 => 38,  151 => 37,  131 => 36,  126 => 35,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  101 => 28,  94 => 27,  89 => 26,  85 => 24,  82 => 23,  75 => 20,  72 => 19,  65 => 16,  62 => 15,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
