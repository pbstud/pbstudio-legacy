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

/* backend/user/new.html.twig */
class __TwigTemplate_c13da6a63ce51cc9c4417331e5098c51 extends Template
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
        // line 1
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["page_section"] = "Usuarios";
        // line 4
        $context["page_title"] = "Nuevo Usuario";
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["backend/default/form/fields.html.twig"], false);
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/user/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
        // line 14
        yield "
        ";
        // line 15
        yield from         $this->loadTemplate("backend/user/new.html.twig", "backend/user/new.html.twig", 15, "1457305185")->unwrap()->yield(CoreExtension::toArray(["page_section" =>         // line 16
($context["page_section"] ?? null), "page_title" => "Información de acceso", "return_to" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user"), "form" =>         // line 19
($context["form"] ?? null)]));
        // line 148
        yield "    ";
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
        return "backend/user/new.html.twig";
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
        return array (  68 => 148,  66 => 19,  65 => 16,  64 => 15,  61 => 14,  58 => 9,  54 => 8,  49 => 1,  47 => 6,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/new.html.twig");
    }
}


/* backend/user/new.html.twig */
class __TwigTemplate_c13da6a63ce51cc9c4417331e5098c51___1457305185 extends Template
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
        // line 15
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/user/new.html.twig", 15);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        yield "                <div class=\"form-group\">
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Nombre:"]);
        // line 27
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 33
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 34), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Apellidos:"]);
        // line 43
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 49
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 50), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Correo:"]);
        // line 59
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 65
        yield "
                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 66), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Teléfono:"]);
        // line 75
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 81
        yield "
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 82), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 87), "first", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Contraseña:"]);
        // line 91
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 93), "first", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 97
        yield "
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 98), "first", [], "any", false, false, false, 98), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 103), "second", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Confirmar contraseña:"]);
        // line 107
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 109), "second", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 113
        yield "
                        ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 114), "second", [], "any", false, false, false, 114), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "branchOffice", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "control-label col-md-3 col-sm-3 col-xs-12"], "label" => "Sucursal:"]);
        // line 123
        yield "
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "branchOffice", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 129
        yield "
                        ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "branchOffice", [], "any", false, false, false, 130), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Registrar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/new.html.twig";
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
        return array (  269 => 130,  266 => 129,  264 => 125,  260 => 123,  258 => 119,  250 => 114,  247 => 113,  245 => 109,  241 => 107,  239 => 103,  231 => 98,  228 => 97,  226 => 93,  222 => 91,  220 => 87,  212 => 82,  209 => 81,  207 => 77,  203 => 75,  201 => 71,  193 => 66,  190 => 65,  188 => 61,  184 => 59,  182 => 55,  174 => 50,  171 => 49,  169 => 45,  165 => 43,  163 => 39,  155 => 34,  152 => 33,  150 => 29,  146 => 27,  144 => 23,  141 => 22,  137 => 21,  126 => 15,  68 => 148,  66 => 19,  65 => 16,  64 => 15,  61 => 14,  58 => 9,  54 => 8,  49 => 1,  47 => 6,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/new.html.twig");
    }
}
