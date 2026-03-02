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

/* backend/coupon/index.html.twig */
class __TwigTemplate_9476c0d7974f28ba55b5b009d46951a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actions' => [$this, 'block_actions'],
            'table_thead' => [$this, 'block_table_thead'],
            'table_tbody' => [$this, 'block_table_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/coupon/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/coupon/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/coupon/index.html.twig", 1);
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

        yield "Listado de Cupones";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 6
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_coupon_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_new");
            yield "\" class=\"btn btn-sm btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_coupon_new"), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        // line 17
        yield "    <tr>
        <th>";
        // line 18
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "c.id");
        yield "</th>
        <th>";
        // line 19
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "c.name");
        yield "</th>
        <th>";
        // line 20
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.code"), "c.code");
        yield "</th>
        <th>";
        // line 21
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.discount"), "c.discount");
        yield "</th>
        <th>";
        // line 22
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.uses_total"), "c.usesTotal");
        yield "</th>
        <th>";
        // line 23
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 23, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_start"), "c.dateStart");
        yield "</th>
        <th>";
        // line 24
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 24, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_end"), "c.dateEnd");
        yield "</th>
        <th></th>
    </tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 29
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        // line 30
        yield "    ";
        $context["allowEdit"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_coupon_edit");
        // line 31
        yield "    ";
        $context["allowShow"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_coupon_show");
        // line 32
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 33
            yield "        ";
            // line 34
            yield "        <tr>
            <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
            <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
            <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
            <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 38), "html", null, true);
            yield " %</td>
            <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "used", [], "any", false, false, false, 39), "html", null, true);
            yield " / ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "usesTotal", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
            <td>";
            // line 40
            ((CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "dateStart", [], "any", false, false, false, 40)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "dateStart", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true)) : (yield ""));
            yield "</td>
            <td>";
            // line 41
            ((CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "dateEnd", [], "any", false, false, false, 41)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "dateEnd", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true)) : (yield ""));
            yield "</td>
            <td>
                ";
            // line 43
            if ((isset($context["allowShow"]) || array_key_exists("allowShow", $context) ? $context["allowShow"] : (function () { throw new RuntimeError('Variable "allowShow" does not exist.', 43, $this->source); })())) {
                // line 44
                yield "                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-xs\">
                        Detalle
                    </a>
                ";
            }
            // line 48
            yield "                ";
            if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 48, $this->source); })())) {
                // line 49
                yield "                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                ";
            }
            // line 53
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/coupon/index.html.twig";
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
        return array (  249 => 53,  241 => 49,  238 => 48,  230 => 44,  228 => 43,  223 => 41,  219 => 40,  213 => 39,  209 => 38,  205 => 37,  201 => 36,  197 => 35,  194 => 34,  192 => 33,  187 => 32,  184 => 31,  181 => 30,  171 => 29,  156 => 24,  152 => 23,  148 => 22,  144 => 21,  140 => 20,  136 => 19,  132 => 18,  129 => 17,  119 => 16,  103 => 10,  98 => 8,  95 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/default/list.html.twig' %}

{% block title %}Listado de Cupones{% endblock %}

{% block actions %}
    {% if is_allowed_route('backend_coupon_new') %}
        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"{{ path('backend_coupon_new') }}\" class=\"btn btn-sm btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                {{ 'main.backend_coupon_new'|trans }}
            </a>
        </div>
    {% endif %}
{% endblock %}

{% block table_thead %}
    <tr>
        <th>{{ knp_pagination_sortable(pagination, 'label.id'|trans, 'c.id') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.name'|trans, 'c.name') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.code'|trans, 'c.code') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.discount'|trans, 'c.discount') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.uses_total'|trans, 'c.usesTotal') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.date_start'|trans, 'c.dateStart') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.date_end'|trans, 'c.dateEnd') }}</th>
        <th></th>
    </tr>
{% endblock %}

{% block table_tbody %}
    {% set allowEdit = is_allowed_route('backend_coupon_edit') %}
    {% set allowShow = is_allowed_route('backend_coupon_show') %}
    {% for coupon in pagination %}
        {# coupon \\App\\Entity\\Coupon #}
        <tr>
            <td>{{ coupon.id }}</td>
            <td>{{ coupon.name }}</td>
            <td>{{ coupon.code }}</td>
            <td>{{ coupon.discount }} %</td>
            <td>{{ coupon.used}} / {{ coupon.usesTotal }}</td>
            <td>{{ coupon.dateStart ? coupon.dateStart|date('d/m/Y') }}</td>
            <td>{{ coupon.dateEnd ? coupon.dateEnd|date('d/m/Y') }}</td>
            <td>
                {% if allowShow %}
                    <a href=\"{{ path('backend_coupon_show', {'id': coupon.id}) }}\" class=\"btn btn-success btn-xs\">
                        Detalle
                    </a>
                {% endif %}
                {% if allowEdit %}
                    <a href=\"{{ path('backend_coupon_edit', {'id': coupon.id}) }}\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
{% endblock %}
", "backend/coupon/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\coupon\\index.html.twig");
    }
}
