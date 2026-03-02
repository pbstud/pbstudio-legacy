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

/* backend/coupon/show.html.twig */
class __TwigTemplate_88135d33ce9217d2656d4c9b5f931c20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'section' => [$this, 'block_section'],
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
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/coupon/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_coupon_edit")) {
            // line 5
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 6
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "id", [], "any", false, false, false, 6)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-dark\">
                ";
            // line 7
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_coupon_edit"), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        return; yield '';
    }

    // line 13
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "    <div class=\"row\">
        ";
        // line 15
        yield from         $this->loadTemplate("backend/coupon/show.html.twig", "backend/coupon/show.html.twig", 15, "1115509851")->unwrap()->yield(CoreExtension::arrayMerge($context, ["title" => "Datos Generales"]));
        // line 72
        yield "
        ";
        // line 73
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/_card_dates.html.twig", ["object" => ($context["coupon"] ?? null)]);
        yield "
    </div>

    ";
        // line 76
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_transaction")) {
            // line 77
            yield "        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Transacciones</h2>
                        <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"x_content\">
                        ";
            // line 86
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["transactions"] ?? null)) > 0)) {
                // line 87
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
                                        <th class=\"text-center\">Sucursal</th>
                                        <th class=\"text-center\">Estado</th>
                                        <th class=\"text-center\">F. creación</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                    // line 106
                    yield "                                        ";
                    // line 107
                    yield "                                        <tr>
                                            <td>";
                    // line 108
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 108), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 109
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "user", [], "any", false, false, false, 109), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 110
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "user", [], "any", false, false, false, 110), "email", [], "any", false, false, false, 110), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 111
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageTotalClasses", [], "any", false, false, false, 111), "html", null, true);
                    yield " clase(s)</td>
                                            <td>";
                    // line 112
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageType", [], "any", false, false, false, 112)), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">\$";
                    // line 113
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total", [], "any", false, false, false, 113), 2), "html", null, true);
                    yield "</td>
                                            <td>";
                    // line 114
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "chargeMethod", [], "any", false, false, false, 114)), "html", null, true);
                    yield "</td>
                                            <td class=\"text-center\">";
                    // line 115
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "branchOffice", [], "any", false, false, false, 115), "html", null, true);
                    yield "</td>
                                            <td class=\"text-center\">
                                                <span class=\"label label-";
                    // line 117
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 117)), "html", null, true);
                    yield "\">
                                                    ";
                    // line 118
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 118)), "html", null, true);
                    yield "
                                                </span>
                                            </td>
                                            <td class=\"text-center\">
                                                ";
                    // line 122
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 122)) {
                        // line 123
                        yield "                                                    ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 123), "Y-m-d H:i:s"), "html", null, true);
                        yield "
                                                ";
                    }
                    // line 125
                    yield "                                            </td>
                                            <td>
                                                ";
                    // line 127
                    if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_transaction_show")) {
                        // line 128
                        yield "                                                    <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                        yield "\" class=\"btn btn-success btn-xs\">
                                                        Detalle
                                                    </a>
                                                ";
                    }
                    // line 132
                    yield "                                            </td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                yield "                                    </tbody>
                                </table>
                            </div>
                        ";
            } else {
                // line 139
                yield "                            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
                yield "
                        ";
            }
            // line 141
            yield "                    </div>

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/coupon/show.html.twig";
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
        return array (  220 => 141,  214 => 139,  208 => 135,  200 => 132,  192 => 128,  190 => 127,  186 => 125,  180 => 123,  178 => 122,  171 => 118,  167 => 117,  162 => 115,  158 => 114,  154 => 113,  150 => 112,  146 => 111,  142 => 110,  138 => 109,  134 => 108,  131 => 107,  129 => 106,  125 => 105,  105 => 87,  103 => 86,  92 => 77,  90 => 76,  84 => 73,  81 => 72,  79 => 15,  76 => 14,  72 => 13,  62 => 7,  58 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/coupon/show.html.twig", "/var/www/pbstudio/releases/81/templates/backend/coupon/show.html.twig");
    }
}


