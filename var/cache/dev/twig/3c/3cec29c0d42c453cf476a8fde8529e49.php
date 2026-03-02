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

/* backend/user/transactions.html.twig */
class __TwigTemplate_493d3069b0006da15f9c6f9d14e415c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/transactions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/transactions.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout-ajax.html.twig", "backend/user/transactions.html.twig", 1);
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
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 4, $this->source); })())) > 0)) {
            // line 5
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Paquete</th>
                        <th>Modalidad</th>
                        <th class=\"text-right\">Monto</th>
                        <th>M. de pago</th>
                        <th class=\"text-center\">Estado</th>
                        <th class=\"text-center\">F. creación</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 20
                yield "                        ";
                // line 21
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 23
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                    <u>";
                // line 24
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 24), "html", null, true);
                yield "</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td>
                                ";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageTotalClasses", [], "any", false, false, false, 29), "html", null, true);
                yield " clase(s)
                            </td>
                            <td>
                                ";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageType", [], "any", false, false, false, 32)), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-right\">
                                \$";
                // line 35
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total", [], "any", false, false, false, 35)), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 38
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "chargeMethod", [], "any", false, false, false, 38)), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                <span class=\"label label-";
                // line 41
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 41)), "html", null, true);
                yield "\">
                                    ";
                // line 42
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 42)), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 46
                if (CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 46)) {
                    // line 47
                    yield "                                    ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 47), "d-m-Y H:i"), "html", null, true);
                    yield "
                                ";
                }
                // line 49
                yield "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                </tbody>
            </table>
        </div>

        ";
            // line 56
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 56, $this->source); })()));
            yield "
    ";
        } else {
            // line 58
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
    ";
        }
        // line 60
        yield "
    <script>
        \$('.pagination a').on('click', function (e) {
            e.preventDefault();
            let url = \$(this).prop('href');

            if ('' === url) {
                return;
            }

            \$.loader.show('#userTabContent');
            \$('#userTabContent').load(url);
        });
    </script>
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
        return "backend/user/transactions.html.twig";
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
        return array (  178 => 60,  172 => 58,  167 => 56,  161 => 52,  153 => 49,  147 => 47,  145 => 46,  138 => 42,  134 => 41,  128 => 38,  122 => 35,  116 => 32,  110 => 29,  102 => 24,  98 => 23,  94 => 21,  92 => 20,  88 => 19,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout-ajax.html.twig' %}

{% block content %}
    {% if transactions | length > 0 %}
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Paquete</th>
                        <th>Modalidad</th>
                        <th class=\"text-right\">Monto</th>
                        <th>M. de pago</th>
                        <th class=\"text-center\">Estado</th>
                        <th class=\"text-center\">F. creación</th>
                    </tr>
                </thead>
                <tbody>
                    {% for transaction in transactions %}
                        {# @var transaction \\App\\Entity\\Transaction #}
                        <tr>
                            <td>
                                <a href=\"{{ path('backend_transaction_show', { 'id': transaction.id }) }}\" class=\"link-edit\">
                                    <u>{{ transaction.id }}</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td>
                                {{ transaction.packageTotalClasses }} clase(s)
                            </td>
                            <td>
                                {{ transaction.packageType|PackageSessionType }}
                            </td>
                            <td class=\"text-right\">
                                \${{ transaction.total|number_format }}
                            </td>
                            <td>
                                {{ transaction.chargeMethod|ChargeMethodDescription }}
                            </td>
                            <td class=\"text-center\">
                                <span class=\"label label-{{ transaction.status|TransactionStatusLabel }}\">
                                    {{ transaction.status|TransactionStatusDescription }}
                                </span>
                            </td>
                            <td class=\"text-center\">
                                {% if transaction.createdAt %}
                                    {{ transaction.createdAt|date('d-m-Y H:i') }}
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        {{ knp_pagination_render(transactions) }}
    {% else %}
        {{ include('backend/default/partials/not_records.html.twig') }}
    {% endif %}

    <script>
        \$('.pagination a').on('click', function (e) {
            e.preventDefault();
            let url = \$(this).prop('href');

            if ('' === url) {
                return;
            }

            \$.loader.show('#userTabContent');
            \$('#userTabContent').load(url);
        });
    </script>
{% endblock %}
", "backend/user/transactions.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\transactions.html.twig");
    }
}
