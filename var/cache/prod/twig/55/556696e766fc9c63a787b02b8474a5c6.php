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

/* backend/user/transactions.html.twig */
class __TwigTemplate_8fd126d3200a941bfc547d20a4bb3e52 extends Template
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
        return "backend/layout-ajax.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/layout-ajax.html.twig", "backend/user/transactions.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["transactions"] ?? null)) > 0)) {
            // line 5
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Paquete</th>
                        <th>Modalidad</th>
                        <th class=\"text-right\">Monto</th>
                        <th>M. de pago</th>
                        <th class=\"text-center\">Estado</th>
                        <th class=\"text-center\">F. creación</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 20
                yield "                        ";
                // line 21
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 23
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                    <u>";
                // line 24
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 24), "html", null, true);
                yield "</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td>
                                ";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageTotalClasses", [], "any", false, false, false, 29), "html", null, true);
                yield " clase(s)
                            </td>
                            <td>
                                ";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "packageType", [], "any", false, false, false, 32)), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-right\">
                                \$";
                // line 35
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "total", [], "any", false, false, false, 35)), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 38
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getChargeMethodDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "chargeMethod", [], "any", false, false, false, 38)), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                <span class=\"label label-";
                // line 41
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 41)), "html", null, true);
                yield "\">
                                    ";
                // line 42
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getTransactionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 42)), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 46
                if (CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 46)) {
                    // line 47
                    yield "                                    ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 47), "d-m-Y H:i"), "html", null, true);
                    yield "
                                ";
                }
                // line 49
                yield "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                </tbody>
            </table>
        </div>

        ";
            // line 56
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["transactions"] ?? null));
            yield "
    ";
        } else {
            // line 58
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
    ";
        }
        // line 60
        yield "
    <script>
        \$('.pagination a').on('click', function (e) {
            e.preventDefault();
            let url = \$(this).prop('href');

            if ('' === url) {
                return;
            }

            \$.loader.show('#userTabContent');
            \$('#userTabContent').load(url);
        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/transactions.html.twig";
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
        return array (  160 => 60,  154 => 58,  149 => 56,  143 => 52,  135 => 49,  129 => 47,  127 => 46,  120 => 42,  116 => 41,  110 => 38,  104 => 35,  98 => 32,  92 => 29,  84 => 24,  80 => 23,  76 => 21,  74 => 20,  70 => 19,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/transactions.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/transactions.html.twig");
    }
}
