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

/* backend/discipline/index.html.twig */
class __TwigTemplate_5f69b01d2f91dca737b667da9ec749ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/discipline/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/discipline/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/discipline/index.html.twig", 1);
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

        yield "Listado de Disciplinas";
        
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
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_discipline_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_discipline_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_discipline_new"), "html", null, true);
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
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "d.id");
        yield "</th>
        <th>";
        // line 19
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "d.name");
        yield "</th>
        <th>";
        // line 20
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.active"), "d.isActive");
        yield "</th>
        <th>";
        // line 21
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.created_at"), "d.createdAt");
        yield "</th>
        <th></th>
    </tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 26
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        // line 27
        yield "    ";
        $context["allowEdit"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_discipline_edit");
        // line 28
        yield "
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["discipline"]) {
            // line 30
            yield "        ";
            // line 31
            yield "        <tr>
            <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
            <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "name", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "isActive", [], "any", false, false, false, 35)) {
                // line 36
                yield "                    <span class=\"label label-primary\">Sí</span>
                ";
            } else {
                // line 38
                yield "                    <span class=\"label label-danger\">No</span>
                ";
            }
            // line 40
            yield "            </td>
            <td>";
            // line 41
            ((CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "createdAt", [], "any", false, false, false, 41)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "createdAt", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true)) : (yield ""));
            yield "</td>
            <td>
                ";
            // line 43
            if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 43, $this->source); })())) {
                // line 44
                yield "                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_discipline_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                ";
            }
            // line 48
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discipline'], $context['_parent'], $context['loop']);
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
        return "backend/discipline/index.html.twig";
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
        return array (  221 => 48,  213 => 44,  211 => 43,  206 => 41,  203 => 40,  199 => 38,  195 => 36,  193 => 35,  188 => 33,  184 => 32,  181 => 31,  179 => 30,  175 => 29,  172 => 28,  169 => 27,  159 => 26,  144 => 21,  140 => 20,  136 => 19,  132 => 18,  129 => 17,  119 => 16,  103 => 10,  98 => 8,  95 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/default/list.html.twig' %}

{% block title %}Listado de Disciplinas{% endblock %}

{% block actions %}
    {% if is_allowed_route('backend_discipline_new') %}
        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"{{ path('backend_discipline_new') }}\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                {{ 'main.backend_discipline_new'|trans }}
            </a>
        </div>
    {% endif %}
{% endblock %}

{% block table_thead %}
    <tr>
        <th>{{ knp_pagination_sortable(pagination, 'label.id'|trans, 'd.id') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.name'|trans, 'd.name') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.active'|trans, 'd.isActive') }}</th>
        <th>{{ knp_pagination_sortable(pagination, 'label.created_at'|trans, 'd.createdAt') }}</th>
        <th></th>
    </tr>
{% endblock %}

{% block table_tbody %}
    {% set allowEdit = is_allowed_route('backend_discipline_edit') %}

    {% for discipline in pagination %}
        {# discipline \\App\\Entity\\Discipline #}
        <tr>
            <td>{{ discipline.id }}</td>
            <td>{{ discipline.name }}</td>
            <td>
                {% if discipline.isActive %}
                    <span class=\"label label-primary\">Sí</span>
                {% else %}
                    <span class=\"label label-danger\">No</span>
                {% endif %}
            </td>
            <td>{{ discipline.createdAt ? discipline.createdAt|date('d/m/Y H:i') }}</td>
            <td>
                {% if allowEdit %}
                    <a href=\"{{ path('backend_discipline_edit', {'id': discipline.id}) }}\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
{% endblock %}

", "backend/discipline/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\discipline\\index.html.twig");
    }
}
