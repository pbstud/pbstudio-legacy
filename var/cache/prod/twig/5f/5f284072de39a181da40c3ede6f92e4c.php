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
class __TwigTemplate_e649fd8531cf6168fd7ed971d6b3a911 extends Template
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
            <h4>¡Cambiar Reservación!</h4>
            <small>Selecciona un lugar</small>
        </div>

        <div class=\"clearfix class_pop ";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "type", [], "any", false, false, false, 10))), "html", null, true);
        yield "\">
            <div class=\"grid-1-6 right reserve-";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["grid_class"] ?? null), "html", null, true);
        yield "\">
                <div id=\"place_container\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoomCapacity", [], "any", false, false, false, 13)));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 14
            yield "                        ";
            $context["place_not_available"] = CoreExtension::inFilter($context["place"], CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "placesNotAvailable", [], "any", false, false, false, 14));
            // line 15
            yield "                        ";
            $context["user_reserved_place"] = CoreExtension::inFilter($context["place"], ($context["userReservations"] ?? null));
            // line 16
            yield "                        ";
            $context["is_reserved"] = CoreExtension::getAttribute($this->env, $this->source, ($context["reservations"] ?? null), $context["place"], [], "array", true, true, false, 16);
            // line 17
            yield "
                        ";
            // line 18
            $context["html_element"] = (((($context["is_reserved"] ?? null) || ($context["place_not_available"] ?? null))) ? ("span") : ("a"));
            // line 19
            yield "                        ";
            $context["class_active"] = ((($context["user_reserved_place"] ?? null)) ? ("active") : (""));
            // line 20
            yield "                        ";
            $context["class_engaged"] = (((($context["is_reserved"] ?? null) &&  !($context["user_reserved_place"] ?? null))) ? ("engaged") : (""));
            // line 21
            yield "                        ";
            $context["class_not_available"] = ((($context["place_not_available"] ?? null)) ? ("not-available") : (""));
            // line 22
            yield "
                        <";
            // line 23
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
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["place"], "html", null, true);
            yield "</p>
                        </";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["html_element"] ?? null), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["grid_class"] ?? null), "html", null, true);
        yield "\">
                <div class=\"class ";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter(($context["discipline"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">
                    <span class=\"icon-";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "individual", [], "any", false, false, false, 32)) ? ("individual") : ("group"));
        yield "\"></span>
                    <h6>";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["discipline"] ?? null), "html", null, true);
        yield "</h6>
                    <p>";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 34), "h:i a"), "html", null, true);
        yield "</p>
                    <p><strong>";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 35), "profile", [], "any", false, false, false, 35), "firstname", [], "any", false, false, false, 35), "html", null, true);
        yield "</strong></p>
                </div>
                <p>
                    <small><b>Día:</b> ";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "any", false, false, false, 38), "d/m/y"), "html", null, true);
        yield "</small>
                </p>
                <p>
                    <small><b>Sucursal:</b> ";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "branchOffice", [], "any", false, false, false, 41), "place", [], "any", false, false, false, 41), "html", null, true);
        yield "</small>
                </p>
            </div>
        </div>

        <a href=\"#\" class=\"btn btn-confirm btn-submit\">Confirmar cambio reservación</a>

        <form id=\"frmReservation\" action=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_change_session", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["reservation"] ?? null), "id", [], "any", false, false, false, 49), "sessionId" => CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["session"] ?? null), "id", [], "any", false, false, false, 50)]), "html", null, true);
        // line 51
        yield "\" method=\"post\" class=\"m-fjx\">
            <input type=\"hidden\" name=\"place_number\" />
        </form>

    </div>
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
        return array (  163 => 51,  161 => 50,  160 => 49,  159 => 48,  149 => 41,  143 => 38,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  117 => 30,  112 => 27,  104 => 25,  100 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  58 => 13,  53 => 11,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/reservation_change_session.html.twig", "/var/www/pbstudio/releases/81/templates/profile/reservation_change_session.html.twig");
    }
}
