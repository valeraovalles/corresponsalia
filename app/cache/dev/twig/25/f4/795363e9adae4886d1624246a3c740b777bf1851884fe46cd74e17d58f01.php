<?php

/* CorresponsaliaBundle:Periodorendicion:index.html.twig */
class __TwigTemplate_25f4795363e9adae4886d1624246a3c740b777bf1851884fe46cd74e17d58f01 extends Twig_Template
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
            if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), 0, array(), "array", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), 0, array(), "array"), "corresponsalia"), "nombre")), "html", null, true);
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
                <th style=\"width: 5%\">Anio</th>
                <th style=\"width: 5%\">Mes</th>
                <th style=\"width: 24%\">Corresponsalía</th>
                <th style=\"width: 18%\">Tipo gasto</th>
                <th style=\"width: 28%\">Cobertura</th>
                <th style=\"width: 5%\">Estatus</th>
                <th style=\"width: 15%\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anio"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mes"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "corresponsalia"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipogasto"), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipogasto"), "id") == 2)) {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cobertura")), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td>
                    ";
            // line 42
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 1)) {
                // line 43
                echo "                        <span class=\"label label-info\">Abierto</span>
                    ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 2)) {
                // line 45
                echo "                        <span class=\"label label-warning\">Enviado para revisión</span>
                    ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 3)) {
                // line 47
                echo "                        <span class=\"label label-danger\">Devuelto para corrección</span>
                    ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 4)) {
                // line 49
                echo "                        <span class=\"label label-success\">Cerrado</span>
                    ";
            }
            // line 51
            echo "                </td>
                <td>
                    
                    
                        ";
            // line 55
            if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_CORRESPONSALIA")) {
                // line 56
                echo "                    
                            ";
                // line 57
                if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 1) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") == 3))) {
                    // line 58
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_rendirgasto", array("idperiodo" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\"><b class=\"text-warning\">RENDIR</b></a>
                            ";
                } else {
                    // line 60
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reporte_excelrendicion", array("idperiodo" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\"><img width=\"25px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/excel.png"), "html", null, true);
                    echo "\"></a>

                            ";
                }
                // line 63
                echo "                                
                        ";
            }
            // line 65
            echo "                        
                        ";
            // line 66
            if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
                // line 67
                echo "                            ";
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus") != 4)) {
                    // line 68
                    echo "                                | <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a> | 
                                <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\"><b class=\"glyphicon glyphicon-edit\"></b></a> |  
                                <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_new", array("idperiodo" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\"><b class=\"text-warning\">FONDOS</b></a>
                                ";
                } else {
                    // line 72
                    echo "                                <b>CULMINADO</b> | 
                                <a href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reporte_excelrendicion", array("idperiodo" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\"><img width=\"25px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/excel.png"), "html", null, true);
                    echo "\"></a>
                            ";
                }
                // line 75
                echo "                        ";
            }
            // line 76
            echo "
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </tbody>
    </table>

    <br><br><br>
    ";
        // line 85
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
            // line 86
            echo "    <a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("periodorendicion_new");
            echo "\">NUEVO PERÍODO</a>
    <br><br>
    ";
        }
        // line 89
        echo "    

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
        return array (  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 69,  167 => 63,  127 => 45,  104 => 38,  100 => 37,  152 => 58,  113 => 42,  90 => 33,  77 => 30,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 66,  161 => 33,  155 => 31,  150 => 57,  134 => 19,  126 => 17,  110 => 10,  97 => 7,  81 => 58,  58 => 28,  137 => 45,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 68,  159 => 58,  143 => 56,  135 => 49,  119 => 42,  102 => 8,  71 => 20,  67 => 31,  63 => 14,  59 => 14,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 92,  196 => 73,  183 => 40,  171 => 65,  166 => 35,  163 => 62,  158 => 60,  156 => 66,  151 => 53,  142 => 59,  138 => 20,  136 => 56,  121 => 42,  117 => 44,  105 => 38,  91 => 27,  62 => 29,  49 => 19,  31 => 3,  26 => 6,  25 => 3,  94 => 34,  89 => 34,  85 => 25,  75 => 21,  68 => 14,  56 => 15,  24 => 2,  19 => 1,  93 => 35,  88 => 5,  78 => 21,  46 => 7,  44 => 12,  27 => 1,  79 => 22,  72 => 20,  69 => 19,  47 => 22,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 51,  131 => 47,  123 => 43,  120 => 15,  115 => 43,  111 => 37,  108 => 39,  101 => 32,  98 => 35,  96 => 36,  83 => 59,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 84,  182 => 66,  176 => 67,  173 => 65,  168 => 72,  164 => 34,  162 => 57,  154 => 58,  149 => 51,  147 => 56,  144 => 28,  141 => 48,  133 => 55,  130 => 50,  125 => 48,  122 => 43,  116 => 33,  112 => 40,  109 => 40,  106 => 9,  103 => 37,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 22,  80 => 31,  73 => 29,  64 => 17,  60 => 6,  57 => 11,  54 => 27,  51 => 11,  48 => 10,  45 => 9,  42 => 13,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
