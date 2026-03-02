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

/* profile/transaction_list.html.twig */
class __TwigTemplate_4a16c14695063160fac24b34ad176c63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'account_content' => [$this, 'block_account_content'],
            'account_aside_content' => [$this, 'block_account_aside_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "profile/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/transaction_list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Mis transacciones | ";
        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"row\">
        <div class=\"content\">
            <h2>Transacciones</h2>
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            yield "                        <tr>
                            <td>
                                ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageIsUnlimited", [], "any", false, false, false, 24)) {
                // line 25
                yield "                                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "package", [], "any", false, false, false, 25), "altText", [], "any", false, false, false, 25), "html", null, true);
                yield "
                                ";
            } else {
                // line 27
                yield "                                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageTotalClasses", [], "any", false, false, false, 27), "html", null, true);
                yield " clases
                                ";
            }
            // line 29
            yield "                            </td>
                            <td>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageType", [], "any", false, false, false, 30)), "html", null, true);
            yield "</td>
                            <td>\$";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "total", [], "any", false, false, false, 31)), "html", null, true);
            yield "</td>
                            <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "chargeMethod", [], "any", false, false, false, 32)), "html", null, true);
            ((CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "cardLast4", [], "any", false, false, false, 32)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, ("-" . CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "cardLast4", [], "any", false, false, false, 32)), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 33), "d/m/Y h:i"), "html", null, true);
            yield "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "                        <tr>
                            <td colspan=\"6\">
                                Sin registros por mostrar
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 49
    public function block_account_aside_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_aside.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/transaction_list.html.twig";
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
        return array (  150 => 50,  146 => 49,  136 => 42,  125 => 36,  117 => 33,  112 => 32,  108 => 31,  104 => 30,  101 => 29,  95 => 27,  89 => 25,  87 => 24,  83 => 22,  78 => 21,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/transaction_list.html.twig", "/var/www/pbstudio/releases/81/templates/profile/transaction_list.html.twig");
    }
}
