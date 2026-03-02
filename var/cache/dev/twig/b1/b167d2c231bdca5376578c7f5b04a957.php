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

/* backend/staff/edit.html.twig */
class __TwigTemplate_fd409618cf5665d9f40038390c0716df extends Template
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
        // line 1
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/edit.html.twig"));

        // line 3
        $context["page_section"] = "Staff";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 5, $this->source); })()), ["backend/default/form/fields.html.twig"], false);
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/staff/edit.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
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
            <div class=\"title_right\">
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-default\">Acciones</button>
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_staff_password", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\" data-toggle=\"modal\" data-target=\"#changePasswordModal\">
                                <i class=\"fa fa-lock\"></i>
                                Cambiar contraseña
                            </a>
                        </li>
                        <li>
                            <a class=\"delete-link\">
                                <i class=\"fa fa-trash\"></i>
                                Eliminar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                ";
        // line 50
        yield from         $this->loadTemplate("backend/staff/edit.html.twig", "backend/staff/edit.html.twig", 50, "883475289")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Información", "staff" =>         // line 52
(isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 52, $this->source); })()), "edit_form" =>         // line 53
(isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 53, $this->source); })())]));
        // line 98
        yield "
                ";
        // line 99
        yield from         $this->loadTemplate("backend/staff/edit.html.twig", "backend/staff/edit.html.twig", 99, "662538044")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Sucursales", "edit_form" =>         // line 101
(isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 101, $this->source); })())]));
        // line 112
        yield "            </div>

            <div class=\"col-md-4 col-xs-12\">
                ";
        // line 115
        yield from         $this->loadTemplate("backend/staff/edit.html.twig", "backend/staff/edit.html.twig", 115, "1517912457")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Permisos", "edit_form" =>         // line 117
(isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 117, $this->source); })())]));
        // line 125
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
        // line 140
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 140, $this->source); })()), 'form_end');
        yield "

    ";
        // line 142
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 142, $this->source); })()), 'form_start', ["attr" => ["id" => "frmDelete"]]);
        // line 146
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 146, $this->source); })()), 'form_end');
        yield "

    <div id=\"changePasswordModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
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

        \$('#changePasswordModal').on('hidden.bs.modal', function () {
            \$(this).removeData('bs.modal');
            \$(this).find('.modal-content').empty();
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
        return "backend/staff/edit.html.twig";
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
        return array (  198 => 157,  188 => 156,  168 => 146,  166 => 142,  161 => 140,  144 => 125,  142 => 117,  141 => 115,  136 => 112,  134 => 101,  133 => 99,  130 => 98,  128 => 53,  127 => 52,  126 => 50,  105 => 32,  90 => 20,  84 => 17,  78 => 13,  75 => 8,  65 => 7,  54 => 1,  52 => 5,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}

{% form_theme edit_form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(edit_form, {
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
            <div class=\"title_right\">
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-default\">Acciones</button>
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"{{ path('backend_staff_password', { 'id': staff.id }) }}\" data-toggle=\"modal\" data-target=\"#changePasswordModal\">
                                <i class=\"fa fa-lock\"></i>
                                Cambiar contraseña
                            </a>
                        </li>
                        <li>
                            <a class=\"delete-link\">
                                <i class=\"fa fa-trash\"></i>
                                Eliminar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Información',
                    'staff': staff,
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        <div class=\"row\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-5 col-sm-5 col-xs-12\">Usuario:</label>
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    <input type=\"text\" value=\"{{ staff.username }}\" class=\"form-control\" readonly />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(edit_form.roles, 'Rol:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(edit_form.roles, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(edit_form.roles) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(edit_form.isActive, 'Activo:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(edit_form.isActive, {
                                        'attr': {
                                            'class': 'js-switch',
                                        }
                                    }) }}
                                    {{ form_errors(edit_form.isActive) }}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endembed %}

                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Sucursales',
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        {%- for child in edit_form.branchOffices.children %}
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
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        {{ form_row(edit_form.permissions, {
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
    {{ form_end(edit_form) }}

    {{ form_start(delete_form, {
        'attr': {
            'id': 'frmDelete',
        }
    }) }}{{ form_end(delete_form) }}

    <div id=\"changePasswordModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>
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

        \$('#changePasswordModal').on('hidden.bs.modal', function () {
            \$(this).removeData('bs.modal');
            \$(this).find('.modal-content').empty();
        });
    </script>
{% endblock %}
", "backend/staff/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\edit.html.twig");
    }
}


/* backend/staff/edit.html.twig */
class __TwigTemplate_fd409618cf5665d9f40038390c0716df___883475289 extends Template
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
        // line 50
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/edit.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/edit.html.twig", 50);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        yield "                        <div class=\"row\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-5 col-sm-5 col-xs-12\">Usuario:</label>
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    <input type=\"text\" value=\"";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 60, $this->source); })()), "username", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"form-control\" readonly />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 65, $this->source); })()), "roles", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Rol:"]);
        // line 69
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 71, $this->source); })()), "roles", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 75
        yield "
                                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 76, $this->source); })()), "roles", [], "any", false, false, false, 76), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 81, $this->source); })()), "isActive", [], "any", false, false, false, 81), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Activo:"]);
        // line 85
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 87, $this->source); })()), "isActive", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "js-switch"]]);
        // line 91
        yield "
                                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 92, $this->source); })()), "isActive", [], "any", false, false, false, 92), 'errors');
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
        return "backend/staff/edit.html.twig";
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
        return array (  527 => 92,  524 => 91,  522 => 87,  518 => 85,  516 => 81,  508 => 76,  505 => 75,  503 => 71,  499 => 69,  497 => 65,  489 => 60,  483 => 56,  473 => 55,  450 => 50,  198 => 157,  188 => 156,  168 => 146,  166 => 142,  161 => 140,  144 => 125,  142 => 117,  141 => 115,  136 => 112,  134 => 101,  133 => 99,  130 => 98,  128 => 53,  127 => 52,  126 => 50,  105 => 32,  90 => 20,  84 => 17,  78 => 13,  75 => 8,  65 => 7,  54 => 1,  52 => 5,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}

