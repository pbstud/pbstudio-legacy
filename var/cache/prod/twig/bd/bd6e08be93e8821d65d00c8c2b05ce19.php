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

/* backend/package/index.html.twig */
class __TwigTemplate_bfdaceceb095a37886c5324fa5afb2e3 extends Template
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
            'filters' => [$this, 'block_filters'],
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
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/package/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Paquetes";
        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_package_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_package_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                Nuevo paquete
            </a>
        </div>
    ";
        }
        return; yield '';
    }

    // line 16
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_package");
        yield "\" method=\"get\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_total_classes\">Núm. de clases:</label>
                    <input type=\"number\" value=\"";
        // line 22
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "total_classes", [], "array", true, true, false, 22) &&  !(null === (($__internal_compile_0 = ($context["filters"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["total_classes"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_1 = ($context["filters"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["total_classes"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[total_classes]\" id=\"filters_total_classes\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_type\">Modalidad:</label>
                    <select id=\"filters_type\" name=\"filters[type]\" class=\"form-control\" data-current=\"";
        // line 29
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "array", true, true, false, 29) &&  !(null === (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["type"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_types"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 32
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_status\">Estado:</label>
                    <select id=\"filters_status\" name=\"filters[status]\" class=\"form-control\" data-current=\"";
        // line 41
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_4 = ($context["filters"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["status"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_5 = ($context["filters"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_status"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 44
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                    </select>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_public\">Público:</label>
                    <select id=\"filters_public\" name=\"filters[public]\" class=\"form-control\" data-current=\"";
        // line 55
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "public", [], "array", true, true, false, 55) &&  !(null === (($__internal_compile_6 = ($context["filters"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["public"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_7 = ($context["filters"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["public"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_public"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 58
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <label>&nbsp;</label>
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
                </div>
            </div>
        </div>
    </form>
";
        return; yield '';
    }

    // line 74
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <tr>
        <th>#</th>
        <th>Núm. de clases</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Precio Espcial</th>
        <th>Modalidad</th>
        <th>Vigencia</th>
        <th>Nuevo usuario</th>
        <th>Público</th>
        <th>Estado</th>
    </tr>
";
        return; yield '';
    }

    // line 89
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 91
            yield "        ";
            // line 92
            yield "        <tr>
            <td>
                <a href=\"";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_package_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                ";
            // line 100
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "isUnlimited", [], "any", false, false, false, 100)) {
                // line 101
                yield "                    (&infin;) Ilimitadas
                ";
            } else {
                // line 103
                yield "                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 103), "html", null, true);
                yield " clase(s)
                ";
            }
            // line 105
            yield "            </td>
            <td>";
            // line 106
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "altText", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
            <td>
                \$";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "amount", [], "any", false, false, false, 108), 2), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 111
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "specialPrice", [], "any", false, false, false, 111)) {
                // line 112
                yield "                    \$";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "specialPrice", [], "any", false, false, false, 112), 2), "html", null, true);
                yield "
                ";
            } else {
                // line 114
                yield "                    --
                ";
            }
            // line 116
            yield "            </td>
            <td>
                ";
            // line 118
            yield ((("i" == CoreExtension::getAttribute($this->env, $this->source, $context["package"], "type", [], "any", false, false, false, 118))) ? ("Individual") : ("Grupal"));
            yield "
            </td>
            <td>
                ";
            // line 121
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "daysExpiry", [], "any", false, false, false, 121), "html", null, true);
            yield " días
            </td>
            <td>
                ";
            // line 124
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "newUser", [], "any", false, false, false, 124)) {
                // line 125
                yield "                    <span class=\"label label-primary\">Sí</span>
                ";
            } else {
                // line 127
                yield "                    <span class=\"label label-danger\">No</span>
                ";
            }
            // line 129
            yield "            </td>
            <td>
                ";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "public", [], "any", false, false, false, 131)) {
                // line 132
                yield "                    <span class=\"label label-primary\">Sí</span>
                ";
            } else {
                // line 134
                yield "                    <span class=\"label label-danger\">No</span>
                ";
            }
            // line 136
            yield "            </td>
            <td>
                ";
            // line 138
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "isActive", [], "any", false, false, false, 138)) {
                // line 139
                yield "                    <span class=\"label label-primary\">Activo</span>
                ";
            } else {
                // line 141
                yield "                    <span class=\"label label-danger\">Inactivo</span>
                ";
            }
            // line 143
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/package/index.html.twig";
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
        return array (  340 => 143,  336 => 141,  332 => 139,  330 => 138,  326 => 136,  322 => 134,  318 => 132,  316 => 131,  312 => 129,  308 => 127,  304 => 125,  302 => 124,  296 => 121,  290 => 118,  286 => 116,  282 => 114,  276 => 112,  274 => 111,  268 => 108,  263 => 106,  260 => 105,  254 => 103,  250 => 101,  248 => 100,  240 => 95,  236 => 94,  232 => 92,  230 => 91,  225 => 90,  221 => 89,  201 => 74,  184 => 60,  173 => 58,  169 => 57,  164 => 55,  153 => 46,  142 => 44,  138 => 43,  133 => 41,  124 => 34,  113 => 32,  109 => 31,  104 => 29,  94 => 22,  85 => 17,  81 => 16,  69 => 8,  66 => 7,  63 => 6,  59 => 5,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/package/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/package/index.html.twig");
    }
}
