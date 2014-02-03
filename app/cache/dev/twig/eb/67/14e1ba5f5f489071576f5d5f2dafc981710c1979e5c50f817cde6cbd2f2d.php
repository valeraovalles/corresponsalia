<?php

/* CorresponsaliaBundle:Default:_listadorendicion.html.twig */
class __TwigTemplate_eb6714e1ba5f5f489071576f5d5f2dafc981710c1979e5c50f817cde6cbd2f2d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "id"), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 1500px;\">
    <div class=\"modal-content\" style=\"width: 1500px;\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "descripcion")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_editarendicion", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"), "idrendicion" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        return "CorresponsaliaBundle:Default:_listadorendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  96 => 38,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  57 => 28,  53 => 27,  30 => 7,  22 => 2,  19 => 1,);
    }
}
