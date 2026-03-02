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

/* backend/session/edit.html.twig */
class __TwigTemplate_d581560638e57a508141b67b09671a41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subcontent' => [$this, 'block_subcontent'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/session/profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/edit.html.twig"));

        // line 3
        $context["page_title"] = "Editar Clase";
        // line 1
        $this->parent = $this->loadTemplate("backend/session/profile.html.twig", "backend/session/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        // line 6
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "id" => "frm-session", "data-parsley-validate" => ""]]);
        // line 12
        yield "
        ";
        // line 13
        yield from         $this->loadTemplate("backend/session/_form.html.twig", "backend/session/edit.html.twig", 13)->unwrap()->yield(CoreExtension::toArray(["form" => (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 13, $this->source); })())]));
        // line 14
        yield "
        <div class=\"ln_solid\"></div>

        ";
        // line 17
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 17, $this->source); })()), "status", [], "any", false, false, false, 17), [Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_OPEN"), Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_FULL")])) {
            // line 18
            yield "            <div class=\"form-group\">
                <div class=\"col-xs-12\">
                    <div class=\"pull-right\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            Guardar
                        </button>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        ";
        }
        // line 29
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 29, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
      \$(function () {
        var \$branchOffice = \$('#session_branchOffice');
        \$branchOffice.change(function() {
          var \$form = \$(this).closest('form');
          var data = {};
          data[\$branchOffice.attr('name')] = \$branchOffice.val();
          \$.ajax({
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
              \$('#session_exerciseRoom').replaceWith(
                \$(html).find('#session_exerciseRoom')
              );

              \$('#session_discipline').replaceWith(
                \$(html).find('#session_discipline')
              );

              \$('#session_instructor').replaceWith(
                \$(html).find('#session_instructor')
              );
            }
          });
        });

        var \$form = \$('#frm-session');
        \$form.on('change', '#session_exerciseRoom', function () {
          var \$exerciseRoom = \$(this);
          var data = {};

          data[\$branchOffice.attr('name')] = \$branchOffice.val();
          data[\$exerciseRoom.attr('name')] = \$exerciseRoom.val();

          \$.ajax({
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
              \$('#session_discipline').replaceWith(
                \$(html).find('#session_discipline')
              );

              \$('#session_instructor').replaceWith(
                \$(html).find('#session_instructor')
              );
            }
          });
        });
      });
    </script>
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
        return "backend/session/edit.html.twig";
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
        return array (  125 => 33,  115 => 32,  101 => 29,  88 => 18,  86 => 17,  81 => 14,  79 => 13,  76 => 12,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/session/profile.html.twig' %}

{% set page_title = 'Editar Clase' %}

{% block subcontent %}
    {{ form_start(edit_form, {
        'attr': {
            'class': 'form-horizontal form-label-left',
            'id': 'frm-session',
            'data-parsley-validate': '',
        }
    }) }}
        {% include 'backend/session/_form.html.twig' with { 'form': edit_form } only %}

        <div class=\"ln_solid\"></div>

        {% if session.status in [ constant('App\\\\Entity\\\\Session::STATUS_OPEN'), constant('App\\\\Entity\\\\Session::STATUS_FULL') ] %}
            <div class=\"form-group\">
                <div class=\"col-xs-12\">
                    <div class=\"pull-right\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            Guardar
                        </button>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        {% endif %}
    {{ form_end(edit_form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
      \$(function () {
        var \$branchOffice = \$('#session_branchOffice');
        \$branchOffice.change(function() {
          var \$form = \$(this).closest('form');
          var data = {};
          data[\$branchOffice.attr('name')] = \$branchOffice.val();
          \$.ajax({
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
              \$('#session_exerciseRoom').replaceWith(
                \$(html).find('#session_exerciseRoom')
              );

              \$('#session_discipline').replaceWith(
                \$(html).find('#session_discipline')
              );

              \$('#session_instructor').replaceWith(
                \$(html).find('#session_instructor')
              );
            }
          });
        });

        var \$form = \$('#frm-session');
        \$form.on('change', '#session_exerciseRoom', function () {
          var \$exerciseRoom = \$(this);
          var data = {};

          data[\$branchOffice.attr('name')] = \$branchOffice.val();
          data[\$exerciseRoom.attr('name')] = \$exerciseRoom.val();

          \$.ajax({
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
              \$('#session_discipline').replaceWith(
                \$(html).find('#session_discipline')
              );

              \$('#session_instructor').replaceWith(
                \$(html).find('#session_instructor')
              );
            }
          });
        });
      });
    </script>
{% endblock %}
", "backend/session/edit.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session\\edit.html.twig");
    }
}
