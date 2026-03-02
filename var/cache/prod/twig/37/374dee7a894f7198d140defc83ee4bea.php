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

/* default/_modal_notice.html.twig */
class __TwigTemplate_c26d6bf85d22a89be901d34562147572 extends Template
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
        yield "<div class=\"remodal remodal-notice\" data-remodal-id=\"modal-notice\" data-remodal-options=\"hashTracking:false,closeOnEscape: false,closeOnOutsideClick: false\">
    <section class=\"pop_box\">
        <div class=\"row clearfix\">
            <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>
            <div class=\"center\">
                ";
        // line 6
        if (($context["url"] ?? null)) {
            // line 7
            yield "                    <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\"><img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["image"] ?? null), "file")), "html", null, true);
            yield "\" alt=\"Aviso\"></a>
                ";
        } else {
            // line 9
            yield "                    <img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["image"] ?? null), "file")), "html", null, true);
            yield "\" alt=\"Aviso\">
                ";
        }
        // line 11
        yield "            </div>
        </div>
    </section>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/_modal_notice.html.twig";
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
        return array (  61 => 11,  55 => 9,  47 => 7,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_modal_notice.html.twig", "/var/www/pbstudio/releases/81/templates/default/_modal_notice.html.twig");
    }
}
