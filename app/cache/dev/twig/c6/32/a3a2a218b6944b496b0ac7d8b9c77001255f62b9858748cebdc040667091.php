<?php

/* CorresponsaliaBundle:Tecnologia/Equipo:show.html.twig */
class __TwigTemplate_c632a3a2a218b6944b496b0ac7d8b9c77001255f62b9858748cebdc040667091 extends Twig_Template
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
        echo "<h1>EQUIPO</h1>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"formShow\" style=\"width:80%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Categoria:</div>
            <div class=\"widgetform\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Marca:</div>
            <div class=\"widgetform\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modelo"), "marca"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Modelo:</div>
            <div class=\"widgetform\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modelo"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Serial Equipo:</div>
            <div class=\"widgetform\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "serialEquipo"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Descripcion:</div>
            <div class=\"widgetform\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Status:</div>
            <div class=\"widgetform\">
                ";
        // line 31
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status")) {
            // line 32
            echo "                    <span class=\"label label-success\">Activo</span>
                ";
        } else {
            // line 34
            echo "                    <span class=\"label label-danger\">Inactivo</span>
                ";
        }
        // line 36
        echo "            </div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Condicion:</div>
            <div class=\"widgetform\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "condicion"), "nombre"), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacionCondicion")) > 0)) {
            // line 43
            echo "            <div class=\"contenedorform\">
             <div class=\"labelform\">Observacion Condicion:</div>
             <div class=\"widgetform\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacionCondicion"), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 48
        echo "        <div class=\"contenedorform\">
            <div class=\"labelform\">Fecha Adquisicion:</div>
            <div class=\"widgetform\">";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAdquisicion"), "d-m-Y"), "html", null, true);
        echo "</div>
        </div>
    </div>
   
    <a class=\"btn btn-default\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoequipo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("tecnoequipo");
        echo "\">IR AL LISTADO</a> 
    ";
        // line 56
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status")) {
            // line 57
            echo "        ";
            if (((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")) == false)) {
                // line 58
                echo "            | <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoasignar_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">ASIGNAR</a>
        ";
            } else {
                // line 60
                echo "            | <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoasignar_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">VER ASIGNACIÓN</a>
        ";
            }
            // line 62
            echo "    ";
        }
        // line 63
        echo "    <BR><BR>
    ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'errors');
        echo "
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Equipo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 67,  164 => 66,  160 => 65,  156 => 64,  153 => 63,  150 => 62,  144 => 60,  138 => 58,  135 => 57,  133 => 56,  129 => 55,  125 => 54,  118 => 50,  114 => 48,  108 => 45,  104 => 43,  102 => 42,  97 => 40,  91 => 36,  87 => 34,  83 => 32,  81 => 31,  73 => 26,  66 => 22,  59 => 18,  52 => 14,  45 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
