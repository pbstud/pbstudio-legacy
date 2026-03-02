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

/* backend/dashboard/index.html.twig */
class __TwigTemplate_d2d9014c47f89f63f4f211279610cead extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Dashboard";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if (array_key_exists("stats", $context)) {
            // line 7
            yield "        <div class=\"row tile_count\">
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total transaccionado</span>
                <div class=\"count\">\$";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (($__internal_compile_0 = ($context["stats"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["totalAmountProcessed"] ?? null) : null)), "html", null, true);
            yield "</div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total transaccionado en el mes</span>
                <div class=\"count\">\$";
            // line 14
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (($__internal_compile_1 = ($context["stats"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["totalAmountInCurrentMonth"] ?? null) : null)), "html", null, true);
            yield "</div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total de usuarios</span>
                <div class=\"count\">";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_2 = ($context["stats"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["totalActiveUsers"] ?? null) : null), "html", null, true);
            yield "</div>
            </div>
        </div>
    ";
        }
        // line 22
        yield "
    <div class=\"row\">
        ";
        // line 24
        if (array_key_exists("lastTransactions", $context)) {
            // line 25
            yield "            <div class=\"col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Últimas transacciones</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        ";
            // line 33
            if (($context["lastTransactions"] ?? null)) {
                // line 34
                yield "                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                    <tr>
                                        <th>#</th>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Paquete</th>
                                        <th>Modalidad</th>
                                        <th class=\"text-right\">Monto</th>
                                        <th>M. de pago</th>
                                        <th class=\"text-center\">F. registro</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["lastTransactions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 50
                    yield "                                        ";
                    // line 51
                    yield "                                        <tr>
                                            <th scope=\"row\">";
                    // line 52
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 52), "html", null, true);
                    yield "</th>
                                            <td>";
                    // line 53
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "user", [], "any", false, false, false, 53), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 54
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "user", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 55
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageTotalClasses", [], "any", false, false, false, 55), "html", null, true);
                    yield " clase(s)</td>
                                            <td>";
                    // line 56
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "packageType", [], "any", false, false, false, 56)), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">\$";
                    // line 57
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "total", [], "any", false, false, false, 57), 2), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 58
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "chargeMethod", [], "any", false, false, false, 58)), "html", null, true);
                    yield "</td>
                                            <td class=\"text-center\">";
                    // line 59
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 59), "Y-m-d H:i"), "html", null, true);
                    yield "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "                                    </tbody>
                                </table>
                            </div>
                        ";
            } else {
                // line 66
                yield "                            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
                yield "
                        ";
            }
            // line 68
            yield "                    </div>

                    <div class=\"clearfix\"></div>

                    ";
            // line 72
            if (($context["lastTransactions"] ?? null)) {
                // line 73
                yield "                        <div class=\"x_footer text-center\">
                            <a href=\"";
                // line 74
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction");
                yield "\" class=\"btn btn-default btn-sm\">Ver todas</a>
                        </div>
                    ";
            }
            // line 77
            yield "                </div>
            </div>
        ";
        }
        // line 80
        yield "
        ";
        // line 81
        if (array_key_exists("lastUsers", $context)) {
            // line 82
            yield "            <div class=\"col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Últimos usuarios registrados</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        ";
            // line 90
            if (($context["lastUsers"] ?? null)) {
                // line 91
                yield "                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th class=\"text-center\">Fecha de registro</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["lastUsers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 104
                    yield "                                        <tr>
                                            <th scope=\"row\">";
                    // line 105
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 105), "html", null, true);
                    yield "</th>
                                            <td>";
                    // line 106
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["entity"], "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 107
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "email", [], "any", false, false, false, 107), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 108
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "phone", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "phone", [], "any", false, false, false, 108), "-----")) : ("-----")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-center\">";
                    // line 109
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 109), "Y-m-d H:i"), "html", null, true);
                    yield "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                yield "                                    </tbody>
                                </table>
                            </div>
                        ";
            } else {
                // line 116
                yield "                            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
                yield "
                        ";
            }
            // line 118
            yield "                    </div>

                    <div class=\"clearfix\"></div>

                    ";
            // line 122
            if (($context["lastUsers"] ?? null)) {
                // line 123
                yield "                        <div class=\"x_footer text-center\">
                            <a href=\"";
                // line 124
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user");
                yield "\" class=\"btn btn-default btn-sm\">Ver todos</a>
                        </div>
                    ";
            }
            // line 127
            yield "                </div>
            </div>
        ";
        }
        // line 130
        yield "    </div>
";
        return; yield '';
    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/dashboard/index.html.twig";
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
        return array (  312 => 134,  308 => 133,  302 => 130,  297 => 127,  291 => 124,  288 => 123,  286 => 122,  280 => 118,  274 => 116,  268 => 112,  259 => 109,  255 => 108,  251 => 107,  247 => 106,  243 => 105,  240 => 104,  236 => 103,  222 => 91,  220 => 90,  210 => 82,  208 => 81,  205 => 80,  200 => 77,  194 => 74,  191 => 73,  189 => 72,  183 => 68,  177 => 66,  171 => 62,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  138 => 53,  134 => 52,  131 => 51,  129 => 50,  125 => 49,  108 => 34,  106 => 33,  96 => 25,  94 => 24,  90 => 22,  83 => 18,  76 => 14,  69 => 10,  64 => 7,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/dashboard/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/dashboard/index.html.twig");
    }
}
