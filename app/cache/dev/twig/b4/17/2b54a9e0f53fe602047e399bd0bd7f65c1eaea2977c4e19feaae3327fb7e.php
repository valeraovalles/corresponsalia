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
        
      ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_RENDICION_ADMIN")) {
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
        // line 64
        echo "      
      ";
        // line 81
        echo "    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"";
        // line 83
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
        return array (  138 => 83,  134 => 81,  131 => 64,  128 => 56,  121 => 52,  116 => 49,  114 => 48,  111 => 47,  103 => 42,  99 => 41,  95 => 40,  91 => 39,  87 => 38,  82 => 35,  80 => 34,  77 => 33,  70 => 29,  66 => 28,  61 => 26,  57 => 25,  52 => 23,  48 => 22,  41 => 18,  31 => 11,  19 => 1,);
    }
}
