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
class __TwigTemplate_817f691767f376028b0650a1b373f2a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/layout.html.twig"));

        // line 3
        $context["current_menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->getCurrentItem("backend_sidebar");
        // line 4
        $context["body_class"] = "nav-md";
        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 5, $this->source); })()), "label", [], "any", false, false, false, 5)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 44
        yield "                    <div>
                        <div class=\"page-title\">
                            <div class=\"title_left\">
                                <h3>";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 48, $this->source); })()), "getExtra", ["last_child"], "method", false, false, false, 48) || array_key_exists("return_to", $context))) {
            // line 49
            yield "<a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("return_to", $context)) ? ((isset($context["return_to"]) || array_key_exists("return_to", $context) ? $context["return_to"] : (function () { throw new RuntimeError('Variable "return_to" does not exist.', 49, $this->source); })())) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 49, $this->source); })()), "parent", [], "any", false, false, false, 49), "uri", [], "any", false, false, false, 49))), "html", null, true);
            yield "\" class=\"btn btn-default btn-return-to\">
                                            <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
                                        </a>
                                        ";
            // line 52
            yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("page_section", $context)) ? ((isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 52, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 52, $this->source); })()), "parent", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52)))), "html", null, true);
        } else {
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 54, $this->source); })()), "label", [], "any", false, false, false, 54)), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 60
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 61
    public function block_pagination_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination_filter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination_filter"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 67
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 80
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 86
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/flash.html.twig");
        yield "
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
        return array (  332 => 86,  326 => 84,  316 => 83,  297 => 80,  278 => 67,  259 => 61,  240 => 60,  228 => 68,  226 => 67,  219 => 62,  216 => 61,  214 => 60,  208 => 56,  205 => 54,  202 => 52,  195 => 49,  193 => 48,  188 => 44,  178 => 43,  167 => 80,  161 => 77,  153 => 72,  149 => 70,  147 => 43,  141 => 40,  121 => 23,  109 => 14,  101 => 8,  91 => 7,  71 => 5,  60 => 1,  58 => 4,  56 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/base.html.twig' %}

{% set current_menu = knp_menu_get_current_item('backend_sidebar') %}
{% set body_class = 'nav-md' %}
{% block title %}{{ current_menu.label|trans }}{% endblock %}

{% block body %}
    <div class=\"container body\">
        <div class=\"main_container\">

            <div class=\"col-md-3 left_col\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
                        <a href=\"{{ path('backend_dashboard') }}\" class=\"site_title\">
                            <i class=\"fa fa-paw\"></i> <span>P&B Studio</span>
                        </a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                        <div class=\"menu_section active\">
                            {{ knp_menu_render('backend_sidebar') }}
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

            {{ include('backend/default/partials/header.html.twig') }}

            <div class=\"right_col\" role=\"main\">
                {% block content %}
                    <div>
                        <div class=\"page-title\">
                            <div class=\"title_left\">
                                <h3>
                                    {%- if current_menu.getExtra('last_child') or return_to is defined -%}
                                        <a href=\"{{ return_to is defined ? return_to : current_menu.parent.uri }}\" class=\"btn btn-default btn-return-to\">
                                            <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
                                        </a>
                                        {{ page_section is defined ? page_section : current_menu.parent.label|trans }}
                                    {%- else -%}
                                        {{ current_menu.label|trans }}
                                    {%- endif -%}
                                </h3>
                            </div>

                            <div class=\"title_right\">
                                {% block actions %}{% endblock %}
                                {% block pagination_filter %}{% endblock %}
                            </div>
                        </div>

                        <div class=\"clearfix\"></div>

                        {% block section %}{% endblock %}
                    </div>
                {% endblock %}
            </div>

            {{ include('backend/default/partials/footer.html.twig') }}
        </div>
    </div>

    <div class=\"hidden\" id=\"loader\">
        <div class=\"processing\"><img src=\"{{ asset('images/loader.gif') }}\" alt=\"Procesando\"></div>
    </div>

    {% block footer %}{% endblock %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {{ include('backend/default/partials/flash.html.twig') }}
{% endblock %}
", "backend/layout.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\layout.html.twig");
    }
}
