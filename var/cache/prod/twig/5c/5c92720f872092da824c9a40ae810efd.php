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

/* profile/layout.html.twig */
class __TwigTemplate_721737e62cdc5b776b6c9c626c19e75a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'account_content' => [$this, 'block_account_content'],
            'account_aside_content' => [$this, 'block_account_aside_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "profile/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <section class=\"profile\">
        <div class=\"row\">
            <div class=\"content\">
                <h1><span>¡Hola! </span>";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
                ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "get", ["_route"], "method", false, false, false, 8) != "profile")) {
            // line 9
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            yield "\" class=\"link\">
                        <span class=\"icon-individual\"></span>Regresar a mi perfil
                    </a>
                ";
        }
        // line 13
        yield "
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ProfileController::resume"));
        yield "

                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn reserve-class-toggle\">Reservar clase</a>

                <hr/>
                <a id=\"section-content\" class=\"hidden\">";
        // line 19
        yield from         $this->unwrap()->yieldBlock("page_title", $context, $blocks);
        yield "</a>
            </div>
        </div>

        ";
        // line 23
        yield from $this->unwrap()->yieldBlock('account_content', $context, $blocks);
        // line 25
        yield "    </section>

    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('account_aside_content', $context, $blocks);
        return; yield '';
    }

    // line 23
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 27
    public function block_account_aside_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/layout.html.twig";
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
        return array (  112 => 27,  104 => 23,  99 => 27,  95 => 25,  93 => 23,  86 => 19,  80 => 16,  75 => 14,  72 => 13,  64 => 9,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/layout.html.twig", "/var/www/pbstudio/releases/81/templates/profile/layout.html.twig");
    }
}
