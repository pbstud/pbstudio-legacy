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
class __TwigTemplate_662d987fad05255f4ebd8bbe68aa4e5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/checkout.html.twig"));

        // line 1
        yield "<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"grid-1-8 right right-container\">
            ";
        // line 6
        if ((isset($context["restrictNewUser"]) || array_key_exists("restrictNewUser", $context) ? $context["restrictNewUser"] : (function () { throw new RuntimeError('Variable "restrictNewUser" does not exist.', 6, $this->source); })())) {
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
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("package_checkout", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
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
            $context["endYear"] = ((isset($context["startYear"]) || array_key_exists("startYear", $context) ? $context["startYear"] : (function () { throw new RuntimeError('Variable "startYear" does not exist.', 28, $this->source); })()) + 10);
            // line 29
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startYear"]) || array_key_exists("startYear", $context) ? $context["startYear"] : (function () { throw new RuntimeError('Variable "startYear" does not exist.', 29, $this->source); })()), (isset($context["endYear"]) || array_key_exists("endYear", $context) ? $context["endYear"] : (function () { throw new RuntimeError('Variable "endYear" does not exist.', 29, $this->source); })())));
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
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coupon_validate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["conektaPublicKey"]) || array_key_exists("conektaPublicKey", $context) ? $context["conektaPublicKey"] : (function () { throw new RuntimeError('Variable "conektaPublicKey" does not exist.', 72, $this->source); })()), "html", null, true);
        yield "');
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  171 => 72,  163 => 67,  159 => 65,  153 => 62,  148 => 60,  125 => 40,  115 => 32,  104 => 30,  99 => 29,  96 => 28,  94 => 27,  88 => 23,  77 => 21,  73 => 20,  63 => 13,  59 => 11,  53 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"grid-1-8 right right-container\">
            {% if restrictNewUser %}
                <div class=\"alert error\">
                    <p>El paquete seleccionado sólo aplica para nuevos usuarios</p>
                </div>
            {% else %}
                <div class=\"checkout-form\">
                    <p>Información de pago</p>
                    <form id=\"checkout-form\" action=\"{{ path('package_checkout', { 'id': package.id }) }}\" method=\"POST\">
                        <input type=\"text\" size=\"20\" data-conekta=\"card[name]\" placeholder=\"Nombre del titular de la tarjeta\" required=\"required\">
                        <input type=\"number\" size=\"20\" data-conekta=\"card[number]\" placeholder=\"Número de tarjeta\" required=\"required\">
                        <div>
                            <label>Vigencia</label>
                            <select data-conekta=\"card[exp_month]\" required=\"required\">
                                <option>Mes</option>
                                {% for i in 1..12 %}
                                    <option value=\"{{ '%02d'|format(i) }}\">{{ '%02d'|format(i) }}</option>
                                {% endfor %}
                            </select>
                            <span class=\"line\">/</span>
                            <select data-conekta=\"card[exp_year]\" required=\"required\">
                                <option>Año</option>
                                {% set startYear = 'now'|date('Y') %}
                                {% set endYear = startYear + 10 %}
                                {% for i in startYear..endYear %}
                                    <option value=\"{{ i }}\">{{ i }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div>
                            <label>Código de seguridad</label>
                            <input type=\"password\" size=\"4\" data-conekta=\"card[cvc]\" placeholder=\"***\" required=\"required\">
                        </div>
                        <div id=\"frm-coupon\">
                            <input type=\"text\" id=\"coupon-field\" size=\"20\" placeholder=\"Cupón de descuento\">
                            <button type=\"button\" id=\"btn-coupon\" data-url=\"{{ path('coupon_validate', {'id': package.id}) }}\">
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

                    <a href=\"{{ path('reservation_calendar') }}\" class=\"btn\">Reservar clase</a>

                    <a href=\"{{ path('profile') }}\" class=\"btn secondary\">Ir a mi cuenta</a>
                </div>
            {% endif %}
        </div>

        {{ include('package/_checkout_detail.html.twig') }}
    </div>
</section>

<script type=\"text/javascript\">
    checkoutHandler('{{ conektaPublicKey }}');
</script>", "package/checkout.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\package\\checkout.html.twig");
    }
}
