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

/* backend/user/reservation/list.html.twig */
class __TwigTemplate_2b75338fb22d9ec1967142d7ecb3279b extends Template
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
        return "backend/layout-ajax.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/reservation/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/reservation/list.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout-ajax.html.twig", "backend/user/reservation/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 4, $this->source); })())) > 0)) {
            // line 5
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class=\"text-center\">F. de inicio</th>
                        <th>Sucursal</th>
                        <th>Salón</th>
                        <th>Instructor</th>
                        <th class=\"text-center\">Camilla/Silla</th>
                        <th class=\"text-center\">F. de reservación</th>
                        <th class=\"text-center\">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 21
                yield "                        ";
                // line 22
                yield "                        ";
                // line 23
                yield "                        ";
                $context["session"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 23);
                // line 24
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 26
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reservation_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                yield "\" class=\"link-edit\" data-toggle=\"modal\" data-target=\"#reservationDetailModal\">
                                    <u>";
                // line 27
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 27), "html", null, true);
                yield "</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "dateStart", [], "any", false, false, false, 32), "d-m-Y") . " ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "timeStart", [], "any", false, false, false, 32), "H:i")), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 35
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "branchOffice", [], "any", false, false, false, 35), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 38
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 38, $this->source); })()), "exerciseRoom", [], "any", false, false, false, 38), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 41
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 41, $this->source); })()), "instructor", [], "any", false, false, false, 41), "profile", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 44
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "placeNumber", [], "any", false, false, false, 44), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 47
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "createdAt", [], "any", false, false, false, 47), "d-m-Y H:i"), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 50) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "closed", [], "any", false, false, false, 50))) {
                    // line 51
                    yield "                                    <span class=\"label label-success\">
                                        Tomada
                                    </span>
                                ";
                } else {
                    // line 55
                    yield "                                    <span class=\"label label-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusLabel((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 55) * 1)), "html", null, true);
                    yield "\">
                                        ";
                    // line 56
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusDescription((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 56) * 1)), "html", null, true);
                    yield "
                                    </span>
                                ";
                }
                // line 59
                yield "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                </tbody>
            </table>
        </div>

        ";
            // line 66
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 66, $this->source); })()));
            yield "
    ";
        } else {
            // line 68
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/reservation/list.html.twig";
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
        return array (  190 => 68,  185 => 66,  179 => 62,  171 => 59,  165 => 56,  160 => 55,  154 => 51,  152 => 50,  146 => 47,  140 => 44,  134 => 41,  128 => 38,  122 => 35,  116 => 32,  108 => 27,  104 => 26,  100 => 24,  97 => 23,  95 => 22,  93 => 21,  89 => 20,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout-ajax.html.twig' %}

{% block content %}
    {% if reservations | length > 0 %}
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class=\"text-center\">F. de inicio</th>
                        <th>Sucursal</th>
                        <th>Salón</th>
                        <th>Instructor</th>
                        <th class=\"text-center\">Camilla/Silla</th>
                        <th class=\"text-center\">F. de reservación</th>
                        <th class=\"text-center\">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in reservations %}
                        {# @var reservation \\App\\Entity\\Reservation #}
                        {# @var session \\App\\Entity\\Session #}
                        {% set session = reservation.session %}
                        <tr>
                            <td>
                                <a href=\"{{ path('backend_user_reservation_detail', { 'id': user.id, 'reservation': reservation.id }) }}\" class=\"link-edit\" data-toggle=\"modal\" data-target=\"#reservationDetailModal\">
                                    <u>{{ reservation.id }}</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td class=\"text-center\">
                                {{ session.dateStart | date('d-m-Y') ~ ' ' ~ session.timeStart | date('H:i') }}
                            </td>
                            <td>
                                {{ session.branchOffice }}
                            </td>
                            <td>
                                {{ session.exerciseRoom }}
                            </td>
                            <td>
                                {{ session.instructor.profile.firstname }}
                            </td>
                            <td class=\"text-center\">
                                {{ reservation.placeNumber }}
                            </td>
                            <td class=\"text-center\">
                                {{ reservation.createdAt|date('d-m-Y H:i') }}
                            </td>
                            <td class=\"text-center\">
                                {% if reservation.isAvailable and session.closed %}
                                    <span class=\"label label-success\">
                                        Tomada
                                    </span>
                                {% else %}
                                    <span class=\"label label-{{ (reservation.isAvailable * 1)|ReservationStatusLabel }}\">
                                        {{ (reservation.isAvailable * 1)|ReservationStatusDescription }}
                                    </span>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        {{ knp_pagination_render(reservations) }}
    {% else %}
        {{ include('backend/default/partials/not_records.html.twig') }}
    {% endif %}
{% endblock %}
", "backend/user/reservation/list.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\reservation\\list.html.twig");
    }
}
