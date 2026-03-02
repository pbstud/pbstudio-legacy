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

/* profile/reservation_change.html.twig */
class __TwigTemplate_abb9d2a4af811fd9f4aaeadc8fb077a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'account_content' => [$this, 'block_account_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "profile/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/reservation_change.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Cambiar Reservación | ";
        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"row session-change\">
        <div class=\"content\">
            ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_flash.html.twig");
        yield "

            <h3>Reservación Actual</h3>
            <br>

            <div class=\"clearfix\">
                ";
        // line 14
        $context["session"] = CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "session", [], "any", false, false, false, 14);
        // line 15
        yield "                ";
        // line 16
        yield "                <div class=\"reserv_class clearfix\">
                    <div class=\"class ";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "discipline", [], "any", false, false, false, 17), [" " => "-"])), "html", null, true);
        yield "\">
                        <span class=\"icon-";
        // line 18
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "individual", [], "any", false, false, false, 18)) ? ("individual") : ("group"));
        yield "\"></span>
                        <h6>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "discipline", [], "any", false, false, false, 19), "html", null, true);
        yield "</h6>
                        <p>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 20), "h:i a"), "html", null, true);
        yield "</p>
                        <p>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 21), "profile", [], "any", false, false, false, 21), "firstname", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"detail\">
                        <p><b>Día: </b>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "method", false, false, false, 24), null, "EEEE d 'de' MMMM"), "html", null, true);
        yield "</p>
                        <p><b>Sucursal: </b>";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "branchOffice", [], "any", false, false, false, 25), "place", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                        <p><b>Salón: </b>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoom", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                        ";
        // line 27
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "individual", [], "any", false, false, false, 27)) {
            // line 28
            yield "                            <p><b>Camilla/Silla: </b>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "placeNumber", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                        ";
        }
        // line 30
        yield "                    </div>
                </div>
            </div>

            <ul class=\"branch-office\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["branchOffices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["studio"]) {
            // line 36
            yield "                    <li><a href=\"#\" class=\"btn little studio-filter\" data-value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["studio"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["studio"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </ul>
            <form class=\"filters\" autocomplete=\"off\">
                <select data-filter=\"type\">
                    <option value=\"\">- Tipo -</option>
                    <option value=\"g\">Grupal</option>
                    <option value=\"i\">Individual</option>
                </select>
                <select data-filter=\"discipline\">
                    <option value=\"\">- Disciplina -</option>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["disciplines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["discipline"]) {
            // line 48
            yield "                        <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "name", [], "any", false, false, false, 48), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discipline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                </select>
                <select data-filter=\"instructor\">
                    <option value=\"\">- Instructor -</option>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["instructors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 54
            yield "                        <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 54), "firstname", [], "any", false, false, false, 54), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                </select>
            </form>

            <br>
            <br>
            <h3>Cambiar Reservación</h3>
            <br>

            <div class=\"clearfix\">
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sessions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 66
            yield "                    ";
            // line 67
            yield "                    <div class=\"reserv_class clearfix session-item\"
                         data-studio=\"";
            // line 68
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "branchOffice", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\"
                         data-type=\"";
            // line 69
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "type", [], "any", false, false, false, 69), "html", null, true);
            yield "\"
                         data-discipline=\"";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "discipline", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\"
                         data-instructor=\"";
            // line 71
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "instructor", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\"
                    >
                        <div class=\"class ";
            // line 73
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "discipline", [], "any", false, false, false, 73), [" " => "-"])), "html", null, true);
            yield "\">
                            <span class=\"icon-";
            // line 74
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "individual", [], "any", false, false, false, 74)) ? ("individual") : ("group"));
            yield "\"></span>
                            <h6>";
            // line 75
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "discipline", [], "any", false, false, false, 75), "html", null, true);
            yield "</h6>
                            <p>";
            // line 76
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "timeStart", [], "any", false, false, false, 76), "h:i a"), "html", null, true);
            yield "</p>
                            <p>";
            // line 77
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "instructor", [], "any", false, false, false, 77), "profile", [], "any", false, false, false, 77), "firstname", [], "any", false, false, false, 77), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Día: </b>";
            // line 80
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateStart", [], "method", false, false, false, 80), null, "EEEE d 'de' MMMM"), "html", null, true);
            yield "</p>
                            <p><b>Sucursal: </b>";
            // line 81
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "branchOffice", [], "any", false, false, false, 81), "place", [], "any", false, false, false, 81), "html", null, true);
            yield "</p>
                            <p><b>Salón: </b>";
            // line 82
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "exerciseRoom", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
                            <p><b>Instructor: </b>";
            // line 83
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "instructor", [], "any", false, false, false, 83), "profile", [], "any", false, false, false, 83), "firstname", [], "any", false, false, false, 83), "html", null, true);
            yield "</p>

                            <a href=\"#\" data-url=\"";
            // line 85
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_change_session", ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 86
($context["reservation"] ?? null), "id", [], "any", false, false, false, 86), "sessionId" => CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["session"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            // line 88
            yield "\" class=\"link\" data-remodal>
                                Cambiar reservación
                            </a>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            yield "                    <div class=\"reserv_class clearfix\">
                        <p>Sin registros por mostrar</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "            </div>
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
        return "profile/reservation_change.html.twig";
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
        return array (  290 => 98,  281 => 94,  271 => 88,  269 => 87,  268 => 86,  267 => 85,  262 => 83,  258 => 82,  254 => 81,  250 => 80,  244 => 77,  240 => 76,  236 => 75,  232 => 74,  228 => 73,  223 => 71,  219 => 70,  215 => 69,  211 => 68,  208 => 67,  206 => 66,  201 => 65,  190 => 56,  179 => 54,  175 => 53,  170 => 50,  159 => 48,  155 => 47,  144 => 38,  133 => 36,  129 => 35,  122 => 30,  116 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  77 => 16,  75 => 15,  73 => 14,  64 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/reservation_change.html.twig", "/var/www/pbstudio/releases/81/templates/profile/reservation_change.html.twig");
    }
}
