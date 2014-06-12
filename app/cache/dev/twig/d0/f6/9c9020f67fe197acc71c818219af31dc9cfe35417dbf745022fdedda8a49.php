<?php

/* CorresponsaliaBundle:Tecnologia/Categoria:new.html.twig */
class __TwigTemplate_d0f69c9020f67fe197acc71c818219af31dc9cfe35417dbf745022fdedda8a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulomodulo' => array($this, 'block_titulomodulo'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
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
    public function block_titulomodulo($context, array $blocks = array())
    {
        echo "  
    <h1>NUEVA CATEGORIA</h1>
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/effects.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 15
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors')) {
            // line 16
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 21
        echo "
    <form novalidate method=\"post\" action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tecnocategoria_create");
        echo "\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Nombre:</div>
                <div class=\"widgetform\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("attr" => array("class" => "strtoupper")));
        echo "</div>
            </div>
        </div>
        
        <input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("tecnocategoria");
        echo "\">IR AL LISTADO</a>
    </form>


";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Categoria:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  194 => 70,  191 => 70,  180 => 62,  172 => 49,  160 => 70,  153 => 57,  178 => 52,  76 => 15,  84 => 28,  129 => 62,  65 => 21,  170 => 57,  146 => 38,  70 => 22,  205 => 85,  200 => 73,  192 => 81,  175 => 60,  148 => 64,  124 => 49,  118 => 40,  114 => 39,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 69,  184 => 79,  167 => 47,  127 => 53,  104 => 42,  100 => 40,  152 => 60,  113 => 46,  90 => 35,  77 => 33,  212 => 58,  207 => 34,  202 => 46,  190 => 55,  186 => 54,  174 => 75,  161 => 44,  155 => 71,  150 => 39,  134 => 44,  126 => 49,  110 => 45,  97 => 31,  81 => 31,  58 => 28,  137 => 35,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 33,  128 => 32,  107 => 25,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 62,  159 => 42,  143 => 37,  135 => 64,  119 => 57,  102 => 39,  71 => 32,  67 => 19,  63 => 15,  59 => 19,  28 => 3,  38 => 7,  87 => 19,  21 => 2,  201 => 92,  196 => 71,  183 => 69,  171 => 48,  166 => 72,  163 => 43,  158 => 68,  156 => 41,  151 => 40,  142 => 55,  138 => 65,  136 => 58,  121 => 28,  117 => 48,  105 => 24,  91 => 32,  62 => 16,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 32,  89 => 47,  85 => 28,  75 => 22,  68 => 31,  56 => 18,  24 => 2,  19 => 1,  93 => 37,  88 => 28,  78 => 24,  46 => 9,  44 => 15,  27 => 1,  79 => 23,  72 => 21,  69 => 25,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 43,  145 => 67,  139 => 51,  131 => 48,  123 => 51,  120 => 48,  115 => 55,  111 => 26,  108 => 52,  101 => 39,  98 => 39,  96 => 49,  83 => 27,  74 => 23,  66 => 18,  55 => 13,  52 => 12,  50 => 10,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 79,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 53,  176 => 67,  173 => 65,  168 => 56,  164 => 71,  162 => 57,  154 => 40,  149 => 47,  147 => 56,  144 => 63,  141 => 36,  133 => 34,  130 => 33,  125 => 31,  122 => 41,  116 => 44,  112 => 41,  109 => 40,  106 => 39,  103 => 24,  99 => 23,  95 => 22,  92 => 34,  86 => 27,  82 => 26,  80 => 28,  73 => 18,  64 => 20,  60 => 15,  57 => 16,  54 => 16,  51 => 13,  48 => 10,  45 => 9,  42 => 13,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
