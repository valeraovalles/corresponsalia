<?php

/* CorresponsaliaBundle:Tecnologia/Equipo:edit.html.twig */
class __TwigTemplate_bbc7287b0121640571c8ffff3261dfdc87a2de6631aaa117eb86213c82728379 extends Twig_Template
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
        echo "<h1>EDITAR EQUIPO</h1>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/css/equipo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/libs/select2/select2.css"), "html", null, true);
        echo "\"/>
    <style type=\"text/css\">
        .select2-container .select2-choice > .select2-chosen {
            min-width: 200px !important;
        }
    </style>
";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
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
        // line 27
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
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calendario/calendar.png"), "html", null, true);
        echo "\",
                buttonImageOnly: true
            });
        });
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/Jdatepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/equipo_new.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/effects.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/libs/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() { jQuery(\".autocomplete_select\").select2(); });
    </script>
";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 61
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "serialEquipo"), 'errors')) {
            // line 62
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "serialEquipo"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 67
        echo "    <form novalidate method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoequipo_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
         <input type=\"hidden\" name=\"_method\" value=\"PUT\"> ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
         <div id=\"wrapper-form\" class=\"formShow\" style=\"width:70%;\">
             <div class=\"contenedorform\">
                <div class=\"labelform\">Categoria:</div>
                <div class=\"widgetform\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria"), 'widget', array("attr" => array("class" => "autocomplete_select")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Marca:</div>
                <div class=\"widgetform\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "marca"), 'widget', array("attr" => array("class" => "autocomplete_select")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">modelo:</div>
                <div class=\"widgetform\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "modelo"), 'widget', array("attr" => array("class" => "autocomplete_select")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">serial Equipo:</div>
                <div class=\"widgetform\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "serialEquipo"), 'widget', array("attr" => array("class" => "strtoupper")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">descripcion:</div>
                <div class=\"widgetform\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion"), 'widget', array("attr" => array("class" => "strtoupper")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">fecha Adquisicion:</div>
                <div class=\"widgetform\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaAdquisicion"), 'widget', array("attr" => array("class" => "datepicker")));
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Condicion:</div>
                <div class=\"widgetform\">";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "condicion"), 'widget', array("attr" => array("class" => "autocomplete_select")));
        echo "</div>
            </div>
            ";
        // line 98
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacionCondicion")) > 0)) {
            // line 99
            echo "                <div id=\"observcondicion\" class=\"contenedorform\">
                    <div class=\"labelform\">observacion Condicion:</div>
                    <div class=\"widgetform\">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "observacionCondicion"), 'widget');
            echo "</div>
                </div>
            ";
        }
        // line 104
        echo "            ";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status")) {
            // line 105
            echo "                ";
            if (((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")) == false)) {
                // line 106
                echo "                    <i>Este equipo aun no esta asignado a ninguna corresponsalia</i>
                ";
            }
            // line 108
            echo "            ";
        } else {
            // line 109
            echo "                <i>Este equipo esta inactivo</i>
            ";
        }
        // line 111
        echo "         </div>
        <input type=\"submit\" value=\"EDITAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoequipo_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">IR A CONSULTA</a> | 
        <a class=\"btn btn-default\" href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("tecnoequipo");
        echo "\">IR AL LISTADO</a>
        ";
        // line 115
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status")) {
            // line 116
            echo "            ";
            if (((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")) == true)) {
                // line 117
                echo "                | <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tecnoasignar_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">EDITAR ASIGNACIÓN</a>
            ";
            }
            // line 119
            echo "        ";
        }
        // line 120
        echo "    </form>

    <BR>
    ";
        // line 123
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("onsubmit" => "return confirm(\"¿Seguro que deseas eliminar?\")")));
        echo "
        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'errors');
        echo "
        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
    ";
        // line 126
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Equipo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 126,  272 => 125,  268 => 124,  264 => 123,  259 => 120,  256 => 119,  250 => 117,  247 => 116,  245 => 115,  241 => 114,  237 => 113,  233 => 111,  229 => 109,  226 => 108,  222 => 106,  219 => 105,  216 => 104,  210 => 101,  206 => 99,  204 => 98,  199 => 96,  192 => 92,  185 => 88,  178 => 84,  171 => 80,  164 => 76,  157 => 72,  150 => 68,  145 => 67,  139 => 64,  135 => 62,  133 => 61,  128 => 59,  125 => 58,  116 => 51,  112 => 50,  108 => 49,  104 => 48,  96 => 43,  77 => 27,  63 => 17,  60 => 16,  49 => 8,  45 => 7,  40 => 6,  37 => 5,  31 => 3,);
    }
}