{% form_theme edit_form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(edit_form, {
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
            <div class=\"title_right\">
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-default\">Acciones</button>
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"{{ path('backend_staff_password', { 'id': staff.id }) }}\" data-toggle=\"modal\" data-target=\"#changePasswordModal\">
                                <i class=\"fa fa-lock\"></i>
                                Cambiar contraseña
                            </a>
                        </li>
                        <li>
                            <a class=\"delete-link\">
                                <i class=\"fa fa-trash\"></i>
                                Eliminar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Información',
                    'staff': staff,
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        <div class=\"row\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-5 col-sm-5 col-xs-12\">Usuario:</label>
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    <input type=\"text\" value=\"{{ staff.username }}\" class=\"form-control\" readonly />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(edit_form.roles, 'Rol:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(edit_form.roles, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(edit_form.roles) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(edit_form.isActive, 'Activo:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(edit_form.isActive, {
                                        'attr': {
                                            'class': 'js-switch',
                                        }
                                    }) }}
                                    {{ form_errors(edit_form.isActive) }}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endembed %}

                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Sucursales',
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        {%- for child in edit_form.branchOffices.children %}
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
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        {{ form_row(edit_form.permissions, {
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
    {{ form_end(edit_form) }}

    {{ form_start(delete_form, {
        'attr': {
            'id': 'frmDelete',
        }
    }) }}{{ form_end(delete_form) }}

    <div id=\"changePasswordModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>
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

        \$('#changePasswordModal').on('hidden.bs.modal', function () {
            \$(this).removeData('bs.modal');
            \$(this).find('.modal-content').empty();
        });
    </script>
{% endblock %}
", "backend/staff/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\edit.html.twig");
    }
}


/* backend/staff/edit.html.twig */
class __TwigTemplate_fd409618cf5665d9f40038390c0716df___662538044 extends Template
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
        // line 99
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/edit.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/edit.html.twig", 99);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 104, $this->source); })()), "branchOffices", [], "any", false, false, false, 104), "children", [], "any", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 105
            yield "                            <div class=\"checkbox list-icheck\">
                                ";
            // line 106
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "flat"]]);
            yield "
                                ";
            // line 107
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
        return "backend/staff/edit.html.twig";
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
        return array (  810 => 107,  806 => 106,  803 => 105,  799 => 104,  789 => 103,  766 => 99,  527 => 92,  524 => 91,  522 => 87,  518 => 85,  516 => 81,  508 => 76,  505 => 75,  503 => 71,  499 => 69,  497 => 65,  489 => 60,  483 => 56,  473 => 55,  450 => 50,  198 => 157,  188 => 156,  168 => 146,  166 => 142,  161 => 140,  144 => 125,  142 => 117,  141 => 115,  136 => 112,  134 => 101,  133 => 99,  130 => 98,  128 => 53,  127 => 52,  126 => 50,  105 => 32,  90 => 20,  84 => 17,  78 => 13,  75 => 8,  65 => 7,  54 => 1,  52 => 5,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}

