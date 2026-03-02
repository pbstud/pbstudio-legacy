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

/* backend/page/edit.html.twig */
class __TwigTemplate_79b06df36448fd7a8d68d0d6a112e00a extends Template
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
($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("backend/layout-ajax.html.twig") : ("backend/layout.html.twig")), "backend/page/edit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? null), ["backend/default/form/fields.html.twig"], false);
        // line 7
        $context["page_section"] = "Páginas";
        // line 8
        $context["page_title"] = "Editar Página";
        // line 9
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_page");
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        yield from         $this->loadTemplate("backend/page/edit.html.twig", "backend/page/edit.html.twig", 12, "1850698526")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
        return; yield '';
    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        \$(function () {
            \$('.delete-link').on('click', function () {
                if (confirm('¿Confirmas que deseas eliminar el registro?')) {
                    \$('#frmDelete').submit();
                }
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
        return "backend/page/edit.html.twig";
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
        return array (  71 => 97,  67 => 96,  61 => 12,  57 => 11,  53 => 3,  51 => 9,  49 => 8,  47 => 7,  45 => 5,  38 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/page/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/page/edit.html.twig");
    }
}


/* backend/page/edit.html.twig */
class __TwigTemplate_79b06df36448fd7a8d68d0d6a112e00a___1850698526 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/page/edit.html.twig", 12);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"delete-link\"><i class=\"fa fa-trash\"></i></a>
                </li>
            </ul>
        ";
        return; yield '';
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
        // line 27
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "title", [], "any", false, false, false, 28), 'row');
        yield "

                <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12 required\">Slug:</label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <a>";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, false, 33), "html", null, true);
        yield "</a>
                        <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "content", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Contenido:"]);
        // line 43
        yield "
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "content", [], "any", false, false, false, 45), 'widget', ["attr" => ["rows" => 25, "data-redactor" => "", "class" => "form-control col-md-7 col-xs-12"]]);
        // line 51
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "isActive", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Activo:"]);
        // line 60
        yield "
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        <div class=\"checkbox\">
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "isActive", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "js-switch"]]);
        // line 67
        yield "
                        </div>
                    </div>
                </div>

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
        // line 84
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        yield "

            ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start', ["attr" => ["id" => "frmDelete"]]);
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        yield "
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/page/edit.html.twig";
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
        return array (  241 => 90,  239 => 86,  234 => 84,  215 => 67,  213 => 63,  208 => 60,  206 => 56,  199 => 51,  197 => 45,  193 => 43,  191 => 39,  182 => 33,  174 => 28,  171 => 27,  168 => 22,  164 => 21,  151 => 13,  140 => 12,  71 => 97,  67 => 96,  61 => 12,  57 => 11,  53 => 3,  51 => 9,  49 => 8,  47 => 7,  45 => 5,  38 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/page/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/page/edit.html.twig");
    }
}
