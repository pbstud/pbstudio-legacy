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

/* backend/default/embed/form_common.html.twig */
class __TwigTemplate_fa73295c8062d618ca18827b1e64f612 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/embed/form_common.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/embed/form_common.html.twig"));

        // line 1
        yield "<div class=\"\">
    ";
        // line 2
        if (array_key_exists("page_section", $context)) {
            // line 3
            yield "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    ";
            // line 6
            if (array_key_exists("return_to", $context)) {
                // line 7
                yield "                        <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["return_to"]) || array_key_exists("return_to", $context) ? $context["return_to"] : (function () { throw new RuntimeError('Variable "return_to" does not exist.', 7, $this->source); })()), "html", null, true);
                yield "\" class=\"btn btn-default btn-return-to\">
                            <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                        </a>
                    ";
            }
            // line 11
            yield "                    ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "
                </h3>
            </div>
        </div>

        <div class=\"clearfix\"></div>
    ";
        }
        // line 18
        yield "
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</h2>

                    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 26
        yield "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 30
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 25
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/embed/form_common.html.twig";
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
        return array (  133 => 29,  114 => 25,  98 => 30,  96 => 29,  91 => 26,  89 => 25,  84 => 23,  77 => 18,  66 => 11,  58 => 7,  56 => 6,  51 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"\">
    {% if page_section is defined %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    {% if return_to is defined %}
                        <a href=\"{{ return_to }}\" class=\"btn btn-default btn-return-to\">
                            <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                    {{ page_section }}
                </h3>
            </div>
        </div>

        <div class=\"clearfix\"></div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>{{ page_title }}</h2>

                    {% block actions %}{% endblock %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>
    </div>
</div>
", "backend/default/embed/form_common.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\embed\\form_common.html.twig");
    }
}
