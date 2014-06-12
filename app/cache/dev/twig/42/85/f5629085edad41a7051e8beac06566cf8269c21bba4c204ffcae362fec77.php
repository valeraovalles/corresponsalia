<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_4285f5629085edad41a7051e8beac06566cf8269c21bba4c204ffcae362fec77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 220,  487 => 219,  482 => 217,  478 => 216,  470 => 214,  465 => 213,  463 => 212,  459 => 211,  455 => 210,  451 => 209,  447 => 208,  442 => 206,  433 => 199,  425 => 194,  421 => 193,  396 => 170,  357 => 135,  349 => 132,  346 => 131,  344 => 130,  333 => 126,  330 => 125,  328 => 124,  325 => 123,  317 => 120,  304 => 115,  300 => 113,  291 => 109,  289 => 108,  279 => 103,  276 => 102,  274 => 101,  261 => 94,  257 => 92,  249 => 89,  232 => 82,  233 => 127,  228 => 125,  215 => 118,  267 => 149,  260 => 145,  253 => 141,  223 => 126,  210 => 119,  197 => 93,  181 => 109,  256 => 112,  248 => 110,  244 => 87,  239 => 133,  236 => 84,  225 => 103,  255 => 128,  195 => 73,  213 => 100,  185 => 111,  165 => 97,  23 => 3,  194 => 92,  191 => 66,  180 => 103,  172 => 59,  160 => 63,  153 => 59,  178 => 75,  76 => 28,  84 => 27,  129 => 46,  65 => 23,  170 => 58,  146 => 55,  70 => 28,  205 => 72,  200 => 76,  192 => 84,  175 => 60,  148 => 47,  124 => 38,  118 => 39,  114 => 35,  231 => 89,  222 => 122,  216 => 76,  206 => 96,  188 => 65,  184 => 87,  167 => 57,  127 => 60,  104 => 36,  100 => 35,  152 => 71,  113 => 35,  90 => 31,  77 => 23,  212 => 58,  207 => 34,  202 => 95,  190 => 87,  186 => 64,  174 => 106,  161 => 70,  155 => 59,  150 => 62,  134 => 49,  126 => 50,  110 => 39,  97 => 41,  81 => 31,  58 => 17,  137 => 43,  53 => 15,  480 => 162,  474 => 215,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 197,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 157,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 129,  337 => 103,  322 => 101,  314 => 119,  312 => 118,  309 => 97,  305 => 95,  298 => 91,  294 => 110,  285 => 106,  283 => 88,  278 => 154,  268 => 98,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 84,  169 => 64,  140 => 44,  132 => 41,  128 => 50,  107 => 48,  61 => 21,  273 => 152,  269 => 94,  254 => 92,  243 => 134,  240 => 86,  238 => 85,  235 => 132,  230 => 103,  227 => 127,  224 => 79,  221 => 78,  219 => 77,  217 => 101,  208 => 73,  204 => 72,  179 => 108,  159 => 54,  143 => 67,  135 => 62,  119 => 36,  102 => 34,  71 => 22,  67 => 17,  63 => 19,  59 => 16,  28 => 2,  38 => 5,  87 => 25,  21 => 2,  201 => 110,  196 => 90,  183 => 63,  171 => 69,  166 => 72,  163 => 76,  158 => 79,  156 => 53,  151 => 51,  142 => 88,  138 => 51,  136 => 45,  121 => 37,  117 => 25,  105 => 21,  91 => 38,  62 => 22,  49 => 11,  31 => 3,  26 => 6,  25 => 5,  94 => 31,  89 => 37,  85 => 32,  75 => 21,  68 => 23,  56 => 14,  24 => 2,  19 => 1,  93 => 27,  88 => 32,  78 => 29,  46 => 11,  44 => 9,  27 => 4,  79 => 21,  72 => 24,  69 => 25,  47 => 15,  40 => 6,  37 => 5,  22 => 2,  246 => 88,  157 => 60,  145 => 55,  139 => 63,  131 => 61,  123 => 59,  120 => 38,  115 => 43,  111 => 23,  108 => 22,  101 => 43,  98 => 27,  96 => 34,  83 => 28,  74 => 27,  66 => 27,  55 => 20,  52 => 17,  50 => 11,  43 => 8,  41 => 8,  35 => 9,  32 => 4,  29 => 5,  209 => 95,  203 => 71,  199 => 69,  193 => 113,  189 => 112,  187 => 81,  182 => 86,  176 => 102,  173 => 65,  168 => 67,  164 => 66,  162 => 63,  154 => 52,  149 => 56,  147 => 57,  144 => 54,  141 => 54,  133 => 56,  130 => 54,  125 => 45,  122 => 49,  116 => 35,  112 => 30,  109 => 40,  106 => 45,  103 => 30,  99 => 43,  95 => 30,  92 => 30,  86 => 23,  82 => 32,  80 => 30,  73 => 29,  64 => 19,  60 => 22,  57 => 18,  54 => 16,  51 => 16,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
