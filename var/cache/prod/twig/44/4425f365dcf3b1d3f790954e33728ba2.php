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

/* registration/index.html.twig */
class __TwigTemplate_82438f565b6a3dffff759ceec0aa68cd extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["form_div_layout.html.twig"], false);
        // line 2
        yield "
<section class=\"box-form\">
    <div class=\"gradient\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>
        <div class=\"row\">
            <h2>Regístrate</h2>
            <div>
                <form action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        yield "\" method=\"post\" class=\"m-fjx\">
                    ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "registration/_fields.html.twig");
        yield "
                </form>
            </div>

            <p>¿Ya tienes cuenta? <a href=\"#login\" data-url=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" data-remodal>¡Inicia sesión!</a></p>
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
        return "registration/index.html.twig";
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
        return array (  60 => 14,  53 => 10,  49 => 9,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/index.html.twig", "/var/www/pbstudio/releases/81/templates/registration/index.html.twig");
    }
}
