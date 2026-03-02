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
class __TwigTemplate_6e4bd1e0d9e70b1870afed5993382203 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_header.html.twig"));

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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  160 => 57,  156 => 56,  145 => 48,  141 => 47,  136 => 44,  130 => 42,  127 => 41,  121 => 39,  115 => 37,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  91 => 26,  84 => 21,  77 => 17,  70 => 14,  62 => 10,  60 => 9,  53 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div class=\"row clearfix\">
        <div class=\"logo\">
            <a href=\"{{ path('homepage') }}\">
                <img src=\"{{ asset('images/logo-pbstudio.svg') }}\" alt=\"Logo P&amp;B\">
            </a>
        </div>
        <div class=\"ham_link\">
            {% if app.user %}
                <a href=\"{{ path('profile') }}\" class=\"link\">
                    <span class=\"icon-individual\"></span>Mi cuenta
                </a>
            {% else %}
                <a href=\"#\" class=\"link\" data-url=\"{{ path('app_login') }}\" data-remodal>
                    Iniciar sesión
                </a>
                <a href=\"#\" class=\"link\" data-url=\"{{ path('register') }}\" data-remodal>
                    Registrate
                </a>
            {% endif %}
            <a href=\"#\" onclick=\"return false;\" aria-hidden=\"false\" class=\"nav-toggle\">
                <span class=\"iconMenu\"></span>
            </a>
        </div>
        <div class=\"botons\">
            <a href=\"{{ path('package_index') }}\" class=\"btn little\">Paquetes</a>
        </div>
    </div>
    <div class=\"nav-collapse\">
        <div class=\"center\">
            <nav>
                <ul>
                    <li><a href=\"{{ path('page', { 'slug': 'quienes-somos' }) }}\" title=\"¿Quiénes somos?\">¿Quiénes somos?</a></li>
                    <li><a href=\"{{ path('instructors') }}\" title=\"Instructores\">Instructores</a></li>
                    <li><a href=\"{{ path('contact') }}\" title=\"Contacto\">Contacto</a></li>
                    {% if app.user %}
                        <li><a href=\"{{ path('profile') }}\" title=\"Mi cuenta\">Mi cuenta</a></li>
                    {% else %}
                        <li><a href=\"#login\" class=\"link\" data-url=\"{{ path('app_login') }}\" data-remodal>Iniciar sesión</a></li>
                    {% endif %}
                    {% if app.user %}
                        <li><a href=\"{{ path('app_logout') }}\">Cerrar Sesión</a></li>
                    {% endif %}
                </ul>
            </nav>
            <div class=\"clearflix\">
                <a href=\"{{ path('package_index') }}\" class=\"link\">Comprar clases</a>
                <a href=\"{{ path('reservation_calendar') }}\" class=\"link\">Reservar clase</a>
            </div>
            <div class=\"social\">
                <a href=\"https://www.facebook.com/pbstudiomx/\" target=\"blank\"><span class=\"icon-fb\"></span></a>
                <a href=\"https://www.instagram.com/pbstudiomx/\" target=\"blank\"><span class=\"icon-instagram-fill\"></span></a>
            </div>
        </div>
        <ul class=\"legal\">
            <li><a href=\"{{ path('page', { 'slug': 'terminos-y-condiciones' }) }}\">Términos y condiciones</a></li>
            <li><a href=\"{{ path('page', { 'slug': 'aviso-de-privacidad', }) }}\">Aviso de privacidad</a></li>
        </ul>
    </div>
</header>
", "default/_header.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\default\\_header.html.twig");
    }
}
