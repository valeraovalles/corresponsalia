<?php

/* UsuarioBundle:User:show.html.twig */
class __TwigTemplate_7de20e646448e8f5a3bebcb42582692e48056e53d240ac3f1a0e137752831ee8 extends Twig_Template
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
        echo "Corresponsalía - Consultar Usuario";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    CONSULTAR USUARIO
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>CONSULTAR USUARIO</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"formShow\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Id:</div>
            <div class=\"widgetform\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "id"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Username:</div>
            <div class=\"widgetform\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "username"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Estatus:</div>
            <div class=\"widgetform\">
                ";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "isActive") == 1)) {
            // line 30
            echo "                    Activo
                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "isActive") == null)) {
            // line 32
            echo "                    Inactivo
                ";
        }
        // line 34
        echo "            </div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Nombres:</div>
            <div class=\"widgetform\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "primerNombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "segundoNombre"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Apellidos:</div>
            <div class=\"widgetform\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "primerApellido"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "segundoApellido"), "html", null, true);
        echo "</div>
        </div>

    </div>
<br>

<form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "id"))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return confirm('Seguro que desea eliminar')\">
    <a class=\"btn btn-default\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">IR AL LISTADO</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <button class=\"btn btn-danger\" type=\"submit\">BORRAR</button>
    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
</form>

<br>

";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  126 => 50,  122 => 49,  118 => 48,  107 => 42,  98 => 38,  92 => 34,  88 => 32,  84 => 30,  82 => 29,  74 => 24,  67 => 20,  59 => 15,  56 => 14,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
