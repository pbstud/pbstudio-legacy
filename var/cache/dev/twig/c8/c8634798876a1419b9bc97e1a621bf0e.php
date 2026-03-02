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

/* backend/exerciseroom/index.html.twig */
class __TwigTemplate_7285dc109349de0bce14fdd14bf633f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/exerciseroom/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/exerciseroom/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/exerciseroom/index.html.twig", 1);
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

        yield "Listado de Salones";
        
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
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_exerciseroom_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_exerciseroom_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_exerciseroom_new"), "html", null, true);
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
        <th>#</th>
        <th>Nombre</th>
        <th class=\"text-center\">Capacidad</th>
        <th>Disciplina</th>
        <th>Modalidad</th>
        <th>Sucursal</th>
        <th>Estado</th>
    </tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 28
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        // line 29
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exerciseRoom"]) {
            // line 30
            yield "        ";
            // line 31
            yield "        <tr>
            <td>
                <a href=\"";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_exerciseroom_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                ";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["exerciseRoom"], "html", null, true);
            yield "
            </td>
            <td class=\"text-center\">
                ";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "capacity", [], "any", false, false, false, 42), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "discipline", [], "any", false, false, false, 45), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 48
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "type", [], "any", false, false, false, 48)), "html", null, true);
            yield "
            </td>
            <td>";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "branchOffice", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "isActive", [], "any", false, false, false, 52)) {
                // line 53
                yield "                    <span class=\"label label-primary\">Activo</span>
                ";
            } else {
                // line 55
                yield "                    <span class=\"label label-danger\">Inactivo</span>
                ";
            }
            // line 57
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exerciseRoom'], $context['_parent'], $context['loop']);
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
        return "backend/exerciseroom/index.html.twig";
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
        return array (  220 => 57,  216 => 55,  212 => 53,  210 => 52,  205 => 50,  200 => 48,  194 => 45,  188 => 42,  182 => 39,  174 => 34,  170 => 33,  166 => 31,  164 => 30,  159 => 29,  149 => 28,  129 => 17,  119 => 16,  103 => 10,  98 => 8,  95 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/default/list.html.twig' %}

{% block title %}Listado de Salones{% endblock %}

{% block actions %}
    {% if is_allowed_route('backend_exerciseroom_new') %}
        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"{{ path('backend_exerciseroom_new') }}\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                {{ 'main.backend_exerciseroom_new'|trans }}
            </a>
        </div>
    {% endif %}
{% endblock %}

{% block table_thead %}
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th class=\"text-center\">Capacidad</th>
        <th>Disciplina</th>
        <th>Modalidad</th>
        <th>Sucursal</th>
        <th>Estado</th>
    </tr>
{% endblock %}

{% block table_tbody %}
    {% for exerciseRoom in pagination %}
        {# exerciseRoom \\App\\Entity\\ExerciseRoom #}
        <tr>
            <td>
                <a href=\"{{ path('backend_exerciseroom_edit', { 'id': exerciseRoom.id }) }}\" class=\"link-edit\">
                    <u>{{ exerciseRoom.id }}</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                {{ exerciseRoom }}
            </td>
            <td class=\"text-center\">
                {{ exerciseRoom.capacity }}
            </td>
            <td>
                {{ exerciseRoom.discipline }}
            </td>
            <td>
                {{ exerciseRoom.type|PackageSessionType }}
            </td>
            <td>{{ exerciseRoom.branchOffice }}</td>
            <td>
                {% if exerciseRoom.isActive %}
                    <span class=\"label label-primary\">Activo</span>
                {% else %}
                    <span class=\"label label-danger\">Inactivo</span>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
{% endblock %}
", "backend/exerciseroom/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\exerciseroom\\index.html.twig");
    }
}
