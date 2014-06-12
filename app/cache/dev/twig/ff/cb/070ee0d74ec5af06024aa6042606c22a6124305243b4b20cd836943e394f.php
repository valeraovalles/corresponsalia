<?php

/* CorresponsaliaBundle:Tecnologia/Equipo:index.html.twig */
class __TwigTemplate_ffcb070ee0d74ec5af06024aa6042606c22a6124305243b4b20cd836943e394f extends Twig_Template
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
        echo "<h1>LISTADO DE EQUIPO</h1>";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        jQuery(function() {
            jQuery( \".datepicker\" ).datepicker();
        });
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/Jdatepicker.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/css/tecno_general.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <table id=\"tablalista\" class=\"table table-bordered table-condensed\" style=\"width: 98.7%;\">
        <thead>
            <tr>
                <th style=\"width: 11%;\">Categoria</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th style=\"width: 17%;\">Descripción</th>
                <th style=\"width: 60px;\">Status</th>
                <th>Asignacion</th>
                <th>Corresponsalia</th>
                <th style=\"width: 13%;\">Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEquipo"]) ? $context["listEquipo"] : $this->getContext($context, "listEquipo")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modelo"), "marca"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modelo"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                <td class=\"centrar\">
                    ";
            // line 44
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status")) {
                // line 45
                echo "                        <span class=\"label label-success\">&nbsp;ACTIVO&nbsp;&nbsp;</span>
                    ";
            } else {
                // line 47
                echo "                        <span class=\"label label-danger\">INACTIVO</span>
                    ";
            }
            // line 49
            echo "                </td>
                <td>
                    ";
            // line 51
            if ((twig_length_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) > 9)) {
                // line 52
                echo "                        ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "statusAsignacion"), "nombre")), "html", null, true);
                echo "
                    ";
            }
            // line 54
            echo "                </td>
                <td>";
            // line 55
            if ((twig_length_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) > 9)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "corresponsalia"), "nombre"), "html", null, true);
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoequipo_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoequipo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-edit\"></b></a> |
                    ";
            // line 59
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status")) {
                // line 60
                echo "                        ";
                if ((twig_length_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) > 9)) {
                    // line 61
                    echo "                            ";
                    if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "statusAsignacion") == "prestamo")) {
                        // line 62
                        echo "                            <a href=\"\"><span class=\"label label-primary etiqueta\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                        echo "\" data-toggle=\"modal\" data-target=\"#myModal\">&nbsp;PRESTAMO&nbsp;</span></a>
                            ";
                    } else {
                        // line 64
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoasignar_reasignar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "\"><span class=\"label label-primary etiqueta\">REASIGNAR</span></a>
                            ";
                    }
                    // line 66
                    echo "                        ";
                } else {
                    // line 67
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoasignar_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\"><span class=\"label label-primary etiqueta\">&nbsp;&nbsp;ASIGNAR&nbsp;&nbsp;&nbsp;</span></a>
                        ";
                }
                // line 69
                echo "                    ";
            }
            // line 70
            echo "                 </td> 
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>
    </br></br><a class=\"btn btn-primary\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("tecnoequipo_new");
        echo "\">NUEVO EQUIPO</a></br></br>
    
    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\" id=\"myModalLabel\">RETORNO DE EQUIPO</h4>
          </div>
          <div class=\"modal-body\">
            <form id=\"form_fecha\" class=\"form-horizontal\" role=\"form\">
            <div class=\"form-group\">
              <label for=\"fechaRetorno\" class=\"col-sm-4 control-label\">Fecha Retorno:</label>
              <div class=\"col-sm-6\">
                <input name=\"fechaRetorno\" type=\"date\" class=\"form-control datepicker\" id=\"fechaRetorno\">
              </div>
            </div>
            <input type=\"hidden\" id=\"select_equipo_id\" name=\"select_equipo_id\" />
            </form>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">CERRAR</button>
            <button type=\"button\" class=\"btn btn-primary\" id=\"guardar\"/>GUARDAR</button>
          </div>
        </div>
      </div>
    </div>


    <script>
    var jQuery = jQuery.noConflict();
    jQuery(document).ready(function(){
        
        jQuery('.prestamo').on('mouseover', function() {
            var id = jQuery(this).data('id');
            jQuery(\"#select_equipo_id\").val(id);
        });
        
        jQuery('#tablalista').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
             \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
             \"aaSorting\": [[0,'desc']]
         } );

        jQuery(\"#guardar\").click(function(e){
            e.preventDefault();
            var data = {
                fecha: jQuery(\"#fechaRetorno\").val(),
                id: jQuery(\"#select_equipo_id\").val()
            };
            jQuery.ajax({
                type: 'post',
                url: '";
        // line 127
        echo $this->env->getExtension('routing')->getPath("tecnoequipo_fRetorno");
        echo "',
                data: data,
                success: function(data) {
                    alert(data);
                }
            });
        });

    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Equipo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 127,  199 => 75,  195 => 73,  187 => 70,  184 => 69,  178 => 67,  175 => 66,  169 => 64,  163 => 62,  160 => 61,  157 => 60,  155 => 59,  151 => 58,  147 => 57,  140 => 55,  137 => 54,  131 => 52,  129 => 51,  125 => 49,  121 => 47,  117 => 45,  115 => 44,  110 => 42,  106 => 41,  102 => 40,  98 => 39,  95 => 38,  91 => 37,  73 => 22,  70 => 21,  64 => 17,  59 => 16,  56 => 15,  50 => 12,  40 => 6,  37 => 5,  31 => 3,);
    }
}
