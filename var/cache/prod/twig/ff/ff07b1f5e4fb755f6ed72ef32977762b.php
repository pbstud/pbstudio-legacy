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

/* backend/default/form/fields.html.twig */
class __TwigTemplate_f9240180af960a78b2157508dfe9e0d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_row' => [$this, 'block_form_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "backend/default/form/fields.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<div class=\"form-group ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 4), "valid", [], "any", false, false, false, 4)) {
            yield "has-error";
        }
        yield "\">";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 8
        yield "</div>";
        return; yield '';
    }

    // line 11
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 13
            yield "<ul class=\"fa-ul\">";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                yield "<li>
                    <i class=\"fa fa-li fa-exclamation-circle\"></i>
                    <span class=\"text-warning\">";
                // line 17
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 17), "html", null, true);
                yield "</span>
                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "</ul>";
        }
        return; yield '';
    }

    // line 24
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"accordion_choice_expanded\">
        <div class=\"panel-group\" id=\"accordion\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["group"]) {
            // line 28
            if (is_iterable($context["group"])) {
                // line 29
                yield "<div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h2 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"collapsed\" href=\"#collapse";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 32), "html", null, true);
                yield "\">
                                    ";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["translation_domain"] ?? null)), "html", null, true);
                yield "
                                </a>
                            </h2>
                        </div>
                        <div id=\"collapse";
                // line 37
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
                yield "\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <table class=\"table\">
                                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["group"]);
                foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                    // line 41
                    yield "                                        <tr>
                                            <td valign=\"middle\">";
                    // line 43
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_0 = ($context["form"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 'widget', ["attr" => ["class" => "flat"]]);
                    // line 48
                    yield "&nbsp;&nbsp;";
                    // line 49
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_1 = ($context["form"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null), 'label');
                    // line 50
                    yield "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "                                </table>
                            </div>
                        </div>
                    </div>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "        </div>
    </div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/form/fields.html.twig";
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
        return array (  190 => 59,  172 => 53,  164 => 50,  162 => 49,  160 => 48,  158 => 43,  155 => 41,  151 => 40,  145 => 37,  138 => 33,  134 => 32,  129 => 29,  127 => 28,  110 => 27,  104 => 25,  100 => 24,  94 => 20,  86 => 17,  82 => 15,  78 => 14,  76 => 13,  74 => 12,  70 => 11,  65 => 8,  63 => 7,  61 => 6,  59 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/form/fields.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/form/fields.html.twig");
    }
}
