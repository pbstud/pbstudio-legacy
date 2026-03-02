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

/* backend/transaction/index.html.twig */
class __TwigTemplate_289f1241838ecc1acceb606b1b536d12 extends Template
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
        $context["page_section"] = "Transacciones";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/transaction/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Transacciones";
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        yield from         $this->loadTemplate("backend/transaction/index.html.twig", "backend/transaction/index.html.twig", 7, "718731682")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" =>         $this->unwrap()->renderBlock("title", $context, $blocks)]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/transaction/index.html.twig";
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
        return array (  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/transaction/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/transaction/index.html.twig");
    }
}


/* backend/transaction/index.html.twig */
class __TwigTemplate_289f1241838ecc1acceb606b1b536d12___718731682 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_filters' => [$this, 'block_body_filters'],
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
        $this->parent = $this->loadTemplate("backend/default/embed/list_common.html.twig", "backend/transaction/index.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "            <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction");
        yield "\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_search\">Buscar:</label>
                            <input type=\"text\" id=\"filter_search\" name=\"filter_search\" class=\"form-control\" placeholder=\"Buscar por Id, Nombre o Email\" value=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filter_search"] ?? null), "html", null, true);
        yield "\" />
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_status\">Estado:</label>
                            <select id=\"filter_status\" name=\"filter_status\" class=\"form-control\" data-current=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filter_status"] ?? null), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statusChoices"] ?? null));
        foreach ($context['_seq'] as $context["status"] => $context["label"]) {
            // line 22
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["status"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription($context["status"]), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_date_start\">Fecha de inicio:</label>
                            <input type=\"text\" id=\"filter_date_start\" name=\"filter_date_start\" class=\"form-control datepicker has-feedback-right\" value=\"";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filter_date_start"] ?? null), "html", null, true);
        yield "\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_branchOffice\">Sucursal</label>
                            <select id=\"filter_branchOffice\" name=\"filter_branchOffice\" class=\"form-control\" data-current=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filter_branchOffice"] ?? null), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["branchOffices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 42
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 42), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_date_end\">Fecha de término:</label>
                            <input type=\"text\" id=\"filter_date_end\" name=\"filter_date_end\" class=\"form-control datepicker has-feedback-right\" value=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filter_date_end"] ?? null), "html", null, true);
        yield "\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"filter_package\">Paquete</label>
                            <select id=\"filter_package\" name=\"filter_package\" class=\"form-control\" data-current=\"";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filter_package"] ?? null), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["packages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 62
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 62), "html", null, true);
            yield " clase(s) ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "type", [], "any", false, false, false, 62)), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_charge_method\">Método de Pago</label>
                            <select id=\"filter_charge_method\" name=\"filter_charge_method\" class=\"form-control\" data-current=\"";
        // line 71
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filter_charge_method"] ?? null), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["chargeMethods"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["chargeMethod"]) {
            // line 74
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["chargeMethod"]), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['chargeMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_discount\">Descuento</label>
                            <select id=\"filter_discount\" name=\"filter_discount\" class=\"form-control\" data-current=\"";
        // line 83
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filter_discount"] ?? null), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filterDiscount"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 86
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["key"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("filter.transaction_discount." . $context["key"])), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <label>&nbsp;</label>
                        <div>
                            ";
        // line 95
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 96
            yield "                                <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["url_export"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-default\">Exportar</a>
                            ";
        }
        // line 98
        yield "                            <button type=\"submit\" class=\"btn btn-dark\">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        ";
        return; yield '';
    }

    // line 105
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 107
            yield "                <div class=\"alert alert-success\" role=\"alert\">
                    <strong>Total: \$";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, ($context["total"] ?? null), 2), "html", null, true);
            yield "</strong>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Paquete</th>
                                <th>Modalidad</th>
                                <th class=\"text-right\">Monto</th>
                                <th>Cupón</th>
                                <th>M. de pago</th>
                                <th class=\"text-center\">Sucursal</th>
                                <th class=\"text-center\">Estado</th>
                                <th class=\"text-center\">F. creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 130
                yield "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 132
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                            <u>";
                // line 133
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 133), "html", null, true);
                yield "</u>
                                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
                                        ";
                // line 138
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "user", [], "any", false, false, false, 138), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 141
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "user", [], "any", false, false, false, 141), "email", [], "any", false, false, false, 141), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 144
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageTotalClasses", [], "any", false, false, false, 144), "html", null, true);
                yield " clase(s)
                                    </td>
                                    <td>
                                        ";
                // line 147
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageType", [], "any", false, false, false, 147)), "html", null, true);
                yield "
                                    </td>
                                    <td class=\"text-right\">
                                        \$";
                // line 150
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total", [], "any", false, false, false, 150), 2), "html", null, true);
                yield "
                                    </td>
                                    <td>";
                // line 152
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "coupon", [], "any", false, true, false, 152), "code", [], "any", true, true, false, 152)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "coupon", [], "any", false, true, false, 152), "code", [], "any", false, false, false, 152), "")) : ("")), "html", null, true);
                yield "</td>
                                    <td>
                                        ";
                // line 154
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "chargeMethod", [], "any", false, false, false, 154)), "html", null, true);
                yield "
                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 157
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "branchOffice", [], "any", false, false, false, 157), "html", null, true);
                yield "
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"label label-";
                // line 160
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 160)), "html", null, true);
                yield "\">
                                            ";
                // line 161
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 161)), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 165
                if (CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 165)) {
                    // line 166
                    yield "                                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 166), "Y-m-d H:i:s"), "html", null, true);
                    yield "
                                        ";
                }
                // line 168
                yield "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 175
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
            ";
        }
        // line 177
        yield "        ";
        return; yield '';
    }

    // line 179
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 181
            yield "                ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["pagination"] ?? null));
            yield "
            ";
        }
        // line 183
        yield "        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/transaction/index.html.twig";
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
        return array (  496 => 183,  490 => 181,  487 => 180,  483 => 179,  478 => 177,  472 => 175,  466 => 171,  458 => 168,  452 => 166,  450 => 165,  443 => 161,  439 => 160,  433 => 157,  427 => 154,  422 => 152,  417 => 150,  411 => 147,  405 => 144,  399 => 141,  393 => 138,  385 => 133,  381 => 132,  377 => 130,  373 => 129,  349 => 108,  346 => 107,  343 => 106,  339 => 105,  329 => 98,  323 => 96,  321 => 95,  312 => 88,  301 => 86,  297 => 85,  292 => 83,  283 => 76,  272 => 74,  268 => 73,  263 => 71,  254 => 64,  241 => 62,  237 => 61,  232 => 59,  221 => 51,  212 => 44,  201 => 42,  197 => 41,  192 => 39,  181 => 31,  172 => 24,  161 => 22,  157 => 21,  152 => 19,  144 => 14,  135 => 9,  131 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/transaction/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/transaction/index.html.twig");
    }
}
