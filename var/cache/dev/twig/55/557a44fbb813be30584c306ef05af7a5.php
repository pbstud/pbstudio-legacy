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

/* backend/transaction/index.html.twig */
class __TwigTemplate_2f59b4f2838940e23128a5e7184c1d97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/index.html.twig"));

        // line 3
        $context["page_section"] = "Transacciones";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/transaction/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Listado de Transacciones";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        yield "    ";
        yield from         $this->loadTemplate("backend/transaction/index.html.twig", "backend/transaction/index.html.twig", 7, "749990352")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 7, $this->source); })()), "page_title" =>         $this->unwrap()->renderBlock("title", $context, $blocks)]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/transaction/index.html.twig";
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
        return array (  93 => 7,  83 => 6,  63 => 4,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Transacciones' %}
{% block title %}Listado de Transacciones{% endblock %}

{% block content %}
    {% embed 'backend/default/embed/list_common.html.twig' with { 'page_section': page_section, 'page_title': block('title') } %}
        {% block body_filters %}
            <form action=\"{{ path('backend_transaction') }}\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_search\">Buscar:</label>
                            <input type=\"text\" id=\"filter_search\" name=\"filter_search\" class=\"form-control\" placeholder=\"Buscar por Id, Nombre o Email\" value=\"{{ filter_search }}\" />
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_status\">Estado:</label>
                            <select id=\"filter_status\" name=\"filter_status\" class=\"form-control\" data-current=\"{{ filter_status }}\">
                                <option value=\"\">- Todos -</option>
                                {% for status, label in statusChoices %}
                                    <option value=\"{{ status }}\">{{ status|TransactionStatusDescription }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_date_start\">Fecha de inicio:</label>
                            <input type=\"text\" id=\"filter_date_start\" name=\"filter_date_start\" class=\"form-control datepicker has-feedback-right\" value=\"{{ filter_date_start }}\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_branchOffice\">Sucursal</label>
                            <select id=\"filter_branchOffice\" name=\"filter_branchOffice\" class=\"form-control\" data-current=\"{{ filter_branchOffice }}\">
                                <option value=\"\">- Todos -</option>
                                {% for branchOffice in branchOffices %}
                                    <option value=\"{{ branchOffice.id }}\">{{ branchOffice.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_date_end\">Fecha de término:</label>
                            <input type=\"text\" id=\"filter_date_end\" name=\"filter_date_end\" class=\"form-control datepicker has-feedback-right\" value=\"{{ filter_date_end }}\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_package\">Paquete</label>
                            <select id=\"filter_package\" name=\"filter_package\" class=\"form-control\" data-current=\"{{ filter_package }}\">
                                <option value=\"\">- Todos -</option>
                                {% for package in packages %}
                                    <option value=\"{{ package.id }}\">{{ package.totalClasses }} clase(s) {{ package.type|PackageSessionType }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_charge_method\">Método de Pago</label>
                            <select id=\"filter_charge_method\" name=\"filter_charge_method\" class=\"form-control\" data-current=\"{{ filter_charge_method }}\">
                                <option value=\"\">- Todos -</option>
                                {% for key, chargeMethod in chargeMethods %}
                                    <option value=\"{{ key }}\">{{ chargeMethod|trans }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_discount\">Descuento</label>
                            <select id=\"filter_discount\" name=\"filter_discount\" class=\"form-control\" data-current=\"{{ filter_discount }}\">
                                <option value=\"\">- Todos -</option>
                                {% for key in filterDiscount %}
                                    <option value=\"{{ key }}\">{{ ('filter.transaction_discount.' ~ key)|trans }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <label>&nbsp;</label>
                        <div>
                            {% if pagination | length > 0 %}
                                <a href=\"{{ url_export }}\" class=\"btn btn-default\">Exportar</a>
                            {% endif %}
                            <button type=\"submit\" class=\"btn btn-dark\">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        {% endblock %}

        {% block body %}
            {% if pagination | length > 0 %}
                <div class=\"alert alert-success\" role=\"alert\">
                    <strong>Total: \${{ total|number_format(2) }}</strong>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Paquete</th>
                                <th>Modalidad</th>
                                <th class=\"text-right\">Monto</th>
                                <th>Cupón</th>
                                <th>M. de pago</th>
                                <th class=\"text-center\">Sucursal</th>
                                <th class=\"text-center\">Estado</th>
                                <th class=\"text-center\">F. creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for transaction in pagination %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('backend_transaction_show', { 'id': transaction.id }) }}\" class=\"link-edit\">
                                            <u>{{ transaction.id }}</u>
                                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {{ transaction.user }}
                                    </td>
                                    <td>
                                        {{ transaction.user.email }}
                                    </td>
                                    <td>
                                        {{ transaction.packageTotalClasses }} clase(s)
                                    </td>
                                    <td>
                                        {{ transaction.packageType|PackageSessionType }}
                                    </td>
                                    <td class=\"text-right\">
                                        \${{ transaction.total|number_format(2) }}
                                    </td>
                                    <td>{{ transaction.coupon.code|default('') }}</td>
                                    <td>
                                        {{ transaction.chargeMethod|ChargeMethodDescription }}
                                    </td>
                                    <td class=\"text-center\">
                                        {{ transaction.branchOffice }}
                                    </td>
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
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                {{ include('backend/default/partials/not_records.html.twig') }}
            {% endif %}
        {% endblock %}

        {% block footer %}
            {% if pagination | length > 0 %}
                {{ knp_pagination_render(pagination) }}
            {% endif %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "backend/transaction/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\transaction\\index.html.twig");
    }
}


