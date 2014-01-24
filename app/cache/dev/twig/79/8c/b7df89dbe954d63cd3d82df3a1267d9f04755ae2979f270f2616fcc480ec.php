<?php

/* CorresponsaliaBundle:Corresponsalia:show.html.twig */
class __TwigTemplate_798cb7df89dbe954d63cd3d82df3a1267d9f04755ae2979f270f2616fcc480ec extends Twig_Template
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
    <h1>CORRESPONSALÍA</h1>

    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class=\"alert alert-success\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    
    <div class=\"formShow\" style=\"width:70%;\">
        <div class=\"contenedorform\">
            <div class=\"labelform\">Nombre:</div>
            <div class=\"widgetform\">";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre")), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">País:</div>
            <div class=\"widgetform\">";
        // line 26
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pais")), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Tipo:</div>
            <div class=\"widgetform\">";
        // line 30
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tipocorresponsalia")), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contenedorform\">
            <div class=\"labelform\">Tipo moneda:</div>
            <div class=\"widgetform\">";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tipomoneda")), "html", null, true);
        echo "</div>
        </div>
    </div>
    
        <a class=\"btn btn-default\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("corresponsalia");
        echo "\">IR AL LISTADO</a> | 
        <a class=\"btn btn-default\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">IR A EDITAR</a>
        <br><br>
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'errors');
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Corresponsalia:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  123 => 43,  119 => 42,  115 => 41,  110 => 39,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  72 => 18,  63 => 15,  60 => 14,  56 => 13,  53 => 12,  44 => 9,  41 => 8,  37 => 7,  31 => 4,  28 => 3,);
    }
}
