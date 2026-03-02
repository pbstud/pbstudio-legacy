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

/* backend/package/_form.html.twig */
class __TwigTemplate_edee6c9f2c22acb9ec35630e92c25f13 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/package/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/package/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form-package"]]);
        yield "
    <div class=\"row\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "isUnlimited", [], "any", false, false, false, 3), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "totalClasses", [], "any", false, false, false, 4), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "altText", [], "any", false, false, false, 8), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "daysExpiry", [], "any", false, false, false, 9), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "amount", [], "any", false, false, false, 13), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "specialPrice", [], "any", false, false, false, 14), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "discountInfo", [], "any", false, false, false, 18), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), 'row', ["row_attr" => ["class" => "col-md-6 icheck-fields"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "newUser", [], "any", false, false, false, 23), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "public", [], "any", false, false, false, 24), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "isActive", [], "any", false, false, false, 28), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"ln_solid\"></div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"pull-right\">
                <button type=\"submit\" class=\"btn btn-primary btn-submit\">
                    ";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 37, $this->source); })()), "btn.save")) : ("btn.save"))), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </div>
";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
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
        return "backend/package/_form.html.twig";
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
        return array (  124 => 42,  116 => 37,  104 => 28,  97 => 24,  93 => 23,  86 => 19,  82 => 18,  75 => 14,  71 => 13,  64 => 9,  60 => 8,  53 => 4,  49 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id': 'form-package'}}) }}
    <div class=\"row\">
        {{ form_row(form.isUnlimited, {'row_attr': {'class': 'col-md-6'}}) }}
        {{ form_row(form.totalClasses, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.altText, {'row_attr': {'class': 'col-md-6'}}) }}
        {{ form_row(form.daysExpiry, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.amount, {'row_attr': {'class': 'col-md-6'}}) }}
        {{ form_row(form.specialPrice, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.discountInfo, {'row_attr': {'class': 'col-md-6'}}) }}
        {{ form_row(form.type, {'row_attr': {'class': 'col-md-6 icheck-fields'}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.newUser, {'row_attr': {'class': 'col-md-6'}}) }}
        {{ form_row(form.public, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"row\">
        {{ form_row(form.isActive, {'row_attr': {'class': 'col-md-6'}}) }}
    </div>

    <div class=\"ln_solid\"></div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"pull-right\">
                <button type=\"submit\" class=\"btn btn-primary btn-submit\">
                    {{ (button_label|default('btn.save'))|trans }}
                </button>
            </div>
        </div>
    </div>
{{ form_end(form) }}
", "backend/package/_form.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\package\\_form.html.twig");
    }
}
