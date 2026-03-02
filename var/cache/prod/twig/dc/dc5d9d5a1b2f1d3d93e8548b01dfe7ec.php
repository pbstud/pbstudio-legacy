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

/* security/login.html.twig */
class __TwigTemplate_8f2af9fa510e3452383538a4d1bf66e0 extends Template
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
        yield "<section class=\"box-form\">
    ";
        // line 2
        if (($context["error"] ?? null)) {
            // line 3
            yield "        <div class=\"error\">
            <p>";
            // line 4
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
            yield "</p>
        </div>
    ";
        }
        // line 7
        yield "
    <div class=\"gradient\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>
        <div class=\"row\">
            <h2>Iniciar sesión</h2>

            <div>
                <form action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" class=\"m-fjx\">
                    <input type=\"email\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last_username"] ?? null), "html", null, true);
        yield "\" placeholder=\"Correo\" required>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Contraseña\" required>

                    <button type=\"submit\" class=\"btn-submit\">Entrar</button>

                    <div class=\"remember-me\">
                        <label>
                            <input type=\"checkbox\" name=\"_remember_me\" checked> Recordarme
                        </label>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                </form>

                <br>
                <br>
                <br>
                <a href=\"#\" data-url=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetting_request");
        yield "\" data-remodal>¿Olvidaste tu contraseña?</a>
            </div>
            <p>
                ¿Aún no tienes cuenta?
                <a href=\"#\" data-url=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\" data-remodal>¡Regístrate ahora!</a>
            </p>
        </div>
    </div>
</section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  95 => 36,  88 => 32,  79 => 26,  65 => 15,  61 => 14,  52 => 7,  46 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/pbstudio/releases/81/templates/security/login.html.twig");
    }
}
