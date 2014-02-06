<?php

/* UsuarioBundle:Rol:edit.html.twig */
class __TwigTemplate_9791d68504e9837fe568cfbabba60ed8138efcafa8d751bc9859a82fd44a2d17 extends Twig_Template
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
        echo "CORRESPONSALÍA - EDITAR ROL";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    EDITAR ROL
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>EDITAR ROL</h1>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        // line 17
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "rol"), 'errors')) {
            // line 18
            echo "<div class=\"alert alert-danger errores\" style=\"width:70%;\">
    <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
    <div>";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "rol"), 'errors');
            echo "</div>
</div>
";
        }
        // line 23
        echo "    
<form novalidate action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">
    
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "_token"), 'widget');
        echo "

     <div class=\"formShow\">
        <div class=\"contenedorform\">
            <div class=\"text-error\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "rol"), 'errors');
        echo "</div>
            <div class=\"labelform\">Rol:</div>
            <div class=\"widgetform\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "rol"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"text-error\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'errors');
        echo "</div>
            <div class=\"labelform\">Descripcion:</div>
            <div class=\"widgetform\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'widget');
        echo "</div>
        </div>
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">EDITAR</button> | 

        <a class=\"btn btn-default\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("rol");
        echo "\">
            IR AL LISTADO
        </a>
</form>


        <form action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return confirm('Seguro que desea eliminar')\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\">BORRAR</button>
        </form>


";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Rol:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  124 => 49,  115 => 43,  106 => 37,  101 => 35,  95 => 32,  90 => 30,  83 => 26,  76 => 24,  73 => 23,  67 => 20,  63 => 18,  61 => 17,  56 => 15,  53 => 14,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
