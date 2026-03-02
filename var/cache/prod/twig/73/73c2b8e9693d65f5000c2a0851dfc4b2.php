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

/* backend/staff/index.html.twig */
class __TwigTemplate_53ff27988a89ce0a3f673ae4bef7ab6a extends Template
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
        // line 4
        $context["page_title"] = "Listado de Staff";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/staff/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        yield from         $this->loadTemplate("backend/staff/index.html.twig", "backend/staff/index.html.twig", 7, "408693769")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/staff/index.html.twig";
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
        return new Source("", "backend/staff/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/index.html.twig");
    }
}


/* backend/staff/index.html.twig */
class __TwigTemplate_53ff27988a89ce0a3f673ae4bef7ab6a___408693769 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/embed/list_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/list_common.html.twig", "backend/staff/index.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "            <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_staff_new");
        yield "\" class=\"btn btn-default\">Nuevo Staff</a>
                </div>
            </div>
        ";
        return; yield '';
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 18
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Último acceso</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 30
                yield "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_staff_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                            <u>";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 33), "html", null, true);
                yield "</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
                                        ";
                // line 38
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "username", [], "any", false, false, false, 38), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 41
                if (CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "lastLogin", [], "any", false, false, false, 41)) {
                    // line 42
                    yield "                                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "lastLogin", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true);
                    yield "
                                        ";
                }
                // line 44
                yield "                                    </td>
                                    <td>
                                        ";
                // line 46
                if (CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "isActive", [], "any", false, false, false, 46)) {
                    // line 47
                    yield "                                        <span class=\"label label-primary\">Activo</span>
                                        ";
                } else {
                    // line 49
                    yield "                                        <span class=\"label label-danger\">Inactivo</span>
                                        ";
                }
                // line 51
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 58
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
            ";
        }
        // line 60
        yield "        ";
        return; yield '';
    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 64
            yield "                ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["pagination"] ?? null));
            yield "
            ";
        }
        // line 66
        yield "        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/staff/index.html.twig";
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
        return array (  247 => 66,  241 => 64,  238 => 63,  234 => 62,  229 => 60,  223 => 58,  217 => 54,  209 => 51,  205 => 49,  201 => 47,  199 => 46,  195 => 44,  189 => 42,  187 => 41,  181 => 38,  173 => 33,  169 => 32,  165 => 30,  161 => 29,  148 => 18,  145 => 17,  141 => 16,  132 => 11,  128 => 9,  124 => 8,  56 => 7,  52 => 6,  47 => 1,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/staff/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/staff/index.html.twig");
    }
}
