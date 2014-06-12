<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_80f52063d8c268df5646c175e5e3e04755d763e01c360f3221819845c9c93e84 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  46 => 14,  30 => 5,  26 => 3,  24 => 2,  170 => 95,  154 => 65,  146 => 63,  142 => 62,  133 => 58,  128 => 56,  116 => 49,  114 => 48,  111 => 47,  103 => 42,  99 => 41,  87 => 38,  82 => 35,  80 => 34,  77 => 33,  66 => 25,  61 => 26,  57 => 25,  52 => 23,  48 => 22,  41 => 18,  19 => 1,  212 => 58,  207 => 34,  202 => 46,  193 => 43,  190 => 42,  186 => 41,  183 => 40,  174 => 37,  171 => 36,  166 => 93,  164 => 34,  161 => 69,  158 => 32,  150 => 64,  144 => 28,  138 => 61,  134 => 19,  130 => 18,  126 => 17,  120 => 15,  97 => 7,  94 => 6,  88 => 5,  83 => 30,  81 => 58,  69 => 48,  67 => 31,  62 => 24,  58 => 28,  54 => 27,  47 => 22,  45 => 14,  42 => 12,  36 => 5,  32 => 6,  27 => 1,  255 => 128,  200 => 76,  195 => 73,  187 => 70,  184 => 69,  178 => 67,  175 => 66,  169 => 64,  163 => 76,  160 => 61,  157 => 60,  155 => 31,  151 => 58,  147 => 57,  140 => 55,  137 => 54,  131 => 57,  129 => 51,  125 => 49,  121 => 52,  117 => 14,  115 => 44,  110 => 10,  106 => 9,  102 => 8,  98 => 39,  95 => 40,  91 => 35,  73 => 22,  70 => 26,  64 => 17,  59 => 16,  56 => 15,  50 => 15,  40 => 6,  37 => 5,  31 => 11,);
    }
}
