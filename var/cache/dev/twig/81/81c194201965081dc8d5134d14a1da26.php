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

/* backend/transaction/new.html.twig */
class __TwigTemplate_e380ab69db7fad687851804a0da1a816 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 7
        $_trait_0 = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "backend/transaction/new.html.twig", 7);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_3_horizontal_layout.html.twig".'" cannot be used as a trait.', 7, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_group_class' => [$this, 'block_form_group_class'],
                '_transaction_discount_widget' => [$this, 'block__transaction_discount_widget'],
                'section' => [$this, 'block_section'],
                'javascripts' => [$this, 'block_javascripts'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/new.html.twig"));

        // line 3
        $context["page_section"] = "Transacciones";
        // line 4
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction");
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), [$this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/transaction/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 10
        yield "col-md-3 col-sm-3 col-xs-12";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 13
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 14
        yield "col-md-6 col-sm-6 col-xs-12";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 17
    public function block__transaction_discount_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_transaction_discount_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_transaction_discount_widget"));

        // line 18
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 18, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 18), "")) : ("")) . " has-feedback-right"))]);
        // line 19
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 20
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 23
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 24
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["id" => "form-transaction-new", "class" => "form-horizontal form-label-left", "autocomplete" => "off", "data-parsley-validate" => ""]]);
        // line 31
        yield "
        <div class=\"row\">
            ";
        // line 33
        yield from         $this->loadTemplate("backend/transaction/new.html.twig", "backend/transaction/new.html.twig", 33, "1051290083")->unwrap()->yield(CoreExtension::arrayMerge($context, ["title" => "Forma de pago"]));
        // line 106
        yield "        </div>

        <div class=\"row\">
            ";
        // line 109
        yield from         $this->loadTemplate("backend/transaction/new.html.twig", "backend/transaction/new.html.twig", 109, "49862992")->unwrap()->yield(CoreExtension::arrayMerge($context, ["title" => "Detalle de la transacción"]));
        // line 230
        yield "        </div>
    ";
        // line 231
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 234
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script type=\"text/javascript\">
        checkoutHandler('";
        // line 238
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["conekta_public_key"]) || array_key_exists("conekta_public_key", $context) ? $context["conekta_public_key"] : (function () { throw new RuntimeError('Variable "conekta_public_key" does not exist.', 238, $this->source); })()), "html", null, true);
        yield "');
    </script>
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
        return "backend/transaction/new.html.twig";
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
        return array (  209 => 238,  202 => 235,  192 => 234,  179 => 231,  176 => 230,  174 => 109,  169 => 106,  167 => 33,  163 => 31,  160 => 24,  150 => 23,  138 => 20,  136 => 19,  134 => 18,  124 => 17,  113 => 14,  103 => 13,  92 => 10,  82 => 9,  71 => 1,  69 => 6,  67 => 4,  65 => 3,  52 => 1,  29 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Transacciones' %}
{% set return_to = path('backend_transaction') %}

{% form_theme form _self %}
{% use 'bootstrap_3_horizontal_layout.html.twig' %}

{% block form_label_class -%}
    col-md-3 col-sm-3 col-xs-12
{%- endblock form_label_class %}

{% block form_group_class -%}
    col-md-6 col-sm-6 col-xs-12
{%- endblock form_group_class %}

{% block _transaction_discount_widget %}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' has-feedback-right')|trim}) -%}
    {{- block('form_widget_simple') -}}
    <span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>
{% endblock %}

