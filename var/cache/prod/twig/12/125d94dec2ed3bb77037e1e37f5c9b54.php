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
class __TwigTemplate_ccf88c3ca142dfeabc002cfc9f785c37 extends Template
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
        $this->parent = $this->loadTemplate("backend/default/edit.html.twig", "backend/user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "form-user"]]);
        yield "
        <div class=\"row\">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 6), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 7), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"row\">
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 11), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 12), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"row\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "branchOffice", [], "any", false, false, false, 16), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "birthday", [], "any", false, false, false, 17), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"row\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emergencyContactName", [], "any", false, false, false, 21), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emergencyContactPhone", [], "any", false, false, false, 22), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"row\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 26), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        </div>

        <div class=\"ln_solid\"></div>

        ";
        // line 31
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/_btn_save.html.twig", ["button_label" => "btn.update"]);
        yield "
    ";
        // line 32
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
        return array (  113 => 32,  109 => 31,  101 => 26,  94 => 22,  90 => 21,  83 => 17,  79 => 16,  72 => 12,  68 => 11,  61 => 7,  57 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/edit.html.twig");
    }
}
