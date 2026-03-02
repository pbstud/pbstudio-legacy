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

/* backend/default/edit.html.twig */
class __TwigTemplate_cd70357077510a279544deacf622a9be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section' => [$this, 'block_section'],
            'section_title' => [$this, 'block_section_title'],
            'form' => [$this, 'block_form'],
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
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/default/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>";
        // line 8
        yield from $this->unwrap()->yieldBlock('section_title', $context, $blocks);
        yield "</h2>
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"x_content\">
                    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 14
        yield "                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 8
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from         $this->unwrap()->yieldBlock("title", $context, $blocks);
        return; yield '';
    }

    // line 13
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/edit.html.twig";
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
        return array (  88 => 13,  80 => 8,  69 => 14,  67 => 13,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/edit.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/edit.html.twig");
    }
}
