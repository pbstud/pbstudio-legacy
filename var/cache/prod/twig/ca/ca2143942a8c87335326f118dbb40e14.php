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

/* backend/default/_card.html.twig */
class __TwigTemplate_00563c3c948f43fa534ad4e5be4af5e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("col", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["col"] ?? null), "col-md-12")) : ("col-md-12")), "html", null, true);
        yield "\">
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h2>
            <div class=\"clearfix\"></div>
        </div>

        <div class=\"x_content\">
            ";
        // line 9
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 10
        yield "        </div>

        <div class=\"clearfix\"></div>
    </div>
</div>";
        return; yield '';
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/_card.html.twig";
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
        return array (  65 => 9,  56 => 10,  54 => 9,  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/_card.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/_card.html.twig");
    }
}
