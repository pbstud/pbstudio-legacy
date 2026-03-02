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
class __TwigTemplate_0eff16bd87c61f5b2660473239317e4a extends Template
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
        // line 2
        yield "<a href=\"#\" data-url=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("package_checkout", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "id", [], "any", false, false, false, 2)]), "html", null, true);
        yield "\" data-remodal=\"checkout\" class=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "newUser", [], "any", false, false, false, 2)) {
            yield "first-class";
        }
        yield "\">
    <div>
        ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "discountInfo", [], "any", false, false, false, 4)) {
            // line 5
            yield "            <i class=\"discount\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "discountInfo", [], "any", false, false, false, 5), "html", null, true);
            yield "</i>
        ";
        }
        // line 7
        yield "        <p>
            ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "isUnlimited", [], "any", false, false, false, 8)) {
            // line 9
            yield "                &infin;
            ";
        } else {
            // line 11
            yield "                ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "totalClasses", [], "any", false, false, false, 11), "html", null, true);
            yield "
            ";
        }
        // line 13
        yield "        </p>
    </div>
    <h6 class=\"";
        // line 15
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "specialPrice", [], "any", false, false, false, 15)) ? ("old-price") : (""));
        yield "\">
        ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "altText", [], "any", false, false, false, 16)) {
            // line 17
            yield "            <small>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "altText", [], "any", false, false, false, 17), "html", null, true);
            yield "</small><br>
        ";
        } else {
            // line 19
            yield "            <small>Clase";
            yield (((1 == CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "totalClasses", [], "any", false, false, false, 19))) ? ("") : ("s"));
            yield "</small><br>
        ";
        }
        // line 21
        yield "
        \$";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "amount", [], "any", false, false, false, 22)), "html", null, true);
        yield "
    </h6>

    ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "specialPrice", [], "any", false, false, false, 25)) {
            // line 26
            yield "        <h5 class=\"new-price\">\$";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "specialPrice", [], "any", false, false, false, 26)), "html", null, true);
            yield "</h5>
    ";
        }
        // line 28
        yield "
    <small class=\"validity\">Vigencia ";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "daysExpiry", [], "any", false, false, false, 29), "html", null, true);
        yield " días</small>
</a>
";
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
        return array (  113 => 29,  110 => 28,  104 => 26,  102 => 25,  96 => 22,  93 => 21,  87 => 19,  81 => 17,  79 => 16,  75 => 15,  71 => 13,  65 => 11,  61 => 9,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "package/_package.html.twig", "/var/www/pbstudio/releases/81/templates/package/_package.html.twig");
    }
}
