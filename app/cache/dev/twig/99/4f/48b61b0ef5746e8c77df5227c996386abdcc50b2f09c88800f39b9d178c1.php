<?php

/* UsuarioBundle:Rol:edit.html.twig */
class __TwigTemplate_994f48b61b0ef5746e8c77df5227c996386abdcc50b2f09c88800f39b9d178c1 extends Twig_Template
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
        echo "CORRESPONSALÍA - EDITAR ROL";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    EDITAR ROL
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>EDITAR ROL</h1>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        // line 17
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rol"), 'errors')) {
            // line 18
            echo "<div class=\"alert alert-danger errores\" style=\"width:70%;\">
    <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
    <div>";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rol"), 'errors');
            echo "</div>
</div>
";
        }
        // line 23
        echo "    
<form novalidate action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "

     <div class=\"formShow\">
        <div class=\"contenedorform\">
            <div class=\"text-error\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rol"), 'errors');
        echo "</div>
            <div class=\"labelform\">Rol:</div>
            <div class=\"widgetform\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rol"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"text-error\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion"), 'errors');
        echo "</div>
            <div class=\"labelform\">Descripcion:</div>
            <div class=\"widgetform\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion"), 'widget');
        echo "</div>
        </div>
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">EDITAR</button> | 

        <a class=\"btn btn-default\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("rol");
        echo "\">
            IR AL LISTADO
        </a>
</form>


        <form action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return confirm('Seguro que desea eliminar')\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\">BORRAR</button>
        </form>


";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Rol:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 127,  228 => 125,  215 => 118,  267 => 149,  260 => 145,  253 => 141,  223 => 126,  210 => 119,  197 => 93,  181 => 109,  256 => 112,  248 => 110,  244 => 109,  239 => 133,  236 => 105,  225 => 103,  255 => 128,  195 => 73,  213 => 100,  185 => 111,  165 => 97,  23 => 3,  194 => 92,  191 => 70,  180 => 103,  172 => 100,  160 => 65,  153 => 63,  178 => 67,  76 => 24,  84 => 21,  129 => 48,  65 => 24,  170 => 80,  146 => 38,  70 => 20,  205 => 85,  200 => 76,  192 => 84,  175 => 66,  148 => 91,  124 => 49,  118 => 45,  114 => 48,  231 => 89,  222 => 122,  216 => 81,  206 => 96,  188 => 89,  184 => 87,  167 => 47,  127 => 62,  104 => 36,  100 => 35,  152 => 71,  113 => 42,  90 => 30,  77 => 28,  212 => 58,  207 => 34,  202 => 95,  190 => 87,  186 => 85,  174 => 106,  161 => 70,  155 => 59,  150 => 62,  134 => 40,  126 => 49,  110 => 45,  97 => 32,  81 => 24,  58 => 17,  137 => 57,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 154,  268 => 85,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 84,  169 => 64,  140 => 53,  132 => 33,  128 => 50,  107 => 28,  61 => 17,  273 => 152,  269 => 94,  254 => 92,  243 => 134,  240 => 86,  238 => 85,  235 => 132,  230 => 103,  227 => 127,  224 => 86,  221 => 102,  219 => 125,  217 => 101,  208 => 114,  204 => 72,  179 => 108,  159 => 42,  143 => 67,  135 => 65,  119 => 39,  102 => 29,  71 => 19,  67 => 20,  63 => 18,  59 => 20,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 110,  196 => 90,  183 => 69,  171 => 105,  166 => 72,  163 => 76,  158 => 70,  156 => 72,  151 => 92,  142 => 88,  138 => 51,  136 => 52,  121 => 47,  117 => 58,  105 => 40,  91 => 30,  62 => 16,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 32,  89 => 30,  85 => 27,  75 => 25,  68 => 18,  56 => 15,  24 => 2,  19 => 1,  93 => 49,  88 => 26,  78 => 23,  46 => 17,  44 => 7,  27 => 1,  79 => 29,  72 => 20,  69 => 25,  47 => 12,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 60,  145 => 55,  139 => 66,  131 => 47,  123 => 51,  120 => 59,  115 => 43,  111 => 40,  108 => 33,  101 => 35,  98 => 39,  96 => 49,  83 => 26,  74 => 24,  66 => 24,  55 => 13,  52 => 17,  50 => 18,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 117,  199 => 91,  193 => 113,  189 => 112,  187 => 70,  182 => 86,  176 => 102,  173 => 65,  168 => 67,  164 => 66,  162 => 96,  154 => 40,  149 => 56,  147 => 57,  144 => 54,  141 => 58,  133 => 56,  130 => 54,  125 => 61,  122 => 41,  116 => 32,  112 => 30,  109 => 33,  106 => 37,  103 => 53,  99 => 28,  95 => 32,  92 => 44,  86 => 30,  82 => 27,  80 => 22,  73 => 23,  64 => 17,  60 => 19,  57 => 16,  54 => 16,  51 => 10,  48 => 10,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
