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
            <th>Cambio</th>
            <td><input type=\"text\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cambio"), "montocambiodolar"), "html", null, true);
        echo "\" id=\"cambio\" name=\"rendicion_relaciongasto[cambio]\"></td>
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
        return array (  69 => 25,  52 => 17,  47 => 15,  42 => 13,  35 => 9,  25 => 5,  19 => 1,  167 => 48,  160 => 44,  152 => 39,  148 => 38,  145 => 37,  143 => 36,  139 => 35,  135 => 34,  132 => 33,  130 => 32,  127 => 31,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 19,  87 => 18,  81 => 16,  78 => 15,  64 => 23,  59 => 21,  53 => 10,  49 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 7,);
    }
}
