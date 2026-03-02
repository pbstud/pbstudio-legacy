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

/* backend/stats/index.html.twig */
class __TwigTemplate_d76f26fc721e62606a76f2da86717abd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/stats/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/stats/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/stats/index.html.twig", 1);
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
        yield "    <div class=\"row tile_count\">
        <div class=\"col-md-3 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Total facturación</span>
            <div class=\"count\">
                <a href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 9
(isset($context["transactionDateStart"]) || array_key_exists("transactionDateStart", $context) ? $context["transactionDateStart"] : (function () { throw new RuntimeError('Variable "transactionDateStart" does not exist.', 9, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID")]), "html", null, true);
        // line 11
        yield "\">
                    \$";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["amountProcessed"]) || array_key_exists("amountProcessed", $context) ? $context["amountProcessed"] : (function () { throw new RuntimeError('Variable "amountProcessed" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "
                </a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Facturación anual</span>
            <div class=\"count\">
                <a href=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 20
(isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 20, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID")]), "html", null, true);
        // line 22
        yield "\">
                    \$";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["amountAnnually"]) || array_key_exists("amountAnnually", $context) ? $context["amountAnnually"] : (function () { throw new RuntimeError('Variable "amountAnnually" does not exist.', 23, $this->source); })())), "html", null, true);
        yield "
                </a>
            </div>
        </div>
        <div class=\"col-md-2 col-sm-6 col-xs-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Facturación mensual</span>
            <div class=\"count\">
                <a href=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 31
(isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 31, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID")]), "html", null, true);
        // line 33
        yield "\">
                    \$";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["amountMonthly"]) || array_key_exists("amountMonthly", $context) ? $context["amountMonthly"] : (function () { throw new RuntimeError('Variable "amountMonthly" does not exist.', 34, $this->source); })())), "html", null, true);
        yield "
                </a>
            </div>
        </div>
        <div class=\"col-md-2 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Facturación semanal</span>
            <div class=\"count\">
                <a href=\"";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 42
(isset($context["currentWeek"]) || array_key_exists("currentWeek", $context) ? $context["currentWeek"] : (function () { throw new RuntimeError('Variable "currentWeek" does not exist.', 42, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID")]), "html", null, true);
        // line 44
        yield "\">
                    \$";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["amountWeekly"]) || array_key_exists("amountWeekly", $context) ? $context["amountWeekly"] : (function () { throw new RuntimeError('Variable "amountWeekly" does not exist.', 45, $this->source); })())), "html", null, true);
        yield "
                </a>
            </div>
        </div>
        <div class=\"col-md-2 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Facturación diaria</span>
            <div class=\"count\">
                <a href=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "d/m/Y")]), "html", null, true);
        yield "\">
                    \$";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["amountDaily"]) || array_key_exists("amountDaily", $context) ? $context["amountDaily"] : (function () { throw new RuntimeError('Variable "amountDaily" does not exist.', 53, $this->source); })())), "html", null, true);
        yield "
                </a>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"x_panel x_panel_detail\">
                <div class=\"x_title\">
                    <h2>Usuarios</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                            <tr>
                                <th><i class=\"fa fa-user\"></i> Totales</th>
                                <td>
                                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user");
        yield "\">
                                        ";
        // line 74
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 74, $this->source); })())), "html", null, true);
        yield "
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th><i class=\"fa fa-user\"></i> Nuevos del mes</th>
                                <td>
                                    <a href=\"";
        // line 81
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user", ["filters[date_start]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 82
(isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 82, $this->source); })()), "d/m/Y")]), "html", null, true);
        // line 83
        yield "\">
                                        ";
        // line 84
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalUsersMonthly"]) || array_key_exists("totalUsersMonthly", $context) ? $context["totalUsersMonthly"] : (function () { throw new RuntimeError('Variable "totalUsersMonthly" does not exist.', 84, $this->source); })())), "html", null, true);
        yield "
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th><i class=\"fa fa-user\"></i> Activos</th>
                                <td>
                                    <a href=\"";
        // line 91
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user", ["filters[enabled]" => 1, "filters[package_enabled]" => 1]), "html", null, true);
        // line 94
        yield "\">
                                        ";
        // line 95
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalUsersActive"]) || array_key_exists("totalUsersActive", $context) ? $context["totalUsersActive"] : (function () { throw new RuntimeError('Variable "totalUsersActive" does not exist.', 95, $this->source); })())), "html", null, true);
        yield "
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>

        <div class=\"col-md-9 col-sm-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Instructores</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"row\">
                        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["studioInstructors"]) || array_key_exists("studioInstructors", $context) ? $context["studioInstructors"] : (function () { throw new RuntimeError('Variable "studioInstructors" does not exist.', 117, $this->source); })()), "data", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["studioInstructor"]) {
            // line 118
            yield "                            <div class=\"col-md-6 col-sm-12\">
                                <p>";
            // line 119
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["studioInstructor"], "studio", [], "any", false, false, false, 119), "html", null, true);
            yield "</p>

                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-hover\">
                                        <thead class=\"thead-dark\">
                                        <tr>
                                            <th>Instructor</th>
                                            <th>Mes</th>
                                            <th>Catorcena</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["studioInstructor"], "instructors", [], "any", false, false, false, 131));
            foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
                // line 132
                yield "                                            <tr>
                                                <td>
                                                    ";
                // line 134
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "firstname", [], "any", false, false, false, 134), "html", null, true);
                yield "
                                                    ";
                // line 135
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "paternalSurname", [], "any", false, false, false, 135), "html", null, true);
                yield "
                                                    ";
                // line 136
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "maternalSurname", [], "any", false, false, false, 136), "html", null, true);
                yield "
                                                </td>
                                                <td>
                                                    <a href=\"";
                // line 139
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session", ["filters[instructor]" => CoreExtension::getAttribute($this->env, $this->source,                 // line 140
$context["instructor"], "instructorId", [], "any", false, false, false, 140), "filters[status]" => 0, "filters[date_start]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                 // line 142
(isset($context["studioInstructors"]) || array_key_exists("studioInstructors", $context) ? $context["studioInstructors"] : (function () { throw new RuntimeError('Variable "studioInstructors" does not exist.', 142, $this->source); })()), "startMonth", [], "any", false, false, false, 142), "d/m/Y"), "filters[date_end]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                 // line 143
(isset($context["studioInstructors"]) || array_key_exists("studioInstructors", $context) ? $context["studioInstructors"] : (function () { throw new RuntimeError('Variable "studioInstructors" does not exist.', 143, $this->source); })()), "endMonth", [], "any", false, false, false, 143), "d/m/Y"), "filters[branchOffice]" => CoreExtension::getAttribute($this->env, $this->source,                 // line 144
$context["instructor"], "studioId", [], "any", false, false, false, 144)]), "html", null, true);
                // line 145
                yield "\">
                                                        ";
                // line 146
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "monthly", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "monthly", [], "any", false, false, false, 146), 0)) : (0)), "html", null, true);
                yield "
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href=\"";
                // line 150
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session", ["filters[instructor]" => CoreExtension::getAttribute($this->env, $this->source,                 // line 151
$context["instructor"], "instructorId", [], "any", false, false, false, 151), "filters[status]" => 0, "filters[date_start]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                 // line 153
(isset($context["studioInstructors"]) || array_key_exists("studioInstructors", $context) ? $context["studioInstructors"] : (function () { throw new RuntimeError('Variable "studioInstructors" does not exist.', 153, $this->source); })()), "startWeekly", [], "any", false, false, false, 153), "d/m/Y"), "filters[date_end]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                 // line 154
(isset($context["studioInstructors"]) || array_key_exists("studioInstructors", $context) ? $context["studioInstructors"] : (function () { throw new RuntimeError('Variable "studioInstructors" does not exist.', 154, $this->source); })()), "endWeekly", [], "any", false, false, false, 154), "d/m/Y"), "filters[branchOffice]" => CoreExtension::getAttribute($this->env, $this->source,                 // line 155
$context["instructor"], "studioId", [], "any", false, false, false, 155)]), "html", null, true);
                // line 156
                yield "\">
                                                        ";
                // line 157
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "weekly", [], "any", true, true, false, 157)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "weekly", [], "any", false, false, false, 157), 0)) : (0)), "html", null, true);
                yield "
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studioInstructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Clases</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"row\">
                        ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["studioExerciseRooms"]) || array_key_exists("studioExerciseRooms", $context) ? $context["studioExerciseRooms"] : (function () { throw new RuntimeError('Variable "studioExerciseRooms" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["studioId"] => $context["studioExerciseRoom"]) {
            // line 186
            yield "                            <div class=\"col-md-6 col-sm-12\">
                                <p>";
            // line 187
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["studioExerciseRoom"], "studio", [], "any", false, false, false, 187), "html", null, true);
            yield "</p>

                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-hover\">
                                        <thead class=\"thead-dark\">
                                        <tr>
                                            <th>Clases</th>
                                            <th>Mes</th>
                                            <th>Semana</th>
                                            <th>Día</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["studioExerciseRoom"], "exerciseRooms", [], "any", false, false, false, 200));
            foreach ($context['_seq'] as $context["exerciseRoomId"] => $context["exerciseRoom"]) {
                // line 201
                yield "                                            <tr>
                                                <td>";
                // line 202
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "name", [], "any", false, false, false, 202), "html", null, true);
                yield "</td>
                                                <td>
                                                    <a href=\"";
                // line 204
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session", ["filters[status]" => Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_NOT_CANCELED"), "filters[branchOffice]" =>                 // line 206
$context["studioId"], "filters[exerciseRoom]" =>                 // line 207
$context["exerciseRoomId"], "filters[date_start]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,                 // line 208
(isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 208, $this->source); })()), "d/m/Y")]), "html", null, true);
                // line 209
                yield "\">
                                                        ";
                // line 210
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "monthly", [], "any", false, false, false, 210), "html", null, true);
                yield "
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href=\"";
                // line 214
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session", ["filters[status]" => Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_NOT_CANCELED"), "filters[branchOffice]" =>                 // line 216
$context["studioId"], "filters[exerciseRoom]" =>                 // line 217
$context["exerciseRoomId"], "filters[date_start]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,                 // line 218
(isset($context["currentWeek"]) || array_key_exists("currentWeek", $context) ? $context["currentWeek"] : (function () { throw new RuntimeError('Variable "currentWeek" does not exist.', 218, $this->source); })()), "d/m/Y")]), "html", null, true);
                // line 219
                yield "\">
                                                        ";
                // line 220
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "weekly", [], "any", false, false, false, 220), "html", null, true);
                yield "
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href=\"";
                // line 224
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session", ["filters[status]" => Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_NOT_CANCELED"), "filters[branchOffice]" =>                 // line 226
$context["studioId"], "filters[exerciseRoom]" =>                 // line 227
$context["exerciseRoomId"], "filters[date_start]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "d/m/Y")]), "html", null, true);
                // line 229
                yield "\">
                                                        ";
                // line 230
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "daily", [], "any", false, false, false, 230), "html", null, true);
                yield "
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['exerciseRoomId'], $context['exerciseRoom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['studioId'], $context['studioExerciseRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6 col-sm-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Ranking</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"row\">
                        ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 258, $this->source); })()), "data", [], "any", false, false, false, 258));
        foreach ($context['_seq'] as $context["studioId"] => $context["rankingStudio"]) {
            // line 259
            yield "                            <div class=\"col-md-12\">
                                <p>";
            // line 260
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "studio", [], "any", false, false, false, 260), "html", null, true);
            yield "</p>

                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-hover\">
                                        <thead class=\"thead-dark\">
                                        <tr>
                                            <th>#</th>
                                            <th>Día</th>
                                            <th>Horario</th>
                                            <th>Paquete</th>
                                            <th>Cliente Favorito</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 275
                yield "                                            <tr>
                                                <td>";
                // line 276
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["i"] + 1), "html", null, true);
                yield "</td>
                                                <td>";
                // line 277
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "day", [], "any", false, true, false, 277), $context["i"], [], "array", true, true, false, 277)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "day", [], "any", false, true, false, 277), $context["i"], [], "array", false, false, false, 277), "")) : ("")), "html", null, true);
                yield "</td>
                                                <td>
                                                    ";
                // line 279
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "schedule", [], "any", false, true, false, 279), $context["i"], [], "array", true, true, false, 279)) {
                    // line 280
                    yield "                                                        <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session", ["filters[branchOffice]" =>                     // line 281
$context["studioId"], "filters[date_start]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                     // line 282
(isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 282, $this->source); })()), "dateStart", [], "any", false, false, false, 282), "d/m/Y"), "filters[schedule]" => Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 283
$context["rankingStudio"], "schedule", [], "any", false, false, false, 283), $context["i"], [], "array", false, false, false, 283), 0, 5)]), "html", null, true);
                    // line 284
                    yield "\">
                                                            ";
                    // line 285
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "schedule", [], "any", false, false, false, 285), $context["i"], [], "array", false, false, false, 285), 0, 5), "html", null, true);
                    yield "
                                                        </a>
                                                    ";
                }
                // line 288
                yield "                                                </td>
                                                <td>
                                                    ";
                // line 290
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "package", [], "any", false, true, false, 290), $context["i"], [], "array", true, true, false, 290)) {
                    // line 291
                    yield "                                                        ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "package", [], "any", false, false, false, 291), $context["i"], [], "array", false, false, false, 291), "html", null, true);
                    yield " clase(s)
                                                    ";
                }
                // line 293
                yield "                                                </td>
                                                <td>
                                                    ";
                // line 295
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "customer", [], "any", false, true, false, 295), $context["i"], [], "array", true, true, false, 295)) {
                    // line 296
                    yield "                                                        <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_search" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 297
$context["rankingStudio"], "customer", [], "any", false, false, false, 297), $context["i"], [], "array", false, false, false, 297), "email", [], "any", false, false, false, 297), "filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                     // line 298
(isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 298, $this->source); })()), "dateStart", [], "any", false, false, false, 298), "d/m/Y")]), "html", null, true);
                    // line 299
                    yield "\">
                                                            ";
                    // line 300
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "customer", [], "any", false, false, false, 300), $context["i"], [], "array", false, false, false, 300), "customer", [], "any", false, false, false, 300), "html", null, true);
                    yield "
                                                        </a>
                                                    ";
                }
                // line 303
                yield "                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['studioId'], $context['rankingStudio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        yield "                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>

        <div class=\"col-md-6 col-sm-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Descuentos</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <h2 class=\"text-center\">Año</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 text-center\">
                            <p>Sin descuento</p>
                            <h4>
                                <a href=\"";
        // line 331
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 332
(isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 332, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_discount" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::WITHOUT_DISCOUNT")]), "html", null, true);
        // line 335
        yield "\">
                                    <strong>\$";
        // line 336
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalNoDiscountAnnually"]) || array_key_exists("totalNoDiscountAnnually", $context) ? $context["totalNoDiscountAnnually"] : (function () { throw new RuntimeError('Variable "totalNoDiscountAnnually" does not exist.', 336, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-6 col-sm-12 text-center\">
                            <p>Con descuento</p>
                            <h4>
                                <a href=\"";
        // line 344
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 345
(isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 345, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_discount" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::WITH_DISCOUNT")]), "html", null, true);
        // line 348
        yield "\">
                                    <strong>\$";
        // line 349
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalDiscountAnnually"]) || array_key_exists("totalDiscountAnnually", $context) ? $context["totalDiscountAnnually"] : (function () { throw new RuntimeError('Variable "totalDiscountAnnually" does not exist.', 349, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>
                    </div>

                    <hr>

                    <h2 class=\"text-center\">Mes</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 text-center\">
                            <p>Sin descuento</p>
                            <h4>
                                <a href=\"";
        // line 362
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 363
(isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 363, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_discount" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::WITHOUT_DISCOUNT")]), "html", null, true);
        // line 366
        yield "\">
                                    <strong>\$";
        // line 367
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalNoDiscountMonthly"]) || array_key_exists("totalNoDiscountMonthly", $context) ? $context["totalNoDiscountMonthly"] : (function () { throw new RuntimeError('Variable "totalNoDiscountMonthly" does not exist.', 367, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-6 col-sm-12 text-center\">
                            <p>Con descuento</p>
                            <h4>
                                <a href=\"";
        // line 375
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 376
(isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 376, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_discount" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::WITH_DISCOUNT")]), "html", null, true);
        // line 379
        yield "\">
                                    <strong>\$";
        // line 380
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalDiscountMonthly"]) || array_key_exists("totalDiscountMonthly", $context) ? $context["totalDiscountMonthly"] : (function () { throw new RuntimeError('Variable "totalDiscountMonthly" does not exist.', 380, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>

            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Formas de pago</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <h2 class=\"text-center\">Año</h2>
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Efectivo</p>
                            <h4>
                                <a href=\"";
        // line 402
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 403
(isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 403, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_CASH")]), "html", null, true);
        // line 406
        yield "\">
                                    <strong>\$";
        // line 407
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalCashAnnually"]) || array_key_exists("totalCashAnnually", $context) ? $context["totalCashAnnually"] : (function () { throw new RuntimeError('Variable "totalCashAnnually" does not exist.', 407, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Tarjeta</p>
                            <h4>
                                <a href=\"";
        // line 415
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 416
(isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 416, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_CARD")]), "html", null, true);
        // line 419
        yield "\">
                                    <strong>\$";
        // line 420
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalCardAnnually"]) || array_key_exists("totalCardAnnually", $context) ? $context["totalCardAnnually"] : (function () { throw new RuntimeError('Variable "totalCardAnnually" does not exist.', 420, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Terminal</p>
                            <h4>
                                <a href=\"";
        // line 428
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 429
(isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 429, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_POS")]), "html", null, true);
        // line 432
        yield "\">
                                    <strong>\$";
        // line 433
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalTerminalAnnually"]) || array_key_exists("totalTerminalAnnually", $context) ? $context["totalTerminalAnnually"] : (function () { throw new RuntimeError('Variable "totalTerminalAnnually" does not exist.', 433, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>
                    </div>

                    <hr>

                    <h2 class=\"text-center\">Mes</h2>
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Efectivo</p>
                            <h4>
                                <a href=\"";
        // line 446
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 447
(isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 447, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_CASH")]), "html", null, true);
        // line 450
        yield "\">
                                    <strong>\$";
        // line 451
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalCashMonthly"]) || array_key_exists("totalCashMonthly", $context) ? $context["totalCashMonthly"] : (function () { throw new RuntimeError('Variable "totalCashMonthly" does not exist.', 451, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Tarjeta</p>
                            <h4>
                                <a href=\"";
        // line 459
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 460
(isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 460, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_CARD")]), "html", null, true);
        // line 463
        yield "\">
                                    <strong>\$";
        // line 464
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalCardMonthly"]) || array_key_exists("totalCardMonthly", $context) ? $context["totalCardMonthly"] : (function () { throw new RuntimeError('Variable "totalCardMonthly" does not exist.', 464, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Terminal</p>
                            <h4>
                                <a href=\"";
        // line 472
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 473
(isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 473, $this->source); })()), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_POS")]), "html", null, true);
        // line 476
        yield "\">
                                    <strong>\$";
        // line 477
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["totalTerminalMonthly"]) || array_key_exists("totalTerminalMonthly", $context) ? $context["totalTerminalMonthly"] : (function () { throw new RuntimeError('Variable "totalTerminalMonthly" does not exist.', 477, $this->source); })())), "html", null, true);
        yield "</strong>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
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
        return "backend/stats/index.html.twig";
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
        return array (  761 => 477,  758 => 476,  756 => 473,  755 => 472,  744 => 464,  741 => 463,  739 => 460,  738 => 459,  727 => 451,  724 => 450,  722 => 447,  721 => 446,  705 => 433,  702 => 432,  700 => 429,  699 => 428,  688 => 420,  685 => 419,  683 => 416,  682 => 415,  671 => 407,  668 => 406,  666 => 403,  665 => 402,  640 => 380,  637 => 379,  635 => 376,  634 => 375,  623 => 367,  620 => 366,  618 => 363,  617 => 362,  601 => 349,  598 => 348,  596 => 345,  595 => 344,  584 => 336,  581 => 335,  579 => 332,  578 => 331,  556 => 311,  546 => 306,  538 => 303,  532 => 300,  529 => 299,  527 => 298,  526 => 297,  524 => 296,  522 => 295,  518 => 293,  512 => 291,  510 => 290,  506 => 288,  500 => 285,  497 => 284,  495 => 283,  494 => 282,  493 => 281,  491 => 280,  489 => 279,  484 => 277,  480 => 276,  477 => 275,  473 => 274,  456 => 260,  453 => 259,  449 => 258,  429 => 240,  419 => 235,  408 => 230,  405 => 229,  403 => 227,  402 => 226,  401 => 224,  394 => 220,  391 => 219,  389 => 218,  388 => 217,  387 => 216,  386 => 214,  379 => 210,  376 => 209,  374 => 208,  373 => 207,  372 => 206,  371 => 204,  366 => 202,  363 => 201,  359 => 200,  343 => 187,  340 => 186,  336 => 185,  316 => 167,  306 => 162,  295 => 157,  292 => 156,  290 => 155,  289 => 154,  288 => 153,  287 => 151,  286 => 150,  279 => 146,  276 => 145,  274 => 144,  273 => 143,  272 => 142,  271 => 140,  270 => 139,  264 => 136,  260 => 135,  256 => 134,  252 => 132,  248 => 131,  233 => 119,  230 => 118,  226 => 117,  201 => 95,  198 => 94,  196 => 91,  186 => 84,  183 => 83,  181 => 82,  180 => 81,  170 => 74,  166 => 73,  143 => 53,  139 => 52,  129 => 45,  126 => 44,  124 => 42,  123 => 41,  113 => 34,  110 => 33,  108 => 31,  107 => 30,  97 => 23,  94 => 22,  92 => 20,  91 => 19,  81 => 12,  78 => 11,  76 => 9,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% block content %}
    <div class=\"row tile_count\">
        <div class=\"col-md-3 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Total facturación</span>
            <div class=\"count\">
                <a href=\"{{ path('backend_transaction', {
                    'filter_date_start': transactionDateStart|date('d/m/Y'),
                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID')
                }) }}\">
                    \${{ amountProcessed|number_format }}
                </a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Facturación anual</span>
            <div class=\"count\">
                <a href=\"{{ path('backend_transaction', {
                    'filter_date_start': currentYear|date('d/m/Y'),
                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID')
                }) }}\">
                    \${{ amountAnnually|number_format }}
                </a>
            </div>
        </div>
        <div class=\"col-md-2 col-sm-6 col-xs-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Facturación mensual</span>
            <div class=\"count\">
                <a href=\"{{ path('backend_transaction', {
                    'filter_date_start': currentMonth|date('d/m/Y'),
                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID')
                }) }}\">
                    \${{ amountMonthly|number_format }}
                </a>
            </div>
        </div>
        <div class=\"col-md-2 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Facturación semanal</span>
            <div class=\"count\">
                <a href=\"{{ path('backend_transaction', {
                    'filter_date_start': currentWeek|date('d/m/Y'),
                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID')
                }) }}\">
                    \${{ amountWeekly|number_format }}
                </a>
            </div>
        </div>
        <div class=\"col-md-2 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Facturación diaria</span>
            <div class=\"count\">
                <a href=\"{{ path('backend_transaction', {'filter_date_start': 'now'|date('d/m/Y')}) }}\">
                    \${{ amountDaily|number_format }}
                </a>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3 col-sm-12\">
            <div class=\"x_panel x_panel_detail\">
                <div class=\"x_title\">
                    <h2>Usuarios</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                            <tr>
                                <th><i class=\"fa fa-user\"></i> Totales</th>
                                <td>
                                    <a href=\"{{ path('backend_user') }}\">
                                        {{ totalUsers|number_format }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th><i class=\"fa fa-user\"></i> Nuevos del mes</th>
                                <td>
                                    <a href=\"{{ path('backend_user', {
                                        'filters[date_start]': currentMonth|date('d/m/Y'),
                                    }) }}\">
                                        {{ totalUsersMonthly|number_format }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th><i class=\"fa fa-user\"></i> Activos</th>
                                <td>
                                    <a href=\"{{ path('backend_user', {
                                        'filters[enabled]': 1,
                                        'filters[package_enabled]': 1
                                    }) }}\">
                                        {{ totalUsersActive|number_format }}
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>

        <div class=\"col-md-9 col-sm-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Instructores</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"row\">
                        {% for studioInstructor in studioInstructors.data %}
                            <div class=\"col-md-6 col-sm-12\">
                                <p>{{ studioInstructor.studio }}</p>

                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-hover\">
                                        <thead class=\"thead-dark\">
                                        <tr>
                                            <th>Instructor</th>
                                            <th>Mes</th>
                                            <th>Catorcena</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for instructor in studioInstructor.instructors %}
                                            <tr>
                                                <td>
                                                    {{ instructor.firstname }}
                                                    {{ instructor.paternalSurname }}
                                                    {{ instructor.maternalSurname }}
                                                </td>
                                                <td>
                                                    <a href=\"{{ path('backend_session', {
                                                        'filters[instructor]': instructor.instructorId,
                                                        'filters[status]': 0,
                                                        'filters[date_start]': studioInstructors.startMonth|date('d/m/Y'),
                                                        'filters[date_end]': studioInstructors.endMonth|date('d/m/Y'),
                                                        'filters[branchOffice]': instructor.studioId
                                                    }) }}\">
                                                        {{ instructor.monthly|default(0) }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href=\"{{ path('backend_session', {
                                                        'filters[instructor]': instructor.instructorId,
                                                        'filters[status]': 0,
                                                        'filters[date_start]': studioInstructors.startWeekly|date('d/m/Y'),
                                                        'filters[date_end]': studioInstructors.endWeekly|date('d/m/Y'),
                                                        'filters[branchOffice]': instructor.studioId
                                                    }) }}\">
                                                        {{ instructor.weekly|default(0) }}
                                                    </a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Clases</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"row\">
                        {% for studioId, studioExerciseRoom in studioExerciseRooms %}
                            <div class=\"col-md-6 col-sm-12\">
                                <p>{{ studioExerciseRoom.studio }}</p>

                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-hover\">
                                        <thead class=\"thead-dark\">
                                        <tr>
                                            <th>Clases</th>
                                            <th>Mes</th>
                                            <th>Semana</th>
                                            <th>Día</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for exerciseRoomId, exerciseRoom in studioExerciseRoom.exerciseRooms %}
                                            <tr>
                                                <td>{{ exerciseRoom.name }}</td>
                                                <td>
                                                    <a href=\"{{ path('backend_session', {
                                                        'filters[status]': constant('App\\\\Entity\\\\Session::STATUS_NOT_CANCELED'),
                                                        'filters[branchOffice]': studioId,
                                                        'filters[exerciseRoom]': exerciseRoomId,
                                                        'filters[date_start]': currentMonth|date('d/m/Y')
                                                    }) }}\">
                                                        {{ exerciseRoom.monthly }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href=\"{{ path('backend_session', {
                                                        'filters[status]': constant('App\\\\Entity\\\\Session::STATUS_NOT_CANCELED'),
                                                        'filters[branchOffice]': studioId,
                                                        'filters[exerciseRoom]': exerciseRoomId,
                                                        'filters[date_start]': currentWeek|date('d/m/Y')
                                                    }) }}\">
                                                        {{ exerciseRoom.weekly }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href=\"{{ path('backend_session', {
                                                        'filters[status]': constant('App\\\\Entity\\\\Session::STATUS_NOT_CANCELED'),
                                                        'filters[branchOffice]': studioId,
                                                        'filters[exerciseRoom]': exerciseRoomId,
                                                        'filters[date_start]': 'now'|date('d/m/Y')
                                                    }) }}\">
                                                        {{ exerciseRoom.daily }}
                                                    </a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6 col-sm-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Ranking</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"row\">
                        {% for studioId, rankingStudio in ranking.data %}
                            <div class=\"col-md-12\">
                                <p>{{ rankingStudio.studio }}</p>

                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-hover\">
                                        <thead class=\"thead-dark\">
                                        <tr>
                                            <th>#</th>
                                            <th>Día</th>
                                            <th>Horario</th>
                                            <th>Paquete</th>
                                            <th>Cliente Favorito</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for i in 0..4 %}
                                            <tr>
                                                <td>{{ i + 1 }}</td>
                                                <td>{{ rankingStudio.day[i]|default('') }}</td>
                                                <td>
                                                    {% if rankingStudio.schedule[i] is defined %}
                                                        <a href=\"{{ path('backend_session', {
                                                            'filters[branchOffice]': studioId,
                                                            'filters[date_start]': ranking.dateStart|date('d/m/Y'),
                                                            'filters[schedule]': rankingStudio.schedule[i][:5]
                                                        }) }}\">
                                                            {{ rankingStudio.schedule[i][:5] }}
                                                        </a>
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% if rankingStudio.package[i] is defined %}
                                                        {{ rankingStudio.package[i] }} clase(s)
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% if rankingStudio.customer[i] is defined %}
                                                        <a href=\"{{ path('backend_transaction', {
                                                            'filter_search': rankingStudio.customer[i].email,
                                                            'filter_date_start': ranking.dateStart|date('d/m/Y'),
                                                        }) }}\">
                                                            {{ rankingStudio.customer[i].customer }}
                                                        </a>
                                                    {% endif %}
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>

        <div class=\"col-md-6 col-sm-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Descuentos</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <h2 class=\"text-center\">Año</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 text-center\">
                            <p>Sin descuento</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentYear|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_discount': constant('App\\\\Entity\\\\Transaction::WITHOUT_DISCOUNT'),
                                }) }}\">
                                    <strong>\${{ totalNoDiscountAnnually|number_format }}</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-6 col-sm-12 text-center\">
                            <p>Con descuento</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentYear|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_discount': constant('App\\\\Entity\\\\Transaction::WITH_DISCOUNT'),
                                }) }}\">
                                    <strong>\${{ totalDiscountAnnually|number_format }}</strong>
                                </a>
                            </h4>
                        </div>
                    </div>

                    <hr>

                    <h2 class=\"text-center\">Mes</h2>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-12 text-center\">
                            <p>Sin descuento</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentMonth|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_discount': constant('App\\\\Entity\\\\Transaction::WITHOUT_DISCOUNT'),
                                }) }}\">
                                    <strong>\${{ totalNoDiscountMonthly|number_format }}</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-6 col-sm-12 text-center\">
                            <p>Con descuento</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentMonth|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_discount': constant('App\\\\Entity\\\\Transaction::WITH_DISCOUNT'),
                                }) }}\">
                                    <strong>\${{ totalDiscountMonthly|number_format }}</strong>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>

            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Formas de pago</h2>

                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <h2 class=\"text-center\">Año</h2>
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Efectivo</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentYear|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_charge_method': constant('App\\\\Entity\\\\Transaction::CHARGE_METHOD_CASH'),
                                }) }}\">
                                    <strong>\${{ totalCashAnnually|number_format }}</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Tarjeta</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentYear|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_charge_method': constant('App\\\\Entity\\\\Transaction::CHARGE_METHOD_CARD'),
                                }) }}\">
                                    <strong>\${{ totalCardAnnually|number_format }}</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Terminal</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentYear|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_charge_method': constant('App\\\\Entity\\\\Transaction::CHARGE_METHOD_POS'),
                                }) }}\">
                                    <strong>\${{ totalTerminalAnnually|number_format }}</strong>
                                </a>
                            </h4>
                        </div>
                    </div>

                    <hr>

                    <h2 class=\"text-center\">Mes</h2>
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Efectivo</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentMonth|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_charge_method': constant('App\\\\Entity\\\\Transaction::CHARGE_METHOD_CASH'),
                                }) }}\">
                                    <strong>\${{ totalCashMonthly|number_format }}</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Tarjeta</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentMonth|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_charge_method': constant('App\\\\Entity\\\\Transaction::CHARGE_METHOD_CARD'),
                                }) }}\">
                                    <strong>\${{ totalCardMonthly|number_format }}</strong>
                                </a>
                            </h4>
                        </div>

                        <div class=\"col-md-4 col-sm-12 text-center\">
                            <p>Terminal</p>
                            <h4>
                                <a href=\"{{ path('backend_transaction', {
                                    'filter_date_start': currentMonth|date('d/m/Y'),
                                    'filter_status': constant('App\\\\Entity\\\\Transaction::STATUS_PAID'),
                                    'filter_charge_method': constant('App\\\\Entity\\\\Transaction::CHARGE_METHOD_POS'),
                                }) }}\">
                                    <strong>\${{ totalTerminalMonthly|number_format }}</strong>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
{% endblock %}
", "backend/stats/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\stats\\index.html.twig");
    }
}
