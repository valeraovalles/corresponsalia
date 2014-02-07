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
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            if ($this->getAttribute($_entities_, 0, array(), "array", true, true)) {
                echo " ";
                if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_entities_, 0, array(), "array"), "corresponsalia"), "nombre")), "html", null, true);
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
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "            <tr>
                <td><a href=\"";
            // line 37
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 38
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "anio"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "mes"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "corresponsalia"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "tipogasto"), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (($this->getAttribute($this->getAttribute($_entity_, "tipogasto"), "id") == 2)) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_entity_, "cobertura")), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td>
                    ";
            // line 44
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (($this->getAttribute($_entity_, "estatus") == 1)) {
                // line 45
                echo "                        <span class=\"label label-info\">Abierto</span>
                    ";
            } elseif (($this->getAttribute($_entity_, "estatus") == 2)) {
                // line 47
                echo "                        <span class=\"label label-warning\">Enviado para revisión</span>
                    ";
            } elseif (($this->getAttribute($_entity_, "estatus") == 3)) {
                // line 49
                echo "                        <span class=\"label label-danger\">Devuelto para corrección</span>
                    ";
            } elseif (($this->getAttribute($_entity_, "estatus") == 4)) {
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
                            ";
                // line 59
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ((($this->getAttribute($this->getAttribute($_entity_, "tipogasto"), "id") != 2) && ($this->getAttribute($_entity_, "estatus") != 2))) {
                    // line 60
                    echo "                                | <a href=\"";
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_rendirgasto", array("idperiodo" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                    echo "\"><b class=\"text-warning\">RENDIR</b></a> | 
                            ";
                } elseif (($this->getAttribute($this->getAttribute($_entity_, "tipogasto"), "id") == 2)) {
                    // line 62
                    echo "                                | <a href=\"";
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cobertura", array("idperiodo" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                    echo "\"><b class=\"text-warning\">COBERTURAS</b></a> |
                            ";
                }
                // line 64
                echo "                                
                        ";
            }
            // line 66
            echo "                        
                        ";
            // line 67
            if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
                // line 68
                echo "                            | <a href=\"";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a> | 
                            <a href=\"";
                // line 69
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                echo "\"><b class=\"glyphicon glyphicon-edit\"></b></a> |  
                            <a href=\"";
                // line 70
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_new", array("idperiodo" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                echo "\"><b class=\"text-warning\">FONDOS</b></a>
                        ";
            }
            // line 72
            echo "
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>

    <br><br>

    <a class=\"btn btn-primary\" href=\"";
        // line 82
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
        return array (  229 => 82,  222 => 77,  212 => 72,  206 => 70,  201 => 69,  195 => 68,  193 => 67,  190 => 66,  186 => 64,  179 => 62,  172 => 60,  169 => 59,  166 => 58,  164 => 57,  158 => 53,  154 => 51,  150 => 49,  146 => 47,  142 => 45,  139 => 44,  128 => 42,  123 => 41,  118 => 40,  113 => 39,  108 => 38,  100 => 37,  97 => 36,  92 => 35,  74 => 20,  71 => 19,  65 => 14,  53 => 12,  51 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
