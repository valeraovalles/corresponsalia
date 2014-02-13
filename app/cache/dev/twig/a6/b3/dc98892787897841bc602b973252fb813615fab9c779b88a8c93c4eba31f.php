<?php

/* CorresponsaliaBundle:Cambio:new.html.twig */
class __TwigTemplate_a6b3dc98892787897841bc602b973252fb813615fab9c779b88a8c93c4eba31f extends Twig_Template
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
        echo "CORRESPONSALÍA - NUEVA TASA DE CAMBIO";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    NUEVA TASA DE CAMBIO
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>NUEVA TASA DE CAMBIO</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    
    
    ";
        // line 18
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montocambiodolar"), 'errors')) {
            // line 19
            echo "    <div class=\"alert alert-danger errores\" style=\"width:50%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montocambiodolar"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 24
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio_create", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:50%;\">
            
            <div class=\"alert alert-info\">Debe colocar el equivalente de su moneda nacional al dólar</div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Corresponsalía:</div>
                <div class=\"widgetform\">";
        // line 32
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "nombre")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo gasto:</div>
                <div class=\"widgetform\">";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "descripcion")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Moneda:</div>
                <div class=\"widgetform\">";
        // line 40
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "tipomoneda"), "tipomoneda")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Año:</div>
                <div class=\"widgetform\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "anio"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Mes:</div>
                <div class=\"widgetform\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "mes"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Monto Cambio:</div>
                <div class=\"widgetform\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montocambiodolar"), 'widget');
        echo "</div>
            </div>
        </div>
    
        <input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">VER HISTÓRICO</a>
        
    </form>

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Cambio:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  126 => 52,  119 => 48,  112 => 44,  105 => 40,  98 => 36,  91 => 32,  82 => 26,  78 => 25,  75 => 24,  69 => 21,  65 => 19,  63 => 18,  56 => 14,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
