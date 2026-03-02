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
class __TwigTemplate_de34e72d87d9ec9dc68e0c1daba128d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/partials/header.html.twig"));

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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  64 => 16,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav>
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        {{ app.user.username }}
                        <span class=\"fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                        <li>
                            <a href=\"{{ path('backend_logout') }}\">
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
", "backend/default/partials/header.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\partials\\header.html.twig");
    }
}
