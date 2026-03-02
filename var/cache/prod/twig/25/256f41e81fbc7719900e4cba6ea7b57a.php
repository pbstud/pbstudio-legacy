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

/* mail/transaction_confirmation.html.twig */
class __TwigTemplate_1bdd247f27d53c13d80770dad4d467d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "mail/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("mail/layout.html.twig", "mail/transaction_confirmation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <tr>
        <td align=\"center\" style=\"font-family:arial,sans-serif; color:#67ccbb; font-size:30px; text-align:center; text-transform:uppercase; font-weight:100\">
            Confirmación de pago
        </td>
    </tr>
    <tr>
        <td>
            <table width=\"600px\" style=\"margin:20px;\" class=\"w320\">
                <tr>
                    <td class=\"blockwrap\" style=\"margin-bottom:10px;\">
                        <table width=\"600px\">
                            <tr>
                                <td style=\"font-family:arial,sans-serif; color:#6D6E70; font-size:16px; text-align:center; padding: 10px;\">
                                    <strong>Hola ";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</strong>
                                    <br /><br />

                                    ¡Gracias por tu compra! El pago ha sido procesado correctamente.
                                    <br /><br /><br /><br />

                                    <strong style=\"color:#67ccbb;\">Detalles de operación:</strong>

                                    <br />

                                    <p><strong>Utiliza tus clases antes del:</strong> ";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "expirationAt", [], "any", false, false, false, 27), null, "EEEE d 'de' MMMM"), "html", null, true);
        yield "</p>
                                    <p>
                                        <strong>Producto: </strong>
                                        ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "isUnlimited", [], "any", false, false, false, 30)) {
            // line 31
            yield "                                            Paquete de clases &infin; (";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageType", [], "any", false, false, false, 31))), "html", null, true);
            yield "es)
                                        ";
        } else {
            // line 33
            yield "                                            Paquete ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageTotalClasses", [], "any", false, false, false, 33), "html", null, true);
            yield " clase(s) ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "packageType", [], "any", false, false, false, 33))), "html", null, true);
            yield "(es)
                                        ";
        }
        // line 35
        yield "
                                        ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "altText", [], "any", false, false, false, 36)) {
            // line 37
            yield "                                            / ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "altText", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                        ";
        }
        // line 39
        yield "                                    </p>

                                    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, (("mail/charge_method/" . Twig\Extension\CoreExtension::replaceFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "chargeMethod", [], "any", false, false, false, 41), ["." => "_"])) . ".html.twig"));
        yield "
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mail/transaction_confirmation.html.twig";
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
        return array (  116 => 41,  112 => 39,  106 => 37,  104 => 36,  101 => 35,  93 => 33,  87 => 31,  85 => 30,  79 => 27,  66 => 17,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/transaction_confirmation.html.twig", "/var/www/pbstudio/releases/81/templates/mail/transaction_confirmation.html.twig");
    }
}