{% form_theme edit_form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(edit_form, {
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
            <div class=\"title_right\">
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-default\">Acciones</button>
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"{{ path('backend_staff_password', { 'id': staff.id }) }}\" data-toggle=\"modal\" data-target=\"#changePasswordModal\">
                                <i class=\"fa fa-lock\"></i>
                                Cambiar contraseña
                            </a>
                        </li>
                        <li>
                            <a class=\"delete-link\">
                                <i class=\"fa fa-trash\"></i>
                                Eliminar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Información',
                    'staff': staff,
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        <div class=\"row\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-5 col-sm-5 col-xs-12\">Usuario:</label>
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    <input type=\"text\" value=\"{{ staff.username }}\" class=\"form-control\" readonly />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(edit_form.roles, 'Rol:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(edit_form.roles, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(edit_form.roles) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(edit_form.isActive, 'Activo:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(edit_form.isActive, {
                                        'attr': {
                                            'class': 'js-switch',
                                        }
                                    }) }}
                                    {{ form_errors(edit_form.isActive) }}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endembed %}

                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Sucursales',
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        {%- for child in edit_form.branchOffices.children %}
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
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        {{ form_row(edit_form.permissions, {
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
    {{ form_end(edit_form) }}

    {{ form_start(delete_form, {
        'attr': {
            'id': 'frmDelete',
        }
    }) }}{{ form_end(delete_form) }}

    <div id=\"changePasswordModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>
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

        \$('#changePasswordModal').on('hidden.bs.modal', function () {
            \$(this).removeData('bs.modal');
            \$(this).find('.modal-content').empty();
        });
    </script>
{% endblock %}
", "backend/staff/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\edit.html.twig");
    }
}


/* backend/staff/edit.html.twig */
class __TwigTemplate_fd409618cf5665d9f40038390c0716df___1517912457 extends Template
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
        // line 115
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/edit.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/edit.html.twig", 115);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 120
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 120, $this->source); })()), "permissions", [], "any", false, false, false, 120), 'row', ["label" => false]);
        // line 122
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
        return "backend/staff/edit.html.twig";
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
        return array (  1087 => 122,  1084 => 120,  1074 => 119,  1051 => 115,  810 => 107,  806 => 106,  803 => 105,  799 => 104,  789 => 103,  766 => 99,  527 => 92,  524 => 91,  522 => 87,  518 => 85,  516 => 81,  508 => 76,  505 => 75,  503 => 71,  499 => 69,  497 => 65,  489 => 60,  483 => 56,  473 => 55,  450 => 50,  198 => 157,  188 => 156,  168 => 146,  166 => 142,  161 => 140,  144 => 125,  142 => 117,  141 => 115,  136 => 112,  134 => 101,  133 => 99,  130 => 98,  128 => 53,  127 => 52,  126 => 50,  105 => 32,  90 => 20,  84 => 17,  78 => 13,  75 => 8,  65 => 7,  54 => 1,  52 => 5,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Staff' %}

{% form_theme edit_form with ['backend/default/form/fields.html.twig'] only %}

{% block content %}
    {{ form_start(edit_form, {
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
            <div class=\"title_right\">
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-default\">Acciones</button>
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"{{ path('backend_staff_password', { 'id': staff.id }) }}\" data-toggle=\"modal\" data-target=\"#changePasswordModal\">
                                <i class=\"fa fa-lock\"></i>
                                Cambiar contraseña
                            </a>
                        </li>
                        <li>
                            <a class=\"delete-link\">
                                <i class=\"fa fa-trash\"></i>
                                Eliminar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Información',
                    'staff': staff,
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        <div class=\"row\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-5 col-sm-5 col-xs-12\">Usuario:</label>
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    <input type=\"text\" value=\"{{ staff.username }}\" class=\"form-control\" readonly />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(edit_form.roles, 'Rol:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(edit_form.roles, {
                                        'attr': {
                                            'class': 'form-control',
                                        }
                                    }) }}
                                    {{ form_errors(edit_form.roles) }}
                                </div>
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(edit_form.isActive, 'Activo:', {
                                    'label_attr': {
                                        'class': 'control-label col-md-5 col-sm-5 col-xs-12',
                                    }
                                }) }}
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    {{ form_widget(edit_form.isActive, {
                                        'attr': {
                                            'class': 'js-switch',
                                        }
                                    }) }}
                                    {{ form_errors(edit_form.isActive) }}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endembed %}

                {% embed 'backend/default/embed/form_common.html.twig' with {
                    'page_title': 'Sucursales',
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        {%- for child in edit_form.branchOffices.children %}
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
                    'edit_form': edit_form,
                } only %}
                    {% block body %}
                        {{ form_row(edit_form.permissions, {
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
    {{ form_end(edit_form) }}

    {{ form_start(delete_form, {
        'attr': {
            'id': 'frmDelete',
        }
    }) }}{{ form_end(delete_form) }}

    <div id=\"changePasswordModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>
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

        \$('#changePasswordModal').on('hidden.bs.modal', function () {
            \$(this).removeData('bs.modal');
            \$(this).find('.modal-content').empty();
        });
    </script>
{% endblock %}
", "backend/staff/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\edit.html.twig");
    }
}
