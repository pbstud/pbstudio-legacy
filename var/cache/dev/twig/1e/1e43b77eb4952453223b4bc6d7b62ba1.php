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

/* backend/instructor/_form.html.twig */
class __TwigTemplate_36d3d07a75d6498a7108af4552b62713 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/instructor/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/instructor/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form-instructor"]]);
        yield "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"x_subtitle\">Información de acceso</h4>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "password", [], "any", false, false, false, 13), "first", [], "any", false, false, false, 13), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "password", [], "any", false, false, false, 14), "second", [], "any", false, false, false, 14), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"x_subtitle\">Información general</h4>
        </div>
    </div>

    ";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/instructor/_general_data_form.html.twig");
        yield "

    <div class=\"ln_solid\"></div>

    ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/_btn_save.html.twig");
        yield "
";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        yield "
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
        return "backend/instructor/_form.html.twig";
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
        return array (  89 => 28,  85 => 27,  78 => 23,  66 => 14,  62 => 13,  55 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id': 'form-instructor'}}) }}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"x_subtitle\">Información de acceso</h4>
        </div>
    </div>

    <div class=\"row\">
        {{ form_row(form.username, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.password.first, {'row_attr': {'class': 'col-md-6'}}) }}
        {{ form_row(form.password.second, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"x_subtitle\">Información general</h4>
        </div>
    </div>

    {{ include('backend/instructor/_general_data_form.html.twig') }}

    <div class=\"ln_solid\"></div>

    {{ include('backend/default/_btn_save.html.twig') }}
{{ form_end(form) }}
", "backend/instructor/_form.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\instructor\\_form.html.twig");
    }
}
