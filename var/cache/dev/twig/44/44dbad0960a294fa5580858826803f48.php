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
class __TwigTemplate_c039e1af0fa743b2566106464f8dfb9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resetting/request_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resetting/request_modal.html.twig"));

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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["_modaltarget"], "method", false, false, false, 14), "html", null, true);
        yield "\" />
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
        return array (  63 => 14,  55 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('resetting/_flash.html.twig') }}

<div>
    <p>
        Recuperar contraseña
        <small>Te enviaremos un correo con las instrucciones para restablecer tu contraseña.</small>
    </p>

    <form id=\"frmCheckoutResetting\" action=\"{{ path('resetting_send_email') }}\" method=\"post\">
        <input type=\"email\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"Correo\" />

        <button type=\"submit\" class=\"btn-submit\">RESTABLECER CONTRASEÑA</button>

        <input type=\"hidden\" name=\"_modaltarget\" value=\"{{ app.request.get('_modaltarget') }}\" />
    </form>
</div>

<script type=\"text/javascript\">
    checkoutNotLogged();
</script>
", "resetting/request_modal.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\resetting\\request_modal.html.twig");
    }
}
