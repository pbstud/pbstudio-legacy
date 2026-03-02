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

/* staff/index.html.twig */
class __TwigTemplate_2ecbdb733bd13a768662ab39c178b41b extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "staff/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Instructores | ";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <section class=\"page\">
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"title\">
                    <h1>Instructores</h1>
                </div>
                <div class=\"coach\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["instructors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 14
            yield "                        <div class=\"clearfix\">
                            <div class=\"grid-1-4 left\">
                                ";
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 16), "photo", [], "any", false, false, false, 16)) {
                // line 17
                yield "                                    <div>
                                        <img src=\"";
                // line 18
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 18)), "html", null, true);
                yield "\" alt=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 18), "firstname", [], "any", false, false, false, 18), "html", null, true);
                yield " - Instructor P&amp;B\">
                                    </div>
                                ";
            }
            // line 21
            yield "                            </div>
                            <div class=\"grid-1-8 left\">
                                <h4>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 23), "firstname", [], "any", false, false, false, 23), "html", null, true);
            yield "</h4>

                                <p>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 25), "description", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>

                                <a href=\"#\" class=\"btn reserve-class-toggle\">Reservar clase</a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                </div>
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
        return "staff/index.html.twig";
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
        return array (  111 => 31,  99 => 25,  94 => 23,  90 => 21,  82 => 18,  79 => 17,  77 => 16,  73 => 14,  69 => 13,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "staff/index.html.twig", "/var/www/pbstudio/releases/81/templates/staff/index.html.twig");
    }
}
