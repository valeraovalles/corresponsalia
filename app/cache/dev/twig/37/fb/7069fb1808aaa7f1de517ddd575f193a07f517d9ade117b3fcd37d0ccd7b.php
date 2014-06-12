<?php

/* CorresponsaliaBundle:Default:_tablarendicion.html.twig */
class __TwigTemplate_37fb7069fb1808aaa7f1de517ddd575f193a07f517d9ade117b3fcd37d0ccd7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<table class=\"relaciongasto\" border=\"1\">
        <tr>
            <th>Descripción</th>
            <td>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripciongasto"), 'widget');
        echo "</td>
            <th>Nro. Comprobante</th>
            <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerocomprobante"), 'widget');
        echo "</td>
            <th>Fecha Factura</th>
            <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechafactura"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <th>Cambio</th>
            <td><input type=\"text\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cambio"]) ? $context["cambio"] : $this->getContext($context, "cambio")), "montocambiodolar"), "html", null, true);
        echo "\" id=\"cambio\" name=\"rendicion_relaciongasto[cambio]\" readonly=\"readonly\"></td>
            <th>Nombre/Razón</th>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrerazonsocial"), 'widget');
        echo "</td>
            <th>Identif. fiscal</th>
            <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificacionfiscal"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <th>Nro. factura</th>
            <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numerofactura"), 'widget');
        echo "</td>
            <th>Monto MN.</th>
            <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montomonnac"), 'widget');
        echo "</td>
            <th>Dólares</th>
            <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montodolar"), 'widget');
        echo "</td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:_tablarendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  191 => 70,  180 => 62,  172 => 73,  160 => 70,  153 => 57,  178 => 52,  76 => 22,  84 => 28,  129 => 54,  65 => 21,  170 => 57,  146 => 38,  70 => 20,  205 => 85,  200 => 73,  192 => 81,  175 => 60,  148 => 64,  124 => 49,  118 => 40,  114 => 39,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 69,  184 => 79,  167 => 63,  127 => 31,  104 => 39,  100 => 34,  152 => 60,  113 => 26,  90 => 35,  77 => 33,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 75,  161 => 58,  155 => 67,  150 => 39,  134 => 44,  126 => 49,  110 => 42,  97 => 38,  81 => 34,  58 => 28,  137 => 35,  53 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 33,  128 => 50,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 62,  159 => 42,  143 => 37,  135 => 34,  119 => 45,  102 => 39,  71 => 24,  67 => 19,  63 => 15,  59 => 21,  28 => 3,  38 => 6,  87 => 18,  21 => 2,  201 => 92,  196 => 71,  183 => 69,  171 => 48,  166 => 72,  163 => 43,  158 => 68,  156 => 41,  151 => 53,  142 => 55,  138 => 45,  136 => 58,  121 => 28,  117 => 27,  105 => 24,  91 => 32,  62 => 15,  49 => 9,  31 => 3,  26 => 6,  25 => 5,  94 => 35,  89 => 38,  85 => 35,  75 => 22,  68 => 30,  56 => 14,  24 => 2,  19 => 1,  93 => 37,  88 => 28,  78 => 15,  46 => 10,  44 => 8,  27 => 1,  79 => 26,  72 => 31,  69 => 25,  47 => 15,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 62,  139 => 51,  131 => 48,  123 => 48,  120 => 48,  115 => 44,  111 => 41,  108 => 42,  101 => 39,  98 => 36,  96 => 35,  83 => 27,  74 => 25,  66 => 19,  55 => 13,  52 => 17,  50 => 10,  43 => 10,  41 => 7,  35 => 9,  32 => 4,  29 => 3,  209 => 79,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 77,  176 => 67,  173 => 65,  168 => 56,  164 => 71,  162 => 57,  154 => 40,  149 => 47,  147 => 56,  144 => 63,  141 => 50,  133 => 51,  130 => 32,  125 => 48,  122 => 41,  116 => 44,  112 => 41,  109 => 40,  106 => 39,  103 => 39,  99 => 36,  95 => 32,  92 => 34,  86 => 29,  82 => 26,  80 => 28,  73 => 18,  64 => 23,  60 => 14,  57 => 28,  54 => 16,  51 => 11,  48 => 10,  45 => 9,  42 => 13,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
