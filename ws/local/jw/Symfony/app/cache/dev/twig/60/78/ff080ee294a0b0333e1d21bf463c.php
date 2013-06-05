<?php

/* ::baseIndex.html.twig */
class __TwigTemplate_6078ff080ee294a0b0333e1d21bf463c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'flash' => array($this, 'block_flash'),
            'flash1' => array($this, 'block_flash1'),
            'flash2' => array($this, 'block_flash2'),
            'flash3' => array($this, 'block_flash3'),
            'flash4' => array($this, 'block_flash4'),
            'flash5' => array($this, 'block_flash5'),
            'event' => array($this, 'block_event'),
            'event1' => array($this, 'block_event1'),
            'event2' => array($this, 'block_event2'),
            'article' => array($this, 'block_article'),
            'artgeneral' => array($this, 'block_artgeneral'),
            'artpedago' => array($this, 'block_artpedago'),
            'artlabo' => array($this, 'block_artlabo'),
            'artasso' => array($this, 'block_artasso'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "\t<script>
\t
\t</script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
\t<div class=\"divindexflash\">
\t";
        // line 12
        $this->displayBlock('flash', $context, $blocks);
        // line 39
        echo "\t</div>

\t<div class=\"divindexevent\">
\t";
        // line 42
        $this->displayBlock('event', $context, $blocks);
        // line 54
        echo "\t</div>

\t<div class=\"divindexarticle\">
\t";
        // line 57
        $this->displayBlock('article', $context, $blocks);
        // line 93
        echo "\t</div>
";
    }

    // line 12
    public function block_flash($context, array $blocks = array())
    {
        // line 13
        echo "\t\t<div class=\"divflash\">
\t\t";
        // line 14
        $this->displayBlock('flash1', $context, $blocks);
        // line 17
        echo "\t\t</div>
\t\t<div class=\"divflash\">
\t\t";
        // line 19
        $this->displayBlock('flash2', $context, $blocks);
        // line 22
        echo "\t\t</div>
\t\t<div class=\"divflash\">
\t\t";
        // line 24
        $this->displayBlock('flash3', $context, $blocks);
        // line 27
        echo "\t\t</div>
\t\t<div class=\"divflash\">
\t\t";
        // line 29
        $this->displayBlock('flash4', $context, $blocks);
        // line 32
        echo "\t\t</div>
\t\t<div class=\"divflash\">
\t\t";
        // line 34
        $this->displayBlock('flash5', $context, $blocks);
        // line 37
        echo "\t\t</div>
\t";
    }

    // line 14
    public function block_flash1($context, array $blocks = array())
    {
        // line 15
        echo "\t\t<h2>FLASH NEW 1</h2>
\t\t";
    }

    // line 19
    public function block_flash2($context, array $blocks = array())
    {
        // line 20
        echo "\t\t<h2>FLASH NEW 2</h2>
\t\t";
    }

    // line 24
    public function block_flash3($context, array $blocks = array())
    {
        // line 25
        echo "\t\t<h2>FLASH NEW 3</h2>
\t\t";
    }

    // line 29
    public function block_flash4($context, array $blocks = array())
    {
        // line 30
        echo "\t\t<h2>FLASH NEW 4</h2>
\t\t";
    }

    // line 34
    public function block_flash5($context, array $blocks = array())
    {
        // line 35
        echo "\t\t<h2>FLASH NEW 5</h2>
\t\t";
    }

    // line 42
    public function block_event($context, array $blocks = array())
    {
        // line 43
        echo "\t\t<div class=\"divevent\" style=\"float:left;\">
\t\t";
        // line 44
        $this->displayBlock('event1', $context, $blocks);
        // line 47
        echo "\t\t</div>
\t\t<div class=\"divevent\" style=\"float:right;\">
\t\t";
        // line 49
        $this->displayBlock('event2', $context, $blocks);
        // line 52
        echo "\t\t</div>
\t";
    }

    // line 44
    public function block_event1($context, array $blocks = array())
    {
        // line 45
        echo "\t\t<h2>EVENT 1</h2>
\t\t";
    }

    // line 49
    public function block_event2($context, array $blocks = array())
    {
        // line 50
        echo "\t\t<h2>EVENT 2</h2>
\t\t";
    }

    // line 57
    public function block_article($context, array $blocks = array())
    {
        // line 58
        echo "\t\t<div class=\"divartleft\" style=\"background-color:#CCCCCC\" id=\"a1\"
\t\tonclick=\"scrollDivUp('a1');\">
\t\t\t<a href=\"articles/1\">
\t\t\t";
        // line 61
        $this->displayBlock('artgeneral', $context, $blocks);
        // line 64
        echo "\t\t\t</a>
\t\t</div>
\t\t<div class=\"divartright\" style=\"background-color:#33AA33\" id=\"a2\"
\t\tonclick=\"scrollDivUp('a2');\">
\t\t\t<a href=\"articles/2\">
\t\t\t";
        // line 69
        $this->displayBlock('artpedago', $context, $blocks);
        // line 72
        echo "\t\t\t</a>
\t\t</div>
\t\t
\t\t<div class=\"divartleft\" style=\"background-color:#3333CC\" id=\"a3\"
\t\tonclick=\"scrollDivUp('a3');\">
\t\t\t<a href=\"articles/3\">
\t\t\t";
        // line 78
        $this->displayBlock('artlabo', $context, $blocks);
        // line 81
        echo "\t\t\t</a>
\t\t</div>
\t\t
\t\t<div class=\"divartright\" style=\"background-color:#EE8800\" id=\"a4\"
\t\tonclick=\"scrollDivUp('a4');\">
\t\t\t<a href=\"articles/4\">
\t\t\t";
        // line 87
        $this->displayBlock('artasso', $context, $blocks);
        // line 90
        echo "\t\t\t</a>
\t\t</div>
\t";
    }

    // line 61
    public function block_artgeneral($context, array $blocks = array())
    {
        // line 62
        echo "\t\t\t<h2>ARTICLES GENERAUX</h2>
\t\t\t";
    }

    // line 69
    public function block_artpedago($context, array $blocks = array())
    {
        // line 70
        echo "\t\t\t<h2>ARTICLES PEDAGO</h2>
\t\t\t";
    }

    // line 78
    public function block_artlabo($context, array $blocks = array())
    {
        // line 79
        echo "\t\t\t<h2>ARTICLES LABO</h2>
\t\t\t";
    }

    // line 87
    public function block_artasso($context, array $blocks = array())
    {
        // line 88
        echo "\t\t\t<h2>ARTICLES ASSO</h2>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "::baseIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 88,  262 => 87,  257 => 79,  254 => 78,  249 => 70,  246 => 69,  241 => 62,  238 => 61,  232 => 90,  230 => 87,  222 => 81,  220 => 78,  212 => 72,  210 => 69,  203 => 64,  201 => 61,  196 => 58,  193 => 57,  188 => 50,  185 => 49,  180 => 45,  177 => 44,  172 => 52,  170 => 49,  166 => 47,  164 => 44,  161 => 43,  158 => 42,  153 => 35,  150 => 34,  145 => 30,  142 => 29,  137 => 25,  134 => 24,  129 => 20,  126 => 19,  121 => 15,  118 => 14,  113 => 37,  111 => 34,  107 => 32,  105 => 29,  101 => 27,  99 => 24,  95 => 22,  93 => 19,  89 => 17,  87 => 14,  84 => 13,  81 => 12,  76 => 93,  74 => 57,  69 => 54,  67 => 42,  62 => 39,  60 => 12,  54 => 10,  51 => 9,  44 => 4,  41 => 3,);
    }
}
