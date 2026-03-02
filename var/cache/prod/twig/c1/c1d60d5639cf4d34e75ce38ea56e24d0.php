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

/* backend/user/reservation/list.html.twig */
class __TwigTemplate_5f3f0dedbedf25be9cb94515d5f5fba5 extends Template
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
        $this->parent = $this->loadTemplate("backend/layout-ajax.html.twig", "backend/user/reservation/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["reservations"] ?? null)) > 0)) {
            // line 5
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class=\"text-center\">F. de inicio</th>
                        <th>Sucursal</th>
                        <th>Salón</th>
                        <th>Instructor</th>
                        <th class=\"text-center\">Camilla/Silla</th>
                        <th class=\"text-center\">F. de reservación</th>
                        <th class=\"text-center\">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reservations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 21
                yield "                        ";
                // line 22
                yield "                        ";
                // line 23
                yield "                        ";
                $context["session"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 23);
                // line 24
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 26
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_user_reservation_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 26), "reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                yield "\" class=\"link-edit\" data-toggle=\"modal\" data-target=\"#reservationDetailModal\">
                                    <u>";
                // line 27
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 27), "html", null, true);
                yield "</u>
                                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                </a>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateStart", [], "any", false, false, false, 32), "d-m-Y") . " ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "timeStart", [], "any", false, false, false, 32), "H:i")), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 35
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "branchOffice", [], "any", false, false, false, 35), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 38
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "exerciseRoom", [], "any", false, false, false, 38), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 41
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "instructor", [], "any", false, false, false, 41), "profile", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 44
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "placeNumber", [], "any", false, false, false, 44), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 47
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "createdAt", [], "any", false, false, false, 47), "d-m-Y H:i"), "html", null, true);
                yield "
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 50) && CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "closed", [], "any", false, false, false, 50))) {
                    // line 51
                    yield "                                    <span class=\"label label-success\">
                                        Tomada
                                    </span>
                                ";
                } else {
                    // line 55
                    yield "                                    <span class=\"label label-";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusLabel((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 55) * 1)), "html", null, true);
                    yield "\">
                                        ";
                    // line 56
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->getReservationStatusDescription((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isAvailable", [], "any", false, false, false, 56) * 1)), "html", null, true);
                    yield "
                                    </span>
                                ";
                }
                // line 59
                yield "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                </tbody>
            </table>
        </div>

        ";
            // line 66
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["reservations"] ?? null));
            yield "
    ";
        } else {
            // line 68
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/user/reservation/list.html.twig";
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
        return array (  172 => 68,  167 => 66,  161 => 62,  153 => 59,  147 => 56,  142 => 55,  136 => 51,  134 => 50,  128 => 47,  122 => 44,  116 => 41,  110 => 38,  104 => 35,  98 => 32,  90 => 27,  86 => 26,  82 => 24,  79 => 23,  77 => 22,  75 => 21,  71 => 20,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/user/reservation/list.html.twig", "/var/www/pbstudio/releases/81/templates/backend/user/reservation/list.html.twig");
    }
}
