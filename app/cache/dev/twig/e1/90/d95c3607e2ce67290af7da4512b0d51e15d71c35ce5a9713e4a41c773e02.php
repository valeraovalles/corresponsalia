<?php

/* CorresponsaliaBundle:Includes:menu.html.twig */
class __TwigTemplate_e190d95c3607e2ce67290af7da4512b0d51e15d71c35ce5a9713e4a41c773e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div align=\"left\">
<nav class=\"navbar navbar-inverse\" role=\"navigation\">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
      <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("corresponsalia_inicio");
        echo "\"><span style=\"color:white;\" class=\"glyphicon glyphicon-home\"></span></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
    <ul class=\"nav navbar-nav\">
        
      ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN")) {
            echo "  
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">USUARIOS<b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("user");
            echo "\">Listado de usuarios</a></li>
          <li><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("user_new");
            echo "\">Nuevo usuario</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("rol");
            echo "\">Listado de roles</a></li>
          <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("rol_new");
            echo "\">Nuevo rol</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("usercorresponsalia");
            echo "\">Listado Usuario-Corresponsalía</a></li>
          <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("usercorresponsalia_new");
            echo "\">Nueva relación usuario-Corresponsalía</a></li>
        </ul>
      </li>
      ";
        }
        // line 33
        echo "      
      ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
            // line 35
            echo "      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">ADMINISTRAR <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("tipomoneda");
            echo "\">Tipo de Moneda</a></li>
          <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("tipocorresponsalia");
            echo "\">Tipo de Corresponsalía</a></li>
          <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("corresponsalia");
            echo "\">Corresponsalia</a></li>
          <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("periodorendicion");
            echo "\">Asignar fondo</a></li>
          <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("revision_periodorendicion");
            echo "\">Revisión de rendiciones</a></li>
          <li class=\"divider\"></li>
        </ul>
      </li>
      ";
        }
        // line 47
        echo "      
      ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_CORRESPONSALIA")) {
            // line 49
            echo "      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">RENDICIÓN <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("periodorendicion");
            echo "\">Rendir gastos</a></li>
        </ul>
      </li>
      ";
        }
        // line 56
        echo "      
      ";
        // line 57
        if (($this->env->getExtension('security')->isGranted("ROLE_TECNO_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_TECNO_CORRESPONSALIA"))) {
            // line 58
            echo "      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">TECNOLOGIA <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("tecnocategoria");
            echo "\">Categoria</a></li>
          <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("tecnobitacora");
            echo "\">Bitacora</a></li>
          <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("tecnoequipo");
            echo "\">Equipo</a></li>
          <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("tecnomarca");
            echo "\">Marca</a></li>
          <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("tecnomodelo");
            echo "\">Modelo</a></li>
        </ul>
      </li>
      ";
        }
        // line 69
        echo "      ";
        // line 76
        echo "      
      ";
        // line 93
        echo "    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("usuario_logout");
        echo "\">SALIR</a></li>
      
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Includes:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 95,  154 => 65,  146 => 63,  142 => 62,  133 => 58,  128 => 56,  116 => 49,  114 => 48,  111 => 47,  103 => 42,  99 => 41,  87 => 38,  82 => 35,  80 => 34,  77 => 33,  66 => 28,  61 => 26,  57 => 25,  52 => 23,  48 => 22,  41 => 18,  19 => 1,  212 => 58,  207 => 34,  202 => 46,  193 => 43,  190 => 42,  186 => 41,  183 => 40,  174 => 37,  171 => 36,  166 => 93,  164 => 34,  161 => 69,  158 => 32,  150 => 64,  144 => 28,  138 => 61,  134 => 19,  130 => 18,  126 => 17,  120 => 15,  97 => 7,  94 => 6,  88 => 5,  83 => 59,  81 => 58,  69 => 48,  67 => 31,  62 => 29,  58 => 28,  54 => 27,  47 => 22,  45 => 14,  42 => 13,  36 => 5,  32 => 4,  27 => 1,  255 => 128,  200 => 76,  195 => 73,  187 => 70,  184 => 69,  178 => 67,  175 => 66,  169 => 64,  163 => 76,  160 => 61,  157 => 60,  155 => 31,  151 => 58,  147 => 57,  140 => 55,  137 => 54,  131 => 57,  129 => 51,  125 => 49,  121 => 52,  117 => 14,  115 => 44,  110 => 10,  106 => 9,  102 => 8,  98 => 39,  95 => 40,  91 => 39,  73 => 22,  70 => 29,  64 => 17,  59 => 16,  56 => 15,  50 => 12,  40 => 6,  37 => 5,  31 => 11,);
    }
}
