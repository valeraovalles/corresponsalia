<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_ab7d96bec530a9751f582e5912a5f51c8fa8b7a0c66a60fbb6d7e7b7fd114a7f extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "class") . $this->getAttribute($this->getContext($context, "trace"), "type")) . $this->getAttribute($this->getContext($context, "trace"), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute($this->getContext($context, "trace"), "file");
            echo " line ";
            echo $this->getAttribute($this->getContext($context, "trace"), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 7,  26 => 5,  87 => 20,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  112 => 42,  105 => 40,  101 => 24,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  46 => 7,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  33 => 6,  30 => 3,  173 => 74,  169 => 73,  165 => 72,  161 => 71,  154 => 67,  151 => 63,  148 => 64,  144 => 63,  136 => 56,  129 => 54,  122 => 50,  115 => 43,  108 => 42,  103 => 39,  97 => 36,  93 => 9,  91 => 31,  85 => 19,  78 => 40,  71 => 22,  64 => 12,  60 => 17,  57 => 16,  51 => 15,  47 => 11,  45 => 10,  40 => 8,  37 => 7,  32 => 12,  29 => 4,);
    }
}
