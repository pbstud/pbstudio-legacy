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
class __TwigTemplate_f0d9114f9eb373139c3df3fdd2d5008f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/contact-mail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/contact-mail.html.twig"));

        $this->parent = $this->loadTemplate("mail/layout.html.twig", "mail/contact-mail.html.twig", 1);
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
        <td>
            <table width=\"100%\" style=\"margin: 20px\">
                <tr>
                    <td><strong>Nombre:</strong></td>
                    <td>";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><strong>Teléfono:</strong></td>
                    <td>";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "</td>
                </tr>
                <tr valign=\"top\">
                    <td><strong>Mensaje:</strong></td>
                    <td>";
        // line 21
        yield Twig\Extension\CoreExtension::nl2br(Twig\Extension\EscaperExtension::escape($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 21, $this->source); })()), "html", null, true));
        yield "</td>
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
        return array (  97 => 21,  90 => 17,  83 => 13,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'mail/layout.html.twig' %}

{% block body %}
    <tr>
        <td>
            <table width=\"100%\" style=\"margin: 20px\">
                <tr>
                    <td><strong>Nombre:</strong></td>
                    <td>{{ name }}</td>
                </tr>
                <tr>
                    <td><strong>Teléfono:</strong></td>
                    <td>{{ phone }}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{ from }}</td>
                </tr>
                <tr valign=\"top\">
                    <td><strong>Mensaje:</strong></td>
                    <td>{{ message|nl2br }}</td>
                </tr>
            </table>
        </td>
    </tr>
{% endblock %}
", "mail/contact-mail.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\mail\\contact-mail.html.twig");
    }
}
