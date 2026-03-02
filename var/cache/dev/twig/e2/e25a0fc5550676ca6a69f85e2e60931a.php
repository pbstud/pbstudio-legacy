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

/* backend/session_day/edit.html.twig */
class __TwigTemplate_a78feb4fc1bcaed587cc138519c1720e extends Template
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
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/edit.html.twig"));

        // line 3
        $context["page_section"] = "Clases x día";
        // line 4
        $context["page_title"] = ("Editar día: " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "branchOffice", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4));
        // line 5
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day");
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/session_day/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "    ";
        yield from         $this->loadTemplate("backend/session_day/edit.html.twig", "backend/session_day/edit.html.twig", 8, "1161205257")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 8, $this->source); })()), "page_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session_day/edit.html.twig";
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
        return array (  76 => 8,  66 => 7,  55 => 1,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Clases x día' %}
{% set page_title = 'Editar día: ' ~ data.branchOffice.name %}
{% set return_to = path('backend_session_day') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            <form action=\"{{ path('backend_session_day_edit', { 'editDate': data.dateStart|date('d-m-Y'), 'branchOfficeId': data.branchOffice.id }) }}\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                        <label>Día:</label>

                        <input type=\"text\" required=\"required\" class=\"form-control has-feedback-right\" value=\"{{ data.dateStart|date('d/m/Y') }}\" readonly>
                        <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                    </div>
                </div>

                <div class=\"dataTables_wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>Hora</th>
                                            {% for exerciseRoom in exerciseRooms %}
                                                <th>{{ exerciseRoom }} / Información</th>
                                            {% endfor %}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for schedule in schedules %}
                                            <tr>
                                                <td>{{ schedule }}</td>
                                                {% for exerciseRoom in exerciseRooms %}
                                                    {% set current = null %}
                                                    {% if data['schedules'][schedule][exerciseRoom.id] is defined and (data['schedules'][schedule][exerciseRoom.id]|number_format) > 0 %}
                                                        {% set current = data['schedules'][schedule][exerciseRoom.id] %}
                                                    {% endif %}

                                                    <td>
                                                        {% if current %}
                                                            <input type=\"hidden\" name=\"session[schedules][{{ schedule }}][{{ exerciseRoom.id }}][session]\" value=\"{{ current['session'] }}\">
                                                            <input type=\"hidden\" name=\"session[schedules][{{ schedule }}][{{ exerciseRoom.id }}][hash]\" value=\"{{ current['hash'] }}\">
                                                        {% endif %}

                                                        <select class=\"form-control\" name=\"session[schedules][{{ schedule }}][{{ exerciseRoom.id }}][instructor]\" required {% if current %}data-current=\"{{ current['instructor'] }}\"{% endif %}>
                                                            <option>- Instructor -</option>
                                                            {% for instructor in exerciseRoom.discipline.instructors|filter(v=> v.enabled and not v.deleted) %}
                                                                <option value=\"{{ instructor.id }}\">
                                                                    {{ instructor.profile.firstname }}
                                                                </option>
                                                            {% endfor %}
                                                        </select>
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[information][{{ schedule }}][{{ exerciseRoom.id }}]\" placeholder=\"Información Adicional\" value=\"{{ current ? current['information'] : '' }}\">
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[capacity][{{ schedule }}][{{ exerciseRoom.id }}]\" placeholder=\"Capacidad\" value=\"{{ current ? current['capacity'] : '' }}\">
                                                    </td>
                                                {% endfor %}
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Guardar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </form>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "backend/session_day/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session_day\\edit.html.twig");
    }
}


