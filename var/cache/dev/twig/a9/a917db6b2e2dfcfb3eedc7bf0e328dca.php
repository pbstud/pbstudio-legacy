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

/* backend/session/index.html.twig */
class __TwigTemplate_ede8d2c1ae204f9ac494ad3230882c39 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actions' => [$this, 'block_actions'],
            'filters' => [$this, 'block_filters'],
            'table_thead' => [$this, 'block_table_thead'],
            'table_tbody' => [$this, 'block_table_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/session/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Listado de Clases";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 6
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_session_new"), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 17
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session");
        yield "\" method=\"get\">
        <div class=\"row\">
            ";
        // line 19
        if ( !(isset($context["is_instructor"]) || array_key_exists("is_instructor", $context) ? $context["is_instructor"] : (function () { throw new RuntimeError('Variable "is_instructor" does not exist.', 19, $this->source); })())) {
            // line 20
            yield "                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"form-group\">
                        <label for=\"filter_instructor\">Instructor:</label>
                        <select id=\"filter_instructor\" name=\"filters[instructor]\" class=\"form-control\" data-current=\"";
            // line 23
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "instructor", [], "array", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "instructor", [], "array", false, false, false, 23)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "instructor", [], "array", false, false, false, 23), "html", null, true)) : (yield ""));
            yield "\">
                            <option value=\"\">- Todos -</option>
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["instructors"]) || array_key_exists("instructors", $context) ? $context["instructors"] : (function () { throw new RuntimeError('Variable "instructors" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
                // line 26
                yield "                                <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 26), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 26), "firstname", [], "any", false, false, false, 26), "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                        </select>
                    </div>
                </div>
            ";
        }
        // line 32
        yield "
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filter_status\">Estado:</label>
                    <select id=\"filter_status\" name=\"filters[status]\" class=\"form-control\" data-current=\"";
        // line 36
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "array", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "array", false, false, false, 36)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "array", false, false, false, 36), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_status"]) || array_key_exists("filter_status", $context) ? $context["filter_status"] : (function () { throw new RuntimeError('Variable "filter_status" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 39
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["status"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusDescription($context["status"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filter_date_start\">Fecha de inicio:</label>
                    <input type=\"text\" id=\"filter_date_start\" name=\"filters[date_start]\" class=\"form-control datepicker has-feedback-right\" value=\"";
        // line 48
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_start", [], "array", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_start", [], "array", false, false, false, 48)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_start", [], "array", false, false, false, 48), "html", null, true)) : (yield ""));
        yield "\" />
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filter_date_end\">Fecha de término:</label>
                    <input type=\"text\" id=\"filter_date_end\" name=\"filters[date_end]\" class=\"form-control datepicker has-feedback-right\" value=\"";
        // line 58
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_end", [], "array", true, true, false, 58) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_end", [], "array", false, false, false, 58)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_end", [], "array", false, false, false, 58), "html", null, true)) : (yield ""));
        yield "\" />
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filter_branchOffice\">Sucursal</label>
                    <select id=\"filter_branchOffice\" name=\"filters[branchOffice]\" class=\"form-control\" data-current=\"";
        // line 68
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "branchOffice", [], "array", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "branchOffice", [], "array", false, false, false, 68)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "branchOffice", [], "array", false, false, false, 68), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["branch_offices"]) || array_key_exists("branch_offices", $context) ? $context["branch_offices"] : (function () { throw new RuntimeError('Variable "branch_offices" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branch_office"]) {
            // line 71
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branch_office"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branch_office"], "name", [], "any", false, false, false, 71), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch_office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filter_exercise_room\">Salón</label>
                    <select id=\"filter_exercise_room\" name=\"filters[exerciseRoom]\" class=\"form-control\" data-current=\"";
        // line 80
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "exerciseRoom", [], "array", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "exerciseRoom", [], "array", false, false, false, 80)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "exerciseRoom", [], "array", false, false, false, 80), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_exercise_rooms"]) || array_key_exists("filter_exercise_rooms", $context) ? $context["filter_exercise_rooms"] : (function () { throw new RuntimeError('Variable "filter_exercise_rooms" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["branch_office"] => $context["rooms"]) {
            // line 83
            yield "                            <optgroup label=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["branch_office"], "html", null, true);
            yield "\">
                                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["rooms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["exercise_room"]) {
                // line 85
                yield "                                    <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exercise_room"], "id", [], "any", false, false, false, 85), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exercise_room"], "name", [], "any", false, false, false, 85), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise_room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                            </optgroup>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['branch_office'], $context['rooms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filter_schedule\">Horario</label>
                    <select id=\"filter_schedule\" name=\"filters[schedule]\" class=\"form-control\" data-current=\"";
        // line 96
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "schedule", [], "array", true, true, false, 96) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "schedule", [], "array", false, false, false, 96)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "schedule", [], "array", false, false, false, 96), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_schedules"]) || array_key_exists("filter_schedules", $context) ? $context["filter_schedules"] : (function () { throw new RuntimeError('Variable "filter_schedules" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 99
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <label>&nbsp;</label>
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
                    ";
        // line 109
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 109, $this->source); })())) > 0)) {
            // line 110
            yield "                        <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["url_export"]) || array_key_exists("url_export", $context) ? $context["url_export"] : (function () { throw new RuntimeError('Variable "url_export" does not exist.', 110, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-default\">Exportar</a>
                    ";
        }
        // line 112
        yield "                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 118
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        // line 119
        yield "    <tr>
        <th>#</th>
        <th>Día</th>
        <th>Hora</th>
        <th>Salón</th>
        ";
        // line 124
        if ( !(isset($context["is_instructor"]) || array_key_exists("is_instructor", $context) ? $context["is_instructor"] : (function () { throw new RuntimeError('Variable "is_instructor" does not exist.', 124, $this->source); })())) {
            // line 125
            yield "            <th>Instructor</th>
        ";
        }
        // line 127
        yield "        <th class=\"text-center\">Reservas</th>
        <th class=\"text-center\">Sucursal</th>
        <th class=\"text-center\">Estado</th>
    </tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 133
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        // line 134
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 135
            yield "        <tr>
            <td>
                <a href=\"";
            // line 137
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 138
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 138), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                ";
            // line 143
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateStart", [], "any", false, false, false, 143), "d/m/Y"), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 146
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "timeStart", [], "any", false, false, false, 146), "H:i"), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 149
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "exerciseRoom", [], "any", false, false, false, 149), "html", null, true);
            yield "
            </td>
            ";
            // line 151
            if ( !(isset($context["is_instructor"]) || array_key_exists("is_instructor", $context) ? $context["is_instructor"] : (function () { throw new RuntimeError('Variable "is_instructor" does not exist.', 151, $this->source); })())) {
                // line 152
                yield "                <td>
                    ";
                // line 153
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "instructor", [], "any", false, false, false, 153), "html", null, true);
                yield "
                </td>
            ";
            }
            // line 156
            yield "            <td class=\"text-center\">
                <a href=\"";
            // line 157
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 157)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 158
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "reservations", [], "any", false, false, false, 158), "html", null, true);
            yield "/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "availableCapacity", [], "any", false, false, false, 158), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td class=\"text-center\">
                ";
            // line 163
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "branchOffice", [], "any", false, false, false, 163), "html", null, true);
            yield "
            </td>
            <td class=\"text-center\">
                <span class=\"label label-";
            // line 166
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "status", [], "any", false, false, false, 166)), "html", null, true);
            yield "\">
                    ";
            // line 167
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "status", [], "any", false, false, false, 167)), "html", null, true);
            yield "
                </span>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session/index.html.twig";
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
        return array (  481 => 167,  477 => 166,  471 => 163,  461 => 158,  457 => 157,  454 => 156,  448 => 153,  445 => 152,  443 => 151,  438 => 149,  432 => 146,  426 => 143,  418 => 138,  414 => 137,  410 => 135,  405 => 134,  395 => 133,  380 => 127,  376 => 125,  374 => 124,  367 => 119,  357 => 118,  342 => 112,  336 => 110,  334 => 109,  324 => 101,  313 => 99,  309 => 98,  304 => 96,  295 => 89,  288 => 87,  277 => 85,  273 => 84,  268 => 83,  264 => 82,  259 => 80,  250 => 73,  239 => 71,  235 => 70,  230 => 68,  217 => 58,  204 => 48,  195 => 41,  184 => 39,  180 => 38,  175 => 36,  169 => 32,  163 => 28,  152 => 26,  148 => 25,  143 => 23,  138 => 20,  136 => 19,  130 => 17,  120 => 16,  104 => 10,  99 => 8,  96 => 7,  93 => 6,  83 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/default/list.html.twig' %}

{% block title %}Listado de Clases{% endblock %}

{% block actions %}
    {% if is_allowed_route('backend_session_new') %}
        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"{{ path('backend_session_new') }}\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                {{ 'main.backend_session_new'|trans }}
            </a>
        </div>
    {% endif %}
{% endblock %}

{% block filters %}
    <form action=\"{{ path('backend_session') }}\" method=\"get\">
        <div class=\"row\">
            {% if not is_instructor %}
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"form-group\">
                        <label for=\"filter_instructor\">Instructor:</label>
                        <select id=\"filter_instructor\" name=\"filters[instructor]\" class=\"form-control\" data-current=\"{{ filters['instructor'] ?? '' }}\">
                            <option value=\"\">- Todos -</option>
                            {% for instructor in instructors %}
                                <option value=\"{{ instructor.id }}\">{{ instructor.profile.firstname }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            {% endif %}

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filter_status\">Estado:</label>
                    <select id=\"filter_status\" name=\"filters[status]\" class=\"form-control\" data-current=\"{{ filters['status'] ?? '' }}\">
                        <option value=\"\">- Todos -</option>
                        {% for status in filter_status %}
                            <option value=\"{{ status }}\">{{ status|SessionStatusDescription }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filter_date_start\">Fecha de inicio:</label>
                    <input type=\"text\" id=\"filter_date_start\" name=\"filters[date_start]\" class=\"form-control datepicker has-feedback-right\" value=\"{{ filters['date_start'] ?? '' }}\" />
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filter_date_end\">Fecha de término:</label>
                    <input type=\"text\" id=\"filter_date_end\" name=\"filters[date_end]\" class=\"form-control datepicker has-feedback-right\" value=\"{{ filters['date_end'] ?? '' }}\" />
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filter_branchOffice\">Sucursal</label>
                    <select id=\"filter_branchOffice\" name=\"filters[branchOffice]\" class=\"form-control\" data-current=\"{{ filters['branchOffice'] ?? '' }}\">
                        <option value=\"\">- Todos -</option>
                        {% for branch_office in branch_offices %}
                            <option value=\"{{ branch_office.id }}\">{{ branch_office.name }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filter_exercise_room\">Salón</label>
                    <select id=\"filter_exercise_room\" name=\"filters[exerciseRoom]\" class=\"form-control\" data-current=\"{{ filters['exerciseRoom'] ?? '' }}\">
                        <option value=\"\">- Todos -</option>
                        {% for branch_office, rooms in filter_exercise_rooms %}
                            <optgroup label=\"{{ branch_office }}\">
                                {% for exercise_room in rooms %}
                                    <option value=\"{{ exercise_room.id }}\">{{ exercise_room.name }}</option>
                                {% endfor %}
                            </optgroup>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filter_schedule\">Horario</label>
                    <select id=\"filter_schedule\" name=\"filters[schedule]\" class=\"form-control\" data-current=\"{{ filters['schedule'] ?? '' }}\">
                        <option value=\"\">- Todos -</option>
                        {% for schedule in filter_schedules %}
                            <option value=\"{{ schedule }}\">{{ schedule }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <label>&nbsp;</label>
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
                    {% if pagination|length > 0 %}
                        <a href=\"{{ url_export }}\" class=\"btn btn-default\">Exportar</a>
                    {% endif %}
                </div>
            </div>
        </div>
    </form>
{% endblock %}

{% block table_thead %}
    <tr>
        <th>#</th>
        <th>Día</th>
        <th>Hora</th>
        <th>Salón</th>
        {% if not is_instructor %}
            <th>Instructor</th>
        {% endif %}
        <th class=\"text-center\">Reservas</th>
        <th class=\"text-center\">Sucursal</th>
        <th class=\"text-center\">Estado</th>
    </tr>
{% endblock %}

{% block table_tbody %}
    {% for session in pagination %}
        <tr>
            <td>
                <a href=\"{{ path('backend_session_edit', { 'id': session.id }) }}\" class=\"link-edit\">
                    <u>{{ session.id }}</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                {{ session.dateStart | date('d/m/Y') }}
            </td>
            <td>
                {{ session.timeStart | date('H:i') }}
            </td>
            <td>
                {{ session.exerciseRoom }}
            </td>
            {% if not is_instructor %}
                <td>
                    {{ session.instructor }}
                </td>
            {% endif %}
            <td class=\"text-center\">
                <a href=\"{{ path('backend_session_reservations', { 'id': session.id }) }}\" class=\"link-edit\">
                    <u>{{ session.reservations }}/{{ session.availableCapacity }}</u>
                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td class=\"text-center\">
                {{ session.branchOffice }}
            </td>
            <td class=\"text-center\">
                <span class=\"label label-{{ session.status|SessionStatusLabel }}\">
                    {{ session.status|SessionStatusDescription }}
                </span>
            </td>
        </tr>
    {% endfor %}
{% endblock %}
", "backend/session/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session\\index.html.twig");
    }
}
