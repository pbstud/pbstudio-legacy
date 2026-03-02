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
class __TwigTemplate_22dd665bd2e7e8b2f6cd55ba07c6a432 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "reservation/calendar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["branchOffice"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " | Semana ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["period"] ?? null), "start", [], "any", false, false, false, 3), "weekOfYear", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["period"] ?? null), "start", [], "any", false, false, false, 3), "yearIso", [], "any", false, false, false, 3), "html", null, true);
        yield " - Reservación de clases de pilates y barra | ";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <section id=\"calendar\" class=\"reservations\">
        <div class=\"row\">
            <div class=\"content\">
                <h1>Reservar clase</h1>
                <ul class=\"branch-office\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "branchOffices", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["studio"]) {
            // line 12
            yield "                        <li><a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["studio"], "slug", [], "any", false, false, false, 12)]), "html", null, true);
            yield "\" class=\"btn little ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["studio"], "slug", [], "any", false, false, false, 12) == CoreExtension::getAttribute($this->env, $this->source, ($context["branchOffice"] ?? null), "slug", [], "any", false, false, false, 12))) ? ("active") : (""));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "disciplines", [], "any", false, false, false, 23));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "instructors", [], "any", false, false, false, 29));
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
        return array (  142 => 37,  135 => 32,  124 => 30,  120 => 29,  115 => 26,  104 => 24,  100 => 23,  89 => 14,  76 => 12,  72 => 11,  65 => 6,  61 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/calendar.html.twig", "/var/www/pbstudio/releases/81/templates/reservation/calendar.html.twig");
    }
}
