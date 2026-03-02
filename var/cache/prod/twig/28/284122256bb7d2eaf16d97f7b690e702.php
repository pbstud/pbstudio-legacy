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
class __TwigTemplate_cf13a1f8c3e9154c89ad83432752610b extends Template
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
        // line 3
        $context["page_section"] = "Transacciones";
        // line 4
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_transaction");
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [$this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/transaction/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "col-md-3 col-sm-3 col-xs-12";
        return; yield '';
    }

    // line 13
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "col-md-6 col-sm-6 col-xs-12";
        return; yield '';
    }

    // line 17
    public function block__transaction_discount_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["attr"] = Twig\Extension\CoreExtension::arrayMerge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trimFilter((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 18), "")) : ("")) . " has-feedback-right"))]);
        // line 19
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 20
        yield "<span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>
";
        return; yield '';
    }

    // line 23
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "form-transaction-new", "class" => "form-horizontal form-label-left", "autocomplete" => "off", "data-parsley-validate" => ""]]);
        // line 31
        yield "
        <div class=\"row\">
            ";
        // line 33
        yield from         $this->loadTemplate("backend/transaction/new.html.twig", "backend/transaction/new.html.twig", 33, "1391917980")->unwrap()->yield(CoreExtension::arrayMerge($context, ["title" => "Forma de pago"]));
        // line 106
        yield "        </div>

        <div class=\"row\">
            ";
        // line 109
        yield from         $this->loadTemplate("backend/transaction/new.html.twig", "backend/transaction/new.html.twig", 109, "1308122966")->unwrap()->yield(CoreExtension::arrayMerge($context, ["title" => "Detalle de la transacción"]));
        // line 230
        yield "        </div>
    ";
        // line 231
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
";
        return; yield '';
    }

    // line 234
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script type=\"text/javascript\">
        checkoutHandler('";
        // line 238
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["conekta_public_key"] ?? null), "html", null, true);
        yield "');
    </script>
";
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
        return array (  141 => 238,  134 => 235,  130 => 234,  123 => 231,  120 => 230,  118 => 109,  113 => 106,  111 => 33,  107 => 31,  104 => 24,  100 => 23,  94 => 20,  92 => 19,  90 => 18,  86 => 17,  78 => 13,  70 => 9,  65 => 1,  63 => 6,  61 => 4,  59 => 3,  52 => 1,  29 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/transaction/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/transaction/new.html.twig");
    }
}


/* backend/transaction/new.html.twig */
class __TwigTemplate_cf13a1f8c3e9154c89ad83432752610b___1391917980 extends Template
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
        $this->parent = $this->loadTemplate("backend/default/_card.html.twig", "backend/transaction/new.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "chargeMethod", [], "any", false, false, false, 37), 'row');
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
        $context["endYear"] = (($context["startYear"] ?? null) + 10);
        // line 76
        yield "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startYear"] ?? null), ($context["endYear"] ?? null)));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cardLast4", [], "any", false, false, false, 98), 'row');
        yield "
                                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "chargeAuthCode", [], "any", false, false, false, 99), 'row');
        yield "
                                </div>
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
        return array (  315 => 99,  311 => 98,  290 => 79,  279 => 77,  274 => 76,  271 => 75,  269 => 74,  261 => 68,  250 => 66,  246 => 65,  214 => 37,  210 => 36,  199 => 33,  141 => 238,  134 => 235,  130 => 234,  123 => 231,  120 => 230,  118 => 109,  113 => 106,  111 => 33,  107 => 31,  104 => 24,  100 => 23,  94 => 20,  92 => 19,  90 => 18,  86 => 17,  78 => 13,  70 => 9,  65 => 1,  63 => 6,  61 => 4,  59 => 3,  52 => 1,  29 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/transaction/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/transaction/new.html.twig");
    }
}


/* backend/transaction/new.html.twig */
class __TwigTemplate_cf13a1f8c3e9154c89ad83432752610b___1308122966 extends Template
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
        $this->parent = $this->loadTemplate("backend/default/_card.html.twig", "backend/transaction/new.html.twig", 109);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "branchOffice", [], "any", false, false, false, 113), 'row');
        yield "

                    <div class=\"form-group\">
                        ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 116), 'label');
        yield "
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 118), 'widget', ["attr" => ["data-parsley-errors-container" => "#errors-user"]]);
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "package", [], "any", false, false, false, 132), 'row');
        yield "

                    <div class=\"form-group\">
                        ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coupon", [], "any", false, false, false, 135), 'label');
        yield "

                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"input-group\">
                                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coupon", [], "any", false, false, false, 139), 'widget');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coupon", [], "any", false, false, false, 147), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "discount", [], "any", false, false, false, 151), 'row', ["attr" => ["min" => 0, "max" => 99]]);
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
        return array (  457 => 154,  455 => 151,  448 => 147,  440 => 142,  434 => 139,  427 => 135,  421 => 132,  407 => 120,  405 => 119,  403 => 118,  398 => 116,  391 => 113,  387 => 112,  376 => 109,  315 => 99,  311 => 98,  290 => 79,  279 => 77,  274 => 76,  271 => 75,  269 => 74,  261 => 68,  250 => 66,  246 => 65,  214 => 37,  210 => 36,  199 => 33,  141 => 238,  134 => 235,  130 => 234,  123 => 231,  120 => 230,  118 => 109,  113 => 106,  111 => 33,  107 => 31,  104 => 24,  100 => 23,  94 => 20,  92 => 19,  90 => 18,  86 => 17,  78 => 13,  70 => 9,  65 => 1,  63 => 6,  61 => 4,  59 => 3,  52 => 1,  29 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/transaction/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/transaction/new.html.twig");
    }
}
