<?php

/* ReturnEpiWSBundle:WS:manager.html.twig */
class __TwigTemplate_cb281b58211db0e6c19a22c334dfc5ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        return "::base.html.twig";
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
\t";
        // line 17
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:assobanner.html.twig")->display(array_merge($context, array("name" => $this->getContext($context, "name"))));
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
\t";
        // line 22
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:assoheader.html.twig")->display(array_merge($context, array("visible" => $this->getContext($context, "visible"), "name" => $this->getContext($context, "name"))));
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
\t<div style=\"float:right;\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_assos"), "html", null, true);
        echo "\">
\tRetour à la liste de mes assos</a></div><br />
\t<strong>Les outils de gestion auquels j'ai accès pour l'association ";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " :</strong><br />
\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tools"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "\t\t&nbsp;&nbsp; <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_manager", array("name" => $this->getContext($context, "name"), "tool" => $this->getAttribute($this->getContext($context, "item"), "name", array(), "array"))), "html", null, true);
            echo "\">
\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name", array(), "array"), "html", null, true);
            echo "</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getContext($context, "tool"), "html", null, true);
        echo " manager</h1>
\t";
        // line 36
        if ((!twig_test_empty($this->getContext($context, "id")))) {
            // line 37
            echo "\t\t";
            $template = $this->env->resolveTemplate((("ReturnEpiWSBundle:WS:" . twig_lower_filter($this->env, $this->getContext($context, "tool"))) . "manageritem.html.twig"));
            $template->display(array_merge($context, array("infos" => $this->getContext($context, "infos"))));
            // line 38
            echo "\t";
        } else {
            // line 39
            echo "\t\t";
            $template = $this->env->resolveTemplate((("ReturnEpiWSBundle:WS:" . twig_lower_filter($this->env, $this->getContext($context, "tool"))) . "manager.html.twig"));
            $template->display(array_merge($context, array("infos" => $this->getContext($context, "infos"))));
            // line 40
            echo "\t";
        }
        // line 41
        echo "\t<br /><div style=\"float:right;\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_assos"), "html", null, true);
        echo "\">
\tRetour à la liste de mes assos</a></div><br /><br />
";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t";
        // line 47
        $this->env->loadTemplate("ReturnEpiWSBundle:WS:assofooter.html.twig")->display(array_merge($context, array("asso" => $this->getContext($context, "asso"))));
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 47,  152 => 46,  149 => 45,  141 => 41,  138 => 40,  134 => 39,  131 => 38,  127 => 37,  125 => 36,  120 => 35,  112 => 33,  107 => 32,  103 => 31,  99 => 30,  94 => 28,  89 => 27,  86 => 26,  82 => 22,  77 => 21,  74 => 20,  70 => 17,  65 => 16,  62 => 15,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
