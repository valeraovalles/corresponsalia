<?php

/* CorresponsaliaBundle:Default:editarendicion.html.twig */
class __TwigTemplate_9d32b03f175a6341bd0d927fa97cdceb7196ffdf99d3ba0ec7b5971230138817 extends Twig_Template
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
    <h2>EDITAR ";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "descripcion")), "html", null, true);
        echo "</h2>
    ";
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "id") == 2)) {
            echo "<h4>\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "rendicion"), "cobertura"), "descripcion")), "html", null, true);
            echo "\"</h4>";
        }
        // line 11
        echo "    <h4>CORRESPONSALÍA: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "nombre")), "html", null, true);
        echo " | PAÍS: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo " | AÑO: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "mes"), "html", null, true);
        echo " | CAMBIO: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cambio"), "montocambiodolar"), "html", null, true);
        echo "</h4><br>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 17
        if (((((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripciongasto"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors'))) {
            // line 18
            echo "    <div class=\"alert alert-danger errores\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripciongasto"), 'errors');
            echo "</div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors');
            echo "</div>
        <div>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors');
            echo "</div>
        <div>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors');
            echo "</div>
        <div>";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors');
            echo "</div>
        <div>";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors');
            echo "</div>
        <div>";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors');
            echo "</div>
        <div>";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_estatusfondo.html.twig")->display($context);
        // line 32
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocorresponsalia_actualizarendicion", array("idrendicion" => $this->getAttribute($this->getContext($context, "rendicion"), "id"), "idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">  
        <input type=\"hidden\" name=\"_method\" value=\"PUT\"> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        ";
        // line 35
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_tablarendicion.html.twig")->display($context);
        // line 36
        echo "        <br><br><input type=\"submit\" value=\"EDITAR\" class=\"btn btn-warning\">
        <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "id"), "html", null, true);
        echo "\">VER LISTADO DE RENDICION</button> 
        
        ";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "id") != 2)) {
            // line 40
            echo "        <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_rendirgasto", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
            echo "\">VOLVER</a>
        ";
        } else {
            // line 42
            echo "        <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_rendirgastocob", array("idcobertura" => $this->getAttribute($this->getAttribute($this->getContext($context, "rendicion"), "cobertura"), "id"))), "html", null, true);
            echo "\">VOLVER</a>
        ";
        }
        // line 44
        echo "  
        
        <input type=\"hidden\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "id"), "html", null, true);
        echo "\" name=\"rendicion_relaciongasto[periodorendicion]\">
        
        ";
        // line 48
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "id") == 2)) {
            // line 49
            echo "        <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "rendicion"), "cobertura"), "id"), "html", null, true);
            echo "\" name=\"rendicion_relaciongasto[cobertura]\">
        ";
        }
        // line 51
        echo "    </form>
        <input type=\"hidden\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cambio"), "montocambiodolar"), "html", null, true);
        echo "\" id=\"cambio\">
    
        ";
        // line 54
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_listadorendicion.html.twig")->display($context);
        echo "  

        <BR>
        ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
        ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_end');
        echo "   
        
        
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
                    montofinal = montofinal.toFixed(2);
                    \$('#rendicion_relaciongasto_montodolar').val(montofinal);
            }
         });
    </script>
    
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:editarendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 60,  202 => 59,  198 => 58,  194 => 57,  188 => 54,  183 => 52,  180 => 51,  174 => 49,  172 => 48,  167 => 46,  163 => 44,  157 => 42,  151 => 40,  149 => 39,  144 => 37,  141 => 36,  139 => 35,  135 => 34,  131 => 33,  128 => 32,  126 => 31,  123 => 30,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 18,  83 => 17,  77 => 15,  74 => 14,  59 => 11,  53 => 10,  49 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
