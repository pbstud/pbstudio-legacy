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

/* backend/coupon/index.html.twig */
class __TwigTemplate_1492908601ed2fae5ce57119e91a6455 extends Template
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
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/coupon/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Cupones";
        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_coupon_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_new");
            yield "\" class=\"btn btn-sm btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_coupon_new"), "html", null, true);
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
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "c.id");
        yield "</th>
        <th>";
        // line 19
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "c.name");
        yield "</th>
        <th>";
        // line 20
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.code"), "c.code");
        yield "</th>
        <th>";
        // line 21
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.discount"), "c.discount");
        yield "</th>
        <th>";
        // line 22
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.uses_total"), "c.usesTotal");
        yield "</th>
        <th>";
        // line 23
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_start"), "c.dateStart");
        yield "</th>
        <th>";
        // line 24
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, ($context["pagination"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_end"), "c.dateEnd");
        yield "</th>
        <th></th>
    </tr>
";
        return; yield '';
    }

    // line 29
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        $context["allowEdit"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_coupon_edit");
        // line 31
        yield "    ";
        $context["allowShow"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_coupon_show");
        // line 32
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 33
            yield "        ";
            // line 34
            yield "        <tr>
            <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
            <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
            <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
            <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 38), "html", null, true);
            yield " %</td>
            <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "used", [], "any", false, false, false, 39), "html", null, true);
            yield " / ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "usesTotal", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
            <td>";
            // line 40
            ((CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "dateStart", [], "any", false, false, false, 40)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "dateStart", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true)) : (yield ""));
            yield "</td>
            <td>";
            // line 41
            ((CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "dateEnd", [], "any", false, false, false, 41)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "dateEnd", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true)) : (yield ""));
            yield "</td>
            <td>
                ";
            // line 43
            if (($context["allowShow"] ?? null)) {
                // line 44
                yield "                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-xs\">
                        Detalle
                    </a>
                ";
            }
            // line 48
            yield "                ";
            if (($context["allowEdit"] ?? null)) {
                // line 49
                yield "                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                ";
            }
            // line 53
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/coupon/index.html.twig";
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
        return array (  195 => 53,  187 => 49,  184 => 48,  176 => 44,  174 => 43,  169 => 41,  165 => 40,  159 => 39,  155 => 38,  151 => 37,  147 => 36,  143 => 35,  140 => 34,  138 => 33,  133 => 32,  130 => 31,  127 => 30,  123 => 29,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  87 => 17,  83 => 16,  73 => 10,  68 => 8,  65 => 7,  62 => 6,  58 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/coupon/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/coupon/index.html.twig");
    }
}
