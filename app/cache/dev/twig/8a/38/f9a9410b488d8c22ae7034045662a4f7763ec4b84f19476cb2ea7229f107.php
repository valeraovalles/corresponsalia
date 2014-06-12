<?php

/* CorresponsaliaBundle:Cambio:index.html.twig */
class __TwigTemplate_8a38f9a9410b488d8c22ae7034045662a4f7763ec4b84f19476cb2ea7229f107 extends Twig_Template
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
        echo "CORRESPONSALÍA - TASA DE CAMBIO";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    TASA DE CAMBIO
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>LISTADO HISTÓRICO DE TASAS DE CAMBIO</h1>
    <h4>CORRESPONSALIA: ";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "corresponsalia"), "nombre")), "html", null, true);
        echo "</h4>
    <h4>AÑO: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "mes"), "html", null, true);
        echo "</h4><br>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        $this->displayParentBlock("body", $context, $blocks);
        echo "



    
    <div class=\"alert alert-info\">
        <b>Nota:</b> Para conversiones del sistema sólo se tomará en cuenta la última Tasa de Cambio creada.
        
    </div>
    <table class=\"table table-striped\" style=\"width: 700px;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Monto</th>
                <th>Fecha registro</th>
                <th>Responsable</th>
                ";
        // line 33
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montocambiodolar"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechahoraregistro"), "d-m-Y G:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsable"), "primerNombre")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsable"), "primerApellido")), "html", null, true);
            echo "</td>
                ";
            // line 52
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>

    

            <a class=\"btn btn-primary\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio_new", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"))), "html", null, true);
        echo "\">
                CREAR NUEVA TASA DE CAMBIO
            </a> |             
            <a class=\"btn btn-default\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_rendirgasto", array("idperiodo" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id"))), "html", null, true);
        echo "\">
                VOLVER A LA RENDICIÓN
            </a><br>

    ";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Cambio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  65 => 19,  170 => 95,  146 => 63,  70 => 29,  205 => 85,  200 => 83,  192 => 81,  175 => 67,  148 => 52,  124 => 50,  118 => 47,  114 => 48,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 40,  104 => 38,  100 => 37,  152 => 65,  113 => 32,  90 => 36,  77 => 33,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 66,  161 => 69,  155 => 56,  150 => 64,  134 => 57,  126 => 52,  110 => 10,  97 => 38,  81 => 58,  58 => 28,  137 => 45,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 59,  132 => 55,  128 => 56,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 58,  143 => 56,  135 => 62,  119 => 48,  102 => 27,  71 => 20,  67 => 19,  63 => 15,  59 => 14,  28 => 3,  38 => 6,  87 => 38,  21 => 2,  201 => 92,  196 => 82,  183 => 69,  171 => 66,  166 => 93,  163 => 76,  158 => 68,  156 => 66,  151 => 53,  142 => 62,  138 => 61,  136 => 57,  121 => 52,  117 => 44,  105 => 40,  91 => 32,  62 => 29,  49 => 19,  31 => 3,  26 => 6,  25 => 3,  94 => 37,  89 => 32,  85 => 33,  75 => 24,  68 => 14,  56 => 14,  24 => 2,  19 => 1,  93 => 35,  88 => 5,  78 => 25,  46 => 7,  44 => 12,  27 => 1,  79 => 22,  72 => 20,  69 => 21,  47 => 22,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 51,  131 => 57,  123 => 43,  120 => 36,  115 => 52,  111 => 47,  108 => 39,  101 => 39,  98 => 36,  96 => 36,  83 => 23,  74 => 14,  66 => 16,  55 => 12,  52 => 23,  50 => 10,  43 => 6,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 78,  176 => 67,  173 => 65,  168 => 72,  164 => 71,  162 => 57,  154 => 65,  149 => 51,  147 => 56,  144 => 61,  141 => 48,  133 => 58,  130 => 54,  125 => 48,  122 => 54,  116 => 49,  112 => 44,  109 => 41,  106 => 28,  103 => 42,  99 => 41,  95 => 40,  92 => 21,  86 => 32,  82 => 26,  80 => 34,  73 => 29,  64 => 19,  60 => 6,  57 => 25,  54 => 27,  51 => 11,  48 => 10,  45 => 9,  42 => 13,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