/* backend/coupon/show.html.twig */
class __TwigTemplate_88135d33ce9217d2656d4c9b5f931c20___1115509851 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "backend/default/_card_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/_card_table.html.twig", "backend/coupon/show.html.twig", 15);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "                <tr>
                    <th>";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
        yield "</th>
                    <td>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.code"), "html", null, true);
        yield "</th>
                    <td>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "code", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_start"), "html", null, true);
        yield "</th>
                    <td>";
        // line 27
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "dateStart", [], "any", false, false, false, 27)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "dateStart", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true)) : (yield "--"));
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_end"), "html", null, true);
        yield "</th>
                    <td>";
        // line 31
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "dateEnd", [], "any", false, false, false, 31)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "dateEnd", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true)) : (yield "--"));
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.discount"), "html", null, true);
        yield "</th>
                    <td>";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "discount", [], "any", false, false, false, 35), "html", null, true);
        yield " %</td>
                </tr>
                <tr>
                    <th>";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.uses_total"), "html", null, true);
        yield "</th>
                    <td>";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "usesTotal", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.used"), "html", null, true);
        yield "</th>
                    <td>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "used", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>";
        // line 46
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.packages"), "html", null, true);
        yield "</th>
                    <td>
                        <ul class=\"to_do\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "packages", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 50
            yield "                            <li>
                                ";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "type", [], "any", false, false, false, 51)), "html", null, true);
            yield " -
                                ";
            // line 52
            ((CoreExtension::getAttribute($this->env, $this->source, $context["package"], "isUnlimited", [], "any", false, false, false, 52)) ? (yield "∞") : (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 52), "html", null, true)));
            yield "
                                clase(s)
                                ";
            // line 54
            ((CoreExtension::getAttribute($this->env, $this->source, $context["package"], "altText", [], "any", false, false, false, 54)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (" - " . CoreExtension::getAttribute($this->env, $this->source, $context["package"], "altText", [], "any", false, false, false, 54)), "html", null, true)) : (yield ""));
            yield "
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.apply_special_price"), "html", null, true);
        yield "</th>
                    <td>
                        ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["coupon"] ?? null), "applySpecialPrice", [], "any", false, false, false, 63)) {
            // line 64
            yield "                            <span class=\"label label-primary\">Sí</span>
                        ";
        } else {
            // line 66
            yield "                            <span class=\"label label-danger\">No</span>
                        ";
        }
        // line 68
        yield "                    </td>
                </tr>
            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/coupon/show.html.twig";
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
        return array (  422 => 68,  418 => 66,  414 => 64,  412 => 63,  407 => 61,  401 => 57,  392 => 54,  387 => 52,  383 => 51,  380 => 50,  376 => 49,  370 => 46,  364 => 43,  360 => 42,  354 => 39,  350 => 38,  344 => 35,  340 => 34,  334 => 31,  330 => 30,  324 => 27,  320 => 26,  314 => 23,  310 => 22,  304 => 19,  300 => 18,  297 => 17,  293 => 16,  282 => 15,  220 => 141,  214 => 139,  208 => 135,  200 => 132,  192 => 128,  190 => 127,  186 => 125,  180 => 123,  178 => 122,  171 => 118,  167 => 117,  162 => 115,  158 => 114,  154 => 113,  150 => 112,  146 => 111,  142 => 110,  138 => 109,  134 => 108,  131 => 107,  129 => 106,  125 => 105,  105 => 87,  103 => 86,  92 => 77,  90 => 76,  84 => 73,  81 => 72,  79 => 15,  76 => 14,  72 => 13,  62 => 7,  58 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/coupon/show.html.twig", "/var/www/pbstudio/releases/81/templates/backend/coupon/show.html.twig");
    }
}
