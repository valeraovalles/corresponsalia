<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_082017ac73ecdd0aa4609a468c910e1b6b819f6fdcda997f535c5c3fd625c30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 220,  487 => 219,  482 => 217,  478 => 216,  470 => 214,  465 => 213,  463 => 212,  459 => 211,  455 => 210,  451 => 209,  447 => 208,  442 => 206,  433 => 199,  425 => 194,  421 => 193,  396 => 170,  357 => 135,  349 => 132,  346 => 131,  344 => 130,  333 => 126,  330 => 125,  328 => 124,  325 => 123,  317 => 120,  304 => 115,  300 => 113,  291 => 109,  289 => 108,  279 => 103,  276 => 102,  274 => 101,  261 => 94,  257 => 92,  249 => 89,  232 => 82,  233 => 127,  228 => 125,  215 => 118,  267 => 149,  260 => 145,  253 => 141,  223 => 126,  210 => 119,  197 => 93,  181 => 109,  256 => 112,  248 => 110,  244 => 87,  239 => 133,  236 => 84,  225 => 103,  255 => 128,  195 => 73,  213 => 100,  185 => 111,  165 => 97,  23 => 3,  194 => 92,  191 => 66,  180 => 103,  172 => 59,  160 => 63,  153 => 59,  178 => 75,  76 => 17,  84 => 29,  129 => 46,  65 => 23,  170 => 58,  146 => 55,  70 => 28,  205 => 72,  200 => 76,  192 => 84,  175 => 60,  148 => 47,  124 => 38,  118 => 39,  114 => 35,  231 => 89,  222 => 122,  216 => 76,  206 => 96,  188 => 65,  184 => 87,  167 => 57,  127 => 28,  104 => 36,  100 => 35,  152 => 71,  113 => 35,  90 => 32,  77 => 23,  212 => 58,  207 => 34,  202 => 95,  190 => 87,  186 => 64,  174 => 106,  161 => 70,  155 => 59,  150 => 62,  134 => 49,  126 => 50,  110 => 22,  97 => 41,  81 => 31,  58 => 17,  137 => 43,  53 => 11,  480 => 162,  474 => 215,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 197,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 157,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 129,  337 => 103,  322 => 101,  314 => 119,  312 => 118,  309 => 97,  305 => 95,  298 => 91,  294 => 110,  285 => 106,  283 => 88,  278 => 154,  268 => 98,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 84,  169 => 64,  140 => 44,  132 => 41,  128 => 50,  107 => 48,  61 => 12,  273 => 152,  269 => 94,  254 => 92,  243 => 134,  240 => 86,  238 => 85,  235 => 132,  230 => 103,  227 => 127,  224 => 79,  221 => 78,  219 => 77,  217 => 101,  208 => 73,  204 => 72,  179 => 108,  159 => 54,  143 => 67,  135 => 62,  119 => 36,  102 => 17,  71 => 22,  67 => 17,  63 => 19,  59 => 13,  28 => 3,  38 => 6,  87 => 25,  21 => 2,  201 => 110,  196 => 90,  183 => 63,  171 => 69,  166 => 72,  163 => 76,  158 => 79,  156 => 53,  151 => 51,  142 => 88,  138 => 51,  136 => 45,  121 => 37,  117 => 19,  105 => 18,  91 => 38,  62 => 22,  49 => 13,  31 => 4,  26 => 9,  25 => 35,  94 => 34,  89 => 37,  85 => 32,  75 => 21,  68 => 23,  56 => 11,  24 => 2,  19 => 1,  93 => 27,  88 => 31,  78 => 26,  46 => 11,  44 => 9,  27 => 4,  79 => 21,  72 => 24,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 88,  157 => 60,  145 => 55,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 23,  108 => 19,  101 => 43,  98 => 27,  96 => 34,  83 => 28,  74 => 27,  66 => 27,  55 => 20,  52 => 14,  50 => 11,  43 => 11,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 71,  199 => 69,  193 => 113,  189 => 112,  187 => 81,  182 => 86,  176 => 102,  173 => 65,  168 => 67,  164 => 66,  162 => 63,  154 => 52,  149 => 56,  147 => 57,  144 => 54,  141 => 54,  133 => 56,  130 => 54,  125 => 45,  122 => 49,  116 => 35,  112 => 30,  109 => 40,  106 => 45,  103 => 30,  99 => 43,  95 => 30,  92 => 30,  86 => 23,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 16,  51 => 16,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
