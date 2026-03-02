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

/* contact/index.html.twig */
class __TwigTemplate_263d683b285518585e5a1de15029cb6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "contact/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Contáctanos | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), ["form_div_layout.html.twig"], false);
        // line 7
        yield "
    <section class=\"page\">
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"title\">
                    <h1>Contáctanos</h1>
                </div>
                <div class=\"clearfix contact\">
                    <div class=\"info_contact grid-1-6 left\">
                        <div class=\"clearfix\">
                            <span class=\"icon-email\"></span><p>contacto@pbstudio.mx</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-location\"></span><p>Infiniti Center Santa Fé, Av. Prolongación Paseo de la reforma 215, Paseo de las Lomas, Álvaro Obregón, México, CP 01330</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-phone\"></span><p>Tel: (55) 5292 0036</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-location\"></span><p>Av. Palmas Hills 1-2, Huixquilucan, Estado de México, México. CP 52763</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-phone\"></span><p>Tel: (55) 5087 8039</p>
                        </div>
                    </div>
                    <div class=\"grid-1-6 left\">
                        ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_flash.html.twig");
        yield "

                        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
        yield "
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), 'widget', ["attr" => ["placeholder" => "Nombre"]]);
        // line 40
        yield "
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "phone", [], "any", false, false, false, 41), 'widget', ["attr" => ["placeholder" => "Teléfono"]]);
        // line 45
        yield "
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Correo"]]);
        // line 50
        yield "
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "message", [], "any", false, false, false, 51), 'widget', ["attr" => ["placeholder" => "Mensaje"]]);
        // line 55
        yield "

                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "submit", [], "any", false, false, false, 57), 'widget', ["label" => "Enviar"]);
        // line 59
        yield "
                        ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.0459954668245!2d-99.26987428510839!3d19.367160986921522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200cff90579b1%3A0x9e1cf9e5d5e1edfe!2sP%26B%20Studio!5e0!3m2!1ses-419!2smx!4v1593362959511!5m2!1ses-419!2smx\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
            </div>
        </div>
    </section>
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
        return "contact/index.html.twig";
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
        return array (  156 => 60,  153 => 59,  151 => 57,  147 => 55,  145 => 51,  142 => 50,  140 => 46,  137 => 45,  135 => 41,  132 => 40,  130 => 36,  126 => 35,  121 => 33,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Contáctanos | {% endblock %}

{% block content %}
    {% form_theme form with ['form_div_layout.html.twig'] only %}

    <section class=\"page\">
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"title\">
                    <h1>Contáctanos</h1>
                </div>
                <div class=\"clearfix contact\">
                    <div class=\"info_contact grid-1-6 left\">
                        <div class=\"clearfix\">
                            <span class=\"icon-email\"></span><p>contacto@pbstudio.mx</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-location\"></span><p>Infiniti Center Santa Fé, Av. Prolongación Paseo de la reforma 215, Paseo de las Lomas, Álvaro Obregón, México, CP 01330</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-phone\"></span><p>Tel: (55) 5292 0036</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-location\"></span><p>Av. Palmas Hills 1-2, Huixquilucan, Estado de México, México. CP 52763</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-phone\"></span><p>Tel: (55) 5087 8039</p>
                        </div>
                    </div>
                    <div class=\"grid-1-6 left\">
                        {{ include('default/_flash.html.twig') }}

                        {{ form_start(form) }}
                            {{ form_widget(form.name, {
                                'attr': {
                                    'placeholder': 'Nombre',
                                }
                            }) }}
                            {{ form_widget(form.phone, {
                                'attr': {
                                    'placeholder': 'Teléfono',
                                }
                            }) }}
                            {{ form_widget(form.email, {
                                'attr': {
                                    'placeholder': 'Correo',
                                }
                            }) }}
                            {{ form_widget(form.message, {
                                'attr': {
                                    'placeholder': 'Mensaje',
                                }
                            }) }}

                            {{ form_widget(form.submit, {
                                'label': 'Enviar',
                            }) }}
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.0459954668245!2d-99.26987428510839!3d19.367160986921522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200cff90579b1%3A0x9e1cf9e5d5e1edfe!2sP%26B%20Studio!5e0!3m2!1ses-419!2smx!4v1593362959511!5m2!1ses-419!2smx\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
            </div>
        </div>
    </section>
{% endblock %}
", "contact/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\contact\\index.html.twig");
    }
}
