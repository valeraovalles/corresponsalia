<?php

/* CorresponsaliaBundle:Periodorendicion:revisionperiodorendicion.html.twig */
class __TwigTemplate_cba63971e701b2729ef9eb9ebad4556d65946750f893a02f58596434c545e009 extends Twig_Template
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
        echo "CORRESPONSALÍA - REVISIÓN";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    REVISIÓN
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>PERÍODOS PARA REVISIÓN</h1>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <br><table id=\"tablalista\" style=\"width: 97%;\" cellpadding=\"5px\">
        <thead>
            <tr>
                <th>Id</th>
                <th style=\"width: 5%\">Anio</th>
                <th style=\"width: 5%\">Mes</th>
                <th style=\"width: 30%\">Corresponsalía</th>
                <th>Tipo gasto</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "anio"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mes"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "corresponsalia"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "descripcion"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 37
            if (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 1)) {
                // line 38
                echo "                        <span class=\"label label-info\">Abierto</span>
                    ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 2)) {
                // line 40
                echo "                        <span class=\"label label-warning\">Enviado para revisión</span>
                    ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 3)) {
                // line 42
                echo "                        <span class=\"label label-danger\">Devuelto para corrección</span>
                    ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 4)) {
                // line 44
                echo "                        <span class=\"label label-success\">Cerrado</span>
                    ";
            }
            // line 46
            echo "                </td>
                <td>
                    | <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a> | 

                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-edit\"></b></a> | 
                    
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_revisionrendicion", array("idperiodo" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><b class=\"text-success\">REVISAR RENDICIÓN</b></a> | 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

    <br><br>

    <a class=\"btn btn-primary\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("periodorendicion_new");
        echo "\">NUEVO PERÍODO</a>

    <br><br>

    <script>
    \$(document).ready(function(){
       \$('#tablalista').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
            \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
            \"aaSorting\": [[5,'asc'],[1,'asc'],[2,'asc']],
        } );
    })
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Periodorendicion:revisionperiodorendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 61,  145 => 56,  135 => 52,  130 => 50,  125 => 48,  121 => 46,  117 => 44,  113 => 42,  109 => 40,  105 => 38,  103 => 37,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  80 => 31,  77 => 30,  73 => 29,  56 => 15,  53 => 14,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
