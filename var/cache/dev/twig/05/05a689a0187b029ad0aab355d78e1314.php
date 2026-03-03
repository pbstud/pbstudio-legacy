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

/* backend/page/new.html.twig */
class __TwigTemplate_1fdcc754182a13f1b9b95c776101c82b extends Template
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
        // line 3
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("backend/layout-ajax.html.twig") : ("backend/layout.html.twig")), "backend/page/new.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/new.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["backend/default/form/fields.html.twig"], false);
        // line 7
        $context["page_section"] = "Páginas";
        // line 8
        $context["page_title"] = "Nueva Página";
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
        yield from         $this->loadTemplate("backend/page/new.html.twig", "backend/page/new.html.twig", 12, "1588177583")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 12, $this->source); })()), "page_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 12, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/page/new.html.twig";
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
        return array (  78 => 12,  68 => 11,  58 => 3,  56 => 9,  54 => 8,  52 => 7,  50 => 5,  37 => 1,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.request.xmlHttpRequest
    ? 'backend/layout-ajax.html.twig'
    : 'backend/layout.html.twig' %}

{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

{% set page_section = 'Páginas' %}
{% set page_title = 'Nueva Página' %}
{% set return_to = path('backend_page') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            {{ form_start(form, {
                'attr': {
                    'class': 'form-horizontal form-label-left',
                    'data-parsley-validate': '',
                }
            }) }}
                <div class=\"form-group\">
                    {{ form_label(form.title, 'Titulo:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        {{ form_widget(form.title, {
                            'attr': {
                                'class': 'form-control col-md-7 col-xs-12',
                            }
                        }) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.content, 'Contenido:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        {{ form_widget(form.content, {
                            'attr': {
                                'rows': 25,
                                'data-redactor': '',
                                'class': 'form-control col-md-7 col-xs-12',
                            }
                        }) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.isActive, 'Activo:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"checkbox\">
                            {{ form_widget(form.isActive, {
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
            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "backend/page/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\page\\new.html.twig");
    }
}


/* backend/page/new.html.twig */
class __TwigTemplate_1fdcc754182a13f1b9b95c776101c82b___1588177583 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/page/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/page/new.html.twig", 12);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
        // line 19
        yield "
                <div class=\"form-group\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Titulo:"]);
        // line 25
        yield "
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control col-md-7 col-xs-12"]]);
        // line 31
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Contenido:"]);
        // line 40
        yield "
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "content", [], "any", false, false, false, 42), 'widget', ["attr" => ["rows" => 25, "data-redactor" => "", "class" => "form-control col-md-7 col-xs-12"]]);
        // line 48
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "isActive", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Activo:"]);
        // line 57
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"checkbox\">
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "isActive", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "js-switch"]]);
        // line 64
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
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
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
        return "backend/page/new.html.twig";
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
        return array (  321 => 81,  302 => 64,  300 => 60,  295 => 57,  293 => 53,  286 => 48,  284 => 42,  280 => 40,  278 => 36,  271 => 31,  269 => 27,  265 => 25,  263 => 21,  259 => 19,  256 => 14,  246 => 13,  78 => 12,  68 => 11,  58 => 3,  56 => 9,  54 => 8,  52 => 7,  50 => 5,  37 => 1,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.request.xmlHttpRequest
    ? 'backend/layout-ajax.html.twig'
    : 'backend/layout.html.twig' %}

{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

{% set page_section = 'Páginas' %}
{% set page_title = 'Nueva Página' %}
{% set return_to = path('backend_page') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            {{ form_start(form, {
                'attr': {
                    'class': 'form-horizontal form-label-left',
                    'data-parsley-validate': '',
                }
            }) }}
                <div class=\"form-group\">
                    {{ form_label(form.title, 'Titulo:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        {{ form_widget(form.title, {
                            'attr': {
                                'class': 'form-control col-md-7 col-xs-12',
                            }
                        }) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.content, 'Contenido:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        {{ form_widget(form.content, {
                            'attr': {
                                'rows': 25,
                                'data-redactor': '',
                                'class': 'form-control col-md-7 col-xs-12',
                            }
                        }) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.isActive, 'Activo:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"checkbox\">
                            {{ form_widget(form.isActive, {
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
            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "backend/page/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\page\\new.html.twig");
    }
}
