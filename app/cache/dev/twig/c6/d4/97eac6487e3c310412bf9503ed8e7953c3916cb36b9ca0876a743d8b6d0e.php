<?php

/* CorresponsaliaBundle:Default:revisionrendicion.html.twig */
class __TwigTemplate_c6d497eac6487e3c310412bf9503ed8e7953c3916cb36b9ca0876a743d8b6d0e extends Twig_Template
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
        echo "CORRESPONSALÍA - REVISIÓN RENDICIÓN";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    REVISIÓN RENDICIÓN
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>REVISIÓN DE RENDICIÓN</h1><h4>CORRESPONSALÍA: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "corresponsalia"), "nombre")), "html", null, true);
        echo " | AÑO: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "mes"), "html", null, true);
        echo "</h4>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <br><div style=\"width: 99%;\">";
        // line 16
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_estatusfondo.html.twig")->display($context);
        echo "</div>
    
    <form method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_guardarevisionrendicion", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"))), "html", null, true);
        echo "\">
        <table id=\"tablalista\" style=\"width: 99%;\">
            <thead>
                <tr>
                    <th>Nro Comp.</th>
                    <th>F. Factura</th>
                    <th>Descripcion</th>
                    <th>Nombre/Razón</th>
                    <th>I. Fiscal</th>
                    <th>Cambio</th>
                    <th>Dólares.</th>
                    <th>Monto MN.</th>
                    <th>Acc.</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 34
        $context["oculta"] = 0;
        // line 35
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendicionlista"]) ? $context["rendicionlista"] : $this->getContext($context, "rendicionlista")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                    <tr ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aprobada") == false)) {
                echo " style=\"background-color: yellow;\"";
            }
            echo ">
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numerocomprobante"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechafactura"), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripciongasto"), "descripcion"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "identificacionfiscal"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numerofactura"), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cambio"), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montodolar"), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montomonnac"), "html", null, true);
            echo "</td>
                        <td><input value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" name=\"rendiciones[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "]\" type=\"checkbox\" ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aprobada") == false)) {
                echo "checked=\"checked\"";
            }
            echo "></td>
                    </tr>
                    ";
            // line 47
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aprobada") == false)) {
                $context["oculta"] = 1;
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
            </tbody>
        </table> 
        <br><br><br><br>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"GUARDAR RENDICIONES PARA CORRECCIÓN\">
    </form>
    
    ";
        // line 56
        if (((isset($context["oculta"]) ? $context["oculta"] : $this->getContext($context, "oculta")) == 0)) {
            // line 57
            echo "        <div style=\"width: 420px;\">
        <div style=\"float: left;\">
    ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (((isset($context["oculta"]) ? $context["oculta"] : $this->getContext($context, "oculta")) == 1)) {
            // line 62
            echo "            <form name=\"formdevolucion\" novalidate method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_estatusrendicion", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"), "estatus" => 3)), "html", null, true);
            echo "\" onsubmit=\"return confirm('¿Está seguro que desea devolver esta rendición para su corrección? Recuerde actualizar las rediciones que se deben corregir antes de devolver la rendición!!');\">  
               
               <textarea name=\"justificadev\" placeholder=\"Describa el error\" id=\"justificadev\"></textarea><br>
               <input type=\"button\" onclick=\"devolver()\" value=\"DEVOLVER PARA CORRECCIÓN\" class=\"btn btn-danger\">

            </form> 
        ";
        }
        // line 69
        echo "        
        ";
        // line 70
        if (((isset($context["oculta"]) ? $context["oculta"] : $this->getContext($context, "oculta")) == 0)) {
            // line 71
            echo "            </div>
            <div>
                <form novalidate method=\"post\" action=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_estatusrendicion", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"), "estatus" => 4)), "html", null, true);
            echo "\" onsubmit=\"return confirm('¿Está seguro que desea cerrar esta rendición? Recuerde que no se podrá realizar ningun cambio y todos las rendiciones que no están aprobadas se aprobarán!!')\">  
                   <input type=\"submit\" value=\"CERRAR RENDICIÓN\" class=\"btn btn-success\">
                </form> 
            </div>
            </div>
        ";
        }
        // line 79
        echo "    
    
    <br>
    <script>    
      \$(document).ready(function(){
         \$('#tablalista').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
              \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
              \"aaSorting\": [[0,'desc']],
          } );


      })
        function devolver(){
            if(\$('#justificadev').val()==\"\") alert(\"Debe justificar la devolución.\")
            else
            document.formdevolucion.submit()

        }
   </script>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:revisionrendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  191 => 69,  180 => 62,  172 => 73,  160 => 70,  153 => 48,  178 => 61,  76 => 22,  84 => 28,  129 => 54,  65 => 21,  170 => 57,  146 => 49,  70 => 20,  205 => 85,  200 => 73,  192 => 81,  175 => 60,  148 => 64,  124 => 49,  118 => 40,  114 => 39,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 44,  104 => 39,  100 => 34,  152 => 60,  113 => 32,  90 => 35,  77 => 24,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 75,  161 => 69,  155 => 67,  150 => 64,  134 => 44,  126 => 42,  110 => 38,  97 => 31,  81 => 27,  58 => 28,  137 => 49,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 55,  128 => 50,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 49,  143 => 61,  135 => 62,  119 => 45,  102 => 39,  71 => 24,  67 => 19,  63 => 15,  59 => 13,  28 => 3,  38 => 8,  87 => 24,  21 => 2,  201 => 92,  196 => 71,  183 => 69,  171 => 66,  166 => 72,  163 => 70,  158 => 68,  156 => 66,  151 => 53,  142 => 62,  138 => 45,  136 => 58,  121 => 43,  117 => 41,  105 => 40,  91 => 32,  62 => 14,  49 => 19,  31 => 3,  26 => 6,  25 => 3,  94 => 35,  89 => 30,  85 => 26,  75 => 22,  68 => 16,  56 => 14,  24 => 2,  19 => 1,  93 => 30,  88 => 28,  78 => 22,  46 => 11,  44 => 11,  27 => 1,  79 => 26,  72 => 18,  69 => 24,  47 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 62,  139 => 51,  131 => 48,  123 => 46,  120 => 48,  115 => 44,  111 => 43,  108 => 42,  101 => 39,  98 => 36,  96 => 35,  83 => 27,  74 => 25,  66 => 19,  55 => 13,  52 => 13,  50 => 10,  43 => 10,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 79,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 77,  176 => 67,  173 => 65,  168 => 56,  164 => 71,  162 => 57,  154 => 65,  149 => 47,  147 => 56,  144 => 63,  141 => 50,  133 => 58,  130 => 43,  125 => 48,  122 => 41,  116 => 42,  112 => 41,  109 => 44,  106 => 37,  103 => 39,  99 => 36,  95 => 32,  92 => 34,  86 => 29,  82 => 26,  80 => 28,  73 => 18,  64 => 17,  60 => 14,  57 => 16,  54 => 16,  51 => 12,  48 => 10,  45 => 9,  42 => 10,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
