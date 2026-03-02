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
class __TwigTemplate_cf36c452653ad956d02af19ce1f65efc extends Template
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
($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("backend/layout-ajax.html.twig") : ("backend/layout.html.twig")), "backend/session/new.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["page_section"] = "Clases";
        // line 6
        $context["page_title"] = "Nueva Clase";
        // line 7
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session");
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        yield from         $this->loadTemplate("backend/session/new.html.twig", "backend/session/new.html.twig", 10, "918427730")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
        return; yield '';
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  69 => 39,  65 => 38,  59 => 10,  55 => 9,  51 => 3,  49 => 7,  47 => 6,  45 => 5,  38 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session/new.html.twig");
    }
}


/* backend/session/new.html.twig */
class __TwigTemplate_cf36c452653ad956d02af19ce1f65efc___918427730 extends Template
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
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/session/new.html.twig", 10);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "id" => "frm-session", "data-parsley-validate" => ""]]);
        // line 18
        yield "
                ";
        // line 19
        yield from         $this->loadTemplate("backend/session/_form.html.twig", "backend/session/new.html.twig", 19)->unwrap()->yield(CoreExtension::toArray(["form" => ($context["form"] ?? null)]));
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
        return array (  218 => 33,  203 => 20,  201 => 19,  198 => 18,  195 => 12,  191 => 11,  180 => 10,  69 => 39,  65 => 38,  59 => 10,  55 => 9,  51 => 3,  49 => 7,  47 => 6,  45 => 5,  38 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session/new.html.twig");
    }
}
