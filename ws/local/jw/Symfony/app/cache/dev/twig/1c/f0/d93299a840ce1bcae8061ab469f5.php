<?php

/* ReturnEpiWSBundle:WS:assoheader.html.twig */
class __TwigTemplate_1cf0d93299a840ce1bcae8061ab469f5 extends Twig_Template
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
            echo "\t<div style=\"float:right;\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_accueil"), "html", null, true);
            echo "\">Index Return</a></div>
\t<br /><form method=\"post\" name=\"dcform\">
\t\t<strong>Consulter :</strong><br /><br />
\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "visible"));
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
                // line 6
                echo "\t\t\t";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 4) == 0)) {
                    // line 7
                    echo "\t\t\t\t<br />
\t\t\t";
                }
                // line 9
                echo "\t\t\t &nbsp;&nbsp; <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("WS_asso", array("name" => $this->getContext($context, "name"), "tool" => $this->getAttribute($this->getContext($context, "item"), "name", array(), "array"))), "html", null, true);
                echo "\">
\t\t\t";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name", array(), "array"), "html", null, true);
                echo "</a>
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
            // line 12
            echo "\t\t<input type=\"submit\" value=\"Disconnect\" name=\"senddc\" id=\"senddc\" style=\"float:right;\" />
\t</form><br />
";
        } else {
            // line 15
            echo "<br /><form method=\"post\" name=\"loginform\"><strong>
\tLogin <input type=\"text\" name=\"login\" id=\"login\" size=\"10\" />&nbsp;&nbsp;
\tPassword <input type=\"password\" name=\"mdp\" id=\"mdp\" size=\"10\" />
\t<input type=\"submit\" value=\"Login\" name=\"sendlogin\" id=\"sendlogin\" 
\tstyle=\"float:right; display:block;\" />
</strong></form><br />
";
        }
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "ReturnEpiWSBundle:WS:assoheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  76 => 15,  71 => 12,  55 => 10,  50 => 9,  46 => 7,  43 => 6,  26 => 5,  19 => 2,  17 => 1,);
    }
}
