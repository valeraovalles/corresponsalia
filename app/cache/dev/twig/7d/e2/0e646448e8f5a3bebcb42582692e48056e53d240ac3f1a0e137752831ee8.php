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

    ";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "started")) {
            // line 18
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 19
                echo "            <div class=\"Greenflash-notice\">
                ";
                // line 20
                echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
        ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 25
                echo "            <div class=\"Redflash-notice\">
                ";
                // line 26
                echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        // line 30
        echo "
    <div class=\"formShow\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Id:</div>
            <div class=\"widgetform\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "id"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Username:</div>
            <div class=\"widgetform\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "username"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Estatus:</div>
            <div class=\"widgetform\">
                ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "isActive") == 1)) {
            // line 44
            echo "                    Activo
                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "isActive") == null)) {
            // line 46
            echo "                    Inactivo
                ";
        }
        // line 48
        echo "            </div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Nombres:</div>
            <div class=\"widgetform\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "primerNombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "segundoNombre"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Apellidos:</div>
            <div class=\"widgetform\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "primerApellido"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "segundoApellido"), "html", null, true);
        echo "</div>
        </div>

    </div>
<br>

<form action=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "id"))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return confirm('Seguro que desea eliminar')\">
    <a class=\"btn btn-default\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">IR AL LISTADO</a> | 
    <a class=\"btn btn-default\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a> | 
    <button class=\"btn btn-danger\" type=\"submit\">BORRAR</button>
    ";
        // line 66
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
        return array (  175 => 66,  170 => 64,  166 => 63,  162 => 62,  151 => 56,  142 => 52,  136 => 48,  132 => 46,  128 => 44,  126 => 43,  118 => 38,  111 => 34,  105 => 30,  102 => 29,  93 => 26,  90 => 25,  86 => 24,  83 => 23,  74 => 20,  71 => 19,  66 => 18,  64 => 17,  59 => 15,  56 => 14,  53 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
