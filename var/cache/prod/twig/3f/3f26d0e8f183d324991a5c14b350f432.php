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
class __TwigTemplate_e2e191e31df5a4684438af516368a87d extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lastTransactions"] ?? null));
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
        return array (  119 => 41,  113 => 37,  102 => 31,  94 => 28,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  72 => 22,  66 => 20,  64 => 19,  60 => 17,  55 => 16,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/_transactions.html.twig", "/var/www/pbstudio/releases/81/templates/profile/_transactions.html.twig");
    }
}
