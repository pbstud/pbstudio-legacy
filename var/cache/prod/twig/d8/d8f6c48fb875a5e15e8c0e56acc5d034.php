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
class __TwigTemplate_a5d4fa0025375ee9b47963001a469233 extends Template
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
        yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "any", false, false, false, 12), "d-m-Y") . " ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 12), "H:i")), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Sucursal</th>
                    <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "branchOffice", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Salón</th>
                    <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoom", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Modalidad</th>
                    <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getPackageSessionType(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "type", [], "any", false, false, false, 24)), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Disciplina</th>
                    <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "discipline", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Instructor</th>
                    <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>
                        <span class=\"label label-";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusLabel(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "status", [], "any", false, false, false, 37)), "html", null, true);
        yield "\">
                            ";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getSessionStatusDescription(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "status", [], "any", false, false, false, 38)), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Usuario</th>
                    <td>";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["user"] ?? null), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Camilla/Silla</th>
                    <td>";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "placeNumber", [], "any", false, false, false, 58), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>F. de reservación</th>
                    <td>";
        // line 62
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "createdAt", [], "any", false, false, false, 62)), "html", null, true);
        yield "</td>
                </tr>
                ";
        // line 64
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "isAvailable", [], "any", false, false, false, 64)) {
            // line 65
            yield "                    <tr>
                        <th>F. de cancelación</th>
                        <td>";
            // line 67
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "cancellationAt", [], "any", false, false, false, 67)), "html", null, true);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusLabel(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "isAvailable", [], "any", false, false, false, 73)), "html", null, true);
        yield "\">
                            ";
        // line 74
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusDescription(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "isAvailable", [], "any", false, false, false, 74)), "html", null, true);
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
($context["reservation"] ?? null), "isAvailable", [], "any", false, false, false, 90)) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,         // line 91
($context["session"] ?? null), "status", [], "any", false, false, false, 91), [Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_OPEN"), Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_FULL"), Twig\Extension\CoreExtension::constant("App\\Entity\\Session::STATUS_CLOSED")]))) {
            // line 93
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancel_form"] ?? null), 'form_start', ["attr" => ["id" => "frmCancel"]]);
            // line 97
            yield "
            <button type=\"submit\" class=\"btn btn-danger\" data-loading-text=\"Cancelando...\">Cancelar reservación</button>
        ";
            // line 99
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancel_form"] ?? null), 'form_end');
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
        return array (  221 => 129,  188 => 99,  184 => 97,  181 => 93,  179 => 91,  178 => 90,  177 => 88,  160 => 74,  156 => 73,  151 => 70,  145 => 67,  141 => 65,  139 => 64,  134 => 62,  127 => 58,  120 => 54,  113 => 50,  98 => 38,  94 => 37,  86 => 32,  79 => 28,  72 => 24,  65 => 20,  58 => 16,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/reservation/detail.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/reservation/detail.html.twig");
    }
}
