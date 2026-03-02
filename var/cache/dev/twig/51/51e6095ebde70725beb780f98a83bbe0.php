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

/* backend/session_day/new_branch_office.html.twig */
class __TwigTemplate_d8f5a189cc1b2596e37b32d123db1d0f extends Template
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
        // line 1
        return "backend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/new_branch_office.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/new_branch_office.html.twig"));

        // line 3
        $context["page_section"] = "Clases x día";
        // line 4
        $context["page_title"] = "Programar día";
        // line 5
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day");
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/session_day/new_branch_office.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "    ";
        yield from         $this->loadTemplate("backend/session_day/new_branch_office.html.twig", "backend/session_day/new_branch_office.html.twig", 8, "1200257573")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => (isset($context["page_section"]) || array_key_exists("page_section", $context) ? $context["page_section"] : (function () { throw new RuntimeError('Variable "page_section" does not exist.', 8, $this->source); })()), "page_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session_day/new_branch_office.html.twig";
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
        return array (  76 => 8,  66 => 7,  55 => 1,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Clases x día' %}
{% set page_title = 'Programar día' %}
{% set return_to = path('backend_session_day') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            <form action=\"{{ path('backend_session_day_new') }}\" method=\"get\" class=\"form-horizontal\">
                <div class=\"item form-group\">
                    <label class=\"col-form-label col-md-2 label-align text-right\" for=\"branch_office\">Sucursal:</label>
                    <div class=\"col-md-6 col-sm-6\">
                        <select name=\"branch_office\" id=\"branch_office\" class=\"form-control\">
                            <option value=\"\">Seleccione Sucursal</option>
                            {% for branchOffice in branchOffices %}
                                <option value=\"{{ branchOffice.id }}\">{{ branchOffice.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Continuar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </form>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "backend/session_day/new_branch_office.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session_day\\new_branch_office.html.twig");
    }
}


/* backend/session_day/new_branch_office.html.twig */
class __TwigTemplate_d8f5a189cc1b2596e37b32d123db1d0f___1200257573 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/new_branch_office.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session_day/new_branch_office.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/session_day/new_branch_office.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "            <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_new");
        yield "\" method=\"get\" class=\"form-horizontal\">
                <div class=\"item form-group\">
                    <label class=\"col-form-label col-md-2 label-align text-right\" for=\"branch_office\">Sucursal:</label>
                    <div class=\"col-md-6 col-sm-6\">
                        <select name=\"branch_office\" id=\"branch_office\" class=\"form-control\">
                            <option value=\"\">Seleccione Sucursal</option>
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["branchOffices"]) || array_key_exists("branchOffices", $context) ? $context["branchOffices"] : (function () { throw new RuntimeError('Variable "branchOffices" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 17
            yield "                                <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "                        </select>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Continuar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </form>
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
        return "backend/session_day/new_branch_office.html.twig";
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
        return array (  233 => 19,  222 => 17,  218 => 16,  208 => 10,  198 => 9,  76 => 8,  66 => 7,  55 => 1,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Clases x día' %}
{% set page_title = 'Programar día' %}
{% set return_to = path('backend_session_day') %}

{% block content %}
    {% embed 'backend/default/embed/form_common.html.twig' with { 'page_section': page_section, 'page_title': page_title } %}
        {% block body %}
            <form action=\"{{ path('backend_session_day_new') }}\" method=\"get\" class=\"form-horizontal\">
                <div class=\"item form-group\">
                    <label class=\"col-form-label col-md-2 label-align text-right\" for=\"branch_office\">Sucursal:</label>
                    <div class=\"col-md-6 col-sm-6\">
                        <select name=\"branch_office\" id=\"branch_office\" class=\"form-control\">
                            <option value=\"\">Seleccione Sucursal</option>
                            {% for branchOffice in branchOffices %}
                                <option value=\"{{ branchOffice.id }}\">{{ branchOffice.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Continuar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </form>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "backend/session_day/new_branch_office.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session_day\\new_branch_office.html.twig");
    }
}
