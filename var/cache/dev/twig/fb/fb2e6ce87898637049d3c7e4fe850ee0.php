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
class __TwigTemplate_e4f261bdba22c77b1309ce66a4aed7ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/modal.html.twig"));

        // line 1
        yield "<div>
    <p>
        Regístrate
        <small>¿Ya tienes cuenta? <a href=\"#\" class=\"load-modal\" data-url=\"";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["_modaltarget" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", ["_modaltarget"], "method", false, false, false, 4)]), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", ["_modaltarget"], "method", false, false, false, 9), "html", null, true);
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
        return array (  63 => 9,  58 => 7,  54 => 6,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <p>
        Regístrate
        <small>¿Ya tienes cuenta? <a href=\"#\" class=\"load-modal\" data-url=\"{{ path('app_login', {'_modaltarget': app.request.get('_modaltarget')}) }}\">¡Inicia sesión!</a></small>
    </p>
    <form id=\"frmCheckoutRegister\" action=\"{{ path('register') }}\" method=\"post\">
        {{ include('registration/_fields.html.twig') }}

        <input type=\"hidden\" name=\"_modaltarget\" value=\"{{ app.request.get('_modaltarget') }}\" />
    </form>
</div>

<script type=\"text/javascript\">
    checkoutNotLogged();
</script>
", "registration/modal.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\registration\\modal.html.twig");
    }
}
