<?php

/* CorresponsaliaBundle:Tecnologia/Asignacion:reasignar.html.twig */
class __TwigTemplate_c1e38c8a5e7a75387632e460bc0476d2c60e537415f482fdda4956b3f9142f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulomodulo' => array($this, 'block_titulomodulo'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "<h1>ASIGNAR EQUIPO - CORRESPONSALIA</h1>";
    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    \$.noConflict();
    jQuery(document).ready(function () {
        
        jQuery(document).on({
            mouseenter: function () {
                jQuery(\".parent\").datepicker({
                    showOn: \"button\",
                    showAnim: \"drop\",
                    buttonImage: \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calendario/calendar.png"), "html", null, true);
        echo "\",
                    buttonImageOnly: true,
                    onClose: function( selectedDate ) {
                        jQuery( \".child\" ).datepicker( \"option\", \"minDate\", selectedDate );
                    }
                });
                jQuery(\".child\").datepicker({
                    showOn: \"button\",
                    showAnim: \"drop\",
                    buttonImage: \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calendario/calendar.png"), "html", null, true);
        echo "\",
                    buttonImageOnly: true,
                    onClose: function( selectedDate ) {
                        jQuery( \".parent\" ).datepicker( \"option\", \"maxDate\", selectedDate );
                    }
                });
            },
            mouseout: function() {
                jQuery(\".parent\").datepicker({
                    showOn: \"button\",
                    showAnim: \"drop\",
                    buttonImage: \"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calendario/calendar.png"), "html", null, true);
        echo "\",
                    buttonImageOnly: true,
                    onClose: function( selectedDate ) {
                        jQuery( \".child\" ).datepicker( \"option\", \"minDate\", selectedDate );
                    }
                });
                jQuery(\".child\").datepicker({
                    showOn: \"button\",
                    showAnim: \"drop\",
                    buttonImage: \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calendario/calendar.png"), "html", null, true);
        echo "\",
                    buttonImageOnly: true,
                    onClose: function( selectedDate ) {
                        jQuery( \".parent\" ).datepicker( \"option\", \"maxDate\", selectedDate );
                    }
                });
            }
        });

        jQuery(\"#tecnologia_asignacion_status\").change(function(){
            var valor = jQuery( \"option:contains('Venezuela')\" ).val();
            var texto = jQuery( \"option:contains('Venezuela')\" ).text();
            var selector_option = jQuery(\"#tecnologia_asignacion_corresponsalia option[value=\"+ valor +\"]\");
            var \$status_id = jQuery(\"#tecnologia_asignacion_status :selected\").text();
            if(\$status_id === \"PRESTAMO\" || \$status_id === \"COBERTURA\"){
                if (!jQuery('#fechaEstimadaRetorno').length) {
                    var html= '<div class=\"contenedorform\" id=\"fechaEstimadaRetorno\">'+
                        '<div class=\"labelform\">fechaEstimadaRetorno:</div>'+
                        '<div class=\"widgetform\"><input type=\"text\" id=\"tecnologia_asignacion_fechaEstimadaRetorno\" class=\"child\" name=\"tecnologia_asignacion[fechaEstimadaRetorno]\" required=\"required\" /></div>'+
                        '</div>';
                    var \$wrapper = jQuery('div.formShow');
                    \$wrapper.append(html);
                }
                
                if(\$status_id === \"COBERTURA\"){
                    selector_option.text(texto);
                    selector_option.remove();
                    var selector_padre = jQuery( \"#tecnologia_asignacion_corresponsalia\" );
                    selector_padre.append(\"<option selected='selected' value='\"+valor+\"'>\"+texto+\"</option></select>\");
                    selector_padre.prop('disabled', 'disabled');
                    jQuery(\"#wrapper-form\").append(\"<input type='hidden' id='tecnologia_corresp' name='tecnologia_asignacion[corresponsalia]' value='\"+valor+\"'/>\");
                }else{
                    selector_option.removeProp(\"selected\");
                    jQuery('#tecnologia_corresp').remove();
                }
            }else {
                selector_option.removeProp(\"selected\");
                jQuery('#fechaEstimadaRetorno').remove();
                jQuery('#tecnologia_corresp').remove();
            }
        });
    });
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/Jdatepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/js/equipo_new.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 91
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 92
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/corresponsalia/Tecnologia/css/equipo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <style type=\"text/css\">
        thead td {
            text-align: center;
        }
        .sombra_td {
            background-color: #F9F9F9;
            text-align: center;
        }
    </style>
";
    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        // line 106
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 108
        if (((($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors') || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "corresponsalia"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAsignacion"), 'errors')) || $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEstimadaRetorno"), 'errors'))) {
            // line 109
            echo "    <div class=\"alert alert-danger errores\" style=\"width:70%;\">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>Categoria: ";
            // line 111
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors');
            echo "</div>
        <div>Marca: ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "corresponsalia"), 'errors');
            echo "</div>
        <div>Modelo: ";
            // line 113
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAsignacion"), 'errors');
            echo "</div>
        <div>Serial: ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEstimadaRetorno"), 'errors');
            echo "</div>
    </div>
    ";
        }
        // line 117
        echo "    
    <form novalidate method=\"post\" action=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("tecnoasignar_Rcreate");
        echo "\">
        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <div id=\"wrapper-form\" class=\"formShow\" style=\"width:70%;\">
            <table class='table table-condensed table-bordered'>
                <legend>ASIGNACION ACTUAL</legend>
                <tr>
                    <td class=\"sombra_td\"><strong></br>Descripcion del Equipo</strong></td>
                    <td>Categoria: ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo_actual"]) ? $context["equipo_actual"] : $this->getContext($context, "equipo_actual")), "categoria"), "html", null, true);
        echo " </br> 
                      Modelo: ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo_actual"]) ? $context["equipo_actual"] : $this->getContext($context, "equipo_actual")), "modelo"), "html", null, true);
        echo " </br>
                      Serial: ";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo_actual"]) ? $context["equipo_actual"] : $this->getContext($context, "equipo_actual")), "serialEquipo"), "html", null, true);
        echo "
                  </td>
                </tr>
                <tr>
                  <td class=\"sombra_td\"><strong></br>Asignacion Actual</strong></td>
                  <td>Tipo de Asignacion: ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignar_actual"]) ? $context["asignar_actual"] : $this->getContext($context, "asignar_actual")), "status"), "html", null, true);
        echo " </br> 
                      Corresponsalia: ";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignar_actual"]) ? $context["asignar_actual"] : $this->getContext($context, "asignar_actual")), "corresponsalia"), "html", null, true);
        echo " </br>
                      Fecha Asignacion: ";
        // line 134
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignar_actual"]) ? $context["asignar_actual"] : $this->getContext($context, "asignar_actual")), "fechaAsignacion"), "d-m-Y"), "html", null, true);
        echo "
                  </td>
                </tr>
            </table>
            <legend>NUEVA ASIGNACION</legend>
             <div class=\"contenedorform\">
                <div class=\"labelform\">Tipo de Asignacion:</div>
                <div class=\"widgetform\">";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">Corresponsalia:</div>
                <div class=\"widgetform\">";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "corresponsalia"), 'widget');
        echo "</div>
            </div>
            <div class=\"contenedorform\">
                <div class=\"labelform\">fechaAsignacion:</div>
                <div class=\"widgetform\">";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAsignacion"), 'widget', array("attr" => array("class" => "parent")));
        echo "</div>
            </div>
        </div>
            <input type=\"hidden\" id=\"tecnologia_asignacion_id\" name=\"tecnologia_asignacion[id]\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo_actual"]) ? $context["equipo_actual"] : $this->getContext($context, "equipo_actual")), "id"), "html", null, true);
        echo "\" />
        <input type=\"submit\" value=\"REASIGNAR\" class=\"btn btn-primary\"> | 
        <a class=\"btn btn-default\" href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("tecnoequipo");
        echo "\">IR AL LISTADO</a>
    </form>
    
    <BR>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Tecnologia/Asignacion:reasignar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 154,  273 => 152,  267 => 149,  260 => 145,  253 => 141,  243 => 134,  239 => 133,  235 => 132,  227 => 127,  223 => 126,  219 => 125,  210 => 119,  206 => 118,  203 => 117,  197 => 114,  193 => 113,  189 => 112,  185 => 111,  181 => 109,  179 => 108,  174 => 106,  171 => 105,  156 => 93,  151 => 92,  148 => 91,  142 => 88,  138 => 87,  92 => 44,  80 => 35,  66 => 24,  54 => 15,  40 => 5,  37 => 4,  31 => 3,);
    }
}
