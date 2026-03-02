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

/* package/_checkout_detail.html.twig */
class __TwigTemplate_4c002960665eba757bdf91b97c8d5941 extends Template
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
        yield "<div class=\"grid-1-4 right\">
    <h4>
        Tu compra<small>(Vigencia ";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "daysExpiry", [], "any", false, false, false, 3), "html", null, true);
        yield " días)</small>
    </h4>
    <div class=\"price\">
        <a href=\"#\">
            <div>
                ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "discountInfo", [], "any", false, false, false, 8)) {
            // line 9
            yield "                    <i class=\"discount\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "discountInfo", [], "any", false, false, false, 9), "html", null, true);
            yield "</i>
                ";
        }
        // line 11
        yield "                <p>
                    ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "isUnlimited", [], "any", false, false, false, 12)) {
            // line 13
            yield "                        &infin;
                    ";
        } else {
            // line 15
            yield "                        ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "totalClasses", [], "any", false, false, false, 15), "html", null, true);
            yield "
                    ";
        }
        // line 17
        yield "                </p>
            </div>
            <h6 class=\"";
        // line 19
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "specialPrice", [], "any", false, false, false, 19)) ? ("old-price") : (""));
        yield "\">
                <small>Clase ";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "type", [], "any", false, false, false, 20)), "html", null, true);
        yield "</small>
                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "altText", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    <br><small>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "altText", [], "any", false, false, false, 22), "html", null, true);
            yield "</small>
                ";
        }
        // line 24
        yield "                <br>
                \$";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "amount", [], "any", false, false, false, 25)), "html", null, true);
        yield "
            </h6>
            ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "specialPrice", [], "any", false, false, false, 27)) {
            // line 28
            yield "                <h5 class=\"new-price\">\$";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["package"] ?? null), "specialPrice", [], "any", false, false, false, 28)), "html", null, true);
            yield "</h5>
            ";
        }
        // line 30
        yield "        </a>
    </div>
    <p>
        <small>
            Consulta
            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("package_index");
        yield "\" data-remodal-action=\"close\">otros paquetes</a>
        </small>
    </p>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "package/_checkout_detail.html.twig";
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
        return array (  116 => 35,  109 => 30,  103 => 28,  101 => 27,  96 => 25,  93 => 24,  87 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 17,  67 => 15,  63 => 13,  61 => 12,  58 => 11,  52 => 9,  50 => 8,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "package/_checkout_detail.html.twig", "/var/www/pbstudio/releases/81/templates/package/_checkout_detail.html.twig");
    }
}
