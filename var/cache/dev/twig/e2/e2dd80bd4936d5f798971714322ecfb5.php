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

/* package/_package.html.twig */
class __TwigTemplate_a02ed8630fc53737f7c0b2311f577561 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/_package.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/_package.html.twig"));

        // line 2
        yield "<a href=\"#\" data-url=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("package_checkout", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        yield "\" data-remodal=\"checkout\" class=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 2, $this->source); })()), "newUser", [], "any", false, false, false, 2)) {
            yield "first-class";
        }
        yield "\">
    <div>
        ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 4, $this->source); })()), "discountInfo", [], "any", false, false, false, 4)) {
            // line 5
            yield "            <i class=\"discount\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 5, $this->source); })()), "discountInfo", [], "any", false, false, false, 5), "html", null, true);
            yield "</i>
        ";
        }
        // line 7
        yield "        <p>
            ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 8, $this->source); })()), "isUnlimited", [], "any", false, false, false, 8)) {
            // line 9
            yield "                &infin;
            ";
        } else {
            // line 11
            yield "                ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 11, $this->source); })()), "totalClasses", [], "any", false, false, false, 11), "html", null, true);
            yield "
            ";
        }
        // line 13
        yield "        </p>
    </div>
    <h6 class=\"";
        // line 15
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 15, $this->source); })()), "specialPrice", [], "any", false, false, false, 15)) ? ("old-price") : (""));
        yield "\">
        ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 16, $this->source); })()), "altText", [], "any", false, false, false, 16)) {
            // line 17
            yield "            <small>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 17, $this->source); })()), "altText", [], "any", false, false, false, 17), "html", null, true);
            yield "</small><br>
        ";
        } else {
            // line 19
            yield "            <small>Clase";
            yield (((1 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 19, $this->source); })()), "totalClasses", [], "any", false, false, false, 19))) ? ("") : ("s"));
            yield "</small><br>
        ";
        }
        // line 21
        yield "
        \$";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 22, $this->source); })()), "amount", [], "any", false, false, false, 22)), "html", null, true);
        yield "
    </h6>

    ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 25, $this->source); })()), "specialPrice", [], "any", false, false, false, 25)) {
            // line 26
            yield "        <h5 class=\"new-price\">\$";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 26, $this->source); })()), "specialPrice", [], "any", false, false, false, 26)), "html", null, true);
            yield "</h5>
    ";
        }
        // line 28
        yield "
    <small class=\"validity\">Vigencia ";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 29, $this->source); })()), "daysExpiry", [], "any", false, false, false, 29), "html", null, true);
        yield " días</small>
</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "package/_package.html.twig";
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
        return array (  119 => 29,  116 => 28,  110 => 26,  108 => 25,  102 => 22,  99 => 21,  93 => 19,  87 => 17,  85 => 16,  81 => 15,  77 => 13,  71 => 11,  67 => 9,  65 => 8,  62 => 7,  56 => 5,  54 => 4,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# package \\App\\Entity\\Package #}
<a href=\"#\" data-url=\"{{ path('package_checkout', { 'id': package.id }) }}\" data-remodal=\"checkout\" class=\"{% if package.newUser %}first-class{% endif %}\">
    <div>
        {% if package.discountInfo %}
            <i class=\"discount\">{{ package.discountInfo }}</i>
        {% endif %}
        <p>
            {% if package.isUnlimited %}
                &infin;
            {% else %}
                {{ package.totalClasses }}
            {% endif %}
        </p>
    </div>
    <h6 class=\"{{ package.specialPrice ? 'old-price' }}\">
        {% if package.altText %}
            <small>{{ package.altText }}</small><br>
        {% else %}
            <small>Clase{{ 1 == package.totalClasses ? '' : 's' }}</small><br>
        {% endif %}

        \${{ package.amount|number_format }}
    </h6>

    {% if package.specialPrice %}
        <h5 class=\"new-price\">\${{ package.specialPrice|number_format }}</h5>
    {% endif %}

    <small class=\"validity\">Vigencia {{ package.daysExpiry }} días</small>
</a>
", "package/_package.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\package\\_package.html.twig");
    }
}
