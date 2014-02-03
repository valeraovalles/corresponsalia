<?php

/* UsuarioBundle:Usercorresponsalia:show.html.twig */
class __TwigTemplate_a9f43bc9eefc987a59fa63e2e92f5d59ccd895b4884018561bf2ad0deb96e05a extends Twig_Template
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
        echo "CORRESPONSALÍA - CONSULTAR USUARIO-CORRESPONSALÍA";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    CONSULTAR USUARIO-CORRESPONSALÍA
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>CONSULTAR USUARIO-CORRESPONSALÍA</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"formShow\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Id:</div>
            <div class=\"widgetform\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Usuario:</div>
            <div class=\"widgetform\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "usuario"), "primerNombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "usuario"), "primerApellido"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Corresponsalía:</div>
            <div class=\"widgetform\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "corresponsalia"), "nombre"), "html", null, true);
        echo "</div>
        </div>
    </div>
    <a class=\"btn btn-default\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usercorresponsalia_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("usercorresponsalia");
        echo "\">IR AL LISTADO</a>
  
    <BR><BR>
    ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'errors');
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usercorresponsalia:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  104 => 36,  100 => 35,  96 => 34,  90 => 31,  86 => 30,  80 => 27,  71 => 23,  64 => 19,  56 => 14,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
