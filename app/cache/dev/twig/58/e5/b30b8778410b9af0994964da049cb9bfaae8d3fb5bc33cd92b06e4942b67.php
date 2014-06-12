<?php

/* CorresponsaliaBundle:Estadofondo:show.html.twig */
class __TwigTemplate_58e5b30b8778410b9af0994964da049cb9bfaae8d3fb5bc33cd92b06e4942b67 extends Twig_Template
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
        echo "<h1>Estado Fondo</h1>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
       
    <div class=\"formShow\" style=\"width:80%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Corresponsalia:</div>
            <div class=\"widgetform\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periodorendicion"), "corresponsalia"), "nombre")), "html", null, true);
        echo "</div>
        </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">País:</div>
                <div class=\"widgetform\">";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periodorendicion"), "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo "</div>
            </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Tipo gasto:</div>
            <div class=\"widgetform\">";
        // line 19
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periodorendicion"), "tipogasto"), "descripcion")), "html", null, true);
        echo "</div>
        </div>
        
        ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periodorendicion"), "tipogasto"), "id") == 2)) {
            // line 23
            echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Cobertura:</div>
            <div class=\"widgetform\">";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periodorendicion"), "cobertura")), "html", null, true);
            echo "</div>
        </div>
        ";
        }
        // line 28
        echo "        
        <div class=\"contenedorform\">
            <div class=\"labelform\">Año:</div>
            <div class=\"widgetform\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periodorendicion"), "anio"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Mes:</div>
            <div class=\"widgetform\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periodorendicion"), "mes"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Saldo inicial:</div>
            <div class=\"widgetform\"><span class=\"label label-info\">";
        // line 39
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "saldoinicial")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "saldoinicial"), "html", null, true);
        } else {
            echo "No asignado";
        }
        echo "</span></div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Recurso enviado:</div>
            <div class=\"widgetform\"><span class=\"label label-info\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recursorecibido"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Pagos:</div>
            <div class=\"widgetform\"><span class=\"label label-danger\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pagos"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Saldo final:</div>
            <div class=\"widgetform\"><span class=\"label label-warning\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "saldofinal"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Fecha de registro:</div>
            <div class=\"widgetform\">";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaasignacion"), "d-m-Y"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Responsale:</div>
            <div class=\"widgetform\">";
        // line 59
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsable"), "primerNombre")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsable"), "primerApellido")), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 61
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacion")) {
            // line 62
            echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Observación:</div>
            <div class=\"widgetform\">";
            // line 64
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacion")), "html", null, true);
            echo "</div>
        </div>
        ";
        }
        // line 67
        echo "    </div>
    
    <a class=\"btn btn-default\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">IR AL LISTADO DE PERÍODOS</a>";
        // line 72
        echo "  
    <BR><BR>
    ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'errors');
        echo "
        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Estadofondo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 76,  76 => 22,  84 => 37,  129 => 55,  65 => 18,  170 => 74,  146 => 49,  70 => 20,  205 => 85,  200 => 83,  192 => 81,  175 => 67,  148 => 52,  124 => 49,  118 => 47,  114 => 38,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 46,  104 => 35,  100 => 34,  152 => 60,  113 => 32,  90 => 35,  77 => 26,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 75,  161 => 69,  155 => 67,  150 => 64,  134 => 57,  126 => 52,  110 => 38,  97 => 39,  81 => 27,  58 => 28,  137 => 49,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 55,  128 => 50,  107 => 38,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 69,  143 => 61,  135 => 62,  119 => 44,  102 => 39,  71 => 23,  67 => 26,  63 => 23,  59 => 15,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 92,  196 => 82,  183 => 69,  171 => 66,  166 => 72,  163 => 70,  158 => 68,  156 => 66,  151 => 53,  142 => 62,  138 => 52,  136 => 59,  121 => 43,  117 => 41,  105 => 28,  91 => 31,  62 => 29,  49 => 14,  31 => 4,  26 => 6,  25 => 3,  94 => 37,  89 => 26,  85 => 28,  75 => 27,  68 => 23,  56 => 21,  24 => 2,  19 => 1,  93 => 35,  88 => 28,  78 => 28,  46 => 11,  44 => 12,  27 => 1,  79 => 23,  72 => 25,  69 => 24,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 62,  139 => 51,  131 => 48,  123 => 45,  120 => 48,  115 => 47,  111 => 39,  108 => 43,  101 => 39,  98 => 25,  96 => 33,  83 => 31,  74 => 30,  66 => 22,  55 => 14,  52 => 20,  50 => 10,  43 => 6,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 77,  176 => 67,  173 => 65,  168 => 72,  164 => 71,  162 => 57,  154 => 65,  149 => 64,  147 => 56,  144 => 61,  141 => 50,  133 => 58,  130 => 44,  125 => 48,  122 => 51,  116 => 42,  112 => 41,  109 => 44,  106 => 43,  103 => 34,  99 => 46,  95 => 32,  92 => 42,  86 => 32,  82 => 24,  80 => 34,  73 => 25,  64 => 19,  60 => 19,  57 => 25,  54 => 27,  51 => 13,  48 => 19,  45 => 10,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
