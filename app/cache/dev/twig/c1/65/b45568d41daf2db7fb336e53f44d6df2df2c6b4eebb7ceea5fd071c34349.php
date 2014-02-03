<?php

/* CorresponsaliaBundle:Default:principal.html.twig */
class __TwigTemplate_c165b45568d41daf2db7fb336e53f44d6df2df2c6b4eebb7ceea5fd071c34349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_titulomodulo($context, array $blocks = array())
    {
        echo "<h1>TASA DE CAMBIO</h1>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    

<div class=\"table-responsive\" style=\"width:800px;\">
<table class=\"table\" border=\"1\">
    <tr>
        <th>Corresponsalía: </th>
        <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "nombre")), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>País: </th>
        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Tasa de cambio: </th>
        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cambio"), "montocambiodolar"), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;<a  class=\"label label-info\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio_new", array("idcor" => $this->getAttribute($this->getContext($context, "corresponsalia"), "id"))), "html", null, true);
        echo "\">Nueva Tasa de Cambio</a></td>
    </tr>
</table>
</div>


";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  56 => 17,  49 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
