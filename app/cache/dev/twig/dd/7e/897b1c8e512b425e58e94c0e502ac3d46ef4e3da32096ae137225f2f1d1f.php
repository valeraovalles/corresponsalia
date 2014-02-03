<?php

/* UsuarioBundle:Default:includes/menu.html.twig */
class __TwigTemplate_dd7e897b1c8e512b425e58e94c0e502ac3d46ef4e3da32096ae137225f2f1d1f extends Twig_Template
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
        echo "<div id='cssmenu'>
<ul>
   <li class='active'><a href='";
        // line 3
        echo $this->env->getExtension('routing')->getPath("usuario_homepage");
        echo "'><span>INICIO</span></a></li>
   ";
        // line 4
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            // line 5
            echo "   <li class='has-sub'><a href='#'><span>ADMINISTRACION</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>USUARIOS</span></a>
            <ul>
               <li><a href='";
            // line 9
            echo $this->env->getExtension('routing')->getPath("user");
            echo "'><span>LISTADO</span></a></li>
               <li><a href='";
            // line 10
            echo $this->env->getExtension('routing')->getPath("user_new");
            echo "'><span>NUEVO</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>ROL</span></a>
            <ul>
               <li><a href='";
            // line 15
            echo $this->env->getExtension('routing')->getPath("rol");
            echo "'><span>LISTADO</span></a></li>
               <li><a href='";
            // line 16
            echo $this->env->getExtension('routing')->getPath("rol_new");
            echo "'><span>NUEVO</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   ";
        }
        // line 22
        echo "   <li><a href='";
        echo $this->env->getExtension('routing')->getPath("usuario_logout");
        echo "'><span>SALIR</span></a></li>
   <li class='last'><a href='";
        // line 23
        echo $this->env->getExtension('routing')->getPath("contacto");
        echo "'><span>CONTACTO</span></a></li>
</ul>
</div>



";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:includes/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  60 => 22,  51 => 16,  35 => 9,  29 => 5,  27 => 4,  23 => 3,  19 => 1,  31 => 4,  28 => 3,  141 => 55,  134 => 50,  123 => 45,  119 => 44,  115 => 42,  111 => 40,  107 => 38,  105 => 37,  100 => 35,  94 => 34,  88 => 33,  82 => 32,  78 => 31,  75 => 30,  71 => 29,  50 => 11,  47 => 15,  44 => 9,  39 => 10,  36 => 5,  30 => 3,);
    }
}