{% block section %}
    {{ form_start(form, {
        'attr': {
            'id': 'form-transaction-new',
            'class': 'form-horizontal form-label-left',
            'autocomplete': 'off',
            'data-parsley-validate': '',
        }
    }) }}
        <div class=\"row\">
            {% embed 'backend/default/_card.html.twig' with {
                'title': 'Forma de pago',
            } %}
                {% block content %}
                    {{ form_row(form.chargeMethod) }}

                    <div id=\"PaymentMethodExtraFields\">
                        <div class=\"payment-panel hidden\" id=\"payment_card\">
                            <div class=\"panel panel-primary not-radius\">
                                <div class=\"panel-heading not-radius\">Información de la tarjeta</div>

                                <div class=\"panel-body\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_name\">Nombre del titular:</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_name\" class=\"form-control\" size=\"20\" data-conekta=\"card[name]\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_number\">Número:</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_number\" class=\"form-control\" size=\"20\" data-conekta=\"card[number]\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_exp_year\">Vigencia:</label>

                                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                            <select id=\"transaction_card_exp_year\" class=\"form-control\" data-conekta=\"card[exp_month]\">
                                                <option value=\"\">Mes</option>
                                                {% for i in 1..12 %}
                                                    <option value=\"{{ '%02d'|format(i) }}\">{{ '%02d'|format(i) }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                            <select class=\"form-control\" data-conekta=\"card[exp_year]\">
                                                <option value=\"\">Año</option>
                                                {% set startYear = 'now'|date('Y') %}
                                                {% set endYear = startYear + 10 %}
                                                {% for i in startYear..endYear %}
                                                    <option value=\"{{ i }}\">{{ i }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_cvc\">Código de seguridad:</label>
                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_cvc\" class=\"form-control\" data-conekta=\"card[cvc]\" placeholder=\"***\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"payment-panel hidden\" id=\"payment_pos\">
                            <div class=\"panel panel-primary not-radius\">
                                <div class=\"panel-heading not-radius\">Información de la transacción</div>

                                <div class=\"panel-body\">
                                    {{ form_row(form.cardLast4) }}
                                    {{ form_row(form.chargeAuthCode) }}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"row\">
            {% embed 'backend/default/_card.html.twig' with {
                'title': 'Detalle de la transacción',
            } %}
                {% block content %}
                    {{ form_row(form.branchOffice) }}

                    <div class=\"form-group\">
                        {{ form_label(form.user) }}
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(form.user, {'attr': {'data-parsley-errors-container': '#errors-user'}}) }}
                            {{- form_errors(form) -}}
                            <div id=\"errors-user\"></div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Email</label>

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"transaction_user_email\" class=\"form-control\" readonly />
                        </div>
                    </div>

                    {{ form_row(form.package) }}

                    <div class=\"form-group\">
                        {{ form_label(form.coupon) }}

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"input-group\">
                                {{ form_widget(form.coupon) }}
                                <input type=\"text\" id=\"coupon_code\" class=\"form-control\">
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" id=\"btn_coupon\" class=\"btn btn-success\" data-url=\"{{ path('backend_coupon_validate') }}\">
                                        Aplicar
                                    </button>
                                </span>
                            </div>
                            {{ form_errors(form.coupon) }}
                        </div>
                    </div>

                    {{ form_row(form.discount, {'attr': {
                        'min': 0,
                        'max': 99
                    }}) }}

                    <div class=\"form-group has-feedback\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Fecha de expiración</label>

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"transaction_package_expiration_at\" class=\"form-control has-feedback-right\" readonly />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                        </div>
                    </div>

                    <div class=\"ln_solid\"></div>

                    <div class=\"row\">
                        <div class=\"panel panel-success not-radius\">
                            <div class=\"panel-heading not-radius\"><strong>Resumen de Compra</strong></div>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th style=\"width: 25%\">Precio</th>
                                    <td>
                                        \$<span id=\"package_amount\">0.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Precio Especial</th>
                                    <td>
                                        \$<span id=\"special_price\">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Cupón de Descuento
                                        <span id=\"coupon_percentaje\"></span>
                                    </th>
                                    <td>
                                        \$<span id=\"coupon_total\">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Descuento Adicional
                                        <span id=\"additional_discount_percentaje\"></span>
                                    </th>
                                    <td>
                                        \$<span id=\"additional_discount\">--</span>
                                    </td>
                                </tr>
                                <tr class=\"warning\">
                                    <th>Total</th>
                                    <th>
                                        \$<span id=\"transaction_total\">0.00</span>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"ln_solid\"></div>

                    <div class=\"form-group\">
                        <div class=\"col-md-12\">
                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<i class='fa fa-circle-o-notch fa-spin'></i> Registrando ...\">
                                    Registrar
                                </button>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                {% endblock %}
            {% endembed %}
        </div>
    {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        checkoutHandler('{{ conekta_public_key }}');
    </script>
{% endblock %}
", "backend/transaction/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\transaction\\new.html.twig");
    }
}


