<?php

/* CorresponsaliaBundle:Includes:menu.html.twig */
class __TwigTemplate_b4172b54a9e0f53fe602047e399bd0bd7f65c1eaea2977c4e19feaae3327fb7e extends Twig_Template
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
        // line 33
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
            // line 34
            echo "      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">ADMINISTRAR <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("tipomoneda");
            echo "\">Tipo de Moneda</a></li>
          <li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("tipocorresponsalia");
            echo "\">Tipo de Corresponsalía</a></li>
          <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("corresponsalia");
            echo "\">Corresponsalia</a></li>
          <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("periodorendicion");
            echo "\">Asignar fondo</a></li>
          <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("revision_periodorendicion");
            echo "\">Revisión de rendiciones</a></li>
          <li class=\"divider\"></li>
        </ul>
      </li>
      ";
        }
        // line 46
        echo "      
      ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_CORRESPONSALIA")) {
            // line 48
            echo "      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">RENDICIÓN <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("corresponsalia_tasacambio");
            echo "\">Tasa de cambio</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("periodorendicion");
            echo "\">Rendir gastos</a></li>
        </ul>
      </li>
      ";
        }
        // line 57
        echo "      
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">REPORTES <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("corresponsalia_tasacambio");
        echo "\">Tasa de cambio</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">Rendir gastos</a></li>
        </ul>
      </li>
      
      ";
        // line 83
        echo "    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"";
        // line 85
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
        return array (  138 => 63,  133 => 61,  127 => 57,  120 => 53,  110 => 48,  105 => 46,  89 => 39,  85 => 38,  81 => 37,  76 => 34,  74 => 33,  67 => 29,  63 => 28,  58 => 26,  54 => 25,  49 => 23,  45 => 22,  19 => 1,  203 => 34,  198 => 46,  189 => 43,  179 => 40,  170 => 37,  167 => 36,  162 => 35,  160 => 34,  157 => 33,  154 => 32,  151 => 31,  146 => 29,  140 => 28,  134 => 20,  130 => 19,  126 => 18,  116 => 15,  113 => 14,  106 => 10,  102 => 9,  98 => 8,  93 => 40,  84 => 5,  61 => 29,  57 => 28,  44 => 14,  41 => 13,  39 => 6,  31 => 11,  26 => 1,  194 => 82,  190 => 81,  186 => 42,  182 => 41,  178 => 77,  175 => 75,  172 => 74,  166 => 72,  164 => 71,  159 => 69,  155 => 67,  149 => 85,  145 => 83,  143 => 61,  136 => 59,  129 => 55,  122 => 17,  115 => 51,  108 => 47,  97 => 41,  90 => 6,  83 => 31,  78 => 28,  72 => 25,  68 => 48,  66 => 31,  60 => 19,  53 => 27,  46 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
