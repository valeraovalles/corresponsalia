<?php

/* CorresponsaliaBundle:Pais:show.html.twig */
class __TwigTemplate_0462547a481630d971f543a595759d215aaa8021e56d7c1ab16bc2d4294f60a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Pais</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pais</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pais"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Referencia</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "referencia"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitud</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "latitud"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitud</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "longitud"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codigo</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigo"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("xx");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xx_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Pais:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  129 => 59,  65 => 23,  170 => 62,  146 => 49,  70 => 29,  205 => 85,  200 => 83,  192 => 81,  175 => 67,  148 => 52,  124 => 49,  118 => 47,  114 => 38,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 46,  104 => 35,  100 => 34,  152 => 65,  113 => 32,  90 => 33,  77 => 26,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 66,  161 => 69,  155 => 53,  150 => 64,  134 => 57,  126 => 52,  110 => 44,  97 => 33,  81 => 24,  58 => 28,  137 => 49,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 59,  132 => 55,  128 => 50,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 58,  143 => 56,  135 => 62,  119 => 44,  102 => 39,  71 => 23,  67 => 26,  63 => 17,  59 => 14,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 92,  196 => 82,  183 => 69,  171 => 66,  166 => 93,  163 => 76,  158 => 68,  156 => 66,  151 => 53,  142 => 62,  138 => 61,  136 => 57,  121 => 52,  117 => 44,  105 => 28,  91 => 32,  62 => 29,  49 => 14,  31 => 4,  26 => 6,  25 => 3,  94 => 37,  89 => 32,  85 => 31,  75 => 27,  68 => 14,  56 => 14,  24 => 2,  19 => 1,  93 => 35,  88 => 28,  78 => 27,  46 => 14,  44 => 12,  27 => 1,  79 => 22,  72 => 20,  69 => 24,  47 => 22,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 51,  131 => 47,  123 => 45,  120 => 48,  115 => 52,  111 => 39,  108 => 39,  101 => 39,  98 => 25,  96 => 33,  83 => 23,  74 => 30,  66 => 16,  55 => 21,  52 => 20,  50 => 10,  43 => 6,  41 => 18,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 78,  176 => 67,  173 => 65,  168 => 72,  164 => 71,  162 => 57,  154 => 65,  149 => 51,  147 => 56,  144 => 61,  141 => 50,  133 => 58,  130 => 44,  125 => 48,  122 => 41,  116 => 47,  112 => 44,  109 => 44,  106 => 43,  103 => 42,  99 => 46,  95 => 32,  92 => 42,  86 => 32,  82 => 26,  80 => 34,  73 => 25,  64 => 19,  60 => 22,  57 => 25,  54 => 27,  51 => 11,  48 => 19,  45 => 9,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
