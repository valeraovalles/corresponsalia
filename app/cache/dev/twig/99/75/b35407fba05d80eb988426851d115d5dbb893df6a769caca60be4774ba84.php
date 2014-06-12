<?php

/* CorresponsaliaBundle:Reporte:auditoriaestadofondo.html.twig */
class __TwigTemplate_9975b35407fba05d80eb988426851d115d5dbb893df6a769caca60be4774ba84 extends Twig_Template
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
        echo "CORRESPONSALÍA - REPORTES";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    REPORTES
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>REPORTE DE AUDITORIA ESTADO FONDO</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 16
        if (((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniodesde"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniohasta"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mesdesde"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meshasta"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "corresponsalia"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipogasto"), 'errors'))) {
            // line 17
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "corresponsalia"), 'errors');
            echo "</div>
        <div>";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipogasto"), 'errors');
            echo "</div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cobertura"), 'errors');
            echo "</div>
        <div>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio"), 'errors');
            echo "</div>
        <div>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mes"), 'errors');
            echo "</div>
        ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                echo "<div><ul><li>";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "html", null, true);
                echo "</li></ul></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
    ";
        }
        // line 27
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("periodorendicion_create");
        echo "\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Corresponsalía:</div>
                <div class=\"widgetform\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "corresponsalia"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo gasto:</div>
                <div class=\"widgetform\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipogasto"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\" style=\"display: none;\" id=\"cobertura\">
                <div class=\"labelform\">Cobertura:</div>
                <div class=\"widgetform\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cobertura"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Año:</div>
                <div class=\"widgetform\"><b>D:</b> ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniodesde"), 'widget', array("attr" => array("style" => "width:70px")));
        echo " | <b>H:</b> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniohasta"), 'widget', array("attr" => array("style" => "width:70px")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Mes:</div>
                <div class=\"widgetform\"><b>D:</b> ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mesdesde"), 'widget', array("attr" => array("style" => "width:70px")));
        echo " | <b>H:</b> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meshasta"), 'widget', array("attr" => array("style" => "width:70px")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Reponsable:</div>
                <div class=\"widgetform\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsable"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Estatus Periodo:</div>
                <div class=\"widgetform\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estatus"), 'widget');
        echo "</div>
            </div>
        </div>

        <input type=\"submit\" value=\"CREAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">IR AL LISTADO</a>
    </form>
    
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            
            \$('#reporte_tipogasto').focusout(function(){
                var dato=\$(\"#reporte_tipogasto\").val()
                if(dato[0]==2)
                    \$(\"#cobertura\").show()
                else
                    \$(\"#cobertura\").hide()
            });
            
            var dato=\$(\"#reporte_tipogasto\").val()
            if(dato[0]==2)
                    \$(\"#cobertura\").show()
        });
     </script>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Reporte:auditoriaestadofondo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  65 => 19,  170 => 62,  146 => 49,  70 => 29,  205 => 85,  200 => 83,  192 => 81,  175 => 67,  148 => 52,  124 => 50,  118 => 47,  114 => 48,  231 => 89,  222 => 85,  216 => 81,  206 => 76,  188 => 70,  184 => 79,  167 => 63,  127 => 40,  104 => 38,  100 => 37,  152 => 65,  113 => 32,  90 => 36,  77 => 33,  212 => 58,  207 => 34,  202 => 46,  190 => 42,  186 => 41,  174 => 66,  161 => 69,  155 => 53,  150 => 64,  134 => 57,  126 => 52,  110 => 10,  97 => 38,  81 => 58,  58 => 28,  137 => 45,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 59,  132 => 55,  128 => 56,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 86,  221 => 77,  219 => 76,  217 => 75,  208 => 86,  204 => 72,  179 => 68,  159 => 58,  143 => 56,  135 => 62,  119 => 48,  102 => 27,  71 => 20,  67 => 19,  63 => 17,  59 => 14,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 92,  196 => 82,  183 => 69,  171 => 66,  166 => 93,  163 => 76,  158 => 68,  156 => 66,  151 => 53,  142 => 62,  138 => 61,  136 => 57,  121 => 52,  117 => 44,  105 => 28,  91 => 32,  62 => 29,  49 => 14,  31 => 3,  26 => 6,  25 => 3,  94 => 37,  89 => 32,  85 => 33,  75 => 21,  68 => 14,  56 => 14,  24 => 2,  19 => 1,  93 => 35,  88 => 5,  78 => 25,  46 => 14,  44 => 12,  27 => 1,  79 => 22,  72 => 20,  69 => 21,  47 => 22,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 51,  131 => 57,  123 => 37,  120 => 36,  115 => 52,  111 => 47,  108 => 39,  101 => 39,  98 => 25,  96 => 36,  83 => 23,  74 => 14,  66 => 16,  55 => 12,  52 => 23,  50 => 10,  43 => 6,  41 => 18,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 75,  199 => 67,  193 => 72,  189 => 71,  187 => 80,  182 => 78,  176 => 67,  173 => 65,  168 => 72,  164 => 71,  162 => 57,  154 => 65,  149 => 51,  147 => 56,  144 => 61,  141 => 48,  133 => 58,  130 => 41,  125 => 48,  122 => 54,  116 => 33,  112 => 44,  109 => 29,  106 => 28,  103 => 42,  99 => 41,  95 => 40,  92 => 21,  86 => 32,  82 => 26,  80 => 34,  73 => 29,  64 => 26,  60 => 6,  57 => 25,  54 => 27,  51 => 11,  48 => 10,  45 => 9,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
