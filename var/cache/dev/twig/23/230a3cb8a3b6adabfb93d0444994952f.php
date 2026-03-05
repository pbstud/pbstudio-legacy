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

/* backend/session/new.html.twig */
class __TwigTemplate_a9b46dde836f9855f858d3b32fa133da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("backend/layout-ajax.html.twig") : ("backend/layout.html.twig")), "backend/session/new.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/new.html.twig"));

        // line 5
        $context["page_section"] = "Clases";
        // line 6
        $context["page_title"] = "Nueva Clase";
        // line 7
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session");
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        yield "    ";
        yield from         $this->loadTemplate("backend/session/new.html.twig", "backend/session/new.html.twig", 10, "582098481")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 10, $this->source); })()), "page_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 10, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
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
        return "backend/session/new.html.twig";
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
        return array (  99 => 39,  89 => 38,  77 => 10,  67 => 9,  57 => 3,  55 => 7,  53 => 6,  51 => 5,  38 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.request.xmlHttpRequest
    ? 'backend/layout-ajax.html.twig'
    : 'backend/layout.html.twig' %}

{% set page_section = 'Clases' %}
{% set page_title = 'Nueva Clase' %}
{% set return_to = path('backend_session') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            {{ form_start(form, {
                'attr': {
                    'class': 'form-horizontal form-label-left',
                    'id': 'frm-session',
                    'data-parsley-validate': '',
                }
            }) }}
                {% include 'backend/session/_form.html.twig' with { 'form': form } only %}

                <div class=\"ln_solid\"></div>

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
            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
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
", "backend/session/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session\\new.html.twig");
    }
}


/* backend/session/new.html.twig */
class __TwigTemplate_a9b46dde836f9855f858d3b32fa133da___582098481 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/session/new.html.twig", 10);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "id" => "frm-session", "data-parsley-validate" => ""]]);
        // line 18
        yield "
                ";
        // line 19
        yield from         $this->loadTemplate("backend/session/_form.html.twig", "backend/session/new.html.twig", 19)->unwrap()->yield(CoreExtension::toArray(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })())]));
        // line 20
        yield "
                <div class=\"ln_solid\"></div>

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
            ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        yield "
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
        return "backend/session/new.html.twig";
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
        return array (  365 => 33,  350 => 20,  348 => 19,  345 => 18,  342 => 12,  332 => 11,  309 => 10,  99 => 39,  89 => 38,  77 => 10,  67 => 9,  57 => 3,  55 => 7,  53 => 6,  51 => 5,  38 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.request.xmlHttpRequest
    ? 'backend/layout-ajax.html.twig'
    : 'backend/layout.html.twig' %}

{% set page_section = 'Clases' %}
{% set page_title = 'Nueva Clase' %}
{% set return_to = path('backend_session') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            {{ form_start(form, {
                'attr': {
                    'class': 'form-horizontal form-label-left',
                    'id': 'frm-session',
                    'data-parsley-validate': '',
                }
            }) }}
                {% include 'backend/session/_form.html.twig' with { 'form': form } only %}

                <div class=\"ln_solid\"></div>

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
            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
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
", "backend/session/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session\\new.html.twig");
    }
}
