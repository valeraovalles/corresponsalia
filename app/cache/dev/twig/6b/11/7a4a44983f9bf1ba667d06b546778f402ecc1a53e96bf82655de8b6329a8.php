<?php

/* CorresponsaliaBundle:Default:revisionrendicion.html.twig */
class __TwigTemplate_6b117a4a44983f9bf1ba667d06b546778f402ecc1a53e96bf82655de8b6329a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulobanner' => array($this, 'block_titulobanner'),
            'titulomodulo' => array($this, 'block_titulomodulo'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "CORRESPONSALÍA - REVISIÓN RENDICIÓN";
    }

    // line 5
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 6
        echo "    REVISIÓN RENDICIÓN
";
    }

    // line 9
    public function block_titulomodulo($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>REVISIÓN DE RENDICIÓN</h1><h4>CORRESPONSALÍA: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "periodo"), "corresponsalia"), "nombre")), "html", null, true);
        echo " | AÑO: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "anio"), "html", null, true);
        echo " | MES: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periodo"), "mes"), "html", null, true);
        echo "</h4>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <br><div style=\"width: 99%;\">";
        // line 16
        $this->env->loadTemplate("CorresponsaliaBundle:Default:_estatusfondo.html.twig")->display($context);
        echo "</div>
    
    <form method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_guardarevisionrendicion", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"))), "html", null, true);
        echo "\">
        <table id=\"tablalista1\" style=\"width: 99%;\">
            <thead>
                <tr>
                    <th>Nro Comp.</th>
                    <th>F. Factura</th>
                    <th>Imputación</th>
                    <th>Descripcion</th>
                    <th>Nombre/Razón</th>
                    <th>I. Fiscal</th>
                    <th>Dólares.</th>
                    <th>Monto MN.</th>
                    <th>Acc.</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "rendicionlista"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "                    <tr ";
            if (($this->getAttribute($this->getContext($context, "entity"), "aprobada") == false)) {
                echo " style=\"background-color: yellow;\"";
            }
            echo ">
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerocomprobante"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechafactura"), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "imputacionpresupuestaria"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "descripciongasto"), "descripcion"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "identificacionfiscal"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numerofactura"), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montodolar"), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "montomonnac"), "html", null, true);
            echo "</td>
                        <td><input value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\" name=\"rendiciones[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "]\" type=\"checkbox\" ";
            if (($this->getAttribute($this->getContext($context, "entity"), "aprobada") == false)) {
                echo "checked=\"checked\"";
            }
            echo "></td>
                    </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
            </tbody>
        </table> 
        <br><br><br><br>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"GUARDAR RENDICIONES PARA CORRECCIÓN\">
    </form>
    
    <div style=\"width: 420px;\">
        <div style=\"float: left;\">
            <form novalidate method=\"post\" action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_estatusrendicion", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"), "estatus" => 3)), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Está seguro que desea devolver esta rendición para su corrección? Recuerde actualizar las rediciones que se deben corregir antes de devolver la rendición!!')\">  
               <input type=\"submit\" value=\"DEVOLVER PARA CORRECIÓN\" class=\"btn btn-danger\">
            </form> 
        </div>

        <div>
            <form novalidate method=\"post\" action=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("corresponsalia_estatusrendicion", array("idperiodo" => $this->getAttribute($this->getContext($context, "periodo"), "id"), "estatus" => 4)), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Está seguro que desea cerrar esta rendición? Recuerde que no se podrá realizar ningun cambio y todos las rendiciones que no están aprobadas se aprobarán!!')\">  
               <input type=\"submit\" value=\"CERRAR CRENDICIÓN\" class=\"btn btn-success\">
            </form> 
        </div>
    </div>
    
    <br>
    <script>    
      \$(document).ready(function(){
         \$('#tablalista1').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
              \"sPaginationType\": \"full_numbers\", //DAMOS FORMATO A LA PAGINACION(NUMEROS)
              \"aaSorting\": [[0,'desc']],
          } );
      })
   </script>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:revisionrendicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 62,  161 => 56,  150 => 47,  135 => 44,  131 => 43,  127 => 42,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  96 => 35,  92 => 34,  73 => 18,  68 => 16,  62 => 14,  59 => 13,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
