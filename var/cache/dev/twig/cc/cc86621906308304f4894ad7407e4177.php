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

/* backend/user/reservation/detail.html.twig */
class __TwigTemplate_d2b07f01a5bb42d03e3a3fc4d578ab99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/reservation/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/user/reservation/detail.html.twig"));

        // line 1
        yield "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
    <h4 class=\"modal-title\" id=\"myModalLabel2\">Detalle de la reservación</h4>
</div>
<div class=\"modal-body\">
    <div class=\"table-responsive\">
        <p class=\"h5\"><strong>DATOS DE LA CLASE</strong></p>
        <table class=\"table table-bordered table-striped\">
            <tbody>
                <tr>
                    <th width=\"150px\">Fecha de inicio</th>
                    <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 12, $this->source); })()), "dateStart", [], "any", false, false, false, 12), "d-m-Y") . " ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 12, $this->source); })()), "timeStart", [], "any", false, false, false, 12), "H:i")), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Sucursal</th>
                    <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 16, $this->source); })()), "branchOffice", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Salón</th>
                    <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 20, $this->source); })()), "exerciseRoom", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Modalidad</th>
                    <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24)), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Disciplina</th>
                    <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 28, $this->source); })()), "discipline", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Instructor</th>
                    <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "instructor", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>
                        <span class=\"label label-";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 37, $this->source); })()), "status", [], "any", false, false, false, 37)), "html", null, true);
        yield "\">
                            ";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38)), "html", null, true);
        yield "
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class=\"h5\"><strong>DATOS DE LA RESERVACIÓN</strong></p>
        <table class=\"table table-bordered table-striped\">
            <tbody>
                <tr>
                    <th width=\"150px\">#</th>
                    <td>";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Usuario</th>
                    <td>";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Camilla/Silla</th>
                    <td>";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "placeNumber", [], "any", false, false, false, 58), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>F. de reservación</th>
                    <td>";
        // line 62
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 62, $this->source); })()), "createdAt", [], "any", false, false, false, 62)), "html", null, true);
        yield "</td>
                </tr>
                ";
        // line 64
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 64, $this->source); })()), "isAvailable", [], "any", false, false, false, 64)) {
            // line 65
            yield "                    <tr>
                        <th>F. de cancelación</th>
                        <td>";
            // line 67
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 67, $this->source); })()), "cancellationAt", [], "any", false, false, false, 67)), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        // line 70
        yield "                <tr>
                    <th>Estado</th>
                    <td>
                        <span class=\"label label-";
        // line 73
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusLabel(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 73, $this->source); })()), "isAvailable", [], "any", false, false, false, 73)), "html", null, true);
        yield "\">
                            ";
        // line 74
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusDescription(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 74, $this->source); })()), "isAvailable", [], "any", false, false, false, 74)), "html", null, true);
        yield "
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class=\"modal-footer\">
    <div id=\"flash_container\" class=\"text-left\"></div>

    <button type=\"button\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Cerrar detalle</button>

    ";
        // line 88
        if ((($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_user_reservation_cancel") && CoreExtension::getAttribute($this->env, $this->source,         // line 90
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 90, $this->source); })()), "isAvailable", [], "any", false, false, false, 90)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 91, $this->source); })()), "status", [], "any", false, false, false, 91), [Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_OPEN"), Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_FULL"), Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_CLOSED")]))) {
            // line 93
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cancel_form"]) || array_key_exists("cancel_form", $context) ? $context["cancel_form"] : (function () { throw new RuntimeError('Variable "cancel_form" does not exist.', 93, $this->source); })()), 'form_start', ["attr" => ["id" => "frmCancel"]]);
            // line 97
            yield "
            <button type=\"submit\" class=\"btn btn-danger\" data-loading-text=\"Cancelando...\">Cancelar reservación</button>
        ";
            // line 99
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cancel_form"]) || array_key_exists("cancel_form", $context) ? $context["cancel_form"] : (function () { throw new RuntimeError('Variable "cancel_form" does not exist.', 99, $this->source); })()), 'form_end');
            yield "

        <script>
            \$('#frmCancel').on('submit', function () {
                var form = \$(this);
                var btn = form.find('button[type=\"submit\"]').button('loading');

                \$.ajax({
                    url: form.prop('action'),
                    type: 'post',
                    data: form.serialize(),
                    success: function(response) {
                        if (response.error) {
                            \$.flash.error(response.error);

                            btn.button('reset');
                        } else {
                            \$.flash.success('¡La reservación ha sido cancelada de forma correcta!');

                            List.reload();

                            btn.remove();
                        }
                    }
                });

                return false;
            });
        </script>
    ";
        }
        // line 129
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/reservation/detail.html.twig";
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
        return array (  227 => 129,  194 => 99,  190 => 97,  187 => 93,  185 => 91,  184 => 90,  183 => 88,  166 => 74,  162 => 73,  157 => 70,  151 => 67,  147 => 65,  145 => 64,  140 => 62,  133 => 58,  126 => 54,  119 => 50,  104 => 38,  100 => 37,  92 => 32,  85 => 28,  78 => 24,  71 => 20,  64 => 16,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
    <h4 class=\"modal-title\" id=\"myModalLabel2\">Detalle de la reservación</h4>
</div>
<div class=\"modal-body\">
    <div class=\"table-responsive\">
        <p class=\"h5\"><strong>DATOS DE LA CLASE</strong></p>
        <table class=\"table table-bordered table-striped\">
            <tbody>
                <tr>
                    <th width=\"150px\">Fecha de inicio</th>
                    <td>{{ session.dateStart | date('d-m-Y') ~ ' ' ~ session.timeStart | date('H:i') }}</td>
                </tr>
                <tr>
                    <th>Sucursal</th>
                    <td>{{ session.branchOffice }}</td>
                </tr>
                <tr>
                    <th>Salón</th>
                    <td>{{ session.exerciseRoom }}</td>
                </tr>
                <tr>
                    <th>Modalidad</th>
                    <td>{{ session.type|PackageSessionType }}</td>
                </tr>
                <tr>
                    <th>Disciplina</th>
                    <td>{{ session.discipline }}</td>
                </tr>
                <tr>
                    <th>Instructor</th>
                    <td>{{ session.instructor }}</td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>
                        <span class=\"label label-{{ session.status|SessionStatusLabel }}\">
                            {{ session.status|SessionStatusDescription }}
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class=\"h5\"><strong>DATOS DE LA RESERVACIÓN</strong></p>
        <table class=\"table table-bordered table-striped\">
            <tbody>
                <tr>
                    <th width=\"150px\">#</th>
                    <td>{{ reservation.id }}</td>
                </tr>
                <tr>
                    <th>Usuario</th>
                    <td>{{ user }}</td>
                </tr>
                <tr>
                    <th>Camilla/Silla</th>
                    <td>{{ reservation.placeNumber }}</td>
                </tr>
                <tr>
                    <th>F. de reservación</th>
                    <td>{{ reservation.createdAt|date }}</td>
                </tr>
                {% if not reservation.isAvailable %}
                    <tr>
                        <th>F. de cancelación</th>
                        <td>{{ reservation.cancellationAt|date }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Estado</th>
                    <td>
                        <span class=\"label label-{{ reservation.isAvailable|ReservationStatusLabel }}\">
                            {{ reservation.isAvailable|ReservationStatusDescription }}
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class=\"modal-footer\">
    <div id=\"flash_container\" class=\"text-left\"></div>

    <button type=\"button\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Cerrar detalle</button>

    {% if
        is_allowed_route('backend_user_reservation_cancel') and
        reservation.isAvailable and
        session.status in [ constant('App\\\\Entity\\\\Session::STATUS_OPEN'), constant('App\\\\Entity\\\\Session::STATUS_FULL'), constant('App\\\\Entity\\\\Session::STATUS_CLOSED') ]
    %}
        {{ form_start(cancel_form, {
            'attr': {
                'id': 'frmCancel',
            }
        }) }}
            <button type=\"submit\" class=\"btn btn-danger\" data-loading-text=\"Cancelando...\">Cancelar reservación</button>
        {{ form_end(cancel_form) }}

        <script>
            \$('#frmCancel').on('submit', function () {
                var form = \$(this);
                var btn = form.find('button[type=\"submit\"]').button('loading');

                \$.ajax({
                    url: form.prop('action'),
                    type: 'post',
                    data: form.serialize(),
                    success: function(response) {
                        if (response.error) {
                            \$.flash.error(response.error);

                            btn.button('reset');
                        } else {
                            \$.flash.success('¡La reservación ha sido cancelada de forma correcta!');

                            List.reload();

                            btn.remove();
                        }
                    }
                });

                return false;
            });
        </script>
    {% endif %}
</div>
", "backend/user/reservation/detail.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\user\\reservation\\detail.html.twig");
    }
}
