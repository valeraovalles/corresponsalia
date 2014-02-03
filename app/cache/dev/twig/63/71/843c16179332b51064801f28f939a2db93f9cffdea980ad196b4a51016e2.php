<?php

/* CorresponsaliaBundle:Tipomoneda:new.html.twig */
class __TwigTemplate_6371843c16179332b51064801f28f939a2db93f9cffdea980ad196b4a51016e2 extends Twig_Template
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
    <h1>NUEVO TIPO DE MONEDA</h1>
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
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tipomoneda"), 'errors')) {
            // line 11
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tipomoneda"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 16
        echo "
    <form novalidate method=\"post\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("tipomoneda_create");
        echo "\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo moneda:</div>
                <div class=\"widgetform\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tipomoneda"), 'widget');
        echo "</div>
            </div>
        </div>
        
        <input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("tipomoneda");
        echo "\">IR AL LISTADO</a>
    </form>


";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tipomoneda:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  71 => 22,  64 => 18,  60 => 17,  57 => 16,  51 => 13,  47 => 11,  45 => 10,  40 => 8,  37 => 7,  29 => 3,);
    }
}
