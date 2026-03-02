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

/* backend/staff/new.html.twig */
class __TwigTemplate_4d15d64b38a0cc616c1cc204447a7217 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/new.html.twig"));

        // line 3
        $context["page_section"] = "Staff";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["backend/default/form/fields.html.twig"], false);
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/staff/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
        // line 13
        yield "
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_staff");
        yield "\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "
                </h3>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                ";
        // line 27
        yield from         $this->loadTemplate("backend/staff/new.html.twig", "backend/staff/new.html.twig", 27, "72632740")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Información", "form" =>         // line 29
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })())]));
        // line 99
        yield "
                ";
        // line 100
        yield from         $this->loadTemplate("backend/staff/new.html.twig", "backend/staff/new.html.twig", 100, "1464605597")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Sucursales", "form" =>         // line 102
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })())]));
        // line 113
        yield "            </div>

            <div class=\"col-md-4 col-xs-12\">
                ";
        // line 116
        yield from         $this->loadTemplate("backend/staff/new.html.twig", "backend/staff/new.html.twig", 116, "1045661180")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Permisos", "form" =>         // line 118
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })())]));
        // line 126
        yield "            </div>
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
        // line 141
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'form_end');
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
        return "backend/staff/new.html.twig";
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
        return array (  133 => 141,  116 => 126,  114 => 118,  113 => 116,  108 => 113,  106 => 102,  105 => 100,  102 => 99,  100 => 29,  99 => 27,  89 => 20,  83 => 17,  77 => 13,  74 => 8,  64 => 7,  53 => 1,  51 => 5,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}

{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(form, {
        'attr': {
            'class': 'form-horizontal form-label-left',
            'data-parsley-validate': '',
        }
    }) }}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"{{ path('backend_staff') }}\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    {{ page_section }}
                </h3>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Información',
                    'form': form
                } only %}
                    {% block body %}
                        <div class=\"row\">
                            <div class=\"form-group\">
                                {{ form_label(form.username, 'Usuario:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.username, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.username) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.password.first, 'Contraseña:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.password.first, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.password.first) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.password.second, 'Repetir contraseña:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.password.second, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.password.second) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.roles, 'Rol:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.roles, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.roles) }}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endembed %}

                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Sucursales',
                    'form': form,
                } only %}
                    {% block body %}
                        {%- for child in form.branchOffices.children %}
                            <div class=\"checkbox list-icheck\">
                                {{ form_widget(child, {'attr': {'class': 'flat'}}) }}
                                {{ form_label(child) }}
                            </div>
                        {% endfor -%}
                    {% endblock %}
                {% endembed %}
            </div>

            <div class=\"col-md-4 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Permisos',
                    'form': form,
                } only %}
                    {% block body %}
                        {{ form_row(form.permissions, {
                            'label': false,
                        }) }}
                    {% endblock %}
                {% endembed %}
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
", "backend/staff/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\new.html.twig");
    }
}


/* backend/staff/new.html.twig */
class __TwigTemplate_4d15d64b38a0cc616c1cc204447a7217___72632740 extends Template
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
        // line 27
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/new.html.twig", 27);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        yield "                        <div class=\"row\">
                            <div class=\"form-group\">
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "username", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Usuario:"]);
        // line 38
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "username", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 44
        yield "
                                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "username", [], "any", false, false, false, 45), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Contraseña:"]);
        // line 54
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 60
        yield "
                                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "password", [], "any", false, false, false, 61), "first", [], "any", false, false, false, 61), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "password", [], "any", false, false, false, 66), "second", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Repetir contraseña:"]);
        // line 70
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72), "second", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 76
        yield "
                                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "password", [], "any", false, false, false, 77), "second", [], "any", false, false, false, 77), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "roles", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Rol:"]);
        // line 86
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "roles", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 92
        yield "
                                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "roles", [], "any", false, false, false, 93), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
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
        return "backend/staff/new.html.twig";
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
        return array (  443 => 93,  440 => 92,  438 => 88,  434 => 86,  432 => 82,  424 => 77,  421 => 76,  419 => 72,  415 => 70,  413 => 66,  405 => 61,  402 => 60,  400 => 56,  396 => 54,  394 => 50,  386 => 45,  383 => 44,  381 => 40,  377 => 38,  375 => 34,  371 => 32,  361 => 31,  338 => 27,  133 => 141,  116 => 126,  114 => 118,  113 => 116,  108 => 113,  106 => 102,  105 => 100,  102 => 99,  100 => 29,  99 => 27,  89 => 20,  83 => 17,  77 => 13,  74 => 8,  64 => 7,  53 => 1,  51 => 5,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}

{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(form, {
        'attr': {
            'class': 'form-horizontal form-label-left',
            'data-parsley-validate': '',
        }
    }) }}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"{{ path('backend_staff') }}\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    {{ page_section }}
                </h3>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Información',
                    'form': form
                } only %}
                    {% block body %}
                        <div class=\"row\">
                            <div class=\"form-group\">
                                {{ form_label(form.username, 'Usuario:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.username, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.username) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.password.first, 'Contraseña:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.password.first, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.password.first) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.password.second, 'Repetir contraseña:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.password.second, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.password.second) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.roles, 'Rol:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.roles, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.roles) }}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endembed %}

                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Sucursales',
                    'form': form,
                } only %}
                    {% block body %}
                        {%- for child in form.branchOffices.children %}
                            <div class=\"checkbox list-icheck\">
                                {{ form_widget(child, {'attr': {'class': 'flat'}}) }}
                                {{ form_label(child) }}
                            </div>
                        {% endfor -%}
                    {% endblock %}
                {% endembed %}
            </div>

            <div class=\"col-md-4 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Permisos',
                    'form': form,
                } only %}
                    {% block body %}
                        {{ form_row(form.permissions, {
                            'label': false,
                        }) }}
                    {% endblock %}
                {% endembed %}
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
", "backend/staff/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\new.html.twig");
    }
}


