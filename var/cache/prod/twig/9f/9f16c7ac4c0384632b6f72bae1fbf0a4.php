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

/* backend/base.html.twig */
class __TwigTemplate_013e38142e096bc82be38fa08efde3d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " | Administrador P&amp;B Studio</title>

    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
        yield "</head>
<body class=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("body_class", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["body_class"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
";
        // line 16
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 17
        yield "
";
        // line 18
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 21
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Welcome!";
        return; yield '';
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("backend");
        yield "
    ";
        return; yield '';
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("backend");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/base.html.twig";
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
        return array (  111 => 19,  107 => 18,  100 => 16,  92 => 12,  88 => 11,  80 => 9,  73 => 21,  71 => 18,  68 => 17,  66 => 16,  62 => 15,  59 => 14,  57 => 11,  52 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/base.html.twig", "/var/www/pbstudio/releases/81/templates/backend/base.html.twig");
    }
}
