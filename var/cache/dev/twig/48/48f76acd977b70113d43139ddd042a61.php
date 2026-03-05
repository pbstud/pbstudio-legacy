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

/* backend/session/profile.html.twig */
class __TwigTemplate_ee1392856734800d422113d0cbebac3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actions' => [$this, 'block_actions'],
            'subcontent' => [$this, 'block_subcontent'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("backend/layout-ajax.html.twig") : ("backend/layout.html.twig")), "backend/session/profile.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/profile.html.twig"));

        // line 5
        $context["page_section"] = "Clases";
        // line 6
        $context["active_tab"] = (( !array_key_exists("active_tab", $context)) ? ("tab_edit") : ((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 6, $this->source); })())));
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        yield "    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session");
        yield "\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "
                </h3>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "</h2>

                        ";
        // line 29
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 38
        yield "                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                            <h3>";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 42, $this->source); })()), "discipline", [], "any", false, false, false, 42), "html", null, true);
        yield "</h3>
                            <span class=\"label label-";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43)), "html", null, true);
        yield "\">
                                ";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44)), "html", null, true);
        yield "
                            </span>
                            <hr />

                            <ul class=\"list-unstyled user_data\">
                                <li>
                                    <strong>Fecha:</strong><br />";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "dateStart", [], "any", false, false, false, 50), "d/m/Y") . " ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "timeStart", [], "any", false, false, false, 50), "H:i")), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <strong>Instructor:</strong><br />";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 53, $this->source); })()), "instructor", [], "any", false, false, false, 53), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <strong>Salón:</strong><br />";
        // line 56
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 56, $this->source); })()), "exerciseRoom", [], "any", false, false, false, 56)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 56, $this->source); })()), "exerciseRoom", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true)) : (yield ""));
        yield "
                                </li>
                                <li>
                                    <strong>Modalidad:</strong><br />";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59)), "html", null, true);
        yield "
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                                <ul id=\"instructorTab\" class=\"nav nav-tabs nav-tabs-custom\" role=\"tablist\">
                                    <li role=\"presentation\" ";
        // line 66
        if (("tab_edit" == (isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 66, $this->source); })()))) {
            yield "class=\"active\"";
        }
        yield ">
                                        <a href=\"";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        yield "\">Editar</a>
                                    </li>
                                    ";
        // line 69
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_reservations")) {
            // line 70
            yield "                                        <li role=\"presentation\" ";
            if (("tab_reservations" == (isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 70, $this->source); })()))) {
                yield "class=\"active\"";
            }
            yield ">
                                            <a href=\"";
            // line 71
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\">Reservaciones</a>
                                        </li>
                                    ";
        }
        // line 74
        yield "                                    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_waitinglist")) {
            // line 75
            yield "                                        ";
            if (Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 75, $this->source); })()), "waitinglist", [], "any", false, false, false, 75))) {
                // line 76
                yield "                                            <li role=\"presentation\" ";
                if (("tab_waitinglist" == (isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 76, $this->source); })()))) {
                    yield "class=\"active\"";
                }
                yield ">
                                                <a href=\"";
                // line 77
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_waitinglist", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\">Lista de espera</a>
                                            </li>
                                        ";
            }
            // line 80
            yield "                                    ";
        }
        // line 81
        yield "                                    <li role=\"presentation\" ";
        if (("tab_audit" == (isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 81, $this->source); })()))) {
            yield "class=\"active\"";
        }
        yield ">
                                        <a href=\"";
        // line 82
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_audit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
        yield "\">
                                            <i class=\"fa fa-history\"></i> Auditoría
                                        </a>
                                    </li>
                                </ul>

                                <div id=\"instructorTabContent\" class=\"tab-content\">
                                    ";
        // line 89
        yield from $this->unwrap()->yieldBlock('subcontent', $context, $blocks);
        // line 90
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cancel_form"]) || array_key_exists("cancel_form", $context) ? $context["cancel_form"] : (function () { throw new RuntimeError('Variable "cancel_form" does not exist.', 99, $this->source); })()), 'form_start', ["attr" => ["id" => "frmCancel"]]);
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cancel_form"]) || array_key_exists("cancel_form", $context) ? $context["cancel_form"] : (function () { throw new RuntimeError('Variable "cancel_form" does not exist.', 103, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 29
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 30
        yield "                            ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_cancel")) {
            // line 31
            yield "                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li>
                                        <a class=\"cancel-link\" title=\"Cancelar\"><i class=\"fa fa-ban\"></i></a>
                                    </li>
                                </ul>
                            ";
        }
        // line 37
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 89
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 106
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 109
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_cancel")) {
            // line 110
            yield "        <script>
            \$(function () {
                \$('.cancel-link').on('click', function () {
                    if (confirm('¿Confirmas que deseas cancelar la clase?')) {
                        \$('#frmCancel').submit();
                    }
                });
            });
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session/profile.html.twig";
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
        return array (  323 => 110,  321 => 109,  315 => 107,  305 => 106,  286 => 89,  275 => 37,  267 => 31,  264 => 30,  254 => 29,  241 => 103,  239 => 99,  228 => 90,  226 => 89,  216 => 82,  209 => 81,  206 => 80,  200 => 77,  193 => 76,  190 => 75,  187 => 74,  181 => 71,  174 => 70,  172 => 69,  167 => 67,  161 => 66,  151 => 59,  145 => 56,  139 => 53,  133 => 50,  124 => 44,  120 => 43,  116 => 42,  110 => 38,  108 => 29,  103 => 27,  89 => 16,  83 => 13,  77 => 9,  67 => 8,  57 => 3,  55 => 6,  53 => 5,  40 => 1,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.request.xmlHttpRequest
    ? 'backend/layout-ajax.html.twig'
    : 'backend/layout.html.twig' %}

