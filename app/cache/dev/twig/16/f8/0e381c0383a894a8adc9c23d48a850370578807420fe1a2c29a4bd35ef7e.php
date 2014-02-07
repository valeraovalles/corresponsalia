<?php

/* CorresponsaliaBundle:Default:_tablarendicion.html.twig */
class __TwigTemplate_16f80e381c0383a894a8adc9c23d48a850370578807420fe1a2c29a4bd35ef7e extends Twig_Template
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
            <td>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripciongasto"), 'widget');
        echo "</td>
            <th>Nro. Comprobante</th>
            <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'widget');
        echo "</td>
            <th>Fecha Factura</th>
            <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <th>Imputación</th>
            <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "imputacionpresupuestaria"), 'widget');
        echo "</td>
            <th>Nombre/Razón</th>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'widget');
        echo "</td>
            <th>Identif. fiscal</th>
            <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'widget');
        echo "</td>
        </tr>
        <tr>
            <th>Nro. factura</th>
            <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'widget');
        echo "</td>
            <th>Monto MN.</th>
            <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'widget');
        echo "</td>
            <th>Dólares</th>
            <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'widget');
        echo "</td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:_tablarendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  64 => 23,  52 => 17,  47 => 15,  42 => 13,  35 => 9,  25 => 5,  89 => 33,  85 => 32,  81 => 31,  74 => 27,  66 => 25,  59 => 21,  55 => 20,  51 => 19,  40 => 14,  36 => 13,  23 => 3,  19 => 1,  159 => 46,  152 => 42,  145 => 38,  141 => 37,  137 => 36,  134 => 35,  132 => 34,  128 => 33,  124 => 32,  121 => 31,  119 => 30,  116 => 29,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 17,  76 => 16,  70 => 26,  67 => 13,  53 => 10,  49 => 9,  44 => 15,  38 => 5,  33 => 4,  30 => 7,);
    }
}
