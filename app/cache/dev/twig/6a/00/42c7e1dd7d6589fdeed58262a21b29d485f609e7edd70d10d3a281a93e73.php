<?php

/* CorresponsaliaBundle:Estadofondo:show.html.twig */
class __TwigTemplate_6a0042c7e1dd7d6589fdeed58262a21b29d485f609e7edd70d10d3a281a93e73 extends Twig_Template
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
        echo "<h1>Estado Fondo</h1>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
       
    <div class=\"formShow\" style=\"width:80%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Corresponsalia:</div>
            <div class=\"widgetform\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "corresponsalia"), "nombre")), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Tipo gasto:</div>
            <div class=\"widgetform\">";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "descripcion")), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Año:</div>
            <div class=\"widgetform\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "anio"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Mes:</div>
            <div class=\"widgetform\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mes"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Saldo inicial:</div>
            <div class=\"widgetform\"><span class=\"label label-info\">";
        // line 27
        if ($this->getAttribute($this->getContext($context, "entity"), "saldoinicial")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "saldoinicial"), "html", null, true);
        } else {
            echo "No asignado";
        }
        echo "</span></div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Recurso recibido:</div>
            <div class=\"widgetform\"><span class=\"label label-info\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "recursorecibido"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Pagos:</div>
            <div class=\"widgetform\"><span class=\"label label-danger\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pagos"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Saldo final:</div>
            <div class=\"widgetform\"><span class=\"label label-warning\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "saldofinal"), "html", null, true);
        echo "</span></div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Fecha de registro:</div>
            <div class=\"widgetform\">";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechaasignacion"), "d-m-Y"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Responsale:</div>
            <div class=\"widgetform\">";
        // line 47
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "responsable"), "primerNombre")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "responsable"), "primerApellido")), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 49
        if ($this->getAttribute($this->getContext($context, "entity"), "observacion")) {
            // line 50
            echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Observación:</div>
            <div class=\"widgetform\">";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "observacion")), "html", null, true);
            echo "</div>
        </div>
        ";
        }
        // line 55
        echo "    </div>
    
    <a class=\"btn btn-default\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("estadofondo");
        echo "\">IR AL LISTADO DE FONDOS</a>
  
    <BR><BR>
    ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'errors');
        echo "
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 64
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
        return array (  158 => 64,  154 => 63,  150 => 62,  146 => 61,  140 => 58,  136 => 57,  132 => 55,  126 => 52,  122 => 50,  120 => 49,  113 => 47,  106 => 43,  99 => 39,  92 => 35,  85 => 31,  74 => 27,  67 => 23,  60 => 19,  53 => 15,  46 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
