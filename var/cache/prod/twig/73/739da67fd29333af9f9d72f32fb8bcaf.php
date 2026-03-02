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

/* backend/session/waitinglist.html.twig */
class __TwigTemplate_ba4898d8dc68704c32860a81f3bdf05a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subcontent' => [$this, 'block_subcontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/session/profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["page_title"] = "Lista de espera";
        // line 4
        $context["active_tab"] = "tab_waitinglist";
        // line 1
        $this->parent = $this->loadTemplate("backend/session/profile.html.twig", "backend/session/waitinglist.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["waitinglist"] ?? null)) > 0)) {
            // line 8
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th class=\"text-center\">Estado</th>
                        <th class=\"text-center\">F. de registro</th>
                        <th class=\"text-center\">F. de reservación</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["waitinglist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 22
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                    <u>";
                // line 23
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 23), "html", null, true);
                yield "</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 28
                $context["label_class"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isAvailable", [], "any", false, false, false, 28)) ? ("primary") : (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "error", [], "any", false, false, false, 28)) ? ("danger") : ("warning"))));
                // line 29
                yield "                                ";
                $context["label_text"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isAvailable", [], "any", false, false, false, 29)) ? ("en espera") : (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "error", [], "any", false, false, false, 29)) ? ("error") : ("tomada"))));
                // line 30
                yield "
                                <span class=\"label label-";
                // line 31
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label_class"] ?? null), "html", null, true);
                yield "\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "error", [], "any", false, false, false, 31), "html", null, true);
                yield "\">
                                    ";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label_text"] ?? null), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 36
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdAt", [], "any", false, false, false, 36), "d/m/Y H:i"), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 39
                ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "updatedAt", [], "any", false, false, false, 39)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "updatedAt", [], "any", false, false, false, 39), "d/m/Y H:i"), "html", null, true)) : (yield null));
                yield "
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 47
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session/waitinglist.html.twig";
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
        return array (  135 => 47,  129 => 43,  119 => 39,  113 => 36,  106 => 32,  100 => 31,  97 => 30,  94 => 29,  92 => 28,  84 => 23,  80 => 22,  76 => 20,  72 => 19,  59 => 8,  56 => 7,  52 => 6,  47 => 1,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session/waitinglist.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session/waitinglist.html.twig");
    }
}
