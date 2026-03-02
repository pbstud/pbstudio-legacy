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

/* @LiipImagine/Form/form_div_layout.html.twig */
class __TwigTemplate_f969a0fc520de2b471f43ea7200635d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'liip_imagine_image_widget' => [$this, 'block_liip_imagine_image_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('liip_imagine_image_widget', $context, $blocks);
        return; yield '';
    }

    public function block_liip_imagine_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            yield "        ";
            if (($context["image_path"] ?? null)) {
                // line 4
                yield "            <div>
                ";
                // line 5
                if (($context["link_url"] ?? null)) {
                    // line 6
                    yield "                    <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ((($context["link_filter"] ?? null)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["link_url"] ?? null), ($context["link_filter"] ?? null))) : (($context["link_url"] ?? null))), "html", null, true);
                    yield "\" ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["link_attr"] ?? null));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrname"], "html", null, true);
                        yield "=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrvalue"], "html", null, true);
                        yield "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield ">
                ";
                }
                // line 8
                yield "
                <img src=\"";
                // line 9
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["image_path"] ?? null), ($context["image_filter"] ?? null)), "html", null, true);
                yield "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["image_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrname"], "html", null, true);
                    yield "=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["attrvalue"], "html", null, true);
                    yield "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield " />

                ";
                // line 11
                if (($context["link_url"] ?? null)) {
                    // line 12
                    yield "                    </a>
                ";
                }
                // line 14
                yield "            </div>
        ";
            }
            // line 16
            yield "
        ";
            // line 17
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
    ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@LiipImagine/Form/form_div_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  114 => 2,  109 => 17,  106 => 16,  102 => 14,  98 => 12,  96 => 11,  79 => 9,  76 => 8,  58 => 6,  56 => 5,  53 => 4,  50 => 3,  47 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@LiipImagine/Form/form_div_layout.html.twig", "/var/www/pbstudio/releases/81/vendor/liip/imagine-bundle/Resources/views/Form/form_div_layout.html.twig");
    }
}
