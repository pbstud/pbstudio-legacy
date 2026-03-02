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

/* profile/_transactions.html.twig */
class __TwigTemplate_1e0a61571034bb41cc90a8537494dd7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_transactions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_transactions.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"content\">
        <h2>Últimas transacciones</h2>
        <div class=\"contained_table\">
            <table>
                <thead>
                <tr>
                    <td>Paquete</td>
                    <td>Modalidad</td>
                    <td>Costo</td>
                    <td>Método de pago</td>
                    <td>Fecha</td>
                </tr>
                </thead>
                <tbody>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lastTransactions"]) || array_key_exists("lastTransactions", $context) ? $context["lastTransactions"] : (function () { throw new RuntimeError('Variable "lastTransactions" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            yield "                    <tr>
                        <td>
                            ";
            // line 19
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageIsUnlimited", [], "any", false, false, false, 19)) {
                // line 20
                yield "                                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "package", [], "any", false, false, false, 20), "altText", [], "any", false, false, false, 20), "html", null, true);
                yield "
                            ";
            } else {
                // line 22
                yield "                                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageTotalClasses", [], "any", false, false, false, 22), "html", null, true);
                yield " clases
                            ";
            }
            // line 24
            yield "                        </td>
                        <td>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageType", [], "any", false, false, false, 25)), "html", null, true);
            yield "</td>
                        <td>\$";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "total", [], "any", false, false, false, 26)), "html", null, true);
            yield "</td>
                        <td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "chargeMethod", [], "any", false, false, false, 27)), "html", null, true);
            ((CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "cardLast4", [], "any", false, false, false, 27)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ("-" . CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "cardLast4", [], "any", false, false, false, 27)), "html", null, true)) : (yield ""));
            yield "</td>
                        <td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 28), "d/m/Y h:i"), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            yield "                    <tr>
                        <td colspan=\"6\">
                            Sin registros por mostrar
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                </tbody>
            </table>
        </div>

        <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction", ["_fragment" => "section-content"]);
        yield "\" class=\"btn\">Ver todas las transacciones</a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/_transactions.html.twig";
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
        return array (  125 => 41,  119 => 37,  108 => 31,  100 => 28,  95 => 27,  91 => 26,  87 => 25,  84 => 24,  78 => 22,  72 => 20,  70 => 19,  66 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"content\">
        <h2>Últimas transacciones</h2>
        <div class=\"contained_table\">
            <table>
                <thead>
                <tr>
                    <td>Paquete</td>
                    <td>Modalidad</td>
                    <td>Costo</td>
                    <td>Método de pago</td>
                    <td>Fecha</td>
                </tr>
                </thead>
                <tbody>
                {% for entity in lastTransactions %}
                    <tr>
                        <td>
                            {% if entity.packageIsUnlimited %}
                                {{ entity.package.altText }}
                            {% else %}
                                {{ entity.packageTotalClasses }} clases
                            {% endif %}
                        </td>
                        <td>{{ entity.packageType|PackageSessionType }}</td>
                        <td>\${{ entity.total|number_format }}</td>
                        <td>{{ entity.chargeMethod|ChargeMethodDescription }}{{ entity.cardLast4 ? '-' ~ entity.cardLast4 : '' }}</td>
                        <td>{{ entity.createdAt | date('d/m/Y h:i') }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\">
                            Sin registros por mostrar
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

        <a href=\"{{ path('transaction', {'_fragment': 'section-content'}) }}\" class=\"btn\">Ver todas las transacciones</a>
    </div>
</div>", "profile/_transactions.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\_transactions.html.twig");
    }
}
