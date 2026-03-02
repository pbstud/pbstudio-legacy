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

/* mail/welcome.html.twig */
class __TwigTemplate_35da449701cbadac51e14402b8542f94 extends Template
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
        $this->parent = $this->loadTemplate("mail/layout.html.twig", "mail/welcome.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <tr>
        <td align=\"center\" style=\"font-family:arial,sans-serif; color:#67ccbb; font-size:30px; text-align:center; text-transform:uppercase; font-weight:100\">
            Bienvenido a P&B Studio
        </td>
    </tr>
    <tr>
        <td>
            <table width=\"600px\" style=\"margin:20px;\" class=\"w320\">
                <tr>
                    <td class=\"blockwrap\" style=\"margin-bottom:10px;\">
                        <table>
                            <tr>
                                <td style=\"font-family:arial,sans-serif; color:#6D6E70; font-size:16px; text-align:center; padding: 10px;\">
                                    Hola <strong>";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user"] ?? null), "html", null, true);
        yield "</strong>,
                                    <br /><br />

                                    ¡Gracias por registrarte con P&B Studio!
                                    <br /><br />
                                </td>
                            </tr>
                        </table>
                    </td>
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
        return "mail/welcome.html.twig";
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
        return array (  66 => 17,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/welcome.html.twig", "/var/www/pbstudio/releases/81/templates/mail/welcome.html.twig");
    }
}
