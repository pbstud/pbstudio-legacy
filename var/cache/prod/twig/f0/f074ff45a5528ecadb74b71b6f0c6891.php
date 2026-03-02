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

/* backend/configuration/index.html.twig */
class __TwigTemplate_c108f6de2a374f972eb4e7b71ec118d8 extends Template
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
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/configuration/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Configuración</h3>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>General</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <form action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_configuration_update");
        yield "\" method=\"post\" class=\"form-horizontal form-label-left \" role=\"form\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12 required\" for=\"general_email_contacto\">Email de contacto:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"general_email_contacto\" name=\"general[email_contacto]\" value=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["general"] ?? null), "email_contacto", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["general"] ?? null), "email_contacto", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"Email de contacto\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12 required\" for=\"general_package_free\">
                                    Paquete gratis:<br />
                                    <small class=\"help\">Paquete de promoción a usuarios nuevos</small>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\" id=\"general_package_free\" name=\"general[package_free]\" data-current=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["general"] ?? null), "package_free", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["general"] ?? null), "package_free", [], "any", false, false, false, 35), "")) : ("")), "html", null, true);
        yield "\">
                                        <option value=\"\">- Seleccionar -</option>
                                        <optgroup label=\"Grupales\">
                                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, ($context["packages"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 38) == "g"); }));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 39
            yield "                                                <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 39), "html", null, true);
            yield " clase";
            yield (((1 < CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 39))) ? ("s") : (""));
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                                        </optgroup>
                                        <optgroup label=\"Individuales\">
                                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, ($context["packages"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 43) == "i"); }));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 44
            yield "                                                <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 44), "html", null, true);
            yield " clase";
            yield (((1 < CoreExtension::getAttribute($this->env, $this->source, $context["package"], "totalClasses", [], "any", false, false, false, 44))) ? ("s") : (""));
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-12 col-sm-12 col-xs-12 required\" for=\"general_header_scripts\">
                                    Header:<br />
                                    <small class=\"help\">Scripts que se ejecutan antes de cerrar el <code>";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, "</head>");
        yield "</code></small>
                                </label>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <textarea id=\"general_header_scripts\" name=\"general[header_scripts]\" rows=\"5\" class=\"form-control\" placeholder=\"Scripts\">";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["general"] ?? null), "header_scripts", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["general"] ?? null), "header_scripts", [], "any", false, false, false, 56), "")) : ("")), "html", null, true);
        yield "</textarea>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-12 col-sm-12 col-xs-12 required\" for=\"general_header_scripts\">
                                    Footer:<br />
                                    <small class=\"help\">Scripts que se ejecutan antes de cerrar el <code>";
        // line 62
        yield Twig\Extension\EscaperExtension::escape($this->env, "</body>");
        yield "</code></small>
                                </label>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <textarea id=\"general_footer_scripts\" name=\"general[footer_scripts]\" rows=\"5\" class=\"form-control\" placeholder=\"Scripts\">";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["general"] ?? null), "footer_scripts", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["general"] ?? null), "footer_scripts", [], "any", false, false, false, 65), "")) : ("")), "html", null, true);
        yield "</textarea>
                                </div>
                            </div>

                            <div class=\"ln_solid\"></div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <div class=\"pull-right\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            Guardar
                                        </button>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>

                            <input type='hidden' name='_method' value='PUT'>
                        </form>
                    </div>
                </div>

                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Avisos</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <form action=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_configuration_update");
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal form-label-left \" role=\"form\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12 required\" for=\"notice_image\">Imagen:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"file\" id=\"notice_image\" name=\"notice[image]\">

                                    ";
        // line 100
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "image", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "image", [], "any", false, false, false, 100), false)) : (false))) {
            // line 101
            yield "                                        ";
            $context["image_uri"] = $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "image", [], "any", false, false, false, 101), "file");
            // line 102
            yield "                                        <br>
                                        <a href=\"";
            // line 103
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["image_uri"] ?? null), "html", null, true);
            yield "\" download>
                                            <img class=\"img-thumbnail\" src=\"";
            // line 104
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["image_uri"] ?? null), "small"), "html", null, true);
            yield "\" alt=\"Actual\" />
                                        </a>";
        }
        // line 107
        yield "</div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"notice_url\">Url:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"url\" id=\"notice_url\" name=\"notice[url]\" value=\"";
        // line 112
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "url", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "url", [], "any", false, false, false, 112), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\">Activo:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <div>
                                        <input type=\"radio\" id=\"notice_active_0\" name=\"notice[active]\" class=\"flat\" value=\"0\" ";
        // line 120
        if ( !((CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "active", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "active", [], "any", false, false, false, 120), 0)) : (0))) {
            yield "checked=\"checked\"";
        }
        yield " />
                                        <label for=\"notice_active_0\">No</label>
                                        <input type=\"radio\" id=\"notice_active_1\" name=\"notice[active]\" class=\"flat\" value=\"1\" ";
        // line 122
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "active", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["notice"] ?? null), "active", [], "any", false, false, false, 122), 0)) : (0))) {
            yield "checked=\"checked\"";
        }
        yield " />
                                        <label for=\"notice_active_1\">Si</label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"ln_solid\"></div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <div class=\"pull-right\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            Guardar
                                        </button>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>

                            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Conekta</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <form action=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_configuration_update");
        yield "\" method=\"post\" class=\"form-horizontal form-label-left\" role=\"form\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\">Sandbox:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <div>
                                        <input type=\"radio\" id=\"conekta_sandbox_mode_0\" name=\"conekta[sandbox_mode]\" class=\"flat\" value=\"0\" ";
        // line 160
        if ( !((CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "sandbox_mode", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "sandbox_mode", [], "any", false, false, false, 160), 0)) : (0))) {
            yield "checked=\"checked\"";
        }
        yield " />
                                        <label for=\"conekta_sandbox_mode_0\">No</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;

                                        <input type=\"radio\" id=\"conekta_sandbox_mode_1\" name=\"conekta[sandbox_mode]\" class=\"flat\" value=\"1\" ";
        // line 164
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "sandbox_mode", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "sandbox_mode", [], "any", false, false, false, 164), 0)) : (0))) {
            yield "checked=\"checked\"";
        }
        yield " />
                                        <label for=\"conekta_sandbox_mode_1\">Si</label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"conekta_sandbox_secret_key\">Sandbox Secret Key:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"conekta_sandbox_secret_key\" name=\"conekta[sandbox_secret_key]\" value=\"";
        // line 173
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "sandbox_secret_key", [], "any", true, true, false, 173)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "sandbox_secret_key", [], "any", false, false, false, 173), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"conekta_sandbox_public_key\">Sandbox Public Key:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"conekta_sandbox_public_key\" name=\"conekta[sandbox_public_key]\" value=\"";
        // line 179
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "sandbox_public_key", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "sandbox_public_key", [], "any", false, false, false, 179), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"conekta_production_secret_key\">Production Secret Key:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"conekta_production_secret_key\" name=\"conekta[production_secret_key]\" value=\"";
        // line 186
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "production_secret_key", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "production_secret_key", [], "any", false, false, false, 186), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"conekta_production_public_key\">Production Public Key:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"conekta_production_public_key\" name=\"conekta[production_public_key]\" value=\"";
        // line 192
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "production_public_key", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["conekta"] ?? null), "production_public_key", [], "any", false, false, false, 192), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\">
                                </div>
                            </div>

                            <div class=\"ln_solid\"></div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <div class=\"pull-right\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            Guardar
                                        </button>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>

                            <input type='hidden' name='_method' value='PUT'>
                        </form>
                    </div>
                </div>

                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Clases</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <form action=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_configuration_update");
        yield "\" method=\"post\" class=\"form-horizontal form-label-left\" role=\"form\">
                            <fieldset>
                                <legend><small>Cancelaciones</small></legend>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"sessions_time_cancel_individual\">
                                        Individuales:<br />
                                        <small class=\"help\">Tiempo limite, <u>en minutos</u>, para cancelar una clase individual</small>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"sessions_time_cancel_individual\" name=\"sessions[time_cancel_individual]\" value=\"";
        // line 230
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["sessions"] ?? null), "time_cancel_individual", [], "any", true, true, false, 230)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["sessions"] ?? null), "time_cancel_individual", [], "any", false, false, false, 230), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"1440\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"sessions_time_cancel_group\">
                                        Grupal:<br />
                                        <small class=\"help\">Tiempo limite, <u>en minutos</u>, para cancelar una clase grupal</small>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"sessions_time_cancel_group\" name=\"sessions[time_cancel_group]\" value=\"";
        // line 239
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["sessions"] ?? null), "time_cancel_group", [], "any", true, true, false, 239)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["sessions"] ?? null), "time_cancel_group", [], "any", false, false, false, 239), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"720\" class=\"form-control\">
                                    </div>
                                </div>
                            </fieldset>

                            <div class=\"ln_solid\"></div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <div class=\"pull-right\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            Guardar
                                        </button>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>

                            <input type='hidden' name='_method' value='PUT'>
                        </form>
                    </div>
                </div>

                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Estadísticas</h2>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <form action=\"";
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_configuration_update");
        yield "\" method=\"post\" class=\"form-horizontal form-label-left\" role=\"form\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12 required\" for=\"stats_start_date\">
                                    Fecha inicio de mes:<br />
                                    <small class=\"help\">Fecha para cálculo de catorcena y mensualidad de instructores</small>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"stats_start_date\" name=\"stats[start_date]\" value=\"";
        // line 276
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "start_date", [], "any", true, true, false, 276)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "start_date", [], "any", false, false, false, 276), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control datepicker has-feedback-right\">
                                    <span class=\"form-control-feedback right\" aria-hidden=\"true\">
                                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                    </span>
                                </div>
                            </div>

                            <div class=\"ln_solid\"></div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <div class=\"pull-right\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            Guardar
                                        </button>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>

                            <input type='hidden' name='_method' value='PUT'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/configuration/index.html.twig";
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
        return array (  443 => 276,  433 => 269,  400 => 239,  388 => 230,  376 => 221,  344 => 192,  335 => 186,  325 => 179,  316 => 173,  302 => 164,  293 => 160,  285 => 155,  247 => 122,  240 => 120,  229 => 112,  222 => 107,  217 => 104,  213 => 103,  210 => 102,  207 => 101,  205 => 100,  196 => 94,  164 => 65,  158 => 62,  149 => 56,  143 => 53,  134 => 46,  121 => 44,  117 => 43,  113 => 41,  100 => 39,  96 => 38,  90 => 35,  78 => 26,  71 => 22,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/configuration/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/configuration/index.html.twig");
    }
}
