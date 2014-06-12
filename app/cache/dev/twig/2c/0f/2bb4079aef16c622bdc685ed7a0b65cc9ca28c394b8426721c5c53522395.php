<?php

/* CorresponsaliaBundle:Default:inicio.html.twig */
class __TwigTemplate_2c0f2bb4079aef16c622bdc685ed7a0b65cc9ca28c394b8426721c5c53522395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titulobanner' => array($this, 'block_titulobanner'),
            'titulomodulo' => array($this, 'block_titulomodulo'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "CORRESPONSALÍA - INICIO";
    }

    // line 6
    public function block_titulobanner($context, array $blocks = array())
    {
        // line 7
        echo "    INICIO
";
    }

    // line 10
    public function block_titulomodulo($context, array $blocks = array())
    {
        echo "  
    <h2>BIENVENIDO ";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "primerNombre")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "primerApellido")), "html", null, true);
        echo "</h2>
";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyDaX5WySgrnP70Br7a83wkzFJb7d6onGis&sensor=true&language=es\">
    </script>

    <script type=\"text/javascript\">
      function initialize() {

        var myLatlng = new google.maps.LatLng(19.311143,-3.515625);
        var mapOptions = {
          zoom: 2,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
        }

                var mapOptions2 = {
          zoom: 2,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
        }

        var map = new google.maps.Map(document.getElementById(\"map_canvas\"), mapOptions);

        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cor"]) ? $context["cor"] : $this->getContext($context, "cor")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["corpa"]) {
            // line 39
            echo "            
            ";
            // line 40
            ob_start();
            // line 41
            echo "                <table>
                    <tr>
                        <th>Corresponsalía: </th>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["corpa"]) ? $context["corpa"] : $this->getContext($context, "corpa")), "nombre"), "html", null, true);
            echo "</td>
                    </tr>
                </table>
            ";
            $context["datos"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 48
            echo "
            var contentString";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo " = '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "js"), "html", null, true);
            echo "';

            var infowindow";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo " = new google.maps.InfoWindow({content: contentString";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "});

            var image = 'http://www.telesurtv.net/favicon.ico';

            var marker";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo " = new google.maps.Marker({position: new google.maps.LatLng(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["corpa"]) ? $context["corpa"] : $this->getContext($context, "corpa")), "latitud"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["corpa"]) ? $context["corpa"] : $this->getContext($context, "corpa")), "longitud"), "html", null, true);
            echo "),title:\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["corpa"]) ? $context["corpa"] : $this->getContext($context, "corpa")), "pais"), "html", null, true);
            echo "\", icon:image});

            google.maps.event.addListener(marker";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo ",'click', function() {infowindow";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo ".open(map,marker";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo ");});
            marker";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo ".setMap(map);

            
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['corpa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

        }

  </script>
";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <br>
    <div id=\"map_canvas\" style=\"width:1000px; height:500px\"></div>

    <script>
      \$(document).ready(function() {
        initialize()
      });
    </script>

    <br><br>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 70,  188 => 69,  179 => 62,  161 => 58,  153 => 57,  142 => 55,  133 => 51,  126 => 49,  123 => 48,  116 => 44,  111 => 41,  109 => 40,  106 => 39,  89 => 38,  62 => 15,  59 => 14,  51 => 11,  46 => 10,  41 => 7,  38 => 6,  32 => 4,);
    }
}
