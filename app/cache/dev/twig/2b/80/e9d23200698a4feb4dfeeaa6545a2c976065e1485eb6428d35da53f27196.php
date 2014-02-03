<?php

/* CorresponsaliaBundle:Tipomoneda:show.html.twig */
class __TwigTemplate_2b80e9d23200698a4feb4dfeeaa6545a2c976065e1485eb6428d35da53f27196 extends Twig_Template
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
        echo "<h1>TIPO DE MONEDA</h1>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    

    <div class=\"formShow\" style=\"width:80%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Id:</div>
            <div class=\"widgetform\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Id:</div>
            <div class=\"widgetform\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tipomoneda"), "html", null, true);
        echo "</div>
        </div>
    </div>

    <a class=\"btn btn-default\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipomoneda_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tipomoneda");
        echo "\">IR AL LISTADO</a>
  
    <BR><BR>
    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'errors');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_end');
        echo "
    

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tipomoneda:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  79 => 26,  75 => 25,  71 => 24,  65 => 21,  61 => 20,  54 => 16,  47 => 12,  38 => 6,  35 => 5,  29 => 3,);
    }
}
