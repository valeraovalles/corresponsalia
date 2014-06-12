<?php

/* CorresponsaliaBundle:Corresponsalia:edit.html.twig */
class __TwigTemplate_1aee1d116f88ee2d726591ff39b9f9d63aa677d719c1f316f9074ff20eda1f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <h1>EDITAR CORRESPONSALÍA</h1>

    ";
        // line 8
        if (((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pais"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipocorresponsalia"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipomoneda"), 'errors'))) {
            // line 9
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'errors');
            echo "</div>
        <div>";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pais"), 'errors');
            echo "</div>
        <div>";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipocorresponsalia"), 'errors');
            echo "</div>
        <div>";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipomoneda"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 17
        echo "    
    
    <form novalidate method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\"> ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Nombre:</div>
                <div class=\"widgetform\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">País:</div>
                <div class=\"widgetform\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pais"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo:</div>
                <div class=\"widgetform\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipocorresponsalia"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo moneda:</div>
                <div class=\"widgetform\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipomoneda"), 'widget');
        echo "</div>
            </div>
        </div>
        <input type=\"submit\" value=\"EDITAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("corresponsalia");
        echo "\">IR AL LISTADO</a>
    </form>
    <br>
    ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'errors');
        echo "
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Corresponsalia:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 73,  160 => 70,  153 => 66,  178 => 76,  76 => 22,  84 => 28,  129 => 54,  65 => 21,  170 => 74,  146 => 49,  70 => 20,  205 => 85,  200 => 83,  192 => 81,  175 => 67,  148 => 64,  124 => 49,  118 => 47,  114 => 38,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 44,  104 => 39,  100 => 34,  152 => 60,  113 => 32,  90 => 35,  77 => 24,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 75,  161 => 69,  155 => 67,  150 => 64,  134 => 57,  126 => 52,  110 => 39,  97 => 31,  81 => 27,  58 => 28,  137 => 49,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 55,  128 => 50,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 69,  143 => 61,  135 => 62,  119 => 45,  102 => 39,  71 => 24,  67 => 19,  63 => 15,  59 => 19,  28 => 3,  38 => 8,  87 => 24,  21 => 2,  201 => 92,  196 => 82,  183 => 69,  171 => 66,  166 => 72,  163 => 70,  158 => 68,  156 => 66,  151 => 53,  142 => 62,  138 => 52,  136 => 58,  121 => 43,  117 => 41,  105 => 40,  91 => 32,  62 => 17,  49 => 19,  31 => 4,  26 => 6,  25 => 3,  94 => 37,  89 => 30,  85 => 26,  75 => 22,  68 => 18,  56 => 14,  24 => 2,  19 => 1,  93 => 30,  88 => 28,  78 => 22,  46 => 11,  44 => 11,  27 => 1,  79 => 26,  72 => 18,  69 => 24,  47 => 11,  40 => 9,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 62,  139 => 51,  131 => 48,  123 => 46,  120 => 48,  115 => 44,  111 => 43,  108 => 42,  101 => 39,  98 => 36,  96 => 35,  83 => 27,  74 => 25,  66 => 19,  55 => 13,  52 => 13,  50 => 10,  43 => 10,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 77,  176 => 67,  173 => 65,  168 => 72,  164 => 71,  162 => 57,  154 => 65,  149 => 64,  147 => 56,  144 => 63,  141 => 50,  133 => 58,  130 => 44,  125 => 48,  122 => 50,  116 => 42,  112 => 41,  109 => 44,  106 => 38,  103 => 39,  99 => 34,  95 => 32,  92 => 30,  86 => 29,  82 => 26,  80 => 28,  73 => 25,  64 => 17,  60 => 14,  57 => 16,  54 => 16,  51 => 12,  48 => 12,  45 => 9,  42 => 10,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
