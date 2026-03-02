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

/* backend/default/_card_table.html.twig */
class __TwigTemplate_8b1b9c3d25e01e745b6a78175a04c31c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("col", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["col"] ?? null), "col-xs-12 col-md-6")) : ("col-xs-12 col-md-6")), "html", null, true);
        yield "\">
    <div class=\"x_panel x_panel_widget\">
        <div class=\"x_title\">
            <h2>";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h2>
            <div class=\"clearfix\"></div>
        </div>

        <div class=\"x_content\">
            <div class=\"table-responsive\">
                <table class=\"table table_inner table-striped\">
                    <tbody>
                    ";
        // line 12
        yield from $this->unwrap()->yieldBlock('tbody', $context, $blocks);
        // line 13
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>";
        return; yield '';
    }

    // line 12
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/_card_table.html.twig";
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
        return array (  69 => 12,  59 => 13,  57 => 12,  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/_card_table.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/_card_table.html.twig");
    }
}
