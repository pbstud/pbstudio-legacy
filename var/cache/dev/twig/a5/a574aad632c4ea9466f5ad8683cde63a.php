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

/* backend/user/index.html.twig */
class __TwigTemplate_5c3f335fc4905c83f035e99caaae128e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/user/index.html.twig", 1);
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

        yield "Listado de Usuarios";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 6
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user");
        yield "\" method=\"get\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_id\">ID:</label>
                    <input type=\"number\" value=\"";
        // line 11
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "id", [], "array", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "id", [], "array", false, false, false, 11)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "id", [], "array", false, false, false, 11), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[id]\" id=\"filters_id\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_name\">Nombre:</label>
                    <input type=\"text\" value=\"";
        // line 18
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "name", [], "array", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "name", [], "array", false, false, false, 18)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "name", [], "array", false, false, false, 18), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[name]\" id=\"filters_name\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_lastname\">Apellidos:</label>
                    <input type=\"text\" value=\"";
        // line 25
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "lastname", [], "array", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "lastname", [], "array", false, false, false, 25)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "lastname", [], "array", false, false, false, 25), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[lastname]\" id=\"filters_lastname\" class=\"form-control\">
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_email\">Correo:</label>
                    <input type=\"email\" value=\"";
        // line 34
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email", [], "array", false, false, false, 34)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email", [], "array", false, false, false, 34), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[email]\" id=\"filters_email\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filters_date_start\">Fecha de inicio:</label>
                    <input type=\"text\" value=\"";
        // line 41
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_start", [], "array", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_start", [], "array", false, false, false, 41)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_start", [], "array", false, false, false, 41), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[date_start]\" id=\"filters_date_start\" class=\"form-control datepicker has-feedback-right\">
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filters_date_end\">Fecha de término:</label>
                    <input type=\"text\" value=\"";
        // line 51
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_end", [], "array", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_end", [], "array", false, false, false, 51)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_end", [], "array", false, false, false, 51), "html", null, true)) : (yield ""));
        yield "\" name=\"filters[date_end]\" id=\"filters_date_end\" class=\"form-control datepicker has-feedback-right\">
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_enabled\">Estado:</label>
                    <select id=\"filters_enabled\" name=\"filters[enabled]\" class=\"form-control\" data-current=\"";
        // line 63
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "enabled", [], "array", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "enabled", [], "array", false, false, false, 63)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "enabled", [], "array", false, false, false, 63), "html", null, true)) : (yield ""));
        yield "\">
                        <option value=\"\">- Todos -</option>
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filter_enabled"]) || array_key_exists("filter_enabled", $context) ? $context["filter_enabled"] : (function () { throw new RuntimeError('Variable "filter_enabled" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 66
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
        // line 68
        yield "                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_package_enabled\">Paquete activo:</label>
                    <div class=\"form-switch\">
                        <input type=\"checkbox\" id=\"filters_package_enabled\" name=\"filters[package_enabled]\" switch=\"success\" value=\"1\" ";
        // line 76
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "package_enabled", [], "array", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "package_enabled", [], "array", false, false, false, 76)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "package_enabled", [], "array", false, false, false, 76)) : (""))) {
            yield "checked=\"checked\"";
        }
        yield " />
                        <label for=\"filters_package_enabled\" data-on-label=\"Si\" data-off-label=\"No\"></label>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <label>&nbsp;</label>
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>

                    ";
        // line 87
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_user_export")) {
            // line 88
            yield "                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Exportar <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_export", ["filters" => (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 93, $this->source); })())]), "html", null, true);
            yield "\">Todos</a></li>
                                <li><a href=\"";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_export", ["filters" => (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 94, $this->source); })()), "enabled" => 1]), "html", null, true);
            yield "\">Activos</a></li>
                                <li><a href=\"";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_export", ["filters" => (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 95, $this->source); })()), "enabled" => 0]), "html", null, true);
            yield "\">Inactivos</a></li>
                            </ul>
                        </div>
                    ";
        }
        // line 99
        yield "                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 105
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        // line 106
        yield "    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Sucursal</th>
        <th>Estado</th>
        <th class=\"text-center\">F. creación</th>
        <th></th>
    </tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 118
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        // line 119
        yield "    ";
        $context["allowEdit"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_user_edit");
        // line 120
        yield "
    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 122
            yield "        ";
            // line 123
            yield "        <tr>
            <td>";
            // line 124
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
            <td>";
            // line 125
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["user"], "html", null, true);
            yield "</td>
            <td>";
            // line 126
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
            <td>";
            // line 127
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
            <td>";
            // line 128
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "branchOffice", [], "any", false, false, false, 128), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 130
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 130)) {
                // line 131
                yield "                    <span class=\"label label-primary\">Activo</span>
                ";
            } else {
                // line 133
                yield "                    <span class=\"label label-default\">Inactivo</span>
                ";
            }
            // line 135
            yield "            </td>
            <td class=\"text-center\">
                ";
            // line 137
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 137)) {
                // line 138
                yield "                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 138), "Y-m-d H:i:s"), "html", null, true);
                yield "
                ";
            }
            // line 140
            yield "            </td>
            <td>
                <a href=\"";
            // line 142
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-xs\">
                    Detalle
                </a>
                ";
            // line 145
            if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 145, $this->source); })())) {
                // line 146
                yield "                    <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 146)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                ";
            }
            // line 150
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
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
        return "backend/user/index.html.twig";
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
        return array (  375 => 150,  367 => 146,  365 => 145,  359 => 142,  355 => 140,  349 => 138,  347 => 137,  343 => 135,  339 => 133,  335 => 131,  333 => 130,  328 => 128,  324 => 127,  320 => 126,  316 => 125,  312 => 124,  309 => 123,  307 => 122,  303 => 121,  300 => 120,  297 => 119,  287 => 118,  266 => 106,  256 => 105,  241 => 99,  234 => 95,  230 => 94,  226 => 93,  219 => 88,  217 => 87,  201 => 76,  191 => 68,  180 => 66,  176 => 65,  171 => 63,  156 => 51,  143 => 41,  133 => 34,  121 => 25,  111 => 18,  101 => 11,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/default/list.html.twig' %}

{% block title %}Listado de Usuarios{% endblock %}

{% block filters %}
    <form action=\"{{ path('backend_user') }}\" method=\"get\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_id\">ID:</label>
                    <input type=\"number\" value=\"{{ filters['id'] ?? '' }}\" name=\"filters[id]\" id=\"filters_id\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_name\">Nombre:</label>
                    <input type=\"text\" value=\"{{ filters['name'] ?? '' }}\" name=\"filters[name]\" id=\"filters_name\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_lastname\">Apellidos:</label>
                    <input type=\"text\" value=\"{{ filters['lastname'] ?? '' }}\" name=\"filters[lastname]\" id=\"filters_lastname\" class=\"form-control\">
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_email\">Correo:</label>
                    <input type=\"email\" value=\"{{ filters['email'] ?? '' }}\" name=\"filters[email]\" id=\"filters_email\" class=\"form-control\">
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filters_date_start\">Fecha de inicio:</label>
                    <input type=\"text\" value=\"{{ filters['date_start'] ?? '' }}\" name=\"filters[date_start]\" id=\"filters_date_start\" class=\"form-control datepicker has-feedback-right\">
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group has-feedback\">
                    <label for=\"filters_date_end\">Fecha de término:</label>
                    <input type=\"text\" value=\"{{ filters['date_end'] ?? '' }}\" name=\"filters[date_end]\" id=\"filters_date_end\" class=\"form-control datepicker has-feedback-right\">
                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_enabled\">Estado:</label>
                    <select id=\"filters_enabled\" name=\"filters[enabled]\" class=\"form-control\" data-current=\"{{ filters['enabled'] ?? '' }}\">
                        <option value=\"\">- Todos -</option>
                        {% for type, label in filter_enabled %}
                            <option value=\"{{ type }}\">{{ label|trans }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <div class=\"form-group\">
                    <label for=\"filters_package_enabled\">Paquete activo:</label>
                    <div class=\"form-switch\">
                        <input type=\"checkbox\" id=\"filters_package_enabled\" name=\"filters[package_enabled]\" switch=\"success\" value=\"1\" {% if (filters['package_enabled'] ?? '') %}checked=\"checked\"{% endif %} />
                        <label for=\"filters_package_enabled\" data-on-label=\"Si\" data-off-label=\"No\"></label>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
                <label>&nbsp;</label>
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">Buscar</button>

                    {% if is_allowed_route('backend_user_export') %}
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-dark dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Exportar <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('backend_user_export', {'filters': filters}) }}\">Todos</a></li>
                                <li><a href=\"{{ path('backend_user_export', {'filters': filters, 'enabled': 1}) }}\">Activos</a></li>
                                <li><a href=\"{{ path('backend_user_export', {'filters': filters, 'enabled': 0}) }}\">Inactivos</a></li>
                            </ul>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </form>
{% endblock %}

