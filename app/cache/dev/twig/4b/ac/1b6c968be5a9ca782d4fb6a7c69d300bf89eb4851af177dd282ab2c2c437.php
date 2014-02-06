<?php

/* CorresponsaliaBundle:Periodorendicion:show.html.twig */
class __TwigTemplate_4bac1b6c968be5a9ca782d4fb6a7c69d300bf89eb4851af177dd282ab2c2c437 extends Twig_Template
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
        echo "CORRESPONSALÍA - CONSULTAR PERÍODO";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    CONSULTAR PERÍODO
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>CONSULTAR PERÍODO</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"formShow\" style=\"width:80%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Corresponsalia:</div>
            <div class=\"widgetform\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "corresponsalia"), "nombre"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Tipo gasto:</div>
            <div class=\"widgetform\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "tipogasto"), "descripcion"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Año:</div>
            <div class=\"widgetform\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "anio"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Mes:</div>
            <div class=\"widgetform\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mes"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Estatus:</div>
            <div class=\"widgetform\">
                ";
        // line 36
        if (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 1)) {
            // line 37
            echo "                    <span class=\"label label-info\">Abierto</span>
                ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 2)) {
            // line 39
            echo "                    <span class=\"label label-warning\">Enviado para revisión</span>
                ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 3)) {
            // line 41
            echo "                    <span class=\"label label-danger\">Devuelto para corrección</span>
                ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "estatus") == 4)) {
            // line 43
            echo "                    <span class=\"label label-success\">Cerrado</span>
                ";
        }
        // line 45
        echo "            </div>
        </div>
        ";
        // line 47
        if ($this->getAttribute($this->getContext($context, "entity"), "observacion")) {
            // line 48
            echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Observacion:</div>
            <div class=\"widgetform\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "observacion"), "html", null, true);
            echo "</div>
        </div>
        ";
        }
        // line 53
        echo "    </div>
    
    <a class=\"btn btn-default\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodorendicion_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">IR AL LISTADO</a>
  
    <BR><BR>
    ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'errors');
        echo "
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_end');
        echo "
    
    
    
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Periodorendicion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  149 => 61,  145 => 60,  141 => 59,  135 => 56,  131 => 55,  127 => 53,  121 => 50,  117 => 48,  115 => 47,  111 => 45,  107 => 43,  103 => 41,  99 => 39,  95 => 37,  93 => 36,  85 => 31,  78 => 27,  71 => 23,  64 => 19,  56 => 14,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
