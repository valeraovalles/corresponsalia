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
        echo "    
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_CORRESPONSALIA")) {
            // line 12
            echo "        <h1> PERÍODO DE RENDICIÓN</h1><h2>";
            if ($this->getAttribute($this->getContext($context, "entities", true), 0, array(), "array", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entities"), 0, array(), "array"), "corresponsalia"), "nombre")), "html", null, true);
                echo " ";
            }
            echo "</h2>
    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
            // line 14
            echo "        <h1> PERÍODO DE ASIGNACIÓN DE FONDOS</h1>
    ";
        }
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
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
                <th>Cobertura</th>
                <th>Estatus</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "            <tr>
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "anio"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mes"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "corresponsalia"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "id") == 2)) {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cobertura")), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td>
                    ";
            // line 44
            if (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 1)) {
                // line 45
                echo "                        <span class=\"label label-info\">Abierto</span>
                    ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 2)) {
                // line 47
                echo "                        <span class=\"label label-warning\">Enviado para revisión</span>
                    ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 3)) {
                // line 49
                echo "                        <span class=\"label label-danger\">Devuelto para corrección</span>
                    ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 4)) {
                // line 51
                echo "                        <span class=\"label label-success\">Cerrado</span>
                    ";
            }
            // line 53
            echo "                </td>
                <td>
                    
                    
                        ";
            // line 57
            if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_CORRESPONSALIA")) {
                // line 58
                echo "                    
                            <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_rendirgasto", array("idperiodo" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"><b class=\"text-warning\">RENDIR</b></a>
                                
                        ";
            }
            // line 62
            echo "                        
                        ";
            // line 63
            if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
                // line 64
                echo "                            | <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a> | 
                            <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"><b class=\"glyphicon glyphicon-edit\"></b></a> |  
                            <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_new", array("idperiodo" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"><b class=\"text-warning\">FONDOS</b></a>
                        ";
            }
            // line 68
            echo "
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>

    <br><br>

    <a class=\"btn btn-primary\" href=\"";
        // line 78
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
        return array (  199 => 78,  192 => 73,  182 => 68,  177 => 66,  173 => 65,  168 => 64,  166 => 63,  163 => 62,  157 => 59,  154 => 58,  152 => 57,  146 => 53,  142 => 51,  138 => 49,  134 => 47,  130 => 45,  128 => 44,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  97 => 37,  94 => 36,  90 => 35,  72 => 20,  69 => 19,  63 => 14,  53 => 12,  51 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
