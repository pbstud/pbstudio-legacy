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

/* backend/user/edit.html.twig */
class __TwigTemplate_34394d4a6b892cbf64f6f9d88aaec9e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/edit.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/edit.html.twig", "backend/user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 4
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["id" => "form-user"]]);
        yield "
        <div class=\"row\">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "lastname", [], "any", false, false, false, 7), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"row\">
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "phone", [], "any", false, false, false, 11), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"row\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "branchOffice", [], "any", false, false, false, 16), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "birthday", [], "any", false, false, false, 17), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"row\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "emergencyContactName", [], "any", false, false, false, 21), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "emergencyContactPhone", [], "any", false, false, false, 22), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"row\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "enabled", [], "any", false, false, false, 26), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"ln_solid\"></div>

        ";
        // line 31
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/_btn_save.html.twig", ["button_label" => "btn.update"]);
        yield "
    ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/edit.html.twig";
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
        return array (  131 => 32,  127 => 31,  119 => 26,  112 => 22,  108 => 21,  101 => 17,  97 => 16,  90 => 12,  86 => 11,  79 => 7,  75 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/default/edit.html.twig' %}

{% block form %}
    {{ form_start(form, {'attr': {'id': 'form-user'}}) }}
        <div class=\"row\">
            {{ form_row(form.name, {'row_attr': {'class': 'col-md-6'}}) }}
            {{ form_row(form.lastname, {'row_attr': {'class': 'col-md-6'}}) }}
        </div>

        <div class=\"row\">
            {{ form_row(form.phone, {'row_attr': {'class': 'col-md-6'}}) }}
            {{ form_row(form.email, {'row_attr': {'class': 'col-md-6'}}) }}
        </div>

        <div class=\"row\">
            {{ form_row(form.branchOffice, {'row_attr': {'class': 'col-md-6'}}) }}
            {{ form_row(form.birthday, {'row_attr': {'class': 'col-md-6'}}) }}
        </div>

        <div class=\"row\">
            {{ form_row(form.emergencyContactName, {'row_attr': {'class': 'col-md-6'}}) }}
            {{ form_row(form.emergencyContactPhone, {'row_attr': {'class': 'col-md-6'}}) }}
        </div>

        <div class=\"row\">
            {{ form_row(form.enabled, {'row_attr': {'class': 'col-md-6'}}) }}
        </div>

        <div class=\"ln_solid\"></div>

        {{ include('backend/default/_btn_save.html.twig', {'button_label': 'btn.update'}) }}
    {{ form_end(form) }}
{% endblock %}
", "backend/user/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\edit.html.twig");
    }
}
