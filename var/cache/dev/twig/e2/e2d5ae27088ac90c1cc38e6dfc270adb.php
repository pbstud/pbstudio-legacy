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
class __TwigTemplate_910a0e5e359a32c5a39c290e2f4b8135 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/charge_method/payment_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/charge_method/payment_card.html.twig"));

        // line 1
        yield "<p><strong>No. Tarjeta:</strong> **** **** **** ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 1, $this->source); })()), "cardLast4", [], "any", false, false, false, 1), "html", null, true);
        yield "</p>
<p><strong>Clave de autorización:</strong> ";
        // line 2
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 2, $this->source); })()), "chargeAuthCode", [], "any", false, false, false, 2), "html", null, true);
        yield "</p>
<p><strong>Monto:</strong> \$";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 3, $this->source); })()), "total", [], "any", false, false, false, 3), 2), "html", null, true);
        yield " <small>MXN</small></p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  53 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p><strong>No. Tarjeta:</strong> **** **** **** {{ transaction.cardLast4 }}</p>
<p><strong>Clave de autorización:</strong> {{ transaction.chargeAuthCode }}</p>
<p><strong>Monto:</strong> \${{ transaction.total | number_format(2) }} <small>MXN</small></p>
", "mail/charge_method/payment_card.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\mail\\charge_method\\payment_card.html.twig");
    }
}
