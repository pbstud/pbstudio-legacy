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

/* backend/exerciseroom/index.html.twig */
class __TwigTemplate_f5407c4ce708a329adfbce43dbd20fc9 extends Template
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
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/exerciseroom/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Salones";
        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_exerciseroom_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_exerciseroom_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_exerciseroom_new"), "html", null, true);
            yield "
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
        <th class=\"text-center\">Capacidad</th>
        <th>Disciplina</th>
        <th>Modalidad</th>
        <th>Sucursal</th>
        <th>Estado</th>
    </tr>
";
        return; yield '';
    }

    // line 28
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["exerciseRoom"]) {
            // line 30
            yield "        ";
            // line 31
            yield "        <tr>
            <td>
                <a href=\"";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_exerciseroom_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                ";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["exerciseRoom"], "html", null, true);
            yield "
            </td>
            <td class=\"text-center\">
                ";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "capacity", [], "any", false, false, false, 42), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "discipline", [], "any", false, false, false, 45), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 48
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "type", [], "any", false, false, false, 48)), "html", null, true);
            yield "
            </td>
            <td>";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "branchOffice", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, $context["exerciseRoom"], "isActive", [], "any", false, false, false, 52)) {
                // line 53
                yield "                    <span class=\"label label-primary\">Activo</span>
                ";
            } else {
                // line 55
                yield "                    <span class=\"label label-danger\">Inactivo</span>
                ";
            }
            // line 57
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exerciseRoom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/exerciseroom/index.html.twig";
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
        return array (  165 => 57,  161 => 55,  157 => 53,  155 => 52,  150 => 50,  145 => 48,  139 => 45,  133 => 42,  127 => 39,  119 => 34,  115 => 33,  111 => 31,  109 => 30,  104 => 29,  100 => 28,  83 => 16,  73 => 10,  68 => 8,  65 => 7,  62 => 6,  58 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/exerciseroom/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/exerciseroom/index.html.twig");
    }
}
