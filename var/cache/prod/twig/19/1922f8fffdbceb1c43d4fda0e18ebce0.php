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
class __TwigTemplate_cf84e6f34b1c466b7c26fad74cac002d extends Template
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
        return array (  51 => 9,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "resetting/request.html.twig", "/var/www/pbstudio/releases/81/templates/resetting/request.html.twig");
    }
}
