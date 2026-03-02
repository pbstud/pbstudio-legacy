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

/* backend/instructor/index.html.twig */
class __TwigTemplate_0f5883ddcb5700da818cb00ba1f2609c extends Template
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
            'table_thead' => [$this, 'block_table_thead'],
            'table_tbody' => [$this, 'block_table_tbody'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/instructor/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/instructor/index.html.twig"));

        // line 4
        $context["allowDelete"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_instructor_delete");
        // line 1
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/instructor/index.html.twig", 1);
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

        yield "Listado de Instructores";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_instructor_new")) {
            // line 8
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 9
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_instructor_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_instructor_new"), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 17
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead"));

        // line 18
        yield "    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Disciplinas</th>
        <th>Estado</th>
        ";
        // line 25
        if ((isset($context["allowDelete"]) || array_key_exists("allowDelete", $context) ? $context["allowDelete"] : (function () { throw new RuntimeError('Variable "allowDelete" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "            <th></th>
        ";
        }
        // line 28
        yield "    </tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 31
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_tbody"));

        // line 32
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 33
            yield "        <tr>
            <td>
                <a href=\"";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_instructor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                ";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["instructor"], "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "email", [], "any", false, false, false, 44), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 47), "telephone", [], "any", false, false, false, 47), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "disciplines", [], "any", false, false, false, 50));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["discipline"]) {
                // line 51
                yield "                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["discipline"], "html", null, true);
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) ? ("") : (","));
                yield "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discipline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            </td>
            <td>
                ";
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "isActive", [], "any", false, false, false, 55)) {
                // line 56
                yield "                    <span class=\"label label-primary\">Activo</span>
                ";
            } else {
                // line 58
                yield "                    <span class=\"label label-danger\">Inactivo</span>
                ";
            }
            // line 60
            yield "            </td>
            ";
            // line 61
            if ((isset($context["allowDelete"]) || array_key_exists("allowDelete", $context) ? $context["allowDelete"] : (function () { throw new RuntimeError('Variable "allowDelete" does not exist.', 61, $this->source); })())) {
                // line 62
                yield "                <td>
                    <a href=\"";
                // line 63
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_instructor_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" data-token=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 63))), "html", null, true);
                yield "\" class=\"btn btn-danger btn-xs btn-delete\">
                        <i class=\"fa fa-trash-o\"></i> Borrar
                    </a>
                </td>
            ";
            }
            // line 68
            yield "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 73
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/instructor/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        \$(function () {
            const \$frmDelete = \$('#frm-delete');

            \$('.btn-delete').on('click', function (event) {
                event.preventDefault();
                let \$el = \$(this);

                if (confirm('¿Confirmas que deseas borrar el instructor?')) {
                    \$frmDelete.attr('action', \$el.attr('href'));
                    \$frmDelete.find('input[name=\"_token\"]').val(\$el.data('token'));

                    \$frmDelete.submit();
                }
            });
        });
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
        return "backend/instructor/index.html.twig";
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
        return array (  327 => 77,  317 => 76,  303 => 73,  293 => 72,  277 => 68,  267 => 63,  264 => 62,  262 => 61,  259 => 60,  255 => 58,  251 => 56,  249 => 55,  245 => 53,  227 => 51,  210 => 50,  204 => 47,  198 => 44,  192 => 41,  184 => 36,  180 => 35,  176 => 33,  171 => 32,  161 => 31,  149 => 28,  145 => 26,  143 => 25,  134 => 18,  124 => 17,  108 => 11,  103 => 9,  100 => 8,  97 => 7,  87 => 6,  67 => 3,  56 => 1,  54 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/default/list.html.twig' %}

{% block title %}Listado de Instructores{% endblock %}
{% set allowDelete = is_allowed_route('backend_instructor_delete') %}

{% block actions %}
    {% if is_allowed_route('backend_instructor_new') %}
        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"{{ path('backend_instructor_new') }}\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                {{ 'main.backend_instructor_new'|trans }}
            </a>
        </div>
    {% endif %}
{% endblock %}

{% block table_thead %}
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Disciplinas</th>
        <th>Estado</th>
        {% if allowDelete %}
            <th></th>
        {% endif %}
    </tr>
{% endblock %}

{% block table_tbody %}
    {% for instructor in pagination %}
        <tr>
            <td>
                <a href=\"{{ path('backend_instructor_edit', { 'id': instructor.id }) }}\" class=\"link-edit\">
                    <u>{{ instructor.id }}</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                {{ instructor }}
            </td>
            <td>
                {{ instructor.email }}
            </td>
            <td>
                {{ instructor.profile.telephone }}
            </td>
            <td>
                {% for discipline in instructor.disciplines %}
                    {{ discipline }}{{ loop.last ? '' : ',' }}
                {% endfor %}
            </td>
            <td>
                {% if instructor.isActive %}
                    <span class=\"label label-primary\">Activo</span>
                {% else %}
                    <span class=\"label label-danger\">Inactivo</span>
                {% endif %}
            </td>
            {% if allowDelete %}
                <td>
                    <a href=\"{{ path('backend_instructor_delete', {'id': instructor.id}) }}\" data-token=\"{{ csrf_token('delete' ~ instructor.id) }}\" class=\"btn btn-danger btn-xs btn-delete\">
                        <i class=\"fa fa-trash-o\"></i> Borrar
                    </a>
                </td>
            {% endif %}
        </tr>
    {% endfor %}
{% endblock %}

{% block footer %}
    {{ include('backend/instructor/_delete_form.html.twig') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        \$(function () {
            const \$frmDelete = \$('#frm-delete');

            \$('.btn-delete').on('click', function (event) {
                event.preventDefault();
                let \$el = \$(this);

                if (confirm('¿Confirmas que deseas borrar el instructor?')) {
                    \$frmDelete.attr('action', \$el.attr('href'));
                    \$frmDelete.find('input[name=\"_token\"]').val(\$el.data('token'));

                    \$frmDelete.submit();
                }
            });
        });
    </script>
{% endblock %}
", "backend/instructor/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\instructor\\index.html.twig");
    }
}
