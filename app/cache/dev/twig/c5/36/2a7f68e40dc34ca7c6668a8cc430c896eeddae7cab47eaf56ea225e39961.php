<?php

/* UsuarioBundle:Default:index.html.twig */
class __TwigTemplate_c5362a7f68e40dc34ca7c6668a8cc430c896eeddae7cab47eaf56ea225e39961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::administracion.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulobanner' => array($this, 'block_titulobanner'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::administracion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio - Telesur";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    LISTADO DE APLICACIONES
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    
    <div class=\"titulo\" style=\"cursor:pointer\" data-toggle=\"modal\" href=\"#myModal\">BIENVENIDO ";
        // line 14
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "primerNombre")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "primerApellido")), "html", null, true);
        echo "<br><div style=\"font-size:9px;\">CONSULTAR DATOS DE USUARIO AQUÍ</div> </div>

    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"alert alert-success\">
            ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    <br>
    <div class=\"jquery\" align=\"left\">

            ";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "user"), "password") != null)) {
            // line 31
            echo "            <div class=\"listado_aplicaciones\">
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("cambioclave");
            echo "\">CAMBIAR CLAVE<br><img id=\"neto\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/CLAVE.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"CAMBIAR CLAVE\" data-trigger=\"hover\"></a><br>
            </div>
            ";
        }
        // line 35
        echo "
            ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_DISTRIBUCION")) {
            // line 37
            echo "            <div class=\"listado_aplicaciones\">
                <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("distribucion_homepage");
            echo "\">DISTRIBUCIÓN<br><img id=\"neto\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apps/mapamundi.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"DISTRIBUCIÓN\" data-trigger=\"hover\"></a><br>
            </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (($this->env->getExtension('security')->isGranted("ROLE_LICENCIAS") || $this->env->getExtension('security')->isGranted("ROLE_LICADMIN"))) {
            // line 43
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("licencias_homepage");
            echo "\">LICENCIAS<br><img id=\"licencias\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/licencias/candado.png"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"LICENCIAS\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 47
        echo "            
           ";
        // line 51
        echo "
            ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("ROLE_VISITAS")) {
            // line 53
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("control_visitas_usuario");
            echo "\">VISITAS<br><img id=\"licencias\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/User_male.png"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"VISITAS\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "user"), "fueradenomina") == false)) {
            // line 59
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("neto_homepage");
            echo "\">NETO<br><img id=\"licencias\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/moneda.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"RECIBO DE PAGO\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 63
        echo "
            ";
        // line 64
        if ($this->env->getExtension('security')->isGranted("ROLE_VIDEOTECA")) {
            // line 65
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("videoteca_homepage");
            echo "\">VIDEOTECA<br><img id=\"licencias\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/videoteca.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"VIDEOTECA\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 69
        echo "

            ";
        // line 71
        if ($this->env->getExtension('security')->isGranted("ROLE_NOMINA")) {
            // line 72
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("nomina_formalimentacion");
            echo "\">NÓMINA<br><img id=\"licencias\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/nomina.jpeg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"TXT PRESTACIONES\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 76
        echo "
            ";
        // line 77
        if (($this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "user"), "fueradenomina") == false)) {
            // line 78
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("constancia_homepage");
            echo "\">CONSTANCIA<br><img id=\"licencias\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/constancia.jpeg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"CONSTANCIA DE TRABAJO\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 82
        echo "
            <div class=\"listado_aplicaciones\">
              <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("sit_homepage");
        echo "\">SIT<br><img id=\"licencias\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sit.jpg"), "html", null, true);
        echo "\" data-placement=\"bottom\" title=\"SOLICITUDES\" data-trigger=\"hover\"></a>
            </div>

            ";
        // line 87
        if (((($this->env->getExtension('security')->isGranted("ROLE_CONTENIDOS_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_CONTENIDOS_CONTENIDOS")) || $this->env->getExtension('security')->isGranted("ROLE_CONTENIDOS_COMPRAS")) || $this->env->getExtension('security')->isGranted("ROLE_CONTENIDOS_EQUIPOS"))) {
            // line 88
            echo "                <div class=\"listado_aplicaciones\">
                  <a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("datosproveedor");
            echo "\">CONTENIDOS<br><img id=\"licencias\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/dinero.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"CONTROL DE PAGOS\" data-trigger=\"hover\"></a>
                </div>
            ";
        }
        // line 92
        echo "
            <div class=\"listado_aplicaciones\">
              <a href=\"javascript:void(0)\" id=\"pe\">ESTUDIOS<br><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/estudio.jpg"), "html", null, true);
        echo "\" data-placement=\"bottom\" title=\"SOLICITUDES\" data-trigger=\"hover\"></a>
            </div>

            <div class=\"listado_aplicaciones\">
              <a href=\"javascript:void(0)\" id=\"mm\">MAPAMUNDI<br><img  src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/mapamundi.jpg"), "html", null, true);
        echo "\" data-placement=\"bottom\" title=\"SOLICITUDES\" data-trigger=\"hover\"></a>
            </div>

            ";
        // line 101
        if ($this->env->getExtension('security')->isGranted("ROLE_CREATV")) {
            // line 102
            echo "            <div class=\"listado_aplicaciones\" id=\"ct\">
              <a href=\"javascript:void(0)\">CREATV<br><img  src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/creatv.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"SOLICITUDES\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 106
        echo "

            ";
        // line 108
        if ($this->env->getExtension('security')->isGranted("ROLE_TRANSPORTE")) {
            // line 109
            echo "            <div class=\"listado_aplicaciones\" id=\"tp\">
              <a href=\"javascript:void(0)\">TRANSPORTE<br><img  src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/transporte.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"SOLICITUDES\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 113
        echo "
            <div class=\"listado_aplicaciones\">
              <a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("mercal_homepagenum", array("idjornada" => 3));
        echo "\">JORNADAS<br><img id=\"licencias\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jornada.png"), "html", null, true);
        echo "\" data-placement=\"bottom\" title=\"SOLICITUDES\" data-trigger=\"hover\"></a>
            </div>

            ";
        // line 118
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            // line 119
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 120
            echo $this->env->getExtension('routing')->getPath("transporte_homepage");
            echo "\">TRANSPORTE NUEVO<br><img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/transporte.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"SOLICITUDES\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 123
        echo "
            ";
        // line 124
        if ($this->env->getExtension('security')->isGranted("ROLE_CONTRATOS")) {
            // line 125
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 126
            echo $this->env->getExtension('routing')->getPath("contratos");
            echo "\">CONTRATOS<br><img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/contratos.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\" title=\"SOLICITUDES\" data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 129
        echo "
            ";
        // line 130
        if ($this->env->getExtension('security')->isGranted("ROLE_DIRECTORIO")) {
            // line 131
            echo "            <div class=\"listado_aplicaciones\">
              <a href=\"";
            // line 132
            echo $this->env->getExtension('routing')->getPath("directorio_homepage");
            echo "\">DIRECTORIO<br><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/directorio.jpg"), "html", null, true);
            echo "\" data-placement=\"bottom\"  data-trigger=\"hover\"></a>
            </div>
            ";
        }
        // line 135
        echo "



   </div>

    <br>

    <div style=\"clear:both;float:none;\"></div>


    <script type=\"text/javascript\">

        \$(document).ready(function (){

                \$(\".jquery\").hide(1);

                \$(\".jquery\").fadeIn(3000);

        });

        \$(document).ready(function () {
            \$('#info').gips({ 'theme': 'red', placement: 'right',text:";
        // line 157
        echo (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos"));
        echo ", autoHide: true });
        });

    </script>

   
    <script>

    \$('#info').popover();

    </script>

    ";
        // line 170
        echo "    <SCRIPT TYPE=\"text/javascript\">
    \$( \"#pe\" ).click(function() {
        \$('#form60').attr('action', '/Telesur/web/estudios.php');
        \$( \"#form60\" ).submit();
    });

    \$( \"#mm\" ).click(function() {
        \$('#form60').attr('action', '/Telesur/web/mapamundi.php');
        \$( \"#form60\" ).submit();
    });

    \$( \"#ct\" ).click(function() {
        \$('#form60').attr('action', '/Telesur/web/creatv.php');
        \$( \"#form60\" ).submit();
    });

    \$( \"#tp\" ).click(function() {
        \$('#form60').attr('action', '/Telesur/web/transporte.php');
        \$( \"#form60\" ).submit();
    });
    </SCRIPT>

    <form id=\"form60\" action=\"\" method=\"post\" style=\"display:none;\">
        <input type=\"text\" name=\"signin[username]\" id=\"signin_username\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "\"/>
        <input type=\"password\" name=\"signin[password]\" id=\"signin_password\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["PASSPASS"]) ? $context["PASSPASS"] : $this->getContext($context, "PASSPASS")), "html", null, true);
        echo "\"/>
    </form>
    ";
        // line 197
        echo "
    ";
        // line 199
        echo "    <div style=\"width:500px;left:52%;\" id=\"myModal\" class=\"modal hide fade\" tabindex=\"5\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
              <h3 id=\"myModalLabel\">DATOS DE USUARIO</h3>
         </div>
        <div class=\"modal-body\">
            
            ";
        // line 206
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            echo " 
            <div align=\"left\">
                <div><b>USUARIO:</b> ";
            // line 208
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "html", null, true);
            echo "</div>
                <div><b>NOMBRE:</b> ";
            // line 209
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "primerNombre")), "html", null, true);
            echo "</div>
                <div><b>APELLIDO:</b> ";
            // line 210
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "primerApellido")), "html", null, true);
            echo "</div>
                <div><b>CEDULA:</b> ";
            // line 211
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "cedula")), "html", null, true);
            echo " </div>
                ";
            // line 212
            if (($this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "user"), "fueradenomina") == false)) {
                // line 213
                echo "                    <div><b>SUELDO NORMAL:</b> ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "sueldo_basico")), "html", null, true);
                echo "</div>
                    <div><b>FECHA INGRESO:</b> ";
                // line 214
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "fecha_ingreso")), "d-m-Y"), "html", null, true);
                echo "</div>
                    <div><b>FECHA NACIMIENTO:</b> ";
                // line 215
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "fecha_nacimiento")), "d-m-Y"), "html", null, true);
                echo "</div>
                    <div><b>DEPENDENCIA:</b> ";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "nombre"), "html", null, true);
                echo "</div>
                    <div><b>CARGO:</b> ";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "descripcion_cargo"), "html", null, true);
                echo "</div>
                ";
            }
            // line 219
            echo "            ";
        }
        // line 220
        echo "            </div>
                    
        </div>
        <div class=\"modal-footer\">
          <button class=\"btn\" data-dismiss=\"modal\">Cerrar</button>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 220,  487 => 219,  482 => 217,  478 => 216,  470 => 214,  465 => 213,  463 => 212,  459 => 211,  455 => 210,  451 => 209,  447 => 208,  442 => 206,  433 => 199,  425 => 194,  421 => 193,  396 => 170,  357 => 135,  349 => 132,  346 => 131,  344 => 130,  333 => 126,  330 => 125,  328 => 124,  325 => 123,  317 => 120,  304 => 115,  300 => 113,  291 => 109,  289 => 108,  279 => 103,  276 => 102,  274 => 101,  261 => 94,  257 => 92,  249 => 89,  232 => 82,  233 => 127,  228 => 125,  215 => 118,  267 => 149,  260 => 145,  253 => 141,  223 => 126,  210 => 119,  197 => 93,  181 => 109,  256 => 112,  248 => 110,  244 => 87,  239 => 133,  236 => 84,  225 => 103,  255 => 128,  195 => 73,  213 => 100,  185 => 111,  165 => 97,  23 => 3,  194 => 92,  191 => 66,  180 => 103,  172 => 59,  160 => 63,  153 => 59,  178 => 75,  76 => 25,  84 => 27,  129 => 46,  65 => 18,  170 => 58,  146 => 55,  70 => 18,  205 => 72,  200 => 76,  192 => 84,  175 => 60,  148 => 47,  124 => 38,  118 => 39,  114 => 35,  231 => 89,  222 => 122,  216 => 76,  206 => 96,  188 => 65,  184 => 87,  167 => 57,  127 => 43,  104 => 36,  100 => 35,  152 => 71,  113 => 35,  90 => 31,  77 => 23,  212 => 58,  207 => 34,  202 => 95,  190 => 87,  186 => 64,  174 => 106,  161 => 70,  155 => 59,  150 => 62,  134 => 49,  126 => 50,  110 => 39,  97 => 34,  81 => 31,  58 => 16,  137 => 43,  53 => 15,  480 => 162,  474 => 215,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 197,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 157,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 129,  337 => 103,  322 => 101,  314 => 119,  312 => 118,  309 => 97,  305 => 95,  298 => 91,  294 => 110,  285 => 106,  283 => 88,  278 => 154,  268 => 98,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 84,  169 => 64,  140 => 44,  132 => 41,  128 => 50,  107 => 48,  61 => 17,  273 => 152,  269 => 94,  254 => 92,  243 => 134,  240 => 86,  238 => 85,  235 => 132,  230 => 103,  227 => 127,  224 => 79,  221 => 78,  219 => 77,  217 => 101,  208 => 73,  204 => 72,  179 => 108,  159 => 54,  143 => 67,  135 => 42,  119 => 36,  102 => 34,  71 => 22,  67 => 17,  63 => 16,  59 => 16,  28 => 3,  38 => 5,  87 => 25,  21 => 2,  201 => 110,  196 => 90,  183 => 63,  171 => 69,  166 => 72,  163 => 76,  158 => 70,  156 => 53,  151 => 51,  142 => 88,  138 => 51,  136 => 45,  121 => 37,  117 => 43,  105 => 31,  91 => 38,  62 => 22,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 31,  89 => 24,  85 => 26,  75 => 21,  68 => 23,  56 => 14,  24 => 2,  19 => 1,  93 => 27,  88 => 32,  78 => 29,  46 => 11,  44 => 9,  27 => 1,  79 => 21,  72 => 24,  69 => 25,  47 => 10,  40 => 6,  37 => 5,  22 => 2,  246 => 88,  157 => 60,  145 => 55,  139 => 51,  131 => 43,  123 => 44,  120 => 38,  115 => 43,  111 => 49,  108 => 32,  101 => 29,  98 => 27,  96 => 34,  83 => 28,  74 => 27,  66 => 24,  55 => 20,  52 => 17,  50 => 11,  43 => 8,  41 => 8,  35 => 4,  32 => 4,  29 => 2,  209 => 95,  203 => 71,  199 => 69,  193 => 113,  189 => 112,  187 => 81,  182 => 86,  176 => 102,  173 => 65,  168 => 67,  164 => 66,  162 => 63,  154 => 52,  149 => 56,  147 => 57,  144 => 54,  141 => 54,  133 => 56,  130 => 54,  125 => 45,  122 => 49,  116 => 35,  112 => 30,  109 => 40,  106 => 38,  103 => 30,  99 => 43,  95 => 30,  92 => 30,  86 => 23,  82 => 22,  80 => 26,  73 => 23,  64 => 19,  60 => 19,  57 => 16,  54 => 16,  51 => 10,  48 => 8,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
