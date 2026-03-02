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
class __TwigTemplate_acb32d54b8ceed4b086604e9a2995a14 extends Template
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
        // line 3
        $context["page_section"] = "Usuarios";
        // line 4
        $context["page_title"] = "Perfil del Usuario";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/user/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_section"] ?? null), "html", null, true);
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
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reset_password", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 29)]), "html", null, true);
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
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "enabled", [], "any", false, false, false, 36)) {
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
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["toggle_enable_form"] ?? null), 'form', ["attr" => ["id" => "frm-toggle-enable"]]);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user"] ?? null), "html", null, true);
        yield "</h3>

                            <ul class=\"list-unstyled user_data\">
                                <li>
                                    <i class=\"fa fa-at user-profile-icon\"></i> ";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 58), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <i class=\"fa fa-phone user-profile-icon\"></i> ";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 61), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <i class=\"fa fa-birthday-cake user-profile-icon\"></i>
                                    ";
        // line 65
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "birthday", [], "any", false, false, false, 65)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "birthday", [], "any", false, false, false, 65), "d/m"), "html", null, true)) : (yield "-----"));
        yield "
                                </li>
                                ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "conektaId", [], "any", false, false, false, 67)) {
            // line 68
            yield "                                    <li class=\"m-top-xs\">
                                        <i class=\"fa fa-external-link user-profile-icon\"></i>
                                        <a href=\"https://admin.conekta.com/customers/";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "conektaId", [], "any", false, false, false, 70), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_transactions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 116)]), "html", null, true);
        yield "\">Transacciones</a>
                                    </li>
                                    <li role=\"presentation\">
                                        <a href=\"";
        // line 119
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 119)]), "html", null, true);
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
        return; yield '';
    }

    // line 149
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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

                \$.getJSON(\$(this).data('url'), function(data) {
                    \$modalBodyReset.empty();
                    \$('<a/>', {
                        'target': '_blank',
                        'href': data.url,
                        'text': data.url
                    }).appendTo(\$modalBodyReset);
                });
            });
        });

        function load_user_stats () {
            \$.ajax({
                url: '";
        // line 212
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_stats", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 212)]), "html", null, true);
        yield "'
            }).always(function (response) {
                \$('#userStatsContent').replaceWith(response);
            });
        }
    </script>
";
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
        return array (  330 => 212,  264 => 150,  260 => 149,  226 => 119,  220 => 116,  186 => 85,  180 => 82,  171 => 75,  163 => 70,  159 => 68,  157 => 67,  152 => 65,  145 => 61,  139 => 58,  132 => 54,  125 => 49,  119 => 47,  112 => 42,  105 => 37,  102 => 36,  100 => 35,  97 => 34,  88 => 29,  86 => 28,  69 => 14,  63 => 11,  57 => 7,  53 => 6,  48 => 1,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/show.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/show.html.twig");
    }
}
