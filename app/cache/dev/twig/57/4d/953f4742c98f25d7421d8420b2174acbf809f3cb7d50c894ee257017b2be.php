<?php

/* CorresponsaliaBundle:Tecnologia/Bitacora:show.html.twig */
class __TwigTemplate_574d953f4742c98f25d7421d8420b2174acbf809f3cb7d50c894ee257017b2be extends Twig_Template
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
        echo "<h1>ASIGNACION EQUIPO - CORRESPONSALIA</h1>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"formShow\" style=\"width:80%;\">
        <table class='table table-condensed table-bordered table-striped'>
            <caption>Datos Generales del Equipo</caption>
            <tr>
              <td><strong>categoria</strong></td>
              <td><strong>Modelo</strong></td>
              <td><strong>Serial</strong></td>
              <td><strong>Descripcion</strong></td>
            </tr>
            <tr>
              <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "categoria"), "html", null, true);
        echo "</td>
              <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "modelo"), "html", null, true);
        echo "</td>
              <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "serialEquipo"), "html", null, true);
        echo "</td>
              <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "descripcion"), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Tipo de Asignacion:</div>
            <div class=\"widgetform\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "status"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Corresponsalia:</div>
            <div class=\"widgetform\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "corresponsalia"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Responsable:</div>
            <div class=\"widgetform\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "responsable"), "html", null, true);
        echo "aaaaa</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">fecha Asignacion:</div>
            <div class=\"widgetform\">";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaAsignacion"), "d-m-Y"), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaEstimadaRetorno")) > 0)) {
            // line 40
            echo "            <div class=\"contenedorform\">
                <div class=\"labelform\">fecha Estimada Retorno:</div>
                <div class=\"widgetform\">";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaEstimadaRetorno"), "d-m-Y"), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 45
        echo "        ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaRetorno")) > 0)) {
            // line 46
            echo "            <div class=\"contenedorform\">
                <div class=\"labelform\">fecha Retorno:</div>
                <div class=\"widgetform\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaRetorno"), "d-m-Y"), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 51
        echo "    </div>
    
    <a class=\"btn btn-default\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("tecnobitacora");
        echo "\">IR AL LISTADO</a> 
    <br><br>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Bitacora:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 53,  123 => 51,  117 => 48,  113 => 46,  110 => 45,  104 => 42,  100 => 40,  98 => 39,  93 => 37,  86 => 33,  79 => 29,  72 => 25,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  38 => 6,  35 => 5,  29 => 3,);
    }
}
