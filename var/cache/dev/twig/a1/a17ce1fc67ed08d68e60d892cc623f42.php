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

/* profile/sessions_available.html.twig */
class __TwigTemplate_b386fe4b4cd457a8d24554e04eb13083 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/sessions_available.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/sessions_available.html.twig"));

        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/sessions_available.html.twig", 1);
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

        yield "Mis clases disponibles | ";
        
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
            <h2>Clases disponibles</h2>

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 11
            yield "                <div class=\"contained_table\">
                    <table>
                        <thead>
                            <tr>
                                <td>Concepto</td>
                                <td>Detalle</td>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>Paquete</td>
                                    <td>
                                        ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "package_is_unlimited", [], "array", false, false, false, 23)) {
                // line 24
                yield "                                            ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "package_alt_text", [], "array", false, false, false, 24), "html", null, true);
                yield "
                                        ";
            } else {
                // line 26
                yield "                                            ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "package_total_sessions", [], "array", false, false, false, 26), "html", null, true);
                yield " clase(s)
                                        ";
            }
            // line 28
            yield "                                    </td>
                                </tr>
                                <tr>
                                    <td>Modalidad</td>
                                    <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "package_type", [], "array", false, false, false, 32), "html", null, true);
            yield "</td>
                                </tr>
                                <tr>
                                    <td>Clases disponibles</td>
                                    <td>
                                        ";
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "package_is_unlimited", [], "array", false, false, false, 37)) {
                // line 38
                yield "                                            (&infin;) Ilimitadas
                                        ";
            } else {
                // line 40
                yield "                                            ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total_sessions_available", [], "array", false, false, false, 40), "html", null, true);
                yield "
                                        ";
            }
            // line 42
            yield "                                    </td>
                                </tr>
                                <tr>
                                    <td>Clases tomadas</td>
                                    <td>";
            // line 46
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total_sessions_used", [], "array", false, false, false, 46), "html", null, true);
            yield "</td>
                                </tr>
                                <tr>
                                    <td>Clases reservadas</td>
                                    <td>";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total_reserved_sessions", [], "array", false, false, false, 50), "html", null, true);
            yield "</td>
                                </tr>
                                <tr>
                                    <td>Vigencia hasta</td>
                                    <td>";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "expiration_at", [], "array", false, false, false, 54), "d/m/Y"), "html", null, true);
            yield "</td>
                                </tr>

                        </tbody>
                    </table>
                </div>
                <br>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            yield "                <p>
                    Sin registros por mostrar
                </p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "
            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn reserve-class-toggle\">Reservar clase</a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 72
    public function block_account_aside_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_aside_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_aside_content"));

        // line 73
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
        return "profile/sessions_available.html.twig";
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
        return array (  226 => 73,  216 => 72,  201 => 67,  198 => 66,  189 => 62,  176 => 54,  169 => 50,  162 => 46,  156 => 42,  150 => 40,  146 => 38,  144 => 37,  136 => 32,  130 => 28,  124 => 26,  118 => 24,  116 => 23,  102 => 11,  97 => 10,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/layout.html.twig' %}

{% block page_title %}Mis clases disponibles | {% endblock %}

{% block account_content %}
    <div class=\"row\">
        <div class=\"content\">
            <h2>Clases disponibles</h2>

            {% for transaction in transactions %}
                <div class=\"contained_table\">
                    <table>
                        <thead>
                            <tr>
                                <td>Concepto</td>
                                <td>Detalle</td>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>Paquete</td>
                                    <td>
                                        {% if transaction['package_is_unlimited'] %}
                                            {{ transaction['package_alt_text'] }}
                                        {% else %}
                                            {{ transaction['package_total_sessions'] }} clase(s)
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Modalidad</td>
                                    <td>{{ transaction['package_type'] }}</td>
                                </tr>
                                <tr>
                                    <td>Clases disponibles</td>
                                    <td>
                                        {% if transaction['package_is_unlimited'] %}
                                            (&infin;) Ilimitadas
                                        {% else %}
                                            {{ transaction['total_sessions_available'] }}
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Clases tomadas</td>
                                    <td>{{ transaction['total_sessions_used'] }}</td>
                                </tr>
                                <tr>
                                    <td>Clases reservadas</td>
                                    <td>{{ transaction['total_reserved_sessions'] }}</td>
                                </tr>
                                <tr>
                                    <td>Vigencia hasta</td>
                                    <td>{{ transaction['expiration_at']|date('d/m/Y') }}</td>
                                </tr>

                        </tbody>
                    </table>
                </div>
                <br>
            {% else %}
                <p>
                    Sin registros por mostrar
                </p>
            {% endfor %}

            <a href=\"{{ path('reservation_calendar') }}\" class=\"btn reserve-class-toggle\">Reservar clase</a>
        </div>
    </div>
{% endblock %}

{% block account_aside_content %}
    {{ include('package/_aside.html.twig') }}
{% endblock %}
", "profile/sessions_available.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\sessions_available.html.twig");
    }
}