/* backend/transaction/new.html.twig */
class __TwigTemplate_e380ab69db7fad687851804a0da1a816___1051290083 extends Template
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
        // line 33
        return "backend/default/_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/_card.html.twig", "backend/transaction/new.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 37
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "chargeMethod", [], "any", false, false, false, 37), 'row');
        yield "

                    <div id=\"PaymentMethodExtraFields\">
                        <div class=\"payment-panel hidden\" id=\"payment_card\">
                            <div class=\"panel panel-primary not-radius\">
                                <div class=\"panel-heading not-radius\">Información de la tarjeta</div>

                                <div class=\"panel-body\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_name\">Nombre del titular:</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_name\" class=\"form-control\" size=\"20\" data-conekta=\"card[name]\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_number\">Número:</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_number\" class=\"form-control\" size=\"20\" data-conekta=\"card[number]\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_exp_year\">Vigencia:</label>

                                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                            <select id=\"transaction_card_exp_year\" class=\"form-control\" data-conekta=\"card[exp_month]\">
                                                <option value=\"\">Mes</option>
                                                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 66
            yield "                                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%02d", $context["i"]), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%02d", $context["i"]), "html", null, true);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                                            </select>
                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                            <select class=\"form-control\" data-conekta=\"card[exp_year]\">
                                                <option value=\"\">Año</option>
                                                ";
        // line 74
        $context["startYear"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y");
        // line 75
        yield "                                                ";
        $context["endYear"] = ((isset($context["startYear"]) || array_key_exists("startYear", $context) ? $context["startYear"] : (function () { throw new RuntimeError('Variable "startYear" does not exist.', 75, $this->source); })()) + 10);
        // line 76
        yield "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startYear"]) || array_key_exists("startYear", $context) ? $context["startYear"] : (function () { throw new RuntimeError('Variable "startYear" does not exist.', 76, $this->source); })()), (isset($context["endYear"]) || array_key_exists("endYear", $context) ? $context["endYear"] : (function () { throw new RuntimeError('Variable "endYear" does not exist.', 76, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 77
            yield "                                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["i"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["i"], "html", null, true);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_cvc\">Código de seguridad:</label>
                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_cvc\" class=\"form-control\" data-conekta=\"card[cvc]\" placeholder=\"***\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"payment-panel hidden\" id=\"payment_pos\">
                            <div class=\"panel panel-primary not-radius\">
                                <div class=\"panel-heading not-radius\">Información de la transacción</div>

                                <div class=\"panel-body\">
                                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "cardLast4", [], "any", false, false, false, 98), 'row');
        yield "
                                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "chargeAuthCode", [], "any", false, false, false, 99), 'row');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
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
        return "backend/transaction/new.html.twig";
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
        return array (  647 => 99,  643 => 98,  622 => 79,  611 => 77,  606 => 76,  603 => 75,  601 => 74,  593 => 68,  582 => 66,  578 => 65,  546 => 37,  536 => 36,  513 => 33,  209 => 238,  202 => 235,  192 => 234,  179 => 231,  176 => 230,  174 => 109,  169 => 106,  167 => 33,  163 => 31,  160 => 24,  150 => 23,  138 => 20,  136 => 19,  134 => 18,  124 => 17,  113 => 14,  103 => 13,  92 => 10,  82 => 9,  71 => 1,  69 => 6,  67 => 4,  65 => 3,  52 => 1,  29 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Transacciones' %}
{% set return_to = path('backend_transaction') %}

{% form_theme form _self %}
{% use 'bootstrap_3_horizontal_layout.html.twig' %}

{% block form_label_class -%}
    col-md-3 col-sm-3 col-xs-12
{%- endblock form_label_class %}

{% block form_group_class -%}
    col-md-6 col-sm-6 col-xs-12
{%- endblock form_group_class %}

{% block _transaction_discount_widget %}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' has-feedback-right')|trim}) -%}
    {{- block('form_widget_simple') -}}
    <span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>
{% endblock %}

