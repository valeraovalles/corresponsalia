<?php

/* CorresponsaliaBundle:Default:_estatusfondo.html.twig */
class __TwigTemplate_6c065a4103765712072942722f8eae88b2b1a6a129d834270872bcd8954bcccf extends Twig_Template
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
        echo "    <table border=\"1\" class=\"estatusfondo table table-striped\">
        <tr>
            <th colspan=\"4\" style=\"text-align: center;\">ESTATUS DEL FONDO RECIBIDO PARA ";
        // line 3
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "tipogasto"), "descripcion")), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>Descripción</th>
            <th>USD \$</th>
            <th>Moneda nacional</th>
            <th>Bs.</th>
        </tr>
        <tr>
            <td>Saldo inicial</td>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldoinicial"), "html", null, true);
        echo "</td>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldoinicial_mn"), "html", null, true);
        echo "</td>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldoinicial_bs"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Recursos recibidos</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "recursorecibido"), "html", null, true);
        echo "</td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "recursorecibido_mn"), "html", null, true);
        echo "</td>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "recursorecibido_bs"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Pagos efectuados</td>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "pagos"), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "pagos_mn"), "html", null, true);
        echo "</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "pagos_bs"), "html", null, true);
        echo "</td>
        </tr>
        <tr style=\"font-weight: bold;\">
            <td>Saldo final</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldofinal"), "html", null, true);
        echo "</td>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldofinal_mn"), "html", null, true);
        echo "</td>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "estadofondo"), "saldofinal_bs"), "html", null, true);
        echo "</td>
            
        </tr>
    </table>";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:_estatusfondo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  85 => 32,  81 => 31,  74 => 27,  66 => 25,  59 => 21,  55 => 20,  51 => 19,  40 => 14,  36 => 13,  23 => 3,  19 => 1,  159 => 46,  152 => 42,  145 => 38,  141 => 37,  137 => 36,  134 => 35,  132 => 34,  128 => 33,  124 => 32,  121 => 31,  119 => 30,  116 => 29,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 17,  76 => 16,  70 => 26,  67 => 13,  53 => 10,  49 => 9,  44 => 15,  38 => 5,  33 => 4,  30 => 3,);
    }
}
