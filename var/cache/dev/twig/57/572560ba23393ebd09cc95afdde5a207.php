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
class __TwigTemplate_dad4b90b3472bb5d70b04e771b448a1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/_aside.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/_aside.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  74 => 23,  68 => 20,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside id=\"packages\">
    <div class=\"row\">
        <div class=\"content\">
            <div class=\"title clearfix center\">
                <h3>Paquetes y costos</h3>
            </div>
            <div class=\"center\">
                <h4>Clases grupales</h4>
                <div class=\"price\">
                    {{ render(controller('App\\\\Controller\\\\PackageController::groupPackages')) }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"content\">
            <div class=\"center\">
                <h4>Clases individuales</h4>
                <div class=\"price\">
                    {{ render(controller('App\\\\Controller\\\\PackageController::individualPackages')) }}
                </div>

                <a href=\"{{ path('reservation_calendar') }}\" class=\"btn reserve-class-toggle\">
                    Consulta el calendario
                </a>
            </div>
        </div>
    </div>
</aside>
", "package/_aside.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\package\\_aside.html.twig");
    }
}
