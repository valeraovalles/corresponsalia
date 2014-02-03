<?php

/* CorresponsaliaBundle:Rendicion:show.html.twig */
class __TwigTemplate_da15af3cd8314e3d54360e9071f80b3e07ca5ba408cd453f69753062d00d91dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Rendicion</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Anio</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "anio"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mes</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mes"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observacion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "observacion"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estatus</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "estatus"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("rendicion");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendicion_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CorresponsaliaBundle:Rendicion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 42,  85 => 38,  77 => 33,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
