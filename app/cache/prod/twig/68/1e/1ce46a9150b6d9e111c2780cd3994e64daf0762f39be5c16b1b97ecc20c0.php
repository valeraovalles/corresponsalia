<?php

/* CorresponsaliaBundle:Default:inicio.html.twig */
class __TwigTemplate_681e1ce46a9150b6d9e111c2780cd3994e64daf0762f39be5c16b1b97ecc20c0 extends Twig_Template
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
        if (isset($context["usuario"])) { $_usuario_ = $context["usuario"]; } else { $_usuario_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_usuario_, "primerNombre")), "html", null, true);
        echo " ";
        if (isset($context["usuario"])) { $_usuario_ = $context["usuario"]; } else { $_usuario_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_usuario_, "primerApellido")), "html", null, true);
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
        if (isset($context["cor"])) { $_cor_ = $context["cor"]; } else { $_cor_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_cor_);
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
            if (isset($context["corpa"])) { $_corpa_ = $context["corpa"]; } else { $_corpa_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_corpa_, "nombre"), "html", null, true);
            echo "</td>
                    </tr>
                </table>
            ";
            $context["datos"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 48
            echo "
            var contentString";
            // line 49
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo " = '";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_datos_, "js"), "html", null, true);
            echo "';

            var infowindow";
            // line 51
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo " = new google.maps.InfoWindow({content: contentString";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "});

            var image = 'http://www.telesurtv.net/favicon.ico';

            var marker";
            // line 55
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo " = new google.maps.Marker({position: new google.maps.LatLng(";
            if (isset($context["corpa"])) { $_corpa_ = $context["corpa"]; } else { $_corpa_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_corpa_, "latitud"), "html", null, true);
            echo ", ";
            if (isset($context["corpa"])) { $_corpa_ = $context["corpa"]; } else { $_corpa_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_corpa_, "longitud"), "html", null, true);
            echo "),title:\"";
            if (isset($context["corpa"])) { $_corpa_ = $context["corpa"]; } else { $_corpa_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_corpa_, "pais"), "html", null, true);
            echo "\", icon:image});

            google.maps.event.addListener(marker";
            // line 57
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo ",'click', function() {infowindow";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo ".open(map,marker";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo ");});
            marker";
            // line 58
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
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
        return array (  207 => 70,  204 => 69,  195 => 62,  176 => 58,  165 => 57,  150 => 55,  139 => 51,  130 => 49,  127 => 48,  119 => 44,  114 => 41,  112 => 40,  109 => 39,  91 => 38,  64 => 15,  61 => 14,  51 => 11,  46 => 10,  41 => 7,  38 => 6,  32 => 4,);
    }
}
