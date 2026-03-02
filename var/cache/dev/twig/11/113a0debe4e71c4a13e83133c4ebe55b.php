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
class __TwigTemplate_1fb9c9e95bc4e06ea8e855d25f8b40ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/reservation_change.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/reservation_change.html.twig"));

        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/reservation_change.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Cambiar Reservación | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_content"));

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
        $context["session"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14);
        // line 15
        yield "                ";
        // line 16
        yield "                <div class=\"reserv_class clearfix\">
                    <div class=\"class ";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 17, $this->source); })()), "discipline", [], "any", false, false, false, 17), [" " => "-"])), "html", null, true);
        yield "\">
                        <span class=\"icon-";
        // line 18
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "individual", [], "any", false, false, false, 18)) ? ("individual") : ("group"));
        yield "\"></span>
                        <h6>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 19, $this->source); })()), "discipline", [], "any", false, false, false, 19), "html", null, true);
        yield "</h6>
                        <p>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 20, $this->source); })()), "timeStart", [], "any", false, false, false, 20), "h:i a"), "html", null, true);
        yield "</p>
                        <p>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 21, $this->source); })()), "instructor", [], "any", false, false, false, 21), "profile", [], "any", false, false, false, 21), "firstname", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"detail\">
                        <p><b>Día: </b>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "dateStart", [], "method", false, false, false, 24), null, "EEEE d 'de' MMMM"), "html", null, true);
        yield "</p>
                        <p><b>Sucursal: </b>";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 25, $this->source); })()), "branchOffice", [], "any", false, false, false, 25), "place", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                        <p><b>Salón: </b>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 26, $this->source); })()), "exerciseRoom", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                        ";
        // line 27
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 27, $this->source); })()), "individual", [], "any", false, false, false, 27)) {
            // line 28
            yield "                            <p><b>Camilla/Silla: </b>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "placeNumber", [], "any", false, false, false, 28), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["branchOffices"]) || array_key_exists("branchOffices", $context) ? $context["branchOffices"] : (function () { throw new RuntimeError('Variable "branchOffices" does not exist.', 35, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["disciplines"]) || array_key_exists("disciplines", $context) ? $context["disciplines"] : (function () { throw new RuntimeError('Variable "disciplines" does not exist.', 47, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["instructors"]) || array_key_exists("instructors", $context) ? $context["instructors"] : (function () { throw new RuntimeError('Variable "instructors" does not exist.', 53, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 65, $this->source); })()));
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
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86), "sessionId" => CoreExtension::getAttribute($this->env, $this->source,             // line 87
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  320 => 98,  311 => 94,  301 => 88,  299 => 87,  298 => 86,  297 => 85,  292 => 83,  288 => 82,  284 => 81,  280 => 80,  274 => 77,  270 => 76,  266 => 75,  262 => 74,  258 => 73,  253 => 71,  249 => 70,  245 => 69,  241 => 68,  238 => 67,  236 => 66,  231 => 65,  220 => 56,  209 => 54,  205 => 53,  200 => 50,  189 => 48,  185 => 47,  174 => 38,  163 => 36,  159 => 35,  152 => 30,  146 => 28,  144 => 27,  140 => 26,  136 => 25,  132 => 24,  126 => 21,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  107 => 16,  105 => 15,  103 => 14,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/layout.html.twig' %}

{% block page_title %}Cambiar Reservación | {% endblock %}

{% block account_content %}
    <div class=\"row session-change\">
        <div class=\"content\">
            {{ include('default/_flash.html.twig') }}

            <h3>Reservación Actual</h3>
            <br>

            <div class=\"clearfix\">
                {% set session = reservation.session %}
                {# session \\App\\Entity\\Session #}
                <div class=\"reserv_class clearfix\">
                    <div class=\"class {{ session.discipline|replace({' ': '-'})|lower }}\">
                        <span class=\"icon-{{  session.individual ? 'individual' : 'group' }}\"></span>
                        <h6>{{ session.discipline }}</h6>
                        <p>{{ session.timeStart|date('h:i a') }}</p>
                        <p>{{ session.instructor.profile.firstname }}</p>
                    </div>
                    <div class=\"detail\">
                        <p><b>Día: </b>{{ session.dateStart()|format_date(null, \"EEEE d 'de' MMMM\") }}</p>
                        <p><b>Sucursal: </b>{{ session.branchOffice.place }}</p>
                        <p><b>Salón: </b>{{ session.exerciseRoom }}</p>
                        {% if not session.individual %}
                            <p><b>Camilla/Silla: </b>{{ reservation.placeNumber }}</p>
                        {% endif %}
                    </div>
                </div>
            </div>

            <ul class=\"branch-office\">
                {% for studio in branchOffices %}
                    <li><a href=\"#\" class=\"btn little studio-filter\" data-value=\"{{ studio.id }}\">{{ studio.name }}</a></li>
                {% endfor %}
            </ul>
            <form class=\"filters\" autocomplete=\"off\">
                <select data-filter=\"type\">
                    <option value=\"\">- Tipo -</option>
                    <option value=\"g\">Grupal</option>
                    <option value=\"i\">Individual</option>
                </select>
                <select data-filter=\"discipline\">
                    <option value=\"\">- Disciplina -</option>
                    {% for discipline in disciplines %}
                        <option value=\"{{ discipline.id }}\">{{ discipline.name }}</option>
                    {% endfor %}
                </select>
                <select data-filter=\"instructor\">
                    <option value=\"\">- Instructor -</option>
                    {% for instructor in instructors %}
                        <option value=\"{{ instructor.id }}\">{{ instructor.profile.firstname }}</option>
                    {% endfor %}
                </select>
            </form>

            <br>
            <br>
            <h3>Cambiar Reservación</h3>
            <br>

            <div class=\"clearfix\">
                {% for session in sessions %}
                    {# session \\App\\Entity\\Session #}
                    <div class=\"reserv_class clearfix session-item\"
                         data-studio=\"{{ session.branchOffice.id }}\"
                         data-type=\"{{ session.type }}\"
                         data-discipline=\"{{ session.discipline.id }}\"
                         data-instructor=\"{{ session.instructor.id }}\"
                    >
                        <div class=\"class {{ session.discipline|replace({' ': '-'})|lower }}\">
                            <span class=\"icon-{{  session.individual ? 'individual' : 'group' }}\"></span>
                            <h6>{{ session.discipline }}</h6>
                            <p>{{ session.timeStart|date('h:i a') }}</p>
                            <p>{{ session.instructor.profile.firstname }}</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Día: </b>{{ session.dateStart()|format_date(null, \"EEEE d 'de' MMMM\") }}</p>
                            <p><b>Sucursal: </b>{{ session.branchOffice.place }}</p>
                            <p><b>Salón: </b>{{ session.exerciseRoom }}</p>
                            <p><b>Instructor: </b>{{ session.instructor.profile.firstname }}</p>

                            <a href=\"#\" data-url=\"{{ path('reservation_change_session', {
                                'id': reservation.id,
                                'sessionId': session.id
                            }) }}\" class=\"link\" data-remodal>
                                Cambiar reservación
                            </a>
                        </div>
                    </div>
                {% else %}
                    <div class=\"reserv_class clearfix\">
                        <p>Sin registros por mostrar</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "profile/reservation_change.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\reservation_change.html.twig");
    }
}
