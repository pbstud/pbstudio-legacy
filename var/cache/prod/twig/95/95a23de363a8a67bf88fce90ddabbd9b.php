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

/* mail/reservation/cancellation.html.twig */
class __TwigTemplate_db5a586188ae4b0872cf1635a66a3730 extends Template
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
        $this->parent = $this->loadTemplate("mail/layout.html.twig", "mail/reservation/cancellation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <tr>
        <td align=\"center\" style=\"font-family:arial,sans-serif; color:#67ccbb; font-size:30px; text-align:center; text-transform:uppercase; font-weight:100\">
            Reservación Cancelada
        </td>
    </tr>
    <tr>
        <td>
            <table width=\"600px\" style=\"margin:20px;\" class=\"w320\">
                <tr>
                    <td class=\"blockwrap\" style=\"margin-bottom:10px;\">
                        <table width=\"600px\">
                            <tr>
                                <td style=\"font-family:arial,sans-serif; color:#6D6E70; font-size:16px; text-align:center; padding: 10px;\">
                                    <strong>Hola ";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</strong>
                                    <br /><br />

                                    Tu reservación ha sido cancelada correctamente. Esperamos tenerte muy pronto de regreso. ¡Ve por más!
                                    <br /><br /><br /><br />

                                    <strong style=\"color:#67ccbb;\">Detalles de operación:</strong>

                                    <br />

                                    <p><strong>Clase:</strong> ";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["discipline"] ?? null), "html", null, true);
        yield "</p>
                                    <p><strong>Hora:</strong> ";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 28), "h:i a"), "html", null, true);
        yield "</p>
                                    <p><strong>Fecha:</strong> ";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "any", false, false, false, 29), null, "EEEE d 'de' MMMM"), "html", null, true);
        yield "</p>
                                    <p><strong>Instructor:</strong> ";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["instructor"] ?? null), "profile", [], "any", false, false, false, 30), "firstname", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                                    <p><strong>Fecha de cancelación:</strong> ";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "cancellationAt", [], "any", false, false, false, 31), null, "EEEE d 'de' MMMM"), "html", null, true);
        yield "</p>
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
        return "mail/reservation/cancellation.html.twig";
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
        return array (  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  66 => 17,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/reservation/cancellation.html.twig", "/var/www/pbstudio/releases/81/templates/mail/reservation/cancellation.html.twig");
    }
}
