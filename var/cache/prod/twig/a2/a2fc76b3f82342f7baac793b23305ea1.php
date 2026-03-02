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

/* backend/default/partials/pagination.html.twig */
class __TwigTemplate_73228908edb2e85a9763185f0d04ac11 extends Template
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
        yield "<div class=\"row\">
    <div class=\"col-sm-5\">
        <div class=\"pagination_info\">
            Mostrando ";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["firstItemNumber"] ?? null), "html", null, true);
        yield " - ";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["lastItemNumber"] ?? null), "html", null, true);
        yield " de ";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["totalCount"] ?? null), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"col-sm-7\">
        <div class=\"pagination_numbers pull-right\">
            ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/pagination/bootstrap_v3_pagination.html.twig");
        yield "
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/partials/pagination.html.twig";
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
        return array (  56 => 10,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/partials/pagination.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/partials/pagination.html.twig");
    }
}
