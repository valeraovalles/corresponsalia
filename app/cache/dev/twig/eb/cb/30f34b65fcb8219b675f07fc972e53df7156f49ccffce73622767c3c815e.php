<?php

/* CorresponsaliaBundle:Default:listadorendicion.html.twig */
class __TwigTemplate_ebcb30f34b65fcb8219b675f07fc972e53df7156f49ccffce73622767c3c815e extends Twig_Template
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
<div class=\"modal fade\" id=\"gasfun\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 1500px;\">
    <div class=\"modal-content\" style=\"width: 1500px;\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">GASTOS DE FUNCIONAMIENTO</h4>
      </div>
      <div class=\"modal-body\">
          
            <table id=\"tablalista1\" style=\"width: 1400px;\">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>F. Factura</th>
                            <th>Imputación</th>
                            <th>Descripcion</th>
                            <th>Nombre/Razón</th>
                            <th>I. Fiscal</th>
                            <th>Dólares.</th>
                            <th>Monto MN.</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "rendicionlista"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "id") == 1)) {
                // line 28
                echo "                            <tr>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerocomprobante"), "html", null, true);
                echo "</td>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechafactura"), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "imputacionpresupuestaria"), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "descripciongasto"), "descripcion"), "html", null, true);
                echo "</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "identificacionfiscal"), "html", null, true);
                echo "</td>
                                <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerofactura"), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montodolar"), "html", null, true);
                echo "</td>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montomonnac"), "html", null, true);
                echo "</td>
                                <td><b class=\"glyphicon glyphicon-remove\"></b></td>
                            </tr>
                         ";
            }
            // line 40
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
                    </tbody>
                </table>    
                <br><br><br><br><div><b>Total Monto Dólares: ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 1), "total"), "html", null, true);
        echo "</b><br><b>Total Monto Moneda Nacional: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 1), "total") * $this->getAttribute($this->getContext($context, "corresponsalia"), "montocambiodolar")), "html", null, true);
        echo "</b></div>
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
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->












<!-- Modal -->
<div class=\"modal fade\" id=\"cobpro\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 1500px;\">
    <div class=\"modal-content\" style=\"width: 1500px;\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">COBERTURA PROGRAMADA</h4>
      </div>
      <div class=\"modal-body\">
          
            <table id=\"tablalista2\" style=\"width: 1400px;\">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>F. Factura</th>
                            <th>Imputación</th>
                            <th>Descripcion</th>
                            <th>Nombre/Razón</th>
                            <th>I. Fiscal</th>
                            <th>Dólares.</th>
                            <th>Monto MN.</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "rendicionlista"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 98
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "id") == 2)) {
                // line 99
                echo "                            <tr>
                                <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerocomprobante"), "html", null, true);
                echo "</td>
                                <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechafactura"), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "imputacionpresupuestaria"), "html", null, true);
                echo "</td>
                                <td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "descripciongasto"), "descripcion"), "html", null, true);
                echo "</td>
                                <td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "identificacionfiscal"), "html", null, true);
                echo "</td>
                                <td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerofactura"), "html", null, true);
                echo "</td>
                                <td>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montodolar"), "html", null, true);
                echo "</td>
                                <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montomonnac"), "html", null, true);
                echo "</td>
                                <td><b class=\"glyphicon glyphicon-remove\"></b></td>
                            </tr>
                         ";
            }
            // line 111
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                    </tbody>
                </table>    
                <br><br><br><br><div><b>Total Monto Dólares: ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 2), "total"), "html", null, true);
        echo "</b><br><b>Total Monto Moneda Nacional: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 2), "total") * $this->getAttribute($this->getContext($context, "corresponsalia"), "montocambiodolar")), "html", null, true);
        echo "</b></div>
                <script>    
                  \$(document).ready(function(){
                     \$('#tablalista2').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
                          \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
                          \"aaSorting\": [[0,'desc']],
                      } );
                  })
               </script>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->














<!-- Modal -->
<div class=\"modal fade\" id=\"honpro\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 1500px;\">
    <div class=\"modal-content\" style=\"width: 1500px;\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">HONORARIOS PROFESIONALES</h4>
      </div>
      <div class=\"modal-body\">
          
            <table id=\"tablalista3\" style=\"width: 1400px;\">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>F. Factura</th>
                            <th>Imputación</th>
                            <th>Descripcion</th>
                            <th>Nombre/Razón</th>
                            <th>I. Fiscal</th>
                            <th>Dólares.</th>
                            <th>Monto MN.</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 169
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "rendicionlista"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 170
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "id") == 3)) {
                // line 171
                echo "                            <tr>
                                <td>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerocomprobante"), "html", null, true);
                echo "</td>
                                <td>";
                // line 173
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechafactura"), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "imputacionpresupuestaria"), "html", null, true);
                echo "</td>
                                <td>";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "descripciongasto"), "descripcion"), "html", null, true);
                echo "</td>
                                <td>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "identificacionfiscal"), "html", null, true);
                echo "</td>
                                <td>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerofactura"), "html", null, true);
                echo "</td>
                                <td>";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montodolar"), "html", null, true);
                echo "</td>
                                <td>";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montomonnac"), "html", null, true);
                echo "</td>
                                <td><b class=\"glyphicon glyphicon-remove\"></b></td>
                            </tr>
                         ";
            }
            // line 183
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                    </tbody>
                </table>       
                <br><br><br><br><div><b>Total Monto Dólares: ";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 3), "total"), "html", null, true);
        echo "</b><br><b>Total Monto Moneda Nacional: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 3), "total") * $this->getAttribute($this->getContext($context, "corresponsalia"), "montocambiodolar")), "html", null, true);
        echo "</b></div>
                <script>    
                  \$(document).ready(function(){
                     \$('#tablalista3').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
                          \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
                          \"aaSorting\": [[0,'desc']],
                      } );
                  })
               </script>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:listadorendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 186,  326 => 184,  320 => 183,  313 => 179,  309 => 178,  305 => 177,  301 => 176,  297 => 175,  293 => 174,  289 => 173,  285 => 172,  282 => 171,  279 => 170,  275 => 169,  215 => 114,  211 => 112,  205 => 111,  198 => 107,  194 => 106,  190 => 105,  186 => 104,  182 => 103,  178 => 102,  174 => 101,  170 => 100,  167 => 99,  164 => 98,  160 => 97,  102 => 44,  97 => 41,  91 => 40,  84 => 36,  80 => 35,  76 => 34,  72 => 33,  68 => 32,  64 => 31,  60 => 30,  56 => 29,  53 => 28,  50 => 27,  46 => 26,  19 => 1,);
    }
}
