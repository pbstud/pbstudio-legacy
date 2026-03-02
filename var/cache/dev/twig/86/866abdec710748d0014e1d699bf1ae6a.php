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

/* profile/sessions_used.html.twig */
class __TwigTemplate_bbe1d1ff408539fc886c6afb4abcb73a extends Template
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
            'account_aside_content' => [$this, 'block_account_aside_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/sessions_used.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/sessions_used.html.twig"));

        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/sessions_used.html.twig", 1);
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

        yield "Mis clases tomadas | ";
        
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
            <h2>Clases tomadas</h2>

            <div class=\"clearfix\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 12
            yield "                    ";
            $context["session"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 12);
            // line 13
            yield "                    <div class=\"reserv_class clearfix\">
                        <div class=\"class disabled\">
                            <span class=\"icon-";
            // line 15
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 15, $this->source); })()), "individual", [], "any", false, false, false, 15)) ? ("individual") : ("group"));
            yield "\"></span>
                            <h6>";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 16, $this->source); })()), "discipline", [], "any", false, false, false, 16), "html", null, true);
            yield "</h6>
                            <p>";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 17, $this->source); })()), "timeStart", [], "any", false, false, false, 17), "h:i a"), "html", null, true);
            yield "</p>
                            <p>";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "instructor", [], "any", false, false, false, 18), "profile", [], "any", false, false, false, 18), "firstname", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Día: </b>";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 21, $this->source); })()), "dateStart", [], "method", false, false, false, 21), null, "EEEE d 'de' MMMM"), "html", null, true);
            yield "</p>
                            <p><b>Salón: </b>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 22, $this->source); })()), "exerciseRoom", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                            <p><b>Instructor: </b>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 23, $this->source); })()), "instructor", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
                            ";
            // line 24
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "individual", [], "any", false, false, false, 24)) {
                // line 25
                yield "                                <p><b>Camilla/Silla: </b>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "placeNumber", [], "any", false, false, false, 25), "html", null, true);
                yield "</p>
                            ";
            }
            // line 27
            yield "
                            ";
            // line 28
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 28)) {
                // line 29
                yield "                                <p><i>*Clase cancelada: ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "cancellationAt", [], "any", false, false, false, 29), "d/m/Y h.i a"), "html", null, true);
                yield "</i></p>
                            ";
            }
            // line 31
            yield "                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "                    <div class=\"no_class clearfix\">
                        <p>Sin registros por mostrar</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </div>

            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn reserve-class-toggle\">Reservar clase</a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 45
    public function block_account_aside_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_aside_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_aside_content"));

        // line 46
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_aside.html.twig");
        yield "
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
        return "profile/sessions_used.html.twig";
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
        return array (  204 => 46,  194 => 45,  179 => 40,  175 => 38,  166 => 34,  159 => 31,  153 => 29,  151 => 28,  148 => 27,  142 => 25,  140 => 24,  136 => 23,  132 => 22,  128 => 21,  122 => 18,  118 => 17,  114 => 16,  110 => 15,  106 => 13,  103 => 12,  98 => 11,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/layout.html.twig' %}

{% block page_title %}Mis clases tomadas | {% endblock %}

{% block account_content %}
    <div class=\"row\">
        <div class=\"content\">
            <h2>Clases tomadas</h2>

            <div class=\"clearfix\">
                {% for reservation in reservations %}
                    {% set session = reservation.session %}
                    <div class=\"reserv_class clearfix\">
                        <div class=\"class disabled\">
                            <span class=\"icon-{{  session.individual ? 'individual' : 'group' }}\"></span>
                            <h6>{{ session.discipline }}</h6>
                            <p>{{ session.timeStart|date('h:i a') }}</p>
                            <p>{{ session.instructor.profile.firstname }}</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Día: </b>{{ session.dateStart()|format_date(null, \"EEEE d 'de' MMMM\") }}</p>
                            <p><b>Salón: </b>{{ session.exerciseRoom }}</p>
                            <p><b>Instructor: </b>{{ session.instructor }}</p>
                            {% if not session.individual %}
                                <p><b>Camilla/Silla: </b>{{ reservation.placeNumber }}</p>
                            {% endif %}

                            {% if not reservation.isAvailable %}
                                <p><i>*Clase cancelada: {{ reservation.cancellationAt|date('d/m/Y h.i a') }}</i></p>
                            {% endif %}
                        </div>
                    </div>
                {% else %}
                    <div class=\"no_class clearfix\">
                        <p>Sin registros por mostrar</p>
                    </div>
                {% endfor %}
            </div>

            <a href=\"{{ path('reservation_calendar') }}\" class=\"btn reserve-class-toggle\">Reservar clase</a>
        </div>
    </div>
{% endblock %}

{% block account_aside_content %}
    {{ include('package/_aside.html.twig') }}
{% endblock %}
", "profile/sessions_used.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\sessions_used.html.twig");
    }
}
