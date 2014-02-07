<?php

/* CorresponsaliaBundle:Estadofondo:new.html.twig */
class __TwigTemplate_10191a9b935ea856802c4253b1b38e6e1ca19381ccb5f6ba9361c354a3fb43eb extends Twig_Template
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
        echo "  
    <h1>ASIGNACIÓN DE FONDOS</h1>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 10
        if ((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "recursorecibido"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "saldoinicial"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observacion"), 'errors'))) {
            // line 11
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "saldoinicial"), 'errors');
            echo "</div>        
        <div>";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "recursorecibido"), 'errors');
            echo "</div>
        <div>";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observacion"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 18
        echo "    
    ";
        // line 19
        if ($this->getAttribute($this->getContext($context, "cobertura", true), "id", array(), "any", true, true)) {
            // line 20
            echo "        ";
            $context["idcobertura"] = $this->getAttribute($this->getContext($context, "cobertura"), "id");
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $context["idcobertura"] = 0;
            // line 23
            echo "    ";
        }
        // line 24
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_create", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Corresponsalía:</div>
                <div class=\"widgetform\">";
        // line 30
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "nombre")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo gasto:</div>
                <div class=\"widgetform\">";
        // line 34
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "descripcion")), "html", null, true);
        echo "</div>
            </div>
            ";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "id") == 2)) {
            // line 37
            echo "            <div class=\"contenedorform\">
                <div class=\"labelform\">Cobertura:</div>
                <div class=\"widgetform\">";
            // line 39
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "cobertura")), "html", null, true);
            echo "</div>
            </div>
            ";
        }
        // line 42
        echo "            <div class=\"contenedorform\">
                <div class=\"labelform\">País:</div>
                <div class=\"widgetform\">";
        // line 44
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Año:</div>
                <div class=\"widgetform\">";
        // line 48
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "anio")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Mes:</div>
                <div class=\"widgetform\">";
        // line 52
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "mes")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Saldo inicial:</div>
                <div class=\"widgetform\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "saldoinicial"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Recurso enviado:</div>
                <div class=\"widgetform\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "recursorecibido"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Observación:</div>
                <div class=\"widgetform\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observacion"), 'widget');
        echo "</div>
            </div>
        </div>
    
        <input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">IR AL LISTADO DE PERÍODOS</a> ";
        // line 71
        echo "    </form>

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Estadofondo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 71,  167 => 69,  159 => 64,  152 => 60,  145 => 56,  138 => 52,  131 => 48,  124 => 44,  120 => 42,  114 => 39,  110 => 37,  108 => 36,  103 => 34,  96 => 30,  89 => 26,  85 => 25,  82 => 24,  79 => 23,  76 => 22,  73 => 21,  70 => 20,  68 => 19,  65 => 18,  59 => 15,  55 => 14,  51 => 13,  47 => 11,  45 => 10,  40 => 8,  37 => 7,  29 => 3,);
    }
}
