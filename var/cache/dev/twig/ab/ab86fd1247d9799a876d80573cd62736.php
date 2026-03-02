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

/* backend/session_day/new.html.twig */
class __TwigTemplate_ef4911ca8fec540c07aa9324dac85a3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/new.html.twig"));

        // line 3
        $context["page_section"] = "Clases x día";
        // line 4
        $context["page_title"] = ("Programar día: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4));
        // line 5
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_new_branch_office");
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/session_day/new.html.twig", 1);
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
        yield from         $this->loadTemplate("backend/session_day/new.html.twig", "backend/session_day/new.html.twig", 8, "234133412")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 8, $this->source); })()), "page_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session_day/new.html.twig";
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
{% set page_title = 'Programar día: ' ~ branchOffice.name %}
{% set return_to = path('backend_session_day_new_branch_office') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            <form action=\"{{ path('backend_session_day_new', {'branch_office': branchOffice.id }) }}\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                        <label for=\"session_dateStart\" class=\"required\">Día:</label>

                        <input type=\"text\" id=\"session_dateStart\" name=\"session[dateStart]\" autocomplete=\"off\" value=\"{{ data.dateStart|default() }}\" required=\"required\" class=\"form-control datepicker has-feedback-right\">
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
                                                    <td>
                                                        <select class=\"form-control\" name=\"session[schedules][{{ schedule }}][{{ exerciseRoom.id }}]\"
                                                            required {% if data['schedules'][schedule][exerciseRoom.id] is defined and (data['schedules'][schedule][exerciseRoom.id]|number_format) > 0 %}data-current=\"{{ data['schedules'][schedule][exerciseRoom.id] }}\"{% endif %}
                                                        >
                                                            <option>- Instructor -</option>
                                                            {% for instructor in exerciseRoom.discipline.instructors|filter(v=> v.enabled and not v.deleted) %}
                                                                <option value=\"{{ instructor.id }}\">
                                                                    {{ instructor.profile.firstname }}
                                                                </option>
                                                            {% endfor %}
                                                        </select>
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[information][{{ schedule }}][{{ exerciseRoom.id }}]\" placeholder=\"Información Adicional\">
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
", "backend/session_day/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session_day\\new.html.twig");
    }
}


/* backend/session_day/new.html.twig */
class __TwigTemplate_ef4911ca8fec540c07aa9324dac85a3f___234133412 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/session_day/new.html.twig", 8);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_new", ["branch_office" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["branchOffice"]) || array_key_exists("branchOffice", $context) ? $context["branchOffice"] : (function () { throw new RuntimeError('Variable "branchOffice" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                        <label for=\"session_dateStart\" class=\"required\">Día:</label>

                        <input type=\"text\" id=\"session_dateStart\" name=\"session[dateStart]\" autocomplete=\"off\" value=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "dateStart", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "dateStart", [], "any", false, false, false, 15))) : ("")), "html", null, true);
        yield "\" required=\"required\" class=\"form-control datepicker has-feedback-right\">
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
                yield "                                                    <td>
                                                        <select class=\"form-control\" name=\"session[schedules][";
                // line 41
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                yield "][";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 41), "html", null, true);
                yield "]\"
                                                            required ";
                // line 42
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "schedules", [], "array", false, true, false, 42), $context["schedule"], [], "array", false, true, false, 42), CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 42), [], "array", true, true, false, 42) && (Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "schedules", [], "array", false, false, false, 42), $context["schedule"], [], "array", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 42), [], "array", false, false, false, 42)) > 0))) {
                    yield "data-current=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "schedules", [], "array", false, false, false, 42), $context["schedule"], [], "array", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 42), [], "array", false, false, false, 42), "html", null, true);
                    yield "\"";
                }
                // line 43
                yield "                                                        >
                                                            <option>- Instructor -</option>
                                                            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "discipline", [], "any", false, false, false, 45), "instructors", [], "any", false, false, false, 45), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 45, $this->source); })()), "enabled", [], "any", false, false, false, 45) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 45, $this->source); })()), "deleted", [], "any", false, false, false, 45)); }));
                foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
                    // line 46
                    yield "                                                                <option value=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 46), "html", null, true);
                    yield "\">
                                                                    ";
                    // line 47
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 47), "firstname", [], "any", false, false, false, 47), "html", null, true);
                    yield "
                                                                </option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "                                                        </select>
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[information][";
                // line 52
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                yield "][";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 52), "html", null, true);
                yield "]\" placeholder=\"Información Adicional\">
                                                    </td>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exerciseRoom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return "backend/session_day/new.html.twig";
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
        return array (  368 => 57,  361 => 55,  350 => 52,  346 => 50,  337 => 47,  332 => 46,  328 => 45,  324 => 43,  318 => 42,  312 => 41,  309 => 40,  305 => 39,  301 => 38,  298 => 37,  294 => 36,  289 => 33,  280 => 31,  276 => 30,  258 => 15,  249 => 10,  239 => 9,  76 => 8,  66 => 7,  55 => 1,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Clases x día' %}
{% set page_title = 'Programar día: ' ~ branchOffice.name %}
{% set return_to = path('backend_session_day_new_branch_office') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            <form action=\"{{ path('backend_session_day_new', {'branch_office': branchOffice.id }) }}\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                        <label for=\"session_dateStart\" class=\"required\">Día:</label>

                        <input type=\"text\" id=\"session_dateStart\" name=\"session[dateStart]\" autocomplete=\"off\" value=\"{{ data.dateStart|default() }}\" required=\"required\" class=\"form-control datepicker has-feedback-right\">
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
                                                    <td>
                                                        <select class=\"form-control\" name=\"session[schedules][{{ schedule }}][{{ exerciseRoom.id }}]\"
                                                            required {% if data['schedules'][schedule][exerciseRoom.id] is defined and (data['schedules'][schedule][exerciseRoom.id]|number_format) > 0 %}data-current=\"{{ data['schedules'][schedule][exerciseRoom.id] }}\"{% endif %}
                                                        >
                                                            <option>- Instructor -</option>
                                                            {% for instructor in exerciseRoom.discipline.instructors|filter(v=> v.enabled and not v.deleted) %}
                                                                <option value=\"{{ instructor.id }}\">
                                                                    {{ instructor.profile.firstname }}
                                                                </option>
                                                            {% endfor %}
                                                        </select>
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[information][{{ schedule }}][{{ exerciseRoom.id }}]\" placeholder=\"Información Adicional\">
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
", "backend/session_day/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session_day\\new.html.twig");
    }
}
