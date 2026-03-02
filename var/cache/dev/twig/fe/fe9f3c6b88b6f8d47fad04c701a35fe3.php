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

/* backend/instructor/_general_data_form.html.twig */
class __TwigTemplate_8d3079be0fbec1cb8f8ccffe4e22719c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/instructor/_general_data_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/instructor/_general_data_form.html.twig"));

        // line 1
        yield "<div class=\"row\">
    ";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "profile", [], "any", false, false, false, 2), "firstname", [], "any", false, false, false, 2), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "profile", [], "any", false, false, false, 3), "paternalSurname", [], "any", false, false, false, 3), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
</div>

<div class=\"row\">
    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "profile", [], "any", false, false, false, 7), "maternalSurname", [], "any", false, false, false, 7), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
</div>

<div class=\"row\">
    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "profile", [], "any", false, false, false, 12), "telephone", [], "any", false, false, false, 12), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "profile", [], "any", false, false, false, 13), "admissionAt", [], "any", false, false, false, 13), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
</div>

<div class=\"row\">
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "disciplines", [], "any", false, false, false, 17), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "profile", [], "any", false, false, false, 18), "photoFile", [], "any", false, false, false, 18), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
</div>

<div class=\"row\">
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "profile", [], "any", false, false, false, 22), "description", [], "any", false, false, false, 22), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "profile", [], "any", false, false, false, 23), "address", [], "any", false, false, false, 23), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
</div>

<div class=\"row\">
    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "isActive", [], "any", false, false, false, 27), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/instructor/_general_data_form.html.twig";
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
        return array (  102 => 27,  95 => 23,  91 => 22,  84 => 18,  80 => 17,  73 => 13,  69 => 12,  62 => 8,  58 => 7,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    {{ form_row(form.profile.firstname, {'row_attr': {'class': 'col-md-6'}}) }}
    {{ form_row(form.profile.paternalSurname, {'row_attr': {'class': 'col-md-6'}}) }}
</div>

<div class=\"row\">
    {{ form_row(form.profile.maternalSurname, {'row_attr': {'class': 'col-md-6'}}) }}
    {{ form_row(form.email, {'row_attr': {'class': 'col-md-6'}}) }}
</div>

<div class=\"row\">
    {{ form_row(form.profile.telephone, {'row_attr': {'class': 'col-md-6'}}) }}
    {{ form_row(form.profile.admissionAt, {'row_attr': {'class': 'col-md-6'}}) }}
</div>

<div class=\"row\">
    {{ form_row(form.disciplines, {'row_attr': {'class': 'col-md-6'}}) }}
    {{ form_row(form.profile.photoFile, {'row_attr': {'class': 'col-md-6'}}) }}
</div>

<div class=\"row\">
    {{ form_row(form.profile.description, {'row_attr': {'class': 'col-md-6'}}) }}
    {{ form_row(form.profile.address, {'row_attr': {'class': 'col-md-6'}}) }}
</div>

<div class=\"row\">
    {{ form_row(form.isActive, {'row_attr': {'class': 'col-md-6'}}) }}
</div>", "backend/instructor/_general_data_form.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\instructor\\_general_data_form.html.twig");
    }
}
