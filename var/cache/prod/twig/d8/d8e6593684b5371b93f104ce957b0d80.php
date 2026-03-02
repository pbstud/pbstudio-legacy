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

/* backend/default/sidebar.html.twig */
class __TwigTemplate_2776f52e259991617b816cf4328759ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KnpMenu/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@KnpMenu/menu.html.twig", "backend/default/sidebar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "extra", ["icon", false], "method", false, false, false, 4);
        // line 5
        if (($context["icon"] ?? null)) {
            // line 6
            yield "<i class=\"fa fa-";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["icon"] ?? null), "html", null, true);
            yield "\"></i>";
        }
        // line 8
        yield from $this->yieldParentBlock("label", $context, $blocks);
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 9) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 9))) {
            // line 10
            yield "<span class=\"fa fa-chevron-down\"></span>";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/sidebar.html.twig";
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
        return array (  64 => 10,  62 => 9,  60 => 8,  55 => 6,  53 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/sidebar.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/sidebar.html.twig");
    }
}
