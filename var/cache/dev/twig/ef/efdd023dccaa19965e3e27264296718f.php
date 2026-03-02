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
class __TwigTemplate_784d943fa1f8d48266a1eab3a0db6723 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/filtration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/filtration.html.twig"));

        // line 1
        yield "<div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
    <form action=\"";
        // line 2
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\" method=\"get\" enctype=\"application/x-www-form-urlencoded\">
        ";
        // line 3
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 3, $this->source); })())) > 1)) {
            // line 4
            yield "            <select class=\"form-control\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new RuntimeError('Variable "filterFieldName" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\">
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 6
                yield "                    <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                yield "\"";
                if (((isset($context["selectedField"]) || array_key_exists("selectedField", $context) ? $context["selectedField"] : (function () { throw new RuntimeError('Variable "selectedField" does not exist.', 6, $this->source); })()) == $context["field"])) {
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
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new RuntimeError('Variable "filterFieldName" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::getArrayKeysFilter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 10, $this->source); })()))), "html", null, true);
            yield "\" />
        ";
        }
        // line 12
        yield "
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"search\" value=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" name=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filterValueName"]) || array_key_exists("filterValueName", $context) ? $context["filterValueName"] : (function () { throw new RuntimeError('Variable "filterValueName" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"";
        (((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 14, $this->source); })())) == 1)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 14, $this->source); })())), "html", null, true)) : (yield ""));
        yield "\" required>
            <a href=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 15, $this->source); })()), "reset", [], "any", false, false, false, 15), "html", null, true);
        yield "\" class=\"link-reset ";
        yield (((isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 15, $this->source); })())) ? ("") : ("hidden"));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  101 => 15,  93 => 14,  89 => 12,  81 => 10,  77 => 8,  62 => 6,  58 => 5,  53 => 4,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
    <form action=\"{{ action }}\" method=\"get\" enctype=\"application/x-www-form-urlencoded\">
        {% if fields|length > 1 %}
            <select class=\"form-control\" name=\"{{ filterFieldName }}\">
                {% for field, label in fields %}
                    <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
                {% endfor %}
            </select>
        {% else %}
            <input type=\"hidden\" name=\"{{ filterFieldName }}\" value=\"{{ fields|keys|first }}\" />
        {% endif %}

        <div class=\"input-group\">
            <input class=\"form-control\" type=\"search\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\" placeholder=\"{{ fields|length == 1 ? fields|first }}\" required>
            <a href=\"{{ options.reset }}\" class=\"link-reset {{ selectedValue ? '' : 'hidden' }}\">
                <i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>
            </a>

            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"submit\">
                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </button>
            </span>
        </div>
    </form>
</div>", "backend/default/filtration.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\filtration.html.twig");
    }
}
