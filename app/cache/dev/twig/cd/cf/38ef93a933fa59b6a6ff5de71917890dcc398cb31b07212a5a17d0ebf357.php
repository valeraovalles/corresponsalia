<?php

/* CorresponsaliaBundle:Default:tablarendicion.html.twig */
class __TwigTemplate_cdcf38ef93a933fa59b6a6ff5de71917890dcc398cb31b07212a5a17d0ebf357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<table class=\"relaciongasto\" border=\"1\">
        <tr>
            <th>Descripción</th>

            <td id=\"descripciongasto\">Seleccione un tipo de gasto &nbsp;<b class=\"glyphicon glyphicon-arrow-up\"></b></td>
            <th>Nro. Comprobante</th>
            <td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'widget');
        echo "</td>
            <th>Fecha Factura</th>
            <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <th>Imputación</th>
            <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "imputacionpresupuestaria"), 'widget');
        echo "</td>
            <th>Nombre/Razón</th>
            <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'widget');
        echo "</td>
            <th>Identif. fiscal</th>
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <th>Nro. factura</th>
            <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'widget');
        echo "</td>
            <th>Dólares</th>
            <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'widget');
        echo "</td>
            <th>Monto MN.</th>
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'widget');
        echo "</td>

        </tr>
    </table>";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:tablarendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  62 => 24,  57 => 22,  50 => 18,  45 => 16,  40 => 14,  33 => 10,  28 => 8,  19 => 1,);
    }
}
