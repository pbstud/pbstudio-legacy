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
class __TwigTemplate_62a42e571df26818b86f45f94ed28f18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/_checkout_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/_checkout_detail.html.twig"));

        // line 1
        yield "<div class=\"grid-1-4 right\">
    <h4>
        Tu compra<small>(Vigencia ";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 3, $this->source); })()), "daysExpiry", [], "any", false, false, false, 3), "html", null, true);
        yield " días)</small>
    </h4>
    <div class=\"price\">
        <a href=\"#\">
            <div>
                ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 8, $this->source); })()), "discountInfo", [], "any", false, false, false, 8)) {
            // line 9
            yield "                    <i class=\"discount\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 9, $this->source); })()), "discountInfo", [], "any", false, false, false, 9), "html", null, true);
            yield "</i>
                ";
        }
        // line 11
        yield "                <p>
                    ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 12, $this->source); })()), "isUnlimited", [], "any", false, false, false, 12)) {
            // line 13
            yield "                        &infin;
                    ";
        } else {
            // line 15
            yield "                        ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 15, $this->source); })()), "totalClasses", [], "any", false, false, false, 15), "html", null, true);
            yield "
                    ";
        }
        // line 17
        yield "                </p>
            </div>
            <h6 class=\"";
        // line 19
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 19, $this->source); })()), "specialPrice", [], "any", false, false, false, 19)) ? ("old-price") : (""));
        yield "\">
                <small>Clase ";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20)), "html", null, true);
        yield "</small>
                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 21, $this->source); })()), "altText", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    <br><small>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 22, $this->source); })()), "altText", [], "any", false, false, false, 22), "html", null, true);
            yield "</small>
                ";
        }
        // line 24
        yield "                <br>
                \$";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 25, $this->source); })()), "amount", [], "any", false, false, false, 25)), "html", null, true);
        yield "
            </h6>
            ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 27, $this->source); })()), "specialPrice", [], "any", false, false, false, 27)) {
            // line 28
            yield "                <h5 class=\"new-price\">\$";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 28, $this->source); })()), "specialPrice", [], "any", false, false, false, 28)), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  122 => 35,  115 => 30,  109 => 28,  107 => 27,  102 => 25,  99 => 24,  93 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 17,  73 => 15,  69 => 13,  67 => 12,  64 => 11,  58 => 9,  56 => 8,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grid-1-4 right\">
    <h4>
        Tu compra<small>(Vigencia {{ package.daysExpiry }} días)</small>
    </h4>
    <div class=\"price\">
        <a href=\"#\">
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
                <small>Clase {{ package.type|PackageSessionType }}</small>
                {% if package.altText %}
                    <br><small>{{ package.altText }}</small>
                {% endif %}
                <br>
                \${{ package.amount | number_format }}
            </h6>
            {% if package.specialPrice %}
                <h5 class=\"new-price\">\${{ package.specialPrice|number_format }}</h5>
            {% endif %}
        </a>
    </div>
    <p>
        <small>
            Consulta
            <a href=\"{{ path('package_index') }}\" data-remodal-action=\"close\">otros paquetes</a>
        </small>
    </p>
</div>", "package/_checkout_detail.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\package\\_checkout_detail.html.twig");
    }
}
