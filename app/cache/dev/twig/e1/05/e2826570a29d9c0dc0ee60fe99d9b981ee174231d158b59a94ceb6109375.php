<?php

/* CorresponsaliaBundle:Periodorendicion:index.html.twig */
class __TwigTemplate_e105e2826570a29d9c0dc0ee60fe99d9b981ee174231d158b59a94ceb6109375 extends Twig_Template
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
        echo "CORRESPONSALÍA - PERÍODO RENDICIÓN";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    PERÍODO RENDICIÓN
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1> PERÍODO DE RENCIDIÓN Y ASIGNACIÓN DE FONDOS</h1><h2>";
        if ($this->getAttribute($this->getContext($context, "entities", true), 0, array(), "array", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entities"), 0, array(), "array"), "corresponsalia"), "nombre")), "html", null, true);
            echo " ";
        }
        echo "</h2>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <br><table id=\"tablalista\" style=\"width: 97%;\">
        <thead>
            <tr>
                <th>Id</th>
                <th style=\"width: 5%\">Anio</th>
                <th style=\"width: 5%\">Mes</th>
                <th style=\"width: 30%\">Corresponsalía</th>
                <th>Tipo gasto</th>
                <th>Estatus</th>
                <th>Actions</th>
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
                <td>";
            // line 36
            if (($this->getAttribute($this->getContext($context, "entity"), "estatus") == true)) {
                echo "<b class=\"label label-success\">Abierto</b>";
            } else {
                echo "<b class=\"label label-danger\">Cerrado</b>";
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a>

                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-edit\"></b></a>
                    
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_rendirgasto", array("idperiodo" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><b class=\"text-warning\">RENDIR</b></a> | 
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_new", array("idperiodo" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><b class=\"text-warning\">ASIGNAR FONDOS</b></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <br><br>

    <a class=\"btn btn-primary\" href=\"";
        // line 52
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
        return "CorresponsaliaBundle:Periodorendicion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 52,  141 => 47,  131 => 43,  127 => 42,  122 => 40,  117 => 38,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  86 => 31,  83 => 30,  79 => 29,  62 => 15,  59 => 14,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
