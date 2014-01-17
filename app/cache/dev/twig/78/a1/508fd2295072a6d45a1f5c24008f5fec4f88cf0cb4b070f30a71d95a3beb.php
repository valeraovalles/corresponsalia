<?php

/* ::base.html.twig */
class __TwigTemplate_78a1508fd2295072a6d45a1f5c24008f5fec4f88cf0cb4b070f30a71d95a3beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titulobanner' => array($this, 'block_titulobanner'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'mensaje' => array($this, 'block_mensaje'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </head>

    <body>
        <div align='center'>
            <div class=\"contenedorprincipal\">
                <div id='banner'><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/banner.png"), "html", null, true);
        echo "\"></div>
                <div class=\"titulo-banner\">UBICACIÓN ACTUAL: ";
        // line 28
        $this->displayBlock('titulobanner', $context, $blocks);
        echo "</div>
                <div class=\"menu\">";
        // line 29
        $this->displayBlock('menu', $context, $blocks);
        echo "</div>
                <div id=\"contenedor\">
                    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "                    <br>
                </div>
                <footer>
                    <div class=\"pie\">
                        La Nueva Televisión del Sur C.A. (TVSUR) TeleSUR © | Todo el contenido de esta página es exclusivo para el uso interno del canal. RIF. G-20004500-0 
                    </div>
                </footer>
            </div>
        </div>
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Corresponsalia";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryui.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatable.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("libs/bootstrap3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/general.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("libs/menu/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datatable.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("libs/bootstrap3/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jqueryui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 28
    public function block_titulobanner($context, array $blocks = array())
    {
        echo " ";
    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "
                        ";
        // line 33
        $this->displayBlock('mensaje', $context, $blocks);
        // line 36
        echo "
                    ";
    }

    // line 33
    public function block_mensaje($context, array $blocks = array())
    {
        // line 34
        echo "                            ";
        $this->env->loadTemplate("CorresponsaliaBundle:Includes:menu.html.twig")->display($context);
        // line 35
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 35,  167 => 34,  164 => 33,  159 => 36,  154 => 32,  151 => 31,  140 => 28,  134 => 20,  130 => 19,  126 => 18,  122 => 17,  116 => 15,  113 => 14,  106 => 10,  102 => 9,  98 => 8,  93 => 7,  66 => 31,  61 => 29,  57 => 28,  53 => 27,  44 => 14,  41 => 13,  39 => 6,  35 => 5,  31 => 4,  26 => 1,  209 => 121,  204 => 119,  171 => 88,  169 => 87,  161 => 82,  157 => 33,  153 => 80,  146 => 29,  142 => 75,  90 => 6,  84 => 5,  80 => 21,  76 => 20,  72 => 19,  68 => 38,  64 => 17,  60 => 16,  56 => 14,  54 => 13,  46 => 22,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
