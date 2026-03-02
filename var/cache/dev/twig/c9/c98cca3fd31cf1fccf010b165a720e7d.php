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

/* reservation/calendar.html.twig */
class __TwigTemplate_4c53e5843007aaea5e3a7d3808141367 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/calendar.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "reservation/calendar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " | Semana ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 3, $this->source); })()), "start", [], "any", false, false, false, 3), "weekOfYear", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 3, $this->source); })()), "start", [], "any", false, false, false, 3), "yearIso", [], "any", false, false, false, 3), "html", null, true);
        yield " - Reservación de clases de pilates y barra | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    <section id=\"calendar\" class=\"reservations\">
        <div class=\"row\">
            <div class=\"content\">
                <h1>Reservar clase</h1>
                <ul class=\"branch-office\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 11, $this->source); })()), "branchOffices", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["studio"]) {
            // line 12
            yield "                        <li><a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["studio"], "slug", [], "any", false, false, false, 12)]), "html", null, true);
            yield "\" class=\"btn little ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["studio"], "slug", [], "any", false, false, false, 12) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 12, $this->source); })()), "slug", [], "any", false, false, false, 12))) ? ("active") : (""));
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["studio"], "name", [], "any", false, false, false, 12), "html", null, true);
            yield "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "                </ul>
                <form class=\"filters\">
                    <select data-event-filter=\"type\">
                        <option value=\"\">- Tipo -</option>
                        <option value=\"g\">Grupal</option>
                        <option value=\"i\">Individual</option>
                    </select>
                    <select data-event-filter=\"discipline\">
                        <option value=\"\">- Disciplina -</option>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 23, $this->source); })()), "disciplines", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["entity"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["entity"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                    </select>
                    <select data-event-filter=\"instructor\">
                        <option value=\"\">- Instructor -</option>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 29, $this->source); })()), "instructors", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "profile", [], "any", false, false, false, 30), "firstname", [], "any", false, false, false, 30), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "profile", [], "any", false, false, false, 30), "firstname", [], "any", false, false, false, 30), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                    </select>
                </form>

                <div class=\"week\">
                    <div id=\"calendar-container\">
                        ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reservation/_calendar_week.html.twig");
        yield "
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        return "reservation/calendar.html.twig";
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
        return array (  172 => 37,  165 => 32,  154 => 30,  150 => 29,  145 => 26,  134 => 24,  130 => 23,  119 => 14,  106 => 12,  102 => 11,  95 => 6,  85 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}{{ branchOffice.name }} | Semana {{ period.start.weekOfYear }} {{ period.start.yearIso }} - Reservación de clases de pilates y barra | {% endblock %}

{% block content %}
    <section id=\"calendar\" class=\"reservations\">
        <div class=\"row\">
            <div class=\"content\">
                <h1>Reservar clase</h1>
                <ul class=\"branch-office\">
                    {% for studio in filter.branchOffices %}
                        <li><a href=\"{{ path('reservation_calendar', {'slug': studio.slug}) }}\" class=\"btn little {{ (studio.slug == branchOffice.slug ? 'active') }}\">{{ studio.name }}</a></li>
                    {% endfor %}
                </ul>
                <form class=\"filters\">
                    <select data-event-filter=\"type\">
                        <option value=\"\">- Tipo -</option>
                        <option value=\"g\">Grupal</option>
                        <option value=\"i\">Individual</option>
                    </select>
                    <select data-event-filter=\"discipline\">
                        <option value=\"\">- Disciplina -</option>
                        {% for entity in filter.disciplines %}
                            <option value=\"{{ entity }}\">{{ entity }}</option>
                        {% endfor %}
                    </select>
                    <select data-event-filter=\"instructor\">
                        <option value=\"\">- Instructor -</option>
                        {% for entity in filter.instructors %}
                            <option value=\"{{ entity.profile.firstname }}\">{{ entity.profile.firstname }}</option>
                        {% endfor %}
                    </select>
                </form>

                <div class=\"week\">
                    <div id=\"calendar-container\">
                        {{ include('reservation/_calendar_week.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "reservation/calendar.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\reservation\\calendar.html.twig");
    }
}
