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

/* backend/staff/password.html.twig */
class __TwigTemplate_db8b44069f6f73faf5fe69da7412e72f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/staff/password.html.twig"));

        // line 1
        yield "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
    <h4 class=\"modal-title\" id=\"myModalLabel2\">Cambiar contraseña</h4>
</div>
<div class=\"modal-body\">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["id" => "frmChangePassword"]]);
        // line 10
        yield "
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "password", [], "any", false, false, false, 14), "first", [], "any", false, false, false, 14), 'label', ["label" => "Contraseña:"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "password", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 19
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), "second", [], "any", false, false, false, 24), 'label', ["label" => "Confirmar contraseña:"]);
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "password", [], "any", false, false, false, 25), "second", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 29
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "password", [], "any", false, false, false, 30), "second", [], "any", false, false, false, 30), 'errors');
        yield "
                </div>
            </div>
        </div>
    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        yield "
</div>

<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-warning btn-submit\" data-loading-text=\"Actualizando ...\">Actualizar</button>
</div>

<script type=\"text/javascript\">
    \$('#changePasswordModal .btn-submit').on('click', function () {
        var form = \$('#frmChangePassword');
        var btn = \$(this).button('loading');

        \$.ajax({
            url: form.prop('action'),
            type: 'post',
            data: form.serialize(),
            success: function(response, textStatus, jqXHR) {
                if ('application/json' == jqXHR.getResponseHeader('Content-Type')) {
                    \$.flash.success('¡La contraseña ha sido actualizada!');

                    \$('#changePasswordModal').modal('hide');
                } else {
                    \$('#changePasswordModal .modal-content').html(response);
                }
            }
        });

        return false;
    });
</script>
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
        return "backend/staff/password.html.twig";
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
        return array (  91 => 34,  84 => 30,  81 => 29,  79 => 25,  75 => 24,  68 => 20,  65 => 19,  63 => 15,  59 => 14,  53 => 10,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
    <h4 class=\"modal-title\" id=\"myModalLabel2\">Cambiar contraseña</h4>
</div>
<div class=\"modal-body\">
    {{ form_start(form, {
        'attr': {
            'id': 'frmChangePassword',
        }
    }) }}
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    {{ form_label(form.password.first, 'Contraseña:') }}
                    {{ form_widget(form.password.first, {
                        'attr': {
                            'class': 'form-control',
                        }
                    }) }}
                    {{ form_errors(form.password.first) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.password.second, 'Confirmar contraseña:') }}
                    {{ form_widget(form.password.second, {
                        'attr': {
                            'class': 'form-control',
                        }
                    }) }}
                    {{ form_errors(form.password.second) }}
                </div>
            </div>
        </div>
    {{ form_end(form) }}
</div>

<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-warning btn-submit\" data-loading-text=\"Actualizando ...\">Actualizar</button>
</div>

<script type=\"text/javascript\">
    \$('#changePasswordModal .btn-submit').on('click', function () {
        var form = \$('#frmChangePassword');
        var btn = \$(this).button('loading');

        \$.ajax({
            url: form.prop('action'),
            type: 'post',
            data: form.serialize(),
            success: function(response, textStatus, jqXHR) {
                if ('application/json' == jqXHR.getResponseHeader('Content-Type')) {
                    \$.flash.success('¡La contraseña ha sido actualizada!');

                    \$('#changePasswordModal').modal('hide');
                } else {
                    \$('#changePasswordModal .modal-content').html(response);
                }
            }
        });

        return false;
    });
</script>
", "backend/staff/password.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\staff\\password.html.twig");
    }
}
