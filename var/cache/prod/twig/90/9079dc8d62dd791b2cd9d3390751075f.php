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

/* backend/default/embed/form_common.html.twig */
class __TwigTemplate_fab5ce2967dd24843881fd7f7d16c61d extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"\">
    ";
        // line 2
        if (array_key_exists("page_section", $context)) {
            // line 3
            yield "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>
                    ";
            // line 6
            if (array_key_exists("return_to", $context)) {
                // line 7
                yield "                        <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["return_to"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-default btn-return-to\">
                            <i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>
                        </a>
                    ";
            }
            // line 11
            yield "                    ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_section"] ?? null), "html", null, true);
            yield "
                </h3>
            </div>
        </div>

        <div class=\"clearfix\"></div>
    ";
        }
        // line 18
        yield "
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_title"] ?? null), "html", null, true);
        yield "</h2>

                    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 26
        yield "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 30
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    // line 25
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/embed/form_common.html.twig";
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
        return array (  109 => 29,  102 => 25,  92 => 30,  90 => 29,  85 => 26,  83 => 25,  78 => 23,  71 => 18,  60 => 11,  52 => 7,  50 => 6,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/embed/form_common.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/embed/form_common.html.twig");
    }
}
