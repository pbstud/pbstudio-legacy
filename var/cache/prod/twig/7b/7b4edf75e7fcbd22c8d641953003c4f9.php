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

/* resetting/check_email_modal.html.twig */
class __TwigTemplate_4d0748d6124892c58150bbad28b3065e extends Template
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
        yield "<div>
    <h5>Recuperar contraseña</h5>
    <p>
        <small>";
        // line 4
        yield Twig\Extension\CoreExtension::nl2br(Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.check_email", ["%tokenLifetime%" => ($context["tokenLifetime"] ?? null)]), "html", null, true));
        yield "</small>
    </p>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "resetting/check_email_modal.html.twig";
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
        return array (  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "resetting/check_email_modal.html.twig", "/var/www/pbstudio/releases/81/templates/resetting/check_email_modal.html.twig");
    }
}
