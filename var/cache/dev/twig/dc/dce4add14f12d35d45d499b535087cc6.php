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

/* backend/coupon/show.html.twig */
class __TwigTemplate_2a6f5b12c6ba92aecac75cf190b6d35d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'section' => [$this, 'block_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/coupon/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/coupon/show.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/coupon/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 4
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_coupon_edit")) {
            // line 5
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 6
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-dark\">
                ";
            // line 7
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_coupon_edit"), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 13
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 14
        yield "    <div class=\"row\">
        ";
        // line 15
        yield from         $this->loadTemplate("backend/coupon/show.html.twig", "backend/coupon/show.html.twig", 15, "835467024")->unwrap()->yield(CoreExtension::arrayMerge($context, ["title" => "Datos Generales"]));
        // line 72
        yield "
        ";
        // line 73
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/_card_dates.html.twig", ["object" => (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 73, $this->source); })())]);
        yield "
    </div>

    ";
        // line 76
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_transaction")) {
            // line 77
            yield "        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Transacciones</h2>
                        <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"x_content\">
                        ";
            // line 86
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 86, $this->source); })())) > 0)) {
                // line 87
                yield "                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                    <tr>
                                        <th>#</th>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Paquete</th>
                                        <th>Modalidad</th>
                                        <th class=\"text-right\">Monto</th>
                                        <th>M. de pago</th>
                                        <th class=\"text-center\">Sucursal</th>
                                        <th class=\"text-center\">Estado</th>
                                        <th class=\"text-center\">F. creación</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 105, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                    // line 106
                    yield "                                        ";
                    // line 107
                    yield "                                        <tr>
                                            <td>";
                    // line 108
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 108), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 109
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "user", [], "any", false, false, false, 109), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 110
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "user", [], "any", false, false, false, 110), "email", [], "any", false, false, false, 110), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 111
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageTotalClasses", [], "any", false, false, false, 111), "html", null, true);
                    yield " clase(s)</td>
                                            <td>";
                    // line 112
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageType", [], "any", false, false, false, 112)), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">\$";
                    // line 113
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total", [], "any", false, false, false, 113), 2), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 114
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "chargeMethod", [], "any", false, false, false, 114)), "html", null, true);
                    yield "</td>
                                            <td class=\"text-center\">";
                    // line 115
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "branchOffice", [], "any", false, false, false, 115), "html", null, true);
                    yield "</td>
                                            <td class=\"text-center\">
                                                <span class=\"label label-";
                    // line 117
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 117)), "html", null, true);
                    yield "\">
                                                    ";
                    // line 118
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 118)), "html", null, true);
                    yield "
                                                </span>
                                            </td>
                                            <td class=\"text-center\">
                                                ";
                    // line 122
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 122)) {
                        // line 123
                        yield "                                                    ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 123), "Y-m-d H:i:s"), "html", null, true);
                        yield "
                                                ";
                    }
                    // line 125
                    yield "                                            </td>
                                            <td>
                                                ";
                    // line 127
                    if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_transaction_show")) {
                        // line 128
                        yield "                                                    <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                        yield "\" class=\"btn btn-success btn-xs\">
                                                        Detalle
                                                    </a>
                                                ";
                    }
                    // line 132
                    yield "                                            </td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                yield "                                    </tbody>
                                </table>
                            </div>
                        ";
            } else {
                // line 139
                yield "                            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
                yield "
                        ";
            }
            // line 141
            yield "                    </div>

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
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
        return "backend/coupon/show.html.twig";
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
        return array (  250 => 141,  244 => 139,  238 => 135,  230 => 132,  222 => 128,  220 => 127,  216 => 125,  210 => 123,  208 => 122,  201 => 118,  197 => 117,  192 => 115,  188 => 114,  184 => 113,  180 => 112,  176 => 111,  172 => 110,  168 => 109,  164 => 108,  161 => 107,  159 => 106,  155 => 105,  135 => 87,  133 => 86,  122 => 77,  120 => 76,  114 => 73,  111 => 72,  109 => 15,  106 => 14,  96 => 13,  80 => 7,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% block actions %}
    {% if is_allowed_route('backend_coupon_edit') %}
        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"{{ path('backend_coupon_edit', {'id': coupon.id}) }}\" class=\"btn btn-sm btn-dark\">
                {{ 'main.backend_coupon_edit'|trans }}
            </a>
        </div>
    {% endif %}
{% endblock %}

