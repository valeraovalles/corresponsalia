<?php

/* CorresponsaliaBundle:Estadofondo:new.html.twig */
class __TwigTemplate_10191a9b935ea856802c4253b1b38e6e1ca19381ccb5f6ba9361c354a3fb43eb extends Twig_Template
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
        echo "  
    <h1>ASIGNACIÓN DE FONDOS</h1>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "recursorecibido"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "saldoinicial"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "observacion"), 'errors'))) {
            // line 11
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 13
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "saldoinicial"), 'errors');
            echo "</div>        
        <div>";
            // line 14
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "recursorecibido"), 'errors');
            echo "</div>
        <div>";
            // line 15
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "observacion"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 18
        echo "    
    ";
        // line 19
        if (isset($context["cobertura"])) { $_cobertura_ = $context["cobertura"]; } else { $_cobertura_ = null; }
        if ($this->getAttribute($_cobertura_, "id", array(), "any", true, true)) {
            // line 20
            echo "        ";
            if (isset($context["cobertura"])) { $_cobertura_ = $context["cobertura"]; } else { $_cobertura_ = null; }
            $context["idcobertura"] = $this->getAttribute($_cobertura_, "id");
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $context["idcobertura"] = 0;
            // line 23
            echo "    ";
        }
        // line 24
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 25
        if (isset($context["periodo"])) { $_periodo_ = $context["periodo"]; } else { $_periodo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadofondo_create", array("idperiodo" => $this->getAttribute($_periodo_, "id"))), "html", null, true);
        echo "\">
        ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'widget');
        echo "
        <div class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Corresponsalía:</div>
                <div class=\"widgetform\">";
        // line 30
        if (isset($context["periodo"])) { $_periodo_ = $context["periodo"]; } else { $_periodo_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($_periodo_, "corresponsalia"), "nombre")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo gasto:</div>
                <div class=\"widgetform\">";
        // line 34
        if (isset($context["periodo"])) { $_periodo_ = $context["periodo"]; } else { $_periodo_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($_periodo_, "tipogasto"), "descripcion")), "html", null, true);
        echo "</div>
            </div>
            ";
        // line 36
        if (isset($context["periodo"])) { $_periodo_ = $context["periodo"]; } else { $_periodo_ = null; }
        if (($this->getAttribute($this->getAttribute($_periodo_, "tipogasto"), "id") == 2)) {
            // line 37
            echo "            <div class=\"contenedorform\">
                <div class=\"labelform\">Cobertura:</div>
                <div class=\"widgetform\">";
            // line 39
            if (isset($context["periodo"])) { $_periodo_ = $context["periodo"]; } else { $_periodo_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_periodo_, "cobertura")), "html", null, true);
            echo "</div>
            </div>
            ";
        }
        // line 42
        echo "            <div class=\"contenedorform\">
                <div class=\"labelform\">País:</div>
                <div class=\"widgetform\">";
        // line 44
        if (isset($context["periodo"])) { $_periodo_ = $context["periodo"]; } else { $_periodo_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_periodo_, "corresponsalia"), "pais"), "pais")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Año:</div>
                <div class=\"widgetform\">";
        // line 48
        if (isset($context["periodo"])) { $_periodo_ = $context["periodo"]; } else { $_periodo_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_periodo_, "anio")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Mes:</div>
                <div class=\"widgetform\">";
        // line 52
        if (isset($context["periodo"])) { $_periodo_ = $context["periodo"]; } else { $_periodo_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_periodo_, "mes")), "html", null, true);
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Saldo inicial:</div>
                <div class=\"widgetform\">";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "saldoinicial"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Recurso enviado:</div>
                <div class=\"widgetform\">";
        // line 60
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "recursorecibido"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Observación:</div>
                <div class=\"widgetform\">";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "observacion"), 'widget');
        echo "</div>
            </div>
        </div>
    
        <input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">IR AL LISTADO DE PERÍODOS</a> ";
        // line 71
        echo "    </form>

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Estadofondo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 71,  185 => 69,  176 => 64,  168 => 60,  160 => 56,  152 => 52,  144 => 48,  136 => 44,  132 => 42,  125 => 39,  121 => 37,  118 => 36,  112 => 34,  104 => 30,  96 => 26,  91 => 25,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  75 => 20,  72 => 19,  69 => 18,  62 => 15,  57 => 14,  52 => 13,  48 => 11,  45 => 10,  40 => 8,  37 => 7,  29 => 3,);
    }
}
