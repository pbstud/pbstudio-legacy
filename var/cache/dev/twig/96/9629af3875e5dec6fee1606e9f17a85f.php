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

/* backend/default/partials/pagination.html.twig */
class __TwigTemplate_336d4bc45459f78896e4e95e08129e03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/partials/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/partials/pagination.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-sm-5\">
        <div class=\"pagination_info\">
            Mostrando ";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["firstItemNumber"]) || array_key_exists("firstItemNumber", $context) ? $context["firstItemNumber"] : (function () { throw new RuntimeError('Variable "firstItemNumber" does not exist.', 4, $this->source); })()), "html", null, true);
        yield " - ";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["lastItemNumber"]) || array_key_exists("lastItemNumber", $context) ? $context["lastItemNumber"] : (function () { throw new RuntimeError('Variable "lastItemNumber" does not exist.', 4, $this->source); })()), "html", null, true);
        yield " de ";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"col-sm-7\">
        <div class=\"pagination_numbers pull-right\">
            ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/pagination/bootstrap_v3_pagination.html.twig");
        yield "
        </div>
    </div>
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
        return "backend/default/partials/pagination.html.twig";
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
        return array (  62 => 10,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-sm-5\">
        <div class=\"pagination_info\">
            Mostrando {{ firstItemNumber }} - {{ lastItemNumber }} de {{ totalCount }}
        </div>
    </div>

    <div class=\"col-sm-7\">
        <div class=\"pagination_numbers pull-right\">
            {{ include('backend/default/pagination/bootstrap_v3_pagination.html.twig') }}
        </div>
    </div>
</div>
", "backend/default/partials/pagination.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\partials\\pagination.html.twig");
    }
}
