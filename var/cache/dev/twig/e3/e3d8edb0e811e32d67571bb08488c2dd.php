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

/* profile/reservation_cancel.html.twig */
class __TwigTemplate_23cf88df1c6b09c6c3161751ba5367ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/reservation_cancel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/reservation_cancel.html.twig"));

        // line 1
        $context["reserveClass"] = Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter((isset($context["discipline"]) || array_key_exists("discipline", $context) ? $context["discipline"] : (function () { throw new RuntimeError('Variable "discipline" does not exist.', 1, $this->source); })()), [" " => "-"]));
        // line 2
        yield "
<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"center\">
            <h4>¿Deseas cancelar esta clase?</h4>
            <small>*Recuerda cancelar máximo ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["time_to_cancel"]) || array_key_exists("time_to_cancel", $context) ? $context["time_to_cancel"] : (function () { throw new RuntimeError('Variable "time_to_cancel" does not exist.', 9, $this->source); })()), "html", null, true);
        yield " horas antes de la clase reservada</small>
        </div>

        <div class=\"clearfix class_pop ";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12))), "html", null, true);
        yield "\">
            <div class=\"grid-1-6 right reserve-";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["reserveClass"]) || array_key_exists("reserveClass", $context) ? $context["reserveClass"] : (function () { throw new RuntimeError('Variable "reserveClass" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
                <div id=\"place_container\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 15, $this->source); })()), "exerciseRoomCapacity", [], "any", false, false, false, 15)));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 16
            yield "                        ";
            $context["class_active"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 16, $this->source); })()), "placeNumber", [], "any", false, false, false, 16) == $context["place"])) ? ("active") : (""));
            // line 17
            yield "                        ";
            $context["class_engaged"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["reservations"] ?? null), $context["place"], [], "array", true, true, false, 17) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "placeNumber", [], "any", false, false, false, 17) != $context["place"]))) ? ("engaged") : (""));
            // line 18
            yield "                        ";
            $context["class_not_available"] = ((CoreExtension::inFilter($context["place"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "placesNotAvailable", [], "any", false, false, false, 18))) ? ("not-available") : (""));
            // line 19
            yield "
                        <span class=\"place ";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_active"]) || array_key_exists("class_active", $context) ? $context["class_active"] : (function () { throw new RuntimeError('Variable "class_active" does not exist.', 20, $this->source); })()), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_engaged"]) || array_key_exists("class_engaged", $context) ? $context["class_engaged"] : (function () { throw new RuntimeError('Variable "class_engaged" does not exist.', 20, $this->source); })()), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_not_available"]) || array_key_exists("class_not_available", $context) ? $context["class_not_available"] : (function () { throw new RuntimeError('Variable "class_not_available" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "\" data-place=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "\">
                            <p>";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "</p>
                        </span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "                </div>
            </div>

            <div class=\"grid-1-6 right reserve-";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["reserveClass"]) || array_key_exists("reserveClass", $context) ? $context["reserveClass"] : (function () { throw new RuntimeError('Variable "reserveClass" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\">
                <div class=\"class ";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["reserveClass"]) || array_key_exists("reserveClass", $context) ? $context["reserveClass"] : (function () { throw new RuntimeError('Variable "reserveClass" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">
                    <span class=\"icon-";
        // line 29
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 29, $this->source); })()), "individual", [], "any", false, false, false, 29)) ? ("individual") : ("group"));
        yield "\"></span>
                    <h6>";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["discipline"]) || array_key_exists("discipline", $context) ? $context["discipline"] : (function () { throw new RuntimeError('Variable "discipline" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</h6>
                    <p>";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 31, $this->source); })()), "timeStart", [], "any", false, false, false, 31), "h:i a"), "html", null, true);
        yield "</p>
                    <p><strong>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "instructor", [], "any", false, false, false, 32), "profile", [], "any", false, false, false, 32), "firstname", [], "any", false, false, false, 32), "html", null, true);
        yield "</strong></p>
                </div>
                <p><small><b>Día:</b> ";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 34, $this->source); })()), "dateStart", [], "any", false, false, false, 34), "d/m/y"), "html", null, true);
        yield "</small></p>
            </div>
        </div>

        <a id=\"btn-reservation-cancel\" href=\"#\" data-url=\"";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" class=\"btn btn-submit\">Cancelar reservación</a>
    </div>
</section>

<script>
    reservationCancelInit();
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/reservation_cancel.html.twig";
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
        return array (  142 => 38,  135 => 34,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  105 => 24,  96 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  70 => 15,  65 => 13,  61 => 12,  55 => 9,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set reserveClass = discipline|replace({' ': '-'})|lower %}

<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"center\">
            <h4>¿Deseas cancelar esta clase?</h4>
            <small>*Recuerda cancelar máximo {{ time_to_cancel }} horas antes de la clase reservada</small>
        </div>

        <div class=\"clearfix class_pop {{ session.type|PackageSessionType|lower }}\">
            <div class=\"grid-1-6 right reserve-{{ reserveClass }}\">
                <div id=\"place_container\">
                    {% for place in 1..session.exerciseRoomCapacity %}
                        {% set class_active = reservation.placeNumber == place  ? 'active' : '' %}
                        {% set class_engaged = reservations[place] is defined and reservation.placeNumber != place  ? 'engaged' : '' %}
                        {% set class_not_available = place in session.placesNotAvailable ? 'not-available' : '' %}

                        <span class=\"place {{ class_active }} {{ class_engaged }} {{ class_not_available }}\" data-place=\"{{ place }}\">
                            <p>{{ place }}</p>
                        </span>
                    {% endfor %}
                </div>
            </div>

            <div class=\"grid-1-6 right reserve-{{ reserveClass }}\">
                <div class=\"class {{ reserveClass }}\">
                    <span class=\"icon-{{  session.individual ? 'individual' : 'group' }}\"></span>
                    <h6>{{ discipline }}</h6>
                    <p>{{ session.timeStart|date('h:i a') }}</p>
                    <p><strong>{{ session.instructor.profile.firstname }}</strong></p>
                </div>
                <p><small><b>Día:</b> {{ session.dateStart|date('d/m/y') }}</small></p>
            </div>
        </div>

        <a id=\"btn-reservation-cancel\" href=\"#\" data-url=\"{{ path('reservation_cancel', { 'id': reservation.id }) }}\" class=\"btn btn-submit\">Cancelar reservación</a>
    </div>
</section>

<script>
    reservationCancelInit();
</script>", "profile/reservation_cancel.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\reservation_cancel.html.twig");
    }
}
