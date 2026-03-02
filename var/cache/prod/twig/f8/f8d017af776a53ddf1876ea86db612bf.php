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

/* backend/discipline/index.html.twig */
class __TwigTemplate_717162d5b96d118ef0e4ee22d5c5d5bc extends Template
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
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/discipline/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Disciplinas";
        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_discipline_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_discipline_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_discipline_new"), "html", null, true);
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
        // line 17
        yield "    <tr>
        <th>";
        // line 18
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "d.id");
        yield "</th>
        <th>";
        // line 19
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "d.name");
        yield "</th>
        <th>";
        // line 20
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.active"), "d.isActive");
        yield "</th>
        <th>";
        // line 21
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.created_at"), "d.createdAt");
        yield "</th>
        <th></th>
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
        $context["allowEdit"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_discipline_edit");
        // line 28
        yield "
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["discipline"]) {
            // line 30
            yield "        ";
            // line 31
            yield "        <tr>
            <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
            <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "name", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "isActive", [], "any", false, false, false, 35)) {
                // line 36
                yield "                    <span class=\"label label-primary\">Sí</span>
                ";
            } else {
                // line 38
                yield "                    <span class=\"label label-danger\">No</span>
                ";
            }
            // line 40
            yield "            </td>
            <td>";
            // line 41
            ((CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "createdAt", [], "any", false, false, false, 41)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "createdAt", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true)) : (yield ""));
            yield "</td>
            <td>
                ";
            // line 43
            if (($context["allowEdit"] ?? null)) {
                // line 44
                yield "                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_discipline_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discipline"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                ";
            }
            // line 48
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discipline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/discipline/index.html.twig";
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
        return array (  167 => 48,  159 => 44,  157 => 43,  152 => 41,  149 => 40,  145 => 38,  141 => 36,  139 => 35,  134 => 33,  130 => 32,  127 => 31,  125 => 30,  121 => 29,  118 => 28,  115 => 27,  111 => 26,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  87 => 17,  83 => 16,  73 => 10,  68 => 8,  65 => 7,  62 => 6,  58 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/discipline/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/discipline/index.html.twig");
    }
}
