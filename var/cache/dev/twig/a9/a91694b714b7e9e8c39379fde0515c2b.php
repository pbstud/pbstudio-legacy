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
class __TwigTemplate_ff1d90cd04e12aacce8d980c96397eed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<section class=\"box-form\">
    ";
        // line 2
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 2, $this->source); })())) {
            // line 3
            yield "        <div class=\"error\">
            <p>";
            // line 4
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  101 => 36,  94 => 32,  85 => 26,  71 => 15,  67 => 14,  58 => 7,  52 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"box-form\">
    {% if error %}
        <div class=\"error\">
            <p>{{ error.messageKey|trans(error.messageData, 'security') }}</p>
        </div>
    {% endif %}

    <div class=\"gradient\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>
        <div class=\"row\">
            <h2>Iniciar sesión</h2>

            <div>
                <form action=\"{{ path(\"app_login\") }}\" method=\"post\" class=\"m-fjx\">
                    <input type=\"email\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ last_username }}\" placeholder=\"Correo\" required>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Contraseña\" required>

                    <button type=\"submit\" class=\"btn-submit\">Entrar</button>

                    <div class=\"remember-me\">
                        <label>
                            <input type=\"checkbox\" name=\"_remember_me\" checked> Recordarme
                        </label>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                </form>

                <br>
                <br>
                <br>
                <a href=\"#\" data-url=\"{{ path('resetting_request') }}\" data-remodal>¿Olvidaste tu contraseña?</a>
            </div>
            <p>
                ¿Aún no tienes cuenta?
                <a href=\"#\" data-url=\"{{ path('register') }}\" data-remodal>¡Regístrate ahora!</a>
            </p>
        </div>
    </div>
</section>
", "security/login.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\security\\login.html.twig");
    }
}
