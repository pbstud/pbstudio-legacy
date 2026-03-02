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

/* backend/default/form/fields.html.twig */
class __TwigTemplate_4cacade149d051c4b66197e55f7c9814 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_row' => [$this, 'block_form_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/form/fields.html.twig"));

        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "backend/default/form/fields.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        yield "<div class=\"form-group ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "valid", [], "any", false, false, false, 4)) {
            yield "has-error";
        }
        yield "\">";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'label');
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'widget');
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        // line 8
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 12
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "<ul class=\"fa-ul\">";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                yield "<li>
                    <i class=\"fa fa-li fa-exclamation-circle\"></i>
                    <span class=\"text-warning\">";
                // line 17
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 17), "html", null, true);
                yield "</span>
                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "</ul>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 24
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 25
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"accordion_choice_expanded\">
        <div class=\"panel-group\" id=\"accordion\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 27, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["group"]) {
            // line 28
            if (is_iterable($context["group"])) {
                // line 29
                yield "<div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h2 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"collapsed\" href=\"#collapse";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 32), "html", null, true);
                yield "\">
                                    ";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 33, $this->source); })())), "html", null, true);
                yield "
                                </a>
                            </h2>
                        </div>
                        <div id=\"collapse";
                // line 37
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
                yield "\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <table class=\"table\">
                                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["group"]);
                foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                    // line 41
                    yield "                                        <tr>
                                            <td valign=\"middle\">";
                    // line 43
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), $context["key"], [], "array", false, false, false, 43), 'widget', ["attr" => ["class" => "flat"]]);
                    // line 48
                    yield "&nbsp;&nbsp;";
                    // line 49
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), $context["key"], [], "array", false, false, false, 49), 'label');
                    // line 50
                    yield "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "                                </table>
                            </div>
                        </div>
                    </div>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "        </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/form/fields.html.twig";
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
        return array (  232 => 59,  214 => 53,  206 => 50,  204 => 49,  202 => 48,  200 => 43,  197 => 41,  193 => 40,  187 => 37,  180 => 33,  176 => 32,  171 => 29,  169 => 28,  152 => 27,  146 => 25,  136 => 24,  124 => 20,  116 => 17,  112 => 15,  108 => 14,  106 => 13,  104 => 12,  94 => 11,  83 => 8,  81 => 7,  79 => 6,  77 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'form_div_layout.html.twig' %}

{%- block form_row -%}
    <div class=\"form-group {% if not form.vars.valid %}has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul class=\"fa-ul\">
            {%- for error in errors -%}
                <li>
                    <i class=\"fa fa-li fa-exclamation-circle\"></i>
                    <span class=\"text-warning\">{{ error.message }}</span>
                </li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }} class=\"accordion_choice_expanded\">
        <div class=\"panel-group\" id=\"accordion\">
            {% for group_label, group in choices %}
                {%- if group is iterable -%}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h2 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"collapsed\" href=\"#collapse{{ loop.index }}\">
                                    {{ group_label|trans({}, translation_domain) }}
                                </a>
                            </h2>
                        </div>
                        <div id=\"collapse{{ loop.index }}\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <table class=\"table\">
                                    {% for key, choice in group %}
                                        <tr>
                                            <td valign=\"middle\">
                                                {{- form_widget(form[key], {
                                                    'attr': {
                                                        'class': 'flat',
                                                    }
                                                }) -}}
                                                &nbsp;&nbsp;
                                                {{- form_label(form[key]) -}}
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </table>
                            </div>
                        </div>
                    </div>
                {%- endif -%}
            {% endfor %}
        </div>
    </div>
{%- endblock choice_widget_expanded -%}
", "backend/default/form/fields.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\form\\fields.html.twig");
    }
}
