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
class __TwigTemplate_67db394044a2e33eeb8555892c47c9a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/show.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/transaction/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
(isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 19, $this->source); })()), "status", [], "any", false, false, false, 19)))) {
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Estado:</th>
                                        <td>
                                            <span class=\"label label-";
        // line 49
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49)), "html", null, true);
        yield "\">
                                                ";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50)), "html", null, true);
        yield "
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Monto:</th>
                                        <td>\$";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 56, $this->source); })()), "packageAmount", [], "any", false, false, false, 56), 2), "html", null, true);
        yield "</td>
                                    </tr>
                                   ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 58, $this->source); })()), "packageSpecialPrice", [], "any", false, false, false, 58)) {
            // line 59
            yield "                                       <tr>
                                           <th>Precio Especial:</th>
                                           <td>\$";
            // line 61
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 61, $this->source); })()), "packageSpecialPrice", [], "any", false, false, false, 61), 2), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 67, $this->source); })()), "couponDiscount", [], "any", false, false, false, 67), "html", null, true);
        yield "%
                                            ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 68, $this->source); })()), "coupon", [], "any", false, false, false, 68)) {
            // line 69
            yield "                                                (<a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 69, $this->source); })()), "coupon", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" target=\"_blank\">
                                                    ";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 70, $this->source); })()), "coupon", [], "any", false, false, false, 70), "code", [], "any", false, false, false, 70), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 77, $this->source); })()), "discount", [], "any", false, false, false, 77), "html", null, true);
        yield "%</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>\$";
        // line 81
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 81, $this->source); })()), "total", [], "any", false, false, false, 81), 2), "html", null, true);
        yield "</td>
                                    </tr>
                                    ";
        // line 83
        if ((Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_PAID") == CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83))) {
            // line 84
            yield "                                        <tr>
                                            <th>Autorización:</th>
                                            <td>";
            // line 86
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 86, $this->source); })()), "chargeAuthCode", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        // line 89
        yield "                                    ";
        if ((Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_DENIED") == CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 89, $this->source); })()), "status", [], "any", false, false, false, 89))) {
            // line 90
            yield "                                        <tr class=\"text-warning\">
                                            <th>Error:</th>
                                            <td>";
            // line 92
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 92, $this->source); })()), "errorMessage", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        // line 95
        yield "                                    ";
        if ((("payment.card" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 95, $this->source); })()), "chargeMethod", [], "any", false, false, false, 95)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 95, $this->source); })()), "chargeId", [], "any", false, false, false, 95))) {
            // line 96
            yield "                                        <tr>
                                            <th>Conekta ID:</th>
                                            <td>
                                                <a href=\"https://admin.conekta.com/orders/";
            // line 99
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 99, $this->source); })()), "chargeId", [], "any", false, false, false, 99), "html", null, true);
            yield "\" target=\"_blank\">
                                                    ";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 100, $this->source); })()), "chargeId", [], "any", false, false, false, 100), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>F. expiración:</th>
                                        <td>
                                            ";
        // line 113
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 113, $this->source); })()), "expirationAt", [], "any", false, false, false, 113), "d/m/Y"), "html", null, true);
        yield "
                                            ";
        // line 114
        if (($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_transaction_edit_expiration") &&  !CoreExtension::getAttribute($this->env, $this->source,         // line 115
(isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 115, $this->source); })()), "isExpired", [], "any", false, false, false, 115))) {
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
        if ((Twig\Extension\CoreExtension::constant("App\\Entity\\Transaction::STATUS_CANCEL") == CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 123, $this->source); })()), "status", [], "any", false, false, false, 123))) {
            // line 124
            yield "                                        <tr>
                                            <th>F. devolución:</th>
                                            <td>";
            // line 126
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 126, $this->source); })()), "refundedAt", [], "any", false, false, false, 126), "d/m/Y H:i:s"), "html", null, true);
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
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 135, $this->source); })()), "chargeMethod", [], "any", false, false, false, 135), ["payment.card", "payment.pos"])) {
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
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 148, $this->source); })()), "cardName", [], "any", false, false, false, 148), "html", null, true);
            yield "</td>
                                        </tr>
                                        <tr>
                                            <th>Número:</th>
                                            <td>**** **** **** ";
            // line 152
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 152, $this->source); })()), "cardLast4", [], "any", false, false, false, 152), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 177, $this->source); })()), "packageTotalClasses", [], "any", false, false, false, 177), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Costo:</th>
                                        <td>\$";
        // line 181
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 181, $this->source); })()), "packageAmount", [], "any", false, false, false, 181)), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Descuento:</th>
                                        <td>";
        // line 185
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 185, $this->source); })()), "discount", [], "any", false, false, false, 185), "html", null, true);
        yield "%</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>\$";
        // line 189
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 189, $this->source); })()), "total", [], "any", false, false, false, 189)), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Modalidad:</th>
                                        <td>";
        // line 193
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 193, $this->source); })()), "packageType", [], "any", false, false, false, 193)), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Vigencia:</th>
                                        <td>";
        // line 197
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 197, $this->source); })()), "packageDaysExpiry", [], "any", false, false, false, 197), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>";
        // line 221
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 221, $this->source); })()), "user", [], "any", false, false, false, 221), "email", [], "any", false, false, false, 221), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Teléfono:</th>
                                        <td>";
        // line 225
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 225, $this->source); })()), "user", [], "any", false, false, false, 225), "phone", [], "any", false, false, false, 225), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Conekta ID:</th>
                                        <td>
                                            <a href=\"https://admin.conekta.com/customers/";
        // line 230
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 230, $this->source); })()), "user", [], "any", false, false, false, 230), "conektaId", [], "any", false, false, false, 230), "html", null, true);
        yield "\" target=\"_blank\">
                                                ";
        // line 231
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "conektaId", [], "any", false, false, false, 231), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_edit_expiration", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 254, $this->source); })()), "id", [], "any", false, false, false, 254)]), "html", null, true);
        yield "\" method=\"post\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"expiration-date\" class=\"control-label\">Fecha de Expiración:</label>
                            <input type=\"text\" class=\"form-control datepicker has-feedback-right\" id=\"expiration-date\" name=\"expiration_date\" value=\"";
        // line 257
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 257, $this->source); })()), "expirationAt", [], "any", false, false, false, 257), "d/m/Y"), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 271
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
(isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 292, $this->source); })()), "status", [], "any", false, false, false, 292)))) {
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
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 305, $this->source); })()), "id", [], "any", false, false, false, 305)]), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  557 => 325,  534 => 305,  521 => 294,  519 => 292,  518 => 291,  495 => 272,  485 => 271,  461 => 257,  455 => 254,  429 => 231,  425 => 230,  417 => 225,  410 => 221,  403 => 217,  380 => 197,  373 => 193,  366 => 189,  359 => 185,  352 => 181,  345 => 177,  326 => 160,  315 => 152,  308 => 148,  294 => 136,  292 => 135,  284 => 129,  278 => 126,  274 => 124,  272 => 123,  268 => 121,  262 => 117,  260 => 115,  259 => 114,  255 => 113,  247 => 108,  243 => 106,  234 => 100,  230 => 99,  225 => 96,  222 => 95,  216 => 92,  212 => 90,  209 => 89,  203 => 86,  199 => 84,  197 => 83,  192 => 81,  185 => 77,  179 => 73,  173 => 70,  168 => 69,  166 => 68,  162 => 67,  157 => 64,  151 => 61,  147 => 59,  145 => 58,  140 => 56,  131 => 50,  127 => 49,  119 => 44,  96 => 23,  92 => 21,  90 => 19,  89 => 18,  76 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% block content %}
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"{{ path('backend_transaction') }}\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>

                    Transacciones
                </h3>
            </div>

            <div class=\"title_right\">
                <div class=\"form-group pull-right\">
                    {% if is_allowed_route('backend_transaction_cancel')
                        and constant('App\\\\Entity\\\\Transaction::STATUS_PAID') == transaction.status
                    %}
                        <button type=\"button\" class=\"btn btn-danger\" data-loading-text=\"<i class='fa fa-circle-o-notch fa-spin'></i> Cancelando ...\" data-btn-refund disabled>Cancelar la transacción</button>
                    {% endif %}
                </div>
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
                                        <td>{{ transaction.id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Estado:</th>
                                        <td>
                                            <span class=\"label label-{{ transaction.status|TransactionStatusLabel }}\">
                                                {{ transaction.status|TransactionStatusDescription }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Monto:</th>
                                        <td>\${{ transaction.packageAmount|number_format(2) }}</td>
                                    </tr>
                                   {% if transaction.packageSpecialPrice %}
                                       <tr>
                                           <th>Precio Especial:</th>
                                           <td>\${{ transaction.packageSpecialPrice|number_format(2) }}</td>
                                       </tr>
                                   {% endif %}
                                    <tr>
                                        <th>Cupón:</th>
                                        <td>
                                            {{ transaction.couponDiscount }}%
                                            {% if transaction.coupon %}
                                                (<a href=\"{{ path('backend_coupon_show', {'id': transaction.coupon.id}) }}\" target=\"_blank\">
                                                    {{ transaction.coupon.code }}
                                                </a>)
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Descuento:</th>
                                        <td>{{ transaction.discount }}%</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>\${{ transaction.total|number_format(2) }}</td>
                                    </tr>
                                    {% if constant('App\\\\Entity\\\\Transaction::STATUS_PAID') == transaction.status %}
                                        <tr>
                                            <th>Autorización:</th>
                                            <td>{{ transaction.chargeAuthCode }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if constant('App\\\\Entity\\\\Transaction::STATUS_DENIED') == transaction.status %}
                                        <tr class=\"text-warning\">
                                            <th>Error:</th>
                                            <td>{{ transaction.errorMessage }}</td>
                                        </tr>
                                    {% endif %}
                                    {% if 'payment.card' == transaction.chargeMethod and transaction.chargeId %}
                                        <tr>
                                            <th>Conekta ID:</th>
                                            <td>
                                                <a href=\"https://admin.conekta.com/orders/{{ transaction.chargeId }}\" target=\"_blank\">
                                                    {{ transaction.chargeId }}
                                                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    {% endif %}
                                    <tr>
                                        <th>F. pago:</th>
                                        <td>{{ transaction.createdAt|date('d/m/Y H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <th>F. expiración:</th>
                                        <td>
                                            {{ transaction.expirationAt|date('d/m/Y') }}
                                            {%  if is_allowed_route('backend_transaction_edit_expiration')
                                                and not transaction.isExpired
                                            %}
                                                <a href=\"#\" id=\"btn-edit-expiration\" data-toggle=\"tooltip\" data-original-title=\"Editar fecha\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                    {% if constant('App\\\\Entity\\\\Transaction::STATUS_CANCEL') == transaction.status %}
                                        <tr>
                                            <th>F. devolución:</th>
                                            <td>{{ transaction.refundedAt|date('d/m/Y H:i:s') }}</td>
                                        </tr>
                                    {% endif %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {% if transaction.chargeMethod in [ 'payment.card','payment.pos', ] %}
                    <div class=\"x_panel x_panel_widget\">
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
                                            <td>{{ transaction.cardName }}</td>
                                        </tr>
                                        <tr>
                                            <th>Número:</th>
                                            <td>**** **** **** {{ transaction.cardLast4 }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                {% endif %}

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
                                        <td>{{ transaction.packageTotalClasses }}</td>
                                    </tr>
                                    <tr>
                                        <th>Costo:</th>
                                        <td>\${{ transaction.packageAmount|number_format }}</td>
                                    </tr>
                                    <tr>
                                        <th>Descuento:</th>
                                        <td>{{ transaction.discount }}%</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>\${{ transaction.total|number_format }}</td>
                                    </tr>
                                    <tr>
                                        <th>Modalidad:</th>
                                        <td>{{ transaction.packageType|PackageSessionType }}</td>
                                    </tr>
                                    <tr>
                                        <th>Vigencia:</th>
                                        <td>{{ transaction.packageDaysExpiry }} días</td>
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
                                        <td>{{ transaction.user }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{ transaction.user.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Teléfono:</th>
                                        <td>{{ transaction.user.phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Conekta ID:</th>
                                        <td>
                                            <a href=\"https://admin.conekta.com/customers/{{ transaction.user.conektaId }}\" target=\"_blank\">
                                                {{ transaction.user.conektaId }}
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
                    <form autocomplete=\"off\" action=\"{{ path('backend_transaction_edit_expiration', { 'id': transaction.id }) }}\" method=\"post\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"expiration-date\" class=\"control-label\">Fecha de Expiración:</label>
                            <input type=\"text\" class=\"form-control datepicker has-feedback-right\" id=\"expiration-date\" name=\"expiration_date\" value=\"{{ transaction.expirationAt|date('d/m/Y') }}\">
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}

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

        {% if is_allowed_route('backend_transaction_cancel')
            and constant('App\\\\Entity\\\\Transaction::STATUS_PAID') == transaction.status
        %}
            \$(function () {
                \$('[data-btn-refund]')
                    .on('click', function (e) {
                        e.preventDefault();

                        var link = \$(this);

                        if (confirm('¿Confirmas que deseas devolver la transacción?')) {
                            link.button('loading');

                            \$.ajax({
                                'url': '{{ path('backend_transaction_cancel', { 'id': transaction.id }) }}',
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
        {% endif %}
    </script>
{% endblock %}
", "backend/transaction/show.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\transaction\\show.html.twig");
    }
}
