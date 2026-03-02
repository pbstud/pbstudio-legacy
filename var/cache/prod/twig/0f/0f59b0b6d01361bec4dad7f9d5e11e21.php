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

/* contact/index.html.twig */
class __TwigTemplate_b96eaba2fb6d5c559169d853b48de36f extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "contact/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Contáctanos | ";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), ["form_div_layout.html.twig"], false);
        // line 7
        yield "
    <section class=\"page\">
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"title\">
                    <h1>Contáctanos</h1>
                </div>
                <div class=\"clearfix contact\">
                    <div class=\"info_contact grid-1-6 left\">
                        <div class=\"clearfix\">
                            <span class=\"icon-email\"></span><p>contacto@pbstudio.mx</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-location\"></span><p>Infiniti Center Santa Fé, Av. Prolongación Paseo de la reforma 215, Paseo de las Lomas, Álvaro Obregón, México, CP 01330</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-phone\"></span><p>Tel: (55) 5292 0036</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-location\"></span><p>Av. Palmas Hills 1-2, Huixquilucan, Estado de México, México. CP 52763</p>
                        </div>
                        <div class=\"clearfix\">
                            <span class=\"icon-phone\"></span><p>Tel: (55) 5087 8039</p>
                        </div>
                    </div>
                    <div class=\"grid-1-6 left\">
                        ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_flash.html.twig");
        yield "

                        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 36), 'widget', ["attr" => ["placeholder" => "Nombre"]]);
        // line 40
        yield "
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 41), 'widget', ["attr" => ["placeholder" => "Teléfono"]]);
        // line 45
        yield "
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Correo"]]);
        // line 50
        yield "
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 51), 'widget', ["attr" => ["placeholder" => "Mensaje"]]);
        // line 55
        yield "

                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 57), 'widget', ["label" => "Enviar"]);
        // line 59
        yield "
                        ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.0459954668245!2d-99.26987428510839!3d19.367160986921522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200cff90579b1%3A0x9e1cf9e5d5e1edfe!2sP%26B%20Studio!5e0!3m2!1ses-419!2smx!4v1593362959511!5m2!1ses-419!2smx\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
            </div>
        </div>
    </section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact/index.html.twig";
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
        return array (  126 => 60,  123 => 59,  121 => 57,  117 => 55,  115 => 51,  112 => 50,  110 => 46,  107 => 45,  105 => 41,  102 => 40,  100 => 36,  96 => 35,  91 => 33,  63 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "/var/www/pbstudio/releases/81/templates/contact/index.html.twig");
    }
}
