<?php

/* CorresponsaliaBundle:Default:_listadorendicion.html.twig */
class __TwigTemplate_7e5682d0faa27bc97c360996d48cecbcc206cdc7cd7f0bf21868a7810e3d46a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "tipogasto"), "id"), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 1500px;\">
    <div class=\"modal-content\" style=\"width: 1500px;\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "tipogasto"), "descripcion")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          
            <table id=\"tablalista1\" style=\"width: 1400px;\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nro</th>
                            <th>F. Factura</th>
                            <th>Descripcion</th>
                            <th>Nombre/Razón</th>
                            <th>I. Fiscal</th>
                            <th>Tasa</th>
                            <th>Monto MN.</th>
                            <th>Dólares.</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendicionlista"]) ? $context["rendicionlista"] : $this->getContext($context, "rendicionlista")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                            <tr ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aprobada") == false)) {
                echo " style=\"background-color: yellow;\"";
            }
            echo ">
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numerocomprobante"), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechafactura"), "d-m-Y"), "html", null, true);
            echo "</td>
                                
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripciongasto"), "descripcion"), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "identificacionfiscal"), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numerofactura"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cambio"), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montomonnac"), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montodolar"), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_editarendicion", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"), "idrendicion" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar</a></td>
                            </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
                    </tbody>
                </table>    
                <script>    
                  \$(document).ready(function(){
                     \$('#tablalista1').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
                          \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
                          \"aaSorting\": [[0,'desc']],
                      } );
                  })
               </script>
      </div>
      <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">VOLVER</button>&nbsp;&nbsp;
          <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reporte_excelrendicion", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"))), "html", null, true);
        echo "\"><img width=\"50px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/excel.png"), "html", null, true);
        echo "\"></a>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:_listadorendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  191 => 69,  180 => 62,  172 => 73,  160 => 70,  153 => 48,  178 => 52,  76 => 22,  84 => 28,  129 => 54,  65 => 21,  170 => 57,  146 => 38,  70 => 20,  205 => 85,  200 => 73,  192 => 81,  175 => 60,  148 => 64,  124 => 49,  118 => 40,  114 => 39,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 31,  104 => 39,  100 => 34,  152 => 60,  113 => 26,  90 => 35,  77 => 33,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 75,  161 => 69,  155 => 67,  150 => 39,  134 => 44,  126 => 56,  110 => 42,  97 => 38,  81 => 34,  58 => 28,  137 => 35,  53 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 33,  128 => 50,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 42,  143 => 37,  135 => 34,  119 => 45,  102 => 39,  71 => 24,  67 => 19,  63 => 15,  59 => 11,  28 => 3,  38 => 5,  87 => 18,  21 => 2,  201 => 92,  196 => 71,  183 => 69,  171 => 48,  166 => 72,  163 => 43,  158 => 68,  156 => 41,  151 => 53,  142 => 62,  138 => 45,  136 => 58,  121 => 28,  117 => 27,  105 => 24,  91 => 32,  62 => 14,  49 => 9,  31 => 3,  26 => 6,  25 => 3,  94 => 35,  89 => 36,  85 => 35,  75 => 22,  68 => 30,  56 => 14,  24 => 2,  19 => 1,  93 => 37,  88 => 28,  78 => 15,  46 => 11,  44 => 8,  27 => 1,  79 => 26,  72 => 31,  69 => 24,  47 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 62,  139 => 51,  131 => 48,  123 => 46,  120 => 48,  115 => 44,  111 => 43,  108 => 42,  101 => 39,  98 => 36,  96 => 35,  83 => 27,  74 => 25,  66 => 19,  55 => 13,  52 => 13,  50 => 10,  43 => 10,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 79,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 77,  176 => 67,  173 => 65,  168 => 56,  164 => 71,  162 => 57,  154 => 40,  149 => 47,  147 => 56,  144 => 63,  141 => 50,  133 => 58,  130 => 32,  125 => 48,  122 => 41,  116 => 42,  112 => 41,  109 => 25,  106 => 37,  103 => 39,  99 => 36,  95 => 32,  92 => 34,  86 => 29,  82 => 26,  80 => 28,  73 => 18,  64 => 29,  60 => 14,  57 => 28,  54 => 16,  51 => 12,  48 => 10,  45 => 9,  42 => 10,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
