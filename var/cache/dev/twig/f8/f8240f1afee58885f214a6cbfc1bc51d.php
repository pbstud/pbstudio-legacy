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

/* profile/index.html.twig */
class __TwigTemplate_21a18ee17875ebd90fd1f322f2cccecd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'account_content' => [$this, 'block_account_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "profile/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Mi Cuenta | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "account_content"));

        // line 6
        yield "    ";
        // line 7
        yield "
    ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_aside.html.twig");
        yield "

    ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "profile/_transactions.html.twig");
        yield "

    <div class=\"row\">
        <div class=\"content general\">
            <h4 id=\"perfil\"><small>Datos de usuario</small></h4>
            <div id=\"profile_container\">
                <div>
                    <p> <span class=\"icon-individual\"></span>";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
                <div>
                    <p><span class=\"icon-email\"></span>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                </div>
                <div>
                    <p> <span class=\"icon-phone\"></span>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 23), "-----")) : ("-----")), "html", null, true);
        yield "</p>
                </div>

                <h6><small>Contacto de emergencia</small></h6>
                <p>Nombre: ";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactName", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactName", [], "any", false, false, false, 27), "-----")) : ("-----")), "html", null, true);
        yield "</p>
                <p>Teléfono: ";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactPhone", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactPhone", [], "any", false, false, false, 28), "-----")) : ("-----")), "html", null, true);
        yield "</p>

                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["_fragment" => "section-content"]);
        yield "\" class=\"link\">Editar</a>
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
        return "profile/index.html.twig";
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
        return array (  138 => 30,  133 => 28,  129 => 27,  122 => 23,  116 => 20,  110 => 17,  100 => 10,  95 => 8,  92 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/layout.html.twig' %}

{% block page_title %}Mi Cuenta | {% endblock %}

{% block account_content %}
    {# user \\App\\Entity\\User #}

    {{ include('package/_aside.html.twig') }}

    {{ include('profile/_transactions.html.twig') }}

    <div class=\"row\">
        <div class=\"content general\">
            <h4 id=\"perfil\"><small>Datos de usuario</small></h4>
            <div id=\"profile_container\">
                <div>
                    <p> <span class=\"icon-individual\"></span>{{ user }}</p>
                </div>
                <div>
                    <p><span class=\"icon-email\"></span>{{ user.email }}</p>
                </div>
                <div>
                    <p> <span class=\"icon-phone\"></span>{{ user.phone | default('-----') }}</p>
                </div>

                <h6><small>Contacto de emergencia</small></h6>
                <p>Nombre: {{ user.emergencyContactName | default('-----') }}</p>
                <p>Teléfono: {{ user.emergencyContactPhone | default('-----') }}</p>

                <a href=\"{{ path('profile_edit', {'_fragment': 'section-content'}) }}\" class=\"link\">Editar</a>
            </div>
        </div>
    </div>
{% endblock account_content %}
", "profile/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\index.html.twig");
    }
}
