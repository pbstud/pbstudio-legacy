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

/* backend/user/stats.html.twig */
class __TwigTemplate_7f3114589536ec690f6d667be2adbc77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/layout-ajax.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/layout-ajax.html.twig", "backend/user/stats.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <table class=\"table-user-stats\">
        <tr>
            <td>Disponibles:</td>
            <td>";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["sessions_available"] ?? null), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td>Tomadas:</td>
            <td>";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["sessions_used"] ?? null), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td>Proximas:</td>
            <td>";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["reserved_sessions"] ?? null), "html", null, true);
        yield "</td>
        </tr>
    </table>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/stats.html.twig";
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
        return array (  70 => 15,  63 => 11,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/stats.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/stats.html.twig");
    }
}
