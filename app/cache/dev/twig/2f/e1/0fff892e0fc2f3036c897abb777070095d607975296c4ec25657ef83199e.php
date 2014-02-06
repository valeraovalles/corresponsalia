<?php

/* UsuarioBundle:User:edit.html.twig */
class __TwigTemplate_2fe10fff892e0fc2f3036c897abb777070095d607975296c4ec25657ef83199e extends Twig_Template
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
        echo "Corresponsalía - Editar Usuario";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    EDITAR USUARIO
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>EDITAR USUARIO</h1>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 16
        if ((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "username"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "password"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "primerNombre"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "primerApellido"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "rol"), 'errors'))) {
            // line 17
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "username"), 'errors');
            echo "</div>
        <div>";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "password"), 'errors');
            echo "</div>
        <div>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "primerNombre"), 'errors');
            echo "</div>
        <div>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "primerApellido"), 'errors');
            echo "</div>
        <div>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "rol"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 26
        echo "    
<form novalidate class=\"formulario\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">

    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "_token"), 'widget');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "_token"), 'widget');
        echo "
 
     <div class=\"formShow\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Username:</div>
            <div class=\"widgetform\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "username"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Password:</div>
            <div class=\"widgetform\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "password"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Activo:</div>
            <div class=\"widgetform\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "isActive"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Primer nombre:</div>
            <div class=\"widgetform\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "primerNombre"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Segundo nombre:</div>
            <div class=\"widgetform\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "segundoNombre"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Primer apellido:</div>
            <div class=\"widgetform\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "primerApellido"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Segundo apellido:</div>
            <div class=\"widgetform\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form_perfil"), "segundoApellido"), 'widget');
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Rol:</div>
            <div class=\"widgetform\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "rol"), 'widget');
        echo "</div>
        </div>
    </div>


<br>

<button class=\"btn btn-primary\" type=\"submit\">Editar</button> | 

        <a class=\"btn btn-default\" href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Ir a la lista
        </a> | 
        <a class=\"btn btn-default\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("rol_new");
        echo "\">
            Ir a nuevo rol
        </a>

</form>

<form action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return confirm('Seguro que desea eliminar')\">
    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
    <button class=\"btn btn-danger\" type=\"submit\">Borrar</button>
</form>
<br>

";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 82,  187 => 81,  178 => 75,  172 => 72,  160 => 63,  153 => 59,  146 => 55,  139 => 51,  132 => 47,  125 => 43,  118 => 39,  111 => 35,  103 => 30,  99 => 29,  92 => 27,  89 => 26,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 17,  61 => 16,  56 => 14,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
