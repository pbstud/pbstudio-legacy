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

/* backend/user/index.html.twig */
class __TwigTemplate_82910a75ff729c5cf31479a7c136ad60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/user/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Usuarios";
        return; yield '';
    }

    // line 5
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user");
        yield "\" method=\"get\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_id\">ID:</label>
                    <input type=\"number\" value=\"";
        // line 11
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "id", [], "array", true, true, false, 11) &&  !(null === (($__internal_compile_0 = ($context["filters"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_1 = ($context["filters"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[id]\" id=\"filters_id\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_name\">Nombre:</label>
                    <input type=\"text\" value=\"";
        // line 18
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "name", [], "array", true, true, false, 18) &&  !(null === (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[name]\" id=\"filters_name\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_lastname\">Apellidos:</label>
                    <input type=\"text\" value=\"";
        // line 25
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "lastname", [], "array", true, true, false, 25) &&  !(null === (($__internal_compile_4 = ($context["filters"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["lastname"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_5 = ($context["filters"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["lastname"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[lastname]\" id=\"filters_lastname\" class=\"form-control\">
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_email\">Correo:</label>
                    <input type=\"email\" value=\"";
        // line 34
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_6 = ($context["filters"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["email"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_7 = ($context["filters"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["email"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[email]\" id=\"filters_email\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filters_date_start\">Fecha de inicio:</label>
                    <input type=\"text\" value=\"";
        // line 41
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_start", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_8 = ($context["filters"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_start"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_9 = ($context["filters"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date_start"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[date_start]\" id=\"filters_date_start\" class=\"form-control datepicker has-feedback-right\">
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filters_date_end\">Fecha de término:</label>
                    <input type=\"text\" value=\"";
        // line 51
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_end", [], "array", true, true, false, 51) &&  !(null === (($__internal_compile_10 = ($context["filters"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["date_end"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_11 = ($context["filters"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["date_end"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[date_end]\" id=\"filters_date_end\" class=\"form-control datepicker has-feedback-right\">
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_enabled\">Estado:</label>
                    <select id=\"filters_enabled\" name=\"filters[enabled]\" class=\"form-control\" data-current=\"";
        // line 63
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "enabled", [], "array", true, true, false, 63) &&  !(null === (($__internal_compile_12 = ($context["filters"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["enabled"] ?? null) : null)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_13 = ($context["filters"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["enabled"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_enabled"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 66
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
        // line 68
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_package_enabled\">Paquete activo:</label>
                    <div class=\"form-switch\">
                        <input type=\"checkbox\" id=\"filters_package_enabled\" name=\"filters[package_enabled]\" switch=\"success\" value=\"1\" ";
        // line 76
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "package_enabled", [], "array", true, true, false, 76) &&  !(null === (($__internal_compile_14 = ($context["filters"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["package_enabled"] ?? null) : null)))) ? ((($__internal_compile_15 = ($context["filters"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["package_enabled"] ?? null) : null)) : (""))) {
            yield "checked=\"checked\"";
        }
        yield " />
                        <label for=\"filters_package_enabled\" data-on-label=\"Si\" data-off-label=\"No\"></label>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <label>&nbsp;</label>
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>

                    ";
        // line 87
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_user_export")) {
            // line 88
            yield "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Exportar <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_export", ["filters" => ($context["filters"] ?? null)]), "html", null, true);
            yield "\">Todos</a></li>
                                <li><a href=\"";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_export", ["filters" => ($context["filters"] ?? null), "enabled" => 1]), "html", null, true);
            yield "\">Activos</a></li>
                                <li><a href=\"";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_export", ["filters" => ($context["filters"] ?? null), "enabled" => 0]), "html", null, true);
            yield "\">Inactivos</a></li>
                            </ul>
                        </div>
                    ";
        }
        // line 99
        yield "                </div>
            </div>
        </div>
    </form>
";
        return; yield '';
    }

    // line 105
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Sucursal</th>
        <th>Estado</th>
        <th class=\"text-center\">F. creación</th>
        <th></th>
    </tr>
";
        return; yield '';
    }

    // line 118
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        yield "    ";
        $context["allowEdit"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_user_edit");
        // line 120
        yield "
    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 122
            yield "        ";
            // line 123
            yield "        <tr>
            <td>";
            // line 124
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
            <td>";
            // line 125
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["user"], "html", null, true);
            yield "</td>
            <td>";
            // line 126
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
            <td>";
            // line 127
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
            <td>";
            // line 128
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "branchOffice", [], "any", false, false, false, 128), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 130
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 130)) {
                // line 131
                yield "                    <span class=\"label label-primary\">Activo</span>
                ";
            } else {
                // line 133
                yield "                    <span class=\"label label-default\">Inactivo</span>
                ";
            }
            // line 135
            yield "            </td>
            <td class=\"text-center\">
                ";
            // line 137
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 137)) {
                // line 138
                yield "                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 138), "Y-m-d H:i:s"), "html", null, true);
                yield "
                ";
            }
            // line 140
            yield "            </td>
            <td>
                <a href=\"";
            // line 142
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-xs\">
                    Detalle
                </a>
                ";
            // line 145
            if (($context["allowEdit"] ?? null)) {
                // line 146
                yield "                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 146)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                ";
            }
            // line 150
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/index.html.twig";
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
        return array (  320 => 150,  312 => 146,  310 => 145,  304 => 142,  300 => 140,  294 => 138,  292 => 137,  288 => 135,  284 => 133,  280 => 131,  278 => 130,  273 => 128,  269 => 127,  265 => 126,  261 => 125,  257 => 124,  254 => 123,  252 => 122,  248 => 121,  245 => 120,  242 => 119,  238 => 118,  220 => 105,  211 => 99,  204 => 95,  200 => 94,  196 => 93,  189 => 88,  187 => 87,  171 => 76,  161 => 68,  150 => 66,  146 => 65,  141 => 63,  126 => 51,  113 => 41,  103 => 34,  91 => 25,  81 => 18,  71 => 11,  62 => 6,  58 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/index.html.twig");
    }
}
