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
class __TwigTemplate_c7c8f2289379a84590657c1edca4c8d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login_modal.html.twig"));

        // line 1
        yield "<div>
    <p>
        Iniciar sesión
        <small>
            ¿Aún no tienes cuenta?
            <a href=\"#\" data-url=\"";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["_modaltarget" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", ["_modaltarget"], "method", false, false, false, 6)]), "html", null, true);
        yield "\" class=\"load-modal\">¡Regístrate ahora!</a>
        </small>
    </p>

    <form id=\"frmCheckoutLogin\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
        <input type=\"email\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Correo\" required>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Contraseña\" required>

        <a href=\"#\" data-url=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetting_request", ["_modaltarget" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["_modaltarget"], "method", false, false, false, 14)]), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["_modaltarget"], "method", false, false, false, 25), "html", null, true);
        yield "\">
    </form>
</div>

<script type=\"text/javascript\">
    checkoutNotLogged();
</script>
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
        return array (  85 => 25,  81 => 24,  68 => 14,  62 => 11,  58 => 10,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <p>
        Iniciar sesión
        <small>
            ¿Aún no tienes cuenta?
            <a href=\"#\" data-url=\"{{ path('register', {'_modaltarget': app.request.get('_modaltarget')}) }}\" class=\"load-modal\">¡Regístrate ahora!</a>
        </small>
    </p>

    <form id=\"frmCheckoutLogin\" action=\"{{ path(\"app_login\") }}\" method=\"post\">
        <input type=\"email\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ last_username }}\" placeholder=\"Correo\" required>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Contraseña\" required>

        <a href=\"#\" data-url=\"{{ path('resetting_request',  {'_modaltarget': app.request.get('_modaltarget')}) }}\" class=\"load-modal\">¿Olvidaste tu contraseña?</a>

        <button type=\"submit\" class=\"btn-submit\">Entrar</button>

        <div class=\"remember-me\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\" checked> Recordarme
            </label>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <input type=\"hidden\" name=\"_modaltarget\" value=\"{{ app.request.get('_modaltarget') }}\">
    </form>
</div>

<script type=\"text/javascript\">
    checkoutNotLogged();
</script>
", "security/login_modal.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\security\\login_modal.html.twig");
    }
}
