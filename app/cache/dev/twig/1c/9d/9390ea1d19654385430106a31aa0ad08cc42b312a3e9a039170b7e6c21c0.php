<?php

/* CorresponsaliaBundle:Cambio:index.html.twig */
class __TwigTemplate_1c9d9390ea1d19654385430106a31aa0ad08cc42b312a3e9a039170b7e6c21c0 extends Twig_Template
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
        echo "CORRESPONSALÍA - TASA DE CAMBIO";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    TASA DE CAMBIO
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>LISTADO HISTÓRICO DE TASAS DE CAMBIO</h1>
    <h4>CORRESPONSALIA: ";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "nombre")), "html", null, true);
        echo "</h4>
    <h4>AÑO: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "mes"), "html", null, true);
        echo "</h4><br>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        $this->displayParentBlock("body", $context, $blocks);
        echo "



    
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
        // line 33
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montocambiodolar"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechahoraregistro"), "d-m-Y G:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "responsable"), "primerNombre")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "responsable"), "primerApellido")), "html", null, true);
            echo "</td>
                ";
            // line 52
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>

    

            <a class=\"btn btn-primary\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cambio_new", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">
                CREAR NUEVA TASA DE CAMBIO
            </a> |             
            <a class=\"btn btn-default\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_rendirgasto", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">
                VOLVER A LA RENDICIÓN
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
        return array (  135 => 62,  129 => 59,  122 => 54,  115 => 52,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  94 => 37,  90 => 36,  85 => 33,  66 => 16,  63 => 15,  55 => 12,  51 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
