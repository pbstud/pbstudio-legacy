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
class __TwigTemplate_8854a4258b586faf7a2791b50bea28cf extends Template
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
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/stats/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"row tile_count\">
        <div class=\"col-md-3 col-sm-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-money\"></i> Total facturación</span>
            <div class=\"count\">
                <a href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env,         // line 9
($context["transactionDateStart"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID")]), "html", null, true);
        // line 11
        yield "\">
                    \$";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["amountProcessed"] ?? null)), "html", null, true);
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
($context["currentYear"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID")]), "html", null, true);
        // line 22
        yield "\">
                    \$";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["amountAnnually"] ?? null)), "html", null, true);
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
($context["currentMonth"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID")]), "html", null, true);
        // line 33
        yield "\">
                    \$";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["amountMonthly"] ?? null)), "html", null, true);
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
($context["currentWeek"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID")]), "html", null, true);
        // line 44
        yield "\">
                    \$";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["amountWeekly"] ?? null)), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["amountDaily"] ?? null)), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalUsers"] ?? null)), "html", null, true);
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
($context["currentMonth"] ?? null), "d/m/Y")]), "html", null, true);
        // line 83
        yield "\">
                                        ";
        // line 84
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalUsersMonthly"] ?? null)), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalUsersActive"] ?? null)), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["studioInstructors"] ?? null), "data", [], "any", false, false, false, 117));
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
($context["studioInstructors"] ?? null), "startMonth", [], "any", false, false, false, 142), "d/m/Y"), "filters[date_end]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                 // line 143
($context["studioInstructors"] ?? null), "endMonth", [], "any", false, false, false, 143), "d/m/Y"), "filters[branchOffice]" => CoreExtension::getAttribute($this->env, $this->source,                 // line 144
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
($context["studioInstructors"] ?? null), "startWeekly", [], "any", false, false, false, 153), "d/m/Y"), "filters[date_end]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                 // line 154
($context["studioInstructors"] ?? null), "endWeekly", [], "any", false, false, false, 154), "d/m/Y"), "filters[branchOffice]" => CoreExtension::getAttribute($this->env, $this->source,                 // line 155
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["studioExerciseRooms"] ?? null));
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
($context["currentMonth"] ?? null), "d/m/Y")]), "html", null, true);
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
($context["currentWeek"] ?? null), "d/m/Y")]), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ranking"] ?? null), "data", [], "any", false, false, false, 258));
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
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "day", [], "any", false, true, false, 277), $context["i"], [], "array", true, true, false, 277)) ? (Twig\Extension\CoreExtension::defaultFilter((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "day", [], "any", false, true, false, 277)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "")) : ("")), "html", null, true);
                yield "</td>
                                                <td>
                                                    ";
                // line 279
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "schedule", [], "any", false, true, false, 279), $context["i"], [], "array", true, true, false, 279)) {
                    // line 280
                    yield "                                                        <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session", ["filters[branchOffice]" =>                     // line 281
$context["studioId"], "filters[date_start]" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                     // line 282
($context["ranking"] ?? null), "dateStart", [], "any", false, false, false, 282), "d/m/Y"), "filters[schedule]" => Twig\Extension\CoreExtension::slice($this->env, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,                     // line 283
$context["rankingStudio"], "schedule", [], "any", false, false, false, 283)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), 0, 5)]), "html", null, true);
                    // line 284
                    yield "\">
                                                            ";
                    // line 285
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::slice($this->env, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "schedule", [], "any", false, false, false, 285)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), 0, 5), "html", null, true);
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
                    yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "package", [], "any", false, false, false, 291)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "html", null, true);
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
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction", ["filter_search" => CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,                     // line 297
$context["rankingStudio"], "customer", [], "any", false, false, false, 297)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["i"]] ?? null) : null), "email", [], "any", false, false, false, 297), "filter_date_start" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,                     // line 298
($context["ranking"] ?? null), "dateStart", [], "any", false, false, false, 298), "d/m/Y")]), "html", null, true);
                    // line 299
                    yield "\">
                                                            ";
                    // line 300
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["rankingStudio"], "customer", [], "any", false, false, false, 300)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["i"]] ?? null) : null), "customer", [], "any", false, false, false, 300), "html", null, true);
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
($context["currentYear"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_discount" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::WITHOUT_DISCOUNT")]), "html", null, true);
        // line 335
        yield "\">
                                    <strong>\$";
        // line 336
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalNoDiscountAnnually"] ?? null)), "html", null, true);
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
($context["currentYear"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_discount" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::WITH_DISCOUNT")]), "html", null, true);
        // line 348
        yield "\">
                                    <strong>\$";
        // line 349
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalDiscountAnnually"] ?? null)), "html", null, true);
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
($context["currentMonth"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_discount" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::WITHOUT_DISCOUNT")]), "html", null, true);
        // line 366
        yield "\">
                                    <strong>\$";
        // line 367
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalNoDiscountMonthly"] ?? null)), "html", null, true);
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
($context["currentMonth"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_discount" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::WITH_DISCOUNT")]), "html", null, true);
        // line 379
        yield "\">
                                    <strong>\$";
        // line 380
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalDiscountMonthly"] ?? null)), "html", null, true);
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
($context["currentYear"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_CASH")]), "html", null, true);
        // line 406
        yield "\">
                                    <strong>\$";
        // line 407
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalCashAnnually"] ?? null)), "html", null, true);
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
($context["currentYear"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_CARD")]), "html", null, true);
        // line 419
        yield "\">
                                    <strong>\$";
        // line 420
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalCardAnnually"] ?? null)), "html", null, true);
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
($context["currentYear"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_POS")]), "html", null, true);
        // line 432
        yield "\">
                                    <strong>\$";
        // line 433
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalTerminalAnnually"] ?? null)), "html", null, true);
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
($context["currentMonth"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_CASH")]), "html", null, true);
        // line 450
        yield "\">
                                    <strong>\$";
        // line 451
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalCashMonthly"] ?? null)), "html", null, true);
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
($context["currentMonth"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_CARD")]), "html", null, true);
        // line 463
        yield "\">
                                    <strong>\$";
        // line 464
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalCardMonthly"] ?? null)), "html", null, true);
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
($context["currentMonth"] ?? null), "d/m/Y"), "filter_status" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID"), "filter_charge_method" => Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::CHARGE_METHOD_POS")]), "html", null, true);
        // line 476
        yield "\">
                                    <strong>\$";
        // line 477
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["totalTerminalMonthly"] ?? null)), "html", null, true);
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
        return array (  743 => 477,  740 => 476,  738 => 473,  737 => 472,  726 => 464,  723 => 463,  721 => 460,  720 => 459,  709 => 451,  706 => 450,  704 => 447,  703 => 446,  687 => 433,  684 => 432,  682 => 429,  681 => 428,  670 => 420,  667 => 419,  665 => 416,  664 => 415,  653 => 407,  650 => 406,  648 => 403,  647 => 402,  622 => 380,  619 => 379,  617 => 376,  616 => 375,  605 => 367,  602 => 366,  600 => 363,  599 => 362,  583 => 349,  580 => 348,  578 => 345,  577 => 344,  566 => 336,  563 => 335,  561 => 332,  560 => 331,  538 => 311,  528 => 306,  520 => 303,  514 => 300,  511 => 299,  509 => 298,  508 => 297,  506 => 296,  504 => 295,  500 => 293,  494 => 291,  492 => 290,  488 => 288,  482 => 285,  479 => 284,  477 => 283,  476 => 282,  475 => 281,  473 => 280,  471 => 279,  466 => 277,  462 => 276,  459 => 275,  455 => 274,  438 => 260,  435 => 259,  431 => 258,  411 => 240,  401 => 235,  390 => 230,  387 => 229,  385 => 227,  384 => 226,  383 => 224,  376 => 220,  373 => 219,  371 => 218,  370 => 217,  369 => 216,  368 => 214,  361 => 210,  358 => 209,  356 => 208,  355 => 207,  354 => 206,  353 => 204,  348 => 202,  345 => 201,  341 => 200,  325 => 187,  322 => 186,  318 => 185,  298 => 167,  288 => 162,  277 => 157,  274 => 156,  272 => 155,  271 => 154,  270 => 153,  269 => 151,  268 => 150,  261 => 146,  258 => 145,  256 => 144,  255 => 143,  254 => 142,  253 => 140,  252 => 139,  246 => 136,  242 => 135,  238 => 134,  234 => 132,  230 => 131,  215 => 119,  212 => 118,  208 => 117,  183 => 95,  180 => 94,  178 => 91,  168 => 84,  165 => 83,  163 => 82,  162 => 81,  152 => 74,  148 => 73,  125 => 53,  121 => 52,  111 => 45,  108 => 44,  106 => 42,  105 => 41,  95 => 34,  92 => 33,  90 => 31,  89 => 30,  79 => 23,  76 => 22,  74 => 20,  73 => 19,  63 => 12,  60 => 11,  58 => 9,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/stats/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/stats/index.html.twig");
    }
}
