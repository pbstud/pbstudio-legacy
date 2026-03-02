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
class __TwigTemplate_28123cda238b8ffbffe961e6ea4a1d88 extends Template
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
        yield "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
    <h4 class=\"modal-title\" id=\"myModalLabel2\">Cambiar contraseña</h4>
</div>
<div class=\"modal-body\">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "frmChangePassword"]]);
        // line 10
        yield "
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 14), "first", [], "any", false, false, false, 14), 'label', ["label" => "Contraseña:"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 19
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 24), "second", [], "any", false, false, false, 24), 'label', ["label" => "Confirmar contraseña:"]);
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 25), "second", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 29
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 30), "second", [], "any", false, false, false, 30), 'errors');
        yield "
                </div>
            </div>
        </div>
    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  85 => 34,  78 => 30,  75 => 29,  73 => 25,  69 => 24,  62 => 20,  59 => 19,  57 => 15,  53 => 14,  47 => 10,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/password.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/password.html.twig");
    }
}
