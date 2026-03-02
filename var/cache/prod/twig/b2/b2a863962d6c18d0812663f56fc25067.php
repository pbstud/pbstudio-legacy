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

/* profile/sessions_used.html.twig */
class __TwigTemplate_b19e0610bfce1c5b4205195b5637b509 extends Template
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
            'account_aside_content' => [$this, 'block_account_aside_content'],
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
        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/sessions_used.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Mis clases tomadas | ";
        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"row\">
        <div class=\"content\">
            <h2>Clases tomadas</h2>

            <div class=\"clearfix\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reservations"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 12
            yield "                    ";
            $context["session"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 12);
            // line 13
            yield "                    <div class=\"reserv_class clearfix\">
                        <div class=\"class disabled\">
                            <span class=\"icon-";
            // line 15
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "individual", [], "any", false, false, false, 15)) ? ("individual") : ("group"));
            yield "\"></span>
                            <h6>";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "discipline", [], "any", false, false, false, 16), "html", null, true);
            yield "</h6>
                            <p>";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 17), "h:i a"), "html", null, true);
            yield "</p>
                            <p>";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 18), "profile", [], "any", false, false, false, 18), "firstname", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"detail\">
                            <p><b>Día: </b>";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "method", false, false, false, 21), null, "EEEE d 'de' MMMM"), "html", null, true);
            yield "</p>
                            <p><b>Salón: </b>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoom", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                            <p><b>Instructor: </b>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
                            ";
            // line 24
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "individual", [], "any", false, false, false, 24)) {
                // line 25
                yield "                                <p><b>Camilla/Silla: </b>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "placeNumber", [], "any", false, false, false, 25), "html", null, true);
                yield "</p>
                            ";
            }
            // line 27
            yield "
                            ";
            // line 28
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 28)) {
                // line 29
                yield "                                <p><i>*Clase cancelada: ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "cancellationAt", [], "any", false, false, false, 29), "d/m/Y h.i a"), "html", null, true);
                yield "</i></p>
                            ";
            }
            // line 31
            yield "                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "                    <div class=\"no_class clearfix\">
                        <p>Sin registros por mostrar</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </div>

            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn reserve-class-toggle\">Reservar clase</a>
        </div>
    </div>
";
        return; yield '';
    }

    // line 45
    public function block_account_aside_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_aside.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/sessions_used.html.twig";
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
        return array (  162 => 46,  158 => 45,  149 => 40,  145 => 38,  136 => 34,  129 => 31,  123 => 29,  121 => 28,  118 => 27,  112 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 13,  73 => 12,  68 => 11,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/sessions_used.html.twig", "/var/www/pbstudio/releases/81/templates/profile/sessions_used.html.twig");
    }
}
