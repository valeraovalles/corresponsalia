<?php

/* UsuarioBundle:Usercorresponsalia:new.html.twig */
class __TwigTemplate_0529957628ee0bbd4d4555a038aa7e4d99f104a14309513ea46332dc45bb8a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulobanner' => array($this, 'block_titulobanner'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "CORRESPONSALÍA - NUEVO USUARIO-CORRESPONSALÍA";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    NUEVO USUARIO-CORRESPONSALÍA
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>NUEVO USUARIO-CORRESPONSALÍA</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 16
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "usuario"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "corresponsalia"), 'errors'))) {
            // line 17
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "usuario"), 'errors');
            echo "</div>
        <div>";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "corresponsalia"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 22
        echo "  
    
    <form novalidate action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("usercorresponsalia_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "

        <div class=\"formShow\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Usuario:</div>
                <div class=\"widgetform\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "usuario"), 'widget');
        echo "</div>
            </div> 
            <div class=\"contenedorform\">
                <div class=\"labelform\">Corresponsalía:</div>
                <div class=\"widgetform\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "corresponsalia"), 'widget');
        echo "</div>
            </div>  
        </div>
        
        <button class=\"btn btn-primary\" type=\"submit\">CREAR</button> | 
        <a class=\"btn btn-default\"  href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("usercorresponsalia");
        echo "\">IR AL LISTADO</a>
    </form>
    
    
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usercorresponsalia:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  102 => 34,  95 => 30,  87 => 25,  81 => 24,  77 => 22,  71 => 20,  67 => 19,  63 => 17,  61 => 16,  56 => 14,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
