<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backend/user/stats.html.twig */
class __TwigTemplate_8127c6d2f481de04141b99dab116adac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/layout-ajax.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/stats.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout-ajax.html.twig", "backend/user/stats.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <table class=\"table-user-stats\">
        <tr>
            <td>Disponibles:</td>
            <td>";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["sessions_available"]) || array_key_exists("sessions_available", $context) ? $context["sessions_available"] : (function () { throw new RuntimeError('Variable "sessions_available" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td>Tomadas:</td>
            <td>";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["sessions_used"]) || array_key_exists("sessions_used", $context) ? $context["sessions_used"] : (function () { throw new RuntimeError('Variable "sessions_used" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td>Proximas:</td>
            <td>";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["reserved_sessions"]) || array_key_exists("reserved_sessions", $context) ? $context["reserved_sessions"] : (function () { throw new RuntimeError('Variable "reserved_sessions" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</td>
        </tr>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/stats.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 15,  81 => 11,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout-ajax.html.twig' %}

{% block content %}
    <table class=\"table-user-stats\">
        <tr>
            <td>Disponibles:</td>
            <td>{{ sessions_available }}</td>
        </tr>
        <tr>
            <td>Tomadas:</td>
            <td>{{ sessions_used }}</td>
        </tr>
        <tr>
            <td>Proximas:</td>
            <td>{{ reserved_sessions }}</td>
        </tr>
    </table>
{% endblock %}
", "backend/user/stats.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\stats.html.twig");
    }
}
