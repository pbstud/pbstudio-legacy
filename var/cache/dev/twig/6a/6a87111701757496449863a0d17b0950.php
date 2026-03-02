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

/* profile/reserved_sessions.html.twig */
class __TwigTemplate_42134ee239a04fb213942c10998fabde extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/reserved_sessions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/reserved_sessions.html.twig"));

        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/reserved_sessions.html.twig", 1);
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

        yield "Próximas clases | ";
        
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
        yield "    <div class=\"row\">
        <div class=\"content\">
            ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_flash.html.twig");
        yield "

            <h2>Próximas clases</h2>

            <div class=\"clearfix\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 14
            yield "                    ";
            // line 15
            yield "                    ";
            $context["session"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 15);
            // line 16
            yield "                    ";
            // line 17
            yield "                    <div class=\"reserv_class clearfix\">
                        <div class=\"class ";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "discipline", [], "any", false, false, false, 18), [" " => "-"])), "html", null, true);
            yield "\">
                            <span class=\"icon-";
            // line 19
            yield ((("i" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19))) ? ("individual") : ("group"));
            yield "\"></span>
                            <h6>";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 20, $this->source); })()), "discipline", [], "any", false, false, false, 20), "html", null, true);
            yield "</h6>
                            <p>";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 21, $this->source); })()), "timeStart", [], "any", false, false, false, 21), "h:i a"), "html", null, true);
            yield "</p>
                            <p>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 22, $this->source); })()), "instructor", [], "any", false, false, false, 22), "profile", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Día: </b>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 25, $this->source); })()), "dateStart", [], "method", false, false, false, 25), null, "EEEE d 'de' MMMM"), "html", null, true);
            yield "</p>
                            <p><b>Sucursal: </b>";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 26, $this->source); })()), "branchOffice", [], "any", false, false, false, 26), "place", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                            <p><b>Salón: </b>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 27, $this->source); })()), "exerciseRoom", [], "any", false, false, false, 27), "html", null, true);
            yield "</p>
                            <p><b>Instructor: </b>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 28, $this->source); })()), "instructor", [], "any", false, false, false, 28), "profile", [], "any", false, false, false, 28), "firstname", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                            ";
            // line 29
            if (("g" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 29, $this->source); })()), "type", [], "any", false, false, false, 29))) {
                // line 30
                yield "                                <p><b>Camilla/Silla: </b>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "placeNumber", [], "any", false, false, false, 30), "html", null, true);
                yield "</p>
                            ";
            }
            // line 32
            yield "
                            ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 33)) {
                // line 34
                yield "                                ";
                if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->reservationCanCancel($context["reservation"])) {
                    // line 35
                    yield "                                    <a href=\"#\" data-url=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                    yield "\" class=\"link\" data-remodal>
                                        Cancelar reservación
                                    </a>
                                ";
                }
                // line 39
                yield "                                ";
                if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->reservationCanChange($context["reservation"])) {
                    // line 40
                    yield "                                    <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_change", ["id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 41
$context["reservation"], "id", [], "any", false, false, false, 41), "_fragment" => "section-content"]), "html", null, true);
                    // line 43
                    yield "\" class=\"link\">
                                        Cambiar reservación
                                    </a>
                                ";
                }
                // line 47
                yield "                            ";
            } else {
                // line 48
                yield "                                <p>
                                    <i>* Clase cancelada: ";
                // line 49
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "cancellationAt", [], "any", false, false, false, 49), "d/m/Y h:i a"), "html", null, true);
                yield "</i>
                                </p>
                            ";
            }
            // line 52
            yield "                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            yield "                    <div class=\"reserv_class clearfix\">
                        <p>Sin registros por mostrar</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "            </div>

            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn reserve-class-toggle\">Reservar clase</a>
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
        return "profile/reserved_sessions.html.twig";
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
        return array (  224 => 61,  220 => 59,  211 => 55,  204 => 52,  198 => 49,  195 => 48,  192 => 47,  186 => 43,  184 => 41,  182 => 40,  179 => 39,  171 => 35,  168 => 34,  166 => 33,  163 => 32,  157 => 30,  155 => 29,  151 => 28,  147 => 27,  143 => 26,  139 => 25,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  114 => 17,  112 => 16,  109 => 15,  107 => 14,  102 => 13,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/layout.html.twig' %}

{% block page_title %}Próximas clases | {% endblock %}

{% block account_content %}
    <div class=\"row\">
        <div class=\"content\">
            {{ include('default/_flash.html.twig') }}

            <h2>Próximas clases</h2>

            <div class=\"clearfix\">
                {% for reservation in reservations %}
                    {# reservation \\App\\Entity\\Reservation #}
                    {% set session = reservation.session %}
                    {# session \\App\\Entity\\Session #}
                    <div class=\"reserv_class clearfix\">
                        <div class=\"class {{ session.discipline|replace({' ': '-'})|lower }}\">
                            <span class=\"icon-{{  'i' == session.type ? 'individual' : 'group' }}\"></span>
                            <h6>{{ session.discipline }}</h6>
                            <p>{{ session.timeStart|date('h:i a') }}</p>
                            <p>{{ session.instructor.profile.firstname }}</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Día: </b>{{ session.dateStart()|format_date(null, \"EEEE d 'de' MMMM\") }}</p>
                            <p><b>Sucursal: </b>{{ session.branchOffice.place }}</p>
                            <p><b>Salón: </b>{{ session.exerciseRoom }}</p>
                            <p><b>Instructor: </b>{{ session.instructor.profile.firstname }}</p>
                            {% if 'g' == session.type %}
                                <p><b>Camilla/Silla: </b>{{ reservation.placeNumber }}</p>
                            {% endif %}

                            {% if reservation.isAvailable %}
                                {% if reservation_can_cancel(reservation) %}
                                    <a href=\"#\" data-url=\"{{ path('reservation_cancel', { 'id': reservation.id }) }}\" class=\"link\" data-remodal>
                                        Cancelar reservación
                                    </a>
                                {% endif %}
                                {% if reservation_can_change(reservation) %}
                                    <a href=\"{{ path('reservation_change', {
                                        'id': reservation.id,
                                        '_fragment': 'section-content'
                                    }) }}\" class=\"link\">
                                        Cambiar reservación
                                    </a>
                                {% endif %}
                            {% else %}
                                <p>
                                    <i>* Clase cancelada: {{ reservation.cancellationAt|date('d/m/Y h:i a') }}</i>
                                </p>
                            {% endif %}
                        </div>
                    </div>
                {% else %}
                    <div class=\"reserv_class clearfix\">
                        <p>Sin registros por mostrar</p>
                    </div>
                {% endfor %}
            </div>

            <a href=\"{{ path('reservation_calendar') }}\" class=\"btn reserve-class-toggle\">Reservar clase</a>
        </div>
    </div>
{% endblock %}
", "profile/reserved_sessions.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\reserved_sessions.html.twig");
    }
}
