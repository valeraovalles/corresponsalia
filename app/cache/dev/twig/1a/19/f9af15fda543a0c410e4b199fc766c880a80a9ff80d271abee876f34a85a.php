<?php

/* CorresponsaliaBundle:Tecnologia/Bitacora:index.html.twig */
class __TwigTemplate_1a19f9af15fda543a0c410e4b199fc766c880a80a9ff80d271abee876f34a85a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulomodulo' => array($this, 'block_titulomodulo'),
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
        echo "<h1>BITACORA DE ASIGNACIONES</h1>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .table-bordered > thead > tr > th, 
        .table-bordered > tbody > tr > th, 
        .table-bordered > tfoot > tr > th, 
        .table-bordered > thead > tr > td, 
        .table-bordered > tbody > tr > td, 
        .table-bordered > tfoot > tr > td {
            border-color: #A5D9FF;
        }
        
        .sorting_asc, 
        .sorting_desc, 
        .sorting, 
        .sorting_asc_disabled,
        .sorting_desc_disabled {
            background-image: none;
        }
        
        .table > thead >tr >th {
            text-align: center;
        }
    </style>
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <table id=\"tablalista\" class=\"table table-bordered table-condensed\" style=\"width: 97%;\">
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Serialequipo</th>
                <th>Descripcion</th>
                <th>Modelo</th>
                <th>Status</th>
                <th>Asignacion</th>
                <th>Corresponsalia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEquipo"]) ? $context["listEquipo"] : $this->getContext($context, "listEquipo")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "            <tr>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "serialEquipo"), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modelo"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 54
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status")) {
                // line 55
                echo "                        <span class=\"label label-success\">&nbsp;Activo&nbsp;&nbsp;</span>
                    ";
            } else {
                // line 57
                echo "                        <span class=\"label label-danger\">Inactivo</span>
                    ";
            }
            // line 59
            echo "                </td>
                <td>
                    ";
            // line 61
            if ((twig_length_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) > 9)) {
                // line 62
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "statusAsignacion"), "html", null, true);
                echo "
                    ";
            }
            // line 64
            echo "                </td>
                <td>";
            // line 65
            if ((twig_length_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) > 9)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "corresponsalia"), "nombre"), "html", null, true);
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnobitacora_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id_bitacora"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a>
                 </td> 
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
<br><br>
    <script>
    var jQuery = jQuery.noConflict();
    jQuery(document).ready(function(){
        
        jQuery('#tablalista').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
             \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
             \"aaSorting\": [[0,'desc']]
         } );

    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Bitacora:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 71,  145 => 67,  138 => 65,  135 => 64,  129 => 62,  127 => 61,  123 => 59,  119 => 57,  115 => 55,  113 => 54,  108 => 52,  104 => 51,  100 => 50,  96 => 49,  93 => 48,  89 => 47,  71 => 32,  68 => 31,  39 => 6,  36 => 5,  30 => 3,);
    }
}
