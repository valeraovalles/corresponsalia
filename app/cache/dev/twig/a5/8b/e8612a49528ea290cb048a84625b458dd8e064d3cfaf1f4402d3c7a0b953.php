<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_a58be8612a49528ea290cb048a84625b458dd8e064d3cfaf1f4402d3c7a0b953 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  46 => 14,  30 => 5,  26 => 3,  24 => 2,  170 => 95,  154 => 65,  146 => 63,  142 => 62,  133 => 58,  128 => 56,  116 => 49,  114 => 48,  111 => 47,  103 => 42,  99 => 41,  87 => 38,  82 => 35,  80 => 34,  77 => 33,  66 => 25,  61 => 26,  57 => 25,  52 => 23,  48 => 22,  41 => 18,  19 => 1,  212 => 58,  207 => 34,  202 => 46,  193 => 43,  190 => 42,  186 => 41,  183 => 40,  174 => 37,  171 => 36,  166 => 93,  164 => 34,  161 => 69,  158 => 32,  150 => 64,  144 => 28,  138 => 61,  134 => 19,  130 => 18,  126 => 17,  120 => 15,  97 => 7,  94 => 6,  88 => 5,  83 => 30,  81 => 58,  69 => 48,  67 => 31,  62 => 24,  58 => 28,  54 => 27,  47 => 22,  45 => 14,  42 => 12,  36 => 5,  32 => 6,  27 => 1,  255 => 128,  200 => 76,  195 => 73,  187 => 70,  184 => 69,  178 => 67,  175 => 66,  169 => 64,  163 => 76,  160 => 61,  157 => 60,  155 => 31,  151 => 58,  147 => 57,  140 => 55,  137 => 54,  131 => 57,  129 => 51,  125 => 49,  121 => 52,  117 => 14,  115 => 44,  110 => 10,  106 => 9,  102 => 8,  98 => 39,  95 => 40,  91 => 35,  73 => 22,  70 => 26,  64 => 17,  59 => 16,  56 => 15,  50 => 15,  40 => 6,  37 => 5,  31 => 11,);
    }
}
