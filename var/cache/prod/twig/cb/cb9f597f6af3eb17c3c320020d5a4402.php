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
class __TwigTemplate_89aec700a3f24f094eca5255b7dbb89c extends Template
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
        // line 3
        $context["page_section"] = "Clases x día";
        // line 4
        $context["page_title"] = ("Editar día: " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "branchOffice", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4));
        // line 5
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day");
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/session_day/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        yield from         $this->loadTemplate("backend/session_day/edit.html.twig", "backend/session_day/edit.html.twig", 8, "1166031502")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
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
        return array (  58 => 8,  54 => 7,  49 => 1,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session_day/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session_day/edit.html.twig");
    }
}


/* backend/session_day/edit.html.twig */
class __TwigTemplate_89aec700a3f24f094eca5255b7dbb89c___1166031502 extends Template
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
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/session_day/edit.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "            <form action=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_edit", ["editDate" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "dateStart", [], "any", false, false, false, 10), "d-m-Y"), "branchOfficeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "branchOffice", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                        <label>Día:</label>

                        <input type=\"text\" required=\"required\" class=\"form-control has-feedback-right\" value=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "dateStart", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["exerciseRooms"] ?? null));
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["schedules"] ?? null));
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["exerciseRooms"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["exerciseRoom"]) {
                // line 40
                yield "                                                    ";
                $context["current"] = null;
                // line 41
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "schedules", [], "array", false, true, false, 41), $context["schedule"], [], "array", false, true, false, 41), CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 41), [], "array", true, true, false, 41) && (Twig\Extension\CoreExtension::numberFormatFilter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = (($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["schedules"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["schedule"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 41)] ?? null) : null)) > 0))) {
                    // line 42
                    yield "                                                        ";
                    $context["current"] = (($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["schedules"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["schedule"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 42)] ?? null) : null);
                    // line 43
                    yield "                                                    ";
                }
                // line 44
                yield "
                                                    <td>
                                                        ";
                // line 46
                if (($context["current"] ?? null)) {
                    // line 47
                    yield "                                                            <input type=\"hidden\" name=\"session[schedules][";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                    yield "][";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 47), "html", null, true);
                    yield "][session]\" value=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_6 = ($context["current"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["session"] ?? null) : null), "html", null, true);
                    yield "\">
                                                            <input type=\"hidden\" name=\"session[schedules][";
                    // line 48
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                    yield "][";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 48), "html", null, true);
                    yield "][hash]\" value=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_7 = ($context["current"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["hash"] ?? null) : null), "html", null, true);
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
                if (($context["current"] ?? null)) {
                    yield "data-current=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_8 = ($context["current"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["instructor"] ?? null) : null), "html", null, true);
                    yield "\"";
                }
                yield ">
                                                            <option>- Instructor -</option>
                                                            ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "discipline", [], "any", false, false, false, 53), "instructors", [], "any", false, false, false, 53), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "enabled", [], "any", false, false, false, 53) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "deleted", [], "any", false, false, false, 53)); }));
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
                ((($context["current"] ?? null)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_9 = ($context["current"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["information"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "\">
                                                        <br>
                                                        <input type=\"text\" class=\"form-control\" name=\"session[capacity][";
                // line 62
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                yield "][";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 62), "html", null, true);
                yield "]\" placeholder=\"Capacidad\" value=\"";
                ((($context["current"] ?? null)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_10 = ($context["current"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["capacity"] ?? null) : null), "html", null, true)) : (yield ""));
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
        return array (  291 => 67,  284 => 65,  271 => 62,  262 => 60,  258 => 58,  249 => 55,  244 => 54,  240 => 53,  227 => 51,  224 => 50,  215 => 48,  206 => 47,  204 => 46,  200 => 44,  197 => 43,  194 => 42,  191 => 41,  188 => 40,  184 => 39,  180 => 38,  177 => 37,  173 => 36,  168 => 33,  159 => 31,  155 => 30,  137 => 15,  128 => 10,  124 => 9,  58 => 8,  54 => 7,  49 => 1,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session_day/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session_day/edit.html.twig");
    }
}
