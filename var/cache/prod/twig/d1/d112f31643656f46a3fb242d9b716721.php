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

/* profile/reserved_sessions.html.twig */
class __TwigTemplate_4cda6d30195f16b3a59771c712b78062 extends Template
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
        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/reserved_sessions.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Próximas clases | ";
        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"row\">
        <div class=\"content\">
            ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_flash.html.twig");
        yield "

            <h2>Próximas clases</h2>

            <div class=\"clearfix\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reservations"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 14
            yield "                    ";
            // line 15
            yield "                    ";
            $context["session"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 15);
            // line 16
            yield "                    ";
            // line 17
            yield "                    <div class=\"reserv_class clearfix\">
                        <div class=\"class ";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lowerFilter($this->env, Twig\Extension\CoreExtension::replaceFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "discipline", [], "any", false, false, false, 18), [" " => "-"])), "html", null, true);
            yield "\">
                            <span class=\"icon-";
            // line 19
            yield ((("i" == CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "type", [], "any", false, false, false, 19))) ? ("individual") : ("group"));
            yield "\"></span>
                            <h6>";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "discipline", [], "any", false, false, false, 20), "html", null, true);
            yield "</h6>
                            <p>";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 21), "h:i a"), "html", null, true);
            yield "</p>
                            <p>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 22), "profile", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Día: </b>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "method", false, false, false, 25), null, "EEEE d 'de' MMMM"), "html", null, true);
            yield "</p>
                            <p><b>Sucursal: </b>";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "branchOffice", [], "any", false, false, false, 26), "place", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                            <p><b>Salón: </b>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoom", [], "any", false, false, false, 27), "html", null, true);
            yield "</p>
                            <p><b>Instructor: </b>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 28), "profile", [], "any", false, false, false, 28), "firstname", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                            ";
            // line 29
            if (("g" == CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "type", [], "any", false, false, false, 29))) {
                // line 30
                yield "                                <p><b>Camilla/Silla: </b>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "placeNumber", [], "any", false, false, false, 30), "html", null, true);
                yield "</p>
                            ";
            }
            // line 32
            yield "
                            ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 33)) {
                // line 34
                yield "                                ";
                if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->reservationCanCancel($context["reservation"])) {
                    // line 35
                    yield "                                    <a href=\"#\" data-url=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                    yield "\" class=\"link\" data-remodal>
                                        Cancelar reservación
                                    </a>
                                ";
                }
                // line 39
                yield "                                ";
                if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->reservationCanChange($context["reservation"])) {
                    // line 40
                    yield "                                    <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_change", ["id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 41
$context["reservation"], "id", [], "any", false, false, false, 41), "_fragment" => "section-content"]), "html", null, true);
                    // line 43
                    yield "\" class=\"link\">
                                        Cambiar reservación
                                    </a>
                                ";
                }
                // line 47
                yield "                            ";
            } else {
                // line 48
                yield "                                <p>
                                    <i>* Clase cancelada: ";
                // line 49
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "cancellationAt", [], "any", false, false, false, 49), "d/m/Y h:i a"), "html", null, true);
                yield "</i>
                                </p>
                            ";
            }
            // line 52
            yield "                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            yield "                    <div class=\"reserv_class clearfix\">
                        <p>Sin registros por mostrar</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "            </div>

            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn reserve-class-toggle\">Reservar clase</a>
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/reserved_sessions.html.twig";
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
        return array (  194 => 61,  190 => 59,  181 => 55,  174 => 52,  168 => 49,  165 => 48,  162 => 47,  156 => 43,  154 => 41,  152 => 40,  149 => 39,  141 => 35,  138 => 34,  136 => 33,  133 => 32,  127 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  84 => 17,  82 => 16,  79 => 15,  77 => 14,  72 => 13,  64 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/reserved_sessions.html.twig", "/var/www/pbstudio/releases/81/templates/profile/reserved_sessions.html.twig");
    }
}
