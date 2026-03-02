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

/* backend/session/reservations.html.twig */
class __TwigTemplate_a3b7bc6289e20cf30793c7c524b3367f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subcontent' => [$this, 'block_subcontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/session/profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/reservations.html.twig"));

        // line 3
        $context["page_title"] = "Listado de reservaciones";
        // line 4
        $context["active_tab"] = "tab_reservations";
        // line 1
        $this->parent = $this->loadTemplate("backend/session/profile.html.twig", "backend/session/reservations.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        // line 7
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 7, $this->source); })())) > 0)) {
            // line 8
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th class=\"text-center\">Camilla/Silla</th>
                        <th class=\"text-center\">F. de reservación</th>
                        <th>Asistencia</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 20
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 22
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                    <u>";
                // line 23
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 23), "html", null, true);
                yield "</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td class=\"text-center\">";
                // line 27
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "placeNumber", [], "any", false, false, false, 27), "html", null, true);
                yield "</td>
                            <td class=\"text-center\">";
                // line 28
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "createdAt", [], "any", false, false, false, 28), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                            <td>
                                <div class=\"form-switch\">
                                    <input
                                        type=\"checkbox\"
                                        class=\"attended\"
                                        data-url=\"";
                // line 34
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_reservation_attended", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\"
                                        id=\"attended_";
                // line 35
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 35), "html", null, true);
                yield "\"
                                        name=\"attended[";
                // line 36
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 36), "html", null, true);
                yield "]\"
                                        switch=\"success\"
                                        value=\"1\"
                                        ";
                // line 39
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "attended", [], "any", false, false, false, 39)) {
                    yield "checked=\"checked\"";
                }
                yield " />
                                    <label for=\"attended_";
                // line 40
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 40), "html", null, true);
                yield "\" data-on-label=\"Si\" data-off-label=\"No\"></label>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 49
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
        return "backend/session/reservations.html.twig";
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
        return array (  159 => 49,  153 => 45,  142 => 40,  136 => 39,  130 => 36,  126 => 35,  122 => 34,  113 => 28,  109 => 27,  102 => 23,  98 => 22,  94 => 20,  90 => 19,  77 => 8,  74 => 7,  64 => 6,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/session/profile.html.twig' %}

{% set page_title = 'Listado de reservaciones' %}
{% set active_tab = 'tab_reservations' %}

{% block subcontent %}
    {% if reservations | length > 0 %}
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th class=\"text-center\">Camilla/Silla</th>
                        <th class=\"text-center\">F. de reservación</th>
                        <th>Asistencia</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in reservations %}
                        <tr>
                            <td>
                                <a href=\"{{ path('backend_user_show', { 'id': reservation.user.id }) }}\" class=\"link-edit\">
                                    <u>{{ reservation.user }}</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td class=\"text-center\">{{ reservation.placeNumber }}</td>
                            <td class=\"text-center\">{{ reservation.createdAt | date('d/m/Y H:i') }}</td>
                            <td>
                                <div class=\"form-switch\">
                                    <input
                                        type=\"checkbox\"
                                        class=\"attended\"
                                        data-url=\"{{ path('backend_reservation_attended', {'id': reservation.id}) }}\"
                                        id=\"attended_{{ reservation.id }}\"
                                        name=\"attended[{{ reservation.id }}]\"
                                        switch=\"success\"
                                        value=\"1\"
                                        {% if reservation.attended %}checked=\"checked\"{% endif %} />
                                    <label for=\"attended_{{ reservation.id }}\" data-on-label=\"Si\" data-off-label=\"No\"></label>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        {{ include('backend/default/partials/not_records.html.twig') }}
    {% endif %}
{% endblock %}
", "backend/session/reservations.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session\\reservations.html.twig");
    }
}
