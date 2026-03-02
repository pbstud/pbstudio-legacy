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

/* profile/sessions_available.html.twig */
class __TwigTemplate_89ad07c4ef323b041a7ac127a89036b6 extends Template
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
            'account_aside_content' => [$this, 'block_account_aside_content'],
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
        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/sessions_available.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Mis clases disponibles | ";
        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"row\">
        <div class=\"content\">
            <h2>Clases disponibles</h2>

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 11
            yield "                <div class=\"contained_table\">
                    <table>
                        <thead>
                            <tr>
                                <td>Concepto</td>
                                <td>Detalle</td>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>Paquete</td>
                                    <td>
                                        ";
            // line 23
            if ((($__internal_compile_0 = $context["transaction"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["package_is_unlimited"] ?? null) : null)) {
                // line 24
                yield "                                            ";
                yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_1 = $context["transaction"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["package_alt_text"] ?? null) : null), "html", null, true);
                yield "
                                        ";
            } else {
                // line 26
                yield "                                            ";
                yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_2 = $context["transaction"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["package_total_sessions"] ?? null) : null), "html", null, true);
                yield " clase(s)
                                        ";
            }
            // line 28
            yield "                                    </td>
                                </tr>
                                <tr>
                                    <td>Modalidad</td>
                                    <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_3 = $context["transaction"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["package_type"] ?? null) : null), "html", null, true);
            yield "</td>
                                </tr>
                                <tr>
                                    <td>Clases disponibles</td>
                                    <td>
                                        ";
            // line 37
            if ((($__internal_compile_4 = $context["transaction"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["package_is_unlimited"] ?? null) : null)) {
                // line 38
                yield "                                            (&infin;) Ilimitadas
                                        ";
            } else {
                // line 40
                yield "                                            ";
                yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_5 = $context["transaction"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["total_sessions_available"] ?? null) : null), "html", null, true);
                yield "
                                        ";
            }
            // line 42
            yield "                                    </td>
                                </tr>
                                <tr>
                                    <td>Clases tomadas</td>
                                    <td>";
            // line 46
            yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_6 = $context["transaction"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["total_sessions_used"] ?? null) : null), "html", null, true);
            yield "</td>
                                </tr>
                                <tr>
                                    <td>Clases reservadas</td>
                                    <td>";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, (($__internal_compile_7 = $context["transaction"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["total_reserved_sessions"] ?? null) : null), "html", null, true);
            yield "</td>
                                </tr>
                                <tr>
                                    <td>Vigencia hasta</td>
                                    <td>";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, (($__internal_compile_8 = $context["transaction"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["expiration_at"] ?? null) : null), "d/m/Y"), "html", null, true);
            yield "</td>
                                </tr>

                        </tbody>
                    </table>
                </div>
                <br>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            yield "                <p>
                    Sin registros por mostrar
                </p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "
            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_calendar");
        yield "\" class=\"btn reserve-class-toggle\">Reservar clase</a>
        </div>
    </div>
";
        return; yield '';
    }

    // line 72
    public function block_account_aside_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_aside.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/sessions_available.html.twig";
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
        return array (  184 => 73,  180 => 72,  171 => 67,  168 => 66,  159 => 62,  146 => 54,  139 => 50,  132 => 46,  126 => 42,  120 => 40,  116 => 38,  114 => 37,  106 => 32,  100 => 28,  94 => 26,  88 => 24,  86 => 23,  72 => 11,  67 => 10,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/sessions_available.html.twig", "/var/www/pbstudio/releases/81/templates/profile/sessions_available.html.twig");
    }
}
