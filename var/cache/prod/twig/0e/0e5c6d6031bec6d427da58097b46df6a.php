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

/* backend/default/list.html.twig */
class __TwigTemplate_7699df42470de7beb4f2c581c2c9adb6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pagination_filter' => [$this, 'block_pagination_filter'],
            'section' => [$this, 'block_section'],
            'section_title' => [$this, 'block_section_title'],
            'table_thead' => [$this, 'block_table_thead'],
            'table_tbody' => [$this, 'block_table_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/default/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pagination_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (array_key_exists("pagination_filter", $context)) {
            // line 5
            yield "        ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->filter($this->env, ($context["pagination"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_filter"] ?? null), "fields", [], "any", false, false, false, 5), ["reset" => CoreExtension::getAttribute($this->env, $this->source,             // line 6
($context["pagination_filter"] ?? null), "reset", [], "any", false, false, false, 6)]);
            // line 7
            yield "
    ";
        }
        return; yield '';
    }

    // line 11
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        $context["_block_filters"] = ((        $this->unwrap()->hasBlock("filters", $context, $blocks)) ? (        $this->unwrap()->renderBlock("filters", $context, $blocks)) : (""));
        // line 13
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["_block_filters"] ?? null))) {
            // line 14
            yield "        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel x_panel_filters\">
                    <div class=\"x_content\">
                        ";
            // line 18
            yield ($context["_block_filters"] ?? null);
            yield "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 24
        yield "
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>";
        // line 29
        yield from $this->unwrap()->yieldBlock('section_title', $context, $blocks);
        yield "</h2>
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"x_content\">
                    ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "count", [], "any", false, false, false, 34) > 0)) {
            // line 35
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-hover\">
                                <thead class=\"thead-dark\">
                                ";
            // line 38
            yield from $this->unwrap()->yieldBlock('table_thead', $context, $blocks);
            // line 39
            yield "                                </thead>
                                <tbody>
                                ";
            // line 41
            yield from $this->unwrap()->yieldBlock('table_tbody', $context, $blocks);
            // line 42
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 46
            yield "                        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
                    ";
        }
        // line 48
        yield "                </div>

                <div class=\"clearfix\"></div>

                ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "count", [], "any", false, false, false, 52) > 0)) {
            // line 53
            yield "                    <div class=\"x_footer\">
                        ";
            // line 54
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["pagination"] ?? null));
            yield "
                    </div>
                ";
        }
        // line 57
        yield "            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 29
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from         $this->unwrap()->yieldBlock("title", $context, $blocks);
        return; yield '';
    }

    // line 38
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 41
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/list.html.twig";
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
        return array (  176 => 41,  169 => 38,  161 => 29,  153 => 57,  147 => 54,  144 => 53,  142 => 52,  136 => 48,  130 => 46,  124 => 42,  122 => 41,  118 => 39,  116 => 38,  111 => 35,  109 => 34,  101 => 29,  94 => 24,  85 => 18,  79 => 14,  76 => 13,  73 => 12,  69 => 11,  62 => 7,  60 => 6,  58 => 5,  55 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/list.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/list.html.twig");
    }
}