{% set page_section = 'Clases' %}
{% set active_tab = (active_tab is not defined ? 'tab_edit' : active_tab) %}

{% block content %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"{{ path('backend_session') }}\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    {{ page_section }}
                </h3>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>{{ page_title }}</h2>

                        {% block actions %}
                            {% if is_allowed_route('backend_session_cancel') %}
                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li>
                                        <a class=\"cancel-link\" title=\"Cancelar\"><i class=\"fa fa-ban\"></i></a>
                                    </li>
                                </ul>
                            {% endif %}
                        {% endblock %}
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                            <h3>{{ session.discipline }}</h3>
                            <span class=\"label label-{{ session.status|SessionStatusLabel }}\">
                                {{ session.status|SessionStatusDescription }}
                            </span>
                            <hr />

                            <ul class=\"list-unstyled user_data\">
                                <li>
                                    <strong>Fecha:</strong><br />{{ session.dateStart|date('d/m/Y') ~ ' ' ~ session.timeStart|date('H:i') }}
                                </li>
                                <li>
                                    <strong>Instructor:</strong><br />{{ session.instructor }}
                                </li>
                                <li>
                                    <strong>Salón:</strong><br />{{ session.exerciseRoom ? session.exerciseRoom.name }}
                                </li>
                                <li>
                                    <strong>Modalidad:</strong><br />{{ session.type|PackageSessionType }}
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                                <ul id=\"instructorTab\" class=\"nav nav-tabs nav-tabs-custom\" role=\"tablist\">
                                    <li role=\"presentation\" {% if 'tab_edit' == active_tab %}class=\"active\"{% endif %}>
                                        <a href=\"{{ path('backend_session_edit', { 'id': session.id }) }}\">Editar</a>
                                    </li>
                                    {% if is_allowed_route('backend_session_reservations') %}
                                        <li role=\"presentation\" {% if 'tab_reservations' == active_tab %}class=\"active\"{% endif %}>
                                            <a href=\"{{ path('backend_session_reservations', { 'id': session.id }) }}\">Reservaciones</a>
                                        </li>
                                    {% endif %}
                                    {% if is_allowed_route('backend_session_waitinglist') %}
                                        {% if session.waitinglist | length %}
                                            <li role=\"presentation\" {% if 'tab_waitinglist' == active_tab %}class=\"active\"{% endif %}>
                                                <a href=\"{{ path('backend_session_waitinglist', { 'id': session.id }) }}\">Lista de espera</a>
                                            </li>
                                        {% endif %}
                                    {% endif %}
                                    <li role=\"presentation\" {% if 'tab_audit' == active_tab %}class=\"active\"{% endif %}>
                                        <a href=\"{{ path('backend_session_audit', { 'id': session.id }) }}\">
                                            <i class=\"fa fa-history\"></i> Auditoría
                                        </a>
                                    </li>
                                </ul>

                                <div id=\"instructorTabContent\" class=\"tab-content\">
                                    {% block subcontent %}{% endblock %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ form_start(cancel_form, {
        'attr': {
            'id': 'frmCancel',
        }
    }) }}{{ form_end(cancel_form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {% if is_allowed_route('backend_session_cancel') %}
        <script>
            \$(function () {
                \$('.cancel-link').on('click', function () {
                    if (confirm('¿Confirmas que deseas cancelar la clase?')) {
                        \$('#frmCancel').submit();
                    }
                });
            });
        </script>
    {% endif %}
{% endblock %}
", "backend/session/profile.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session\\profile.html.twig");
    }
}
