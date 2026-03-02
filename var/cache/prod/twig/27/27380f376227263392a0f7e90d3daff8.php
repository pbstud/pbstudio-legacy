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
class __TwigTemplate_91c1ec6592011c10d20740650fb7210c extends Template
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
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/session/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Clases";
        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return; yield '';
    }

    // line 16
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session");
        yield "\" method=\"get\">
        <div class=\"row\">
            ";
        // line 19
        if ( !($context["is_instructor"] ?? null)) {
            // line 20
            yield "                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"form-group\">
                        <label for=\"filter_instructor\">Instructor:</label>
                        <select id=\"filter_instructor\" name=\"filters[instructor]\" class=\"form-control\" data-current=\"";
            // line 23
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "instructor", [], "array", true, true, false, 23) &&  !(null === (($__internal_compile_0 = ($context["filters"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["instructor"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_1 = ($context["filters"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["instructor"] ?? null) : null), "html", null, true)) : (yield ""));
            yield "\">
                            <option value=\"\">- Todos -</option>
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["instructors"] ?? null));
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
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["status"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_status"] ?? null));
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
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_start", [], "array", true, true, false, 48) &&  !(null === (($__internal_compile_4 = ($context["filters"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date_start"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_5 = ($context["filters"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date_start"] ?? null) : null), "html", null, true)) : (yield ""));
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
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_end", [], "array", true, true, false, 58) &&  !(null === (($__internal_compile_6 = ($context["filters"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date_end"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_7 = ($context["filters"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["date_end"] ?? null) : null), "html", null, true)) : (yield ""));
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
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "branchOffice", [], "array", true, true, false, 68) &&  !(null === (($__internal_compile_8 = ($context["filters"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["branchOffice"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_9 = ($context["filters"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["branchOffice"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["branch_offices"] ?? null));
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
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "exerciseRoom", [], "array", true, true, false, 80) &&  !(null === (($__internal_compile_10 = ($context["filters"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["exerciseRoom"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_11 = ($context["filters"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["exerciseRoom"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_exercise_rooms"] ?? null));
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
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "schedule", [], "array", true, true, false, 96) &&  !(null === (($__internal_compile_12 = ($context["filters"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["schedule"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_13 = ($context["filters"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["schedule"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_schedules"] ?? null));
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
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 110
            yield "                        <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["url_export"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-default\">Exportar</a>
                    ";
        }
        // line 112
        yield "                </div>
            </div>
        </div>
    </form>
";
        return; yield '';
    }

    // line 118
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        yield "    <tr>
        <th>#</th>
        <th>Día</th>
        <th>Hora</th>
        <th>Salón</th>
        ";
        // line 124
        if ( !($context["is_instructor"] ?? null)) {
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
        return; yield '';
    }

    // line 133
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
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
            if ( !($context["is_instructor"] ?? null)) {
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
        return array (  415 => 167,  411 => 166,  405 => 163,  395 => 158,  391 => 157,  388 => 156,  382 => 153,  379 => 152,  377 => 151,  372 => 149,  366 => 146,  360 => 143,  352 => 138,  348 => 137,  344 => 135,  339 => 134,  335 => 133,  326 => 127,  322 => 125,  320 => 124,  313 => 119,  309 => 118,  300 => 112,  294 => 110,  292 => 109,  282 => 101,  271 => 99,  267 => 98,  262 => 96,  253 => 89,  246 => 87,  235 => 85,  231 => 84,  226 => 83,  222 => 82,  217 => 80,  208 => 73,  197 => 71,  193 => 70,  188 => 68,  175 => 58,  162 => 48,  153 => 41,  142 => 39,  138 => 38,  133 => 36,  127 => 32,  121 => 28,  110 => 26,  106 => 25,  101 => 23,  96 => 20,  94 => 19,  88 => 17,  84 => 16,  74 => 10,  69 => 8,  66 => 7,  63 => 6,  59 => 5,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session/index.html.twig");
    }
}