/* backend/transaction/index.html.twig */
class __TwigTemplate_2f59b4f2838940e23128a5e7184c1d97___749990352 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_filters' => [$this, 'block_body_filters'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/embed/list_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/list_common.html.twig", "backend/transaction/index.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_body_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_filters"));

        // line 9
        yield "            <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction");
        yield "\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_search\">Buscar:</label>
                            <input type=\"text\" id=\"filter_search\" name=\"filter_search\" class=\"form-control\" placeholder=\"Buscar por Id, Nombre o Email\" value=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_search"]) || array_key_exists("filter_search", $context) ? $context["filter_search"] : (function () { throw new RuntimeError('Variable "filter_search" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" />
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_status\">Estado:</label>
                            <select id=\"filter_status\" name=\"filter_status\" class=\"form-control\" data-current=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_status"]) || array_key_exists("filter_status", $context) ? $context["filter_status"] : (function () { throw new RuntimeError('Variable "filter_status" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusChoices"]) || array_key_exists("statusChoices", $context) ? $context["statusChoices"] : (function () { throw new RuntimeError('Variable "statusChoices" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["status"] => $context["label"]) {
            // line 22
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["status"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription($context["status"]), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_date_start\">Fecha de inicio:</label>
                            <input type=\"text\" id=\"filter_date_start\" name=\"filter_date_start\" class=\"form-control datepicker has-feedback-right\" value=\"";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_date_start"]) || array_key_exists("filter_date_start", $context) ? $context["filter_date_start"] : (function () { throw new RuntimeError('Variable "filter_date_start" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_branchOffice\">Sucursal</label>
                            <select id=\"filter_branchOffice\" name=\"filter_branchOffice\" class=\"form-control\" data-current=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_branchOffice"]) || array_key_exists("filter_branchOffice", $context) ? $context["filter_branchOffice"] : (function () { throw new RuntimeError('Variable "filter_branchOffice" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["branchOffices"]) || array_key_exists("branchOffices", $context) ? $context["branchOffices"] : (function () { throw new RuntimeError('Variable "branchOffices" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 42
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 42), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_date_end\">Fecha de término:</label>
                            <input type=\"text\" id=\"filter_date_end\" name=\"filter_date_end\" class=\"form-control datepicker has-feedback-right\" value=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_date_end"]) || array_key_exists("filter_date_end", $context) ? $context["filter_date_end"] : (function () { throw new RuntimeError('Variable "filter_date_end" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_package\">Paquete</label>
                            <select id=\"filter_package\" name=\"filter_package\" class=\"form-control\" data-current=\"";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_package"]) || array_key_exists("filter_package", $context) ? $context["filter_package"] : (function () { throw new RuntimeError('Variable "filter_package" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 62
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 62), "html", null, true);
            yield " clase(s) ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "type", [], "any", false, false, false, 62)), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_charge_method\">Método de Pago</label>
                            <select id=\"filter_charge_method\" name=\"filter_charge_method\" class=\"form-control\" data-current=\"";
        // line 71
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_charge_method"]) || array_key_exists("filter_charge_method", $context) ? $context["filter_charge_method"] : (function () { throw new RuntimeError('Variable "filter_charge_method" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chargeMethods"]) || array_key_exists("chargeMethods", $context) ? $context["chargeMethods"] : (function () { throw new RuntimeError('Variable "chargeMethods" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["chargeMethod"]) {
            // line 74
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["chargeMethod"]), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['chargeMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_discount\">Descuento</label>
                            <select id=\"filter_discount\" name=\"filter_discount\" class=\"form-control\" data-current=\"";
        // line 83
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_discount"]) || array_key_exists("filter_discount", $context) ? $context["filter_discount"] : (function () { throw new RuntimeError('Variable "filter_discount" does not exist.', 83, $this->source); })()), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filterDiscount"]) || array_key_exists("filterDiscount", $context) ? $context["filterDiscount"] : (function () { throw new RuntimeError('Variable "filterDiscount" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 86
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("filter.transaction_discount." . $context["key"])), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <label>&nbsp;</label>
                        <div>
                            ";
        // line 95
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 95, $this->source); })())) > 0)) {
            // line 96
            yield "                                <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["url_export"]) || array_key_exists("url_export", $context) ? $context["url_export"] : (function () { throw new RuntimeError('Variable "url_export" does not exist.', 96, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-default\">Exportar</a>
                            ";
        }
        // line 98
        yield "                            <button type=\"submit\" class=\"btn btn-dark\">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 105
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 106
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 106, $this->source); })())) > 0)) {
            // line 107
            yield "                <div class=\"alert alert-success\" role=\"alert\">
                    <strong>Total: \$";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 108, $this->source); })()), 2), "html", null, true);
            yield "</strong>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Paquete</th>
                                <th>Modalidad</th>
                                <th class=\"text-right\">Monto</th>
                                <th>Cupón</th>
                                <th>M. de pago</th>
                                <th class=\"text-center\">Sucursal</th>
                                <th class=\"text-center\">Estado</th>
                                <th class=\"text-center\">F. creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 129, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 130
                yield "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 132
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                            <u>";
                // line 133
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 133), "html", null, true);
                yield "</u>
                                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
                                        ";
                // line 138
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "user", [], "any", false, false, false, 138), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 141
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "user", [], "any", false, false, false, 141), "email", [], "any", false, false, false, 141), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 144
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageTotalClasses", [], "any", false, false, false, 144), "html", null, true);
                yield " clase(s)
                                    </td>
                                    <td>
                                        ";
                // line 147
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageType", [], "any", false, false, false, 147)), "html", null, true);
                yield "
                                    </td>
                                    <td class=\"text-right\">
                                        \$";
                // line 150
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total", [], "any", false, false, false, 150), 2), "html", null, true);
                yield "
                                    </td>
                                    <td>";
                // line 152
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "coupon", [], "any", false, true, false, 152), "code", [], "any", true, true, false, 152)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "coupon", [], "any", false, true, false, 152), "code", [], "any", false, false, false, 152), "")) : ("")), "html", null, true);
                yield "</td>
                                    <td>
                                        ";
                // line 154
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "chargeMethod", [], "any", false, false, false, 154)), "html", null, true);
                yield "
                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 157
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "branchOffice", [], "any", false, false, false, 157), "html", null, true);
                yield "
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"label label-";
                // line 160
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 160)), "html", null, true);
                yield "\">
                                            ";
                // line 161
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 161)), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 165
                if (CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 165)) {
                    // line 166
                    yield "                                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 166), "Y-m-d H:i:s"), "html", null, true);
                    yield "
                                        ";
                }
                // line 168
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 175
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
            ";
        }
        // line 177
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 179
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 180
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 180, $this->source); })())) > 0)) {
            // line 181
            yield "                ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 181, $this->source); })()));
            yield "
            ";
        }
        // line 183
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/transaction/index.html.twig";
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
        return array (  759 => 183,  753 => 181,  750 => 180,  740 => 179,  729 => 177,  723 => 175,  717 => 171,  709 => 168,  703 => 166,  701 => 165,  694 => 161,  690 => 160,  684 => 157,  678 => 154,  673 => 152,  668 => 150,  662 => 147,  656 => 144,  650 => 141,  644 => 138,  636 => 133,  632 => 132,  628 => 130,  624 => 129,  600 => 108,  597 => 107,  594 => 106,  584 => 105,  568 => 98,  562 => 96,  560 => 95,  551 => 88,  540 => 86,  536 => 85,  531 => 83,  522 => 76,  511 => 74,  507 => 73,  502 => 71,  493 => 64,  480 => 62,  476 => 61,  471 => 59,  460 => 51,  451 => 44,  440 => 42,  436 => 41,  431 => 39,  420 => 31,  411 => 24,  400 => 22,  396 => 21,  391 => 19,  383 => 14,  374 => 9,  364 => 8,  93 => 7,  83 => 6,  63 => 4,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Transacciones' %}
{% block title %}Listado de Transacciones{% endblock %}

{% block content %}
    {% embed 'backend/default/embed/list_common.html.twig' with { 'page_section': page_section, 'page_title': block('title') } %}
        {% block body_filters %}
            <form action=\"{{ path('backend_transaction') }}\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_search\">Buscar:</label>
                            <input type=\"text\" id=\"filter_search\" name=\"filter_search\" class=\"form-control\" placeholder=\"Buscar por Id, Nombre o Email\" value=\"{{ filter_search }}\" />
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_status\">Estado:</label>
                            <select id=\"filter_status\" name=\"filter_status\" class=\"form-control\" data-current=\"{{ filter_status }}\">
                                <option value=\"\">- Todos -</option>
                                {% for status, label in statusChoices %}
                                    <option value=\"{{ status }}\">{{ status|TransactionStatusDescription }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_date_start\">Fecha de inicio:</label>
                            <input type=\"text\" id=\"filter_date_start\" name=\"filter_date_start\" class=\"form-control datepicker has-feedback-right\" value=\"{{ filter_date_start }}\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_branchOffice\">Sucursal</label>
                            <select id=\"filter_branchOffice\" name=\"filter_branchOffice\" class=\"form-control\" data-current=\"{{ filter_branchOffice }}\">
                                <option value=\"\">- Todos -</option>
                                {% for branchOffice in branchOffices %}
                                    <option value=\"{{ branchOffice.id }}\">{{ branchOffice.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_date_end\">Fecha de término:</label>
                            <input type=\"text\" id=\"filter_date_end\" name=\"filter_date_end\" class=\"form-control datepicker has-feedback-right\" value=\"{{ filter_date_end }}\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_package\">Paquete</label>
                            <select id=\"filter_package\" name=\"filter_package\" class=\"form-control\" data-current=\"{{ filter_package }}\">
                                <option value=\"\">- Todos -</option>
                                {% for package in packages %}
                                    <option value=\"{{ package.id }}\">{{ package.totalClasses }} clase(s) {{ package.type|PackageSessionType }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_charge_method\">Método de Pago</label>
                            <select id=\"filter_charge_method\" name=\"filter_charge_method\" class=\"form-control\" data-current=\"{{ filter_charge_method }}\">
                                <option value=\"\">- Todos -</option>
                                {% for key, chargeMethod in chargeMethods %}
                                    <option value=\"{{ key }}\">{{ chargeMethod|trans }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_discount\">Descuento</label>
                            <select id=\"filter_discount\" name=\"filter_discount\" class=\"form-control\" data-current=\"{{ filter_discount }}\">
                                <option value=\"\">- Todos -</option>
                                {% for key in filterDiscount %}
                                    <option value=\"{{ key }}\">{{ ('filter.transaction_discount.' ~ key)|trans }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <label>&nbsp;</label>
                        <div>
                            {% if pagination | length > 0 %}
                                <a href=\"{{ url_export }}\" class=\"btn btn-default\">Exportar</a>
                            {% endif %}
                            <button type=\"submit\" class=\"btn btn-dark\">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        {% endblock %}

        {% block body %}
            {% if pagination | length > 0 %}
                <div class=\"alert alert-success\" role=\"alert\">
                    <strong>Total: \${{ total|number_format(2) }}</strong>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Paquete</th>
                                <th>Modalidad</th>
                                <th class=\"text-right\">Monto</th>
                                <th>Cupón</th>
                                <th>M. de pago</th>
                                <th class=\"text-center\">Sucursal</th>
                                <th class=\"text-center\">Estado</th>
                                <th class=\"text-center\">F. creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for transaction in pagination %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('backend_transaction_show', { 'id': transaction.id }) }}\" class=\"link-edit\">
                                            <u>{{ transaction.id }}</u>
                                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {{ transaction.user }}
                                    </td>
                                    <td>
                                        {{ transaction.user.email }}
                                    </td>
                                    <td>
                                        {{ transaction.packageTotalClasses }} clase(s)
                                    </td>
                                    <td>
                                        {{ transaction.packageType|PackageSessionType }}
                                    </td>
                                    <td class=\"text-right\">
                                        \${{ transaction.total|number_format(2) }}
                                    </td>
                                    <td>{{ transaction.coupon.code|default('') }}</td>
                                    <td>
                                        {{ transaction.chargeMethod|ChargeMethodDescription }}
                                    </td>
                                    <td class=\"text-center\">
                                        {{ transaction.branchOffice }}
                                    </td>
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
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                {{ include('backend/default/partials/not_records.html.twig') }}
            {% endif %}
        {% endblock %}

        {% block footer %}
            {% if pagination | length > 0 %}
                {{ knp_pagination_render(pagination) }}
            {% endif %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "backend/transaction/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\transaction\\index.html.twig");
    }
}
