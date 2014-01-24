<?php

/* CorresponsaliaBundle:Estadofondo:show.html.twig */
class __TwigTemplate_6a0042c7e1dd7d6589fdeed58262a21b29d485f609e7edd70d10d3a281a93e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1>Estado Fondo</h1>

    <div class=\"formShow\" style=\"width:80%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Id:</div>
            <div class=\"widgetform\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Corresponsalia:</div>
            <div class=\"widgetform\">";
        // line 14
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "corresponsalia"), "nombre")), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Tipo gasto:</div>
            <div class=\"widgetform\">";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "descripcion")), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Saldo inicial:</div>
            <div class=\"widgetform\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "saldoinicial"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Recurso recibido:</div>
            <div class=\"widgetform\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "recursorecibido"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Año:</div>
            <div class=\"widgetform\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "anio"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Mes:</div>
            <div class=\"widgetform\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mes"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Fecha de registro:</div>
            <div class=\"widgetform\">";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechaasignacion"), "d-m-Y"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Observación:</div>
            <div class=\"widgetform\">";
        // line 42
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "observacion")), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Responsale:</div>
            <div class=\"widgetform\">";
        // line 46
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "responsable"), "primerNombre")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "responsable"), "primerApellido")), "html", null, true);
        echo "</div>
        </div>
    </div>
    
    <a class=\"btn btn-default\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("estadofondo");
        echo "\">IR AL LISTADO DE FONDOS</a>
  
    <BR><BR>
    ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'errors');
        echo "
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Estadofondo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  130 => 56,  126 => 55,  122 => 54,  116 => 51,  112 => 50,  103 => 46,  96 => 42,  89 => 38,  82 => 34,  75 => 30,  68 => 26,  61 => 22,  54 => 18,  47 => 14,  40 => 10,  31 => 4,  28 => 3,);
    }
}
