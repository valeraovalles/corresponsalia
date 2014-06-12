<?php

/* CorresponsaliaBundle:Tecnologia/Marca:edit.html.twig */
class __TwigTemplate_d176071490cc4ec96f6a889c34de72fe4df47320a67589fd67926c271dda3b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulomodulo' => array($this, 'block_titulomodulo'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "<h1>EDITAR MARCA</h1>";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/effects.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/css/tecno_general.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 18
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'errors')) {
            // line 19
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 24
        echo "    <form novalidate method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnomarca_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
         <input type=\"hidden\" name=\"_method\" value=\"PUT\"> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
         <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Nombre:</div>
                <div class=\"widgetform\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'widget', array("attr" => array("class" => "form_input strtoupper")));
        echo "</div>
            </div>
         </div>
        <input type=\"submit\" value=\"EDITAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnomarca_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">IR A CONSULTA</a> | 
        <a class=\"btn btn-default\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("tecnomarca");
        echo "\">IR AL LISTADO</a>
    </form>

    <BR>
    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Marca:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 112,  248 => 110,  244 => 109,  239 => 106,  236 => 105,  225 => 101,  255 => 128,  195 => 73,  213 => 97,  185 => 80,  165 => 74,  23 => 3,  194 => 70,  191 => 70,  180 => 62,  172 => 78,  160 => 65,  153 => 63,  178 => 67,  76 => 23,  84 => 21,  129 => 55,  65 => 15,  170 => 57,  146 => 38,  70 => 22,  205 => 85,  200 => 76,  192 => 84,  175 => 66,  148 => 64,  124 => 49,  118 => 50,  114 => 48,  231 => 89,  222 => 85,  216 => 81,  206 => 94,  188 => 69,  184 => 84,  167 => 47,  127 => 41,  104 => 33,  100 => 26,  152 => 49,  113 => 47,  90 => 25,  77 => 18,  212 => 58,  207 => 34,  202 => 92,  190 => 87,  186 => 85,  174 => 75,  161 => 70,  155 => 59,  150 => 62,  134 => 40,  126 => 49,  110 => 42,  97 => 29,  81 => 36,  58 => 17,  137 => 58,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 75,  169 => 64,  140 => 55,  132 => 33,  128 => 32,  107 => 28,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 109,  230 => 103,  227 => 102,  224 => 86,  221 => 100,  219 => 76,  217 => 99,  208 => 86,  204 => 72,  179 => 82,  159 => 42,  143 => 37,  135 => 57,  119 => 39,  102 => 42,  71 => 32,  67 => 19,  63 => 15,  59 => 12,  28 => 3,  38 => 6,  87 => 34,  21 => 2,  201 => 92,  196 => 90,  183 => 69,  171 => 74,  166 => 72,  163 => 62,  158 => 70,  156 => 64,  151 => 66,  142 => 55,  138 => 58,  136 => 58,  121 => 47,  117 => 45,  105 => 44,  91 => 40,  62 => 16,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 32,  89 => 22,  85 => 24,  75 => 19,  68 => 16,  56 => 15,  24 => 2,  19 => 1,  93 => 24,  88 => 28,  78 => 25,  46 => 9,  44 => 7,  27 => 1,  79 => 21,  72 => 22,  69 => 25,  47 => 12,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 60,  145 => 66,  139 => 51,  131 => 52,  123 => 40,  120 => 38,  115 => 38,  111 => 35,  108 => 34,  101 => 31,  98 => 39,  96 => 49,  83 => 32,  74 => 23,  66 => 21,  55 => 13,  52 => 12,  50 => 10,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 75,  199 => 91,  193 => 72,  189 => 71,  187 => 70,  182 => 53,  176 => 67,  173 => 65,  168 => 67,  164 => 66,  162 => 57,  154 => 40,  149 => 67,  147 => 57,  144 => 62,  141 => 65,  133 => 56,  130 => 54,  125 => 53,  122 => 35,  116 => 32,  112 => 30,  109 => 33,  106 => 41,  103 => 24,  99 => 42,  95 => 38,  92 => 30,  86 => 27,  82 => 26,  80 => 20,  73 => 18,  64 => 20,  60 => 15,  57 => 16,  54 => 11,  51 => 10,  48 => 10,  45 => 7,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
