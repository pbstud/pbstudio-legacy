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

/* backend/staff/index.html.twig */
class __TwigTemplate_9577f3300a560328bfd7a21f111f69b1 extends Template
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
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/index.html.twig"));

        // line 3
        $context["page_section"] = "Staff";
        // line 4
        $context["page_title"] = "Listado de Staff";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/staff/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield from         $this->loadTemplate("backend/staff/index.html.twig", "backend/staff/index.html.twig", 7, "148762393")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 7, $this->source); })()), "page_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 7, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/staff/index.html.twig";
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
        return array (  74 => 7,  64 => 6,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}
{% set page_title = 'Listado de Staff' %}

{% block content %}
    {% embed 'backend/default/embed/list_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block actions %}
            <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"{{ path('backend_staff_new') }}\" class=\"btn btn-default\">Nuevo Staff</a>
                </div>
            </div>
        {% endblock %}

        {% block body %}
            {% if pagination | length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Último acceso</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for entity in pagination %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('backend_staff_edit', { 'id': entity.id }) }}\" class=\"link-edit\">
                                            <u>{{ entity.id }}</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {{ entity.username }}
                                    </td>
                                    <td>
                                        {% if entity.lastLogin %}
                                            {{ entity.lastLogin|date('Y-m-d H:i:s') }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if entity.isActive %}
                                        <span class=\"label label-primary\">Activo</span>
                                        {% else %}
                                        <span class=\"label label-danger\">Inactivo</span>
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
", "backend/staff/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\index.html.twig");
    }
}


/* backend/staff/index.html.twig */
class __TwigTemplate_9577f3300a560328bfd7a21f111f69b1___148762393 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/list_common.html.twig", "backend/staff/index.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        yield "            <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_staff_new");
        yield "\" class=\"btn btn-default\">Nuevo Staff</a>
                </div>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })())) > 0)) {
            // line 18
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Último acceso</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 30
                yield "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_staff_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                            <u>";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 33), "html", null, true);
                yield "</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
                                        ";
                // line 38
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "username", [], "any", false, false, false, 38), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 41
                if (CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "lastLogin", [], "any", false, false, false, 41)) {
                    // line 42
                    yield "                                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "lastLogin", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true);
                    yield "
                                        ";
                }
                // line 44
                yield "                                    </td>
                                    <td>
                                        ";
                // line 46
                if (CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "isActive", [], "any", false, false, false, 46)) {
                    // line 47
                    yield "                                        <span class=\"label label-primary\">Activo</span>
                                        ";
                } else {
                    // line 49
                    yield "                                        <span class=\"label label-danger\">Inactivo</span>
                                        ";
                }
                // line 51
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 58
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
            ";
        }
        // line 60
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 63, $this->source); })())) > 0)) {
            // line 64
            yield "                ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 64, $this->source); })()));
            yield "
            ";
        }
        // line 66
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
        return "backend/staff/index.html.twig";
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
        return array (  381 => 66,  375 => 64,  372 => 63,  362 => 62,  351 => 60,  345 => 58,  339 => 54,  331 => 51,  327 => 49,  323 => 47,  321 => 46,  317 => 44,  311 => 42,  309 => 41,  303 => 38,  295 => 33,  291 => 32,  287 => 30,  283 => 29,  270 => 18,  267 => 17,  257 => 16,  242 => 11,  238 => 9,  228 => 8,  74 => 7,  64 => 6,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}
{% set page_title = 'Listado de Staff' %}

{% block content %}
    {% embed 'backend/default/embed/list_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block actions %}
            <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"{{ path('backend_staff_new') }}\" class=\"btn btn-default\">Nuevo Staff</a>
                </div>
            </div>
        {% endblock %}

        {% block body %}
            {% if pagination | length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Último acceso</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for entity in pagination %}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('backend_staff_edit', { 'id': entity.id }) }}\" class=\"link-edit\">
                                            <u>{{ entity.id }}</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {{ entity.username }}
                                    </td>
                                    <td>
                                        {% if entity.lastLogin %}
                                            {{ entity.lastLogin|date('Y-m-d H:i:s') }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if entity.isActive %}
                                        <span class=\"label label-primary\">Activo</span>
                                        {% else %}
                                        <span class=\"label label-danger\">Inactivo</span>
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
", "backend/staff/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\index.html.twig");
    }
}
