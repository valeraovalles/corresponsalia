<?php

/* CorresponsaliaBundle:Tecnologia/Modelo:index.html.twig */
class __TwigTemplate_86843f2abb462ed2a77885ae2323b63f58efda0b6672fe3310df6fee1745de69 extends Twig_Template
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
        echo "<h1>LISTADO DE MODELO</h1>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/css/tecno_general.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <table id=\"tablalista\" class=\"table table-bordered table-condensed\" style=\"width: 97%;\">
        <thead>
            <tr>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td class=\"indentar_texto_tabular\">";
            // line 24
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marca")), "html", null, true);
            echo "</td>
                <td class=\"indentar_texto_tabular\">";
            // line 25
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre")), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"indentar_enlace\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnomodelo_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-eye-open\"></b></a>
                    <a class=\"indentar_enlace\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnomodelo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b class=\"glyphicon glyphicon-edit\"></b></a>
                 </td> 
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <br><br><a class=\"btn btn-primary\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("tecnomodelo_new");
        echo "\">
          NUEVO MODELO
    </a><br><br>

    <script>
        \$(document).ready(function(){
            \$('#tablalista').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
                 \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
                 \"aaSorting\": [[0,'asc'], [1,'asc']]
             } );
         });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Modelo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 112,  248 => 110,  244 => 109,  239 => 106,  236 => 105,  225 => 101,  255 => 128,  195 => 73,  213 => 97,  185 => 80,  165 => 74,  23 => 3,  194 => 70,  191 => 70,  180 => 62,  172 => 78,  160 => 65,  153 => 63,  178 => 67,  76 => 23,  84 => 21,  129 => 55,  65 => 15,  170 => 57,  146 => 38,  70 => 20,  205 => 85,  200 => 76,  192 => 84,  175 => 66,  148 => 64,  124 => 49,  118 => 50,  114 => 48,  231 => 89,  222 => 85,  216 => 81,  206 => 94,  188 => 69,  184 => 84,  167 => 47,  127 => 49,  104 => 33,  100 => 26,  152 => 49,  113 => 41,  90 => 25,  77 => 18,  212 => 58,  207 => 34,  202 => 92,  190 => 87,  186 => 85,  174 => 75,  161 => 70,  155 => 59,  150 => 62,  134 => 40,  126 => 49,  110 => 42,  97 => 32,  81 => 36,  58 => 17,  137 => 58,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 75,  169 => 64,  140 => 55,  132 => 33,  128 => 32,  107 => 28,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 109,  230 => 103,  227 => 102,  224 => 86,  221 => 100,  219 => 76,  217 => 99,  208 => 86,  204 => 72,  179 => 82,  159 => 42,  143 => 37,  135 => 57,  119 => 39,  102 => 35,  71 => 23,  67 => 22,  63 => 15,  59 => 12,  28 => 3,  38 => 6,  87 => 28,  21 => 2,  201 => 92,  196 => 90,  183 => 69,  171 => 74,  166 => 72,  163 => 62,  158 => 70,  156 => 64,  151 => 66,  142 => 55,  138 => 58,  136 => 58,  121 => 47,  117 => 45,  105 => 44,  91 => 40,  62 => 16,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 32,  89 => 30,  85 => 24,  75 => 19,  68 => 16,  56 => 15,  24 => 2,  19 => 1,  93 => 32,  88 => 28,  78 => 25,  46 => 9,  44 => 7,  27 => 1,  79 => 26,  72 => 22,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 60,  145 => 66,  139 => 51,  131 => 52,  123 => 40,  120 => 45,  115 => 38,  111 => 35,  108 => 34,  101 => 31,  98 => 39,  96 => 49,  83 => 27,  74 => 24,  66 => 19,  55 => 13,  52 => 12,  50 => 10,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 75,  199 => 91,  193 => 72,  189 => 71,  187 => 70,  182 => 53,  176 => 67,  173 => 65,  168 => 67,  164 => 66,  162 => 57,  154 => 40,  149 => 67,  147 => 57,  144 => 62,  141 => 65,  133 => 56,  130 => 54,  125 => 53,  122 => 35,  116 => 32,  112 => 30,  109 => 33,  106 => 37,  103 => 24,  99 => 35,  95 => 38,  92 => 30,  86 => 27,  82 => 27,  80 => 20,  73 => 18,  64 => 20,  60 => 15,  57 => 16,  54 => 11,  51 => 10,  48 => 10,  45 => 7,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
