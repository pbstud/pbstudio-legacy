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

/* package/_aside.html.twig */
class __TwigTemplate_7ef3f4c46de703738e4396aa537c221f extends Template
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
        yield "<aside id=\"packages\">
    <div class=\"row\">
        <div class=\"content\">
            <div class=\"title clearfix center\">
                <h3>Paquetes y costos</h3>
            </div>
            <div class=\"center\">
                <h4>Clases grupales</h4>
                <div class=\"price\">
                    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PackageController::groupPackages"));
        yield "
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"content\">
            <div class=\"center\">
                <h4>Clases individuales</h4>
                <div class=\"price\">
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PackageController::individualPackages"));
        yield "
                </div>

                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn reserve-class-toggle\">
                    Consulta el calendario
                </a>
            </div>
        </div>
    </div>
</aside>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "package/_aside.html.twig";
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
        return array (  68 => 23,  62 => 20,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "package/_aside.html.twig", "/var/www/pbstudio/releases/81/templates/package/_aside.html.twig");
    }
}
