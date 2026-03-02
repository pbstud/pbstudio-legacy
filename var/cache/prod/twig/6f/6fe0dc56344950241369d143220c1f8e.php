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
class __TwigTemplate_172a3367edeebd03a3b1d2098fced8b8 extends Template
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
        $context["page_title"] = ("Programar día: " . CoreExtension::getAttribute($this->env, $this->source, ($context["branchOffice"] ?? null), "name", [], "any", false, false, false, 4));
        // line 5
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_new_branch_office");
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/session_day/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        yield from         $this->loadTemplate("backend/session_day/new.html.twig", "backend/session_day/new.html.twig", 8, "642442374")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
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
        return array (  58 => 8,  54 => 7,  49 => 1,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session_day/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session_day/new.html.twig");
    }
}


/* backend/session_day/new.html.twig */
class __TwigTemplate_172a3367edeebd03a3b1d2098fced8b8___642442374 extends Template
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
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/session_day/new.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "            <form action=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_new", ["branch_office" => CoreExtension::getAttribute($this->env, $this->source, ($context["branchOffice"] ?? null), "id", [], "any", false, false, false, 10)]), "html", null, true);
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
                yield "                                                    <td>
                                                        <select class=\"form-control\" name=\"session[schedules][";
                // line 41
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["schedule"], "html", null, true);
                yield "][";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 41), "html", null, true);
                yield "]\"
                                                            required ";
                // line 42
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "schedules", [], "array", false, true, false, 42), $context["schedule"], [], "array", false, true, false, 42), CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 42), [], "array", true, true, false, 42) && (Twig\Extension\CoreExtension::numberFormatFilter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = (($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["schedules"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["schedule"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 42)] ?? null) : null)) > 0))) {
                    yield "data-current=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["schedules"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["schedule"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 42)] ?? null) : null), "html", null, true);
                    yield "\"";
                }
                // line 43
                yield "                                                        >
                                                            <option>- Instructor -</option>
                                                            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "discipline", [], "any", false, false, false, 45), "instructors", [], "any", false, false, false, 45), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "enabled", [], "any", false, false, false, 45) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "deleted", [], "any", false, false, false, 45)); }));
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
        return array (  247 => 57,  240 => 55,  229 => 52,  225 => 50,  216 => 47,  211 => 46,  207 => 45,  203 => 43,  197 => 42,  191 => 41,  188 => 40,  184 => 39,  180 => 38,  177 => 37,  173 => 36,  168 => 33,  159 => 31,  155 => 30,  137 => 15,  128 => 10,  124 => 9,  58 => 8,  54 => 7,  49 => 1,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session_day/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session_day/new.html.twig");
    }
}
