<?php

/* CorresponsaliaBundle:Default:rendirgasto.html.twig */
class __TwigTemplate_e0205fdfce13fd956ccd49e8c902f90bf0a6d3c3694a8e93a922dbb51978e1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_titulomodulo($context, array $blocks = array())
    {
        echo "  
    <h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "descripcion")), "html", null, true);
        echo "</h2>
    ";
        // line 10
        if (($this->getAttribute($this->getContext($context, "periodo"), "cobertura") != "")) {
            echo "<h4>COBERTURA: '";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "cobertura")), "html", null, true);
            echo "'</h4>";
        }
        // line 11
        echo "    <h4>CORRESPONSALÍA: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "nombre")), "html", null, true);
        echo "</h4>
    <h4>PAÍS: ";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo " | AÑO: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "mes"), "html", null, true);
        echo " | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">CAMBIO: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cambio"), "montocambiodolar"), "html", null, true);
        echo "</a></h4><br>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 18
        if (((((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripciongasto"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors'))) {
            // line 19
            echo "    <div class=\"alert alert-danger errores\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripciongasto"), 'errors');
            echo "</div>
        <div>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors');
            echo "</div>
        <div>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors');
            echo "</div>
        <div>";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors');
            echo "</div>
        <div>";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors');
            echo "</div>
        <div>";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors');
            echo "</div>
        <div>";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors');
            echo "</div>
        <div>";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_estatusfondo.html.twig")->display($context);
        // line 33
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_guardarendicion", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">  
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        ";
        // line 36
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_tablarendicion.html.twig")->display($context);
        // line 37
        echo "        <br><br><input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "id"), "html", null, true);
        echo "\">VER LISTADO DE RENDICION</button>
        <input type=\"hidden\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "id"), "html", null, true);
        echo "\" name=\"rendicion_relaciongasto[periodorendicion]\">
        
    </form>
    
        
        ";
        // line 44
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_listadorendicion.html.twig")->display($context);
        echo "  

        
        
     <form novalidate method=\"post\" action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_estatusrendicion", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"), "estatus" => 2)), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Está seguro que desea cerrar esta rendición? Recuerde que una vez cerrada no podrá realizar modificaciones a menos que le sea devuelta para correcciones!!')\">  
        <input type=\"submit\" value=\"CERRAR RENDICIÓN\" class=\"btn btn-danger\">
     </form> 
        
        
        
        
        
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#rendicion_relaciongasto_montomonnac').blur(function(){
                montocambiomn()
            });
            function montocambiomn(){
                    var montomonnac=\$('#rendicion_relaciongasto_montomonnac').val();
                    montomonnac = montomonnac.replace(\",\", \".\");
                    var cambio=\$('#cambio').val();
                    var montofinal=montomonnac/cambio;
                    montofinal = montofinal.toFixed(3);
                    \$('#rendicion_relaciongasto_montodolar').val(montofinal);
            }
         });
    </script>
    
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:rendirgasto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 48,  160 => 44,  152 => 39,  148 => 38,  145 => 37,  143 => 36,  139 => 35,  135 => 34,  132 => 33,  130 => 32,  127 => 31,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 19,  87 => 18,  81 => 16,  78 => 15,  64 => 12,  59 => 11,  53 => 10,  49 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
