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
   
    <h2>RENDICIÓN DE GASTOS MES DE ENERO</h2>
    <h4>CORRESPONSALIA: ";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "nombre")), "html", null, true);
        echo " | PAÍS: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "pais")), "html", null, true);
        echo " | CAMBIO: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "montocambiodolar"), "html", null, true);
        echo "</h4><BR>
    
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"alert alert-success\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
    ";
        // line 26
        if ((((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors'))) {
            // line 27
            echo "    <div class=\"alert alert-danger errores\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors');
            echo "</div>
        <div>";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors');
            echo "</div>
        <div>";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors');
            echo "</div>
        <div>";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors');
            echo "</div>
        <div>";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors');
            echo "</div>
        <div>";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors');
            echo "</div>
        <div>";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 38
        echo "
    <div class=\"table-responsive\">
    <table border=\"1\" class=\"estatusfondo table table-striped\">
        <tr>
            <th colspan=\"4\">ESTATUS DEL FONDO ENVIADO</th>
        </tr>
        <tr>
            <th>Descripción</th>
            <th>USD \$</th>
            <th>Moneda nacional</th>
            <th>Bs.</th>
        </tr>
        <tr>
            <td>Saldo inicial</td>
            <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldoinicial"), "html", null, true);
        echo "</td>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldoinicial_mn"), "html", null, true);
        echo "</td>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldoinicial_bs"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Recursos recibidos</td>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "recursorecibido"), "html", null, true);
        echo "</td>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "recursorecibido_mn"), "html", null, true);
        echo "</td>
            <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "recursorecibido_bs"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Pagos efectuados</td>
            <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "pagos"), "html", null, true);
        echo "</td>
            <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "pagos_mn"), "html", null, true);
        echo "</td>
            <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "pagos_bs"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Saldo final</td>
            <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldofinal"), "html", null, true);
        echo "</td>
            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldofinal_mn"), "html", null, true);
        echo "</td>
            <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldofinal_bs"), "html", null, true);
        echo "</td>
            
        </tr>
    </table>
    
    </div>  
    
    
        
    <form novalidate method=\"post\" action=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("corresponsalia_guardatemprendicion");
        echo "\">  
        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        <table class=\"table\" style=\"width: 900px;\">
            <tr>

                <th>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "tipogasto"), 1), 'widget');
        echo "&nbsp;&nbsp;Gastos de funcionamiento&nbsp;<a style=\"cursor:pointer;\" data-toggle=\"modal\" data-target=\"#gasfun\">(";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 1), "num"), "html", null, true);
        echo ")</a></th>
                <th>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "tipogasto"), 2), 'widget');
        echo "&nbsp;Cobertura programada&nbsp;<a style=\"cursor:pointer;\" data-toggle=\"modal\" data-target=\"#cobpro\">(";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 2), "num"), "html", null, true);
        echo ")</a></th>
                <th>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "tipogasto"), 3), 'widget');
        echo "&nbsp;Honorarios profesionales&nbsp;<a style=\"cursor:pointer;\" data-toggle=\"modal\" data-target=\"#honpro\">(";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "numerotipogasto"), 3), "num"), "html", null, true);
        echo ")</a></th>
            </tr>
        </table>


        ";
        // line 93
        $this->env->loadTemplate("CorresponsaliaBundle:Default:tablarendicion.html.twig")->display($context);
        // line 94
        echo "

        <br><input id=\"agregar\" type=\"submit\" value=\"Agregar\" class=\"btn btn-primary\"><br><br>
        <input type=\"hidden\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "montocambiodolar"), "html", null, true);
        echo "\" id=\"montocambiodolar\">
    </form>
    
        ";
        // line 100
        $this->env->loadTemplate("CorresponsaliaBundle:Default:listadorendicion.html.twig")->display($context);
        echo "  
    
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
            
            \$('#rendicion_relaciongasto_montodolar').blur(function(){
                montocambiomn()
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
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_ajax_formdescripciongasto", array("idtipo" => "variable1", "data" => "variable2")), "html", null, true);
        echo "\";
                ruta = ruta.replace(\"variable1\", dato);
                ruta = ruta.replace(\"variable2\", ";
        // line 134
        echo twig_escape_filter($this->env, $this->getContext($context, "dataselect"), "html", null, true);
        echo ");
                \$('#descripciongasto').load(ruta);            
        }
        
        function montocambiomn(){
                var montodolar=\$('#rendicion_relaciongasto_montodolar').val();
                var montocambiodolar=\$('#montocambiodolar').val();
                var montofinal=montodolar*montocambiodolar;
                montofinal = montofinal.toFixed(2);
                \$('#rendicion_relaciongasto_montomonnac').val(montofinal);
                
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
        return array (  303 => 134,  298 => 132,  263 => 100,  257 => 97,  252 => 94,  250 => 93,  240 => 88,  234 => 87,  228 => 86,  221 => 82,  217 => 81,  205 => 72,  201 => 71,  197 => 70,  190 => 66,  186 => 65,  182 => 64,  175 => 60,  171 => 59,  167 => 58,  160 => 54,  156 => 53,  152 => 52,  136 => 38,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 27,  100 => 26,  97 => 25,  88 => 22,  85 => 21,  81 => 20,  78 => 19,  69 => 16,  66 => 15,  62 => 14,  53 => 12,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
