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

/* backend/default/_card_table.html.twig */
class __TwigTemplate_7ece9078afb2163c1a866985b265cb0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/_card_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/_card_table.html.twig"));

        // line 1
        yield "<div class=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("col", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 1, $this->source); })()), "col-xs-12 col-md-6")) : ("col-xs-12 col-md-6")), "html", null, true);
        yield "\">
    <div class=\"x_panel x_panel_widget\">
        <div class=\"x_title\">
            <h2>";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</h2>
            <div class=\"clearfix\"></div>
        </div>

        <div class=\"x_content\">
            <div class=\"table-responsive\">
                <table class=\"table table_inner table-striped\">
                    <tbody>
                    ";
        // line 12
        yield from $this->unwrap()->yieldBlock('tbody', $context, $blocks);
        // line 13
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 12
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/_card_table.html.twig";
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
        return array (  81 => 12,  65 => 13,  63 => 12,  52 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ col|default('col-xs-12 col-md-6') }}\">
    <div class=\"x_panel x_panel_widget\">
        <div class=\"x_title\">
            <h2>{{ title }}</h2>
            <div class=\"clearfix\"></div>
        </div>

        <div class=\"x_content\">
            <div class=\"table-responsive\">
                <table class=\"table table_inner table-striped\">
                    <tbody>
                    {% block tbody %}{% endblock %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>", "backend/default/_card_table.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\_card_table.html.twig");
    }
}
