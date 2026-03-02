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

/* backend/default/filtration.html.twig */
class __TwigTemplate_83b86dad2943b44ff4fefe00ab45e0ab extends Template
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
        // line 1
        yield "<div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
    <form action=\"";
        // line 2
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["action"] ?? null), "html", null, true);
        yield "\" method=\"get\" enctype=\"application/x-www-form-urlencoded\">
        ";
        // line 3
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["fields"] ?? null)) > 1)) {
            // line 4
            yield "            <select class=\"form-control\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterFieldName"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 6
                yield "                    <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                yield "\"";
                if ((($context["selectedField"] ?? null) == $context["field"])) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["label"], "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            yield "            </select>
        ";
        } else {
            // line 10
            yield "            <input type=\"hidden\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterFieldName"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::getArrayKeysFilter(($context["fields"] ?? null))), "html", null, true);
            yield "\" />
        ";
        }
        // line 12
        yield "
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"search\" value=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["selectedValue"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["filterValueName"] ?? null), "html", null, true);
        yield "\" placeholder=\"";
        (((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["fields"] ?? null)) == 1)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, ($context["fields"] ?? null)), "html", null, true)) : (yield ""));
        yield "\" required>
            <a href=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "reset", [], "any", false, false, false, 15), "html", null, true);
        yield "\" class=\"link-reset ";
        yield ((($context["selectedValue"] ?? null)) ? ("") : ("hidden"));
        yield "\">
                <i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>
            </a>

            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"submit\">
                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </button>
            </span>
        </div>
    </form>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/filtration.html.twig";
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
        return array (  95 => 15,  87 => 14,  83 => 12,  75 => 10,  71 => 8,  56 => 6,  52 => 5,  47 => 4,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/filtration.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/filtration.html.twig");
    }
}
