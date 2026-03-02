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

/* profile/reservation_change_session.html.twig */
class __TwigTemplate_f8a23237200dbc269731b0be7c44b277 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/reservation_change_session.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/reservation_change_session.html.twig"));

        // line 1
        yield "<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"center\">
            <h4>¡Cambiar Reservación!</h4>
            <small>Selecciona un lugar</small>
        </div>

        <div class=\"clearfix class_pop ";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10))), "html", null, true);
        yield "\">
            <div class=\"grid-1-6 right reserve-";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["grid_class"]) || array_key_exists("grid_class", $context) ? $context["grid_class"] : (function () { throw new RuntimeError('Variable "grid_class" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\">
                <div id=\"place_container\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 13, $this->source); })()), "exerciseRoomCapacity", [], "any", false, false, false, 13)));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 14
            yield "                        ";
            $context["place_not_available"] = CoreExtension::inFilter($context["place"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 14, $this->source); })()), "placesNotAvailable", [], "any", false, false, false, 14));
            // line 15
            yield "                        ";
            $context["user_reserved_place"] = CoreExtension::inFilter($context["place"], (isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 15, $this->source); })()));
            // line 16
            yield "                        ";
            $context["is_reserved"] = CoreExtension::getAttribute($this->env, $this->source, ($context["reservations"] ?? null), $context["place"], [], "array", true, true, false, 16);
            // line 17
            yield "
                        ";
            // line 18
            $context["html_element"] = ((((isset($context["is_reserved"]) || array_key_exists("is_reserved", $context) ? $context["is_reserved"] : (function () { throw new RuntimeError('Variable "is_reserved" does not exist.', 18, $this->source); })()) || (isset($context["place_not_available"]) || array_key_exists("place_not_available", $context) ? $context["place_not_available"] : (function () { throw new RuntimeError('Variable "place_not_available" does not exist.', 18, $this->source); })()))) ? ("span") : ("a"));
            // line 19
            yield "                        ";
            $context["class_active"] = (((isset($context["user_reserved_place"]) || array_key_exists("user_reserved_place", $context) ? $context["user_reserved_place"] : (function () { throw new RuntimeError('Variable "user_reserved_place" does not exist.', 19, $this->source); })())) ? ("active") : (""));
            // line 20
            yield "                        ";
            $context["class_engaged"] = ((((isset($context["is_reserved"]) || array_key_exists("is_reserved", $context) ? $context["is_reserved"] : (function () { throw new RuntimeError('Variable "is_reserved" does not exist.', 20, $this->source); })()) &&  !(isset($context["user_reserved_place"]) || array_key_exists("user_reserved_place", $context) ? $context["user_reserved_place"] : (function () { throw new RuntimeError('Variable "user_reserved_place" does not exist.', 20, $this->source); })()))) ? ("engaged") : (""));
            // line 21
            yield "                        ";
            $context["class_not_available"] = (((isset($context["place_not_available"]) || array_key_exists("place_not_available", $context) ? $context["place_not_available"] : (function () { throw new RuntimeError('Variable "place_not_available" does not exist.', 21, $this->source); })())) ? ("not-available") : (""));
            // line 22
            yield "
                        <";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["html_element"]) || array_key_exists("html_element", $context) ? $context["html_element"] : (function () { throw new RuntimeError('Variable "html_element" does not exist.', 23, $this->source); })()), "html", null, true);
            yield " class=\"place ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_active"]) || array_key_exists("class_active", $context) ? $context["class_active"] : (function () { throw new RuntimeError('Variable "class_active" does not exist.', 23, $this->source); })()), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_engaged"]) || array_key_exists("class_engaged", $context) ? $context["class_engaged"] : (function () { throw new RuntimeError('Variable "class_engaged" does not exist.', 23, $this->source); })()), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_not_available"]) || array_key_exists("class_not_available", $context) ? $context["class_not_available"] : (function () { throw new RuntimeError('Variable "class_not_available" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "\" data-place=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "\">
                            <p>";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "</p>
                        </";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["html_element"]) || array_key_exists("html_element", $context) ? $context["html_element"] : (function () { throw new RuntimeError('Variable "html_element" does not exist.', 25, $this->source); })()), "html", null, true);
            yield ">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "                </div>
            </div>

            <div class=\"grid-1-6 right reserve-";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["grid_class"]) || array_key_exists("grid_class", $context) ? $context["grid_class"] : (function () { throw new RuntimeError('Variable "grid_class" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "\">
                <div class=\"class ";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter((isset($context["discipline"]) || array_key_exists("discipline", $context) ? $context["discipline"] : (function () { throw new RuntimeError('Variable "discipline" does not exist.', 31, $this->source); })()), [" " => "-"])), "html", null, true);
        yield "\">
                    <span class=\"icon-";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "individual", [], "any", false, false, false, 32)) ? ("individual") : ("group"));
        yield "\"></span>
                    <h6>";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["discipline"]) || array_key_exists("discipline", $context) ? $context["discipline"] : (function () { throw new RuntimeError('Variable "discipline" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "</h6>
                    <p>";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 34, $this->source); })()), "timeStart", [], "any", false, false, false, 34), "h:i a"), "html", null, true);
        yield "</p>
                    <p><strong>";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "instructor", [], "any", false, false, false, 35), "profile", [], "any", false, false, false, 35), "firstname", [], "any", false, false, false, 35), "html", null, true);
        yield "</strong></p>
                </div>
                <p>
                    <small><b>Día:</b> ";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 38, $this->source); })()), "dateStart", [], "any", false, false, false, 38), "d/m/y"), "html", null, true);
        yield "</small>
                </p>
                <p>
                    <small><b>Sucursal:</b> ";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 41, $this->source); })()), "branchOffice", [], "any", false, false, false, 41), "place", [], "any", false, false, false, 41), "html", null, true);
        yield "</small>
                </p>
            </div>
        </div>

        <a href=\"#\" class=\"btn btn-confirm btn-submit\">Confirmar cambio reservación</a>

        <form id=\"frmReservation\" action=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_change_session", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "sessionId" => CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        // line 51
        yield "\" method=\"post\" class=\"m-fjx\">
            <input type=\"hidden\" name=\"place_number\" />
        </form>

    </div>
