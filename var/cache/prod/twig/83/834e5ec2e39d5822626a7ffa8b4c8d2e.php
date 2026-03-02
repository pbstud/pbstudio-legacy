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
class __TwigTemplate_a2fd2df576ab8ed137fb63de6a4e1d87 extends Template
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
        yield "<div class=\"status clearfix\">
    <a href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sessions_available", ["_fragment" => "section-content"]);
        yield "\">
        ";
        // line 3
        if (($context["free_session"] ?? null)) {
            // line 4
            yield "            ";
            $context["sessions_available"] = (($context["sessions_available"] ?? null) + 1);
            // line 5
            yield "
            <span class=\"courtesy str\">*Clase de cortesía</span>
        ";
        }
        // line 8
        yield "
        ";
        // line 9
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["unlimited_transactions"] ?? null)) > 0)) {
            // line 10
            yield "            <span class=\"courtesy str\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["unlimited_transactions"] ?? null));
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
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["unlimited_transactions"] ?? null)) > 0)) {
            // line 19
            yield "                &infin;
            ";
        } else {
            // line 21
            yield "                ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["sessions_available"] ?? null), "html", null, true);
            yield "
            ";
        }
        // line 23
        yield "
            ";
        // line 24
        if (($context["free_session"] ?? null)) {
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["sessions_used"] ?? null), "html", null, true);
        yield "</h3>
        <p>Clases tomadas<small><span class=\"link\">Ver historial</span></small></p>
    </a>

    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserved_sessions", ["_fragment" => "section-content"]);
        yield "\">
        <h3>";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["reserved_sessions"] ?? null), "html", null, true);
        yield "</h3>
        <p>Próximas clases <small><span class=\"link\">Ver reservaciones</span></small></p>
    </a>

    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_waiting_list", ["_fragment" => "section-content"]);
        yield "\">
        <h3>";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["waiting_list"] ?? null), "html", null, true);
        yield "</h3>
        <p>
            Lista de Espera
            <small><span class=\"link\">Ver lista</span></small>
        </p>
    </a>
</div>
";
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
        return array (  137 => 42,  133 => 41,  126 => 37,  122 => 36,  115 => 32,  111 => 31,  105 => 27,  101 => 25,  99 => 24,  96 => 23,  90 => 21,  86 => 19,  84 => 18,  80 => 16,  76 => 14,  67 => 12,  63 => 11,  60 => 10,  58 => 9,  55 => 8,  50 => 5,  47 => 4,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/_resume.html.twig", "/var/www/pbstudio/releases/81/templates/profile/_resume.html.twig");
    }
}
