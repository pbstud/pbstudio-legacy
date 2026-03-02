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

/* backend/transaction/show.html.twig */
class __TwigTemplate_ffc699d917d68420d7b5cd0a96d68192 extends Template
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
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/transaction/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction");
        yield "\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>

                    Transacciones
                </h3>
            </div>

            <div class=\"title_right\">
                <div class=\"form-group pull-right\">
                    ";
        // line 18
        if (($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_transaction_cancel") && (Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID") == CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["transaction"] ?? null), "status", [], "any", false, false, false, 19)))) {
            // line 21
            yield "                        <button type=\"button\" class=\"btn btn-danger\" data-loading-text=\"<i class='fa fa-circle-o-notch fa-spin'></i> Cancelando ...\" data-btn-refund disabled>Cancelar la transacción</button>
                    ";
        }
        // line 23
        yield "                </div>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-xs-12 col-md-5\">

                <div class=\"x_panel x_panel_widget\">
                    <div class=\"x_title\">
                        <h2>Transacción</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"table-responsive\">
                            <table class=\"table table_inner\">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <td>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Estado:</th>
                                        <td>
                                            <span class=\"label label-";
        // line 49
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "status", [], "any", false, false, false, 49)), "html", null, true);
        yield "\">
                                                ";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "status", [], "any", false, false, false, 50)), "html", null, true);
        yield "
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Monto:</th>
                                        <td>\$";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageAmount", [], "any", false, false, false, 56), 2), "html", null, true);
        yield "</td>
                                    </tr>
                                   ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageSpecialPrice", [], "any", false, false, false, 58)) {
            // line 59
            yield "                                       <tr>
                                           <th>Precio Especial:</th>
                                           <td>\$";
            // line 61
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageSpecialPrice", [], "any", false, false, false, 61), 2), "html", null, true);
            yield "</td>
                                       </tr>
                                   ";
        }
        // line 64
        yield "                                    <tr>
                                        <th>Cupón:</th>
                                        <td>
                                            ";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "couponDiscount", [], "any", false, false, false, 67), "html", null, true);
        yield "%
                                            ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "coupon", [], "any", false, false, false, 68)) {
            // line 69
            yield "                                                (<a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "coupon", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" target=\"_blank\">
                                                    ";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "coupon", [], "any", false, false, false, 70), "code", [], "any", false, false, false, 70), "html", null, true);
            yield "
                                                </a>)
                                            ";
        }
        // line 73
        yield "                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Descuento:</th>
                                        <td>";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "discount", [], "any", false, false, false, 77), "html", null, true);
        yield "%</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>\$";
        // line 81
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "total", [], "any", false, false, false, 81), 2), "html", null, true);
        yield "</td>
                                    </tr>
                                    ";
        // line 83
        if ((Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID") == CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "status", [], "any", false, false, false, 83))) {
            // line 84
            yield "                                        <tr>
                                            <th>Autorización:</th>
                                            <td>";
            // line 86
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "chargeAuthCode", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        // line 89
        yield "                                    ";
        if ((Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_DENIED") == CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "status", [], "any", false, false, false, 89))) {
            // line 90
            yield "                                        <tr class=\"text-warning\">
                                            <th>Error:</th>
                                            <td>";
            // line 92
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "errorMessage", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        // line 95
        yield "                                    ";
        if ((("payment.card" == CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "chargeMethod", [], "any", false, false, false, 95)) && CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "chargeId", [], "any", false, false, false, 95))) {
            // line 96
            yield "                                        <tr>
                                            <th>Conekta ID:</th>
                                            <td>
                                                <a href=\"https://admin.conekta.com/orders/";
            // line 99
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "chargeId", [], "any", false, false, false, 99), "html", null, true);
            yield "\" target=\"_blank\">
                                                    ";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "chargeId", [], "any", false, false, false, 100), "html", null, true);
            yield "
                                                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 106
        yield "                                    <tr>
                                        <th>F. pago:</th>
                                        <td>";
        // line 108
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "createdAt", [], "any", false, false, false, 108), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>F. expiración:</th>
                                        <td>
                                            ";
        // line 113
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "expirationAt", [], "any", false, false, false, 113), "d/m/Y"), "html", null, true);
        yield "
                                            ";
        // line 114
        if (($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_transaction_edit_expiration") &&  !CoreExtension::getAttribute($this->env, $this->source,         // line 115
($context["transaction"] ?? null), "isExpired", [], "any", false, false, false, 115))) {
            // line 117
            yield "                                                <a href=\"#\" id=\"btn-edit-expiration\" data-toggle=\"tooltip\" data-original-title=\"Editar fecha\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </a>
                                            ";
        }
        // line 121
        yield "                                        </td>
                                    </tr>
                                    ";
        // line 123
        if ((Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_CANCEL") == CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "status", [], "any", false, false, false, 123))) {
            // line 124
            yield "                                        <tr>
                                            <th>F. devolución:</th>
                                            <td>";
            // line 126
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "refundedAt", [], "any", false, false, false, 126), "d/m/Y H:i:s"), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        // line 129
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                ";
        // line 135
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "chargeMethod", [], "any", false, false, false, 135), ["payment.card", "payment.pos"])) {
            // line 136
            yield "                    <div class=\"x_panel x_panel_widget\">
                        <div class=\"x_title\">
                            <h2>Tarjeta</h2>

                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"table-responsive\">
                                <table class=\"table table_inner\">
                                    <tbody>
                                        <tr>
                                            <th>Nombre:</th>
                                            <td>";
            // line 148
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "cardName", [], "any", false, false, false, 148), "html", null, true);
            yield "</td>
                                        </tr>
                                        <tr>
                                            <th>Número:</th>
                                            <td>**** **** **** ";
            // line 152
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "cardLast4", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 160
        yield "
            </div>

            <div class=\"col-xs-12 col-md-7\">

                <div class=\"x_panel x_panel_widget\">
                    <div class=\"x_title\">
                        <h2>Paquete</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"table-responsive\">
                            <table class=\"table table_inner\">
                                <tbody>
                                    <tr>
                                        <th>Número de clases:</th>
                                        <td>";
        // line 177
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageTotalClasses", [], "any", false, false, false, 177), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Costo:</th>
                                        <td>\$";
        // line 181
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageAmount", [], "any", false, false, false, 181)), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Descuento:</th>
                                        <td>";
        // line 185
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "discount", [], "any", false, false, false, 185), "html", null, true);
        yield "%</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>\$";
        // line 189
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "total", [], "any", false, false, false, 189)), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Modalidad:</th>
                                        <td>";
        // line 193
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageType", [], "any", false, false, false, 193)), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Vigencia:</th>
                                        <td>";
        // line 197
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageDaysExpiry", [], "any", false, false, false, 197), "html", null, true);
        yield " días</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class=\"x_panel x_panel_widget\">
                    <div class=\"x_title\">
                        <h2>Usuario</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"table-responsive\">
                            <table class=\"table table_inner\">
                                <tbody>
                                    <tr>
                                        <th>Nombre:</th>
                                        <td>";
        // line 217
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "user", [], "any", false, false, false, 217), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>";
        // line 221
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "user", [], "any", false, false, false, 221), "email", [], "any", false, false, false, 221), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Teléfono:</th>
                                        <td>";
        // line 225
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "user", [], "any", false, false, false, 225), "phone", [], "any", false, false, false, 225), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Conekta ID:</th>
                                        <td>
                                            <a href=\"https://admin.conekta.com/customers/";
        // line 230
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "user", [], "any", false, false, false, 230), "conektaId", [], "any", false, false, false, 230), "html", null, true);
        yield "\" target=\"_blank\">
                                                ";
        // line 231
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "user", [], "any", false, false, false, 231), "conektaId", [], "any", false, false, false, 231), "html", null, true);
        yield "
                                                <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"modal-expiration\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-expiration-label\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"modal-expiration-label\">Editar Fecha de Expiración</h4>
                </div>
                <div class=\"modal-body\">
                    <form autocomplete=\"off\" action=\"";
        // line 254
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_edit_expiration", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 254)]), "html", null, true);
        yield "\" method=\"post\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"expiration-date\" class=\"control-label\">Fecha de Expiración:</label>
                            <input type=\"text\" class=\"form-control datepicker has-feedback-right\" id=\"expiration-date\" name=\"expiration_date\" value=\"";
        // line 257
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "expirationAt", [], "any", false, false, false, 257), "d/m/Y"), "html", null, true);
        yield "\">
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                    <button type=\"button\" class=\"btn btn-primary btn-save\" data-loading-text=\"Guardando...\" autocomplete=\"off\">Guardar</button>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 271
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 272
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script type=\"text/javascript\">
        \$(function () {
            var \$modal = \$('#modal-expiration');

            \$('#btn-edit-expiration').on('click', function (e) {
                e.preventDefault();

                \$modal.modal('toggle')
            });

            \$('.btn-save').on('click', function () {
                \$(this).button('loading');

                \$modal.find('form').submit();
            });
        });

        ";
        // line 291
        if (($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_transaction_cancel") && (Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID") == CoreExtension::getAttribute($this->env, $this->source,         // line 292
($context["transaction"] ?? null), "status", [], "any", false, false, false, 292)))) {
            // line 294
            yield "            \$(function () {
                \$('[data-btn-refund]')
                    .on('click', function (e) {
                        e.preventDefault();

                        var link = \$(this);

                        if (confirm('¿Confirmas que deseas devolver la transacción?')) {
                            link.button('loading');

                            \$.ajax({
                                'url': '";
            // line 305
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 305)]), "html", null, true);
            yield "',
                                'type': 'post',
                                'success': function (response) {
                                    link.button('reset');

                                    if (response.error) {
                                        \$.flash.error(response.error.message);
                                    } else {
                                        \$.flash.success('La transacción ha sido cancelada.');

                                        link.remove();
                                    }
                                },
                            });
                        }
                    })
                    .prop('disabled', false)
                ;
            });
        ";
        }
        // line 325
        yield "    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/transaction/show.html.twig";
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
        return array (  527 => 325,  504 => 305,  491 => 294,  489 => 292,  488 => 291,  465 => 272,  461 => 271,  443 => 257,  437 => 254,  411 => 231,  407 => 230,  399 => 225,  392 => 221,  385 => 217,  362 => 197,  355 => 193,  348 => 189,  341 => 185,  334 => 181,  327 => 177,  308 => 160,  297 => 152,  290 => 148,  276 => 136,  274 => 135,  266 => 129,  260 => 126,  256 => 124,  254 => 123,  250 => 121,  244 => 117,  242 => 115,  241 => 114,  237 => 113,  229 => 108,  225 => 106,  216 => 100,  212 => 99,  207 => 96,  204 => 95,  198 => 92,  194 => 90,  191 => 89,  185 => 86,  181 => 84,  179 => 83,  174 => 81,  167 => 77,  161 => 73,  155 => 70,  150 => 69,  148 => 68,  144 => 67,  139 => 64,  133 => 61,  129 => 59,  127 => 58,  122 => 56,  113 => 50,  109 => 49,  101 => 44,  78 => 23,  74 => 21,  72 => 19,  71 => 18,  58 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/transaction/show.html.twig", "/var/www/pbstudio/releases/81/templates/backend/transaction/show.html.twig");
    }
}
