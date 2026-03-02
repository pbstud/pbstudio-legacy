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
class __TwigTemplate_4bab8106d94224a3092dda91c9585808 extends Template
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
        // line 1
        yield "<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"center\">
            ";
        // line 6
        if (( !($context["userReservations"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "open", [], "any", false, false, false, 6))) {
            // line 7
            yield "                <h4>¡Tu clase te espera!</h4>
                <small>Selecciona un lugar</small>
            ";
        } elseif (        // line 9
($context["userReservations"] ?? null)) {
            // line 10
            yield "                <h4>¡Ya estás suscrito a esta clase!</h4>
                <small>Tu lugar seleccionado</small>
            ";
        } elseif ((        // line 12
($context["show_waitinglist"] ?? null) || ($context["msg_no_classes_available"] ?? null))) {
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
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "type", [], "any", false, false, false, 20))), "html", null, true);
        yield "\">
            <div class=\"grid-1-6 right reserve-";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["grid_class"] ?? null), "html", null, true);
        yield "\">
                <div id=\"place_container\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoomCapacity", [], "any", false, false, false, 23)));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 24
            yield "                        ";
            $context["place_not_available"] = CoreExtension::inFilter($context["place"], CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "placesNotAvailable", [], "any", false, false, false, 24));
            // line 25
            yield "                        ";
            $context["user_reserved_place"] = CoreExtension::inFilter($context["place"], ($context["userReservations"] ?? null));
            // line 26
            yield "                        ";
            $context["is_reserved"] = CoreExtension::getAttribute($this->env, $this->source, ($context["reservations"] ?? null), $context["place"], [], "array", true, true, false, 26);
            // line 27
            yield "
                        ";
            // line 28
            $context["html_element"] = (((($context["is_reserved"] ?? null) || ($context["place_not_available"] ?? null))) ? ("span") : ("a"));
            // line 29
            yield "                        ";
            $context["class_active"] = ((($context["user_reserved_place"] ?? null)) ? ("active") : (""));
            // line 30
            yield "                        ";
            $context["class_engaged"] = (((($context["is_reserved"] ?? null) &&  !($context["user_reserved_place"] ?? null))) ? ("engaged") : (""));
            // line 31
            yield "                        ";
            $context["class_not_available"] = ((($context["place_not_available"] ?? null)) ? ("not-available") : (""));
            // line 32
            yield "
                        <";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["html_element"] ?? null), "html", null, true);
            yield " class=\"place ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["class_active"] ?? null), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["class_engaged"] ?? null), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["class_not_available"] ?? null), "html", null, true);
            yield "\" data-place=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "\">
                            <p>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "</p>
                        </";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["html_element"] ?? null), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["grid_class"] ?? null), "html", null, true);
        yield "\">
                <div class=\"class ";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter(($context["discipline"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">
                    <span class=\"icon-";
        // line 42
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "individual", [], "any", false, false, false, 42)) ? ("individual") : ("group"));
        yield "\"></span>
                    <h6>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["discipline"] ?? null), "html", null, true);
        yield "</h6>
                    <p>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 44), "h:i a"), "html", null, true);
        yield "</p>
                    <p><strong>";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 45), "profile", [], "any", false, false, false, 45), "firstname", [], "any", false, false, false, 45), "html", null, true);
        yield "</strong></p>
                </div>
                <p>
                    <small><b>Día:</b> ";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "any", false, false, false, 48), "d/m/y"), "html", null, true);
        yield "</small>
                </p>
                <p>
                    <small><b>Sucursal:</b> ";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "branchOffice", [], "any", false, false, false, 51), "place", [], "any", false, false, false, 51), "html", null, true);
        yield "</small>
                </p>
            </div>
        </div>

        ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "open", [], "any", false, false, false, 56)) {
            // line 57
            yield "            <a href=\"#\" class=\"btn btn-confirm btn-submit\">Confirmar reservación</a>

            <form id=\"frmReservation\" action=\"";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" method=\"post\" class=\"m-fjx\">
                <input type=\"hidden\" name=\"place_number\" value=\"\" />
            </form>
        ";
        } elseif ((( !        // line 62
($context["userReservations"] ?? null) && ($context["show_waitinglist"] ?? null)) &&  !($context["on_waitinglist"] ?? null))) {
            // line 63
            yield "            <a href=\"#\" class=\"btn btn-waitinglist btn-submit\">Suscribirme a la lista de espera</a>

            <form id=\"frmWaitingList\" action=\"";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_waitinglist", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" method=\"post\" class=\"m-fjx\">
            </form>
        ";
        } elseif (        // line 67
($context["msg_no_classes_available"] ?? null)) {
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
        return array (  208 => 71,  203 => 68,  201 => 67,  196 => 65,  192 => 63,  190 => 62,  184 => 59,  180 => 57,  178 => 56,  170 => 51,  164 => 48,  158 => 45,  154 => 44,  150 => 43,  146 => 42,  142 => 41,  138 => 40,  133 => 37,  125 => 35,  121 => 34,  109 => 33,  106 => 32,  103 => 31,  100 => 30,  97 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  79 => 23,  74 => 21,  70 => 20,  66 => 18,  59 => 13,  57 => 12,  53 => 10,  51 => 9,  47 => 7,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/session.html.twig", "/var/www/pbstudio/releases/81/templates/reservation/session.html.twig");
    }
}
