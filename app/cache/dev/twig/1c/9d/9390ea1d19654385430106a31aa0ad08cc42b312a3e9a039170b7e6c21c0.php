<?php

/* CorresponsaliaBundle:Cambio:index.html.twig */
class __TwigTemplate_1c9d9390ea1d19654385430106a31aa0ad08cc42b312a3e9a039170b7e6c21c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <h1>LISTADO HISTÓRICO DE TASAS DE CAMBIO</h1>
    <h4>";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "corresponsalia"), "nombre")), "html", null, true);
        echo "</h4><br>

    
    <div class=\"alert alert-info\">
        <b>Nota:</b> Para conversiones del sistema sólo se tomará en cuenta la última Tasa de Cambio creada.
        
    </div>
    <table class=\"table table-striped\" style=\"width: 700px;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Monto</th>
                <th>Fecha registro</th>
                <th>Responsable</th>
                ";
        // line 22
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montocambiodolar"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechahoraregistro"), "d-m-Y G:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "responsable"), "primerNombre")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "responsable"), "primerApellido")), "html", null, true);
            echo "</td>
                ";
            // line 41
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>


            <a class=\"btn btn-primary\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio_new", array("idcor" => $this->getContext($context, "idcor"))), "html", null, true);
        echo "\">
                CREAR NUEVA TASA DE CAMBIO
            </a> |             
            <a class=\"btn btn-default\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("corresponsalia_principal");
        echo "\">
                VOLVER AL INICIO
            </a><br>

    ";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Cambio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  97 => 47,  91 => 43,  84 => 41,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  63 => 26,  59 => 25,  54 => 22,  37 => 7,  31 => 4,  28 => 3,);
    }
}
