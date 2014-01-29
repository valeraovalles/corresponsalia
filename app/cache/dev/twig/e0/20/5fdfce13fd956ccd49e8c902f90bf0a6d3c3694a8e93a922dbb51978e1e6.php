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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "tipogasto"), "descripcion")), "html", null, true);
        echo "</h2>
    <h4>CORRESPONSALÍA: ";
        // line 10
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "nombre")), "html", null, true);
        echo " | PAÍS: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo " | AÑO: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "mes"), "html", null, true);
        echo "</h4><br>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 16
        if (((((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripciongasto"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors'))) {
            // line 17
            echo "    <div class=\"alert alert-danger errores\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripciongasto"), 'errors');
            echo "</div>
        <div>";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerocomprobante"), 'errors');
            echo "</div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fechafactura"), 'errors');
            echo "</div>
        <div>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrerazonsocial"), 'errors');
            echo "</div>
        <div>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "identificacionfiscal"), 'errors');
            echo "</div>
        <div>";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numerofactura"), 'errors');
            echo "</div>
        <div>";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montomonnac"), 'errors');
            echo "</div>
        <div>";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "montodolar"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_estatusfondo.html.twig")->display($context);
        // line 31
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("corresponsalia_guardarendicion");
        echo "\">  
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
        ";
        // line 34
        $this->env->loadTemplate("CorresponsaliaBundle:Default:tablarendicion.html.twig")->display($context);
        // line 35
        echo "        <br><br><input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\">
        <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipogasto"), "id"), "html", null, true);
        echo "\">VER LISTADO DE RENDICION</button>
        <input type=\"hidden\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tipogasto"), "id"), "html", null, true);
        echo "\" name=\"rendicion_relaciongasto[tipogasto]\">
        <input type=\"hidden\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "id"), "html", null, true);
        echo "\" name=\"rendicion_relaciongasto[corresponsalia]\">
        <input type=\"hidden\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getContext($context, "anio"), "html", null, true);
        echo "\" name=\"rendicion_relaciongasto[anio]\">
        <input type=\"hidden\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getContext($context, "mes"), "html", null, true);
        echo "\" name=\"rendicion_relaciongasto[mes]\">
    </form>
        <input type=\"hidden\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cambio"), "montocambiodolar"), "html", null, true);
        echo "\" id=\"cambio\">
    
        ";
        // line 44
        $this->env->loadTemplate("CorresponsaliaBundle:Default:listadorendicion.html.twig")->display($context);
        echo "  
    
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#rendicion_relaciongasto_montomonnac').blur(function(){
                montocambiomn()
            });
            function montocambiomn(){
                    var montomonnac=\$('#rendicion_relaciongasto_montomonnac').val();
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
        return "CorresponsaliaBundle:Default:rendirgasto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 44,  156 => 42,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  132 => 35,  130 => 34,  126 => 33,  122 => 32,  119 => 31,  117 => 30,  114 => 29,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 17,  74 => 16,  68 => 14,  65 => 13,  53 => 10,  49 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
