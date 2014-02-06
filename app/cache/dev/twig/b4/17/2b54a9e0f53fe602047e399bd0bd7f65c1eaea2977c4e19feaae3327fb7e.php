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
        echo "\">Inicio</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
    <ul class=\"nav navbar-nav\">
        
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">USUARIOS<b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Listado de usuarios</a></li>
          <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Nuevo usuario</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("rol");
        echo "\">Listado de roles</a></li>
          <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("rol_new");
        echo "\">Nuevo rol</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("usercorresponsalia");
        echo "\">Listado Usuario-Corresponsalía</a></li>
          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("usercorresponsalia_new");
        echo "\">Nueva relación usuario-Corresponsalía</a></li>
        </ul>
      </li>
      
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">ADMINISTRAR <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("tipomoneda");
        echo "\">Tipo de Moneda</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("tipocorresponsalia");
        echo "\">Tipo de Corresponsalía</a></li>
          <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("corresponsalia");
        echo "\">Corresponsalia</a></li>
          <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">Asignar fondo</a></li>
          <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("revision_periodorendicion");
        echo "\">Revisión de rendiciones</a></li>
          <li class=\"divider\"></li>
        </ul>
      </li>
      
    
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">RENDICIÓN <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("corresponsalia_tasacambio");
        echo "\">Tasa de cambio</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">Rendir gastos</a></li>
        </ul>
      </li>
      
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">TECNOLOGÍA <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("corresponsalia_tasacambio");
        echo "\">Tasa de cambio</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("periodorendicion");
        echo "\">Rendir gastos</a></li>
        </ul>
      </li>
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">CONSULTORÍA <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("corresponsalia_tasacambio");
        echo "\">Rendicion</a></li>
        </ul>
      </li>
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"";
        // line 70
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
        return array (  141 => 70,  133 => 65,  124 => 59,  119 => 57,  109 => 50,  104 => 48,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  76 => 35,  66 => 28,  62 => 27,  57 => 25,  53 => 24,  48 => 22,  44 => 21,  31 => 11,  19 => 1,);
    }
}
