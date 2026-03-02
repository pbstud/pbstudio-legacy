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

/* mail/reservation/confirmation.html.twig */
class __TwigTemplate_f554e521da411a1c852a555df294e1b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/reservation/confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/reservation/confirmation.html.twig"));

        $this->parent = $this->loadTemplate("mail/layout.html.twig", "mail/reservation/confirmation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <tr>
        <td align=\"center\" style=\"font-family:arial,sans-serif; color:#67ccbb; font-size:30px; text-align:center; text-transform:uppercase; font-weight:100\">
            Confirmación de reservación
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</strong>
                                    <br /><br />

                                    Tu reservación ha sido registrada correctamente. ¡Ve por más!
                                    <br /><br />

                                    <p style=\"color:#AFAFB1; font-size: 0.85em; margin: 0;\">
                                        *Recuerda que podrás cancelar máximo 12 horas antes de la clase reservada si es
                                        grupal o cancelar máximo 24 horas antes de la clase reservada si es privada.
                                    </p>
                                    <br /><br /><br />

                                    <strong style=\"color:#67ccbb;\">Detalles de operación:</strong>

                                    <br />

                                    <p><strong>Clase:</strong> ";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["discipline"]) || array_key_exists("discipline", $context) ? $context["discipline"] : (function () { throw new RuntimeError('Variable "discipline" does not exist.', 33, $this->source); })()), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33)), "html", null, true);
        yield "</p>
                                    <p><strong>Hora:</strong> ";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 34, $this->source); })()), "timeStart", [], "any", false, false, false, 34), "h:i a"), "html", null, true);
        yield "</p>
                                    <p><strong>Fecha:</strong> ";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "dateStart", [], "any", false, false, false, 35), null, "EEEE d 'de' MMMM"), "html", null, true);
        yield "</p>
                                    <p><strong>Instructor:</strong> ";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 36, $this->source); })()), "profile", [], "any", false, false, false, 36), "firstname", [], "any", false, false, false, 36), "html", null, true);
        yield "</p>
                                    <p><strong>Camilla/Silla:</strong> ";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "placeNumber", [], "any", false, false, false, 37), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mail/reservation/confirmation.html.twig";
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
        return array (  121 => 37,  117 => 36,  113 => 35,  109 => 34,  103 => 33,  84 => 17,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'mail/layout.html.twig' %}

{% block body %}
    <tr>
        <td align=\"center\" style=\"font-family:arial,sans-serif; color:#67ccbb; font-size:30px; text-align:center; text-transform:uppercase; font-weight:100\">
            Confirmación de reservación
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
                                    <strong>Hola {{ user.name }}</strong>
                                    <br /><br />

                                    Tu reservación ha sido registrada correctamente. ¡Ve por más!
                                    <br /><br />

                                    <p style=\"color:#AFAFB1; font-size: 0.85em; margin: 0;\">
                                        *Recuerda que podrás cancelar máximo 12 horas antes de la clase reservada si es
                                        grupal o cancelar máximo 24 horas antes de la clase reservada si es privada.
                                    </p>
                                    <br /><br /><br />

                                    <strong style=\"color:#67ccbb;\">Detalles de operación:</strong>

                                    <br />

                                    <p><strong>Clase:</strong> {{ discipline }} {{ session.type|PackageSessionType }}</p>
                                    <p><strong>Hora:</strong> {{ session.timeStart|date('h:i a') }}</p>
                                    <p><strong>Fecha:</strong> {{ session.dateStart|format_date(null, \"EEEE d 'de' MMMM\") }}</p>
                                    <p><strong>Instructor:</strong> {{ instructor.profile.firstname }}</p>
                                    <p><strong>Camilla/Silla:</strong> {{ reservation.placeNumber }}</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
{% endblock %}
", "mail/reservation/confirmation.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\mail\\reservation\\confirmation.html.twig");
    }
}