{% block section %}
    {{ form_start(form, {
        'attr': {
            'id': 'form-transaction-new',
            'class': 'form-horizontal form-label-left',
            'autocomplete': 'off',
            'data-parsley-validate': '',
        }
    }) }}
        <div class=\"row\">
            {% embed 'backend/default/_card.html.twig' with {
                'title': 'Forma de pago',
            } %}
                {% block content %}
                    {{ form_row(form.chargeMethod) }}

                    <div id=\"PaymentMethodExtraFields\">
                        <div class=\"payment-panel hidden\" id=\"payment_card\">
                            <div class=\"panel panel-primary not-radius\">
                                <div class=\"panel-heading not-radius\">Información de la tarjeta</div>

                                <div class=\"panel-body\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_name\">Nombre del titular:</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_name\" class=\"form-control\" size=\"20\" data-conekta=\"card[name]\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_number\">Número:</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_number\" class=\"form-control\" size=\"20\" data-conekta=\"card[number]\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_exp_year\">Vigencia:</label>

                                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                            <select id=\"transaction_card_exp_year\" class=\"form-control\" data-conekta=\"card[exp_month]\">
                                                <option value=\"\">Mes</option>
                                                {% for i in 1..12 %}
                                                    <option value=\"{{ '%02d'|format(i) }}\">{{ '%02d'|format(i) }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                            <select class=\"form-control\" data-conekta=\"card[exp_year]\">
                                                <option value=\"\">Año</option>
                                                {% set startYear = 'now'|date('Y') %}
                                                {% set endYear = startYear + 10 %}
                                                {% for i in startYear..endYear %}
                                                    <option value=\"{{ i }}\">{{ i }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_cvc\">Código de seguridad:</label>
                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_cvc\" class=\"form-control\" data-conekta=\"card[cvc]\" placeholder=\"***\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"payment-panel hidden\" id=\"payment_pos\">
                            <div class=\"panel panel-primary not-radius\">
                                <div class=\"panel-heading not-radius\">Información de la transacción</div>

                                <div class=\"panel-body\">
                                    {{ form_row(form.cardLast4) }}
                                    {{ form_row(form.chargeAuthCode) }}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"row\">
            {% embed 'backend/default/_card.html.twig' with {
                'title': 'Detalle de la transacción',
            } %}
                {% block content %}
                    {{ form_row(form.branchOffice) }}

                    <div class=\"form-group\">
                        {{ form_label(form.user) }}
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(form.user, {'attr': {'data-parsley-errors-container': '#errors-user'}}) }}
                            {{- form_errors(form) -}}
                            <div id=\"errors-user\"></div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Email</label>

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"transaction_user_email\" class=\"form-control\" readonly />
                        </div>
                    </div>

                    {{ form_row(form.package) }}

                    <div class=\"form-group\">
                        {{ form_label(form.coupon) }}

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"input-group\">
                                {{ form_widget(form.coupon) }}
                                <input type=\"text\" id=\"coupon_code\" class=\"form-control\">
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" id=\"btn_coupon\" class=\"btn btn-success\" data-url=\"{{ path('backend_coupon_validate') }}\">
                                        Aplicar
                                    </button>
                                </span>
                            </div>
                            {{ form_errors(form.coupon) }}
                        </div>
                    </div>

                    {{ form_row(form.discount, {'attr': {
                        'min': 0,
                        'max': 99
                    }}) }}

                    <div class=\"form-group has-feedback\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Fecha de expiración</label>

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"transaction_package_expiration_at\" class=\"form-control has-feedback-right\" readonly />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                        </div>
                    </div>

                    <div class=\"ln_solid\"></div>

                    <div class=\"row\">
                        <div class=\"panel panel-success not-radius\">
                            <div class=\"panel-heading not-radius\"><strong>Resumen de Compra</strong></div>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th style=\"width: 25%\">Precio</th>
                                    <td>
                                        \$<span id=\"package_amount\">0.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Precio Especial</th>
                                    <td>
                                        \$<span id=\"special_price\">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Cupón de Descuento
                                        <span id=\"coupon_percentaje\"></span>
                                    </th>
                                    <td>
                                        \$<span id=\"coupon_total\">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Descuento Adicional
                                        <span id=\"additional_discount_percentaje\"></span>
                                    </th>
                                    <td>
                                        \$<span id=\"additional_discount\">--</span>
                                    </td>
                                </tr>
                                <tr class=\"warning\">
                                    <th>Total</th>
                                    <th>
                                        \$<span id=\"transaction_total\">0.00</span>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"ln_solid\"></div>

                    <div class=\"form-group\">
                        <div class=\"col-md-12\">
                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<i class='fa fa-circle-o-notch fa-spin'></i> Registrando ...\">
                                    Registrar
                                </button>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                {% endblock %}
            {% endembed %}
        </div>
    {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        checkoutHandler('{{ conekta_public_key }}');
    </script>
{% endblock %}
", "backend/transaction/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\transaction\\new.html.twig");
    }
}