{% block section %}
    <div class=\"row\">
        {% embed 'backend/default/_card_table.html.twig' with {'title': 'Datos Generales'} %}
            {% block tbody %}
                <tr>
                    <th>{{ 'label.name'|trans }}</th>
                    <td>{{ coupon.name }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.code'|trans }}</th>
                    <td>{{ coupon.code }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.date_start'|trans }}</th>
                    <td>{{ coupon.dateStart ? coupon.dateStart|date('d/m/Y') : '--' }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.date_end'|trans }}</th>
                    <td>{{ coupon.dateEnd ? coupon.dateEnd|date('d/m/Y') : '--' }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.discount'|trans }}</th>
                    <td>{{ coupon.discount }} %</td>
                </tr>
                <tr>
                    <th>{{ 'label.uses_total'|trans }}</th>
                    <td>{{ coupon.usesTotal }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.used'|trans }}</th>
                    <td>{{ coupon.used }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.packages'|trans }}</th>
                    <td>
                        <ul class=\"to_do\">
                        {% for package in coupon.packages %}
                            <li>
                                {{ package.type|PackageSessionType }} -
                                {{ package.isUnlimited ? '∞' : package.totalClasses }}
                                clase(s)
                                {{ package.altText ? ' - ' ~ package.altText }}
                            </li>
                        {% endfor %}
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>{{ 'label.apply_special_price'|trans }}</th>
                    <td>
                        {% if coupon.applySpecialPrice %}
                            <span class=\"label label-primary\">Sí</span>
                        {% else %}
                            <span class=\"label label-danger\">No</span>
                        {% endif %}
                    </td>
                </tr>
            {% endblock %}
        {% endembed %}

        {{ include('backend/default/_card_dates.html.twig', {'object': coupon}) }}
    </div>

    {% if is_allowed_route('backend_transaction') %}
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Transacciones</h2>
                        <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"x_content\">
                        {% if transactions|length > 0 %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                    <tr>
                                        <th>#</th>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Paquete</th>
                                        <th>Modalidad</th>
                                        <th class=\"text-right\">Monto</th>
                                        <th>M. de pago</th>
                                        <th class=\"text-center\">Sucursal</th>
                                        <th class=\"text-center\">Estado</th>
                                        <th class=\"text-center\">F. creación</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for transaction in transactions %}
                                        {# transaction \\App\\Entity\\Transaction #}
                                        <tr>
                                            <td>{{ transaction.id }}</td>
                                            <td>{{ transaction.user }}</td>
                                            <td>{{ transaction.user.email }}</td>
                                            <td>{{ transaction.packageTotalClasses }} clase(s)</td>
                                            <td>{{ transaction.packageType|PackageSessionType }}</td>
                                            <td class=\"text-right\">\${{ transaction.total|number_format(2) }}</td>
                                            <td>{{ transaction.chargeMethod|ChargeMethodDescription }}</td>
                                            <td class=\"text-center\">{{ transaction.branchOffice }}</td>
                                            <td class=\"text-center\">
                                                <span class=\"label label-{{ transaction.status|TransactionStatusLabel }}\">
                                                    {{ transaction.status|TransactionStatusDescription }}
                                                </span>
                                            </td>
                                            <td class=\"text-center\">
                                                {% if transaction.createdAt %}
                                                    {{ transaction.createdAt|date('Y-m-d H:i:s') }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if is_allowed_route('backend_transaction_show') %}
                                                    <a href=\"{{ path('backend_transaction_show', {'id': transaction.id}) }}\" class=\"btn btn-success btn-xs\">
                                                        Detalle
                                                    </a>
                                                {% endif %}
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        {% else %}
                            {{ include('backend/default/partials/not_records.html.twig') }}
                        {% endif %}
                    </div>

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}", "backend/coupon/show.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\coupon\\show.html.twig");
    }
}


/* backend/coupon/show.html.twig */
class __TwigTemplate_2a6f5b12c6ba92aecac75cf190b6d35d___835467024 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "backend/default/_card_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/coupon/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/coupon/show.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/_card_table.html.twig", "backend/coupon/show.html.twig", 15);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 17
        yield "                <tr>
                    <th>";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
        yield "</th>
                    <td>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.code"), "html", null, true);
        yield "</th>
                    <td>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 23, $this->source); })()), "code", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_start"), "html", null, true);
        yield "</th>
                    <td>";
        // line 27
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 27, $this->source); })()), "dateStart", [], "any", false, false, false, 27)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 27, $this->source); })()), "dateStart", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true)) : (yield "--"));
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_end"), "html", null, true);
        yield "</th>
                    <td>";
        // line 31
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 31, $this->source); })()), "dateEnd", [], "any", false, false, false, 31)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 31, $this->source); })()), "dateEnd", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true)) : (yield "--"));
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.discount"), "html", null, true);
        yield "</th>
                    <td>";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 35, $this->source); })()), "discount", [], "any", false, false, false, 35), "html", null, true);
        yield " %</td>
                </tr>
                <tr>
                    <th>";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.uses_total"), "html", null, true);
        yield "</th>
                    <td>";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 39, $this->source); })()), "usesTotal", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.used"), "html", null, true);
        yield "</th>
                    <td>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 43, $this->source); })()), "used", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 46
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.packages"), "html", null, true);
        yield "</th>
                    <td>
                        <ul class=\"to_do\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 49, $this->source); })()), "packages", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 50
            yield "                            <li>
                                ";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "type", [], "any", false, false, false, 51)), "html", null, true);
            yield " -
                                ";
            // line 52
            ((CoreExtension::getAttribute($this->env, $this->source, $context["package"], "isUnlimited", [], "any", false, false, false, 52)) ? (yield "∞") : (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 52), "html", null, true)));
            yield "
                                clase(s)
                                ";
            // line 54
            ((CoreExtension::getAttribute($this->env, $this->source, $context["package"], "altText", [], "any", false, false, false, 54)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (" - " . CoreExtension::getAttribute($this->env, $this->source, $context["package"], "altText", [], "any", false, false, false, 54)), "html", null, true)) : (yield ""));
            yield "
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.apply_special_price"), "html", null, true);
        yield "</th>
                    <td>
                        ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 63, $this->source); })()), "applySpecialPrice", [], "any", false, false, false, 63)) {
            // line 64
            yield "                            <span class=\"label label-primary\">Sí</span>
                        ";
        } else {
            // line 66
            yield "                            <span class=\"label label-danger\">No</span>
                        ";
        }
        // line 68
        yield "                    </td>
                </tr>
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
        return "backend/coupon/show.html.twig";
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
        return array (  623 => 68,  619 => 66,  615 => 64,  613 => 63,  608 => 61,  602 => 57,  593 => 54,  588 => 52,  584 => 51,  581 => 50,  577 => 49,  571 => 46,  565 => 43,  561 => 42,  555 => 39,  551 => 38,  545 => 35,  541 => 34,  535 => 31,  531 => 30,  525 => 27,  521 => 26,  515 => 23,  511 => 22,  505 => 19,  501 => 18,  498 => 17,  488 => 16,  465 => 15,  250 => 141,  244 => 139,  238 => 135,  230 => 132,  222 => 128,  220 => 127,  216 => 125,  210 => 123,  208 => 122,  201 => 118,  197 => 117,  192 => 115,  188 => 114,  184 => 113,  180 => 112,  176 => 111,  172 => 110,  168 => 109,  164 => 108,  161 => 107,  159 => 106,  155 => 105,  135 => 87,  133 => 86,  122 => 77,  120 => 76,  114 => 73,  111 => 72,  109 => 15,  106 => 14,  96 => 13,  80 => 7,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% block actions %}
    {% if is_allowed_route('backend_coupon_edit') %}
        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"{{ path('backend_coupon_edit', {'id': coupon.id}) }}\" class=\"btn btn-sm btn-dark\">
                {{ 'main.backend_coupon_edit'|trans }}
            </a>
        </div>
    {% endif %}
{% endblock %}

