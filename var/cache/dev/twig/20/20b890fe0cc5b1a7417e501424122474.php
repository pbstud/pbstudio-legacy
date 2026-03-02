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

/* profile/transaction_list.html.twig */
class __TwigTemplate_47cf001ee53ab9bfba5e92f3434a0786 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/transaction_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/transaction_list.html.twig"));

        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/transaction_list.html.twig", 1);
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

        yield "Mis transacciones | ";
        
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
            <h2>Transacciones</h2>
            <div class=\"contained_table\">
                <table>
                    <thead>
                    <tr>
                        <td>Paquete</td>
                        <td>Modalidad</td>
                        <td>Costo</td>
                        <td>Método de pago</td>
                        <td>Fecha</td>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            yield "                        <tr>
                            <td>
                                ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageIsUnlimited", [], "any", false, false, false, 24)) {
                // line 25
                yield "                                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "package", [], "any", false, false, false, 25), "altText", [], "any", false, false, false, 25), "html", null, true);
                yield "
                                ";
            } else {
                // line 27
                yield "                                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageTotalClasses", [], "any", false, false, false, 27), "html", null, true);
                yield " clases
                                ";
            }
            // line 29
            yield "                            </td>
                            <td>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageType", [], "any", false, false, false, 30)), "html", null, true);
            yield "</td>
                            <td>\$";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "total", [], "any", false, false, false, 31)), "html", null, true);
            yield "</td>
                            <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "chargeMethod", [], "any", false, false, false, 32)), "html", null, true);
            ((CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "cardLast4", [], "any", false, false, false, 32)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ("-" . CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "cardLast4", [], "any", false, false, false, 32)), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 33), "d/m/Y h:i"), "html", null, true);
            yield "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "                        <tr>
                            <td colspan=\"6\">
                                Sin registros por mostrar
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 49
    public function block_account_aside_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_aside_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_aside_content"));

        // line 50
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
        return "profile/transaction_list.html.twig";
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
        return array (  192 => 50,  182 => 49,  166 => 42,  155 => 36,  147 => 33,  142 => 32,  138 => 31,  134 => 30,  131 => 29,  125 => 27,  119 => 25,  117 => 24,  113 => 22,  108 => 21,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/layout.html.twig' %}

{% block page_title %}Mis transacciones | {% endblock %}

{% block account_content %}
    <div class=\"row\">
        <div class=\"content\">
            <h2>Transacciones</h2>
            <div class=\"contained_table\">
                <table>
                    <thead>
                    <tr>
                        <td>Paquete</td>
                        <td>Modalidad</td>
                        <td>Costo</td>
                        <td>Método de pago</td>
                        <td>Fecha</td>
                    </tr>
                    </thead>
                    <tbody>
                    {% for entity in transactions %}
                        <tr>
                            <td>
                                {% if entity.packageIsUnlimited %}
                                    {{ entity.package.altText }}
                                {% else %}
                                    {{ entity.packageTotalClasses }} clases
                                {% endif %}
                            </td>
                            <td>{{ entity.packageType|PackageSessionType }}</td>
                            <td>\${{ entity.total|number_format }}</td>
                            <td>{{ entity.chargeMethod|ChargeMethodDescription }}{{ entity.cardLast4 ? '-' ~ entity.cardLast4 : '' }}</td>
                            <td>{{ entity.createdAt | date('d/m/Y h:i') }}</td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\">
                                Sin registros por mostrar
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

{% block account_aside_content %}
    {{ include('package/_aside.html.twig') }}
{% endblock %}
", "profile/transaction_list.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\transaction_list.html.twig");
    }
}
