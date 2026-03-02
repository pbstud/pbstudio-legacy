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

/* backend/session_day/index.html.twig */
class __TwigTemplate_5050cead8e3ceacf5650217ef76bee1e extends Template
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
        $context["page_section"] = "Clases x día";
        // line 4
        $context["page_title"] = "Listado de días";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/session_day/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        yield from         $this->loadTemplate("backend/session_day/index.html.twig", "backend/session_day/index.html.twig", 7, "1940718988")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session_day/index.html.twig";
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
        return array (  56 => 7,  52 => 6,  47 => 1,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session_day/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session_day/index.html.twig");
    }
}


/* backend/session_day/index.html.twig */
class __TwigTemplate_5050cead8e3ceacf5650217ef76bee1e___1940718988 extends Template
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
        return "backend/default/embed/list_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/list_common.html.twig", "backend/session_day/index.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "            ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_session_day_new")) {
            // line 10
            yield "                <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search\">
                    <div class=\"input-group\">
                        <a href=\"";
            // line 12
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_new_branch_office");
            yield "\" class=\"btn btn-default\">Programar día</a>
                    </div>
                </div>
            ";
        }
        // line 16
        yield "        ";
        return; yield '';
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["sessions"] ?? null)) > 0)) {
            // line 20
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Día</th>
                                <th class=\"text-center\">Sucursal</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 30
                yield "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_edit", ["editDate" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateStart", [], "any", false, false, false, 32), "d-m-Y"), "branchOfficeId" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "branchOfficeId", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                            <u>";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateStart", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true);
                yield "</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 38
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "branchOffice", [], "any", false, false, false, 38), "html", null, true);
                yield "
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 46
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
            ";
        }
        // line 48
        yield "        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session_day/index.html.twig";
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
        return array (  206 => 48,  200 => 46,  194 => 42,  184 => 38,  176 => 33,  172 => 32,  168 => 30,  164 => 29,  153 => 20,  150 => 19,  146 => 18,  141 => 16,  134 => 12,  130 => 10,  127 => 9,  123 => 8,  56 => 7,  52 => 6,  47 => 1,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session_day/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session_day/index.html.twig");
    }
}
