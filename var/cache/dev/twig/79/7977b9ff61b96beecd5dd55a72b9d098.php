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

/* backend/user/new.html.twig */
class __TwigTemplate_7340ee9577e6c9d1271d32cbcc7c3d7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/new.html.twig"));

        // line 3
        $context["page_section"] = "Usuarios";
        // line 4
        $context["page_title"] = "Nuevo Usuario";
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), ["backend/default/form/fields.html.twig"], false);
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/user/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
        // line 14
        yield "
        ";
        // line 15
        yield from         $this->loadTemplate("backend/user/new.html.twig", "backend/user/new.html.twig", 15, "449668515")->unwrap()->yield(CoreExtension::toArray(["page_section" =>         // line 16
(isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 16, $this->source); })()), "page_title" => "Información de acceso", "return_to" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user"), "form" =>         // line 19
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })())]));
        // line 148
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), 'form_end');
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
        return "backend/user/new.html.twig";
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
        return array (  86 => 148,  84 => 19,  83 => 16,  82 => 15,  79 => 14,  76 => 9,  66 => 8,  55 => 1,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Usuarios' %}
{% set page_title = 'Nuevo Usuario' %}

{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(form, {
        'attr': {
            'class': 'form-horizontal form-label-left',
            'data-parsley-validate': '',
        }
    }) }}
        {% embed 'backend/default/embed/form_common.html.twig' with {
            'page_section': page_section,
            'page_title': 'Información de acceso',
            'return_to': path('backend_user'),
            'form': form
        } only %}
            {% block body %}
                <div class=\"form-group\">
                    {{ form_label(form.name, 'Nombre:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.name, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.name) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.lastname, 'Apellidos:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.lastname, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.lastname) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.email, 'Correo:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.email, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.email) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.phone, 'Teléfono:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.phone, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.phone) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.plainPassword.first, 'Contraseña:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.plainPassword.first, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.plainPassword.first) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.plainPassword.second, 'Confirmar contraseña:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.plainPassword.second, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.plainPassword.second) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.branchOffice, 'Sucursal:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.branchOffice, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.branchOffice) }}
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Registrar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            {% endblock %}
        {% endembed %}
    {{ form_end(form) }}
{% endblock %}
", "backend/user/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\new.html.twig");
    }
}


/* backend/user/new.html.twig */
class __TwigTemplate_7340ee9577e6c9d1271d32cbcc7c3d7b___449668515 extends Template
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
        // line 15
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/user/new.html.twig", 15);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "                <div class=\"form-group\">
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Nombre:"]);
        // line 27
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 33
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lastname", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Apellidos:"]);
        // line 43
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "lastname", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 49
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "lastname", [], "any", false, false, false, 50), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Correo:"]);
        // line 59
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 65
        yield "
                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "phone", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Teléfono:"]);
        // line 75
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "phone", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 81
        yield "
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "phone", [], "any", false, false, false, 82), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "plainPassword", [], "any", false, false, false, 87), "first", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Contraseña:"]);
        // line 91
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "plainPassword", [], "any", false, false, false, 93), "first", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 97
        yield "
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "plainPassword", [], "any", false, false, false, 98), "first", [], "any", false, false, false, 98), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "plainPassword", [], "any", false, false, false, 103), "second", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Confirmar contraseña:"]);
        // line 107
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "plainPassword", [], "any", false, false, false, 109), "second", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 113
        yield "
                        ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "plainPassword", [], "any", false, false, false, 114), "second", [], "any", false, false, false, 114), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "branchOffice", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Sucursal:"]);
        // line 123
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "branchOffice", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 129
        yield "
                        ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "branchOffice", [], "any", false, false, false, 130), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Registrar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
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
        return "backend/user/new.html.twig";
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
        return array (  460 => 130,  457 => 129,  455 => 125,  451 => 123,  449 => 119,  441 => 114,  438 => 113,  436 => 109,  432 => 107,  430 => 103,  422 => 98,  419 => 97,  417 => 93,  413 => 91,  411 => 87,  403 => 82,  400 => 81,  398 => 77,  394 => 75,  392 => 71,  384 => 66,  381 => 65,  379 => 61,  375 => 59,  373 => 55,  365 => 50,  362 => 49,  360 => 45,  356 => 43,  354 => 39,  346 => 34,  343 => 33,  341 => 29,  337 => 27,  335 => 23,  332 => 22,  322 => 21,  299 => 15,  86 => 148,  84 => 19,  83 => 16,  82 => 15,  79 => 14,  76 => 9,  66 => 8,  55 => 1,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Usuarios' %}
{% set page_title = 'Nuevo Usuario' %}

{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(form, {
        'attr': {
            'class': 'form-horizontal form-label-left',
            'data-parsley-validate': '',
        }
    }) }}
        {% embed 'backend/default/embed/form_common.html.twig' with {
            'page_section': page_section,
            'page_title': 'Información de acceso',
            'return_to': path('backend_user'),
            'form': form
        } only %}
            {% block body %}
                <div class=\"form-group\">
                    {{ form_label(form.name, 'Nombre:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.name, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.name) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.lastname, 'Apellidos:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.lastname, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.lastname) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.email, 'Correo:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.email, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.email) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.phone, 'Teléfono:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.phone, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.phone) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.plainPassword.first, 'Contraseña:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.plainPassword.first, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.plainPassword.first) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.plainPassword.second, 'Confirmar contraseña:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.plainPassword.second, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.plainPassword.second) }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.branchOffice, 'Sucursal:', {
                        'label_attr': {
                            'class': 'control-label col-md-3 col-sm-3 col-xs-12',
                        }
                    }) }}
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        {{ form_widget(form.branchOffice, {
                            'attr': {
                                'class': 'form-control',
                            }
                        }) }}
                        {{ form_errors(form.branchOffice) }}
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Registrar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            {% endblock %}
        {% endembed %}
    {{ form_end(form) }}
{% endblock %}
", "backend/user/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\new.html.twig");
    }
}
