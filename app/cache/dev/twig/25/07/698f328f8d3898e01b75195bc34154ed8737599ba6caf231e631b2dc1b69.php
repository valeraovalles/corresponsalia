<?php

/* CorresponsaliaBundle:Tipocorresponsalia:index.html.twig */
class __TwigTemplate_2507698f328f8d3898e01b75195bc34154ed8737599ba6caf231e631b2dc1b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_titulomodulo($context, array $blocks = array())
    {
        echo "<h1>TIPO CORRESPONSALÍA</h1>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <table id=\"tablalista\" style=\"width: 97%;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocorresponsalia_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocorresponsalia_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a>

                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocorresponsalia_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-edit\"></b></a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <BR><BR><a class=\"btn btn-primary\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("tipocorresponsalia_new");
        echo "\">
          NUEVO TIPO DE CORRESPONSALÍA
    </a><br><br>

   
    <script>
        \$(document).ready(function(){
            \$('#tablalista').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
                 \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
                 \"aaSorting\": [[0,'desc']],
             } );
         })

        
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tipocorresponsalia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  194 => 70,  191 => 70,  180 => 62,  172 => 49,  160 => 70,  153 => 57,  178 => 52,  76 => 15,  84 => 28,  129 => 54,  65 => 20,  170 => 57,  146 => 38,  70 => 22,  205 => 85,  200 => 73,  192 => 81,  175 => 60,  148 => 64,  124 => 49,  118 => 40,  114 => 39,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 69,  184 => 79,  167 => 47,  127 => 31,  104 => 39,  100 => 34,  152 => 60,  113 => 26,  90 => 35,  77 => 33,  212 => 58,  207 => 34,  202 => 46,  190 => 55,  186 => 54,  174 => 75,  161 => 44,  155 => 67,  150 => 39,  134 => 44,  126 => 49,  110 => 42,  97 => 38,  81 => 31,  58 => 28,  137 => 35,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 33,  128 => 32,  107 => 25,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 62,  159 => 42,  143 => 37,  135 => 34,  119 => 28,  102 => 39,  71 => 22,  67 => 19,  63 => 15,  59 => 19,  28 => 3,  38 => 6,  87 => 19,  21 => 2,  201 => 92,  196 => 71,  183 => 69,  171 => 48,  166 => 72,  163 => 43,  158 => 68,  156 => 41,  151 => 40,  142 => 55,  138 => 45,  136 => 58,  121 => 28,  117 => 27,  105 => 24,  91 => 32,  62 => 15,  49 => 9,  31 => 3,  26 => 6,  25 => 5,  94 => 35,  89 => 33,  85 => 32,  75 => 24,  68 => 30,  56 => 18,  24 => 2,  19 => 1,  93 => 37,  88 => 28,  78 => 15,  46 => 10,  44 => 15,  27 => 1,  79 => 27,  72 => 31,  69 => 25,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 43,  145 => 62,  139 => 51,  131 => 48,  123 => 48,  120 => 48,  115 => 27,  111 => 26,  108 => 42,  101 => 39,  98 => 36,  96 => 35,  83 => 27,  74 => 27,  66 => 25,  55 => 20,  52 => 17,  50 => 10,  43 => 10,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 79,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 53,  176 => 67,  173 => 65,  168 => 56,  164 => 71,  162 => 57,  154 => 40,  149 => 47,  147 => 56,  144 => 63,  141 => 36,  133 => 34,  130 => 33,  125 => 31,  122 => 41,  116 => 44,  112 => 41,  109 => 40,  106 => 39,  103 => 24,  99 => 23,  95 => 22,  92 => 34,  86 => 29,  82 => 26,  80 => 28,  73 => 18,  64 => 18,  60 => 17,  57 => 16,  54 => 16,  51 => 13,  48 => 10,  45 => 10,  42 => 13,  39 => 8,  36 => 13,  33 => 4,  30 => 3,);
    }
}
