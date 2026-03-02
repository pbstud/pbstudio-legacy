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

/* backend/session/waitinglist.html.twig */
class __TwigTemplate_c2e6e67e578426d892022a4664e7a851 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subcontent' => [$this, 'block_subcontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/session/profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/waitinglist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/session/waitinglist.html.twig"));

        // line 3
        $context["page_title"] = "Lista de espera";
        // line 4
        $context["active_tab"] = "tab_waitinglist";
        // line 1
        $this->parent = $this->loadTemplate("backend/session/profile.html.twig", "backend/session/waitinglist.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        // line 7
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["waitinglist"]) || array_key_exists("waitinglist", $context) ? $context["waitinglist"] : (function () { throw new RuntimeError('Variable "waitinglist" does not exist.', 7, $this->source); })())) > 0)) {
            // line 8
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th class=\"text-center\">Estado</th>
                        <th class=\"text-center\">F. de registro</th>
                        <th class=\"text-center\">F. de reservación</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["waitinglist"]) || array_key_exists("waitinglist", $context) ? $context["waitinglist"] : (function () { throw new RuntimeError('Variable "waitinglist" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 22
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                    <u>";
                // line 23
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 23), "html", null, true);
                yield "</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 28
                $context["label_class"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isAvailable", [], "any", false, false, false, 28)) ? ("primary") : (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "error", [], "any", false, false, false, 28)) ? ("danger") : ("warning"))));
                // line 29
                yield "                                ";
                $context["label_text"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isAvailable", [], "any", false, false, false, 29)) ? ("en espera") : (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "error", [], "any", false, false, false, 29)) ? ("error") : ("tomada"))));
                // line 30
                yield "
                                <span class=\"label label-";
                // line 31
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 31, $this->source); })()), "html", null, true);
                yield "\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "error", [], "any", false, false, false, 31), "html", null, true);
                yield "\">
                                    ";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["label_text"]) || array_key_exists("label_text", $context) ? $context["label_text"] : (function () { throw new RuntimeError('Variable "label_text" does not exist.', 32, $this->source); })()), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 36
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdAt", [], "any", false, false, false, 36), "d/m/Y H:i"), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 39
                ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "updatedAt", [], "any", false, false, false, 39)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "updatedAt", [], "any", false, false, false, 39), "d/m/Y H:i"), "html", null, true)) : (yield null));
                yield "
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 47
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session/waitinglist.html.twig";
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
        return array (  153 => 47,  147 => 43,  137 => 39,  131 => 36,  124 => 32,  118 => 31,  115 => 30,  112 => 29,  110 => 28,  102 => 23,  98 => 22,  94 => 20,  90 => 19,  77 => 8,  74 => 7,  64 => 6,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/session/profile.html.twig' %}

{% set page_title = 'Lista de espera' %}
{% set active_tab = 'tab_waitinglist' %}

{% block subcontent %}
    {% if waitinglist | length > 0 %}
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th class=\"text-center\">Estado</th>
                        <th class=\"text-center\">F. de registro</th>
                        <th class=\"text-center\">F. de reservación</th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in waitinglist %}
                        <tr>
                            <td>
                                <a href=\"{{ path('backend_user_show', { 'id': item.user.id }) }}\" class=\"link-edit\">
                                    <u>{{ item.user }}</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td class=\"text-center\">
                                {% set label_class = item.isAvailable ? 'primary' : ( item.error ? 'danger' : 'warning' ) %}
                                {% set label_text = item.isAvailable ? 'en espera' : ( item.error ? 'error' : 'tomada' ) %}

                                <span class=\"label label-{{ label_class }}\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"{{ item.error }}\">
                                    {{ label_text }}
                                </span>
                            </td>
                            <td class=\"text-center\">
                                {{ item.createdAt | date('d/m/Y H:i') }}
                            </td>
                            <td class=\"text-center\">
                                {{ item.updatedAt ? item.updatedAt | date('d/m/Y H:i') : null }}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        {{ include('backend/default/partials/not_records.html.twig') }}
    {% endif %}
{% endblock %}
", "backend/session/waitinglist.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\session\\waitinglist.html.twig");
    }
}
