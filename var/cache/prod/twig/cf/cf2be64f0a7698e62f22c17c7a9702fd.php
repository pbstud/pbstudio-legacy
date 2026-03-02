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

/* backend/default/_card_dates.html.twig */
class __TwigTemplate_00af0dd859a895b1f29031e80273022a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield from         $this->loadTemplate("backend/default/_card_dates.html.twig", "backend/default/_card_dates.html.twig", 1, "1935210634")->unwrap()->yield(CoreExtension::arrayMerge($context, ["title" => "Fechas", "col" => ((array_key_exists("col", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["col"] ?? null), null)) : (null))]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/_card_dates.html.twig";
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
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/_card_dates.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/_card_dates.html.twig");
    }
}


/* backend/default/_card_dates.html.twig */
class __TwigTemplate_00af0dd859a895b1f29031e80273022a___1935210634 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/_card_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/_card_table.html.twig", "backend/default/_card_dates.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "        <tr>
            <th>";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.created_at"), "html", null, true);
        yield "</th>
            <td>";
        // line 5
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "createdAt", [], "any", false, false, false, 5)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "createdAt", [], "any", false, false, false, 5), "d/m/Y H:i:s"), "html", null, true)) : (yield "--"));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.updated_at"), "html", null, true);
        yield "</th>
            <td>";
        // line 9
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "updatedAt", [], "any", false, false, false, 9)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "updatedAt", [], "any", false, false, false, 9), "d/m/Y H:i:s"), "html", null, true)) : (yield "--"));
        yield "</td>
        </tr>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/_card_dates.html.twig";
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
        return array (  124 => 9,  120 => 8,  114 => 5,  110 => 4,  107 => 3,  103 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/_card_dates.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/_card_dates.html.twig");
    }
}
