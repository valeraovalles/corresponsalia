<?php

/* CorresponsaliaBundle:Periodorendicion:show.html.twig */
class __TwigTemplate_8faf49894e001c3d118e0b15d912e54dd9b3236fee9af0ed6926fcf8db7fdda7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulobanner' => array($this, 'block_titulobanner'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "CORRESPONSALÍA - CONSULTAR PERÍODO";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    CONSULTAR PERÍODO
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>CONSULTAR PERÍODO</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"formShow\" style=\"width:80%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Corresponsalia:</div>
            <div class=\"widgetform\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "corresponsalia"), "nombre"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">País:</div>
            <div class=\"widgetform\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "corresponsalia"), "pais"), "pais"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Tipo gasto:</div>
            <div class=\"widgetform\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipogasto"), "descripcion"), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipogasto"), "id") == 2)) {
            // line 30
            echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Cobertura:</div>
            <div class=\"widgetform\">";
            // line 32
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cobertura")), "html", null, true);
            echo "</div>
        </div>
        ";
        }
        // line 35
        echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Año:</div>
            <div class=\"widgetform\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anio"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Mes:</div>
            <div class=\"widgetform\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mes"), "html", null, true);
        echo "</div>
        </div>

        ";
        // line 44
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "justificadevolucion")) {
            // line 45
            echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Justificación:</div>
            <div class=\"widgetform\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "justificadevolucion"), "html", null, true);
            echo "</div>
        </div>
        ";
        }
        // line 50
        echo "
        <div class=\"contenedorform\">
            <div class=\"labelform\">Estatus:</div>
            <div class=\"widgetform\">
                ";
        // line 54
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 1)) {
            // line 55
            echo "                    <span class=\"label label-info\">Abierto</span>
                ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 2)) {
            // line 57
            echo "                    <span class=\"label label-warning\">Enviado para revisión</span>
                ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 3)) {
            // line 59
            echo "                    <span class=\"label label-danger\">Devuelto para corrección</span>
                ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 4)) {
            // line 61
            echo "                    <span class=\"label label-success\">Cerrado</span>
                ";
        }
        // line 63
        echo "            </div>
        </div>
        ";
        // line 65
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacion")) {
            // line 66
            echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Observacion:</div>
            <div class=\"widgetform\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacion"), "html", null, true);
            echo "</div>
        </div>
        ";
        }
        // line 71
        echo "
    </div>
    
    ";
        // line 74
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
            echo "<a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">IR A EDITAR</a> | ";
        }
        // line 75
        echo "    <a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">IR AL LISTADO</a>
  
    <BR><BR>
    ";
        // line 78
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
            // line 79
            echo "        ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") != 4)) {
                // line 80
                echo "            ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
                echo "
                ";
                // line 81
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'errors');
                echo "
                ";
                // line 82
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
                echo "
            ";
                // line 83
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
                echo "
        ";
            }
            // line 85
            echo "    ";
        }
        // line 86
        echo "    
    
    
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Periodorendicion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 85,  200 => 83,  192 => 81,  175 => 75,  148 => 63,  124 => 50,  118 => 47,  114 => 45,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 45,  104 => 38,  100 => 37,  152 => 65,  113 => 42,  90 => 33,  77 => 30,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 66,  161 => 33,  155 => 31,  150 => 57,  134 => 19,  126 => 17,  110 => 10,  97 => 7,  81 => 58,  58 => 28,  137 => 45,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 59,  132 => 55,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 58,  143 => 56,  135 => 49,  119 => 42,  102 => 8,  71 => 23,  67 => 31,  63 => 14,  59 => 14,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 92,  196 => 82,  183 => 40,  171 => 65,  166 => 35,  163 => 62,  158 => 68,  156 => 66,  151 => 53,  142 => 59,  138 => 20,  136 => 57,  121 => 42,  117 => 44,  105 => 38,  91 => 27,  62 => 29,  49 => 19,  31 => 3,  26 => 6,  25 => 3,  94 => 34,  89 => 32,  85 => 30,  75 => 21,  68 => 14,  56 => 14,  24 => 2,  19 => 1,  93 => 35,  88 => 5,  78 => 27,  46 => 7,  44 => 12,  27 => 1,  79 => 22,  72 => 20,  69 => 19,  47 => 22,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 51,  131 => 47,  123 => 43,  120 => 15,  115 => 43,  111 => 37,  108 => 39,  101 => 32,  98 => 35,  96 => 36,  83 => 29,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 78,  176 => 67,  173 => 65,  168 => 72,  164 => 71,  162 => 57,  154 => 66,  149 => 51,  147 => 56,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 48,  122 => 43,  116 => 33,  112 => 44,  109 => 40,  106 => 41,  103 => 37,  99 => 37,  95 => 35,  92 => 21,  86 => 32,  82 => 22,  80 => 31,  73 => 29,  64 => 19,  60 => 6,  57 => 11,  54 => 27,  51 => 11,  48 => 10,  45 => 9,  42 => 13,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
