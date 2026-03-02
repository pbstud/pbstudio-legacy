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

/* default/_header.html.twig */
class __TwigTemplate_2eadca1f6f41d05b620f0db59a07c6dd extends Template
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
        yield "<header>
    <div class=\"row clearfix\">
        <div class=\"logo\">
            <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">
                <img src=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-pbstudio.svg"), "html", null, true);
        yield "\" alt=\"Logo P&amp;B\">
            </a>
        </div>
        <div class=\"ham_link\">
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            yield "\" class=\"link\">
                    <span class=\"icon-individual\"></span>Mi cuenta
                </a>
            ";
        } else {
            // line 14
            yield "                <a href=\"#\" class=\"link\" data-url=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" data-remodal>
                    Iniciar sesión
                </a>
                <a href=\"#\" class=\"link\" data-url=\"";
            // line 17
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            yield "\" data-remodal>
                    Registrate
                </a>
            ";
        }
        // line 21
        yield "            <a href=\"#\" onclick=\"return false;\" aria-hidden=\"false\" class=\"nav-toggle\">
                <span class=\"iconMenu\"></span>
            </a>
        </div>
        <div class=\"botons\">
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("package_index");
        yield "\" class=\"btn little\">Paquetes</a>
        </div>
    </div>
    <div class=\"nav-collapse\">
        <div class=\"center\">
            <nav>
                <ul>
                    <li><a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => "quienes-somos"]);
        yield "\" title=\"¿Quiénes somos?\">¿Quiénes somos?</a></li>
                    <li><a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructors");
        yield "\" title=\"Instructores\">Instructores</a></li>
                    <li><a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" title=\"Contacto\">Contacto</a></li>
                    ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36)) {
            // line 37
            yield "                        <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            yield "\" title=\"Mi cuenta\">Mi cuenta</a></li>
                    ";
        } else {
            // line 39
            yield "                        <li><a href=\"#login\" class=\"link\" data-url=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" data-remodal>Iniciar sesión</a></li>
                    ";
        }
        // line 41
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41)) {
            // line 42
            yield "                        <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Cerrar Sesión</a></li>
                    ";
        }
        // line 44
        yield "                </ul>
            </nav>
            <div class=\"clearflix\">
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("package_index");
        yield "\" class=\"link\">Comprar clases</a>
                <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"link\">Reservar clase</a>
            </div>
            <div class=\"social\">
                <a href=\"https://www.facebook.com/pbstudiomx/\" target=\"blank\"><span class=\"icon-fb\"></span></a>
                <a href=\"https://www.instagram.com/pbstudiomx/\" target=\"blank\"><span class=\"icon-instagram-fill\"></span></a>
            </div>
        </div>
        <ul class=\"legal\">
            <li><a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => "terminos-y-condiciones"]);
        yield "\">Términos y condiciones</a></li>
            <li><a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => "aviso-de-privacidad"]);
        yield "\">Aviso de privacidad</a></li>
        </ul>
    </div>
</header>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/_header.html.twig";
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
        return array (  154 => 57,  150 => 56,  139 => 48,  135 => 47,  130 => 44,  124 => 42,  121 => 41,  115 => 39,  109 => 37,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  85 => 26,  78 => 21,  71 => 17,  64 => 14,  56 => 10,  54 => 9,  47 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_header.html.twig", "/var/www/pbstudio/releases/81/templates/default/_header.html.twig");
    }
}
