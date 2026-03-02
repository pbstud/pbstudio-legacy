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

/* mail/charge_method/payment_card.html.twig */
class __TwigTemplate_cc4f324ce47baf3844c445fb32e3a6c5 extends Template
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
        yield "<p><strong>No. Tarjeta:</strong> **** **** **** ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "cardLast4", [], "any", false, false, false, 1), "html", null, true);
        yield "</p>
<p><strong>Clave de autorización:</strong> ";
        // line 2
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "chargeAuthCode", [], "any", false, false, false, 2), "html", null, true);
        yield "</p>
<p><strong>Monto:</strong> \$";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "total", [], "any", false, false, false, 3), 2), "html", null, true);
        yield " <small>MXN</small></p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mail/charge_method/payment_card.html.twig";
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
        return array (  47 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/charge_method/payment_card.html.twig", "/var/www/pbstudio/releases/81/templates/mail/charge_method/payment_card.html.twig");
    }
}
