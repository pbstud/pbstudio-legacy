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

/* backend/default/form/bootstrap.html.twig */
class __TwigTemplate_0c9e78d35a51512e1d6426fbe8116aad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "backend/default/form/bootstrap.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'switch_row' => [$this, 'block_switch_row'],
                'switch_label' => [$this, 'block_switch_label'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'money_int_row' => [$this, 'block_money_int_row'],
                'money_int_widget' => [$this, 'block_money_int_widget'],
                'datepicker_row' => [$this, 'block_datepicker_row'],
                'datepicker_widget' => [$this, 'block_datepicker_widget'],
                'percent_row' => [$this, 'block_percent_row'],
                'percent_widget' => [$this, 'block_percent_widget'],
                '_package_daysExpiry_row' => [$this, 'block__package_daysExpiry_row'],
                '_package_daysExpiry_widget' => [$this, 'block__package_daysExpiry_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 7
        yield "
";
        // line 8
        yield from $this->unwrap()->yieldBlock('switch_row', $context, $blocks);
        // line 11
        yield "
";
        // line 12
        yield from $this->unwrap()->yieldBlock('switch_label', $context, $blocks);
        // line 15
        yield "
";
        // line 16
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 23
        yield "
";
        // line 24
        yield from $this->unwrap()->yieldBlock('money_int_row', $context, $blocks);
        // line 28
        yield "
";
        // line 29
        yield from $this->unwrap()->yieldBlock('money_int_widget', $context, $blocks);
        // line 35
        yield "
";
        // line 36
        yield from $this->unwrap()->yieldBlock('datepicker_row', $context, $blocks);
        // line 40
        yield "
";
        // line 41
        yield from $this->unwrap()->yieldBlock('datepicker_widget', $context, $blocks);
        // line 48
        yield "
";
        // line 49
        yield from $this->unwrap()->yieldBlock('percent_row', $context, $blocks);
        // line 53
        yield "
";
        // line 54
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 59
        yield "
";
        // line 61
        yield from $this->unwrap()->yieldBlock('_package_daysExpiry_row', $context, $blocks);
        // line 65
        yield "
";
        // line 66
        yield from $this->unwrap()->yieldBlock('_package_daysExpiry_widget', $context, $blocks);
        return; yield '';
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["data-parsley-validate" => true]);
        // line 5
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        return; yield '';
    }

    // line 8
    public function block_switch_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 12
    public function block_switch_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        return; yield '';
    }

    // line 16
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["switch" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "switch", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "switch", [], "any", false, false, false, 17), "success")) : ("success"))]);
        // line 18
        yield "<div class=\"form-switch\">
        <input type=\"checkbox\" ";
        // line 19
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if (($context["checked"] ?? null)) {
            yield " checked=\"checked\"";
        }
        yield " />
        <label for=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
        yield "\" data-on-label=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.yes"), "html", null, true);
        yield "\" data-off-label=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.no"), "html", null, true);
        yield "\"></label>
    </div>";
        return; yield '';
    }

    // line 24
    public function block_money_int_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 25), "")) : ("")) . " has-feedback")]);
        // line 26
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 29
    public function block_money_int_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 30), "")) : ("")) . " has-feedback-left has-feedback-right"))]);
        // line 31
        yield "<span class=\"form-control-feedback left\" aria-hidden=\"true\">\$</span>";
        // line 32
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 33
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">.00</span>";
        return; yield '';
    }

    // line 36
    public function block_datepicker_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 37), "")) : ("")) . " has-feedback")]);
        // line 38
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 41
    public function block_datepicker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 42), "")) : ("")) . " datepicker has-feedback-right"))]);
        // line 43
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 44
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">
        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
    </span>";
        return; yield '';
    }

    // line 49
    public function block_percent_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 50), "")) : ("")) . " has-feedback")]);
        // line 51
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 54
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 55), "")) : ("")) . " has-feedback-right"))]);
        // line 56
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 57
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>";
        return; yield '';
    }

    // line 61
    public function block__package_daysExpiry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["row_attr"] ?? null), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 62), "")) : ("")) . " has-feedback")]);
        // line 63
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 66
    public function block__package_daysExpiry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 67), "")) : ("")) . " has-feedback-right"))]);
        // line 68
        yield from         $this->unwrap()->yieldBlock("integer_widget", $context, $blocks);
        // line 69
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">días</span>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/form/bootstrap.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  278 => 69,  276 => 68,  274 => 67,  270 => 66,  265 => 63,  263 => 62,  259 => 61,  254 => 57,  252 => 56,  250 => 55,  246 => 54,  241 => 51,  239 => 50,  235 => 49,  228 => 44,  226 => 43,  224 => 42,  220 => 41,  215 => 38,  213 => 37,  209 => 36,  204 => 33,  202 => 32,  200 => 31,  198 => 30,  194 => 29,  189 => 26,  187 => 25,  183 => 24,  172 => 20,  160 => 19,  157 => 18,  155 => 17,  151 => 16,  146 => 13,  142 => 12,  137 => 9,  133 => 8,  128 => 5,  126 => 4,  122 => 3,  117 => 66,  114 => 65,  112 => 61,  109 => 59,  107 => 54,  104 => 53,  102 => 49,  99 => 48,  97 => 41,  94 => 40,  92 => 36,  89 => 35,  87 => 29,  84 => 28,  82 => 24,  79 => 23,  77 => 16,  74 => 15,  72 => 12,  69 => 11,  67 => 8,  64 => 7,  62 => 3,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/default/form/bootstrap.html.twig", "/var/www/pbstudio/releases/81/templates/backend/default/form/bootstrap.html.twig");
    }
}
