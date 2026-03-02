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

/* profile/index.html.twig */
class __TwigTemplate_7f2ca461734e6a0fdd783284c69530d6 extends Template
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
        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Mi Cuenta | ";
        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        // line 7
        yield "
    ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_aside.html.twig");
        yield "

    ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "profile/_transactions.html.twig");
        yield "

    <div class=\"row\">
        <div class=\"content general\">
            <h4 id=\"perfil\"><small>Datos de usuario</small></h4>
            <div id=\"profile_container\">
                <div>
                    <p> <span class=\"icon-individual\"></span>";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user"] ?? null), "html", null, true);
        yield "</p>
                </div>
                <div>
                    <p><span class=\"icon-email\"></span>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                </div>
                <div>
                    <p> <span class=\"icon-phone\"></span>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 23), "-----")) : ("-----")), "html", null, true);
        yield "</p>
                </div>

                <h6><small>Contacto de emergencia</small></h6>
                <p>Nombre: ";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactName", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactName", [], "any", false, false, false, 27), "-----")) : ("-----")), "html", null, true);
        yield "</p>
                <p>Teléfono: ";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactPhone", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "emergencyContactPhone", [], "any", false, false, false, 28), "-----")) : ("-----")), "html", null, true);
        yield "</p>

                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["_fragment" => "section-content"]);
        yield "\" class=\"link\">Editar</a>
            </div>
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
        return "profile/index.html.twig";
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
        return array (  108 => 30,  103 => 28,  99 => 27,  92 => 23,  86 => 20,  80 => 17,  70 => 10,  65 => 8,  62 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/index.html.twig", "/var/www/pbstudio/releases/81/templates/profile/index.html.twig");
    }
}
