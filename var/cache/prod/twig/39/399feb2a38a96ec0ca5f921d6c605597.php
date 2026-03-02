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
class __TwigTemplate_2d5ea3e16a364ba801d8ec21fe687d9b extends Template
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
        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "form-branch-office"]]);
        yield "
    <div class=\"row\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 3), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "capacity", [], "any", false, false, false, 4), 'row', ["row_attr" => ["class" => "col-md-6"], "attr" => ["min" => 1]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "placesNotAvailable", [], "any", false, false, false, 8), 'row', ["row_attr" => ["class" => "col-md-6"], "attr" => ["data-tag-number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "capacity", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)]]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "discipline", [], "any", false, false, false, 9), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "branchOffice", [], "any", false, false, false, 13), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 14), 'row', ["row_attr" => ["class" => "col-md-6 icheck-fields"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 18), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"ln_solid\"></div>

    ";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/_btn_save.html.twig");
        yield "
";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
";
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
        return array (  88 => 24,  84 => 23,  76 => 18,  69 => 14,  65 => 13,  58 => 9,  54 => 8,  47 => 4,  43 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/exerciseroom/_form.html.twig", "/var/www/pbstudio/releases/81/templates/backend/exerciseroom/_form.html.twig");
    }
}
