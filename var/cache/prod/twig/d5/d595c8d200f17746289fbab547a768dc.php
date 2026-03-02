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

/* backend/branch_office/index.html.twig */
class __TwigTemplate_6ac5010cb9ad4c29b4db23579875861a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actions' => [$this, 'block_actions'],
            'table_thead' => [$this, 'block_table_thead'],
            'table_tbody' => [$this, 'block_table_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/branch_office/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Sucursales";
        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_branchoffice_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_branchoffice_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                Nueva sucursal
            </a>
        </div>
    ";
        }
        return; yield '';
    }

    // line 16
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Lugar</th>
        <th>Pública</th>
        <th>F. creación</th>
    </tr>
";
        return; yield '';
    }

    // line 26
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 28
            yield "        ";
            // line 29
            yield "        <tr>
            <td>
                <a href=\"";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_branchoffice_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
            <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "place", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 39
            if (CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "public", [], "any", false, false, false, 39)) {
                // line 40
                yield "                    <span class=\"label label-primary\">Sí</span>
                ";
            } else {
                // line 42
                yield "                    <span class=\"label label-danger\">No</span>
                ";
            }
            // line 44
            yield "            </td>
            <td>
                ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "createdAt", [], "any", false, false, false, 46)) {
                // line 47
                yield "                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "createdAt", [], "any", false, false, false, 47), "Y-m-d H:i:s"), "html", null, true);
                yield "
                ";
            }
            // line 49
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/branch_office/index.html.twig";
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
        return array (  152 => 49,  146 => 47,  144 => 46,  140 => 44,  136 => 42,  132 => 40,  130 => 39,  125 => 37,  121 => 36,  114 => 32,  110 => 31,  106 => 29,  104 => 28,  99 => 27,  95 => 26,  80 => 16,  68 => 8,  65 => 7,  62 => 6,  58 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/branch_office/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/branch_office/index.html.twig");
    }
}
