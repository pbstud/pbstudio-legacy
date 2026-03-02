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

/* backend/default/embed/list_common.html.twig */
class __TwigTemplate_b37c9555be600b5d0c8d464b11728369 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"\">
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_section"] ?? null), "html", null, true);
        yield "</h3>
        </div>

        <div class=\"title_right\">
            ";
        // line 8
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 9
        yield "        </div>
    </div>

    <div class=\"clearfix\"></div>

    ";
        // line 15
        yield "
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 18
        $context["_block"] = ((        $this->unwrap()->hasBlock("body_filters", $context, $blocks)) ? (        $this->unwrap()->renderBlock("body_filters", $context, $blocks)) : (null));
        // line 19
        yield "            ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["_block"] ?? null))) {
            // line 20
            yield "                <div class=\"x_panel x_panel_filters\">
                    <div class=\"x_content\">
                        ";
            // line 22
            yield ($context["_block"] ?? null);
            yield "
                    </div>
                </div>
            ";
        }
        // line 26
        yield "
            <div class=\"dataTables_wrapper\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_title"] ?? null), "html", null, true);
        yield "</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        ";
        // line 34
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 35
        yield "                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"x_footer\">
                        ";
        // line 39
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 40
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 39
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/embed/list_common.html.twig";
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
        return array (  131 => 39,  124 => 34,  117 => 8,  106 => 40,  104 => 39,  98 => 35,  96 => 34,  89 => 30,  83 => 26,  76 => 22,  72 => 20,  69 => 19,  67 => 18,  62 => 15,  55 => 9,  53 => 8,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/embed/list_common.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/embed/list_common.html.twig");
    }
}
