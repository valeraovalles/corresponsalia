<?php

/* CorresponsaliaBundle:Default:rendirgasto.html.twig */
class __TwigTemplate_2b57d53d42f0628198c9902941cf5c1a25060e937397e862c75eed599550a7a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/css/formrendicion.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 8
    public function block_titulomodulo($context, array $blocks = array())
    {
        echo "  
    <h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "tipogasto"), "descripcion")), "html", null, true);
        echo "</h2>
    ";
        // line 10
        if (($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "cobertura") != "")) {
            echo "<h4>COBERTURA: '";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "cobertura")), "html", null, true);
            echo "'</h4>";
        }
        // line 11
        echo "    <h4>CORRESPONSALÍA: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "corresponsalia"), "nombre")), "html", null, true);
        echo "</h4>
    <h4>PAÍS: ";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo " | AÑO: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "mes"), "html", null, true);
        echo " | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"))), "html", null, true);
        echo "\">CAMBIO: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambio"]) ? $context["cambio"] : $this->getContext($context, "cambio")), "montocambiodolar"), "html", null, true);
        echo "</a></h4><br>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 18
        if (((((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripciongasto"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerocomprobante"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrerazonsocial"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificacionfiscal"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerofactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montomonnac"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montodolar"), 'errors'))) {
            // line 19
            echo "    <div class=\"alert alert-danger errores\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripciongasto"), 'errors');
            echo "</div>
        <div>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerocomprobante"), 'errors');
            echo "</div>
        <div>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafactura"), 'errors');
            echo "</div>
        <div>";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrerazonsocial"), 'errors');
            echo "</div>
        <div>";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificacionfiscal"), 'errors');
            echo "</div>
        <div>";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerofactura"), 'errors');
            echo "</div>
        <div>";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montomonnac"), 'errors');
            echo "</div>
        <div>";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montodolar"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_estatusfondo.html.twig")->display($context);
        // line 33
        echo "    
    ";
        // line 34
        if (($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "justificadevolucion") != "")) {
            // line 35
            echo "        <div class=\"alert alert-warning\"><b>Alerta! Justificación de la devolución: </b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "justificadevolucion"), "html", null, true);
            echo "</div>
    ";
        }
        // line 37
        echo "
    <form novalidate method=\"post\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_guardarendicion", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"))), "html", null, true);
        echo "\">  
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        ";
        // line 40
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_tablarendicion.html.twig")->display($context);
        // line 41
        echo "        <br><br><input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "tipogasto"), "id"), "html", null, true);
        echo "\">VER LISTADO DE RENDICION</button>
        <input type=\"hidden\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"), "html", null, true);
        echo "\" name=\"rendicion_relaciongasto[periodorendicion]\">
        
    </form>
    
        
        ";
        // line 48
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_listadorendicion.html.twig")->display($context);
        echo "  

        
        
     <form novalidate method=\"post\" action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_estatusrendicion", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"), "estatus" => 2)), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Está seguro que desea cerrar esta rendición? Recuerde que una vez cerrada no podrá realizar modificaciones a menos que le sea devuelta para correcciones!!')\">  
        <input type=\"submit\" value=\"CERRAR RENDICIÓN\" class=\"btn btn-danger\">
     </form> 
        
        
        
        
        
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#rendicion_relaciongasto_montomonnac').blur(function(){
                montocambiomn()
            });
            function montocambiomn(){
                    var montomonnac=\$('#rendicion_relaciongasto_montomonnac').val();
                    montomonnac = montomonnac.replace(\",\", \".\");
                    var cambio=\$('#cambio').val();
                    var montofinal=montomonnac/cambio;
                    montofinal = montofinal.toFixed(3);
                    \$('#rendicion_relaciongasto_montodolar').val(montofinal);
            }
         });
    </script>
    
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:rendirgasto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  191 => 69,  180 => 62,  172 => 73,  160 => 70,  153 => 48,  178 => 52,  76 => 22,  84 => 28,  129 => 54,  65 => 21,  170 => 57,  146 => 38,  70 => 20,  205 => 85,  200 => 73,  192 => 81,  175 => 60,  148 => 64,  124 => 49,  118 => 40,  114 => 39,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 31,  104 => 39,  100 => 34,  152 => 60,  113 => 26,  90 => 35,  77 => 24,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 75,  161 => 69,  155 => 67,  150 => 39,  134 => 44,  126 => 42,  110 => 38,  97 => 22,  81 => 16,  58 => 28,  137 => 35,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 33,  128 => 50,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 42,  143 => 37,  135 => 34,  119 => 45,  102 => 39,  71 => 24,  67 => 19,  63 => 15,  59 => 11,  28 => 3,  38 => 5,  87 => 18,  21 => 2,  201 => 92,  196 => 71,  183 => 69,  171 => 48,  166 => 72,  163 => 43,  158 => 68,  156 => 41,  151 => 53,  142 => 62,  138 => 45,  136 => 58,  121 => 28,  117 => 27,  105 => 24,  91 => 32,  62 => 14,  49 => 9,  31 => 3,  26 => 6,  25 => 3,  94 => 35,  89 => 19,  85 => 26,  75 => 22,  68 => 16,  56 => 14,  24 => 2,  19 => 1,  93 => 21,  88 => 28,  78 => 15,  46 => 11,  44 => 8,  27 => 1,  79 => 26,  72 => 18,  69 => 24,  47 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 62,  139 => 51,  131 => 48,  123 => 46,  120 => 48,  115 => 44,  111 => 43,  108 => 42,  101 => 23,  98 => 36,  96 => 35,  83 => 27,  74 => 25,  66 => 19,  55 => 13,  52 => 13,  50 => 10,  43 => 10,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 79,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 77,  176 => 67,  173 => 65,  168 => 56,  164 => 71,  162 => 57,  154 => 40,  149 => 47,  147 => 56,  144 => 63,  141 => 50,  133 => 58,  130 => 32,  125 => 48,  122 => 41,  116 => 42,  112 => 41,  109 => 25,  106 => 37,  103 => 39,  99 => 36,  95 => 32,  92 => 34,  86 => 29,  82 => 26,  80 => 28,  73 => 18,  64 => 12,  60 => 14,  57 => 16,  54 => 16,  51 => 12,  48 => 10,  45 => 9,  42 => 10,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