/* backend/staff/new.html.twig */
class __TwigTemplate_4d15d64b38a0cc616c1cc204447a7217___1464605597 extends Template
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
        // line 100
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/new.html.twig", 100);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "branchOffices", [], "any", false, false, false, 105), "children", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 106
            yield "                            <div class=\"checkbox list-icheck\">
                                ";
            // line 107
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "flat"]]);
            yield "
                                ";
            // line 108
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            yield "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
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
        return "backend/staff/new.html.twig";
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
        return array (  695 => 108,  691 => 107,  688 => 106,  684 => 105,  674 => 104,  651 => 100,  443 => 93,  440 => 92,  438 => 88,  434 => 86,  432 => 82,  424 => 77,  421 => 76,  419 => 72,  415 => 70,  413 => 66,  405 => 61,  402 => 60,  400 => 56,  396 => 54,  394 => 50,  386 => 45,  383 => 44,  381 => 40,  377 => 38,  375 => 34,  371 => 32,  361 => 31,  338 => 27,  133 => 141,  116 => 126,  114 => 118,  113 => 116,  108 => 113,  106 => 102,  105 => 100,  102 => 99,  100 => 29,  99 => 27,  89 => 20,  83 => 17,  77 => 13,  74 => 8,  64 => 7,  53 => 1,  51 => 5,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}

{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(form, {
        'attr': {
            'class': 'form-horizontal form-label-left',
            'data-parsley-validate': '',
        }
    }) }}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"{{ path('backend_staff') }}\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    {{ page_section }}
                </h3>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Información',
                    'form': form
                } only %}
                    {% block body %}
                        <div class=\"row\">
                            <div class=\"form-group\">
                                {{ form_label(form.username, 'Usuario:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.username, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.username) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.password.first, 'Contraseña:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.password.first, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.password.first) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.password.second, 'Repetir contraseña:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.password.second, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.password.second) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.roles, 'Rol:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.roles, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.roles) }}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endembed %}

                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Sucursales',
                    'form': form,
                } only %}
                    {% block body %}
                        {%- for child in form.branchOffices.children %}
                            <div class=\"checkbox list-icheck\">
                                {{ form_widget(child, {'attr': {'class': 'flat'}}) }}
                                {{ form_label(child) }}
                            </div>
                        {% endfor -%}
                    {% endblock %}
                {% endembed %}
            </div>

            <div class=\"col-md-4 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Permisos',
                    'form': form,
                } only %}
                    {% block body %}
                        {{ form_row(form.permissions, {
                            'label': false,
                        }) }}
                    {% endblock %}
                {% endembed %}
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
", "backend/staff/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\new.html.twig");
    }
}


/* backend/staff/new.html.twig */
class __TwigTemplate_4d15d64b38a0cc616c1cc204447a7217___1045661180 extends Template
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
        // line 116
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/new.html.twig", 116);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 120
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 121
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "permissions", [], "any", false, false, false, 121), 'row', ["label" => false]);
        // line 123
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
        return "backend/staff/new.html.twig";
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
        return array (  941 => 123,  938 => 121,  928 => 120,  905 => 116,  695 => 108,  691 => 107,  688 => 106,  684 => 105,  674 => 104,  651 => 100,  443 => 93,  440 => 92,  438 => 88,  434 => 86,  432 => 82,  424 => 77,  421 => 76,  419 => 72,  415 => 70,  413 => 66,  405 => 61,  402 => 60,  400 => 56,  396 => 54,  394 => 50,  386 => 45,  383 => 44,  381 => 40,  377 => 38,  375 => 34,  371 => 32,  361 => 31,  338 => 27,  133 => 141,  116 => 126,  114 => 118,  113 => 116,  108 => 113,  106 => 102,  105 => 100,  102 => 99,  100 => 29,  99 => 27,  89 => 20,  83 => 17,  77 => 13,  74 => 8,  64 => 7,  53 => 1,  51 => 5,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}

{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(form, {
        'attr': {
            'class': 'form-horizontal form-label-left',
            'data-parsley-validate': '',
        }
    }) }}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"{{ path('backend_staff') }}\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    {{ page_section }}
                </h3>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Información',
                    'form': form
                } only %}
                    {% block body %}
                        <div class=\"row\">
                            <div class=\"form-group\">
                                {{ form_label(form.username, 'Usuario:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.username, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.username) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.password.first, 'Contraseña:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.password.first, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.password.first) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.password.second, 'Repetir contraseña:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.password.second, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.password.second) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.roles, 'Rol:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(form.roles, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(form.roles) }}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endembed %}

                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Sucursales',
                    'form': form,
                } only %}
                    {% block body %}
                        {%- for child in form.branchOffices.children %}
                            <div class=\"checkbox list-icheck\">
                                {{ form_widget(child, {'attr': {'class': 'flat'}}) }}
                                {{ form_label(child) }}
                            </div>
                        {% endfor -%}
                    {% endblock %}
                {% endembed %}
            </div>

            <div class=\"col-md-4 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Permisos',
                    'form': form,
                } only %}
                    {% block body %}
                        {{ form_row(form.permissions, {
                            'label': false,
                        }) }}
                    {% endblock %}
                {% endembed %}
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
", "backend/staff/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\new.html.twig");
    }
}