/* backend/transaction/new.html.twig */
class __TwigTemplate_e380ab69db7fad687851804a0da1a816___49862992 extends Template
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
        // line 109
        return "backend/default/_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/transaction/new.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/_card.html.twig", "backend/transaction/new.html.twig", 109);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 113
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "branchOffice", [], "any", false, false, false, 113), 'row');
        yield "

                    <div class=\"form-group\">
                        ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), 'label');
        yield "
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), 'widget', ["attr" => ["data-parsley-errors-container" => "#errors-user"]]);
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'errors');
        // line 120
        yield "<div id=\"errors-user\"></div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Email</label>

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"transaction_user_email\" class=\"form-control\" readonly />
                        </div>
                    </div>

                    ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "package", [], "any", false, false, false, 132), 'row');
        yield "

                    <div class=\"form-group\">
                        ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "coupon", [], "any", false, false, false, 135), 'label');
        yield "

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"input-group\">
                                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "coupon", [], "any", false, false, false, 139), 'widget');
        yield "
                                <input type=\"text\" id=\"coupon_code\" class=\"form-control\">
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" id=\"btn_coupon\" class=\"btn btn-success\" data-url=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_coupon_validate");
        yield "\">
                                        Aplicar
                                    </button>
                                </span>
                            </div>
                            ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "coupon", [], "any", false, false, false, 147), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "discount", [], "any", false, false, false, 151), 'row', ["attr" => ["min" => 0, "max" => 99]]);
        // line 154
        yield "

                    <div class=\"form-group has-feedback\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Fecha de expiración</label>

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"transaction_package_expiration_at\" class=\"form-control has-feedback-right\" readonly />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                        </div>
                    </div>

                    <div class=\"ln_solid\"></div>

                    <div class=\"row\">
                        <div class=\"panel panel-success not-radius\">
                            <div class=\"panel-heading not-radius\"><strong>Resumen de Compra</strong></div>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th style=\"width: 25%\">Precio</th>
                                    <td>
                                        \$<span id=\"package_amount\">0.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Precio Especial</th>
                                    <td>
                                        \$<span id=\"special_price\">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Cupón de Descuento
                                        <span id=\"coupon_percentaje\"></span>
                                    </th>
                                    <td>
                                        \$<span id=\"coupon_total\">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Descuento Adicional
                                        <span id=\"additional_discount_percentaje\"></span>
                                    </th>
                                    <td>
                                        \$<span id=\"additional_discount\">--</span>
                                    </td>
                                </tr>
                                <tr class=\"warning\">
                                    <th>Total</th>
                                    <th>
                                        \$<span id=\"transaction_total\">0.00</span>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"ln_solid\"></div>

                    <div class=\"form-group\">
                        <div class=\"col-md-12\">
                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<i class='fa fa-circle-o-notch fa-spin'></i> Registrando ...\">
                                    Registrar
                                </button>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
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
        return "backend/transaction/new.html.twig";
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
        return array (  1053 => 154,  1051 => 151,  1044 => 147,  1036 => 142,  1030 => 139,  1023 => 135,  1017 => 132,  1003 => 120,  1001 => 119,  999 => 118,  994 => 116,  987 => 113,  977 => 112,  954 => 109,  647 => 99,  643 => 98,  622 => 79,  611 => 77,  606 => 76,  603 => 75,  601 => 74,  593 => 68,  582 => 66,  578 => 65,  546 => 37,  536 => 36,  513 => 33,  209 => 238,  202 => 235,  192 => 234,  179 => 231,  176 => 230,  174 => 109,  169 => 106,  167 => 33,  163 => 31,  160 => 24,  150 => 23,  138 => 20,  136 => 19,  134 => 18,  124 => 17,  113 => 14,  103 => 13,  92 => 10,  82 => 9,  71 => 1,  69 => 6,  67 => 4,  65 => 3,  52 => 1,  29 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Transacciones' %}
{% set return_to = path('backend_transaction') %}

{% form_theme form _self %}
{% use 'bootstrap_3_horizontal_layout.html.twig' %}

{% block form_label_class -%}
    col-md-3 col-sm-3 col-xs-12
{%- endblock form_label_class %}

{% block form_group_class -%}
    col-md-6 col-sm-6 col-xs-12
{%- endblock form_group_class %}

{% block _transaction_discount_widget %}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' has-feedback-right')|trim}) -%}
    {{- block('form_widget_simple') -}}
    <span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>
{% endblock %}

