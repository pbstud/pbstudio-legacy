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

/* login/_reserve_links.html.twig */
class __TwigTemplate_895676a4bb0c802d65ec91ca5467af90 extends Template
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
        yield "<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div>
            <a href=\"#\" class=\"btn\" data-url=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" data-remodal>Inicia Sesión para Reservar</a>
        </div>
        <div>
            <p>Si aún no estás inscrito <a href=\"#\" data-url=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\" data-remodal>Regístrate Aquí</a></p>
        </div>
    </div>
</section>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/_reserve_links.html.twig";
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
        return array (  51 => 9,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/_reserve_links.html.twig", "/var/www/pbstudio/releases/81/templates/login/_reserve_links.html.twig");
    }
}
