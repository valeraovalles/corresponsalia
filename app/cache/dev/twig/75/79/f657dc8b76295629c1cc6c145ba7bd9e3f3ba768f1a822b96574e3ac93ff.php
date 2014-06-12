<?php

/* ::base.html.twig */
class __TwigTemplate_7579f657dc8b76295629c1cc6c145ba7bd9e3f3ba768f1a822b96574e3ac93ff extends Twig_Template
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
            'titulomodulo' => array($this, 'block_titulomodulo'),
            'js_tecnologia' => array($this, 'block_js_tecnologia'),
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
        // line 48
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
    ";
        // line 58
        $this->displayBlock('js_tecnologia', $context, $blocks);
        // line 59
        echo "</html>
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
        echo "                            ";
        $this->env->loadTemplate("CorresponsaliaBundle:Includes:menu.html.twig")->display($context);
        // line 33
        echo "                    
                            ";
        // line 34
        $this->displayBlock('titulomodulo', $context, $blocks);
        // line 35
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 36
            echo "                                <div class=\"alert alert-success\">
                                    ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "                                <div class=\"alert alert-danger\">
                                    ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                    ";
    }

    // line 34
    public function block_titulomodulo($context, array $blocks = array())
    {
    }

    // line 58
    public function block_js_tecnologia($context, array $blocks = array())
    {
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
        return array (  212 => 58,  207 => 34,  202 => 46,  193 => 43,  190 => 42,  186 => 41,  183 => 40,  174 => 37,  171 => 36,  166 => 35,  164 => 34,  161 => 33,  158 => 32,  150 => 29,  144 => 28,  138 => 20,  134 => 19,  130 => 18,  126 => 17,  120 => 15,  97 => 7,  94 => 6,  88 => 5,  83 => 59,  81 => 58,  69 => 48,  67 => 31,  62 => 29,  58 => 28,  54 => 27,  47 => 22,  45 => 14,  42 => 13,  36 => 5,  32 => 4,  27 => 1,  255 => 128,  200 => 76,  195 => 73,  187 => 70,  184 => 69,  178 => 67,  175 => 66,  169 => 64,  163 => 62,  160 => 61,  157 => 60,  155 => 31,  151 => 58,  147 => 57,  140 => 55,  137 => 54,  131 => 52,  129 => 51,  125 => 49,  121 => 47,  117 => 14,  115 => 44,  110 => 10,  106 => 9,  102 => 8,  98 => 39,  95 => 38,  91 => 37,  73 => 22,  70 => 21,  64 => 17,  59 => 16,  56 => 15,  50 => 12,  40 => 6,  37 => 5,  31 => 3,);
    }
}
