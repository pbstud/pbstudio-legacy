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

/* backend/page/edit.html.twig */
class __TwigTemplate_25ee96768786685f958c83e1aab3fab8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("backend/layout-ajax.html.twig") : ("backend/layout.html.twig")), "backend/page/edit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/edit.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 5, $this->source); })()), ["backend/default/form/fields.html.twig"], false);
        // line 7
        $context["page_section"] = "Páginas";
        // line 8
        $context["page_title"] = "Editar Página";
        // line 9
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_page");
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        yield "    ";
        yield from         $this->loadTemplate("backend/page/edit.html.twig", "backend/page/edit.html.twig", 12, "387839460")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 12, $this->source); })()), "page_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 12, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        \$(function () {
            \$('.delete-link').on('click', function () {
                if (confirm('¿Confirmas que deseas eliminar el registro?')) {
                    \$('#frmDelete').submit();
                }
            });
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
        return "backend/page/edit.html.twig";
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
        return array (  101 => 97,  91 => 96,  79 => 12,  69 => 11,  59 => 3,  57 => 9,  55 => 8,  53 => 7,  51 => 5,  38 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.request.xmlHttpRequest
    ? 'backend/layout-ajax.html.twig'
    : 'backend/layout.html.twig' %}

{% form_theme edit_form with ['backend/default/form/fields.html.twig'] only %}

{% set page_section = 'Páginas' %}
{% set page_title = 'Editar Página' %}
{% set return_to = path('backend_page') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block actions %}
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"delete-link\"><i class=\"fa fa-trash\"></i></a>
                </li>
            </ul>
        {% endblock %}

        {% block body %}
            {{ form_start(edit_form, {
                'attr': {
                    'class': 'form-horizontal form-label-left',
                    'data-parsley-validate': '',
                }
            }) }}
                {{ form_row(edit_form.title) }}

                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12 required\">Slug:</label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <a>{{ page.slug }}</a>
                        <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(edit_form.content, 'Contenido:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        {{ form_widget(edit_form.content, {
                            'attr': {
                                'rows': 25,
                                'data-redactor': '',
                                'class': 'form-control col-md-7 col-xs-12',
                            }
                        }) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(edit_form.isActive, 'Activo:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        <div class=\"checkbox\">
                            {{ form_widget(edit_form.isActive, {
                                'attr': {
                                    'class': 'js-switch',
                                }
                            }) }}
                        </div>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Guardar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            {{ form_end(edit_form) }}

            {{ form_start(delete_form, {
                'attr': {
                    'id': 'frmDelete',
                }
            }) }}{{ form_end(delete_form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}


{% block javascripts %}
    {{ parent() }}

    <script>
        \$(function () {
            \$('.delete-link').on('click', function () {
                if (confirm('¿Confirmas que deseas eliminar el registro?')) {
                    \$('#frmDelete').submit();
                }
            });
        });
    </script>
{% endblock %}
", "backend/page/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\page\\edit.html.twig");
    }
}


/* backend/page/edit.html.twig */
class __TwigTemplate_25ee96768786685f958c83e1aab3fab8___387839460 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/edit.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/page/edit.html.twig", 12);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 14
        yield "            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"delete-link\"><i class=\"fa fa-trash\"></i></a>
                </li>
            </ul>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
        // line 27
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), 'row');
        yield "

                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12 required\">Slug:</label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <a>";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 33, $this->source); })()), "slug", [], "any", false, false, false, 33), "html", null, true);
        yield "</a>
                        <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 39, $this->source); })()), "content", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Contenido:"]);
        // line 43
        yield "
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 45, $this->source); })()), "content", [], "any", false, false, false, 45), 'widget', ["attr" => ["rows" => 25, "data-redactor" => "", "class" => "form-control col-md-7 col-xs-12"]]);
        // line 51
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 56, $this->source); })()), "isActive", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Activo:"]);
        // line 60
        yield "
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        <div class=\"checkbox\">
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 63, $this->source); })()), "isActive", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "js-switch"]]);
        // line 67
        yield "
                        </div>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Guardar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            ";
        // line 84
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 84, $this->source); })()), 'form_end');
        yield "

            ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 86, $this->source); })()), 'form_start', ["attr" => ["id" => "frmDelete"]]);
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 90, $this->source); })()), 'form_end');
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
        return "backend/page/edit.html.twig";
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
        return array (  416 => 90,  414 => 86,  409 => 84,  390 => 67,  388 => 63,  383 => 60,  381 => 56,  374 => 51,  372 => 45,  368 => 43,  366 => 39,  357 => 33,  349 => 28,  346 => 27,  343 => 22,  333 => 21,  317 => 14,  307 => 13,  284 => 12,  101 => 97,  91 => 96,  79 => 12,  69 => 11,  59 => 3,  57 => 9,  55 => 8,  53 => 7,  51 => 5,  38 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.request.xmlHttpRequest
    ? 'backend/layout-ajax.html.twig'
    : 'backend/layout.html.twig' %}

{% form_theme edit_form with ['backend/default/form/fields.html.twig'] only %}

{% set page_section = 'Páginas' %}
{% set page_title = 'Editar Página' %}
{% set return_to = path('backend_page') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block actions %}
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"delete-link\"><i class=\"fa fa-trash\"></i></a>
                </li>
            </ul>
        {% endblock %}

        {% block body %}
            {{ form_start(edit_form, {
                'attr': {
                    'class': 'form-horizontal form-label-left',
                    'data-parsley-validate': '',
                }
            }) }}
                {{ form_row(edit_form.title) }}

                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12 required\">Slug:</label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <a>{{ page.slug }}</a>
                        <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(edit_form.content, 'Contenido:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        {{ form_widget(edit_form.content, {
                            'attr': {
                                'rows': 25,
                                'data-redactor': '',
                                'class': 'form-control col-md-7 col-xs-12',
                            }
                        }) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(edit_form.isActive, 'Activo:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        <div class=\"checkbox\">
                            {{ form_widget(edit_form.isActive, {
                                'attr': {
                                    'class': 'js-switch',
                                }
                            }) }}
                        </div>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Guardar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            {{ form_end(edit_form) }}

            {{ form_start(delete_form, {
                'attr': {
                    'id': 'frmDelete',
                }
            }) }}{{ form_end(delete_form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}


{% block javascripts %}
    {{ parent() }}

    <script>
        \$(function () {
            \$('.delete-link').on('click', function () {
                if (confirm('¿Confirmas que deseas eliminar el registro?')) {
                    \$('#frmDelete').submit();
                }
            });
        });
    </script>
{% endblock %}
", "backend/page/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\page\\edit.html.twig");
    }
}
