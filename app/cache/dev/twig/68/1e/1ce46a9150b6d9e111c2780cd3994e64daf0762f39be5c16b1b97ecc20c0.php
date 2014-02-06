<?php

/* CorresponsaliaBundle:Default:inicio.html.twig */
class __TwigTemplate_681e1ce46a9150b6d9e111c2780cd3994e64daf0762f39be5c16b1b97ecc20c0 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "CORRESPONSALÍA - INICIO";
    }

    // line 6
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 7
        echo "    INICIO
";
    }

    // line 11
    public function block_titulomodulo($context, array $blocks = array())
    {
        echo "  
    <h2>BIENVENIDOS AL SISTEMA DE CORRESPONSALÍA</h2>
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
        return array (  56 => 16,  53 => 15,  45 => 11,  40 => 7,  37 => 6,  31 => 4,);
    }
}
