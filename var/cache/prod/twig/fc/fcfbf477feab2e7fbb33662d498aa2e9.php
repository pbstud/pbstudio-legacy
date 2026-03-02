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

/* package/checkout.html.twig */
class __TwigTemplate_f2df7bd7d73da8f3c996906a6c0f5156 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"grid-1-8 right right-container\">
            ";
        // line 6
        if (($context["restrictNewUser"] ?? null)) {
            // line 7
            yield "                <div class=\"alert error\">
                    <p>El paquete seleccionado sólo aplica para nuevos usuarios</p>
                </div>
            ";
        } else {
            // line 11
            yield "                <div class=\"checkout-form\">
                    <p>Información de pago</p>
                    <form id=\"checkout-form\" action=\"";
            // line 13
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("package_checkout", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\" method=\"POST\">
                        <input type=\"text\" size=\"20\" data-conekta=\"card[name]\" placeholder=\"Nombre del titular de la tarjeta\" required=\"required\">
                        <input type=\"number\" size=\"20\" data-conekta=\"card[number]\" placeholder=\"Número de tarjeta\" required=\"required\">
                        <div>
                            <label>Vigencia</label>
                            <select data-conekta=\"card[exp_month]\" required=\"required\">
                                <option>Mes</option>
                                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                yield "                                    <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%02d", $context["i"]), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%02d", $context["i"]), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "                            </select>
                            <span class=\"line\">/</span>
                            <select data-conekta=\"card[exp_year]\" required=\"required\">
                                <option>Año</option>
                                ";
            // line 27
            $context["startYear"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y");
            // line 28
            yield "                                ";
            $context["endYear"] = (($context["startYear"] ?? null) + 10);
            // line 29
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startYear"] ?? null), ($context["endYear"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                yield "                                    <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["i"], "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["i"], "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "                            </select>
                        </div>
                        <div>
                            <label>Código de seguridad</label>
                            <input type=\"password\" size=\"4\" data-conekta=\"card[cvc]\" placeholder=\"***\" required=\"required\">
                        </div>
                        <div id=\"frm-coupon\">
                            <input type=\"text\" id=\"coupon-field\" size=\"20\" placeholder=\"Cupón de descuento\">
                            <button type=\"button\" id=\"btn-coupon\" data-url=\"";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coupon_validate", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\">
                                Aplicar
                            </button>
                        </div>
                        <div id=\"coupon-valid\">
                            <p>
                                Descuento: <span id=\"coupon-discount\"></span>
                            </p>
                            <p>
                                Importe: <span id=\"coupon-total\"></span>
                            </p>
                            <input type=\"hidden\" id=\"coupon-validated\">
                        </div>
                        <button type=\"submit\" class=\"btn-submit\">Comprar</button>
                    </form>
                </div>

                <div class=\"checkout-success center\" style=\"display:none;\">
                    <h4>Tu compra ha sido exitosa<small>¡Comienza ahora!</small></h4>

                    <a href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
            yield "\" class=\"btn\">Reservar clase</a>

                    <a href=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            yield "\" class=\"btn secondary\">Ir a mi cuenta</a>
                </div>
            ";
        }
        // line 65
        yield "        </div>

        ";
        // line 67
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_checkout_detail.html.twig");
        yield "
    </div>
</section>

<script type=\"text/javascript\">
    checkoutHandler('";
        // line 72
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["conektaPublicKey"] ?? null), "html", null, true);
        yield "');
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "package/checkout.html.twig";
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
        return array (  165 => 72,  157 => 67,  153 => 65,  147 => 62,  142 => 60,  119 => 40,  109 => 32,  98 => 30,  93 => 29,  90 => 28,  88 => 27,  82 => 23,  71 => 21,  67 => 20,  57 => 13,  53 => 11,  47 => 7,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "package/checkout.html.twig", "/var/www/pbstudio/releases/81/templates/package/checkout.html.twig");
    }
}
