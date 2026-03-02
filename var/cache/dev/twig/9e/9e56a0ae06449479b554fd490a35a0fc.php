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

/* default/_modal_notice.html.twig */
class __TwigTemplate_cb2eb51c4d07008ffa6b1802eda63087 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_modal_notice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_modal_notice.html.twig"));

        // line 1
        yield "<div class=\"remodal remodal-notice\" data-remodal-id=\"modal-notice\" data-remodal-options=\"hashTracking:false,closeOnEscape: false,closeOnOutsideClick: false\">
    <section class=\"pop_box\">
        <div class=\"row clearfix\">
            <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>
            <div class=\"center\">
                ";
        // line 6
        if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 6, $this->source); })())) {
            // line 7
            yield "                    <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "\"><img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 7, $this->source); })()), "file")), "html", null, true);
            yield "\" alt=\"Aviso\"></a>
                ";
        } else {
            // line 9
            yield "                    <img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 9, $this->source); })()), "file")), "html", null, true);
            yield "\" alt=\"Aviso\">
                ";
        }
        // line 11
        yield "            </div>
        </div>
    </section>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/_modal_notice.html.twig";
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
        return array (  67 => 11,  61 => 9,  53 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal remodal-notice\" data-remodal-id=\"modal-notice\" data-remodal-options=\"hashTracking:false,closeOnEscape: false,closeOnOutsideClick: false\">
    <section class=\"pop_box\">
        <div class=\"row clearfix\">
            <a data-remodal-action=\"close\" class=\"nav-toggle close\"><span class=\"iconMenu\"></span></a>
            <div class=\"center\">
                {% if url %}
                    <a href=\"{{ url }}\"><img src=\"{{ asset(vich_uploader_asset(image, 'file')) }}\" alt=\"Aviso\"></a>
                {% else %}
                    <img src=\"{{ asset(vich_uploader_asset(image, 'file')) }}\" alt=\"Aviso\">
                {% endif %}
            </div>
        </div>
    </section>
</div>", "default/_modal_notice.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\default\\_modal_notice.html.twig");
    }
}
