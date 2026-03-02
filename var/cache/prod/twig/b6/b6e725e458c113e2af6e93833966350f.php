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

/* backend/default/partials/header.html.twig */
class __TwigTemplate_d5a013d46da79c1aebd05a1c385ce7bc extends Template
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
        yield "<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav>
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        ";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11), "html", null, true);
        yield "
                        <span class=\"fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                        <li>
                            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_logout");
        yield "\">
                                <i class=\"fa fa-sign-out pull-right\"></i> Salir
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class=\"clearfix\"></div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/partials/header.html.twig";
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
        return array (  58 => 16,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/partials/header.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/partials/header.html.twig");
    }
}
