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
<div class=\"modal fade\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipogasto"), "id"), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 1500px;\">
    <div class=\"modal-content\" style=\"width: 1500px;\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "tipogasto"), "descripcion")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          
            <table id=\"tablalista1\" style=\"width: 1400px;\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nro</th>
                            <th>F. Factura</th>
                            <th>Imputación</th>
                            <th>Descripcion</th>
                            <th>Nombre/Razón</th>
                            <th>I. Fiscal</th>
                            <th>Dólares.</th>
                            <th>Monto MN.</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "rendicionlista"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                            <tr>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerocomprobante"), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechafactura"), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "imputacionpresupuestaria"), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "descripciongasto"), "descripcion"), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "identificacionfiscal"), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerofactura"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montodolar"), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montomonnac"), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_editarendicion", array("idrendicion" => $this->getAttribute($this->getContext($context, "entity"), "id"), "idtipogasto" => $this->getAttribute($this->getContext($context, "tipogasto"), "id"), "anio" => $this->getContext($context, "anio"), "mes" => $this->getContext($context, "mes"))), "html", null, true);
            echo "\">Editar</a></td>
                            </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">CERRAR</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




";
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
        return array (  105 => 41,  96 => 38,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  72 => 32,  68 => 31,  60 => 29,  57 => 28,  22 => 2,  69 => 25,  64 => 30,  52 => 17,  47 => 15,  42 => 13,  35 => 9,  25 => 5,  89 => 33,  85 => 32,  81 => 31,  74 => 27,  66 => 25,  59 => 21,  55 => 20,  51 => 19,  40 => 14,  36 => 13,  23 => 3,  19 => 1,  163 => 44,  158 => 42,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  134 => 35,  132 => 34,  128 => 33,  124 => 32,  121 => 31,  119 => 30,  116 => 29,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 17,  76 => 33,  70 => 26,  67 => 13,  53 => 27,  49 => 9,  44 => 15,  38 => 5,  33 => 4,  30 => 7,);
    }
}
