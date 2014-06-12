<?php

/* CorresponsaliaBundle:Cambio:show.html.twig */
class __TwigTemplate_7f2b080bb809223ad4b68485128a5a341dcd3a3151a2f133380e4e262cd6896b extends Twig_Template
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
        echo "<h1>Cambio</h1>

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
                <th>Montocambiodolar</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montocambiodolar"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("cambio");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Cambio:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  65 => 19,  170 => 95,  146 => 63,  70 => 29,  205 => 85,  200 => 83,  192 => 81,  175 => 67,  148 => 52,  124 => 50,  118 => 47,  114 => 48,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 40,  104 => 38,  100 => 37,  152 => 65,  113 => 32,  90 => 36,  77 => 33,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 66,  161 => 69,  155 => 56,  150 => 64,  134 => 57,  126 => 52,  110 => 10,  97 => 38,  81 => 58,  58 => 28,  137 => 45,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 59,  132 => 55,  128 => 56,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 58,  143 => 56,  135 => 62,  119 => 48,  102 => 27,  71 => 30,  67 => 19,  63 => 15,  59 => 14,  28 => 3,  38 => 6,  87 => 38,  21 => 2,  201 => 92,  196 => 82,  183 => 69,  171 => 66,  166 => 93,  163 => 76,  158 => 68,  156 => 66,  151 => 53,  142 => 62,  138 => 61,  136 => 57,  121 => 52,  117 => 44,  105 => 40,  91 => 32,  62 => 29,  49 => 19,  31 => 4,  26 => 6,  25 => 3,  94 => 37,  89 => 32,  85 => 33,  75 => 24,  68 => 14,  56 => 21,  24 => 2,  19 => 1,  93 => 35,  88 => 5,  78 => 25,  46 => 14,  44 => 12,  27 => 1,  79 => 22,  72 => 20,  69 => 21,  47 => 22,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 51,  131 => 57,  123 => 43,  120 => 36,  115 => 52,  111 => 47,  108 => 39,  101 => 39,  98 => 36,  96 => 36,  83 => 23,  74 => 14,  66 => 16,  55 => 12,  52 => 23,  50 => 10,  43 => 6,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 78,  176 => 67,  173 => 65,  168 => 72,  164 => 71,  162 => 57,  154 => 65,  149 => 51,  147 => 56,  144 => 61,  141 => 48,  133 => 58,  130 => 54,  125 => 48,  122 => 54,  116 => 49,  112 => 44,  109 => 41,  106 => 28,  103 => 42,  99 => 41,  95 => 40,  92 => 21,  86 => 32,  82 => 26,  80 => 34,  73 => 29,  64 => 26,  60 => 6,  57 => 25,  54 => 27,  51 => 11,  48 => 10,  45 => 9,  42 => 13,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
