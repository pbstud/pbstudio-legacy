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
class __TwigTemplate_df9f885d0ea6f0a533556743a03bb441 extends Template
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "form-instructor"]]);
        yield "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"x_subtitle\">Información de acceso</h4>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 9), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 13), "first", [], "any", false, false, false, 13), 'row', ["row_attr" => ["class" => "col-md-6"]]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 14), "second", [], "any", false, false, false, 14), 'row', ["row_attr" => ["class" => "col-md-6"]]);
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
        return array (  83 => 28,  79 => 27,  72 => 23,  60 => 14,  56 => 13,  49 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/instructor/_form.html.twig", "/var/www/pbstudio/releases/81/templates/backend/instructor/_form.html.twig");
    }
}
