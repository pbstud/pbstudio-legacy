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

/* backend/page/new.html.twig */
class __TwigTemplate_3416cc2795bed308e710b5e0d399d002 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1
($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("backend/layout-ajax.html.twig") : ("backend/layout.html.twig")), "backend/page/new.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["backend/default/form/fields.html.twig"], false);
        // line 7
        $context["page_section"] = "Páginas";
        // line 8
        $context["page_title"] = "Nueva Página";
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
        yield from         $this->loadTemplate("backend/page/new.html.twig", "backend/page/new.html.twig", 12, "2009108023")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/page/new.html.twig";
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
        return array (  60 => 12,  56 => 11,  52 => 3,  50 => 9,  48 => 8,  46 => 7,  44 => 5,  37 => 1,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/page/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/page/new.html.twig");
    }
}


/* backend/page/new.html.twig */
class __TwigTemplate_3416cc2795bed308e710b5e0d399d002___2009108023 extends Template
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
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/page/new.html.twig", 12);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
        // line 19
        yield "
                <div class=\"form-group\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Titulo:"]);
        // line 25
        yield "
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control col-md-7 col-xs-12"]]);
        // line 31
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Contenido:"]);
        // line 40
        yield "
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 42), 'widget', ["attr" => ["rows" => 25, "data-redactor" => "", "class" => "form-control col-md-7 col-xs-12"]]);
        // line 48
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Activo:"]);
        // line 57
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"checkbox\">
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "js-switch"]]);
        // line 64
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
        // line 81
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
        return "backend/page/new.html.twig";
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
        return array (  195 => 81,  176 => 64,  174 => 60,  169 => 57,  167 => 53,  160 => 48,  158 => 42,  154 => 40,  152 => 36,  145 => 31,  143 => 27,  139 => 25,  137 => 21,  133 => 19,  130 => 14,  126 => 13,  60 => 12,  56 => 11,  52 => 3,  50 => 9,  48 => 8,  46 => 7,  44 => 5,  37 => 1,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/page/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/page/new.html.twig");
    }
}