/* backend/session_day/edit.html.twig */
class __TwigTemplate_a78feb4fc1bcaed587cc138519c1720e___1161205257 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/edit.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/session_day/edit.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "            <form action=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_edit", ["editDate" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "dateStart", [], "any", false, false, false, 10), "d-m-Y"), "branchOfficeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "branchOffice", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                        <label>Día:</label>

                        <input type=\"text\" required=\"required\" class=\"form-control has-feedback-right\" value=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "dateStart", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        yield "\" readonly>
                        <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                    </div>
                </div>

                <div class=\"dataTables_wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>Hora</th>
                                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exerciseRooms"]) || array_key_exists("exerciseRooms", $context) ? $context["exerciseRooms"] : (function () { throw new RuntimeError('Variable "exerciseRooms" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exerciseRoom"]) {
            // line 31
            yield "                                                <th>";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["exerciseRoom"], "html", null, true);
            yield " / Información</th>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exerciseRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 37
            yield "                                            <tr>
                                                <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
            yield "</td>
                                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exerciseRooms"]) || array_key_exists("exerciseRooms", $context) ? $context["exerciseRooms"] : (function () { throw new RuntimeError('Variable "exerciseRooms" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["exerciseRoom"]) {
                // line 40
                yield "                                                    ";
                $context["current"] = null;
                // line 41
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "schedules", [], "array", false, true, false, 41), $context["schedule"], [], "array", false, true, false, 41), CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 41), [], "array", true, true, false, 41) && (Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "schedules", [], "array", false, false, false, 41), $context["schedule"], [], "array", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 41), [], "array", false, false, false, 41)) > 0))) {
                    // line 42
                    yield "                                                        ";
                    $context["current"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "schedules", [], "array", false, false, false, 42), $context["schedule"], [], "array", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 42), [], "array", false, false, false, 42);
                    // line 43
                    yield "                                                    ";
                }
                // line 44
                yield "
                                                    <td>
                                                        ";
                // line 46
                if ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 46, $this->source); })())) {
                    // line 47
                    yield "                                                            <input type=\"hidden\" name=\"session[schedules][";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                    yield "][";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 47), "html", null, true);
                    yield "][session]\" value=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 47, $this->source); })()), "session", [], "array", false, false, false, 47), "html", null, true);
                    yield "\">
                                                            <input type=\"hidden\" name=\"session[schedules][";
                    // line 48
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                    yield "][";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 48), "html", null, true);
                    yield "][hash]\" value=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 48, $this->source); })()), "hash", [], "array", false, false, false, 48), "html", null, true);
                    yield "\">
                                                        ";
                }
                // line 50
                yield "
                                                        <select class=\"form-control\" name=\"session[schedules][";
                // line 51
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                yield "][";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 51), "html", null, true);
                yield "][instructor]\" required ";
                if ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 51, $this->source); })())) {
                    yield "data-current=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 51, $this->source); })()), "instructor", [], "array", false, false, false, 51), "html", null, true);
                    yield "\"";
                }
                yield ">
                                                            <option>- Instructor -</option>
                                                            ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "discipline", [], "any", false, false, false, 53), "instructors", [], "any", false, false, false, 53), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 53, $this->source); })()), "enabled", [], "any", false, false, false, 53) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 53, $this->source); })()), "deleted", [], "any", false, false, false, 53)); }));
                foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
                    // line 54
                    yield "                                                                <option value=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 54), "html", null, true);
                    yield "\">
                                                                    ";
                    // line 55
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 55), "firstname", [], "any", false, false, false, 55), "html", null, true);
                    yield "
                                                                </option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                yield "                                                        </select>
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[information][";
                // line 60
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                yield "][";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 60), "html", null, true);
                yield "]\" placeholder=\"Información Adicional\" value=\"";
                (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 60, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 60, $this->source); })()), "information", [], "array", false, false, false, 60), "html", null, true)) : (yield ""));
                yield "\">
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[capacity][";
                // line 62
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                yield "][";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 62), "html", null, true);
                yield "]\" placeholder=\"Capacidad\" value=\"";
                (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 62, $this->source); })())) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 62, $this->source); })()), "capacity", [], "array", false, false, false, 62), "html", null, true)) : (yield ""));
                yield "\">
                                                    </td>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exerciseRoom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Guardar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </form>
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
        return "backend/session_day/edit.html.twig";
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
        return array (  422 => 67,  415 => 65,  402 => 62,  393 => 60,  389 => 58,  380 => 55,  375 => 54,  371 => 53,  358 => 51,  355 => 50,  346 => 48,  337 => 47,  335 => 46,  331 => 44,  328 => 43,  325 => 42,  322 => 41,  319 => 40,  315 => 39,  311 => 38,  308 => 37,  304 => 36,  299 => 33,  290 => 31,  286 => 30,  268 => 15,  259 => 10,  249 => 9,  76 => 8,  66 => 7,  55 => 1,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Clases x día' %}
{% set page_title = 'Editar día: ' ~ data.branchOffice.name %}
{% set return_to = path('backend_session_day') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            <form action=\"{{ path('backend_session_day_edit', { 'editDate': data.dateStart|date('d-m-Y'), 'branchOfficeId': data.branchOffice.id }) }}\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                        <label>Día:</label>

                        <input type=\"text\" required=\"required\" class=\"form-control has-feedback-right\" value=\"{{ data.dateStart|date('d/m/Y') }}\" readonly>
                        <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                    </div>
                </div>

                <div class=\"dataTables_wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-xs-12\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>Hora</th>
                                            {% for exerciseRoom in exerciseRooms %}
                                                <th>{{ exerciseRoom }} / Información</th>
                                            {% endfor %}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for schedule in schedules %}
                                            <tr>
                                                <td>{{ schedule }}</td>
                                                {% for exerciseRoom in exerciseRooms %}
                                                    {% set current = null %}
                                                    {% if data['schedules'][schedule][exerciseRoom.id] is defined and (data['schedules'][schedule][exerciseRoom.id]|number_format) > 0 %}
                                                        {% set current = data['schedules'][schedule][exerciseRoom.id] %}
                                                    {% endif %}

                                                    <td>
                                                        {% if current %}
                                                            <input type=\"hidden\" name=\"session[schedules][{{ schedule }}][{{ exerciseRoom.id }}][session]\" value=\"{{ current['session'] }}\">
                                                            <input type=\"hidden\" name=\"session[schedules][{{ schedule }}][{{ exerciseRoom.id }}][hash]\" value=\"{{ current['hash'] }}\">
                                                        {% endif %}

                                                        <select class=\"form-control\" name=\"session[schedules][{{ schedule }}][{{ exerciseRoom.id }}][instructor]\" required {% if current %}data-current=\"{{ current['instructor'] }}\"{% endif %}>
                                                            <option>- Instructor -</option>
                                                            {% for instructor in exerciseRoom.discipline.instructors|filter(v=> v.enabled and not v.deleted) %}
                                                                <option value=\"{{ instructor.id }}\">
                                                                    {{ instructor.profile.firstname }}
                                                                </option>
                                                            {% endfor %}
                                                        </select>
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[information][{{ schedule }}][{{ exerciseRoom.id }}]\" placeholder=\"Información Adicional\" value=\"{{ current ? current['information'] : '' }}\">
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[capacity][{{ schedule }}][{{ exerciseRoom.id }}]\" placeholder=\"Capacidad\" value=\"{{ current ? current['capacity'] : '' }}\">
                                                    </td>
                                                {% endfor %}
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Guardar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </form>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "backend/session_day/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session_day\\edit.html.twig");
    }
}
