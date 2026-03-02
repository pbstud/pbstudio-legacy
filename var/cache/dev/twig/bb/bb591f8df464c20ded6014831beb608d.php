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
class __TwigTemplate_7ea01586675278a27e594bc63ad77c45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/form/bootstrap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/form/bootstrap.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 4, $this->source); })()), ["data-parsley-validate" => true]);
        // line 5
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_switch_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_row"));

        // line 9
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_switch_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_label"));

        // line 13
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 17
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 17, $this->source); })()), ["switch" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "switch", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "switch", [], "any", false, false, false, 17), "success")) : ("success"))]);
        // line 18
        yield "<div class=\"form-switch\">
        <input type=\"checkbox\" ";
        // line 19
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 19, $this->source); })())) {
            yield " checked=\"checked\"";
        }
        yield " />
        <label for=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" data-on-label=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.yes"), "html", null, true);
        yield "\" data-off-label=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.no"), "html", null, true);
        yield "\"></label>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 24
    public function block_money_int_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_int_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_int_row"));

        // line 25
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 25, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 25), "")) : ("")) . " has-feedback")]);
        // line 26
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 29
    public function block_money_int_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_int_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_int_widget"));

        // line 30
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 30, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 30), "")) : ("")) . " has-feedback-left has-feedback-right"))]);
        // line 31
        yield "<span class=\"form-control-feedback left\" aria-hidden=\"true\">\$</span>";
        // line 32
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 33
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">.00</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 36
    public function block_datepicker_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datepicker_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datepicker_row"));

        // line 37
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 37, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 37), "")) : ("")) . " has-feedback")]);
        // line 38
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 41
    public function block_datepicker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datepicker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datepicker_widget"));

        // line 42
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 42), "")) : ("")) . " datepicker has-feedback-right"))]);
        // line 43
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 44
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">
        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
    </span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 49
    public function block_percent_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_row"));

        // line 50
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 50, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 50), "")) : ("")) . " has-feedback")]);
        // line 51
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 54
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 55
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 55, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 55), "")) : ("")) . " has-feedback-right"))]);
        // line 56
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 57
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 61
    public function block__package_daysExpiry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_package_daysExpiry_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_package_daysExpiry_row"));

        // line 62
        $context["row_attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 62, $this->source); })()), ["class" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 62), "")) : ("")) . " has-feedback")]);
        // line 63
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 66
    public function block__package_daysExpiry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_package_daysExpiry_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_package_daysExpiry_widget"));

        // line 67
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 67, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 67), "")) : ("")) . " has-feedback-right"))]);
        // line 68
        yield from         $this->unwrap()->yieldBlock("integer_widget", $context, $blocks);
        // line 69
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">días</span>
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
        return "backend/default/form/bootstrap.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  428 => 69,  426 => 68,  424 => 67,  414 => 66,  403 => 63,  401 => 62,  391 => 61,  380 => 57,  378 => 56,  376 => 55,  366 => 54,  355 => 51,  353 => 50,  343 => 49,  330 => 44,  328 => 43,  326 => 42,  316 => 41,  305 => 38,  303 => 37,  293 => 36,  282 => 33,  280 => 32,  278 => 31,  276 => 30,  266 => 29,  255 => 26,  253 => 25,  243 => 24,  226 => 20,  214 => 19,  211 => 18,  209 => 17,  199 => 16,  188 => 13,  178 => 12,  167 => 9,  157 => 8,  146 => 5,  144 => 4,  134 => 3,  123 => 66,  120 => 65,  118 => 61,  115 => 59,  113 => 54,  110 => 53,  108 => 49,  105 => 48,  103 => 41,  100 => 40,  98 => 36,  95 => 35,  93 => 29,  90 => 28,  88 => 24,  85 => 23,  83 => 16,  80 => 15,  78 => 12,  75 => 11,  73 => 8,  70 => 7,  68 => 3,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% use 'bootstrap_3_layout.html.twig' %}

{%- block form_start -%}
    {% set attr = attr|merge({'data-parsley-validate': true}) %}
    {{- parent() -}}
{% endblock form_start %}

{% block switch_row -%}
    {{- block('form_row') -}}
{% endblock %}

{% block switch_label -%}
    {{- block('form_label') -}}
{% endblock %}

{% block switch_widget -%}
    {%- set attr = attr|merge({switch: attr.switch|default('success')}) -%}
    <div class=\"form-switch\">
        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
        <label for=\"{{ id }}\" data-on-label=\"{{ 'label.yes'|trans }}\" data-off-label=\"{{ 'label.no'|trans }}\"></label>
    </div>
{%- endblock %}

{% block money_int_row -%}
    {% set row_attr = row_attr|merge({class: (row_attr.class|default('') ~ ' has-feedback')}) %}
    {{- block('form_row') -}}
{% endblock %}

{% block money_int_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' has-feedback-left has-feedback-right')|trim}) -%}
    <span class=\"form-control-feedback left\" aria-hidden=\"true\">\$</span>
    {{- block('form_widget_simple') -}}
    <span class=\"form-control-feedback right\" aria-hidden=\"true\">.00</span>
{%- endblock %}

{% block datepicker_row -%}
    {% set row_attr = row_attr|merge({class: (row_attr.class|default('') ~ ' has-feedback')}) %}
    {{- block('form_row') -}}
{% endblock %}

{% block datepicker_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' datepicker has-feedback-right')|trim}) -%}
    {{- block('form_widget_simple') -}}
    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
    </span>
{%- endblock %}

{% block percent_row -%}
    {% set row_attr = row_attr|merge({class: (row_attr.class|default('') ~ ' has-feedback')}) %}
    {{- block('form_row') -}}
{% endblock %}

{% block percent_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' has-feedback-right')|trim}) -%}
    {{- block('form_widget_simple') -}}
    <span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>
{%- endblock %}

{# Custom espcific fields #}
{% block _package_daysExpiry_row -%}
    {% set row_attr = row_attr|merge({class: (row_attr.class|default('') ~ ' has-feedback')}) %}
    {{- block('form_row') -}}
{% endblock %}

{% block _package_daysExpiry_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' has-feedback-right')|trim}) -%}
    {{- block('integer_widget') -}}
    <span class=\"form-control-feedback right\" aria-hidden=\"true\">días</span>
{% endblock %}
", "backend/default/form/bootstrap.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\form\\bootstrap.html.twig");
    }
}
