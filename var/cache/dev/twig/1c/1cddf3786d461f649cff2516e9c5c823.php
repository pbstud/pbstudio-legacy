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

/* backend/security/login.html.twig */
class __TwigTemplate_38bcfabdc209567414396b33c5237202 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/security/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/security/login.html.twig"));

        $this->parent = $this->loadTemplate("backend/security/layout.html.twig", "backend/security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Iniciar Sesión";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div>
        <div class=\"login_wrapper\">
            <div class=\"animate form login_form\">
                <section class=\"login_content\">
                    <form method=\"post\" class=\"form-horizontal\">
                        <h1>P&B Studio</h1>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"username\" autocomplete=\"username\" required autofocus>
                                <span class=\"fa fa-user form-control-feedback right\"></span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12\">
                                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" autocomplete=\"current-password\" required>
                                <span class=\"fa fa-key form-control-feedback right\"></span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12 text-left\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\" checked>
                                    Recordar
                                </label>
                            </div>
                        </div>

                        ";
        // line 36
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })())) {
            // line 37
            yield "                            <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
                                ";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "messageKey", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "messageData", [], "any", false, false, false, 38), "security"), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 41
        yield "
                        <div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-default\">Iniciar Sesión</button>
                        </div>

                        <div class=\"clearfix\"></div>

                        <div class=\"separator\">
                            <div>
                                <p>&copy; ";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y"), "html", null, true);
        yield " Todos los derechos reservados</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
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
        return "backend/security/login.html.twig";
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
        return array (  151 => 51,  140 => 43,  136 => 41,  130 => 38,  127 => 37,  125 => 36,  101 => 15,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/security/layout.html.twig' %}

{% block title %}Iniciar Sesión{% endblock %}

{% block body %}
    <div>
        <div class=\"login_wrapper\">
            <div class=\"animate form login_form\">
                <section class=\"login_content\">
                    <form method=\"post\" class=\"form-horizontal\">
                        <h1>P&B Studio</h1>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"username\" autocomplete=\"username\" required autofocus>
                                <span class=\"fa fa-user form-control-feedback right\"></span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12\">
                                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" autocomplete=\"current-password\" required>
                                <span class=\"fa fa-key form-control-feedback right\"></span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12 text-left\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\" checked>
                                    Recordar
                                </label>
                            </div>
                        </div>

                        {% if error %}
                            <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}

                        <div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            <button type=\"submit\" class=\"btn btn-default\">Iniciar Sesión</button>
                        </div>

                        <div class=\"clearfix\"></div>

                        <div class=\"separator\">
                            <div>
                                <p>&copy; {{ 'now'|date('Y') }} Todos los derechos reservados</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
{% endblock %}
", "backend/security/login.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\security\\login.html.twig");
    }
}
