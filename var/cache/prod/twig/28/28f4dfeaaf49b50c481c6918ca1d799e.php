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

/* backend/instructor/edit.html.twig */
class __TwigTemplate_59f1543eedd33628113b29c43e2c9cf1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subcontent' => [$this, 'block_subcontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/instructor/profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["page_title"] = "Datos Generales";
        // line 1
        $this->parent = $this->loadTemplate("backend/instructor/profile.html.twig", "backend/instructor/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "form-instructor"]]);
        yield "
        ";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/instructor/_general_data_form.html.twig");
        yield "

        <div class=\"ln_solid\"></div>

        ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/_btn_save.html.twig", ["button_label" => "btn.update"]);
        yield "
    ";
        // line 12
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
        return "backend/instructor/edit.html.twig";
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
        return array (  70 => 12,  66 => 11,  59 => 7,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/instructor/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/instructor/edit.html.twig");
    }
}
