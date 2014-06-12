<?php

/* CorresponsaliaBundle:Periodorendicion:new.html.twig */
class __TwigTemplate_a49d46de1bd2fc6b892c73d35bc20d679900f0453f1a310c1006192d6a885f4c extends Twig_Template
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
        echo "CORRESPONSALÍA - NUEVO PERÍODO";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    NUEVO PERÍODO
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>NUEVO PERÍODO</h1>
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
        if ((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mes"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "corresponsalia"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipogasto"), 'errors')) || (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
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
                <div class=\"labelform\">Anio:</div>
                <div class=\"widgetform\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anio"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Mes:</div>
                <div class=\"widgetform\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mes"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Observación:</div>
                <div class=\"widgetform\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion"), 'widget');
        echo "</div>
            </div>
        </div>
    
        <input type=\"submit\" value=\"CREAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">IR AL LISTADO</a>
    </form>
    
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#frontend_corresponsaliabundle_periodorendicion_tipogasto').change(function(){
                if(\$(\"#frontend_corresponsaliabundle_periodorendicion_tipogasto\").val()==2)
                    \$(\"#cobertura\").show()
                else
                    \$(\"#cobertura\").hide()
            });
            
            if(\$(\"#frontend_corresponsaliabundle_periodorendicion_tipogasto\").val()==2)
                    \$(\"#cobertura\").show()
        });
     </script>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Periodorendicion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 53,  119 => 42,  102 => 27,  71 => 20,  67 => 19,  63 => 17,  59 => 14,  28 => 3,  38 => 6,  87 => 24,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 53,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 28,  91 => 27,  62 => 23,  49 => 19,  31 => 3,  26 => 6,  25 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 21,  68 => 14,  56 => 14,  24 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 22,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 37,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 25,  96 => 31,  83 => 23,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 33,  112 => 42,  109 => 29,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 9,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
