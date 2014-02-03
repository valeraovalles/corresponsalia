<?php

/* ::administracion.html.twig */
class __TwigTemplate_f3471bf78505699b503e90c120c57b1d635d746e313aa49b2858d2bbe98b469e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("UsuarioBundle:Default:includes/menu.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "::administracion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  141 => 55,  134 => 50,  123 => 45,  119 => 44,  115 => 42,  111 => 40,  107 => 38,  105 => 37,  100 => 35,  94 => 34,  88 => 33,  82 => 32,  78 => 31,  75 => 30,  71 => 29,  50 => 11,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
