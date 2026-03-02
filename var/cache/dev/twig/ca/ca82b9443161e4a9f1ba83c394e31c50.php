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

/* reservation/session.html.twig */
class __TwigTemplate_0e7576aeb3e4212c44b7160c2866a238 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/session.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/session.html.twig"));

        // line 1
        yield "<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"center\">
            ";
        // line 6
        if (( !(isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 6, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 6, $this->source); })()), "open", [], "any", false, false, false, 6))) {
            // line 7
            yield "                <h4>¡Tu clase te espera!</h4>
                <small>Selecciona un lugar</small>
            ";
        } elseif (        // line 9
(isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "                <h4>¡Ya estás suscrito a esta clase!</h4>
                <small>Tu lugar seleccionado</small>
            ";
        } elseif ((        // line 12
(isset($context["show_waitinglist"]) || array_key_exists("show_waitinglist", $context) ? $context["show_waitinglist"] : (function () { throw new RuntimeError('Variable "show_waitinglist" does not exist.', 12, $this->source); })()) || (isset($context["msg_no_classes_available"]) || array_key_exists("msg_no_classes_available", $context) ? $context["msg_no_classes_available"] : (function () { throw new RuntimeError('Variable "msg_no_classes_available" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "                <small>
                    <strong>¡Ups, ya no hay lugares disponibles!</strong>
                    Pero no te preocupes, regístrate en la lista de espera y si se libera un lugar se te asignará a ti automáticamente.
                </small>
            ";
        }
        // line 18
        yield "        </div>

        <div class=\"clearfix class_pop ";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20))), "html", null, true);
        yield "\">
            <div class=\"grid-1-6 right reserve-";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["grid_class"]) || array_key_exists("grid_class", $context) ? $context["grid_class"] : (function () { throw new RuntimeError('Variable "grid_class" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\">
                <div id=\"place_container\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 23, $this->source); })()), "exerciseRoomCapacity", [], "any", false, false, false, 23)));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 24
            yield "                        ";
            $context["place_not_available"] = CoreExtension::inFilter($context["place"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "placesNotAvailable", [], "any", false, false, false, 24));
            // line 25
            yield "                        ";
            $context["user_reserved_place"] = CoreExtension::inFilter($context["place"], (isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 25, $this->source); })()));
            // line 26
            yield "                        ";
            $context["is_reserved"] = CoreExtension::getAttribute($this->env, $this->source, ($context["reservations"] ?? null), $context["place"], [], "array", true, true, false, 26);
            // line 27
            yield "
                        ";
            // line 28
            $context["html_element"] = ((((isset($context["is_reserved"]) || array_key_exists("is_reserved", $context) ? $context["is_reserved"] : (function () { throw new RuntimeError('Variable "is_reserved" does not exist.', 28, $this->source); })()) || (isset($context["place_not_available"]) || array_key_exists("place_not_available", $context) ? $context["place_not_available"] : (function () { throw new RuntimeError('Variable "place_not_available" does not exist.', 28, $this->source); })()))) ? ("span") : ("a"));
            // line 29
            yield "                        ";
            $context["class_active"] = (((isset($context["user_reserved_place"]) || array_key_exists("user_reserved_place", $context) ? $context["user_reserved_place"] : (function () { throw new RuntimeError('Variable "user_reserved_place" does not exist.', 29, $this->source); })())) ? ("active") : (""));
            // line 30
            yield "                        ";
            $context["class_engaged"] = ((((isset($context["is_reserved"]) || array_key_exists("is_reserved", $context) ? $context["is_reserved"] : (function () { throw new RuntimeError('Variable "is_reserved" does not exist.', 30, $this->source); })()) &&  !(isset($context["user_reserved_place"]) || array_key_exists("user_reserved_place", $context) ? $context["user_reserved_place"] : (function () { throw new RuntimeError('Variable "user_reserved_place" does not exist.', 30, $this->source); })()))) ? ("engaged") : (""));
            // line 31
            yield "                        ";
            $context["class_not_available"] = (((isset($context["place_not_available"]) || array_key_exists("place_not_available", $context) ? $context["place_not_available"] : (function () { throw new RuntimeError('Variable "place_not_available" does not exist.', 31, $this->source); })())) ? ("not-available") : (""));
            // line 32
            yield "
                        <";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["html_element"]) || array_key_exists("html_element", $context) ? $context["html_element"] : (function () { throw new RuntimeError('Variable "html_element" does not exist.', 33, $this->source); })()), "html", null, true);
            yield " class=\"place ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_active"]) || array_key_exists("class_active", $context) ? $context["class_active"] : (function () { throw new RuntimeError('Variable "class_active" does not exist.', 33, $this->source); })()), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_engaged"]) || array_key_exists("class_engaged", $context) ? $context["class_engaged"] : (function () { throw new RuntimeError('Variable "class_engaged" does not exist.', 33, $this->source); })()), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["class_not_available"]) || array_key_exists("class_not_available", $context) ? $context["class_not_available"] : (function () { throw new RuntimeError('Variable "class_not_available" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "\" data-place=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "\">
                            <p>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "</p>
                        </";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["html_element"]) || array_key_exists("html_element", $context) ? $context["html_element"] : (function () { throw new RuntimeError('Variable "html_element" does not exist.', 35, $this->source); })()), "html", null, true);
            yield ">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                </div>
            </div>

            <div class=\"grid-1-6 right reserve-";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["grid_class"]) || array_key_exists("grid_class", $context) ? $context["grid_class"] : (function () { throw new RuntimeError('Variable "grid_class" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "\">
                <div class=\"class ";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter((isset($context["discipline"]) || array_key_exists("discipline", $context) ? $context["discipline"] : (function () { throw new RuntimeError('Variable "discipline" does not exist.', 41, $this->source); })()), [" " => "-"])), "html", null, true);
        yield "\">
                    <span class=\"icon-";
        // line 42
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 42, $this->source); })()), "individual", [], "any", false, false, false, 42)) ? ("individual") : ("group"));
        yield "\"></span>
                    <h6>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["discipline"]) || array_key_exists("discipline", $context) ? $context["discipline"] : (function () { throw new RuntimeError('Variable "discipline" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "</h6>
                    <p>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 44, $this->source); })()), "timeStart", [], "any", false, false, false, 44), "h:i a"), "html", null, true);
        yield "</p>
                    <p><strong>";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 45, $this->source); })()), "instructor", [], "any", false, false, false, 45), "profile", [], "any", false, false, false, 45), "firstname", [], "any", false, false, false, 45), "html", null, true);
        yield "</strong></p>
                </div>
                <p>
                    <small><b>Día:</b> ";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 48, $this->source); })()), "dateStart", [], "any", false, false, false, 48), "d/m/y"), "html", null, true);
        yield "</small>
                </p>
                <p>
                    <small><b>Sucursal:</b> ";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 51, $this->source); })()), "branchOffice", [], "any", false, false, false, 51), "place", [], "any", false, false, false, 51), "html", null, true);
        yield "</small>
                </p>
            </div>
        </div>

        ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 56, $this->source); })()), "open", [], "any", false, false, false, 56)) {
            // line 57
            yield "            <a href=\"#\" class=\"btn btn-confirm btn-submit\">Confirmar reservación</a>

            <form id=\"frmReservation\" action=\"";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" method=\"post\" class=\"m-fjx\">
                <input type=\"hidden\" name=\"place_number\" value=\"\" />
            </form>
        ";
        } elseif ((( !        // line 62
(isset($context["userReservations"]) || array_key_exists("userReservations", $context) ? $context["userReservations"] : (function () { throw new RuntimeError('Variable "userReservations" does not exist.', 62, $this->source); })()) && (isset($context["show_waitinglist"]) || array_key_exists("show_waitinglist", $context) ? $context["show_waitinglist"] : (function () { throw new RuntimeError('Variable "show_waitinglist" does not exist.', 62, $this->source); })())) &&  !(isset($context["on_waitinglist"]) || array_key_exists("on_waitinglist", $context) ? $context["on_waitinglist"] : (function () { throw new RuntimeError('Variable "on_waitinglist" does not exist.', 62, $this->source); })()))) {
            // line 63
            yield "            <a href=\"#\" class=\"btn btn-waitinglist btn-submit\">Suscribirme a la lista de espera</a>

            <form id=\"frmWaitingList\" action=\"";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_waitinglist", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" method=\"post\" class=\"m-fjx\">
            </form>
        ";
        } elseif (        // line 67
(isset($context["msg_no_classes_available"]) || array_key_exists("msg_no_classes_available", $context) ? $context["msg_no_classes_available"] : (function () { throw new RuntimeError('Variable "msg_no_classes_available" does not exist.', 67, $this->source); })())) {
            // line 68
            yield "            ¡No cuentas con clases disponibles! Pero no te preocupes, adquiere más clases
            para poder registrarte en la lista de espera de esta clase.
        ";
        }
        // line 71
        yield "    </div>
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
        return "reservation/session.html.twig";
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
        return array (  214 => 71,  209 => 68,  207 => 67,  202 => 65,  198 => 63,  196 => 62,  190 => 59,  186 => 57,  184 => 56,  176 => 51,  170 => 48,  164 => 45,  160 => 44,  156 => 43,  152 => 42,  148 => 41,  144 => 40,  139 => 37,  131 => 35,  127 => 34,  115 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  101 => 28,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  85 => 23,  80 => 21,  76 => 20,  72 => 18,  65 => 13,  63 => 12,  59 => 10,  57 => 9,  53 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"center\">
            {% if not userReservations and session.open %}
                <h4>¡Tu clase te espera!</h4>
                <small>Selecciona un lugar</small>
            {% elseif userReservations %}
                <h4>¡Ya estás suscrito a esta clase!</h4>
                <small>Tu lugar seleccionado</small>
            {% elseif show_waitinglist or msg_no_classes_available %}
                <small>
                    <strong>¡Ups, ya no hay lugares disponibles!</strong>
                    Pero no te preocupes, regístrate en la lista de espera y si se libera un lugar se te asignará a ti automáticamente.
                </small>
            {% endif %}
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

        {% if session.open %}
            <a href=\"#\" class=\"btn btn-confirm btn-submit\">Confirmar reservación</a>

            <form id=\"frmReservation\" action=\"{{ path('reservation_confirm', { 'id': session.id }) }}\" method=\"post\" class=\"m-fjx\">
                <input type=\"hidden\" name=\"place_number\" value=\"\" />
            </form>
        {% elseif not userReservations and show_waitinglist and not on_waitinglist %}
            <a href=\"#\" class=\"btn btn-waitinglist btn-submit\">Suscribirme a la lista de espera</a>

            <form id=\"frmWaitingList\" action=\"{{ path('reservation_waitinglist', { 'id': session.id }) }}\" method=\"post\" class=\"m-fjx\">
            </form>
        {% elseif msg_no_classes_available %}
            ¡No cuentas con clases disponibles! Pero no te preocupes, adquiere más clases
            para poder registrarte en la lista de espera de esta clase.
        {% endif %}
    </div>
</section>

<script>
    reservationInit();
</script>", "reservation/session.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\reservation\\session.html.twig");
    }
}