</section>

<script>
    reservationInit();
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
        return "profile/reservation_change_session.html.twig";
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
        return array (  169 => 51,  167 => 50,  166 => 49,  165 => 48,  155 => 41,  149 => 38,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  118 => 27,  110 => 25,  106 => 24,  94 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  64 => 13,  59 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"center\">
            <h4>¡Cambiar Reservación!</h4>
            <small>Selecciona un lugar</small>
        </div>

        <div class=\"clearfix class_pop {{ session.type|PackageSessionType|lower }}\">
            <div class=\"grid-1-6 right reserve-{{ grid_class }}\">
                <div id=\"place_container\">
                    {% for place in 1..session.exerciseRoomCapacity %}
                        {% set place_not_available = place in session.placesNotAvailable %}
                        {% set user_reserved_place = place in userReservations %}
                        {% set is_reserved = reservations[place] is defined %}

                        {% set html_element = is_reserved or place_not_available ? 'span' : 'a' %}
                        {% set class_active = user_reserved_place  ? 'active' : '' %}
                        {% set class_engaged = is_reserved and not user_reserved_place ? 'engaged' : '' %}
                        {% set class_not_available = place_not_available ? 'not-available' : '' %}

                        <{{ html_element }} class=\"place {{ class_active }} {{ class_engaged }} {{ class_not_available }}\" data-place=\"{{ place }}\">
                            <p>{{ place }}</p>
                        </{{ html_element }}>
                    {% endfor %}
                </div>
            </div>

            <div class=\"grid-1-6 right reserve-{{ grid_class }}\">
                <div class=\"class {{ discipline|replace({' ': '-'})|lower }}\">
                    <span class=\"icon-{{  session.individual ? 'individual' : 'group' }}\"></span>
                    <h6>{{ discipline }}</h6>
                    <p>{{ session.timeStart|date('h:i a') }}</p>
                    <p><strong>{{ session.instructor.profile.firstname }}</strong></p>
                </div>
                <p>
                    <small><b>Día:</b> {{ session.dateStart|date('d/m/y') }}</small>
                </p>
                <p>
                    <small><b>Sucursal:</b> {{ session.branchOffice.place }}</small>
                </p>
            </div>
        </div>

        <a href=\"#\" class=\"btn btn-confirm btn-submit\">Confirmar cambio reservación</a>

        <form id=\"frmReservation\" action=\"{{ path('reservation_change_session', {
            'id': reservation.id,
            'sessionId': session.id
        }) }}\" method=\"post\" class=\"m-fjx\">
            <input type=\"hidden\" name=\"place_number\" />
        </form>

    </div>
</section>

<script>
    reservationInit();
</script>", "profile/reservation_change_session.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\profile\\reservation_change_session.html.twig");
    }
}
