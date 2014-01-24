<?php

/* CorresponsaliaBundle:Estadofondo:estadofondoaniomes.html.twig */
class __TwigTemplate_a025e3d5c1f50cb8f9789cb32b33662210fffaf6b446803a3864f40604a09fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <h1>SELECCIONE UNA FECHA DE ASIGNACIÓN</h1>
    
    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
          <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\" id=\"myModalLabel\">!Alerta¡</h4>
          </div>
          <div class=\"modal-body\">
            Debe seleccionar un año, un mes y una corresponsalía.
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <form id=\"form\" method=\"post\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("estadofondo_new");
        echo "\">
        <div style=\"width: 30%\">
            <br><div>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "anio"), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div><br>
            <div>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mes"), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div><br>
            <div>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "corresponsalia"), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        </div>
    </form>
    
    <br><a id=\"siguiente\" class=\"btn btn-primary btn-lg\">SIGUIENTE</a><br>
    
    <script>
        
        
        \$(document).ready(function () {
            
            \$('#siguiente').click(function(){
                if(\$('#form_anio').val()=='' || \$('#form_mes').val()=='' || \$('#form_corresponsalia').val()=='')
                   \$('#myModal').modal(\"show\")
                else
                   \$(\"#form\").submit();
            });
        });
    </script>
    

";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Estadofondo:estadofondoaniomes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 30,  65 => 29,  61 => 28,  56 => 26,  31 => 4,  28 => 3,);
    }
}