{% block section %}
    {{ form_start(form, {
        'attr': {
            'id': 'form-transaction-new',
            'class': 'form-horizontal form-label-left',
            'autocomplete': 'off',
            'data-parsley-validate': '',
        }
    }) }}
        <div class=\"row\">
            {% embed 'backend/default/_card.html.twig' with {
                'title': 'Forma de pago',
            } %}
                {% block content %}
                    {{ form_row(form.chargeMethod) }}

                    <div id=\"PaymentMethodExtraFields\">
                        <div class=\"payment-panel hidden\" id=\"payment_card\">
                            <div class=\"panel panel-primary not-radius\">
                                <div class=\"panel-heading not-radius\">Información de la tarjeta</div>

                                <div class=\"panel-body\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_name\">Nombre del titular:</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_name\" class=\"form-control\" size=\"20\" data-conekta=\"card[name]\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_number\">Número:</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_number\" class=\"form-control\" size=\"20\" data-conekta=\"card[number]\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_exp_year\">Vigencia:</label>

                                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                            <select id=\"transaction_card_exp_year\" class=\"form-control\" data-conekta=\"card[exp_month]\">
                                                <option value=\"\">Mes</option>
                                                {% for i in 1..12 %}
                                                    <option value=\"{{ '%02d'|format(i) }}\">{{ '%02d'|format(i) }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-6\">
                                            <select class=\"form-control\" data-conekta=\"card[exp_year]\">
                                                <option value=\"\">Año</option>
                                                {% set startYear = 'now'|date('Y') %}
                                                {% set endYear = startYear + 10 %}
                                                {% for i in startYear..endYear %}
                                                    <option value=\"{{ i }}\">{{ i }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"transaction_card_cvc\">Código de seguridad:</label>
                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">
                                            <input type=\"text\" id=\"transaction_card_cvc\" class=\"form-control\" data-conekta=\"card[cvc]\" placeholder=\"***\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"payment-panel hidden\" id=\"payment_pos\">
                            <div class=\"panel panel-primary not-radius\">
                                <div class=\"panel-heading not-radius\">Información de la transacción</div>

                                <div class=\"panel-body\">
                                    {{ form_row(form.cardLast4) }}
                                    {{ form_row(form.chargeAuthCode) }}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"row\">
            {% embed 'backend/default/_card.html.twig' with {
                'title': 'Detalle de la transacción',
            } %}
                {% block content %}
                    {{ form_row(form.branchOffice) }}

                    <div class=\"form-group\">
                        {{ form_label(form.user) }}
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_widget(form.user, {'attr': {'data-parsley-errors-container': '#errors-user'}}) }}
                            {{- form_errors(form) -}}
                            <div id=\"errors-user\"></div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Email</label>

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"transaction_user_email\" class=\"form-control\" readonly />
                        </div>
                    </div>

                    {{ form_row(form.package) }}

                    <div class=\"form-group\">
                        {{ form_label(form.coupon) }}

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"input-group\">
                                {{ form_widget(form.coupon) }}
                                <input type=\"text\" id=\"coupon_code\" class=\"form-control\">
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" id=\"btn_coupon\" class=\"btn btn-success\" data-url=\"{{ path('backend_coupon_validate') }}\">
                                        Aplicar
                                    </button>
                                </span>
                            </div>
                            {{ form_errors(form.coupon) }}
                        </div>
                    </div>

                    {{ form_row(form.discount, {'attr': {
                        'min': 0,
                        'max': 99
                    }}) }}

                    <div class=\"form-group has-feedback\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Fecha de expiración</label>

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"transaction_package_expiration_at\" class=\"form-control has-feedback-right\" readonly />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                        </div>
                    </div>

                    <div class=\"ln_solid\"></div>

                    <div class=\"row\">
                        <div class=\"panel panel-success not-radius\">
                            <div class=\"panel-heading not-radius\"><strong>Resumen de Compra</strong></div>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th style=\"width: 25%\">Precio</th>
                                    <td>
                                        \$<span id=\"package_amount\">0.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Precio Especial</th>
                                    <td>
                                        \$<span id=\"special_price\">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Cupón de Descuento
                                        <span id=\"coupon_percentaje\"></span>
                                    </th>
                                    <td>
                                        \$<span id=\"coupon_total\">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Descuento Adicional
                                        <span id=\"additional_discount_percentaje\"></span>
                                    </th>
                                    <td>
                                        \$<span id=\"additional_discount\">--</span>
                                    </td>
                                </tr>
                                <tr class=\"warning\">
                                    <th>Total</th>
                                    <th>
                                        \$<span id=\"transaction_total\">0.00</span>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"ln_solid\"></div>

                    <div class=\"form-group\">
                        <div class=\"col-md-12\">
                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<i class='fa fa-circle-o-notch fa-spin'></i> Registrando ...\">
                                    Registrar
                                </button>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                {% endblock %}
            {% endembed %}
        </div>
    {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        checkoutHandler('{{ conekta_public_key }}');
    </script>
{% endblock %}
", "backend/transaction/new.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\transaction\\new.html.twig");
    }
}
