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
class __TwigTemplate_4a4ae3ad92beb26247bc2a0724cdfb73 extends Template
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
        // line 3
        $context["page_title"] = "Editar Clase";
        // line 1
        $this->parent = $this->loadTemplate("backend/session/profile.html.twig", "backend/session/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "id" => "frm-session", "data-parsley-validate" => ""]]);
        // line 12
        yield "
        ";
        // line 13
        yield from         $this->loadTemplate("backend/session/_form.html.twig", "backend/session/edit.html.twig", 13)->unwrap()->yield(CoreExtension::toArray(["form" => ($context["edit_form"] ?? null)]));
        // line 14
        yield "
        <div class=\"ln_solid\"></div>

        ";
        // line 17
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "status", [], "any", false, false, false, 17), [Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_OPEN"), Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_FULL")])) {
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        yield "
";
        return; yield '';
    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  95 => 33,  91 => 32,  83 => 29,  70 => 18,  68 => 17,  63 => 14,  61 => 13,  58 => 12,  55 => 6,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session/edit.html.twig");
    }
}
