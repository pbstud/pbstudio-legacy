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

/* base.html.twig */
class __TwigTemplate_4174ea0417a2bfd10b4764bdd8cb198c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
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
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "Pilates y Barra | P&amp;B Studio</title>

    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-60x60.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-72x72.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-76x76.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-57x57.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-114x114.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-120x120.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-144x144.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-152x152.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/apple-icon-180x180.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/android-icon-192x192.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/favicon-32x32.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/favicon-96x96.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/favicon-16x16.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" href=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/favicon.ico"), "html", null, true);
        yield "\">
    <link rel=\"manifest\" href=\"";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/manifest.json"), "html", null, true);
        yield "\">

    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap\" rel=\"stylesheet\">

    ";
        // line 33
        yield $this->env->getRuntime('App\Twig\Runtime\ConfigExtensionRuntime')->getHeaderScripts();
        yield "
</head>
<body>
";
        // line 36
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 37
        yield "
<div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking:false,closeOnEscape: false,closeOnOutsideClick: false\"></div>
<div class=\"hide\" id=\"modal-loading\">
    <div class=\"processing\"><img src=\"";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loader.gif"), "html", null, true);
        yield "\" alt=\"Procesando\"></div>
</div>

<div class=\"off-canvas\" id=\"select-branch-menu\">
    <div class=\"container\">
        <div class=\"close-off-canvas\">
            <a href=\"#\" class=\"reserve-class-toggle\">
                <span></span>
            </a>
        </div>
        <h6>Selecciona una sucursal</h6>
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BranchOfficeController::all"));
        yield "
    </div>
</div>

";
        // line 55
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 58
        yield "
";
        // line 59
        yield $this->env->getRuntime('App\Twig\Runtime\ConfigExtensionRuntime')->getFooterScripts();
        yield "
</body>
</html>
";
        return; yield '';
    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        return; yield '';
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  203 => 56,  199 => 55,  192 => 36,  184 => 28,  180 => 27,  173 => 9,  164 => 59,  161 => 58,  159 => 55,  152 => 51,  138 => 40,  133 => 37,  131 => 36,  125 => 33,  120 => 30,  118 => 27,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  52 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/pbstudio/releases/81/templates/base.html.twig");
    }
}
