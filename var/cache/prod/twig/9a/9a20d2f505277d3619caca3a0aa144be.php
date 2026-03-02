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

/* backend/default/_btn_save.html.twig */
class __TwigTemplate_3d1ac0c63d5223dba6d6127926baa285 extends Template
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
    <div class=\"col-xs-12\">
        <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary btn-submit\">
                ";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["button_label"] ?? null), "btn.save")) : ("btn.save"))), "html", null, true);
        yield "
            </button>
        </div>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/_btn_save.html.twig";
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
        return array (  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/_btn_save.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/_btn_save.html.twig");
    }
}
