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

/* profile/waiting_list.html.twig */
class __TwigTemplate_eaf01aa55cb7ba22ff1de236a5e5b99d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/waiting_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/waiting_list.html.twig"));

        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/waiting_list.html.twig", 1);
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

        yield "Lista de espera | ";
        
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
        yield "    <div class=\"row\">
        <div class=\"content wait\">
            <h2>Clases en lista de espera</h2>

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["waitingList"]) || array_key_exists("waitingList", $context) ? $context["waitingList"] : (function () { throw new RuntimeError('Variable "waitingList" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            yield "                ";
            // line 12
            yield "                ";
            $context["session"] = CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "session", [], "any", false, false, false, 12);
            // line 13
            yield "
                <div class=\"clearfix\">
                    <div class=\"reserv_class clearfix\">
                        <div class=\"class\">
                            <img src=\"";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/wait.png"), "html", null, true);
            yield "\">
                            <p>En lista de espera</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Clase: </b>";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 21, $this->source); })()), "discipline", [], "any", false, false, false, 21), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21)), "html", null, true);
            yield "</p>
                            <p><b>Día: </b>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 22, $this->source); })()), "dateStart", [], "method", false, false, false, 22), null, "EEEE d 'de' MMMM"), "html", null, true);
            yield "</p>
                            <p><b>Hora: </b>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 23, $this->source); })()), "timeStart", [], "any", false, false, false, 23), "h:i a"), "html", null, true);
            yield "</p>
                            <p><b>Instructor: </b>";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "instructor", [], "any", false, false, false, 24), "profile", [], "any", false, false, false, 24), "firstname", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
                            <a href=\"";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("waiting_list_remove", ["sessionId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"link waiting-list-remove\">
                                Borrar de lista de espera
                            </a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            yield "                <div class=\"reserv_class clearfix\">
                    <p>Sin registros por mostrar</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
            <a href=\"";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "branchOffice", [], "any", false, false, false, 37), "slug", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" class=\"btn\">Reservar clase</a>
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
        return "profile/waiting_list.html.twig";
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
        return array (  161 => 37,  158 => 36,  149 => 32,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  119 => 21,  112 => 17,  106 => 13,  103 => 12,  101 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile/layout.html.twig' %}

{% block page_title %}Lista de espera | {% endblock %}

{% block account_content %}
    <div class=\"row\">
        <div class=\"content wait\">
            <h2>Clases en lista de espera</h2>

            {% for entity in waitingList %}
                {# entity \\App\\Entity\\WaitingList #}
                {% set session = entity.session %}

                <div class=\"clearfix\">
                    <div class=\"reserv_class clearfix\">
                        <div class=\"class\">
                            <img src=\"{{ asset('images/wait.png') }}\">
                            <p>En lista de espera</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Clase: </b>{{ session.discipline }} {{ session.type|PackageSessionType }}</p>
                            <p><b>Día: </b>{{ session.dateStart()|format_date(null, \"EEEE d 'de' MMMM\") }}</p>
                            <p><b>Hora: </b>{{ session.timeStart|date('h:i a') }}</p>
                            <p><b>Instructor: </b>{{ session.instructor.profile.firstname }}</p>
                            <a href=\"{{ path('waiting_list_remove', { 'sessionId': session.id }) }}\" class=\"link waiting-list-remove\">
                                Borrar de lista de espera
                            </a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"reserv_class clearfix\">
                    <p>Sin registros por mostrar</p>
                </div>
            {% endfor %}

            <a href=\"{{ path('reservation_calendar', {'slug': app.user.branchOffice.slug}) }}\" class=\"btn\">Reservar clase</a>
        </div>
    </div>
{% endblock %}
", "profile/waiting_list.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\waiting_list.html.twig");
    }
}
