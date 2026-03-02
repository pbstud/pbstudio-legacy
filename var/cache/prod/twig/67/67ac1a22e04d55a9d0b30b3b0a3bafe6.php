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
class __TwigTemplate_791b0e4d0240086ac2b7557b4f919d15 extends Template
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
        $context["reserveClass"] = Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter(($context["discipline"] ?? null), [" " => "-"]));
        // line 2
        yield "
<section class=\"pop_box\">
    <div class=\"row clearfix\">
        <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>

        <div class=\"center\">
            <h4>¿Deseas cancelar esta clase?</h4>
            <small>*Recuerda cancelar máximo ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["time_to_cancel"] ?? null), "html", null, true);
        yield " horas antes de la clase reservada</small>
        </div>

        <div class=\"clearfix class_pop ";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "type", [], "any", false, false, false, 12))), "html", null, true);
        yield "\">
            <div class=\"grid-1-6 right reserve-";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["reserveClass"] ?? null), "html", null, true);
        yield "\">
                <div id=\"place_container\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoomCapacity", [], "any", false, false, false, 15)));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 16
            yield "                        ";
            $context["class_active"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "placeNumber", [], "any", false, false, false, 16) == $context["place"])) ? ("active") : (""));
            // line 17
            yield "                        ";
            $context["class_engaged"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["reservations"] ?? null), $context["place"], [], "array", true, true, false, 17) && (CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "placeNumber", [], "any", false, false, false, 17) != $context["place"]))) ? ("engaged") : (""));
            // line 18
            yield "                        ";
            $context["class_not_available"] = ((CoreExtension::inFilter($context["place"], CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "placesNotAvailable", [], "any", false, false, false, 18))) ? ("not-available") : (""));
            // line 19
            yield "
                        <span class=\"place ";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["class_active"] ?? null), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["class_engaged"] ?? null), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["class_not_available"] ?? null), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["reserveClass"] ?? null), "html", null, true);
        yield "\">
                <div class=\"class ";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["reserveClass"] ?? null), "html", null, true);
        yield "\">
                    <span class=\"icon-";
        // line 29
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "individual", [], "any", false, false, false, 29)) ? ("individual") : ("group"));
        yield "\"></span>
                    <h6>";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["discipline"] ?? null), "html", null, true);
        yield "</h6>
                    <p>";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 31), "h:i a"), "html", null, true);
        yield "</p>
                    <p><strong>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 32), "profile", [], "any", false, false, false, 32), "firstname", [], "any", false, false, false, 32), "html", null, true);
        yield "</strong></p>
                </div>
                <p><small><b>Día:</b> ";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "any", false, false, false, 34), "d/m/y"), "html", null, true);
        yield "</small></p>
            </div>
        </div>

        <a id=\"btn-reservation-cancel\" href=\"#\" data-url=\"";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" class=\"btn btn-submit\">Cancelar reservación</a>
    </div>
</section>

<script>
    reservationCancelInit();
</script>";
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
        return array (  136 => 38,  129 => 34,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  99 => 24,  90 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  64 => 15,  59 => 13,  55 => 12,  49 => 9,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/reservation_cancel.html.twig", "/var/www/pbstudio/releases/81/templates/profile/reservation_cancel.html.twig");
    }
}
