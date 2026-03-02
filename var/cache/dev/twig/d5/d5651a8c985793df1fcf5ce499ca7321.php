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

/* home/index.html.twig */
class __TwigTemplate_8655dd58b5012e3ae6862f5d9c82cc22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <section>
        <div class=\"row\">
            <div class=\"banner-home\">
                <picture>
                    <source media='(min-width: 701px)'
                            srcset='";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/banner-desktop.jpg"), "html", null, true);
        yield "'/>
                    <source media='(max-width: 700px)'
                            srcset='";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/banner-mobile.jpg"), "html", null, true);
        yield "'/>
                    <img src='";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/banner-desktop.jpg"), "html", null, true);
        yield "'/>
                </picture>
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn white reserve-class-toggle\">Reservar clase</a>
            </div>
        </div>
    </section>
    <section>
        <div class=\"box-row\">
            <div class=\"box\">
                <img src=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/pilates.jpg"), "html", null, true);
        yield "\" alt=\"P&B Studio Online\">
                <h4 class=\"position-center\">P&B Studio Online</h4>
                <div class=\"overlay\">
                    <h4>P&B Studio Online</h4>
                    <p>El ejercicio más completo que te acompaña a donde quiera que vayas</p>
                    <a href=\"https://www.pbstudio.online\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"btn white\">Ir a P&B Studio Online</a>
                </div>
            </div>
            <div class=\"box\">
                <img src=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home/barra.jpg"), "html", null, true);
        yield "\" alt=\"Strong Mom\">
                <h4 class=\"position-center\">Strong Mom <br><span style=\"font-size: 14px\">By P&B Studio</span></h4>
                <div class=\"overlay\">
                    <h4>Strong Mom</h4>
                    <p>Te acompañamos durante todo tu embarazo y posparto</p>
                    <a href=\"https://www.pbstudio.online\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"btn white\">Ir a Strong Mom by P&B Studio</a>
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
        // line 70
        yield $this->env->getRuntime('App\Twig\Runtime\ConfigExtensionRuntime')->getNotice($this->env);
        yield "
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
        return "home/index.html.twig";
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
        return array (  155 => 70,  112 => 30,  100 => 21,  90 => 14,  85 => 12,  81 => 11,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block content %}
    <section>
        <div class=\"row\">
            <div class=\"banner-home\">
                <picture>
                    <source media='(min-width: 701px)'
                            srcset='{{ asset('images/home/banner-desktop.jpg') }}'/>
                    <source media='(max-width: 700px)'
                            srcset='{{ asset('images/home/banner-mobile.jpg') }}'/>
                    <img src='{{ asset('images/home/banner-desktop.jpg') }}'/>
                </picture>
                <a href=\"{{ path('reservation_calendar') }}\" class=\"btn white reserve-class-toggle\">Reservar clase</a>
            </div>
        </div>
    </section>
    <section>
        <div class=\"box-row\">
            <div class=\"box\">
                <img src=\"{{ asset('images/home/pilates.jpg') }}\" alt=\"P&B Studio Online\">
                <h4 class=\"position-center\">P&B Studio Online</h4>
                <div class=\"overlay\">
                    <h4>P&B Studio Online</h4>
                    <p>El ejercicio más completo que te acompaña a donde quiera que vayas</p>
                    <a href=\"https://www.pbstudio.online\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"btn white\">Ir a P&B Studio Online</a>
                </div>
            </div>
            <div class=\"box\">
                <img src=\"{{ asset('images/home/barra.jpg') }}\" alt=\"Strong Mom\">
                <h4 class=\"position-center\">Strong Mom <br><span style=\"font-size: 14px\">By P&B Studio</span></h4>
                <div class=\"overlay\">
                    <h4>Strong Mom</h4>
                    <p>Te acompañamos durante todo tu embarazo y posparto</p>
                    <a href=\"https://www.pbstudio.online\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"btn white\">Ir a Strong Mom by P&B Studio</a>
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

    {{ config_notice() }}
{% endblock %}
", "home/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\home\\index.html.twig");
    }
}
