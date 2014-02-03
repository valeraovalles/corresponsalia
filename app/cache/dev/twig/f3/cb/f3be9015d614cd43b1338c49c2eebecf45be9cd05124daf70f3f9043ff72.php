<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_f3cbf3be9015d614cd43b1338c49c2eebecf45be9cd05124daf70f3f9043ff72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::login.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulobanner' => array($this, 'block_titulobanner'),
            'body' => array($this, 'block_body'),
            'mensaje' => array($this, 'block_mensaje'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "FORMULARIO DE ACCESO";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    FORMULARIO DE ACCESO
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <script type=\"text/javascript\">
        if(navigator.appVersion.indexOf(\"MSIE 7.\")!=-1){

        alert(\"Esta aplicación no funciona correctamente en internet explorer, por favor cambie a Chrome o Firefox.\");

        \$(\"#botonsubmit\").css(\"display\", \"none\");
    }
    </script>

    <p class=\"text-info\"><marquee scrollamount=\"3\">SE RECOMIENDA EL USO DE CHROME O FIREFOX</marquee></p>
    
    ";
        // line 21
        $this->displayBlock('mensaje', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "        <div class=\"alert alert-success\">
            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    

    <h3>BIENVENIDOS</h3>
    

      <form class=\"form-signin\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
        <h4 class=\"form-signin-heading\">INGRESE SUS DATOS</h4>
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"input-block-level\"placeholder=\"Ingrese usuario...\" data-placement=\"right\" data-content=\"Puede ingresar el mismo usuario y clave de su correo Zimbra. Ante cualquier inconveniente comunicarse con la extensión 264/339.\" title=\"USUARIO\">
        <input type=\"password\" name=\"_password\" class=\"input-block-level\" placeholder=\"Ingrese clave...\">
        <button class=\"btn btn-large btn-primary\" type=\"submit\" id=\"botonsubmit\">Ingresar</button>
      </form>

    <br>

    <script>\$('#username').popover();</script>

";
    }

    // line 21
    public function block_mensaje($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        if ($this->getContext($context, "error")) {
            // line 23
            echo "            <div class=\"alert alert-warning\" style=\"text-align: center;\"><strong>Alerta!</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "message")), "html", null, true);
            echo "</div>
        ";
        }
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  111 => 23,  108 => 22,  105 => 21,  89 => 37,  82 => 32,  73 => 29,  70 => 28,  66 => 27,  63 => 26,  61 => 21,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
