<?php

/* CorresponsaliaBundle:Tecnologia/Asignacion:edit.html.twig */
class __TwigTemplate_e8fc24f76ac4527b228db73b4a582af3c6aec6f0fb8f7ab8769d6c0d1b14c5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulomodulo' => array($this, 'block_titulomodulo'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "<h1>EDITAR ASIGNACIÓN</h1>";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    \$.noConflict();
    jQuery(document).ready(function () {
        
        jQuery(document).on({
            mouseenter: function () {
                jQuery(\".datepicker\").datepicker({
                    showOn: \"button\",
                    showAnim: \"drop\",
                    buttonImage: \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calendario/calendar.png"), "html", null, true);
        echo "\",
                    buttonImageOnly: true
                });
            },
            mouseout: function() {
                jQuery(\".datepicker\").datepicker({
                    showOn: \"button\",
                    showAnim: \"drop\",
                    buttonImage: \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calendario/calendar.png"), "html", null, true);
        echo "\",
                    buttonImageOnly: true
                });
            }
        });

        jQuery(\"#tecnologia_asignacion_status\").on(\"change\", function(){
            var \$status_id = jQuery(\"#tecnologia_asignacion_status :selected\").text();
            if(\$status_id === \"PRESTAMO\"){
                if (!jQuery('#fechaEstimadaRetorno').length) {
                    var html= '<div class=\"contenedorform\" id=\"fechaEstimadaRetorno\">'+
                        '<div class=\"labelform\">fechaEstimadaRetorno:</div>'+
                        '<div class=\"widgetform\"><input type=\"text\" id=\"tecnologia_asignacion_fechaEstimadaRetorno\" class=\"datepicker\" name=\"tecnologia_asignacion[fechaEstimadaRetorno]\" required=\"required\" /></div>'+
                        '</div>';
                    var \$wrapper = jQuery('div.formShow');
                    \$wrapper.append(html);
                }
            }else if(\$status_id === \"COBERTURA\"){
                jQuery('#fechaEstimadaRetorno').remove();
            }else if(\$status_id === \"PERMANENTE\"){
                jQuery('#fechaEstimadaRetorno').remove();
            }
        });
    });
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/Jdatepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/equipo_new.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 53
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/css/equipo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 61
        if (((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "corresponsalia"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAsignacion"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaEstimadaRetorno"), 'errors'))) {
            // line 62
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>Categoria: ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status"), 'errors');
            echo "</div>
        <div>Marca: ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "corresponsalia"), 'errors');
            echo "</div>
        <div>Modelo: ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAsignacion"), 'errors');
            echo "</div>
        <div>Serial: ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaEstimadaRetorno"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 70
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoasignar_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
         <input type=\"hidden\" name=\"_method\" value=\"PUT\"> ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
         <div id=\"wrapper-form\" class=\"formShow\" style=\"width:70%;\">
             <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo de Asignacion:</div>
                <div class=\"widgetform\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Corresponsalia:</div>
                <div class=\"widgetform\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "corresponsalia"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">fechaAsignacion:</div>
                <div class=\"widgetform\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAsignacion"), 'widget', array("attr" => array("class" => "datepicker")));
        echo "</div>
            </div>
            ";
        // line 86
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaEstimadaRetorno")) > 0)) {
            // line 87
            echo "                <div id=\"fechaEstimadaRetorno\" class=\"contenedorform\">
                    <div class=\"labelform\">fecha Estimada Retorno:</div>
                    <div class=\"widgetform\">";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaEstimadaRetorno"), 'widget', array("attr" => array("class" => "datepicker")));
            echo "</div>
                </div>
            ";
        }
        // line 92
        echo "         </div>
         <input type=\"hidden\" id=\"tecnologia_asignacion_id\" name=\"tecnologia_asignacion[id]\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["equipo_id"]) ? $context["equipo_id"] : $this->getContext($context, "equipo_id")), "html", null, true);
        echo "\" />
        <input type=\"submit\" value=\"EDITAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoasignar_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">IR A CONSULTA</a> | 
        <a class=\"btn btn-default\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("tecnoequipo");
        echo "\">IR AL LISTADO</a>
    </form>
    
    <BR>
    ";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'errors');
        echo "
        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Asignacion:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 127,  228 => 125,  215 => 118,  267 => 149,  260 => 145,  253 => 141,  223 => 126,  210 => 119,  197 => 93,  181 => 109,  256 => 112,  248 => 110,  244 => 109,  239 => 133,  236 => 105,  225 => 103,  255 => 128,  195 => 73,  213 => 100,  185 => 111,  165 => 97,  23 => 3,  194 => 92,  191 => 70,  180 => 103,  172 => 100,  160 => 65,  153 => 63,  178 => 67,  76 => 23,  84 => 21,  129 => 48,  65 => 24,  170 => 80,  146 => 38,  70 => 20,  205 => 85,  200 => 76,  192 => 84,  175 => 66,  148 => 91,  124 => 49,  118 => 43,  114 => 48,  231 => 89,  222 => 122,  216 => 81,  206 => 96,  188 => 89,  184 => 87,  167 => 47,  127 => 62,  104 => 42,  100 => 40,  152 => 71,  113 => 46,  90 => 25,  77 => 24,  212 => 58,  207 => 34,  202 => 95,  190 => 87,  186 => 85,  174 => 106,  161 => 70,  155 => 59,  150 => 62,  134 => 40,  126 => 49,  110 => 45,  97 => 50,  81 => 36,  58 => 17,  137 => 57,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 154,  268 => 85,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 84,  169 => 64,  140 => 53,  132 => 33,  128 => 32,  107 => 28,  61 => 20,  273 => 152,  269 => 94,  254 => 92,  243 => 134,  240 => 86,  238 => 85,  235 => 132,  230 => 103,  227 => 127,  224 => 86,  221 => 102,  219 => 125,  217 => 101,  208 => 114,  204 => 72,  179 => 108,  159 => 42,  143 => 67,  135 => 65,  119 => 39,  102 => 35,  71 => 22,  67 => 22,  63 => 15,  59 => 20,  28 => 3,  38 => 6,  87 => 28,  21 => 2,  201 => 110,  196 => 90,  183 => 69,  171 => 105,  166 => 72,  163 => 76,  158 => 70,  156 => 72,  151 => 92,  142 => 88,  138 => 87,  136 => 52,  121 => 47,  117 => 58,  105 => 40,  91 => 30,  62 => 16,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 32,  89 => 30,  85 => 27,  75 => 25,  68 => 18,  56 => 18,  24 => 2,  19 => 1,  93 => 49,  88 => 28,  78 => 25,  46 => 17,  44 => 7,  27 => 1,  79 => 29,  72 => 25,  69 => 25,  47 => 12,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 60,  145 => 59,  139 => 66,  131 => 64,  123 => 51,  120 => 59,  115 => 38,  111 => 55,  108 => 34,  101 => 31,  98 => 39,  96 => 49,  83 => 27,  74 => 24,  66 => 24,  55 => 13,  52 => 17,  50 => 18,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 117,  199 => 91,  193 => 113,  189 => 112,  187 => 70,  182 => 86,  176 => 102,  173 => 65,  168 => 67,  164 => 66,  162 => 96,  154 => 40,  149 => 70,  147 => 57,  144 => 54,  141 => 58,  133 => 56,  130 => 54,  125 => 61,  122 => 35,  116 => 32,  112 => 30,  109 => 33,  106 => 54,  103 => 53,  99 => 35,  95 => 38,  92 => 44,  86 => 33,  82 => 27,  80 => 26,  73 => 18,  64 => 20,  60 => 19,  57 => 16,  54 => 16,  51 => 10,  48 => 10,  45 => 7,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
