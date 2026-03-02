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

/* backend/default/pagination/bootstrap_v3_pagination.html.twig */
class __TwigTemplate_f3eb030380232f3098908c25e4cb6437 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 17
            yield "    <ul class=\"pagination justify-content-center\">

        ";
            // line 19
            if (array_key_exists("previous", $context)) {
                // line 20
                yield "            <li class=\"page-item\">
                <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 21
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">&laquo;&nbsp;";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
            </li>
        ";
            } else {
                // line 24
                yield "            <li class=\"disabled page-item\">
                <a class=\"page-link\">&laquo;&nbsp;";
                // line 25
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
            </li>
        ";
            }
            // line 28
            yield "
        ";
            // line 29
            if ((($context["startPage"] ?? null) > 1)) {
                // line 30
                yield "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                // line 31
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                yield "\">1</a>
            </li>
            ";
                // line 33
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 34
                    yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                    // line 35
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    yield "\">2</a>
                </li>
            ";
                } elseif ((                // line 37
($context["startPage"] ?? null) != 2)) {
                    // line 38
                    yield "                <li class=\"disabled page-item\">
                    <a class=\"page-link\">&hellip;</a>
                </li>
            ";
                }
                // line 42
                yield "        ";
            }
            // line 43
            yield "
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 46
                    yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                    // line 47
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</a>
                </li>
            ";
                } else {
                    // line 50
                    yield "                <li class=\"active\">
                    <a class=\"page-link\">";
                    // line 51
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</a>
                </li>
            ";
                }
                // line 54
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "
        ";
            // line 57
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 58
                yield "            ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 59
                    yield "                ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 60
                        yield "                    <li class=\"disabled page-item\">
                        <a class=\"page-link\">&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 64
                        yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                        // line 65
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "</a>
                    </li>
                ";
                    }
                    // line 68
                    yield "            ";
                }
                // line 69
                yield "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                // line 70
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
            </li>
        ";
            }
            // line 73
            yield "
        ";
            // line 74
            if (array_key_exists("next", $context)) {
                // line 75
                yield "            <li class=\"page-item\">
                <a class=\"page-link\" rel=\"next\" href=\"";
                // line 76
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::arrayMerge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</a>
            </li>
        ";
            } else {
                // line 79
                yield "            <li class=\"disabled page-item\">
                <a class=\"page-link\">";
                // line 80
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</a>
            </li>
        ";
            }
            // line 83
            yield "    </ul>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/pagination/bootstrap_v3_pagination.html.twig";
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
        return array (  204 => 83,  198 => 80,  195 => 79,  187 => 76,  184 => 75,  182 => 74,  179 => 73,  171 => 70,  168 => 69,  165 => 68,  157 => 65,  154 => 64,  148 => 60,  145 => 59,  142 => 58,  140 => 57,  137 => 56,  130 => 54,  124 => 51,  121 => 50,  113 => 47,  110 => 46,  107 => 45,  103 => 44,  100 => 43,  97 => 42,  91 => 38,  89 => 37,  84 => 35,  81 => 34,  79 => 33,  74 => 31,  71 => 30,  69 => 29,  66 => 28,  60 => 25,  57 => 24,  49 => 21,  46 => 20,  44 => 19,  40 => 17,  38 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/pagination/bootstrap_v3_pagination.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/pagination/bootstrap_v3_pagination.html.twig");
    }
}
