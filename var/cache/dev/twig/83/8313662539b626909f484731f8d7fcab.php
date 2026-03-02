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

/* backend/user/reservation/wrapper_list.html.twig */
class __TwigTemplate_bb25d0159722785dad9fb2e392d3fdbd extends Template
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
        return "backend/layout-ajax.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/reservation/wrapper_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/reservation/wrapper_list.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout-ajax.html.twig", "backend/user/reservation/wrapper_list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <ul class=\"nav navbar-right panel_toolbox\">
        ";
        // line 5
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_user_reservation_new")) {
            // line 6
            yield "            <li>
                <button href=\"";
            // line 7
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reservation_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
            yield "\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#reservationDetailModal\">
                    Nueva reservación
                </button>
            </li>
        ";
        }
        // line 12
        yield "    </ul>

    <div class=\"x_panel x_panel_filters\">
        <div class=\"x_content\">
            <form id=\"form_filter\" action=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_status\">Estado:</label>
                            <select id=\"filter_status\" name=\"filter_status\" class=\"form-control\" data-current=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_status"]) || array_key_exists("filter_status", $context) ? $context["filter_status"] : (function () { throw new RuntimeError('Variable "filter_status" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\">
                                <option value=\"\">- Todos -</option>
                                <option value=\"1\">";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusDescription("1"), "html", null, true);
        yield "</option>
                                <option value=\"0\">";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusDescription("0"), "html", null, true);
        yield "</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_session_date_start\">Desde:</label>
                            <input type=\"text\" id=\"filter_session_date_start\" name=\"filter_session_date_start\" class=\"form-control datepicker has-feedback-right\" value=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_session_date_start"]) || array_key_exists("filter_session_date_start", $context) ? $context["filter_session_date_start"] : (function () { throw new RuntimeError('Variable "filter_session_date_start" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_session_date_end\">Hasta:</label>
                            <input type=\"text\" id=\"filter_session_date_end\" name=\"filter_session_date_end\" class=\"form-control datepicker has-feedback-right\" value=\"";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filter_session_date_end"]) || array_key_exists("filter_session_date_end", $context) ? $context["filter_session_date_end"] : (function () { throw new RuntimeError('Variable "filter_session_date_end" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_branch_office\">Sucursal</label>
                            <select id=\"filter_branch_office\" name=\"filter_branch_office\" class=\"form-control\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["branch_offices"]) || array_key_exists("branch_offices", $context) ? $context["branch_offices"] : (function () { throw new RuntimeError('Variable "branch_offices" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["branch_office"]) {
            // line 57
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branch_office"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branch_office"], "name", [], "any", false, false, false, 57), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch_office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_exercise_room\">Salón</label>
                            <select id=\"filter_exercise_room\" name=\"filter_exercise_room\" class=\"form-control\">
                                <option value=\"\">- Todos -</option>
                                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exercise_rooms"]) || array_key_exists("exercise_rooms", $context) ? $context["exercise_rooms"] : (function () { throw new RuntimeError('Variable "exercise_rooms" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["branch_office"] => $context["rooms"]) {
            // line 69
            yield "                                    <optgroup label=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["branch_office"], "html", null, true);
            yield "\">
                                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["rooms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["exercise_room"]) {
                // line 71
                yield "                                            <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exercise_room"], "id", [], "any", false, false, false, 71), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["exercise_room"], "name", [], "any", false, false, false, 71), "html", null, true);
                yield "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercise_room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                                    </optgroup>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['branch_office'], $context['rooms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"text-right\">
                            <button type=\"submit\" class=\"btn btn-dark\">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id=\"wrapper_list\">
    </div>

    <div id=\"reservationDetailModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>

    <script>
        \$(\".datepicker\").daterangepicker(datepickeroptions);

        var List = {
            url: null,

            filter: function () {
                var form = \$('#form_filter');
                var url = form.prop('action') + '?' + form.serialize();

                this.load(url);
            },

            reload: function () {
                this.load();
            },

            load: function (url) {
                \$.loader.show('#wrapper_list');

                this.url = url || this.url;

                \$('#wrapper_list').load(this.url);
            },

            init: function () {
                var _self = this;

                \$('#form_filter').on('submit', function () {
                    _self.filter();

                    return false;
                }).trigger('submit');

                \$('body').on('click', '.pagination a', function (e) {
                    e.preventDefault();

                    _self.load(\$(e.target).prop('href'));
                });

                return _self;
            },
        };

        \$('#reservationDetailModal').on('hidden.bs.modal', function () {
            \$(this).removeData('bs.modal');
            \$(this).find('.modal-content').empty();
        });

        List.init();
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
        return "backend/user/reservation/wrapper_list.html.twig";
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
        return array (  206 => 75,  199 => 73,  188 => 71,  184 => 70,  179 => 69,  175 => 68,  164 => 59,  153 => 57,  149 => 56,  132 => 42,  119 => 32,  108 => 24,  104 => 23,  99 => 21,  91 => 16,  85 => 12,  77 => 7,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout-ajax.html.twig' %}

{% block content %}
    <ul class=\"nav navbar-right panel_toolbox\">
        {% if is_allowed_route('backend_user_reservation_new') %}
            <li>
                <button href=\"{{ path('backend_user_reservation_new', { 'id': user.id }) }}\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#reservationDetailModal\">
                    Nueva reservación
                </button>
            </li>
        {% endif %}
    </ul>

    <div class=\"x_panel x_panel_filters\">
        <div class=\"x_content\">
            <form id=\"form_filter\" action=\"{{ path('backend_user_reservations', { 'id': user.id }) }}\" method=\"get\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_status\">Estado:</label>
                            <select id=\"filter_status\" name=\"filter_status\" class=\"form-control\" data-current=\"{{ filter_status }}\">
                                <option value=\"\">- Todos -</option>
                                <option value=\"1\">{{ '1'|ReservationStatusDescription }}</option>
                                <option value=\"0\">{{ '0'|ReservationStatusDescription }}</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_session_date_start\">Desde:</label>
                            <input type=\"text\" id=\"filter_session_date_start\" name=\"filter_session_date_start\" class=\"form-control datepicker has-feedback-right\" value=\"{{ filter_session_date_start }}\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group has-feedback\">
                            <label for=\"filter_session_date_end\">Hasta:</label>
                            <input type=\"text\" id=\"filter_session_date_end\" name=\"filter_session_date_end\" class=\"form-control datepicker has-feedback-right\" value=\"{{ filter_session_date_end }}\" />
                            <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_branch_office\">Sucursal</label>
                            <select id=\"filter_branch_office\" name=\"filter_branch_office\" class=\"form-control\">
                                <option value=\"\">- Todos -</option>
                                {% for branch_office in branch_offices %}
                                    <option value=\"{{ branch_office.id }}\">{{ branch_office.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_exercise_room\">Salón</label>
                            <select id=\"filter_exercise_room\" name=\"filter_exercise_room\" class=\"form-control\">
                                <option value=\"\">- Todos -</option>
                                {% for branch_office, rooms in exercise_rooms %}
                                    <optgroup label=\"{{ branch_office }}\">
                                        {% for exercise_room in rooms %}
                                            <option value=\"{{ exercise_room.id }}\">{{ exercise_room.name }}</option>
                                        {% endfor %}
                                    </optgroup>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"text-right\">
                            <button type=\"submit\" class=\"btn btn-dark\">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id=\"wrapper_list\">
    </div>

    <div id=\"reservationDetailModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
            </div>
        </div>
    </div>

    <script>
        \$(\".datepicker\").daterangepicker(datepickeroptions);

        var List = {
            url: null,

            filter: function () {
                var form = \$('#form_filter');
                var url = form.prop('action') + '?' + form.serialize();

                this.load(url);
            },

            reload: function () {
                this.load();
            },

            load: function (url) {
                \$.loader.show('#wrapper_list');

                this.url = url || this.url;

                \$('#wrapper_list').load(this.url);
            },

            init: function () {
                var _self = this;

                \$('#form_filter').on('submit', function () {
                    _self.filter();

                    return false;
                }).trigger('submit');

                \$('body').on('click', '.pagination a', function (e) {
                    e.preventDefault();

                    _self.load(\$(e.target).prop('href'));
                });

                return _self;
            },
        };

        \$('#reservationDetailModal').on('hidden.bs.modal', function () {
            \$(this).removeData('bs.modal');
            \$(this).find('.modal-content').empty();
        });

        List.init();
    </script>
{% endblock %}
", "backend/user/reservation/wrapper_list.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\reservation\\wrapper_list.html.twig");
    }
}
