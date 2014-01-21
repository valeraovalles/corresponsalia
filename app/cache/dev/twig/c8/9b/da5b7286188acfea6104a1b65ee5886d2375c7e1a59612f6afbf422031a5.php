<?php

/* CorresponsaliaBundle:Ajax:formdescripciongasto.html.twig */
class __TwigTemplate_c89bda5b7286188acfea6104a1b65ee5886d2375c7e1a59612f6afbf422031a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripciongasto"), 'widget');
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Ajax:formdescripciongasto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
