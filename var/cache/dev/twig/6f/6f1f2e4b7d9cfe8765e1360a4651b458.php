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

/* backend/default/embed/list_common.html.twig */
class __TwigTemplate_d30dbbd8abfabddac9597ad5039e43c9 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/embed/list_common.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/embed/list_common.html.twig"));

        // line 1
        yield "<div class=\"\">
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</h3>
        </div>

        <div class=\"title_right\">
            ";
        // line 8
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 9
        yield "        </div>
    </div>

    <div class=\"clearfix\"></div>

    ";
        // line 15
        yield "
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 18
        $context["_block"] = ((        $this->unwrap()->hasBlock("body_filters", $context, $blocks)) ? (        $this->unwrap()->renderBlock("body_filters", $context, $blocks)) : (null));
        // line 19
        yield "            ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_block"]) || array_key_exists("_block", $context) ? $context["_block"] : (function () { throw new RuntimeError('Variable "_block" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "                <div class=\"x_panel x_panel_filters\">
                    <div class=\"x_content\">
                        ";
            // line 22
            yield (isset($context["_block"]) || array_key_exists("_block", $context) ? $context["_block"] : (function () { throw new RuntimeError('Variable "_block" does not exist.', 22, $this->source); })());
            yield "
                    </div>
                </div>
            ";
        }
        // line 26
        yield "
            <div class=\"dataTables_wrapper\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        ";
        // line 34
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 35
        yield "                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"x_footer\">
                        ";
        // line 39
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 40
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 8
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

    // line 34
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

    // line 39
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/embed/list_common.html.twig";
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
        return array (  167 => 39,  148 => 34,  129 => 8,  112 => 40,  110 => 39,  104 => 35,  102 => 34,  95 => 30,  89 => 26,  82 => 22,  78 => 20,  75 => 19,  73 => 18,  68 => 15,  61 => 9,  59 => 8,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"\">
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>{{ page_section }}</h3>
        </div>

        <div class=\"title_right\">
            {% block actions %}{% endblock %}
        </div>
    </div>

    <div class=\"clearfix\"></div>

    {#{ include('backend/default/partials/flash.html.twig') }#}

    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            {% set _block = block('body_filters') is defined ? block('body_filters') : null %}
            {% if _block is not empty %}
                <div class=\"x_panel x_panel_filters\">
                    <div class=\"x_content\">
                        {{ _block|raw }}
                    </div>
                </div>
            {% endif %}

            <div class=\"dataTables_wrapper\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>{{ page_title }}</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        {% block body %}{% endblock %}
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"x_footer\">
                        {% block footer %}{% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "backend/default/embed/list_common.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\embed\\list_common.html.twig");
    }
}
