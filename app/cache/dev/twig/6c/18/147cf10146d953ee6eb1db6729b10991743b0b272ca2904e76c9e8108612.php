<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_6c18147cf10146d953ee6eb1db6729b10991743b0b272ca2904e76c9e8108612 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  350 => 327,  308 => 287,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 286,  297 => 104,  263 => 95,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 339,  363 => 126,  358 => 151,  353 => 328,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  321 => 112,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  281 => 114,  265 => 96,  259 => 103,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  286 => 112,  275 => 105,  270 => 102,  262 => 98,  226 => 84,  34 => 5,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  490 => 220,  487 => 219,  482 => 217,  478 => 216,  470 => 214,  465 => 213,  463 => 212,  459 => 211,  455 => 210,  451 => 209,  447 => 208,  442 => 206,  433 => 199,  425 => 194,  421 => 193,  396 => 170,  357 => 123,  349 => 132,  346 => 131,  344 => 119,  333 => 126,  330 => 125,  328 => 139,  325 => 129,  317 => 120,  304 => 115,  300 => 105,  291 => 102,  289 => 113,  279 => 103,  276 => 111,  274 => 97,  261 => 94,  257 => 92,  249 => 89,  232 => 88,  233 => 87,  228 => 125,  215 => 118,  267 => 101,  260 => 145,  253 => 100,  223 => 126,  210 => 77,  197 => 69,  181 => 65,  256 => 96,  248 => 97,  244 => 87,  239 => 133,  236 => 84,  225 => 103,  255 => 93,  195 => 73,  213 => 78,  185 => 74,  165 => 60,  23 => 3,  194 => 68,  191 => 67,  180 => 103,  172 => 57,  160 => 63,  153 => 56,  178 => 59,  76 => 27,  84 => 27,  129 => 46,  65 => 22,  170 => 56,  146 => 55,  70 => 26,  205 => 72,  200 => 72,  192 => 84,  175 => 58,  148 => 47,  124 => 38,  118 => 49,  114 => 35,  231 => 83,  222 => 83,  216 => 79,  206 => 96,  188 => 90,  184 => 63,  167 => 57,  127 => 35,  104 => 37,  100 => 36,  152 => 46,  113 => 40,  90 => 37,  77 => 25,  212 => 78,  207 => 75,  202 => 77,  190 => 76,  186 => 64,  174 => 65,  161 => 63,  155 => 47,  150 => 55,  134 => 39,  126 => 50,  110 => 22,  97 => 41,  81 => 23,  58 => 18,  137 => 43,  53 => 17,  480 => 162,  474 => 215,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 197,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 157,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 118,  337 => 103,  322 => 101,  314 => 119,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 110,  285 => 106,  283 => 100,  278 => 98,  268 => 98,  264 => 84,  258 => 94,  252 => 111,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 84,  169 => 64,  140 => 58,  132 => 41,  128 => 50,  107 => 48,  61 => 23,  273 => 152,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 103,  227 => 86,  224 => 81,  221 => 78,  219 => 77,  217 => 101,  208 => 76,  204 => 72,  179 => 108,  159 => 54,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 22,  28 => 6,  38 => 12,  87 => 33,  21 => 2,  201 => 110,  196 => 92,  183 => 63,  171 => 69,  166 => 54,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 88,  138 => 51,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 11,  31 => 8,  26 => 3,  25 => 35,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  24 => 2,  19 => 1,  93 => 38,  88 => 25,  78 => 18,  46 => 14,  44 => 11,  27 => 7,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 6,  22 => 2,  246 => 96,  157 => 60,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 9,  41 => 8,  35 => 5,  32 => 6,  29 => 3,  209 => 95,  203 => 73,  199 => 93,  193 => 113,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 66,  162 => 59,  154 => 60,  149 => 56,  147 => 43,  144 => 42,  141 => 51,  133 => 56,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 30,  99 => 23,  95 => 34,  92 => 28,  86 => 23,  82 => 19,  80 => 29,  73 => 23,  64 => 21,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 12,  39 => 10,  36 => 9,  33 => 9,  30 => 7,);
    }
}
