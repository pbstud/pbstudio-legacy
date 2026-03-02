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
class __TwigTemplate_47d28bf7f95d0c49b501bfc9dbaab23b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/checkout_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/checkout_login.html.twig"));

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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["_modaltarget" => (isset($context["modalTarget"]) || array_key_exists("modalTarget", $context) ? $context["modalTarget"] : (function () { throw new RuntimeError('Variable "modalTarget" does not exist.', 12, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn load-modal\">Inicia sesión</a>
            </div>
            <div>
                <h5>¿Es la primera vez que nos visitas?</h5>
                <a href=\"#\" data-url=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["_modaltarget" => (isset($context["modalTarget"]) || array_key_exists("modalTarget", $context) ? $context["modalTarget"] : (function () { throw new RuntimeError('Variable "modalTarget" does not exist.', 16, $this->source); })())]), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  71 => 20,  64 => 16,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"grid-1-8 right right-container\">
            <p>
                Bienvenido a P&B
                <small>Inicia sesión o regístrate para realizar tu compra</small>
            </p>
            <div>
                <h5>¿Ya tienes una cuenta con P&B?</h5>
                <a href=\"#\" data-url=\"{{ path('app_login', {'_modaltarget': modalTarget}) }}\" class=\"btn load-modal\">Inicia sesión</a>
            </div>
            <div>
                <h5>¿Es la primera vez que nos visitas?</h5>
                <a href=\"#\" data-url=\"{{ path('register', {'_modaltarget': modalTarget}) }}\" class=\"btn load-modal\">Regístrate</a>
            </div>
        </div>

        {{ include('package/_checkout_detail.html.twig') }}
    </div>
</section>

<script type=\"text/javascript\">
    checkoutNotLogged();
</script>", "package/checkout_login.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\package\\checkout_login.html.twig");
    }
}
