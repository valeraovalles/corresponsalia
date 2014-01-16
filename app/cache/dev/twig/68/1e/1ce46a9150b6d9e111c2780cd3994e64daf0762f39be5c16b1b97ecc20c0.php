<?php

/* CorresponsaliaBundle:Default:inicio.html.twig */
class __TwigTemplate_681e1ce46a9150b6d9e111c2780cd3994e64daf0762f39be5c16b1b97ecc20c0 extends Twig_Template
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
    
    ";
        // line 13
        if ((((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors'))) {
            // line 14
            echo "    <div class=\"alert alert-danger errores\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors');
            echo "</div>
        <div>";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors');
            echo "</div>
        <div>";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors');
            echo "</div>
        <div>";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors');
            echo "</div>
        <div>";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors');
            echo "</div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors');
            echo "</div>
        <div>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 25
        echo "
    <div class=\"table-responsive\">
    <table border=\"1\" class=\"estatusfondo table table-striped\">
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
    </div>  
        
    <form novalidate method=\"post\" action=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("corresponsalia_guardatemprendicion");
        echo "\">  
        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        <table class=\"table\" style=\"width: 900px;\">
            <tr>

                <th>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "tipogasto"), 1), 'widget');
        echo "&nbsp;&nbsp;Gastos de funcionamiento</th>
                <th>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "tipogasto"), 2), 'widget');
        echo "&nbsp;Cobertura programada</th>
                <th>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "tipogasto"), 3), 'widget');
        echo "&nbsp;Honorarios profesionales</th>
            </tr>
        </table>


        ";
        // line 87
        $this->env->loadTemplate("CorresponsaliaBundle:Default:tablarendicion.html.twig")->display($context);
        // line 88
        echo "
        <br><input id=\"agregar\" type=\"submit\" value=\"Agregar\" class=\"btn btn-primary\"><br><br>
    </form>
    
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$('#rendicion_relaciongasto_tipogasto_1').click(function(){
                ajaxdescripciongasto(1)
            });
            
            \$('#rendicion_relaciongasto_tipogasto_2').click(function(){
                ajaxdescripciongasto(2)
            });
            

            \$('#rendicion_relaciongasto_tipogasto_3').click(function(){
                ajaxdescripciongasto(3)
            });
            
        });
        
        if(\$('#rendicion_relaciongasto_tipogasto_1').is(':checked')==true)
            ajaxdescripciongasto(1)
        else if(\$('#rendicion_relaciongasto_tipogasto_2').is(':checked')==true)
            ajaxdescripciongasto(2)
        else if(\$('#rendicion_relaciongasto_tipogasto_3').is(':checked')==true)
            ajaxdescripciongasto(3)
        
        function ajaxdescripciongasto(valor){
                var dato = valor;
                var ruta = \"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_ajax_formdescripciongasto", array("idtipo" => "variable1", "data" => "variable2")), "html", null, true);
        echo "\";
                ruta = ruta.replace(\"variable1\", dato);
                ruta = ruta.replace(\"variable2\", ";
        // line 121
        echo twig_escape_filter($this->env, $this->getContext($context, "dataselect"), "html", null, true);
        echo ");
                \$('#descripciongasto').load(ruta);            
        }
    </script>
    
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
        return array (  209 => 121,  204 => 119,  171 => 88,  169 => 87,  161 => 82,  157 => 81,  153 => 80,  146 => 76,  142 => 75,  90 => 25,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 14,  54 => 13,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
