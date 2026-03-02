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

/* backend/layout.html.twig */
class __TwigTemplate_589420e2035d3170a1b5e5ca56263e5c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'actions' => [$this, 'block_actions'],
            'pagination_filter' => [$this, 'block_pagination_filter'],
            'section' => [$this, 'block_section'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["current_menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->getCurrentItem("backend_sidebar");
        // line 4
        $context["body_class"] = "nav-md";
        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["current_menu"] ?? null), "label", [], "any", false, false, false, 5)), "html", null, true);
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <div class=\"container body\">
        <div class=\"main_container\">

            <div class=\"col-md-3 left_col\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_dashboard");
        yield "\" class=\"site_title\">
                            <i class=\"fa fa-paw\"></i> <span>P&B Studio</span>
                        </a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                        <div class=\"menu_section active\">
                            ";
        // line 23
        yield $this->extensions['Knp\Menu\Twig\MenuExtension']->render("backend_sidebar");
        yield "
                        </div>
                    </div>

                    <div class=\"sidebar-footer hidden-small\">
                        <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Página de inicio\"
                           href=\"#\" target=\"_blank\">
                            <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>
                        </a>
                        <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\"
                           href=\"#\">
                            <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/header.html.twig");
        yield "

            <div class=\"right_col\" role=\"main\">
                ";
        // line 43
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 70
        yield "            </div>

            ";
        // line 72
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/footer.html.twig");
        yield "
        </div>
    </div>

    <div class=\"hidden\" id=\"loader\">
        <div class=\"processing\"><img src=\"";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loader.gif"), "html", null, true);
        yield "\" alt=\"Procesando\"></div>
    </div>

    ";
        // line 80
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        return; yield '';
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "                    <div>
                        <div class=\"page-title\">
                            <div class=\"title_left\">
                                <h3>";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_menu"] ?? null), "getExtra", ["last_child"], "method", false, false, false, 48) || array_key_exists("return_to", $context))) {
            // line 49
            yield "<a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("return_to", $context)) ? (($context["return_to"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["current_menu"] ?? null), "parent", [], "any", false, false, false, 49), "uri", [], "any", false, false, false, 49))), "html", null, true);
            yield "\" class=\"btn btn-default btn-return-to\">
                                            <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
                                        </a>
                                        ";
            // line 52
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("page_section", $context)) ? (($context["page_section"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["current_menu"] ?? null), "parent", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52)))), "html", null, true);
        } else {
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["current_menu"] ?? null), "label", [], "any", false, false, false, 54)), "html", null, true);
        }
        // line 56
        yield "</h3>
                            </div>

                            <div class=\"title_right\">
                                ";
        // line 60
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 61
        yield "                                ";
        yield from $this->unwrap()->yieldBlock('pagination_filter', $context, $blocks);
        // line 62
        yield "                            </div>
                        </div>

                        <div class=\"clearfix\"></div>

                        ";
        // line 67
        yield from $this->unwrap()->yieldBlock('section', $context, $blocks);
        // line 68
        yield "                    </div>
                ";
        return; yield '';
    }

    // line 60
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 61
    public function block_pagination_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 67
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 80
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 86
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/flash.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/layout.html.twig";
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
        return array (  230 => 86,  224 => 84,  220 => 83,  213 => 80,  206 => 67,  199 => 61,  192 => 60,  186 => 68,  184 => 67,  177 => 62,  174 => 61,  172 => 60,  166 => 56,  163 => 54,  160 => 52,  153 => 49,  151 => 48,  146 => 44,  142 => 43,  137 => 80,  131 => 77,  123 => 72,  119 => 70,  117 => 43,  111 => 40,  91 => 23,  79 => 14,  71 => 8,  67 => 7,  59 => 5,  54 => 1,  52 => 4,  50 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/layout.html.twig", "/var/www/pbstudio/releases/81/templates/backend/layout.html.twig");
    }
}
