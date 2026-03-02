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

/* backend/session/profile.html.twig */
class __TwigTemplate_c6baa04ab381b65768a5f5988a8061fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actions' => [$this, 'block_actions'],
            'subcontent' => [$this, 'block_subcontent'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1
($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("backend/layout-ajax.html.twig") : ("backend/layout.html.twig")), "backend/session/profile.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["page_section"] = "Clases";
        // line 6
        $context["active_tab"] = (( !array_key_exists("active_tab", $context)) ? ("tab_edit") : (($context["active_tab"] ?? null)));
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session");
        yield "\" class=\"btn btn-default btn-return-to\">
                        <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_section"] ?? null), "html", null, true);
        yield "
                </h3>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_title"] ?? null), "html", null, true);
        yield "</h2>

                        ";
        // line 29
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 38
        yield "                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                            <h3>";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "discipline", [], "any", false, false, false, 42), "html", null, true);
        yield "</h3>
                            <span class=\"label label-";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "status", [], "any", false, false, false, 43)), "html", null, true);
        yield "\">
                                ";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "status", [], "any", false, false, false, 44)), "html", null, true);
        yield "
                            </span>
                            <hr />

                            <ul class=\"list-unstyled user_data\">
                                <li>
                                    <strong>Fecha:</strong><br />";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "any", false, false, false, 50), "d/m/Y") . " ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 50), "H:i")), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <strong>Instructor:</strong><br />";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 53), "html", null, true);
        yield "
                                </li>
                                <li>
                                    <strong>Salón:</strong><br />";
        // line 56
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoom", [], "any", false, false, false, 56)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoom", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true)) : (yield ""));
        yield "
                                </li>
                                <li>
                                    <strong>Modalidad:</strong><br />";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "type", [], "any", false, false, false, 59)), "html", null, true);
        yield "
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                                <ul id=\"instructorTab\" class=\"nav nav-tabs nav-tabs-custom\" role=\"tablist\">
                                    <li role=\"presentation\" ";
        // line 66
        if (("tab_edit" == ($context["active_tab"] ?? null))) {
            yield "class=\"active\"";
        }
        yield ">
                                        <a href=\"";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 67)]), "html", null, true);
        yield "\">Editar</a>
                                    </li>
                                    ";
        // line 69
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_reservations")) {
            // line 70
            yield "                                        <li role=\"presentation\" ";
            if (("tab_reservations" == ($context["active_tab"] ?? null))) {
                yield "class=\"active\"";
            }
            yield ">
                                            <a href=\"";
            // line 71
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\">Reservaciones</a>
                                        </li>
                                    ";
        }
        // line 74
        yield "                                    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_waitinglist")) {
            // line 75
            yield "                                        ";
            if (Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "waitinglist", [], "any", false, false, false, 75))) {
                // line 76
                yield "                                            <li role=\"presentation\" ";
                if (("tab_waitinglist" == ($context["active_tab"] ?? null))) {
                    yield "class=\"active\"";
                }
                yield ">
                                                <a href=\"";
                // line 77
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_waitinglist", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\">Lista de espera</a>
                                            </li>
                                        ";
            }
            // line 80
            yield "                                    ";
        }
        // line 81
        yield "                                </ul>

                                <div id=\"instructorTabContent\" class=\"tab-content\">
                                    ";
        // line 84
        yield from $this->unwrap()->yieldBlock('subcontent', $context, $blocks);
        // line 85
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 94
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancel_form"] ?? null), 'form_start', ["attr" => ["id" => "frmCancel"]]);
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancel_form"] ?? null), 'form_end');
        yield "
";
        return; yield '';
    }

    // line 29
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "                            ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_cancel")) {
            // line 31
            yield "                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li>
                                        <a class=\"cancel-link\" title=\"Cancelar\"><i class=\"fa fa-ban\"></i></a>
                                    </li>
                                </ul>
                            ";
        }
        // line 37
        yield "                        ";
        return; yield '';
    }

    // line 84
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 104
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_cancel")) {
            // line 105
            yield "        <script>
            \$(function () {
                \$('.cancel-link').on('click', function () {
                    if (confirm('¿Confirmas que deseas cancelar la clase?')) {
                        \$('#frmCancel').submit();
                    }
                });
            });
        </script>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session/profile.html.twig";
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
        return array (  257 => 105,  255 => 104,  249 => 102,  245 => 101,  238 => 84,  233 => 37,  225 => 31,  222 => 30,  218 => 29,  211 => 98,  209 => 94,  198 => 85,  196 => 84,  191 => 81,  188 => 80,  182 => 77,  175 => 76,  172 => 75,  169 => 74,  163 => 71,  156 => 70,  154 => 69,  149 => 67,  143 => 66,  133 => 59,  127 => 56,  121 => 53,  115 => 50,  106 => 44,  102 => 43,  98 => 42,  92 => 38,  90 => 29,  85 => 27,  71 => 16,  65 => 13,  59 => 9,  55 => 8,  51 => 3,  49 => 6,  47 => 5,  40 => 1,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session/profile.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session/profile.html.twig");
    }
}
