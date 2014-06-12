<?php

/* CorresponsaliaBundle:Tipomoneda:new.html.twig */
class __TwigTemplate_d879f9d599b3aa5579b11a38bb446c7d8fe6b6f57d68e41e475998b6bc209f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulomodulo' => array($this, 'block_titulomodulo'),
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
    <h1>NUEVO TIPO DE MONEDA</h1>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 10
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipomoneda"), 'errors')) {
            // line 11
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipomoneda"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 16
        echo "
    <form novalidate method=\"post\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("tipomoneda_create");
        echo "\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo moneda:</div>
                <div class=\"widgetform\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipomoneda"), 'widget');
        echo "</div>
            </div>
        </div>
        
        <input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("tipomoneda");
        echo "\">IR AL LISTADO</a>
    </form>


";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tipomoneda:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 73,  160 => 70,  153 => 66,  178 => 76,  76 => 22,  84 => 37,  129 => 54,  65 => 18,  170 => 74,  146 => 49,  70 => 20,  205 => 85,  200 => 83,  192 => 81,  175 => 67,  148 => 64,  124 => 49,  118 => 47,  114 => 38,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 46,  104 => 35,  100 => 34,  152 => 60,  113 => 32,  90 => 35,  77 => 26,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 75,  161 => 69,  155 => 67,  150 => 64,  134 => 57,  126 => 52,  110 => 38,  97 => 36,  81 => 27,  58 => 28,  137 => 49,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 55,  128 => 50,  107 => 38,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 69,  143 => 61,  135 => 62,  119 => 44,  102 => 39,  71 => 22,  67 => 26,  63 => 23,  59 => 15,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 92,  196 => 82,  183 => 69,  171 => 66,  166 => 72,  163 => 70,  158 => 68,  156 => 66,  151 => 53,  142 => 62,  138 => 52,  136 => 58,  121 => 43,  117 => 41,  105 => 28,  91 => 33,  62 => 29,  49 => 14,  31 => 4,  26 => 6,  25 => 3,  94 => 37,  89 => 26,  85 => 30,  75 => 27,  68 => 23,  56 => 21,  24 => 2,  19 => 1,  93 => 34,  88 => 28,  78 => 26,  46 => 11,  44 => 12,  27 => 1,  79 => 27,  72 => 25,  69 => 24,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 62,  139 => 51,  131 => 48,  123 => 45,  120 => 48,  115 => 46,  111 => 39,  108 => 42,  101 => 39,  98 => 25,  96 => 33,  83 => 31,  74 => 30,  66 => 22,  55 => 14,  52 => 20,  50 => 10,  43 => 6,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 77,  176 => 67,  173 => 65,  168 => 72,  164 => 71,  162 => 57,  154 => 65,  149 => 64,  147 => 56,  144 => 63,  141 => 50,  133 => 58,  130 => 44,  125 => 48,  122 => 50,  116 => 42,  112 => 41,  109 => 44,  106 => 43,  103 => 39,  99 => 46,  95 => 32,  92 => 42,  86 => 32,  82 => 24,  80 => 34,  73 => 25,  64 => 18,  60 => 17,  57 => 16,  54 => 27,  51 => 13,  48 => 19,  45 => 10,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
