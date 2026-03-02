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

/* security/login_modal.html.twig */
class __TwigTemplate_1b424c5f9da17e1288b1980bc66f7ffb extends Template
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
        Iniciar sesión
        <small>
            ¿Aún no tienes cuenta?
            <a href=\"#\" data-url=\"";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["_modaltarget" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 6), "get", ["_modaltarget"], "method", false, false, false, 6)]), "html", null, true);
        yield "\" class=\"load-modal\">¡Regístrate ahora!</a>
        </small>
    </p>

    <form id=\"frmCheckoutLogin\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
        <input type=\"email\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last_username"] ?? null), "html", null, true);
        yield "\" placeholder=\"Correo\" required>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Contraseña\" required>

        <a href=\"#\" data-url=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetting_request", ["_modaltarget" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", ["_modaltarget"], "method", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"load-modal\">¿Olvidaste tu contraseña?</a>

        <button type=\"submit\" class=\"btn-submit\">Entrar</button>

        <div class=\"remember-me\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\" checked> Recordarme
            </label>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"_modaltarget\" value=\"";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "get", ["_modaltarget"], "method", false, false, false, 25), "html", null, true);
        yield "\">
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
        return "security/login_modal.html.twig";
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
        return array (  79 => 25,  75 => 24,  62 => 14,  56 => 11,  52 => 10,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login_modal.html.twig", "/var/www/pbstudio/releases/81/templates/security/login_modal.html.twig");
    }
}
