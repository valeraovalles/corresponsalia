<?php

/* UsuarioBundle:Rol:new.html.twig */
class __TwigTemplate_134f7c52533d8e7b0c6cc488eeabc8db0a7ec94a4b90e7ea9e2f6edac1b4feed extends Twig_Template
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
        echo "CORRESPONSALÍA - NUEVO ROL";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    NUEVO ROL
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>NUEVO ROL</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        // line 16
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rol"), 'errors')) {
            // line 17
            echo "<div class=\"alert alert-danger errores\" style=\"width:70%;\">
    <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
    <div>";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rol"), 'errors');
            echo "</div>
</div>
";
        }
        // line 22
        echo "    
\t<form novalidate action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("rol_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">

\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "


     <div class=\"formShow\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Rol:</div>
            <div class=\"widgetform\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rol"), 'widget');
        echo "</div>
        </div>
     </div>
     <br>

\t        <button class=\"btn btn-primary\" type=\"submit\">CREAR</button>
\t    \t<a class=\"btn btn-default\"  href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("rol");
        echo "\">IR AL LISTADO</a>
\t</form>

";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Rol:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  93 => 31,  84 => 25,  77 => 23,  74 => 22,  68 => 19,  64 => 17,  62 => 16,  56 => 14,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
