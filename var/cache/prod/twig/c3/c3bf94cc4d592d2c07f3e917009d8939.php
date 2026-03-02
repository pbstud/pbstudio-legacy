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

/* reservation/_calendar_week.html.twig */
class __TwigTemplate_2c70837ab0295af7cff42dcd74b312ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"date\">
    ";
        // line 2
        if (($context["weekPrev"] ?? null)) {
            // line 3
            yield "        <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar", ["slug" => CoreExtension::getAttribute($this->env, $this->source,             // line 4
($context["branchOffice"] ?? null), "slug", [], "any", false, false, false, 4), "weekno" => CoreExtension::getAttribute($this->env, $this->source,             // line 5
($context["weekPrev"] ?? null), "weekOfYear", [], "any", false, false, false, 5), "year" => CoreExtension::getAttribute($this->env, $this->source,             // line 6
($context["weekPrev"] ?? null), "yearIso", [], "any", false, false, false, 6)]), "html", null, true);
            // line 7
            yield "\" id=\"lwprev\" title=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["branchOffice"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
            yield " | Semana ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["weekPrev"] ?? null), "weekOfYear", [], "any", false, false, false, 7), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["weekPrev"] ?? null), "yearIso", [], "any", false, false, false, 7), "html", null, true);
            yield "\">
            <span class=\"icon-flecha-izq\"></span>
        </a>
    ";
        }
        // line 11
        yield "
    <h4>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["period"] ?? null), "start", [], "any", false, false, false, 12), "day", [], "any", false, false, false, 12), "html", null, true);
        yield " - ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["period"] ?? null), "end", [], "any", false, false, false, 12), "day", [], "any", false, false, false, 12), "html", null, true);
        yield " de ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["period"] ?? null), "end", [], "any", false, false, false, 12), "monthName", [], "any", false, false, false, 12), "html", null, true);
        yield "</h4>

    ";
        // line 14
        if (($context["weekNext"] ?? null)) {
            // line 15
            yield "        <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar", ["slug" => CoreExtension::getAttribute($this->env, $this->source,             // line 16
($context["branchOffice"] ?? null), "slug", [], "any", false, false, false, 16), "weekno" => CoreExtension::getAttribute($this->env, $this->source,             // line 17
($context["weekNext"] ?? null), "weekOfYear", [], "any", false, false, false, 17), "year" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
($context["weekNext"] ?? null), "yearIso", [], "any", false, false, false, 18)]), "html", null, true);
            // line 19
            yield "\" id=\"lwnext\" title=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["branchOffice"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
            yield " | Semana ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["weekNext"] ?? null), "weekOfYear", [], "any", false, false, false, 19), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["weekNext"] ?? null), "yearIso", [], "any", false, false, false, 19), "html", null, true);
            yield "\">
            <span class=\"icon-flecha-der\"></span>
        </a>
    ";
        }
        // line 23
        yield "</div>

<div class=\"example\">
    <div>
        <span class=\"pilates\"></span>
        <p>Pilates</p>
    </div>
    <div>
        <span class=\"barra\"></span>
        <p>Barra/Silla</p>
    </div>
    <div>
        <span class=\"disabled\"></span>
        <p>Clase agotada</p>
    </div>
    <div>
        <span class=\"icon-individual\"></span>
        <p>Clase individual</p>
    </div>
    <div>
        <span class=\"icon-group\"></span>
        <p>Clase grupal</p>
    </div>
</div>

<div class=\"private-class-warning\">
    <p>Para reservar clases individuales por favor comunicate al tel: 55 5292 0036</p>
</div>

<hr />

<div class=\"clearfix\" id=\"day-content\">
    <div class=\"wrapper\">
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["period"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 57
            yield "            <div class=\"day\">
                <h6><small>";
            // line 58
            yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day"], "dayName", [], "any", false, false, false, 58), 0, 3) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 58)), "html", null, true);
            yield "</small></h6>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "    </div>
</div>

<div class=\"calendar clearfix\">
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["period"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 66
            yield "        ";
            // line 67
            yield "        <div class=\"day\">
            <h6><small>";
            // line 68
            yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["day"], "dayName", [], "any", false, false, false, 68), 0, 3) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 68)), "html", null, true);
            yield "</small></h6>
            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, ($context["sessions"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["day"], "toDateString", [], "any", false, false, false, 69), [], "array", true, true, false, 69) &&  !(null === (($__internal_compile_0 = ($context["sessions"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["day"], "toDateString", [], "any", false, false, false, 69)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["sessions"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["day"], "toDateString", [], "any", false, false, false, 69)] ?? null) : null)) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 70
                yield "                ";
                // line 71
                yield "                ";
                $context["class_full"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "full", [], "any", false, false, false, 71)) ? ("disabled") : (""));
                // line 72
                yield "                <a href=\"#\" data-url=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                yield "\"
                   class=\"class ";
                // line 73
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["class_full"] ?? null), "html", null, true);
                yield " ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->extensions['Twig\Extra\String\StringExtension']->createSlug(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "discipline", [], "any", false, false, false, 73))), "html", null, true);
                yield "\"
                   data-remodal
                   data-event data-event-type=\"";
                // line 75
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "type", [], "any", false, false, false, 75), "html", null, true);
                yield "\"
                   data-event-discipline=\"";
                // line 76
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "discipline", [], "any", false, false, false, 76), "html", null, true);
                yield "\"
                   data-event-instructor=\"";
                // line 77
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "instructor", [], "any", false, false, false, 77), "profile", [], "any", false, false, false, 77), "firstname", [], "any", false, false, false, 77), "html", null, true);
                yield "\">

                    <span class=\"icon-";
                // line 79
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "individual", [], "any", false, false, false, 79)) ? ("individual") : ("group"));
                yield "\"></span>
                    <h6>";
                // line 80
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "discipline", [], "any", false, false, false, 80), "html", null, true);
                yield "</h6>
                    <p>";
                // line 81
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "timeStart", [], "any", false, false, false, 81), "h:i a"), "html", null, true);
                yield "</p>
                    <p>";
                // line 82
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "instructor", [], "any", false, false, false, 82), "profile", [], "any", false, false, false, 82), "firstname", [], "any", false, false, false, 82), "html", null, true);
                yield "</p>
                    <p><small>";
                // line 83
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "information", [], "any", false, false, false, 83), "html", null, true);
                yield "</small></p>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation/_calendar_week.html.twig";
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
        return array (  229 => 88,  222 => 86,  213 => 83,  209 => 82,  205 => 81,  201 => 80,  197 => 79,  192 => 77,  188 => 76,  184 => 75,  177 => 73,  172 => 72,  169 => 71,  167 => 70,  163 => 69,  159 => 68,  156 => 67,  154 => 66,  150 => 65,  144 => 61,  135 => 58,  132 => 57,  128 => 56,  93 => 23,  81 => 19,  79 => 18,  78 => 17,  77 => 16,  75 => 15,  73 => 14,  64 => 12,  61 => 11,  49 => 7,  47 => 6,  46 => 5,  45 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/_calendar_week.html.twig", "/var/www/pbstudio/releases/81/templates/reservation/_calendar_week.html.twig");
    }
}
