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

/* backend/dashboard/index.html.twig */
class __TwigTemplate_c705fe16573d7f88f9d8eb4e3393cfb0 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    ";
        if (array_key_exists("stats", $context)) {
            // line 7
            yield "        <div class=\"row tile_count\">
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total transaccionado</span>
                <div class=\"count\">\$";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 10, $this->source); })()), "totalAmountProcessed", [], "array", false, false, false, 10)), "html", null, true);
            yield "</div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total transaccionado en el mes</span>
                <div class=\"count\">\$";
            // line 14
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 14, $this->source); })()), "totalAmountInCurrentMonth", [], "array", false, false, false, 14)), "html", null, true);
            yield "</div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total de usuarios</span>
                <div class=\"count\">";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 18, $this->source); })()), "totalActiveUsers", [], "array", false, false, false, 18), "html", null, true);
            yield "</div>
            </div>
        </div>
    ";
        }
        // line 22
        yield "
    <div class=\"row\">
        ";
        // line 24
        if (array_key_exists("lastTransactions", $context)) {
            // line 25
            yield "            <div class=\"col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Últimas transacciones</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        ";
            // line 33
            if ((isset($context["lastTransactions"]) || array_key_exists("lastTransactions", $context) ? $context["lastTransactions"] : (function () { throw new RuntimeError('Variable "lastTransactions" does not exist.', 33, $this->source); })())) {
                // line 34
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
                                        <th class=\"text-center\">F. registro</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lastTransactions"]) || array_key_exists("lastTransactions", $context) ? $context["lastTransactions"] : (function () { throw new RuntimeError('Variable "lastTransactions" does not exist.', 49, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 50
                    yield "                                        ";
                    // line 51
                    yield "                                        <tr>
                                            <th scope=\"row\">";
                    // line 52
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 52), "html", null, true);
                    yield "</th>
                                            <td>";
                    // line 53
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "user", [], "any", false, false, false, 53), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 54
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "user", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 55
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageTotalClasses", [], "any", false, false, false, 55), "html", null, true);
                    yield " clase(s)</td>
                                            <td>";
                    // line 56
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageType", [], "any", false, false, false, 56)), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">\$";
                    // line 57
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "total", [], "any", false, false, false, 57), 2), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 58
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "chargeMethod", [], "any", false, false, false, 58)), "html", null, true);
                    yield "</td>
                                            <td class=\"text-center\">";
                    // line 59
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 59), "Y-m-d H:i"), "html", null, true);
                    yield "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "                                    </tbody>
                                </table>
                            </div>
                        ";
            } else {
                // line 66
                yield "                            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
                yield "
                        ";
            }
            // line 68
            yield "                    </div>

                    <div class=\"clearfix\"></div>

                    ";
            // line 72
            if ((isset($context["lastTransactions"]) || array_key_exists("lastTransactions", $context) ? $context["lastTransactions"] : (function () { throw new RuntimeError('Variable "lastTransactions" does not exist.', 72, $this->source); })())) {
                // line 73
                yield "                        <div class=\"x_footer text-center\">
                            <a href=\"";
                // line 74
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction");
                yield "\" class=\"btn btn-default btn-sm\">Ver todas</a>
                        </div>
                    ";
            }
            // line 77
            yield "                </div>
            </div>
        ";
        }
        // line 80
        yield "
        ";
        // line 81
        if (array_key_exists("lastUsers", $context)) {
            // line 82
            yield "            <div class=\"col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Últimos usuarios registrados</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        ";
            // line 90
            if ((isset($context["lastUsers"]) || array_key_exists("lastUsers", $context) ? $context["lastUsers"] : (function () { throw new RuntimeError('Variable "lastUsers" does not exist.', 90, $this->source); })())) {
                // line 91
                yield "                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th class=\"text-center\">Fecha de registro</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lastUsers"]) || array_key_exists("lastUsers", $context) ? $context["lastUsers"] : (function () { throw new RuntimeError('Variable "lastUsers" does not exist.', 103, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 104
                    yield "                                        <tr>
                                            <th scope=\"row\">";
                    // line 105
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 105), "html", null, true);
                    yield "</th>
                                            <td>";
                    // line 106
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["entity"], "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 107
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "email", [], "any", false, false, false, 107), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 108
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "phone", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "phone", [], "any", false, false, false, 108), "-----")) : ("-----")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-center\">";
                    // line 109
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 109), "Y-m-d H:i"), "html", null, true);
                    yield "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                yield "                                    </tbody>
                                </table>
                            </div>
                        ";
            } else {
                // line 116
                yield "                            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
                yield "
                        ";
            }
            // line 118
            yield "                    </div>

                    <div class=\"clearfix\"></div>

                    ";
            // line 122
            if ((isset($context["lastUsers"]) || array_key_exists("lastUsers", $context) ? $context["lastUsers"] : (function () { throw new RuntimeError('Variable "lastUsers" does not exist.', 122, $this->source); })())) {
                // line 123
                yield "                        <div class=\"x_footer text-center\">
                            <a href=\"";
                // line 124
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user");
                yield "\" class=\"btn btn-default btn-sm\">Ver todos</a>
                        </div>
                    ";
            }
            // line 127
            yield "                </div>
            </div>
        ";
        }
        // line 130
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
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
        return "backend/dashboard/index.html.twig";
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
        return array (  354 => 134,  344 => 133,  332 => 130,  327 => 127,  321 => 124,  318 => 123,  316 => 122,  310 => 118,  304 => 116,  298 => 112,  289 => 109,  285 => 108,  281 => 107,  277 => 106,  273 => 105,  270 => 104,  266 => 103,  252 => 91,  250 => 90,  240 => 82,  238 => 81,  235 => 80,  230 => 77,  224 => 74,  221 => 73,  219 => 72,  213 => 68,  207 => 66,  201 => 62,  192 => 59,  188 => 58,  184 => 57,  180 => 56,  176 => 55,  172 => 54,  168 => 53,  164 => 52,  161 => 51,  159 => 50,  155 => 49,  138 => 34,  136 => 33,  126 => 25,  124 => 24,  120 => 22,  113 => 18,  106 => 14,  99 => 10,  94 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block content %}
    {% if stats is defined %}
        <div class=\"row tile_count\">
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total transaccionado</span>
                <div class=\"count\">\${{ stats['totalAmountProcessed']|number_format() }}</div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total transaccionado en el mes</span>
                <div class=\"count\">\${{ stats['totalAmountInCurrentMonth']|number_format() }}</div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total de usuarios</span>
                <div class=\"count\">{{ stats['totalActiveUsers'] }}</div>
            </div>
        </div>
    {% endif %}

    <div class=\"row\">
        {% if lastTransactions is defined %}
            <div class=\"col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Últimas transacciones</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        {% if lastTransactions %}
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
                                        <th class=\"text-center\">F. registro</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for entity in lastTransactions %}
                                        {# entity \\App\\Entity\\Transaction #}
                                        <tr>
                                            <th scope=\"row\">{{ entity.id }}</th>
                                            <td>{{ entity.user }}</td>
                                            <td>{{ entity.user.email }}</td>
                                            <td>{{ entity.packageTotalClasses }} clase(s)</td>
                                            <td>{{ entity.packageType|PackageSessionType }}</td>
                                            <td class=\"text-right\">\${{ entity.total|number_format(2) }}</td>
                                            <td>{{ entity.chargeMethod|ChargeMethodDescription }}</td>
                                            <td class=\"text-center\">{{ entity.createdAt|date('Y-m-d H:i') }}</td>
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

                    {% if lastTransactions %}
                        <div class=\"x_footer text-center\">
                            <a href=\"{{ path('backend_transaction') }}\" class=\"btn btn-default btn-sm\">Ver todas</a>
                        </div>
                    {% endif %}
                </div>
            </div>
        {% endif %}

        {% if lastUsers is defined %}
            <div class=\"col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Últimos usuarios registrados</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        {% if lastUsers %}
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th class=\"text-center\">Fecha de registro</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for entity in lastUsers %}
                                        <tr>
                                            <th scope=\"row\">{{ entity.id }}</th>
                                            <td>{{ entity }}</td>
                                            <td>{{ entity.email }}</td>
                                            <td>{{ entity.phone|default('-----') }}</td>
                                            <td class=\"text-center\">{{ entity.createdAt|date('Y-m-d H:i') }}</td>
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

                    {% if lastUsers %}
                        <div class=\"x_footer text-center\">
                            <a href=\"{{ path('backend_user') }}\" class=\"btn btn-default btn-sm\">Ver todos</a>
                        </div>
                    {% endif %}
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "backend/dashboard/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\dashboard\\index.html.twig");
    }
}
