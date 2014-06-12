<?php

/* UsuarioBundle:User:cambioclave.html.twig */
class __TwigTemplate_72dc0c5f9e9e4b59f8aa4bc7c20b2100268c2599a2f5aa77bd3c2d0844e8a319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::administracion.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulobanner' => array($this, 'block_titulobanner'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::administracion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio - Telesur";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    CAMBIO DE CLAVE
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"titulo\">CAMBIO DE CLAVE</div>


    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"alert alert-success\">
            ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
\t<form novalidate action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("actualizacambioclave");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <br>
        <div class=\"formShow\">
            <div class=\"contenedorform\">
            \t<div class=\"text-error\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "claveanterior"), 'errors');
        echo "</div>
                <div class=\"labelform\">Clave anterior:</div>
                <div class=\"widgetform\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "claveanterior"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
            \t<div class=\"text-error\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clavenueva"), 'errors');
        echo "</div>
                <div class=\"labelform\">Clave nueva:</div>
                <div class=\"widgetform\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clavenueva"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
            \t<div class=\"text-error\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "claveconfirmacion"), 'errors');
        echo "</div>
                <div class=\"labelform\">Clave confirmación:</div>
                <div class=\"widgetform\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "claveconfirmacion"), 'widget');
        echo "</div>
            </div>
        </div>
    
        <button class=\"btn btn-primary\" type=\"submit\">Cambiar clave</button>
      
    </form>


";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:User:cambioclave.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 127,  228 => 125,  215 => 118,  267 => 149,  260 => 145,  253 => 141,  223 => 126,  210 => 119,  197 => 93,  181 => 109,  256 => 112,  248 => 110,  244 => 109,  239 => 133,  236 => 105,  225 => 103,  255 => 128,  195 => 73,  213 => 100,  185 => 111,  165 => 97,  23 => 3,  194 => 92,  191 => 82,  180 => 103,  172 => 72,  160 => 63,  153 => 59,  178 => 75,  76 => 24,  84 => 24,  129 => 48,  65 => 18,  170 => 80,  146 => 55,  70 => 20,  205 => 85,  200 => 76,  192 => 84,  175 => 66,  148 => 55,  124 => 49,  118 => 39,  114 => 35,  231 => 89,  222 => 122,  216 => 81,  206 => 96,  188 => 89,  184 => 87,  167 => 47,  127 => 43,  104 => 35,  100 => 35,  152 => 71,  113 => 35,  90 => 30,  77 => 22,  212 => 58,  207 => 34,  202 => 95,  190 => 87,  186 => 85,  174 => 106,  161 => 70,  155 => 59,  150 => 62,  134 => 49,  126 => 50,  110 => 38,  97 => 33,  81 => 23,  58 => 16,  137 => 57,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 154,  268 => 85,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 84,  169 => 64,  140 => 53,  132 => 47,  128 => 50,  107 => 42,  61 => 16,  273 => 152,  269 => 94,  254 => 92,  243 => 134,  240 => 86,  238 => 85,  235 => 132,  230 => 103,  227 => 127,  224 => 86,  221 => 102,  219 => 125,  217 => 101,  208 => 114,  204 => 72,  179 => 108,  159 => 42,  143 => 67,  135 => 65,  119 => 39,  102 => 29,  71 => 20,  67 => 19,  63 => 17,  59 => 15,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 110,  196 => 90,  183 => 69,  171 => 69,  166 => 72,  163 => 76,  158 => 70,  156 => 72,  151 => 92,  142 => 88,  138 => 51,  136 => 45,  121 => 47,  117 => 58,  105 => 30,  91 => 32,  62 => 17,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 32,  89 => 26,  85 => 31,  75 => 21,  68 => 18,  56 => 14,  24 => 2,  19 => 1,  93 => 27,  88 => 32,  78 => 29,  46 => 17,  44 => 9,  27 => 1,  79 => 22,  72 => 20,  69 => 25,  47 => 10,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 60,  145 => 55,  139 => 51,  131 => 43,  123 => 44,  120 => 38,  115 => 43,  111 => 35,  108 => 33,  101 => 29,  98 => 38,  96 => 28,  83 => 23,  74 => 21,  66 => 24,  55 => 13,  52 => 17,  50 => 11,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 117,  199 => 91,  193 => 113,  189 => 112,  187 => 81,  182 => 86,  176 => 102,  173 => 65,  168 => 67,  164 => 66,  162 => 63,  154 => 40,  149 => 56,  147 => 57,  144 => 54,  141 => 54,  133 => 56,  130 => 54,  125 => 40,  122 => 49,  116 => 32,  112 => 30,  109 => 33,  106 => 36,  103 => 30,  99 => 29,  95 => 32,  92 => 27,  86 => 30,  82 => 29,  80 => 22,  73 => 23,  64 => 17,  60 => 19,  57 => 16,  54 => 16,  51 => 10,  48 => 10,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
