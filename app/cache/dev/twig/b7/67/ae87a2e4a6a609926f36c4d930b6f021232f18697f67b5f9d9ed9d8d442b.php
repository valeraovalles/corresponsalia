<?php

/* CorresponsaliaBundle:Default:inicio.html.twig */
class __TwigTemplate_b767ae87a2e4a6a609926f36c4d930b6f021232f18697f67b5f9d9ed9d8d442b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/css/formrendicion.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <h2>RENDICIÓN DE GASTOS MES DE ENERO</h2><br>

    <table border=\"1\" class=\"estatusfondo\">
        <tr>
            <th colspan=\"6\">ESTATUS DEL FONDO ENVIADO</th>
        </tr>
        <tr>
            <th>Descripción</th>
            <th>Monto</th>
            <th>Moneda nacional</th>
            <th>Monto</th>
            <th>USD \$</th>
            <th>Bs.</th>
        </tr>
        <tr>
            <td>Saldo inicial</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Recursos recibidos</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Pagos efectuados</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Saldo final</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
        </tr>
    </table>
    <!-- Nav tabs -->
    <ul class=\"nav nav-tabs\">
      <li><a href=\"#home\" data-toggle=\"tab\">TUTORIAL</a></li>
      <li><a href=\"#gasto1\" data-toggle=\"tab\">Gastos de funcionamiento</a></li>
      <li><a href=\"#gasto2\" data-toggle=\"tab\">Cobertura programada</a></li>
      <li><a href=\"#gasto3\" data-toggle=\"tab\">Honorarios profesionales</a></li>
    </ul>

    <div class=\"tab-content\">
        <div class=\"tab-pane fade\" id=\"home\">
            <div class=\"inicio\">
                El formulario de rendición de gastos se divide en tres pestañas ubicadas en la parte superior denominadas \"Gastos de funcionamiento\", \"Cobertura programada\" y \"Honorarios profesionales\".
                
                <br><br>
                
                <b>Para realizar la rendición puede seguir los siguientes pasos:</b>
                
                <br><br>
                
                <b>1.</b> Seleccionar cuaquiera de los tres tipos de rendiciones ubicadas en el menú de la parte superior.<br>
                <b>2.</b> Seleccionar la descripcion correspondiente al tipo de gasto.<br>
                <b>3.</b> Una vez culminada la rendición el usuario debe presionar el boton culminar, una vez hecho esto la información será enviada a la sede principal de Telesu para su respectiva aprobación.<br>
                <b>4.</b> En caso de no ser aprobada, la rendición será devuelta al usuario para su corrección.<br>
                
            </div>
        </div>
        <div class=\"tab-pane fade in active\" id=\"gasto1\">
            <br><h4>GASTOS DE FUNCIONAMIENTO</h4><br>
            
            <table class=\"relaciongasto\" border=\"1\">
                <tr>
                    <th>Nro. Comprobante</th>
                    <th>Fecha Factura</th>
                    <th>Imputación</th>
                    <th>Descripción</th>
                    <th>Nombre/Razón</th>
                    <th>Identif. fiscal</th>
                    <th>Nro. factura</th>
                    <th>Monto</th>
                    <th>Dólares</th>
                    
                </tr>
                <tr>
                    <td>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'widget');
        echo "</td>
                    <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'widget');
        echo "</td>
                    <td></td>
                    <td>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripcion"), 'widget');
        echo "</td>
                    <td>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'widget');
        echo "</td>
                    <td>";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'widget');
        echo "</td>
                    <td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'widget');
        echo "</td>
                    <td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'widget');
        echo "</td>
                    <td>";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'widget');
        echo "</td>
                    
                </tr>                
                
                
            </table>
            
        </div>
        <div class=\"tab-pane fade\" id=\"gasto2\">
            <br><h4>COBERTURA PROGRAMADA</h4><br>
        </div>
        <div class=\"tab-pane fade\" id=\"gasto3\">
            <br><h4>HONORARIOS PROFESIONALES</h4><br>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 110,  168 => 109,  164 => 108,  160 => 107,  156 => 106,  152 => 105,  147 => 103,  143 => 102,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
