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

/* profile/reservation_change_session_success.html.twig */
class __TwigTemplate_08afc4277bcd2c1ad85626611657e1b2 extends Template
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
        <div class=\"center\">
            <h4>Tu cambio ha sido exitoso</h4>
        </div>

        <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\" class=\"btn secondary\">Ir a mi cuenta</a>
    </div>
</section>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/reservation_change_session_success.html.twig";
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
        return array (  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/reservation_change_session_success.html.twig", "/var/www/pbstudio/releases/81/templates/profile/reservation_change_session_success.html.twig");
    }
}
