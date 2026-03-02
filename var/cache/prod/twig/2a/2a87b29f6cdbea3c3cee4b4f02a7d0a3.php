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

/* backend/staff/edit.html.twig */
class __TwigTemplate_a138520ba553ae0557608d719991fe92 extends Template
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
        // line 1
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["page_section"] = "Staff";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? null), ["backend/default/form/fields.html.twig"], false);
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/staff/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal form-label-left", "data-parsley-validate" => ""]]);
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
            <div class=\"title_right\">
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-default\">Acciones</button>
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_staff_password", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\" data-toggle=\"modal\" data-target=\"#changePasswordModal\">
                                <i class=\"fa fa-lock\"></i>
                                Cambiar contraseña
                            </a>
                        </li>
                        <li>
                            <a class=\"delete-link\">
                                <i class=\"fa fa-trash\"></i>
                                Eliminar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-xs-12\">
                ";
        // line 50
        yield from         $this->loadTemplate("backend/staff/edit.html.twig", "backend/staff/edit.html.twig", 50, "633969806")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Información", "staff" =>         // line 52
($context["staff"] ?? null), "edit_form" =>         // line 53
($context["edit_form"] ?? null)]));
        // line 98
        yield "
                ";
        // line 99
        yield from         $this->loadTemplate("backend/staff/edit.html.twig", "backend/staff/edit.html.twig", 99, "1121138930")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Sucursales", "edit_form" =>         // line 101
($context["edit_form"] ?? null)]));
        // line 112
        yield "            </div>

            <div class=\"col-md-4 col-xs-12\">
                ";
        // line 115
        yield from         $this->loadTemplate("backend/staff/edit.html.twig", "backend/staff/edit.html.twig", 115, "1756651596")->unwrap()->yield(CoreExtension::toArray(["page_title" => "Permisos", "edit_form" =>         // line 117
($context["edit_form"] ?? null)]));
        // line 125
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
        // line 140
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        yield "

    ";
        // line 142
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start', ["attr" => ["id" => "frmDelete"]]);
        // line 146
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        yield "

    <div id=\"changePasswordModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
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

        \$('#changePasswordModal').on('hidden.bs.modal', function () {
            \$(this).removeData('bs.modal');
            \$(this).find('.modal-content').empty();
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
        return "backend/staff/edit.html.twig";
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
        return array (  168 => 157,  164 => 156,  150 => 146,  148 => 142,  143 => 140,  126 => 125,  124 => 117,  123 => 115,  118 => 112,  116 => 101,  115 => 99,  112 => 98,  110 => 53,  109 => 52,  108 => 50,  87 => 32,  72 => 20,  66 => 17,  60 => 13,  57 => 8,  53 => 7,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/edit.html.twig");
    }
}


/* backend/staff/edit.html.twig */
class __TwigTemplate_a138520ba553ae0557608d719991fe92___633969806 extends Template
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
        // line 50
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/edit.html.twig", 50);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        yield "                        <div class=\"row\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-5 col-sm-5 col-xs-12\">Usuario:</label>
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    <input type=\"text\" value=\"";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["staff"] ?? null), "username", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"form-control\" readonly />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "roles", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Rol:"]);
        // line 69
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "roles", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 75
        yield "
                                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "roles", [], "any", false, false, false, 76), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "isActive", [], "any", false, false, false, 81), 'label', ["label_attr" => ["class" => "control-label col-md-5 col-sm-5 col-xs-12"], "label" => "Activo:"]);
        // line 85
        yield "
                                <div class=\"col-md-7 col-sm-7 col-xs-12\">
                                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "isActive", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "js-switch"]]);
        // line 91
        yield "
                                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "isActive", [], "any", false, false, false, 92), 'errors');
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
        return "backend/staff/edit.html.twig";
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
        return array (  300 => 92,  297 => 91,  295 => 87,  291 => 85,  289 => 81,  281 => 76,  278 => 75,  276 => 71,  272 => 69,  270 => 65,  262 => 60,  256 => 56,  252 => 55,  241 => 50,  168 => 157,  164 => 156,  150 => 146,  148 => 142,  143 => 140,  126 => 125,  124 => 117,  123 => 115,  118 => 112,  116 => 101,  115 => 99,  112 => 98,  110 => 53,  109 => 52,  108 => 50,  87 => 32,  72 => 20,  66 => 17,  60 => 13,  57 => 8,  53 => 7,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/edit.html.twig");
    }
}


/* backend/staff/edit.html.twig */
class __TwigTemplate_a138520ba553ae0557608d719991fe92___1121138930 extends Template
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
        // line 99
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/edit.html.twig", 99);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "branchOffices", [], "any", false, false, false, 104), "children", [], "any", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 105
            yield "                            <div class=\"checkbox list-icheck\">
                                ";
            // line 106
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "flat"]]);
            yield "
                                ";
            // line 107
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
        return "backend/staff/edit.html.twig";
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
        return array (  386 => 107,  382 => 106,  379 => 105,  375 => 104,  371 => 103,  360 => 99,  300 => 92,  297 => 91,  295 => 87,  291 => 85,  289 => 81,  281 => 76,  278 => 75,  276 => 71,  272 => 69,  270 => 65,  262 => 60,  256 => 56,  252 => 55,  241 => 50,  168 => 157,  164 => 156,  150 => 146,  148 => 142,  143 => 140,  126 => 125,  124 => 117,  123 => 115,  118 => 112,  116 => 101,  115 => 99,  112 => 98,  110 => 53,  109 => 52,  108 => 50,  87 => 32,  72 => 20,  66 => 17,  60 => 13,  57 => 8,  53 => 7,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/edit.html.twig");
    }
}


/* backend/staff/edit.html.twig */
class __TwigTemplate_a138520ba553ae0557608d719991fe92___1756651596 extends Template
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
        // line 115
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/staff/edit.html.twig", 115);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["edit_form"] ?? null), "permissions", [], "any", false, false, false, 120), 'row', ["label" => false]);
        // line 122
        yield "
                    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/staff/edit.html.twig";
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
        return array (  466 => 122,  463 => 120,  459 => 119,  448 => 115,  386 => 107,  382 => 106,  379 => 105,  375 => 104,  371 => 103,  360 => 99,  300 => 92,  297 => 91,  295 => 87,  291 => 85,  289 => 81,  281 => 76,  278 => 75,  276 => 71,  272 => 69,  270 => 65,  262 => 60,  256 => 56,  252 => 55,  241 => 50,  168 => 157,  164 => 156,  150 => 146,  148 => 142,  143 => 140,  126 => 125,  124 => 117,  123 => 115,  118 => 112,  116 => 101,  115 => 99,  112 => 98,  110 => 53,  109 => 52,  108 => 50,  87 => 32,  72 => 20,  66 => 17,  60 => 13,  57 => 8,  53 => 7,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/edit.html.twig");
    }
}
