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
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">ADMINISTRAR <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("tipomoneda");
        echo "\">Moneda</a></li>
          <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("corresponsalia");
        echo "\">Corresponsalia</a></li>
          <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tipocorresponsalia");
        echo "\">Tipo Corresponsalía</a></li>
          <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("estadofondo");
        echo "\">Estado fondo</a></li>
          <li><a href=\"#\">Something else here</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"#\">Separated link</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"#\">One more separated link</a></li>
        </ul>
      </li>
      <li><a href=\"#\">ADMINISTRAR</a></li>
    </ul>
    <form class=\"navbar-form navbar-left\" role=\"search\">
      <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
      </div>
      <button type=\"submit\" class=\"btn btn-default\">Submit</button>
    </form>
    <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"#\">SALIR</a></li>
      
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
        return array (  55 => 23,  51 => 22,  47 => 21,  43 => 20,  31 => 11,  19 => 1,);
    }
}
