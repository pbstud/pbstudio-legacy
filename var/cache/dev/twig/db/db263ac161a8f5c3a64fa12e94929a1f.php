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

/* backend/exerciseroom/_form.html.twig */
class __TwigTemplate_446f12a414312f7ec89be7b2788ac089 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/exerciseroom/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/exerciseroom/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form-branch-office"]]);
        yield "
    <div class=\"row\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "capacity", [], "any", false, false, false, 4), 'row', ["row_attr" => ["class" => "col-md-6"], "attr" => ["min" => 1]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "placesNotAvailable", [], "any", false, false, false, 8), 'row', ["row_attr" => ["class" => "col-md-6"], "attr" => ["data-tag-number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "capacity", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)]]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "discipline", [], "any", false, false, false, 9), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "branchOffice", [], "any", false, false, false, 13), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14), 'row', ["row_attr" => ["class" => "col-md-6 icheck-fields"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "isActive", [], "any", false, false, false, 18), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"ln_solid\"></div>

    ";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/_btn_save.html.twig");
        yield "
";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
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
        return "backend/exerciseroom/_form.html.twig";
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
        return array (  94 => 24,  90 => 23,  82 => 18,  75 => 14,  71 => 13,  64 => 9,  60 => 8,  53 => 4,  49 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id': 'form-branch-office'}}) }}
    <div class=\"row\">
        {{ form_row(form.name, {'row_attr': {'class': 'col-md-6'}}) }}
        {{ form_row(form.capacity, {'row_attr': {'class': 'col-md-6'}, 'attr': {'min': 1}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.placesNotAvailable, {'row_attr': {'class': 'col-md-6'}, 'attr': {'data-tag-number': form.capacity.vars.id}}) }}
        {{ form_row(form.discipline, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.branchOffice, {'row_attr': {'class': 'col-md-6'}}) }}
        {{ form_row(form.type, {'row_attr': {'class': 'col-md-6 icheck-fields'}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.isActive, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"ln_solid\"></div>

    {{ include('backend/default/_btn_save.html.twig') }}
{{ form_end(form) }}
", "backend/exerciseroom/_form.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\exerciseroom\\_form.html.twig");
    }
}
