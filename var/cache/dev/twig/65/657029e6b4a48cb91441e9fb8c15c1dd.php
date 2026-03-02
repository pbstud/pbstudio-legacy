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

/* mail/transaction_expired.html.twig */
class __TwigTemplate_7d5200a5ce1de018d63880cb96e9e72b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/transaction_expired.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/transaction_expired.html.twig"));

        $this->parent = $this->loadTemplate("mail/layout.html.twig", "mail/transaction_expired.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <tr>
        <td align=\"center\" style=\"font-family:arial,sans-serif; color:#67ccbb; font-size:30px; text-align:center; text-transform:uppercase; font-weight:100\">
            Tu transacción ha expirado
        </td>
    </tr>
    <tr>
        <td>
            <table width=\"600px\" style=\"margin:20px;\" class=\"w320\">
                <tr>
                    <td class=\"blockwrap\" style=\"margin-bottom:10px;\">
                        <table>
                            <tr>
                                <td style=\"font-family:arial,sans-serif; color:#6D6E70; font-size:16px; text-align:center; padding: 10px;\">
                                    <strong>Hola ";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</strong>
                                    <br /><br />

                                    Lamentamos informarte que tu compra ha expirado y ya no podrás hacer uso de las clases que tenías disponibles.
                                    <br><br><br><br>

                                    <strong style=\"color:#67ccbb;\">Información de la compra:</strong>

                                    <br />

                                    <p><strong>Fecha de realización:</strong> ";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 27, $this->source); })()), "createdAt", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
        yield "</p>
                                    <p><strong>Producto:</strong> Paquete ";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 28, $this->source); })()), "packageTotalClasses", [], "any", false, false, false, 28), "html", null, true);
        yield " clase(s) ";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 28, $this->source); })()), "packageType", [], "any", false, false, false, 28))), "html", null, true);
        yield "(es)</p>
                                    <p><strong>Monto:</strong> \$";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 29, $this->source); })()), "total", [], "any", false, false, false, 29)), "html", null, true);
        yield "</p>
                                    <p><strong>Fecha de expiración:</strong> ";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 30, $this->source); })()), "expirationAt", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
        yield "</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
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
        return "mail/transaction_expired.html.twig";
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
        return array (  111 => 30,  107 => 29,  101 => 28,  97 => 27,  84 => 17,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'mail/layout.html.twig' %}

{% block body %}
    <tr>
        <td align=\"center\" style=\"font-family:arial,sans-serif; color:#67ccbb; font-size:30px; text-align:center; text-transform:uppercase; font-weight:100\">
            Tu transacción ha expirado
        </td>
    </tr>
    <tr>
        <td>
            <table width=\"600px\" style=\"margin:20px;\" class=\"w320\">
                <tr>
                    <td class=\"blockwrap\" style=\"margin-bottom:10px;\">
                        <table>
                            <tr>
                                <td style=\"font-family:arial,sans-serif; color:#6D6E70; font-size:16px; text-align:center; padding: 10px;\">
                                    <strong>Hola {{ user.name }}</strong>
                                    <br /><br />

                                    Lamentamos informarte que tu compra ha expirado y ya no podrás hacer uso de las clases que tenías disponibles.
                                    <br><br><br><br>

                                    <strong style=\"color:#67ccbb;\">Información de la compra:</strong>

                                    <br />

                                    <p><strong>Fecha de realización:</strong> {{ transaction.createdAt|date('d/m/Y') }}</p>
                                    <p><strong>Producto:</strong> Paquete {{ transaction.packageTotalClasses }} clase(s) {{ transaction.packageType|PackageSessionType|lower }}(es)</p>
                                    <p><strong>Monto:</strong> \${{ transaction.total|number_format }}</p>
                                    <p><strong>Fecha de expiración:</strong> {{ transaction.expirationAt|date('d/m/Y') }}</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
{% endblock %}
", "mail/transaction_expired.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\mail\\transaction_expired.html.twig");
    }
}
