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

/* resetting/request_modal.html.twig */
class __TwigTemplate_707edfed8283dafefc378c3b602ad16a extends Template
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "resetting/_flash.html.twig");
        yield "

<div>
    <p>
        Recuperar contraseña
        <small>Te enviaremos un correo con las instrucciones para restablecer tu contraseña.</small>
    </p>

    <form id=\"frmCheckoutResetting\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetting_send_email");
        yield "\" method=\"post\">
        <input type=\"email\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"Correo\" />

        <button type=\"submit\" class=\"btn-submit\">RESTABLECER CONTRASEÑA</button>

        <input type=\"hidden\" name=\"_modaltarget\" value=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", ["_modaltarget"], "method", false, false, false, 14), "html", null, true);
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
        return "resetting/request_modal.html.twig";
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
        return array (  57 => 14,  49 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "resetting/request_modal.html.twig", "/var/www/pbstudio/releases/81/templates/resetting/request_modal.html.twig");
    }
}
