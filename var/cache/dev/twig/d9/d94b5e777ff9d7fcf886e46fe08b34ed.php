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

/* resetting/request.html.twig */
class __TwigTemplate_62d1924ea76c4c5f6419437d99f8f4f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resetting/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resetting/request.html.twig"));

        // line 1
        yield "<section class=\"box-form\">
    ";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "resetting/_flash.html.twig");
        yield "

    <div class=\"gradient\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>
        <div class=\"row\">
            <h2>Recuperar contraseña</h2>
            <div>
                <form id=\"resetting-request\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetting_send_email");
        yield "\" method=\"post\" class=\"m-fjx\">
                    <input type=\"email\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"Correo\">
                    <label for=\"username\">Te enviaremos un correo con las instrucciones para restablecer tu contraseña.</label>

                    <button type=\"submit\" class=\"btn-submit\">RESTABLECER CONTRASEÑA</button>
                </form>
            </div>
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
        return "resetting/request.html.twig";
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
        return array (  57 => 9,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"box-form\">
    {{ include('resetting/_flash.html.twig') }}

    <div class=\"gradient\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>
        <div class=\"row\">
            <h2>Recuperar contraseña</h2>
            <div>
                <form id=\"resetting-request\" action=\"{{ path('resetting_send_email') }}\" method=\"post\" class=\"m-fjx\">
                    <input type=\"email\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"Correo\">
                    <label for=\"username\">Te enviaremos un correo con las instrucciones para restablecer tu contraseña.</label>

                    <button type=\"submit\" class=\"btn-submit\">RESTABLECER CONTRASEÑA</button>
                </form>
            </div>
        </div>
    </div>
</section>
", "resetting/request.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\resetting\\request.html.twig");
    }
}
