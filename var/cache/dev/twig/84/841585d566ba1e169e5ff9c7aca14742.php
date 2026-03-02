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

/* package/index.html.twig */
class __TwigTemplate_fbdaba0258bb61d050e8b3ea3d576f0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "package/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Paquetes | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    <section id=\"packages\" class=\"page\">
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"title clearfix\">
                    <h2>¡Tu cuerpo como nunca lo habías sentido!</h2>
                    <p>
                        En <strong>P&B Studio</strong> queremos que descubras la mejor versión de ti. Selecciona alguno
                        de nuestros paquetes: Pilates y Barra en clases grupales o si lo prefieres
                        clases totalmente personales para ti de Pilates. ¡Tu decides!
                    </p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"center\">
                    <h4>Clases grupales</h4>
                    <div class=\"price\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PackageController::groupPackages"));
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"center\">
                    <h4>Clases individuales</h4>
                    <p>(Solo en sucursal Santa Fé. Reserva por teléfono)</p>
                    <div class=\"price\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PackageController::individualPackages"));
        yield "
                    </div>

                    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn\">
                        Consulta el calendario
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=\"box-row location\">
            <div class=\"content\">
                <div class=\"col\">
                    <div class=\"social\">
                        <a href=\"https://www.facebook.com/pbstudiomx/\" target=\"blank\"><span class=\"icon-fb\"></span></a>
                        <a href=\"https://www.instagram.com/pbstudiomx/\" target=\"blank\"><span class=\"icon-instagram-fill\"></span></a>
                    </div>
                    <div><a href=\"mailto:contacto@pbstudio.mx\">contacto@pbstudio.mx</a></div>
                </div>
                <div class=\"col\">
                    <div>
                        <h6>Santa Fé</h6>
                        <h6>Infiniti Center</h6>
                        <p>Prolongación Paseo de la Reforma 215, Paseo de las Lomas, Álvaro Obregón, México City, CP 01330</p>
                        <p><b>Tel:</b> 55 5292 0036</p>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <h6>Interlomas</h6>
                        <h6>Centtral Interlomas</h6>
                        <p>Av. Palmas Hills 1-2, Huixquilucan, Estado de México, México. CP 52763</p>
                        <p><b>Tel:</b> 55 5087 8039</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "package/index.html.twig";
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
        return array (  130 => 38,  124 => 35,  110 => 24,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block page_title %}Paquetes | {% endblock %}

{% block content %}
    <section id=\"packages\" class=\"page\">
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"title clearfix\">
                    <h2>¡Tu cuerpo como nunca lo habías sentido!</h2>
                    <p>
                        En <strong>P&B Studio</strong> queremos que descubras la mejor versión de ti. Selecciona alguno
                        de nuestros paquetes: Pilates y Barra en clases grupales o si lo prefieres
                        clases totalmente personales para ti de Pilates. ¡Tu decides!
                    </p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"center\">
                    <h4>Clases grupales</h4>
                    <div class=\"price\">
                        {{ render(controller('App\\\\Controller\\\\PackageController::groupPackages')) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"center\">
                    <h4>Clases individuales</h4>
                    <p>(Solo en sucursal Santa Fé. Reserva por teléfono)</p>
                    <div class=\"price\">
                        {{ render(controller('App\\\\Controller\\\\PackageController::individualPackages')) }}
                    </div>

                    <a href=\"{{ path('reservation_calendar') }}\" class=\"btn\">
                        Consulta el calendario
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=\"box-row location\">
            <div class=\"content\">
                <div class=\"col\">
                    <div class=\"social\">
                        <a href=\"https://www.facebook.com/pbstudiomx/\" target=\"blank\"><span class=\"icon-fb\"></span></a>
                        <a href=\"https://www.instagram.com/pbstudiomx/\" target=\"blank\"><span class=\"icon-instagram-fill\"></span></a>
                    </div>
                    <div><a href=\"mailto:contacto@pbstudio.mx\">contacto@pbstudio.mx</a></div>
                </div>
                <div class=\"col\">
                    <div>
                        <h6>Santa Fé</h6>
                        <h6>Infiniti Center</h6>
                        <p>Prolongación Paseo de la Reforma 215, Paseo de las Lomas, Álvaro Obregón, México City, CP 01330</p>
                        <p><b>Tel:</b> 55 5292 0036</p>
                    </div>
                </div>
                <div class=\"col\">
                    <div>
                        <h6>Interlomas</h6>
                        <h6>Centtral Interlomas</h6>
                        <p>Av. Palmas Hills 1-2, Huixquilucan, Estado de México, México. CP 52763</p>
                        <p><b>Tel:</b> 55 5087 8039</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "package/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\package\\index.html.twig");
    }
}
