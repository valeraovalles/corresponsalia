<?php

/* CorresponsaliaBundle:Tecnologia/Equipo:new.html.twig */
class __TwigTemplate_da72b85d40db7b8c6495b53ed6c60198f5c4b65df8134c338318daf95886bdf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulomodulo' => array($this, 'block_titulomodulo'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
    <h1>NUEVO EQUIPO</h1>
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/css/equipo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/libs/select2/select2.css"), "html", null, true);
        echo "\"/>
    <style type=\"text/css\">
        .select2-container .select2-choice > .select2-chosen {
            min-width: 200px !important;
        }
    </style>
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        jQuery(function(){
            jQuery(\"#tecnologia_equipo_marca\").change(function(){
                var data = {
                    marca_id: jQuery(this).val()
                };

                jQuery.ajax({
                    type: 'post',
                    url: '";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tecnoequipo_select");
        echo "',
                    data: data,
                    success: function(data) {
                        var \$modelo_selector = jQuery('#tecnologia_equipo_modelo');
                         \$modelo_selector.html('<option>Selecciona</option>');
                        for(var i in data){
                            \$modelo_selector.append('<option value=\"' + data[i].id + '\">' + data[i].nombre + '</option>');
                        }
                    }
                });
            });
        });
        
        jQuery(function() {
            jQuery( \".datepicker\" ).datepicker({
                showOn: \"button\",
                buttonImage: \"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calendario/calendar.png"), "html", null, true);
        echo "\",
                buttonImageOnly: true
            });
        });
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/Jdatepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/equipo_new.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/effects.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/libs/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() { jQuery(\".autocomplete_select\").select2(); });
    </script>
";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 62
        if ((((((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modelo"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "serialEquipo"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAdquisicion"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicion"), 'errors'))) {
            // line 63
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>Categoria: ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria"), 'errors');
            echo "</div>
        <div>Marca: ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca"), 'errors');
            echo "</div>
        <div>Modelo: ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modelo"), 'errors');
            echo "</div>
        <div>Serial: ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "serialEquipo"), 'errors');
            echo "</div>
        <div>Descripcion: ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'errors');
            echo "</div>
        <div>Fecha: ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAdquisicion"), 'errors');
            echo "</div>
        <div>Condicion: ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicion"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 74
        echo "
    <form novalidate method=\"POST\" action=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("tecnoequipo_create");
        echo "\">
        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <div id=\"wrapper-form\" class=\"formShow\" style=\"width:70%;\">
            <div class=\"contenedorform\">
                <div class=\"labelform\">Categoria:</div>
                <div class=\"widgetform\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria"), 'widget', array("attr" => array("class" => "autocomplete_select")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Marca:</div>
                <div class=\"widgetform\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca"), 'widget', array("attr" => array("class" => "autocomplete_select")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Modelo:</div>
                <div class=\"widgetform\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modelo"), 'widget', array("attr" => array("class" => "autocomplete_select")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">serial Equipo:</div>
                <div class=\"widgetform\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "serialEquipo"), 'widget', array("attr" => array("class" => "strtoupper")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Descripcion:</div>
                <div class=\"widgetform\">";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'widget', array("attr" => array("class" => "strtoupper")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Fecha Adquisicion:</div>
                <div class=\"widgetform\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAdquisicion"), 'widget', array("attr" => array("class" => "datepicker")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Condicion:</div>
                <div class=\"widgetform\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicion"), 'widget', array("attr" => array("class" => "autocomplete_select")));
        echo "</div>
            </div>
        </div>
        
        <input type=\"submit\" value=\"GUARDAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("tecnoequipo");
        echo "\">IR AL LISTADO</a>
    </form>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Equipo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 109,  227 => 104,  220 => 100,  213 => 96,  206 => 92,  199 => 88,  192 => 84,  185 => 80,  178 => 76,  174 => 75,  171 => 74,  165 => 71,  161 => 70,  157 => 69,  153 => 68,  149 => 67,  145 => 66,  141 => 65,  137 => 63,  135 => 62,  130 => 60,  127 => 59,  118 => 53,  114 => 52,  110 => 51,  106 => 50,  98 => 45,  79 => 29,  65 => 19,  62 => 18,  51 => 10,  47 => 9,  42 => 8,  39 => 7,  31 => 3,);
    }
}
