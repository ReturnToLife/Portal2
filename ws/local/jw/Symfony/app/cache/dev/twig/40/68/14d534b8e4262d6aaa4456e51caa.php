<?php

/* ReturnEpiWSBundle:WS:articles.html.twig */
class __TwigTemplate_406814d534b8e4262d6aaa4456e51caa extends Twig_Template
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
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
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
            // line 25
            echo "\t\t<div class=\"rowarticles\"
\t\t\t";
            // line 26
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
                echo " style=\"background-color:#EEEEFF;\"
\t\t\t";
            } else {
                // line 27
                echo " style=\"background-color:#EEFFEE;\"
\t\t\t";
            }
            // line 28
            echo ">
\t\t\t<br />
\t\t\t<div style=\"width:25%; position:absolute; margin-left:2%;\">
\t\t\t<img style=\"width:100%;\" src='
\t\t\t\t";
            // line 32
            if ($this->getAttribute($this->getContext($context, "item"), "image", array(), "array")) {
                echo " item[\"image\"]
\t\t\t\t";
            } else {
                // line 33
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/default.gif"), "html", null, true);
                echo " ";
            }
            echo "' />
\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "image", array(), "array"), "html", null, true);
            echo " <br /><br />
\t\t\t\t<div class=\"row\">
\t\t\t\t\tPublication : ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "parution", array(), "array"), "html", null, true);
            echo "<br />
\t\t\t\t\tConcernés : ";
            // line 37
            echo $this->getAttribute($this->getContext($context, "item"), "ecole", array(), "array");
            echo "<br />
\t\t\t\t\tPromotion : ";
            // line 38
            echo $this->getAttribute($this->getContext($context, "item"), "promo", array(), "array");
            echo "<br />
\t\t\t\t\tVille : ";
            // line 39
            echo $this->getAttribute($this->getContext($context, "item"), "ville", array(), "array");
            echo "<br />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"rowarticlescontent\" style=\"margin-left:30%;\">
\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_article", array("id" => $this->getAttribute($this->getContext($context, "item"), "id", array(), "array"))), "html", null, true);
            echo "\">
\t\t\t\t<h1>";
            // line 44
            echo $this->getAttribute($this->getContext($context, "item"), "titre", array(), "array");
            echo "</h1><br /></a>
\t\t\t\t<div class=\"row\" ><strong>Preview :</strong><br />
\t\t\t\t";
            // line 46
            echo $this->getAttribute($this->getContext($context, "item"), "contenu", array(), "array");
            echo " </div>
\t\t\t</div>
\t\t\t<br />
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
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 54,  187 => 53,  166 => 46,  161 => 44,  157 => 43,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  133 => 34,  126 => 33,  121 => 32,  115 => 28,  111 => 27,  106 => 26,  103 => 25,  85 => 24,  82 => 23,  75 => 20,  72 => 19,  65 => 16,  62 => 15,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
