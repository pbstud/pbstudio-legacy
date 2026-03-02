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

/* backend/session/_form.html.twig */
class __TwigTemplate_de915d5cb568ca5c07f400debf098b8b extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["backend/default/form/fields.html.twig"], false);
        // line 2
        yield "
<div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateStart", [], "any", false, false, false, 7), 'label', ["label" => "Día:"]);
        yield "

                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateStart", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control datepicker has-feedback-right"]]);
        // line 13
        yield "
                <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                </span>
            </div>

            <div class=\"col-md-6 col-xs-12\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "timeStart", [], "any", false, false, false, 20), 'row', ["label" => "Hora:", "attr" => ["class" => "form-control"]]);
        // line 25
        yield "
            </div>
        </div>

        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "branchOffice", [], "any", false, false, false, 29), 'row', ["label" => "Sucursal:", "attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        // line 35
        yield "

        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "exerciseRoom", [], "any", false, false, false, 37), 'row', ["label" => "Salón:", "attr" => ["class" => "form-control"]]);
        // line 42
        yield "

        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "discipline", [], "any", false, false, false, 44), 'row', ["label" => "Disciplina:", "attr" => ["class" => "form-control", "readonly" => null]]);
        // line 50
        yield "

        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "instructor", [], "any", false, false, false, 52), 'row', ["label" => "Instructor:", "attr" => ["class" => "form-control"]]);
        // line 57
        yield "

        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "information", [], "any", false, false, false, 59), 'row', ["label" => "Información:", "attr" => ["class" => "form-control"]]);
        // line 64
        yield "

        ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["exerciseRoomCapacity"], "method", false, false, false, 66)) {
            // line 67
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "exerciseRoomCapacity", [], "any", false, false, false, 67), 'row', ["label" => "Capacidad:", "attr" => ["class" => "form-control"]]);
            // line 72
            yield "
        ";
        }
        // line 74
        yield "
        ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["placesNotAvailable"], "method", false, false, false, 75)) {
            // line 76
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "placesNotAvailable", [], "any", false, false, false, 76), 'row', ["label" => "Lugares no Disponibles:", "attr" => ["class" => "form-control", "data-tag-number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 80
($context["form"] ?? null), "exerciseRoomCapacity", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]]);
            // line 82
            yield "
        ";
        }
        // line 84
        yield "    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session/_form.html.twig";
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
        return array (  123 => 84,  119 => 82,  117 => 80,  115 => 76,  113 => 75,  110 => 74,  106 => 72,  103 => 67,  101 => 66,  97 => 64,  95 => 59,  91 => 57,  89 => 52,  85 => 50,  83 => 44,  79 => 42,  77 => 37,  73 => 35,  71 => 29,  65 => 25,  63 => 20,  54 => 13,  52 => 9,  47 => 7,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session/_form.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session/_form.html.twig");
    }
}
