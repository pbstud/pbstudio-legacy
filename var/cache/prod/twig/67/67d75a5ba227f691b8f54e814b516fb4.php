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

/* resetting/reset.html.twig */
class __TwigTemplate_75754ddac1d80b9ca8b08b03b07c3e07 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "resetting/reset.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Restablecer contraseña | ";
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <section class=\"box-form\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["danger"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 8
            yield "            <div class=\"error\">
                <p>";
            // line 9
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_message"], "html", null, true);
            yield "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
        <div class=\"gradient\">
            <div class=\"row\">
                <h2>Restablecer contraseña</h2>
                <div>
                    ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetting_reset", ["token" => ($context["token"] ?? null)]), "attr" => ["class" => "fos_user_resetting_reset"]]);
        yield "
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18), 'widget', ["attr" => ["placeholder" => "Nueva contraseña"]]);
        // line 22
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 23), "first", [], "any", false, false, false, 23), 'errors');
        yield "

                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 25), "second", [], "any", false, false, false, 25), 'widget', ["attr" => ["placeholder" => "Repita la contraseña"]]);
        // line 29
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 30), "second", [], "any", false, false, false, 30), 'errors');
        yield "

                        <button type=\"submit\">Cambiar Contraseña</button>
                    ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
        <br />
    </section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "resetting/reset.html.twig";
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
        return array (  111 => 33,  105 => 30,  102 => 29,  100 => 25,  95 => 23,  92 => 22,  90 => 18,  86 => 17,  79 => 12,  70 => 9,  67 => 8,  63 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "resetting/reset.html.twig", "/var/www/pbstudio/releases/81/templates/resetting/reset.html.twig");
    }
}
