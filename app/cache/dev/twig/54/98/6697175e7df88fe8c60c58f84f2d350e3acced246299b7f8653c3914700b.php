<?php

/* CorresponsaliaBundle:Tecnologia/Categoria:show.html.twig */
class __TwigTemplate_54986697175e7df88fe8c60c58f84f2d350e3acced246299b7f8653c3914700b extends Twig_Template
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
        echo "<h1>CATEGORIA</h1>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " fade in\">
            <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
            ";
            // line 10
            if ($this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : null), "title", array(), "any", true, true)) {
                // line 11
                echo "            <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "title"), "html", null, true);
                echo "</strong>
            ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "message"), "html", null, true);
                echo "
            ";
            } else {
                // line 14
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "
            ";
            }
            // line 16
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "

    <div class=\"formShow\" style=\"width:80%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Nombre:</div>
            <div class=\"widgetform\">";
        // line 23
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre")), "html", null, true);
        echo "</div>
        </div>
    </div>

    <a class=\"btn btn-default\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnocategoria_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tecnocategoria");
        echo "\">IR AL LISTADO</a>
  
    <BR><BR>
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'errors');
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Categoria:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  194 => 70,  191 => 70,  180 => 62,  172 => 49,  160 => 70,  153 => 57,  178 => 52,  76 => 15,  84 => 23,  129 => 62,  65 => 21,  170 => 57,  146 => 38,  70 => 16,  205 => 85,  200 => 73,  192 => 81,  175 => 60,  148 => 64,  124 => 49,  118 => 40,  114 => 39,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 69,  184 => 79,  167 => 47,  127 => 53,  104 => 33,  100 => 40,  152 => 60,  113 => 34,  90 => 35,  77 => 18,  212 => 58,  207 => 34,  202 => 46,  190 => 55,  186 => 54,  174 => 75,  161 => 44,  155 => 71,  150 => 39,  134 => 44,  126 => 49,  110 => 45,  97 => 31,  81 => 31,  58 => 13,  137 => 35,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 75,  169 => 74,  140 => 59,  132 => 33,  128 => 32,  107 => 25,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 62,  159 => 42,  143 => 37,  135 => 45,  119 => 57,  102 => 39,  71 => 32,  67 => 19,  63 => 15,  59 => 12,  28 => 3,  38 => 6,  87 => 19,  21 => 2,  201 => 92,  196 => 71,  183 => 69,  171 => 48,  166 => 72,  163 => 43,  158 => 68,  156 => 41,  151 => 40,  142 => 55,  138 => 65,  136 => 58,  121 => 28,  117 => 48,  105 => 32,  91 => 27,  62 => 14,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 32,  89 => 47,  85 => 28,  75 => 18,  68 => 16,  56 => 18,  24 => 2,  19 => 1,  93 => 24,  88 => 28,  78 => 24,  46 => 8,  44 => 7,  27 => 1,  79 => 23,  72 => 21,  69 => 25,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 43,  145 => 67,  139 => 51,  131 => 48,  123 => 51,  120 => 38,  115 => 55,  111 => 35,  108 => 34,  101 => 31,  98 => 39,  96 => 49,  83 => 27,  74 => 23,  66 => 18,  55 => 13,  52 => 10,  50 => 10,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 79,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 53,  176 => 67,  173 => 65,  168 => 56,  164 => 71,  162 => 57,  154 => 40,  149 => 47,  147 => 56,  144 => 63,  141 => 36,  133 => 34,  130 => 42,  125 => 31,  122 => 41,  116 => 37,  112 => 41,  109 => 33,  106 => 39,  103 => 24,  99 => 23,  95 => 28,  92 => 34,  86 => 22,  82 => 26,  80 => 20,  73 => 18,  64 => 14,  60 => 15,  57 => 16,  54 => 11,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
