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
    <h4>CORRESPONSALÍA: ";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "nombre")), "html", null, true);
        echo " | PAÍS: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo " | AÑO: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "mes"), "html", null, true);
        echo " </h4><br>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 11
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "recursorecibido"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "saldoinicial"), 'errors'))) {
            // line 12
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "recursorecibido"), 'errors');
            echo "</div>
        <div>";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "saldoinicial"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 18
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("estadofondo_create");
        echo "\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Saldo inicial:</div>
                <div class=\"widgetform\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "saldoinicial"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Recurso recibido:</div>
                <div class=\"widgetform\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "recursorecibido"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Observación:</div>
                <div class=\"widgetform\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observacion"), 'widget');
        echo "</div>
            </div>
        </div>
    
        <input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("estadofondo_aniomes");
        echo "\">SELECCIONAR OTROS PARÁMETROS</a> | 
        <a class=\"btn btn-default\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("estadofondo");
        echo "\">IR AL LISTADO DE FONDOS</a>
        
        <input type=\"hidden\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "anio"), "html", null, true);
        echo "\" name=\"form[anio]\">
        <input type=\"hidden\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "mes"), "html", null, true);
        echo "\" name=\"form[mes]\">
        <input type=\"hidden\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "corresponsalia"), "html", null, true);
        echo "\" name=\"form[corresponsalia]\">
        <input type=\"hidden\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "tipogasto"), "html", null, true);
        echo "\" name=\"form[tipogasto]\">
    </form>

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
        return array (  128 => 43,  124 => 42,  120 => 41,  116 => 40,  111 => 38,  107 => 37,  99 => 32,  92 => 28,  85 => 24,  78 => 20,  74 => 19,  71 => 18,  65 => 15,  61 => 14,  57 => 12,  55 => 11,  50 => 9,  47 => 8,  35 => 5,  29 => 3,);
    }
}
