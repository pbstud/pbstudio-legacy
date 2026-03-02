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

/* backend/staff/new.html.twig */
class __TwigTemplate_527553e1ab3f8a4c80522ff3374e9f72 extends Template
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
        $context["page_section"] = "Staff";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["backend/default/form/fields.html.twig"], false);
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/staff/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
        // line 13
        yield "
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_staff");
        yield "\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_section"] ?? null), "html", null, true);
        yield "
                </h3>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                ";
        // line 27
        yield from         $this->loadTemplate("backend/staff/new.html.twig", "backend/staff/new.html.twig", 27, "1049674561")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Información", "form" =>         // line 29
($context["form"] ?? null)]));
        // line 99
        yield "
                ";
        // line 100
        yield from         $this->loadTemplate("backend/staff/new.html.twig", "backend/staff/new.html.twig", 100, "1442961632")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Sucursales", "form" =>         // line 102
($context["form"] ?? null)]));
        // line 113
        yield "            </div>

            <div class=\"col-md-4 col-xs-12\">
                ";
        // line 116
        yield from         $this->loadTemplate("backend/staff/new.html.twig", "backend/staff/new.html.twig", 116, "1057735956")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Permisos", "form" =>         // line 118
($context["form"] ?? null)]));
        // line 126
        yield "            </div>
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
        // line 141
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
        return "backend/staff/new.html.twig";
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
        return array (  115 => 141,  98 => 126,  96 => 118,  95 => 116,  90 => 113,  88 => 102,  87 => 100,  84 => 99,  82 => 29,  81 => 27,  71 => 20,  65 => 17,  59 => 13,  56 => 8,  52 => 7,  47 => 1,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/new.html.twig");
    }
}


/* backend/staff/new.html.twig */
class __TwigTemplate_527553e1ab3f8a4c80522ff3374e9f72___1049674561 extends Template
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
        // line 27
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/new.html.twig", 27);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "                        <div class=\"row\">
                            <div class=\"form-group\">
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Usuario:"]);
        // line 38
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 44
        yield "
                                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 45), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Contraseña:"]);
        // line 54
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 60
        yield "
                                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 61), "first", [], "any", false, false, false, 61), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 66), "second", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Repetir contraseña:"]);
        // line 70
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 72), "second", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 76
        yield "
                                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 77), "second", [], "any", false, false, false, 77), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Rol:"]);
        // line 86
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 92
        yield "
                                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 93), 'errors');
        yield "
                                </div>
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
        return "backend/staff/new.html.twig";
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
        return array (  259 => 93,  256 => 92,  254 => 88,  250 => 86,  248 => 82,  240 => 77,  237 => 76,  235 => 72,  231 => 70,  229 => 66,  221 => 61,  218 => 60,  216 => 56,  212 => 54,  210 => 50,  202 => 45,  199 => 44,  197 => 40,  193 => 38,  191 => 34,  187 => 32,  183 => 31,  172 => 27,  115 => 141,  98 => 126,  96 => 118,  95 => 116,  90 => 113,  88 => 102,  87 => 100,  84 => 99,  82 => 29,  81 => 27,  71 => 20,  65 => 17,  59 => 13,  56 => 8,  52 => 7,  47 => 1,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/new.html.twig");
    }
}


/* backend/staff/new.html.twig */
class __TwigTemplate_527553e1ab3f8a4c80522ff3374e9f72___1442961632 extends Template
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
        // line 100
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/new.html.twig", 100);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "branchOffices", [], "any", false, false, false, 105), "children", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 106
            yield "                            <div class=\"checkbox list-icheck\">
                                ";
            // line 107
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "flat"]]);
            yield "
                                ";
            // line 108
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            yield "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/staff/new.html.twig";
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
        return array (  345 => 108,  341 => 107,  338 => 106,  334 => 105,  330 => 104,  319 => 100,  259 => 93,  256 => 92,  254 => 88,  250 => 86,  248 => 82,  240 => 77,  237 => 76,  235 => 72,  231 => 70,  229 => 66,  221 => 61,  218 => 60,  216 => 56,  212 => 54,  210 => 50,  202 => 45,  199 => 44,  197 => 40,  193 => 38,  191 => 34,  187 => 32,  183 => 31,  172 => 27,  115 => 141,  98 => 126,  96 => 118,  95 => 116,  90 => 113,  88 => 102,  87 => 100,  84 => 99,  82 => 29,  81 => 27,  71 => 20,  65 => 17,  59 => 13,  56 => 8,  52 => 7,  47 => 1,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/new.html.twig");
    }
}


/* backend/staff/new.html.twig */
class __TwigTemplate_527553e1ab3f8a4c80522ff3374e9f72___1057735956 extends Template
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
        // line 116
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/new.html.twig", 116);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 120
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "permissions", [], "any", false, false, false, 121), 'row', ["label" => false]);
        // line 123
        yield "
                    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/staff/new.html.twig";
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
        return array (  425 => 123,  422 => 121,  418 => 120,  407 => 116,  345 => 108,  341 => 107,  338 => 106,  334 => 105,  330 => 104,  319 => 100,  259 => 93,  256 => 92,  254 => 88,  250 => 86,  248 => 82,  240 => 77,  237 => 76,  235 => 72,  231 => 70,  229 => 66,  221 => 61,  218 => 60,  216 => 56,  212 => 54,  210 => 50,  202 => 45,  199 => 44,  197 => 40,  193 => 38,  191 => 34,  187 => 32,  183 => 31,  172 => 27,  115 => 141,  98 => 126,  96 => 118,  95 => 116,  90 => 113,  88 => 102,  87 => 100,  84 => 99,  82 => 29,  81 => 27,  71 => 20,  65 => 17,  59 => 13,  56 => 8,  52 => 7,  47 => 1,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/new.html.twig");
    }
}
