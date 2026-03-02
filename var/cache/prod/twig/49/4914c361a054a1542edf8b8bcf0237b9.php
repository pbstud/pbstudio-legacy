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

/* mail/contact-mail.html.twig */
class __TwigTemplate_f16808e6b067c7674866443971b3c723 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "mail/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("mail/layout.html.twig", "mail/contact-mail.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <tr>
        <td>
            <table width=\"100%\" style=\"margin: 20px\">
                <tr>
                    <td><strong>Nombre:</strong></td>
                    <td>";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["name"] ?? null), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><strong>Teléfono:</strong></td>
                    <td>";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["phone"] ?? null), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["from"] ?? null), "html", null, true);
        yield "</td>
                </tr>
                <tr valign=\"top\">
                    <td><strong>Mensaje:</strong></td>
                    <td>";
        // line 21
        yield Twig\Extension\CoreExtension::nl2br(Twig\Extension\EscaperExtension::escape($this->env, ($context["message"] ?? null), "html", null, true));
        yield "</td>
                </tr>
            </table>
        </td>
    </tr>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mail/contact-mail.html.twig";
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
        return array (  79 => 21,  72 => 17,  65 => 13,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/contact-mail.html.twig", "/var/www/pbstudio/releases/81/templates/mail/contact-mail.html.twig");
    }
}
