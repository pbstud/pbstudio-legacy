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

/* backend/page/index.html.twig */
class __TwigTemplate_ea03367968d8f2b9da92ff2fde597e07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/index.html.twig"));

        // line 3
        $context["page_section"] = "Páginas";
        // line 4
        $context["page_title"] = "Listado de Páginas";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/page/index.html.twig", 1);
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
        yield from         $this->loadTemplate("backend/page/index.html.twig", "backend/page/index.html.twig", 7, "1951329589")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 7, $this->source); })()), "page_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 7, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/page/index.html.twig";
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

{% set page_section = 'Páginas' %}
{% set page_title = 'Listado de Páginas' %}

{% block content %}
    {% embed 'backend/default/embed/list_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block actions %}
            <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"{{ path('backend_page_new') }}\" class=\"btn btn-default\">Nueva página</a>
                </div>
            </div>
        {% endblock %}

        {% block body %}
            {% if pagination | length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Slug</th>
                                <th class=\"text-center\">F. Modificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for page in pagination %}
                                {# page \\App\\Entity\\Post #}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('backend_page_edit', { 'id': page.id }) }}\" class=\"link-edit\">
                                            <u>{{ page.title }}</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
{#                                        <a href=\"{{ path('page', { 'slug': page.slug }) }}\" target=\"_blank\">#}
                                            /{{ page.slug }}
                                            <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
{#                                        </a>#}
                                    </td>
                                    <td class=\"text-center\">
                                        {% if page.updatedAt %}
                                            {{ page.updatedAt | date('Y-m-d H:i:s') }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">
                                        <p class=\"text-info text-center\">
                                            <strong>Sin registros para mostrar.</strong>
                                        </p>
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
", "backend/page/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\page\\index.html.twig");
    }
}


/* backend/page/index.html.twig */
class __TwigTemplate_ea03367968d8f2b9da92ff2fde597e07___1951329589 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/list_common.html.twig", "backend/page/index.html.twig", 7);
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_page_new");
        yield "\" class=\"btn btn-default\">Nueva página</a>
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
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Slug</th>
                                <th class=\"text-center\">F. Modificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                yield "                                ";
                // line 30
                yield "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_page_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                            <u>";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 33), "html", null, true);
                yield "</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
";
                // line 39
                yield "                                            /";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 39), "html", null, true);
                yield "
                                            <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
";
                // line 42
                yield "                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 44
                if (CoreExtension::getAttribute($this->env, $this->source, $context["page"], "updatedAt", [], "any", false, false, false, 44)) {
                    // line 45
                    yield "                                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "updatedAt", [], "any", false, false, false, 45), "Y-m-d H:i:s"), "html", null, true);
                    yield "
                                        ";
                }
                // line 47
                yield "                                    </td>
                                </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 50
                yield "                                <tr>
                                    <td colspan=\"3\">
                                        <p class=\"text-info text-center\">
                                            <strong>Sin registros para mostrar.</strong>
                                        </p>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 62
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
            ";
        }
        // line 64
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 66
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 67
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 67, $this->source); })())) > 0)) {
            // line 68
            yield "                ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 68, $this->source); })()));
            yield "
            ";
        }
        // line 70
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
        return "backend/page/index.html.twig";
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
        return array (  389 => 70,  383 => 68,  380 => 67,  370 => 66,  359 => 64,  353 => 62,  347 => 58,  334 => 50,  327 => 47,  321 => 45,  319 => 44,  315 => 42,  309 => 39,  301 => 33,  297 => 32,  293 => 30,  291 => 29,  286 => 28,  274 => 18,  271 => 17,  261 => 16,  246 => 11,  242 => 9,  232 => 8,  74 => 7,  64 => 6,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Páginas' %}
{% set page_title = 'Listado de Páginas' %}

{% block content %}
    {% embed 'backend/default/embed/list_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block actions %}
            <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"{{ path('backend_page_new') }}\" class=\"btn btn-default\">Nueva página</a>
                </div>
            </div>
        {% endblock %}

        {% block body %}
            {% if pagination | length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Slug</th>
                                <th class=\"text-center\">F. Modificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for page in pagination %}
                                {# page \\App\\Entity\\Post #}
                                <tr>
                                    <td>
                                        <a href=\"{{ path('backend_page_edit', { 'id': page.id }) }}\" class=\"link-edit\">
                                            <u>{{ page.title }}</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
{#                                        <a href=\"{{ path('page', { 'slug': page.slug }) }}\" target=\"_blank\">#}
                                            /{{ page.slug }}
                                            <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
{#                                        </a>#}
                                    </td>
                                    <td class=\"text-center\">
                                        {% if page.updatedAt %}
                                            {{ page.updatedAt | date('Y-m-d H:i:s') }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">
                                        <p class=\"text-info text-center\">
                                            <strong>Sin registros para mostrar.</strong>
                                        </p>
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
", "backend/page/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\page\\index.html.twig");
    }
}
