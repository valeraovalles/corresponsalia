<?php

/* UsuarioBundle:Perfil:edit.html.twig */
class __TwigTemplate_ca6f842d958d2c30b3b42bb70e3292187b9f1a1f03a16f418dd2dd436dcf6270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio - Telesur";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Perfil edit</h1>

<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfil_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("perfil");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfil_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Perfil:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 127,  228 => 125,  215 => 118,  267 => 149,  260 => 145,  253 => 141,  223 => 126,  210 => 119,  197 => 93,  181 => 109,  256 => 112,  248 => 110,  244 => 109,  239 => 133,  236 => 105,  225 => 103,  255 => 128,  195 => 73,  213 => 100,  185 => 111,  165 => 97,  23 => 3,  194 => 92,  191 => 82,  180 => 103,  172 => 72,  160 => 63,  153 => 59,  178 => 75,  76 => 25,  84 => 27,  129 => 46,  65 => 18,  170 => 80,  146 => 55,  70 => 25,  205 => 85,  200 => 76,  192 => 84,  175 => 66,  148 => 55,  124 => 49,  118 => 39,  114 => 35,  231 => 89,  222 => 122,  216 => 81,  206 => 96,  188 => 89,  184 => 87,  167 => 47,  127 => 43,  104 => 36,  100 => 35,  152 => 71,  113 => 35,  90 => 31,  77 => 23,  212 => 58,  207 => 34,  202 => 95,  190 => 87,  186 => 85,  174 => 106,  161 => 70,  155 => 59,  150 => 62,  134 => 49,  126 => 50,  110 => 39,  97 => 34,  81 => 31,  58 => 16,  137 => 57,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 154,  268 => 85,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 84,  169 => 64,  140 => 53,  132 => 47,  128 => 50,  107 => 48,  61 => 17,  273 => 152,  269 => 94,  254 => 92,  243 => 134,  240 => 86,  238 => 85,  235 => 132,  230 => 103,  227 => 127,  224 => 86,  221 => 102,  219 => 125,  217 => 101,  208 => 114,  204 => 72,  179 => 108,  159 => 42,  143 => 67,  135 => 65,  119 => 39,  102 => 34,  71 => 22,  67 => 21,  63 => 18,  59 => 16,  28 => 3,  38 => 5,  87 => 25,  21 => 2,  201 => 110,  196 => 90,  183 => 69,  171 => 69,  166 => 72,  163 => 76,  158 => 70,  156 => 72,  151 => 92,  142 => 88,  138 => 51,  136 => 45,  121 => 44,  117 => 43,  105 => 30,  91 => 38,  62 => 22,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 31,  89 => 29,  85 => 26,  75 => 21,  68 => 23,  56 => 15,  24 => 2,  19 => 1,  93 => 27,  88 => 32,  78 => 29,  46 => 11,  44 => 9,  27 => 1,  79 => 22,  72 => 24,  69 => 25,  47 => 10,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 60,  145 => 55,  139 => 51,  131 => 43,  123 => 44,  120 => 38,  115 => 43,  111 => 49,  108 => 37,  101 => 29,  98 => 38,  96 => 34,  83 => 28,  74 => 27,  66 => 24,  55 => 20,  52 => 17,  50 => 11,  43 => 8,  41 => 8,  35 => 4,  32 => 4,  29 => 2,  209 => 95,  203 => 117,  199 => 91,  193 => 113,  189 => 112,  187 => 81,  182 => 86,  176 => 102,  173 => 65,  168 => 67,  164 => 66,  162 => 63,  154 => 40,  149 => 56,  147 => 57,  144 => 54,  141 => 54,  133 => 56,  130 => 54,  125 => 45,  122 => 49,  116 => 45,  112 => 30,  109 => 40,  106 => 38,  103 => 30,  99 => 43,  95 => 30,  92 => 30,  86 => 30,  82 => 29,  80 => 26,  73 => 23,  64 => 19,  60 => 19,  57 => 16,  54 => 16,  51 => 10,  48 => 8,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
