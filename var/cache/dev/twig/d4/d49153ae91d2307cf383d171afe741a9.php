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

/* backend/default/list.html.twig */
class __TwigTemplate_ceec0a8b3af8714f582a41ed26f23d5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pagination_filter' => [$this, 'block_pagination_filter'],
            'section' => [$this, 'block_section'],
            'section_title' => [$this, 'block_section_title'],
            'table_thead' => [$this, 'block_table_thead'],
            'table_tbody' => [$this, 'block_table_tbody'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/list.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/default/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_pagination_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination_filter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination_filter"));

        // line 4
        yield "    ";
        if (array_key_exists("pagination_filter", $context)) {
            // line 5
            yield "        ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 5, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination_filter"]) || array_key_exists("pagination_filter", $context) ? $context["pagination_filter"] : (function () { throw new RuntimeError('Variable "pagination_filter" does not exist.', 5, $this->source); })()), "fields", [], "any", false, false, false, 5), ["reset" => CoreExtension::getAttribute($this->env, $this->source,             // line 6
(isset($context["pagination_filter"]) || array_key_exists("pagination_filter", $context) ? $context["pagination_filter"] : (function () { throw new RuntimeError('Variable "pagination_filter" does not exist.', 6, $this->source); })()), "reset", [], "any", false, false, false, 6)]);
            // line 7
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 12
        yield "    ";
        $context["_block_filters"] = ((        $this->unwrap()->hasBlock("filters", $context, $blocks)) ? (        $this->unwrap()->renderBlock("filters", $context, $blocks)) : (""));
        // line 13
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_block_filters"]) || array_key_exists("_block_filters", $context) ? $context["_block_filters"] : (function () { throw new RuntimeError('Variable "_block_filters" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel x_panel_filters\">
                    <div class=\"x_content\">
                        ";
            // line 18
            yield (isset($context["_block_filters"]) || array_key_exists("_block_filters", $context) ? $context["_block_filters"] : (function () { throw new RuntimeError('Variable "_block_filters" does not exist.', 18, $this->source); })());
            yield "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 24
        yield "
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>";
        // line 29
        yield from $this->unwrap()->yieldBlock('section_title', $context, $blocks);
        yield "</h2>
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"x_content\">
                    ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()), "count", [], "any", false, false, false, 34) > 0)) {
            // line 35
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-hover\">
                                <thead class=\"thead-dark\">
                                ";
            // line 38
            yield from $this->unwrap()->yieldBlock('table_thead', $context, $blocks);
            // line 39
            yield "                                </thead>
                                <tbody>
                                ";
            // line 41
            yield from $this->unwrap()->yieldBlock('table_tbody', $context, $blocks);
            // line 42
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 46
            yield "                        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
                    ";
        }
        // line 48
        yield "                </div>

                <div class=\"clearfix\"></div>

                ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 52, $this->source); })()), "count", [], "any", false, false, false, 52) > 0)) {
            // line 53
            yield "                    <div class=\"x_footer\">
                        ";
            // line 54
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 54, $this->source); })()));
            yield "
                    </div>
                ";
        }
        // line 57
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 29
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_title"));

        yield from         $this->unwrap()->yieldBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 38
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 41
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/list.html.twig";
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
        return array (  236 => 41,  217 => 38,  197 => 29,  183 => 57,  177 => 54,  174 => 53,  172 => 52,  166 => 48,  160 => 46,  154 => 42,  152 => 41,  148 => 39,  146 => 38,  141 => 35,  139 => 34,  131 => 29,  124 => 24,  115 => 18,  109 => 14,  106 => 13,  103 => 12,  93 => 11,  80 => 7,  78 => 6,  76 => 5,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% block pagination_filter %}
    {% if pagination_filter is defined %}
        {{ knp_pagination_filter(pagination, pagination_filter.fields, {
            'reset': pagination_filter.reset
        }) }}
    {% endif %}
{% endblock %}

{% block section %}
    {% set _block_filters = block('filters') is defined ? block('filters') %}
    {% if _block_filters is not empty %}
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel x_panel_filters\">
                    <div class=\"x_content\">
                        {{ _block_filters|raw }}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>{% block section_title %}{{ block('title') }}{% endblock %}</h2>
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"x_content\">
                    {% if pagination.count > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-hover\">
                                <thead class=\"thead-dark\">
                                {% block table_thead %}{% endblock %}
                                </thead>
                                <tbody>
                                {% block table_tbody %}{% endblock %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        {{ include('backend/default/partials/not_records.html.twig') }}
                    {% endif %}
                </div>

                <div class=\"clearfix\"></div>

                {% if pagination.count > 0 %}
                    <div class=\"x_footer\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "backend/default/list.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\list.html.twig");
    }
}
