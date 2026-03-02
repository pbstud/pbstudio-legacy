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

/* package/checkout_login.html.twig */
class __TwigTemplate_bf1e1517afa7ff0748c4a86af393113d extends Template
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
            <p>
                Bienvenido a P&B
                <small>Inicia sesión o regístrate para realizar tu compra</small>
            </p>
            <div>
                <h5>¿Ya tienes una cuenta con P&B?</h5>
                <a href=\"#\" data-url=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["_modaltarget" => ($context["modalTarget"] ?? null)]), "html", null, true);
        yield "\" class=\"btn load-modal\">Inicia sesión</a>
            </div>
            <div>
                <h5>¿Es la primera vez que nos visitas?</h5>
                <a href=\"#\" data-url=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["_modaltarget" => ($context["modalTarget"] ?? null)]), "html", null, true);
        yield "\" class=\"btn load-modal\">Regístrate</a>
            </div>
        </div>

        ";
        // line 20
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_checkout_detail.html.twig");
        yield "
    </div>
</section>

<script type=\"text/javascript\">
    checkoutNotLogged();
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "package/checkout_login.html.twig";
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
        return array (  65 => 20,  58 => 16,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "package/checkout_login.html.twig", "/var/www/pbstudio/releases/81/templates/package/checkout_login.html.twig");
    }
}
