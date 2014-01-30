<?php

/* CorresponsaliaBundle:Estadofondo:edit.html.twig */
class __TwigTemplate_602bbd1eda96892da970284e42263c50db8edf8e47580bbaf5c21498bf86449d extends Twig_Template
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
        // line 4
        echo "    <h1>EDITAR ESTADO FONDO</h1>
    <h4>CORRESPONSALÍA: ";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "corresponsalia"), "nombre")), "html", null, true);
        echo " | PAÍS: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo " | AÑO: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mes"), "html", null, true);
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
        if ((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "recursorecibido"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "corresponsalia"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "tipogasto"), 'errors'))) {
            // line 12
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "recursorecibido"), 'errors');
            echo "</div>
        <div>";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "corresponsalia"), 'errors');
            echo "</div>
        <div>";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "tipogasto"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 19
        echo "
    <form novalidate method=\"post\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
         <input type=\"hidden\" name=\"_method\" value=\"PUT\"> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "_token"), 'widget');
        echo "
         <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\" style=\"display: none;\">
                <div class=\"labelform\">Corresponsalía:</div>
                <div class=\"widgetform\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "corresponsalia"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Saldo inicial:</div>
                <div class=\"widgetform\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "saldoinicial"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Recurso enviado:</div>
                <div class=\"widgetform\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "recursorecibido"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\" style=\"display: none;\">
                <div class=\"labelform\">Tipo gasto:</div>
                <div class=\"widgetform\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "tipogasto"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\" style=\"display: none;\">
                <div class=\"labelform\">Año:</div>
                <div class=\"widgetform\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "anio"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\" style=\"display: none;\">
                <div class=\"labelform\">Mes:</div>
                <div class=\"widgetform\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "mes"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Observación:</div>
                <div class=\"widgetform\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "observacion"), 'widget');
        echo "</div>
            </div>
        </div>
         
        <input type=\"submit\" value=\"EDITAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">IR A CONSULTA</a> | 
        <a class=\"btn btn-default\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("estadofondo");
        echo "\">IR AL LISTADO DE FONDOS</a>

        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "fechaasignacion"), 'widget', array("attr" => array("style" => "display:none")));
        echo "
    </form>
    
    <BR>
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
        return "CorresponsaliaBundle:Estadofondo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 64,  163 => 63,  159 => 62,  155 => 61,  148 => 57,  143 => 55,  139 => 54,  131 => 49,  124 => 45,  117 => 41,  110 => 37,  103 => 33,  96 => 29,  89 => 25,  82 => 21,  78 => 20,  75 => 19,  69 => 16,  65 => 15,  61 => 14,  57 => 12,  55 => 11,  50 => 9,  47 => 8,  35 => 5,  32 => 4,  29 => 3,);
    }
}
