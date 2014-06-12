<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_1df12d1e3ae1365078b2374f9599c64b19f9e6856125e612bd92486fdc40666e extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  286 => 112,  275 => 105,  270 => 102,  262 => 98,  226 => 84,  34 => 5,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  490 => 220,  487 => 219,  482 => 217,  478 => 216,  470 => 214,  465 => 213,  463 => 212,  459 => 211,  455 => 210,  451 => 209,  447 => 208,  442 => 206,  433 => 199,  425 => 194,  421 => 193,  396 => 170,  357 => 135,  349 => 132,  346 => 131,  344 => 130,  333 => 126,  330 => 125,  328 => 124,  325 => 129,  317 => 120,  304 => 115,  300 => 121,  291 => 109,  289 => 113,  279 => 103,  276 => 102,  274 => 101,  261 => 94,  257 => 92,  249 => 89,  232 => 82,  233 => 87,  228 => 125,  215 => 118,  267 => 101,  260 => 145,  253 => 141,  223 => 126,  210 => 119,  197 => 71,  181 => 65,  256 => 96,  248 => 94,  244 => 87,  239 => 133,  236 => 84,  225 => 103,  255 => 128,  195 => 73,  213 => 78,  185 => 66,  165 => 60,  23 => 3,  194 => 70,  191 => 69,  180 => 103,  172 => 62,  160 => 63,  153 => 56,  178 => 64,  76 => 31,  84 => 24,  129 => 46,  65 => 23,  170 => 84,  146 => 55,  70 => 19,  205 => 72,  200 => 72,  192 => 84,  175 => 65,  148 => 47,  124 => 38,  118 => 49,  114 => 35,  231 => 89,  222 => 122,  216 => 79,  206 => 96,  188 => 90,  184 => 87,  167 => 57,  127 => 28,  104 => 36,  100 => 39,  152 => 71,  113 => 38,  90 => 27,  77 => 23,  212 => 58,  207 => 75,  202 => 94,  190 => 87,  186 => 64,  174 => 106,  161 => 63,  155 => 59,  150 => 55,  134 => 47,  126 => 50,  110 => 22,  97 => 41,  81 => 23,  58 => 25,  137 => 43,  53 => 12,  480 => 162,  474 => 215,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 197,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 157,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 129,  337 => 103,  322 => 101,  314 => 119,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 110,  285 => 106,  283 => 88,  278 => 106,  268 => 98,  264 => 84,  258 => 81,  252 => 111,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 84,  169 => 64,  140 => 58,  132 => 41,  128 => 50,  107 => 48,  61 => 17,  273 => 152,  269 => 94,  254 => 92,  243 => 134,  240 => 86,  238 => 85,  235 => 132,  230 => 103,  227 => 127,  224 => 79,  221 => 78,  219 => 77,  217 => 101,  208 => 73,  204 => 72,  179 => 108,  159 => 54,  143 => 67,  135 => 62,  119 => 40,  102 => 33,  71 => 22,  67 => 18,  63 => 18,  59 => 14,  28 => 3,  38 => 6,  87 => 34,  21 => 2,  201 => 110,  196 => 92,  183 => 63,  171 => 69,  166 => 72,  163 => 82,  158 => 62,  156 => 58,  151 => 59,  142 => 88,  138 => 51,  136 => 71,  121 => 50,  117 => 19,  105 => 34,  91 => 33,  62 => 27,  49 => 14,  31 => 4,  26 => 11,  25 => 35,  94 => 34,  89 => 37,  85 => 32,  75 => 21,  68 => 30,  56 => 11,  24 => 2,  19 => 1,  93 => 27,  88 => 32,  78 => 26,  46 => 13,  44 => 10,  27 => 3,  79 => 21,  72 => 24,  69 => 25,  47 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 60,  145 => 74,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 45,  96 => 30,  83 => 33,  74 => 27,  66 => 27,  55 => 16,  52 => 12,  50 => 22,  43 => 9,  41 => 19,  35 => 5,  32 => 5,  29 => 3,  209 => 95,  203 => 73,  199 => 93,  193 => 113,  189 => 112,  187 => 81,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 66,  162 => 59,  154 => 60,  149 => 56,  147 => 54,  144 => 54,  141 => 51,  133 => 56,  130 => 46,  125 => 51,  122 => 49,  116 => 39,  112 => 30,  109 => 52,  106 => 51,  103 => 30,  99 => 31,  95 => 30,  92 => 43,  86 => 23,  82 => 28,  80 => 32,  73 => 20,  64 => 17,  60 => 22,  57 => 12,  54 => 16,  51 => 13,  48 => 9,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
