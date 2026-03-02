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

/* profile/_resume.html.twig */
class __TwigTemplate_28eb2377598d3bf87dce531d48ecb27e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_resume.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_resume.html.twig"));

        // line 1
        yield "<div class=\"status clearfix\">
    <a href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_available", ["_fragment" => "section-content"]);
        yield "\">
        ";
        // line 3
        if ((isset($context["free_session"]) || array_key_exists("free_session", $context) ? $context["free_session"] : (function () { throw new RuntimeError('Variable "free_session" does not exist.', 3, $this->source); })())) {
            // line 4
            yield "            ";
            $context["sessions_available"] = ((isset($context["sessions_available"]) || array_key_exists("sessions_available", $context) ? $context["sessions_available"] : (function () { throw new RuntimeError('Variable "sessions_available" does not exist.', 4, $this->source); })()) + 1);
            // line 5
            yield "
            <span class=\"courtesy str\">*Clase de cortesía</span>
        ";
        }
        // line 8
        yield "
        ";
        // line 9
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["unlimited_transactions"]) || array_key_exists("unlimited_transactions", $context) ? $context["unlimited_transactions"] : (function () { throw new RuntimeError('Variable "unlimited_transactions" does not exist.', 9, $this->source); })())) > 0)) {
            // line 10
            yield "            <span class=\"courtesy str\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["unlimited_transactions"]) || array_key_exists("unlimited_transactions", $context) ? $context["unlimited_transactions"] : (function () { throw new RuntimeError('Variable "unlimited_transactions" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 12
                yield "                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "package", [], "any", false, false, false, 12), "altText", [], "any", false, false, false, 12), "html", null, true);
                yield "<br />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "            </span>
        ";
        }
        // line 16
        yield "
        <h3>
            ";
        // line 18
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["unlimited_transactions"]) || array_key_exists("unlimited_transactions", $context) ? $context["unlimited_transactions"] : (function () { throw new RuntimeError('Variable "unlimited_transactions" does not exist.', 18, $this->source); })())) > 0)) {
            // line 19
            yield "                &infin;
            ";
        } else {
            // line 21
            yield "                ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["sessions_available"]) || array_key_exists("sessions_available", $context) ? $context["sessions_available"] : (function () { throw new RuntimeError('Variable "sessions_available" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "
            ";
        }
        // line 23
        yield "
            ";
        // line 24
        if ((isset($context["free_session"]) || array_key_exists("free_session", $context) ? $context["free_session"] : (function () { throw new RuntimeError('Variable "free_session" does not exist.', 24, $this->source); })())) {
            // line 25
            yield "                <span class=\"courtesy icon-gift\"></span>
            ";
        }
        // line 27
        yield "        </h3>
        <p>Clases disponibles<small><span class=\"link\">Ver detalle</span></small></p>
    </a>

    <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_used", ["_fragment" => "section-content"]);
        yield "\">
        <h3>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["sessions_used"]) || array_key_exists("sessions_used", $context) ? $context["sessions_used"] : (function () { throw new RuntimeError('Variable "sessions_used" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "</h3>
        <p>Clases tomadas<small><span class=\"link\">Ver historial</span></small></p>
    </a>

    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserved_sessions", ["_fragment" => "section-content"]);
        yield "\">
        <h3>";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["reserved_sessions"]) || array_key_exists("reserved_sessions", $context) ? $context["reserved_sessions"] : (function () { throw new RuntimeError('Variable "reserved_sessions" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</h3>
        <p>Próximas clases <small><span class=\"link\">Ver reservaciones</span></small></p>
    </a>

    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_waiting_list", ["_fragment" => "section-content"]);
        yield "\">
        <h3>";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["waiting_list"]) || array_key_exists("waiting_list", $context) ? $context["waiting_list"] : (function () { throw new RuntimeError('Variable "waiting_list" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "</h3>
        <p>
            Lista de Espera
            <small><span class=\"link\">Ver lista</span></small>
        </p>
    </a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/_resume.html.twig";
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
        return array (  143 => 42,  139 => 41,  132 => 37,  128 => 36,  121 => 32,  117 => 31,  111 => 27,  107 => 25,  105 => 24,  102 => 23,  96 => 21,  92 => 19,  90 => 18,  86 => 16,  82 => 14,  73 => 12,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  56 => 5,  53 => 4,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"status clearfix\">
    <a href=\"{{ path('sessions_available', {'_fragment': 'section-content'}) }}\">
        {% if free_session %}
            {% set sessions_available = sessions_available + 1 %}

            <span class=\"courtesy str\">*Clase de cortesía</span>
        {% endif %}

        {% if unlimited_transactions|length > 0 %}
            <span class=\"courtesy str\">
                {% for transaction in unlimited_transactions %}
                    {{ transaction.package.altText }}<br />
                {% endfor %}
            </span>
        {% endif %}

        <h3>
            {% if unlimited_transactions|length > 0 %}
                &infin;
            {% else %}
                {{ sessions_available }}
            {% endif %}

            {% if free_session %}
                <span class=\"courtesy icon-gift\"></span>
            {% endif %}
        </h3>
        <p>Clases disponibles<small><span class=\"link\">Ver detalle</span></small></p>
    </a>

    <a href=\"{{ path('sessions_used', {'_fragment': 'section-content'}) }}\">
        <h3>{{ sessions_used }}</h3>
        <p>Clases tomadas<small><span class=\"link\">Ver historial</span></small></p>
    </a>

    <a href=\"{{ path('reserved_sessions', {'_fragment': 'section-content'}) }}\">
        <h3>{{ reserved_sessions }}</h3>
        <p>Próximas clases <small><span class=\"link\">Ver reservaciones</span></small></p>
    </a>

    <a href=\"{{ path('profile_waiting_list', {'_fragment': 'section-content'}) }}\">
        <h3>{{ waiting_list }}</h3>
        <p>
            Lista de Espera
            <small><span class=\"link\">Ver lista</span></small>
        </p>
    </a>
</div>
", "profile/_resume.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\_resume.html.twig");
    }
}