{% block section %}
    <div class=\"row\">
        {% embed 'backend/default/_card_table.html.twig' with {'title': 'Datos Generales'} %}
            {% block tbody %}
                <tr>
                    <th>{{ 'label.name'|trans }}</th>
                    <td>{{ coupon.name }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.code'|trans }}</th>
                    <td>{{ coupon.code }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.date_start'|trans }}</th>
                    <td>{{ coupon.dateStart ? coupon.dateStart|date('d/m/Y') : '--' }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.date_end'|trans }}</th>
                    <td>{{ coupon.dateEnd ? coupon.dateEnd|date('d/m/Y') : '--' }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.discount'|trans }}</th>
                    <td>{{ coupon.discount }} %</td>
                </tr>
                <tr>
                    <th>{{ 'label.uses_total'|trans }}</th>
                    <td>{{ coupon.usesTotal }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.used'|trans }}</th>
                    <td>{{ coupon.used }}</td>
                </tr>
                <tr>
                    <th>{{ 'label.packages'|trans }}</th>
                    <td>
                        <ul class=\"to_do\">
                        {% for package in coupon.packages %}
                            <li>
                                {{ package.type|PackageSessionType }} -
                                {{ package.isUnlimited ? '∞' : package.totalClasses }}
                                clase(s)
                                {{ package.altText ? ' - ' ~ package.altText }}
                            </li>
                        {% endfor %}
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>{{ 'label.apply_special_price'|trans }}</th>
                    <td>
                        {% if coupon.applySpecialPrice %}
                            <span class=\"label label-primary\">Sí</span>
                        {% else %}
                            <span class=\"label label-danger\">No</span>
                        {% endif %}
                    </td>
                </tr>
            {% endblock %}
        {% endembed %}

        {{ include('backend/default/_card_dates.html.twig', {'object': coupon}) }}
    </div>

    {% if is_allowed_route('backend_transaction') %}
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Transacciones</h2>
                        <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"x_content\">
                        {% if transactions|length > 0 %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                    <tr>
                                        <th>#</th>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Paquete</th>
                                        <th>Modalidad</th>
                                        <th class=\"text-right\">Monto</th>
                                        <th>M. de pago</th>
                                        <th class=\"text-center\">Sucursal</th>
                                        <th class=\"text-center\">Estado</th>
                                        <th class=\"text-center\">F. creación</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for transaction in transactions %}
                                        {# transaction \\App\\Entity\\Transaction #}
                                        <tr>
                                            <td>{{ transaction.id }}</td>
                                            <td>{{ transaction.user }}</td>
                                            <td>{{ transaction.user.email }}</td>
                                            <td>{{ transaction.packageTotalClasses }} clase(s)</td>
                                            <td>{{ transaction.packageType|PackageSessionType }}</td>
                                            <td class=\"text-right\">\${{ transaction.total|number_format(2) }}</td>
                                            <td>{{ transaction.chargeMethod|ChargeMethodDescription }}</td>
                                            <td class=\"text-center\">{{ transaction.branchOffice }}</td>
                                            <td class=\"text-center\">
                                                <span class=\"label label-{{ transaction.status|TransactionStatusLabel }}\">
                                                    {{ transaction.status|TransactionStatusDescription }}
                                                </span>
                                            </td>
                                            <td class=\"text-center\">
                                                {% if transaction.createdAt %}
                                                    {{ transaction.createdAt|date('Y-m-d H:i:s') }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if is_allowed_route('backend_transaction_show') %}
                                                    <a href=\"{{ path('backend_transaction_show', {'id': transaction.id}) }}\" class=\"btn btn-success btn-xs\">
                                                        Detalle
                                                    </a>
                                                {% endif %}
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        {% else %}
                            {{ include('backend/default/partials/not_records.html.twig') }}
                        {% endif %}
                    </div>

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}", "backend/coupon/show.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\coupon\\show.html.twig");
    }
}
