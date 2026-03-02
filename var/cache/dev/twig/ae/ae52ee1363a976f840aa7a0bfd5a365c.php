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

/* backend/package/index.html.twig */
class __TwigTemplate_675e5f3ffffe9e4765fbd2326ff29266 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actions' => [$this, 'block_actions'],
            'filters' => [$this, 'block_filters'],
            'table_thead' => [$this, 'block_table_thead'],
            'table_tbody' => [$this, 'block_table_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/package/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/package/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/package/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Listado de Paquetes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 6
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_package_new")) {
            // line 7
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_package_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                Nuevo paquete
            </a>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 17
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_package");
        yield "\" method=\"get\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_total_classes\">Núm. de clases:</label>
                    <input type=\"number\" value=\"";
        // line 22
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "total_classes", [], "array", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "total_classes", [], "array", false, false, false, 22)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "total_classes", [], "array", false, false, false, 22), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[total_classes]\" id=\"filters_total_classes\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_type\">Modalidad:</label>
                    <select id=\"filters_type\" name=\"filters[type]\" class=\"form-control\" data-current=\"";
        // line 29
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "array", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "array", false, false, false, 29)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "array", false, false, false, 29), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_types"]) || array_key_exists("filter_types", $context) ? $context["filter_types"] : (function () { throw new RuntimeError('Variable "filter_types" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 32
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_status\">Estado:</label>
                    <select id=\"filters_status\" name=\"filters[status]\" class=\"form-control\" data-current=\"";
        // line 41
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "array", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "array", false, false, false, 41)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "array", false, false, false, 41), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_status"]) || array_key_exists("filter_status", $context) ? $context["filter_status"] : (function () { throw new RuntimeError('Variable "filter_status" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 44
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                    </select>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_public\">Público:</label>
                    <select id=\"filters_public\" name=\"filters[public]\" class=\"form-control\" data-current=\"";
        // line 55
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "public", [], "array", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "public", [], "array", false, false, false, 55)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "public", [], "array", false, false, false, 55), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_public"]) || array_key_exists("filter_public", $context) ? $context["filter_public"] : (function () { throw new RuntimeError('Variable "filter_public" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 58
            yield "                            <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <label>&nbsp;</label>
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 74
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        // line 75
        yield "    <tr>
        <th>#</th>
        <th>Núm. de clases</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Precio Espcial</th>
        <th>Modalidad</th>
        <th>Vigencia</th>
        <th>Nuevo usuario</th>
        <th>Público</th>
        <th>Estado</th>
    </tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 89
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        // line 90
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 91
            yield "        ";
            // line 92
            yield "        <tr>
            <td>
                <a href=\"";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_package_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                ";
            // line 100
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "isUnlimited", [], "any", false, false, false, 100)) {
                // line 101
                yield "                    (&infin;) Ilimitadas
                ";
            } else {
                // line 103
                yield "                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 103), "html", null, true);
                yield " clase(s)
                ";
            }
            // line 105
            yield "            </td>
            <td>";
            // line 106
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "altText", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
            <td>
                \$";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "amount", [], "any", false, false, false, 108), 2), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 111
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "specialPrice", [], "any", false, false, false, 111)) {
                // line 112
                yield "                    \$";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "specialPrice", [], "any", false, false, false, 112), 2), "html", null, true);
                yield "
                ";
            } else {
                // line 114
                yield "                    --
                ";
            }
            // line 116
            yield "            </td>
            <td>
                ";
            // line 118
            yield ((("i" == CoreExtension::getAttribute($this->env, $this->source, $context["package"], "type", [], "any", false, false, false, 118))) ? ("Individual") : ("Grupal"));
            yield "
            </td>
            <td>
                ";
            // line 121
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "daysExpiry", [], "any", false, false, false, 121), "html", null, true);
            yield " días
            </td>
            <td>
                ";
            // line 124
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "newUser", [], "any", false, false, false, 124)) {
                // line 125
                yield "                    <span class=\"label label-primary\">Sí</span>
                ";
            } else {
                // line 127
                yield "                    <span class=\"label label-danger\">No</span>
                ";
            }
            // line 129
            yield "            </td>
            <td>
                ";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "public", [], "any", false, false, false, 131)) {
                // line 132
                yield "                    <span class=\"label label-primary\">Sí</span>
                ";
            } else {
                // line 134
                yield "                    <span class=\"label label-danger\">No</span>
                ";
            }
            // line 136
            yield "            </td>
            <td>
                ";
            // line 138
            if (CoreExtension::getAttribute($this->env, $this->source, $context["package"], "isActive", [], "any", false, false, false, 138)) {
                // line 139
                yield "                    <span class=\"label label-primary\">Activo</span>
                ";
            } else {
                // line 141
                yield "                    <span class=\"label label-danger\">Inactivo</span>
                ";
            }
            // line 143
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/package/index.html.twig";
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
        return array (  407 => 143,  403 => 141,  399 => 139,  397 => 138,  393 => 136,  389 => 134,  385 => 132,  383 => 131,  379 => 129,  375 => 127,  371 => 125,  369 => 124,  363 => 121,  357 => 118,  353 => 116,  349 => 114,  343 => 112,  341 => 111,  335 => 108,  330 => 106,  327 => 105,  321 => 103,  317 => 101,  315 => 100,  307 => 95,  303 => 94,  299 => 92,  297 => 91,  292 => 90,  282 => 89,  259 => 75,  249 => 74,  226 => 60,  215 => 58,  211 => 57,  206 => 55,  195 => 46,  184 => 44,  180 => 43,  175 => 41,  166 => 34,  155 => 32,  151 => 31,  146 => 29,  136 => 22,  127 => 17,  117 => 16,  99 => 8,  96 => 7,  93 => 6,  83 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/default/list.html.twig' %}

{% block title %}Listado de Paquetes{% endblock %}

{% block actions %}
    {% if is_allowed_route('backend_package_new') %}
        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"{{ path('backend_package_new') }}\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                Nuevo paquete
            </a>
        </div>
    {% endif %}
{% endblock %}

{% block filters %}
    <form action=\"{{ path('backend_package') }}\" method=\"get\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_total_classes\">Núm. de clases:</label>
                    <input type=\"number\" value=\"{{ filters['total_classes'] ?? '' }}\" name=\"filters[total_classes]\" id=\"filters_total_classes\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_type\">Modalidad:</label>
                    <select id=\"filters_type\" name=\"filters[type]\" class=\"form-control\" data-current=\"{{ filters['type'] ?? '' }}\">
                        <option value=\"\">- Todos -</option>
                        {% for type, label in filter_types %}
                            <option value=\"{{ type }}\">{{ label|trans }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_status\">Estado:</label>
                    <select id=\"filters_status\" name=\"filters[status]\" class=\"form-control\" data-current=\"{{ filters['status'] ?? '' }}\">
                        <option value=\"\">- Todos -</option>
                        {% for type, label in filter_status %}
                            <option value=\"{{ type }}\">{{ label|trans }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_public\">Público:</label>
                    <select id=\"filters_public\" name=\"filters[public]\" class=\"form-control\" data-current=\"{{ filters['public'] ?? '' }}\">
                        <option value=\"\">- Todos -</option>
                        {% for type, label in filter_public %}
                            <option value=\"{{ type }}\">{{ label|trans }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <label>&nbsp;</label>
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>
                </div>
            </div>
        </div>
    </form>
{% endblock %}

{% block table_thead %}
    <tr>
        <th>#</th>
        <th>Núm. de clases</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Precio Espcial</th>
        <th>Modalidad</th>
        <th>Vigencia</th>
        <th>Nuevo usuario</th>
        <th>Público</th>
        <th>Estado</th>
    </tr>
{% endblock %}

{% block table_tbody %}
    {% for package in pagination %}
        {# package \\App\\Entity\\Package #}
        <tr>
            <td>
                <a href=\"{{ path('backend_package_edit', { 'id': package.id }) }}\" class=\"link-edit\">
                    <u>{{ package.id }}</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                {% if package.isUnlimited %}
                    (&infin;) Ilimitadas
                {% else %}
                    {{ package.totalClasses }} clase(s)
                {% endif %}
            </td>
            <td>{{ package.altText }}</td>
            <td>
                \${{ package.amount | number_format(2) }}
            </td>
            <td>
                {% if package.specialPrice %}
                    \${{ package.specialPrice|number_format(2) }}
                {% else %}
                    --
                {% endif %}
            </td>
            <td>
                {{ 'i' == package.type ? 'Individual' : 'Grupal' }}
            </td>
            <td>
                {{ package.daysExpiry }} días
            </td>
            <td>
                {% if package.newUser %}
                    <span class=\"label label-primary\">Sí</span>
                {% else %}
                    <span class=\"label label-danger\">No</span>
                {% endif %}
            </td>
            <td>
                {% if package.public %}
                    <span class=\"label label-primary\">Sí</span>
                {% else %}
                    <span class=\"label label-danger\">No</span>
                {% endif %}
            </td>
            <td>
                {% if package.isActive %}
                    <span class=\"label label-primary\">Activo</span>
                {% else %}
                    <span class=\"label label-danger\">Inactivo</span>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
{% endblock %}
", "backend/package/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\package\\index.html.twig");
    }
}
