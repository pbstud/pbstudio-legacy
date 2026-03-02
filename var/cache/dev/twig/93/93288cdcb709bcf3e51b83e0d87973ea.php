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
class __TwigTemplate_dd6052825727a773fb0c4fb1f7ef6e0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/_form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["backend/default/form/fields.html.twig"], false);
        // line 2
        yield "
<div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "dateStart", [], "any", false, false, false, 7), 'label', ["label" => "Día:"]);
        yield "

                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "dateStart", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control datepicker has-feedback-right"]]);
        // line 13
        yield "
                <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                </span>
            </div>

            <div class=\"col-md-6 col-xs-12\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "timeStart", [], "any", false, false, false, 20), 'row', ["label" => "Hora:", "attr" => ["class" => "form-control"]]);
        // line 25
        yield "
            </div>
        </div>

        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "branchOffice", [], "any", false, false, false, 29), 'row', ["label" => "Sucursal:", "attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        // line 35
        yield "

        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "exerciseRoom", [], "any", false, false, false, 37), 'row', ["label" => "Salón:", "attr" => ["class" => "form-control"]]);
        // line 42
        yield "

        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "discipline", [], "any", false, false, false, 44), 'row', ["label" => "Disciplina:", "attr" => ["class" => "form-control", "readonly" => null]]);
        // line 50
        yield "

        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "instructor", [], "any", false, false, false, 52), 'row', ["label" => "Instructor:", "attr" => ["class" => "form-control"]]);
        // line 57
        yield "

        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "information", [], "any", false, false, false, 59), 'row', ["label" => "Información:", "attr" => ["class" => "form-control"]]);
        // line 64
        yield "

        ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "offsetExists", ["exerciseRoomCapacity"], "method", false, false, false, 66)) {
            // line 67
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "exerciseRoomCapacity", [], "any", false, false, false, 67), 'row', ["label" => "Capacidad:", "attr" => ["class" => "form-control"]]);
            // line 72
            yield "
        ";
        }
        // line 74
        yield "
        ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "offsetExists", ["placesNotAvailable"], "method", false, false, false, 75)) {
            // line 76
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "placesNotAvailable", [], "any", false, false, false, 76), 'row', ["label" => "Lugares no Disponibles:", "attr" => ["class" => "form-control", "data-tag-number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 80
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "exerciseRoomCapacity", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]]);
            // line 82
            yield "
        ";
        }
        // line 84
        yield "    </div>
</div>
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
        return array (  129 => 84,  125 => 82,  123 => 80,  121 => 76,  119 => 75,  116 => 74,  112 => 72,  109 => 67,  107 => 66,  103 => 64,  101 => 59,  97 => 57,  95 => 52,  91 => 50,  89 => 44,  85 => 42,  83 => 37,  79 => 35,  77 => 29,  71 => 25,  69 => 20,  60 => 13,  58 => 9,  53 => 7,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form with ['backend/default/form/fields.html.twig'] only %}

<div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <div class=\"col-md-6 col-xs-12 form-group has-feedback\">
                {{ form_label(form.dateStart, 'Día:') }}

                {{ form_widget(form.dateStart, {
                    'attr': {
                        'class': 'form-control datepicker has-feedback-right',
                    }
                }) }}
                <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                </span>
            </div>

            <div class=\"col-md-6 col-xs-12\">
                {{ form_row(form.timeStart, {
                    'label': 'Hora:',
                    'attr': {
                        'class': 'form-control',
                    }
                }) }}
            </div>
        </div>

        {{ form_row(form.branchOffice, {
            'label': 'Sucursal:',
            'attr': {
                'class': 'form-control',
                'autocomplete': 'off'
            }
        }) }}

        {{ form_row(form.exerciseRoom, {
            'label': 'Salón:',
            'attr': {
                'class': 'form-control',
            }
        }) }}

        {{ form_row(form.discipline, {
            'label': 'Disciplina:',
            'attr': {
                'class': 'form-control',
                'readonly': null,
            }
        }) }}

        {{ form_row(form.instructor, {
            'label': 'Instructor:',
            'attr': {
                'class': 'form-control',
            }
        }) }}

        {{ form_row(form.information, {
            'label': 'Información:',
            'attr': {
                'class': 'form-control',
            }
        }) }}

        {% if form.offsetExists('exerciseRoomCapacity') %}
            {{ form_row(form.exerciseRoomCapacity, {
                'label': 'Capacidad:',
                'attr': {
                    'class': 'form-control',
                }
            }) }}
        {% endif %}

        {% if form.offsetExists('placesNotAvailable') %}
            {{ form_row(form.placesNotAvailable, {
                'label': 'Lugares no Disponibles:',
                'attr': {
                    'class': 'form-control',
                    'data-tag-number': form.exerciseRoomCapacity.vars.id,
                }
            }) }}
        {% endif %}
    </div>
</div>
", "backend/session/_form.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session\\_form.html.twig");
    }
}
