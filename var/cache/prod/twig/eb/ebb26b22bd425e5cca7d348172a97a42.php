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

/* backend/user/reservation/new.html.twig */
class __TwigTemplate_1ff3c4081672e1ca301b263c3cc2e3c7 extends Template
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
        // line 1
        yield "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
    <h4 class=\"modal-title\" id=\"myModalLabel2\">Nueva reservación</h4>
</div>
<div class=\"modal-body\">
    <div id=\"wizard\" class=\"form_wizard wizard_horizontal\">
        <ul class=\"wizard_steps\">
            <li>
                <a href=\"#step-1\">
                    <span class=\"step_no\">1</span>
                    <span class=\"step_descr\">
                        <small>Filtros</small>
                    </span>
                </a>
            </li>
            <li>
                <a href=\"#step-2\">
                    <span class=\"step_no\">2</span>
                    <span class=\"step_descr\">
                        <small>Seleccionar clase</small>
                    </span>
                </a>
            </li>
            <li>
                <a href=\"#step-3\">
                    <span class=\"step_no\">3</span>
                    <span class=\"step_descr\">
                        <small>Confirmación</small>
                    </span>
                </a>
            </li>
        </ul>

        <div id=\"step-1\">
            <form id=\"form_reservation\" action=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_get");
        yield "\" class=\"form-horizontal form-label-left\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_branchOffice\">Sucursal:</label>
                            <select name=\"filters[branchOffice]\" id=\"filter_branchOffice\" class=\"form-control\">
                                <option value=\"\"></option>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["branchOffices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["entity"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                        <label for=\"filter_date_start\">Fecha:</label>
                        <input type=\"text\" name=\"filters[date_start]\" id=\"filter_date_start\" class=\"form-control datepicker has-feedback-right\" />
                        <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_type\">Tipo:</label>
                            <select name=\"filters[type]\" id=\"filter_type\" class=\"form-control\">
                                <option value=\"\"></option>
                                <option value=\"";
        // line 62
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::constant("App\\Util\\PackageSessionType::TYPE_INDIVIDUAL"), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(Twig\Extension\CoreExtension::constant("App\\Util\\PackageSessionType::TYPE_INDIVIDUAL")), "html", null, true);
        yield "</option>
                                <option value=\"";
        // line 63
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::constant("App\\Util\\PackageSessionType::TYPE_GROUP"), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(Twig\Extension\CoreExtension::constant("App\\Util\\PackageSessionType::TYPE_GROUP")), "html", null, true);
        yield "</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_discipline\">Disciplina:</label>
                            <select name=\"filters[discipline]\" id=\"filter_discipline\" class=\"form-control\">
                                <option value=\"\"></option>
                                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["disciplines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 75
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["entity"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label for=\"filter_instructor\">Instructor:</label>
                            <select name=\"filters[instructor]\" id=\"filter_instructor\" class=\"form-control\">
                                <option value=\"\"></option>
                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["instructors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 86
            yield "                                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 86), "firstname", [], "any", false, false, false, 86), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id=\"step-2\">
            <div class=\"row content\"></div>
        </div>

        <div id=\"step-3\">
        </div>
    </div>
</div>

<script id=\"tpl_session\" type=\"text/template\">
    <div class=\"col-md-55\">
        <a href=\"javascript:;\" class=\"session_item\" data-session=\"{session}\">
            <span class=\"icon-{icon}\"></span>
            <h6>{discipline}</h6>
            <p>{time_start}</p>
            <p>{instructor}</p>
            <select data-place-number></select>
        </a>
    </div>
</script>

<script id=\"tpl_confirmation\" type=\"text/template\">
    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th class=\"text-right\">Sucursal:</th>
                <td>{branch_office}</td>
            </tr>
            <tr>
                <th class=\"text-right\">Fecha:</th>
                <td>{date_start}</td>
            </tr>
            <tr>
                <th class=\"text-right\">Hora:</th>
                <td>{time_start}</td>
            </tr>
            <tr>
                <th class=\"text-right\">Tipo:</th>
                <td>{type}</td>
            </tr>
            <tr>
                <th class=\"text-right\">Disciplina:</th>
                <td>{discipline}</td>
            </tr>
            <tr>
                <th class=\"text-right\">Lugar:</th>
                <td>{place}</td>
            </tr>
            <tr>
                <th class=\"text-right\">Instructor:</th>
                <td>{instructor}</td>
            </tr>
        </tbody>
    </table>
</script>

<script>
    function Reservation()
    {
        this.sessions = [];
        this.index = null;
        this.session = null;
        this.place = null;
    }

    Reservation.prototype.reset = function () {
        this.sessions = [];
        this.index = null;
        this.session = null;
        this.place = null;
    };

    Reservation.prototype.selectSession = function (index) {
        if (! this.sessions[index]) {
            throw 'La clase seleccionada no es válida.';
        }

        this.index = index;
        this.session = this.sessions[this.index];

        return this;
    };

    Reservation.prototype.getSelectedIndex = function () {
        if (null == this.index) {
            throw 'Debes de seleccionar la clase que se desea reservar.';
        }

        return this.index;
    };

    Reservation.prototype.getSelectedSession = function () {
        if (null == this.session) {
            throw 'Debes de seleccionar la clase que se desea reservar.';
        }

        return this.session;
    };


    /* Initialization
     ==============================================================================*/

    var UserReservation = new Reservation();
    var form = \$('#form_reservation');
    var formWizard = \$('#wizard').smartWizard({
        hideButtonsOnDisabled: true,
        labelNext: 'Siguiente',
        labelPrevious: 'Anterior',
        labelFinish: 'Reservar',
        onLeaveStep: leaveAStepCallback,
        onShowStep: showAStepCallback,
        onFinish: onFinishCallback,
        buttonOrder: [ 'prev', 'next', 'finish', ],
    });

    \$('.buttonNext').addClass('btn btn-primary');
    \$('.buttonPrevious').addClass('btn btn-default');
    \$('.buttonFinish').addClass('btn btn-dark');

    \$(\".datepicker\").daterangepicker(datepickeroptions);

    formWizard.smartWizard('fixHeight');


    /* SmartWizard Callbacks
     ==============================================================================*/

    function leaveAStepCallback(obj, context)
    {
        switch (context.toStep) {
            case 1:
                return firstStepHandler();
                break;
            case 2:
                return secondStepHandler();
                break;
            case 3:
                return thirdStepHandler();
                break;
        }
    }

    function showAStepCallback (currentStep, context)
    {
        if (undefined != formWizard) {
            formWizard.smartWizard('fixHeight');

            if (1 == context.toStep) {
                formWizard.smartWizard('disableStep', 2);
                formWizard.smartWizard('disableStep', 3);
            } else if (2 == context.toStep) {
                formWizard.smartWizard('disableStep', 3);
                \$('.buttonFinish').hide();
            }
        }
    }

    function onFinishCallback(objs, context) {
        var
            session = UserReservation.getSelectedSession(),
            place = UserReservation.place
        ;

        \$.ajax({
            url: '";
        // line 260
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reservation_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 260)]), "html", null, true);
        yield "',
            type: 'post',
            data: {
                user: ";
        // line 263
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 263), "html", null, true);
        yield ",
                session_id: session.id,
                place: place,
            },
            success: function (response) {
                if (response.error) {
                    formWizard.smartWizard('showMessage', response.error);
                } else {
                    formWizard.smartWizard('goToStep', 1);

                    alert('¡La clase ha sido reservada con éxito!');
                }
            }
        })
    }


    /* Steps Handlers
     ==============================================================================*/

    function firstStepHandler()
    {
        UserReservation.reset();

        return true;
    }

    function secondStepHandler()
    {
        \$('#step-2 .content').empty();

        var init_place = function () {
            \$('#step-2 .content [data-place-number]').append('<option value=\"\">Lugar</option>');
        };

        \$.ajax({
            url: form.prop('action'),
            data: form.serialize(),
            dataType: 'json',
            async: false,
            success: function (response) {
                if (! response.length) {
                    formWizard.smartWizard('showMessage', 'No se han encontrado clases disponibles.');
                } else {
                    formWizard.smartWizard('hideMessage');

                    UserReservation.sessions = response;
                }
            },
        });

        if (UserReservation.sessions.length) {
            UserReservation.sessions.forEach(function (session, key) {
                var item = \$('#tpl_session').text()
                    .replace(/\\{session\\}/, key)
                    .replace(/\\{icon\\}/, ('i' == session.type ? 'individual' : 'group'))
                    .replace(/\\{discipline\\}/, session.discipline)
                    .replace(/\\{time_start\\}/, session.time_start)
                    .replace(/\\{instructor\\}/, session.instructor)
                ;

                \$('#step-2 .content').append(item);
            });

            init_place();

            formWizard.smartWizard('fixHeight');


            \$('#step-2 .session_item select').on('click', function (e) {
                if (\$(this).find('option[value=\"\"]').length) {
                    \$(this).closest('.session_item').click();
                }
            });

            \$('#step-2 .session_item').on('click', function (e) {
                try {
                    if (\$(e.target).is('select')) {
                        return;
                    }

                    if (\$(this).hasClass('selected')) {
                        return;
                    }

                    UserReservation.selectSession(\$(this).data('session'));
                    var session = UserReservation.getSelectedSession();

                    \$('#step-2 .selected').removeClass('selected');
                    \$(this).addClass('selected');

                    // Places

                    \$('#step-2 .content [data-place-number]').empty();
                    init_place();

                    var place = \$(this).find('[data-place-number]');
                    place.empty();
                    place.append('<option value=\"\">. . .</option>')
                    \$.ajax({
                        url: '/backend/session/' + session.id + '/places',
                        dataType: 'json',
                        success: function (response) {
                            place.empty();

                            place.append('<option value=\"\"></option>');

                            \$.each(response, function (index, item) {
                                var option = \$('<option value=\"' + item.place + '\">' + item.place + '</option>');

                                if (! item.is_available) {
                                    option.prop('disabled', true);
                                }

                                place.append(option);
                            });

                            place.on('change', function () {
                                UserReservation.place = \$(this).val();
                            });

                            place.prop('disabled', false);

                            // If there is a selected option and exists in the select element
                            if (UserReservation.place && place.find('option[value=\"' + UserReservation.place + '\"]').length) {
                                place.val(UserReservation.place);
                            } else if (UserReservation.place) {
                                var val = place.find('option:first-child').not('disabled').val();
                                place.val(val).trigger('change');
                            }
                        }
                    });

                    formWizard.smartWizard('hideMessage');
                } catch (e) {
                    formWizard.smartWizard('showMessage', e);
                }
            });

            try {
                \$('[data-session=\"' + UserReservation.getSelectedIndex() + '\"]').trigger('click');
            } catch (e) {
            }

            return true;
        }

        return false;
    }

    function thirdStepHandler()
    {
        \$('#step-3').empty();

        try {
            var session = UserReservation.getSelectedSession();

            if (! UserReservation.place) {
                throw 'Se debe seleccionar un lugar en la clase a reservar.';
            }

            formWizard.smartWizard('hideMessage');

            var item = \$('#tpl_confirmation').text()
                .replace(/\\{date_start\\}/, session.date_start)
                .replace(/\\{time_start\\}/, session.time_start)
                .replace(/\\{type\\}/, ('i' == session.type ? 'Individual' : 'Grupal'))
                .replace(/\\{discipline\\}/, session.discipline)
                .replace(/\\{place\\}/, UserReservation.place)
                .replace(/\\{instructor\\}/, session.instructor)
                .replace(/\\{branch_office\\}/, session.branch_office)
            ;

            \$('#step-3').append(item);

            return true;
        } catch (e) {
            formWizard.smartWizard('showMessage', e);

            return false;
        }
    }
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/reservation/new.html.twig";
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
        return array (  360 => 263,  354 => 260,  180 => 88,  169 => 86,  165 => 85,  155 => 77,  144 => 75,  140 => 74,  124 => 63,  118 => 62,  99 => 45,  88 => 43,  84 => 42,  74 => 35,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/reservation/new.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/reservation/new.html.twig");
    }
}
