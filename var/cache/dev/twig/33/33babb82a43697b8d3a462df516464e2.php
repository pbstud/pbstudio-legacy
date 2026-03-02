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

/* branch_office/_all.html.twig */
class __TwigTemplate_ce44151f3abd257ebb455de7d0c2e27b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "branch_office/_all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "branch_office/_all.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["branch_offices"]) || array_key_exists("branch_offices", $context) ? $context["branch_offices"] : (function () { throw new RuntimeError('Variable "branch_offices" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branch_office"]) {
            // line 2
            yield "    ";
            // line 3
            yield "    <div>
        <a href=\"";
            // line 4
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["branch_office"], "slug", [], "any", false, false, false, 4)]), "html", null, true);
            yield "\">
            <h1>";
            // line 5
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branch_office"], "place", [], "any", false, false, false, 5), "html", null, true);
            yield "</h1>
            <h5>";
            // line 6
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branch_office"], "name", [], "any", false, false, false, 6), "html", null, true);
            yield "</h5>
        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch_office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "branch_office/_all.html.twig";
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
        return array (  61 => 6,  57 => 5,  53 => 4,  50 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for branch_office in branch_offices %}
    {# branch_office \\App\\Entity\\BranchOffice #}
    <div>
        <a href=\"{{ path('reservation_calendar', {'slug': branch_office.slug}) }}\">
            <h1>{{ branch_office.place }}</h1>
            <h5>{{ branch_office.name }}</h5>
        </a>
    </div>
{% endfor %}", "branch_office/_all.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\branch_office\\_all.html.twig");
    }
}