{% block table_thead %}
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Sucursal</th>
        <th>Estado</th>
        <th class=\"text-center\">F. creación</th>
        <th></th>
    </tr>
{% endblock %}

{% block table_tbody %}
    {% set allowEdit = is_allowed_route('backend_user_edit') %}

    {% for user in pagination %}
        {# user \\App\\Entity\\User #}
        <tr>
            <td>{{ user.id }}</td>
            <td>{{ user }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.phone }}</td>
            <td>{{ user.branchOffice }}</td>
            <td>
                {% if user.enabled %}
                    <span class=\"label label-primary\">Activo</span>
                {% else %}
                    <span class=\"label label-default\">Inactivo</span>
                {% endif %}
            </td>
            <td class=\"text-center\">
                {% if user.createdAt %}
                    {{ user.createdAt|date('Y-m-d H:i:s') }}
                {% endif %}
            </td>
            <td>
                <a href=\"{{ path('backend_user_show', {'id': user.id}) }}\" class=\"btn btn-success btn-xs\">
                    Detalle
                </a>
                {% if allowEdit %}
                    <a href=\"{{ path('backend_user_edit', {'id': user.id}) }}\" class=\"btn btn-primary btn-xs\">
                        Editar
                    </a>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
{% endblock %}
", "backend/user/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\index.html.twig");
    }
}
