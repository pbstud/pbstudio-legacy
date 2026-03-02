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

/* registration/modal.html.twig */
class __TwigTemplate_95be96fa109659ac79355b929428689b extends Template
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
        yield "<div>
    <p>
        Regístrate
        <small>¿Ya tienes cuenta? <a href=\"#\" class=\"load-modal\" data-url=\"";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["_modaltarget" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "get", ["_modaltarget"], "method", false, false, false, 4)]), "html", null, true);
        yield "\">¡Inicia sesión!</a></small>
    </p>
    <form id=\"frmCheckoutRegister\" action=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\" method=\"post\">
        ";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "registration/_fields.html.twig");
        yield "

        <input type=\"hidden\" name=\"_modaltarget\" value=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "get", ["_modaltarget"], "method", false, false, false, 9), "html", null, true);
        yield "\" />
    </form>
</div>

<script type=\"text/javascript\">
    checkoutNotLogged();
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/modal.html.twig";
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
        return array (  57 => 9,  52 => 7,  48 => 6,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/modal.html.twig", "/var/www/pbstudio/releases/81/templates/registration/modal.html.twig");
    }
}
