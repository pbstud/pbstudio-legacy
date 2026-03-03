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

/* backend/user/show.html.twig */
class __TwigTemplate_9ceb41abebb733d678a8718c14bbde13 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/show.html.twig"));

        // line 3
        $context["page_section"] = "Usuarios";
        // line 4
        $context["page_title"] = "Perfil del Usuario";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/user/show.html.twig", 1);
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
        yield "    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user");
        yield "\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "
                </h3>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Perfil del usuario</h2>

                        <div class=\"pull-right\">
                            ";
        // line 28
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_user_reset_password")) {
            // line 29
            yield "                                <button type=\"button\" class=\"btn btn-xs btn-danger btn-reset-password\" data-url=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reset_password", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">
                                    <i class=\"fa fa-refresh\"></i>
                                    Restablecer Contraseña
                                </button>
                            ";
        }
        // line 34
        yield "
                            ";
        // line 35
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_user_toggle_enable")) {
            // line 36
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "enabled", [], "any", false, false, false, 36)) {
                // line 37
                yield "                                    <button type=\"button\" class=\"btn btn-xs btn-warning btn-toggle-enable\" data-action=\"deshabilitar\">
                                        <i class=\"fa fa-ban\"></i>
                                        Deshabilitar
                                    </button>
                                ";
            } else {
                // line 42
                yield "                                    <button type=\"button\" class=\"btn btn-xs btn-success btn-toggle-enable\" data-action=\"habilitar\">
                                        <i class=\"fa fa-check-circle-o\"></i>
                                        Habilitar
                                    </button>
                                ";
            }
            // line 47
            yield "                                ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["toggle_enable_form"]) || array_key_exists("toggle_enable_form", $context) ? $context["toggle_enable_form"] : (function () { throw new RuntimeError('Variable "toggle_enable_form" does not exist.', 47, $this->source); })()), 'form', ["attr" => ["id" => "frm-toggle-enable"]]);
            yield "
                            ";
        }
        // line 49
        yield "                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                            <h3 class=\"mtop0\">";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "</h3>

                            <ul class=\"list-unstyled user_data\">
                                <li>
                                    <i class=\"fa fa-at user-profile-icon\"></i> ";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <i class=\"fa fa-phone user-profile-icon\"></i> ";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "phone", [], "any", false, false, false, 61), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <i class=\"fa fa-birthday-cake user-profile-icon\"></i>
                                    ";
        // line 65
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "birthday", [], "any", false, false, false, 65)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "birthday", [], "any", false, false, false, 65), "d/m"), "html", null, true)) : (yield "-----"));
        yield "
                                </li>
                                ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "conektaId", [], "any", false, false, false, 67)) {
            // line 68
            yield "                                    <li class=\"m-top-xs\">
                                        <i class=\"fa fa-external-link user-profile-icon\"></i>
                                        <a href=\"https://admin.conekta.com/customers/";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "conektaId", [], "any", false, false, false, 70), "html", null, true);
            yield "\" target=\"_blank\">
                                            Ver en Conekta
                                        </a>
                                    </li>
                                ";
        }
        // line 75
        yield "                            </ul>

                            <br />
                            <h4>Contacto de emergencia</h4>

                            <ul class=\"list-unstyled user_data\">
                                <li>
                                    <i class=\"fa fa-user user-profile-icon\"></i> ";
        // line 82
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactName", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactName", [], "any", false, false, false, 82), "-----")) : ("-----")), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <i class=\"fa fa-phone user-profile-icon\"></i> ";
        // line 85
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactPhone", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactPhone", [], "any", false, false, false, 85), "-----")) : ("-----")), "html", null, true);
        yield "
                                </li>
                            </ul>

                            <br />
                            <h4>Clases</h4>

                            <div id=\"userStatsContent\">
                                <table class=\"table-user-stats\">
                                    <tr>
                                        <td>Disponibles:</td>
                                        <td>. . .</td>
                                    </tr>
                                    <tr>
                                        <td>Tomadas:</td>
                                        <td>. . .</td>
                                    </tr>
                                    <tr>
                                        <td>Próximas:</td>
                                        <td>. . .</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- / Stats -->
                        </div>
                        <!-- / General information -->

                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                                <ul id=\"userTab\" class=\"nav nav-tabs nav-tabs-custom\" role=\"tablist\">
                                    <li role=\"presentation\">
                                        <a href=\"";
        // line 116
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_transactions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
        yield "\">Transacciones</a>
                                    </li>
                                    <li role=\"presentation\">
                                        <a href=\"";
        // line 119
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119)]), "html", null, true);
        yield "\">Reservaciones</a>
                                    </li>
                                </ul>
                                <div id=\"userTabContent\" class=\"tab-content\">
                                </div>
                            </div>
                            <!-- / Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"modal-reset-password\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Restablecer Contraseña</h4>
                </div>
                <div class=\"modal-body\" data-loading=\"Cargando...\"></div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 149
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        \$(function () {
            load_user_stats();

            \$('#userTab li a').on('click', function (e) {
                e.preventDefault();

                var target = \$(e.target);
                var url = target.prop('href');

                target.trigger('blur');

                if (target.parent().hasClass('active')) {
                    return;
                }

                \$.loader.show('#userTabContent');

                target.closest('#userTab').find('li').removeClass('active');
                target.parent().addClass('active');

                \$('#userTabContent').load(url);
            });

            \$('#userTab li:first-child a').trigger('click');

            //////////////////////////////////
            // Enable / Disable
            \$('.btn-toggle-enable').on('click', function () {
                if (confirm('¿Confirmas que deseas ' + \$(this).data('action')  + ' el usuario?')) {
                    \$('#frm-toggle-enable').submit();
                }
            });

            //////////////////////////////////
            // Reset password
            const \$modalReset = \$('#modal-reset-password').modal({show: false});
            const \$modalBodyReset = \$modalReset.find('.modal-body');

            \$('.btn-reset-password').on('click', function () {
                if (!confirm('¿Confirmas que deseas restablecer la contraseña del usuario?')) {
                    return;
                }

                \$modalBodyReset.text(\$modalBodyReset.data('loading'))
                \$modalReset.modal('show');

                let csrfToken = \$('meta[name=\"csrf-token\"]').attr('content');
                let url = \$(this).data('url');

                \$.ajax({
                    url: url,
                    type: 'post',
                    data: {
                        _token: csrfToken
                    },
                    dataType: 'json',
                    success: function(data) {
                        \$modalBodyReset.empty();
                        \$('<a/>', {
                            'target': '_blank',
                            'href': data.url,
                            'text': data.url
                        }).appendTo(\$modalBodyReset);
                    }
                });
            });
        });

        function load_user_stats () {
            \$.ajax({
                url: '";
        // line 223
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_stats", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 223, $this->source); })()), "id", [], "any", false, false, false, 223)]), "html", null, true);
        yield "'
            }).always(function (response) {
                \$('#userStatsContent').replaceWith(response);
            });
        }
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
        return "backend/user/show.html.twig";
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
        return array (  371 => 223,  294 => 150,  284 => 149,  244 => 119,  238 => 116,  204 => 85,  198 => 82,  189 => 75,  181 => 70,  177 => 68,  175 => 67,  170 => 65,  163 => 61,  157 => 58,  150 => 54,  143 => 49,  137 => 47,  130 => 42,  123 => 37,  120 => 36,  118 => 35,  115 => 34,  106 => 29,  104 => 28,  87 => 14,  81 => 11,  75 => 7,  65 => 6,  54 => 1,  52 => 4,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Usuarios' %}
{% set page_title = 'Perfil del Usuario' %}

{% block content %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"{{ path('backend_user') }}\" class=\"btn btn-default btn-return-to\">
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
                        <h2>Perfil del usuario</h2>

                        <div class=\"pull-right\">
                            {% if is_allowed_route('backend_user_reset_password') %}
                                <button type=\"button\" class=\"btn btn-xs btn-danger btn-reset-password\" data-url=\"{{ path('backend_user_reset_password', {'id': user.id}) }}\">
                                    <i class=\"fa fa-refresh\"></i>
                                    Restablecer Contraseña
                                </button>
                            {% endif %}

                            {% if is_allowed_route('backend_user_toggle_enable') %}
                                {% if user.enabled %}
                                    <button type=\"button\" class=\"btn btn-xs btn-warning btn-toggle-enable\" data-action=\"deshabilitar\">
                                        <i class=\"fa fa-ban\"></i>
                                        Deshabilitar
                                    </button>
                                {% else %}
                                    <button type=\"button\" class=\"btn btn-xs btn-success btn-toggle-enable\" data-action=\"habilitar\">
                                        <i class=\"fa fa-check-circle-o\"></i>
                                        Habilitar
                                    </button>
                                {% endif %}
                                {{ form(toggle_enable_form, {'attr': {'id': 'frm-toggle-enable'}}) }}
                            {% endif %}
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                            <h3 class=\"mtop0\">{{ user }}</h3>

                            <ul class=\"list-unstyled user_data\">
                                <li>
                                    <i class=\"fa fa-at user-profile-icon\"></i> {{ user.email }}
                                </li>
                                <li>
                                    <i class=\"fa fa-phone user-profile-icon\"></i> {{ user.phone }}
                                </li>
                                <li>
                                    <i class=\"fa fa-birthday-cake user-profile-icon\"></i>
                                    {{ user.birthday ? user.birthday|date('d/m') : '-----' }}
                                </li>
                                {% if user.conektaId %}
                                    <li class=\"m-top-xs\">
                                        <i class=\"fa fa-external-link user-profile-icon\"></i>
                                        <a href=\"https://admin.conekta.com/customers/{{ user.conektaId }}\" target=\"_blank\">
                                            Ver en Conekta
                                        </a>
                                    </li>
                                {% endif %}
                            </ul>

                            <br />
                            <h4>Contacto de emergencia</h4>

                            <ul class=\"list-unstyled user_data\">
                                <li>
                                    <i class=\"fa fa-user user-profile-icon\"></i> {{ user.emergencyContactName|default('-----') }}
                                </li>
                                <li>
                                    <i class=\"fa fa-phone user-profile-icon\"></i> {{ user.emergencyContactPhone|default('-----') }}
                                </li>
                            </ul>

                            <br />
                            <h4>Clases</h4>

                            <div id=\"userStatsContent\">
                                <table class=\"table-user-stats\">
                                    <tr>
                                        <td>Disponibles:</td>
                                        <td>. . .</td>
                                    </tr>
                                    <tr>
                                        <td>Tomadas:</td>
                                        <td>. . .</td>
                                    </tr>
                                    <tr>
                                        <td>Próximas:</td>
                                        <td>. . .</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- / Stats -->
                        </div>
                        <!-- / General information -->

                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                                <ul id=\"userTab\" class=\"nav nav-tabs nav-tabs-custom\" role=\"tablist\">
                                    <li role=\"presentation\">
                                        <a href=\"{{ path('backend_user_transactions', { 'id': user.id }) }}\">Transacciones</a>
                                    </li>
                                    <li role=\"presentation\">
                                        <a href=\"{{ path('backend_user_reservations', { 'id': user.id }) }}\">Reservaciones</a>
                                    </li>
                                </ul>
                                <div id=\"userTabContent\" class=\"tab-content\">
                                </div>
                            </div>
                            <!-- / Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"modal-reset-password\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Restablecer Contraseña</h4>
                </div>
                <div class=\"modal-body\" data-loading=\"Cargando...\"></div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        \$(function () {
            load_user_stats();

            \$('#userTab li a').on('click', function (e) {
                e.preventDefault();

                var target = \$(e.target);
                var url = target.prop('href');

                target.trigger('blur');

                if (target.parent().hasClass('active')) {
                    return;
                }

                \$.loader.show('#userTabContent');

                target.closest('#userTab').find('li').removeClass('active');
                target.parent().addClass('active');

                \$('#userTabContent').load(url);
            });

            \$('#userTab li:first-child a').trigger('click');

            //////////////////////////////////
            // Enable / Disable
            \$('.btn-toggle-enable').on('click', function () {
                if (confirm('¿Confirmas que deseas ' + \$(this).data('action')  + ' el usuario?')) {
                    \$('#frm-toggle-enable').submit();
                }
            });

            //////////////////////////////////
            // Reset password
            const \$modalReset = \$('#modal-reset-password').modal({show: false});
            const \$modalBodyReset = \$modalReset.find('.modal-body');

            \$('.btn-reset-password').on('click', function () {
                if (!confirm('¿Confirmas que deseas restablecer la contraseña del usuario?')) {
                    return;
                }

                \$modalBodyReset.text(\$modalBodyReset.data('loading'))
                \$modalReset.modal('show');

                let csrfToken = \$('meta[name=\"csrf-token\"]').attr('content');
                let url = \$(this).data('url');

                \$.ajax({
                    url: url,
                    type: 'post',
                    data: {
                        _token: csrfToken
                    },
                    dataType: 'json',
                    success: function(data) {
                        \$modalBodyReset.empty();
                        \$('<a/>', {
                            'target': '_blank',
                            'href': data.url,
                            'text': data.url
                        }).appendTo(\$modalBodyReset);
                    }
                });
            });
        });

        function load_user_stats () {
            \$.ajax({
                url: '{{ path('backend_user_stats', { 'id': user.id }) }}'
            }).always(function (response) {
                \$('#userStatsContent').replaceWith(response);
            });
        }
    </script>
{% endblock %}
", "backend/user/show.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\show.html.twig");
    }
}
