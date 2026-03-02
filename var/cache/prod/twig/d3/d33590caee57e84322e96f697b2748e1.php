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
class __TwigTemplate_dad0c51fb71c0cc002d243e7747d0b95 extends Template
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
        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/waiting_list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Lista de espera | ";
        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"row\">
        <div class=\"content wait\">
            <h2>Clases en lista de espera</h2>

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["waitingList"] ?? null));
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
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "discipline", [], "any", false, false, false, 21), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "type", [], "any", false, false, false, 21)), "html", null, true);
            yield "</p>
                            <p><b>Día: </b>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "method", false, false, false, 22), null, "EEEE d 'de' MMMM"), "html", null, true);
            yield "</p>
                            <p><b>Hora: </b>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 23), "h:i a"), "html", null, true);
            yield "</p>
                            <p><b>Instructor: </b>";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 24), "profile", [], "any", false, false, false, 24), "firstname", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
                            <a href=\"";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("waiting_list_remove", ["sessionId" => CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 25)]), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "branchOffice", [], "any", false, false, false, 37), "slug", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" class=\"btn\">Reservar clase</a>
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
        return array (  131 => 37,  128 => 36,  119 => 32,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  89 => 21,  82 => 17,  76 => 13,  73 => 12,  71 => 11,  66 => 10,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/waiting_list.html.twig", "/var/www/pbstudio/releases/81/templates/profile/waiting_list.html.twig");
    }
}
