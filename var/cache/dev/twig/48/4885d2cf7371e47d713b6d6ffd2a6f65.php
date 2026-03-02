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
class __TwigTemplate_e3dd3760dd2a01d54cce65ded84006c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/configuration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/configuration/index.html.twig"));

        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/configuration/index.html.twig", 1);
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, (isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 38, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38) == "g"); }));
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::arrayFilter($this->env, (isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 43, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43) == "i"); }));
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
            $context["image_uri"] = $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notice"]) || array_key_exists("notice", $context) ? $context["notice"] : (function () { throw new RuntimeError('Variable "notice" does not exist.', 101, $this->source); })()), "image", [], "any", false, false, false, 101), "file");
            // line 102
            yield "                                        <br>
                                        <a href=\"";
            // line 103
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 103, $this->source); })()), "html", null, true);
            yield "\" download>
                                            <img class=\"img-thumbnail\" src=\"";
            // line 104
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 104, $this->source); })()), "small"), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  461 => 276,  451 => 269,  418 => 239,  406 => 230,  394 => 221,  362 => 192,  353 => 186,  343 => 179,  334 => 173,  320 => 164,  311 => 160,  303 => 155,  265 => 122,  258 => 120,  247 => 112,  240 => 107,  235 => 104,  231 => 103,  228 => 102,  225 => 101,  223 => 100,  214 => 94,  182 => 65,  176 => 62,  167 => 56,  161 => 53,  152 => 46,  139 => 44,  135 => 43,  131 => 41,  118 => 39,  114 => 38,  108 => 35,  96 => 26,  89 => 22,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% block content %}
    <div class=\"\">
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
                        <form action=\"{{ path('backend_configuration_update') }}\" method=\"post\" class=\"form-horizontal form-label-left \" role=\"form\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12 required\" for=\"general_email_contacto\">Email de contacto:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"general_email_contacto\" name=\"general[email_contacto]\" value=\"{{ general.email_contacto | default('') }}\" class=\"form-control\" placeholder=\"Email de contacto\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12 required\" for=\"general_package_free\">
                                    Paquete gratis:<br />
                                    <small class=\"help\">Paquete de promoción a usuarios nuevos</small>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\" id=\"general_package_free\" name=\"general[package_free]\" data-current=\"{{ general.package_free | default('') }}\">
                                        <option value=\"\">- Seleccionar -</option>
                                        <optgroup label=\"Grupales\">
                                            {% for package in packages|filter(v => v.type == 'g') %}
                                                <option value=\"{{ package.id }}\">{{ package.totalClasses }} clase{{ 1 < package.totalClasses ? 's' : '' }}</option>
                                            {% endfor %}
                                        </optgroup>
                                        <optgroup label=\"Individuales\">
                                            {% for package in packages|filter(v => v.type == 'i') %}
                                                <option value=\"{{ package.id }}\">{{ package.totalClasses }} clase{{ 1 < package.totalClasses ? 's' : '' }}</option>
                                            {% endfor %}
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-12 col-sm-12 col-xs-12 required\" for=\"general_header_scripts\">
                                    Header:<br />
                                    <small class=\"help\">Scripts que se ejecutan antes de cerrar el <code>{{ '</head>' | e }}</code></small>
                                </label>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <textarea id=\"general_header_scripts\" name=\"general[header_scripts]\" rows=\"5\" class=\"form-control\" placeholder=\"Scripts\">{{ general.header_scripts | default('') }}</textarea>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-12 col-sm-12 col-xs-12 required\" for=\"general_header_scripts\">
                                    Footer:<br />
                                    <small class=\"help\">Scripts que se ejecutan antes de cerrar el <code>{{ '</body>' | e }}</code></small>
                                </label>
                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    <textarea id=\"general_footer_scripts\" name=\"general[footer_scripts]\" rows=\"5\" class=\"form-control\" placeholder=\"Scripts\">{{ general.footer_scripts | default('') }}</textarea>
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
                        <form action=\"{{ path('backend_configuration_update') }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal form-label-left \" role=\"form\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12 required\" for=\"notice_image\">Imagen:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"file\" id=\"notice_image\" name=\"notice[image]\">

                                    {% if notice.image|default(false) %}
                                        {% set image_uri = vich_uploader_asset(notice.image, 'file') %}
                                        <br>
                                        <a href=\"{{ image_uri }}\" download>
                                            <img class=\"img-thumbnail\" src=\"{{ image_uri|imagine_filter('small') }}\" alt=\"Actual\" />
                                        </a>
                                    {%- endif -%}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"notice_url\">Url:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"url\" id=\"notice_url\" name=\"notice[url]\" value=\"{{ notice.url|default('') }}\" class=\"form-control\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\">Activo:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <div>
                                        <input type=\"radio\" id=\"notice_active_0\" name=\"notice[active]\" class=\"flat\" value=\"0\" {% if not notice.active|default(0) %}checked=\"checked\"{% endif %} />
                                        <label for=\"notice_active_0\">No</label>
                                        <input type=\"radio\" id=\"notice_active_1\" name=\"notice[active]\" class=\"flat\" value=\"1\" {% if notice.active|default(0) %}checked=\"checked\"{% endif %} />
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
                        <form action=\"{{ path('backend_configuration_update') }}\" method=\"post\" class=\"form-horizontal form-label-left\" role=\"form\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\">Sandbox:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <div>
                                        <input type=\"radio\" id=\"conekta_sandbox_mode_0\" name=\"conekta[sandbox_mode]\" class=\"flat\" value=\"0\" {% if not conekta.sandbox_mode | default(0) %}checked=\"checked\"{% endif %} />
                                        <label for=\"conekta_sandbox_mode_0\">No</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;

                                        <input type=\"radio\" id=\"conekta_sandbox_mode_1\" name=\"conekta[sandbox_mode]\" class=\"flat\" value=\"1\" {% if conekta.sandbox_mode | default(0) %}checked=\"checked\"{% endif %} />
                                        <label for=\"conekta_sandbox_mode_1\">Si</label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"conekta_sandbox_secret_key\">Sandbox Secret Key:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"conekta_sandbox_secret_key\" name=\"conekta[sandbox_secret_key]\" value=\"{{ conekta.sandbox_secret_key | default('') }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"conekta_sandbox_public_key\">Sandbox Public Key:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"conekta_sandbox_public_key\" name=\"conekta[sandbox_public_key]\" value=\"{{ conekta.sandbox_public_key | default('') }}\" class=\"form-control\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"conekta_production_secret_key\">Production Secret Key:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"conekta_production_secret_key\" name=\"conekta[production_secret_key]\" value=\"{{ conekta.production_secret_key | default('') }}\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"conekta_production_public_key\">Production Public Key:</label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"conekta_production_public_key\" name=\"conekta[production_public_key]\" value=\"{{ conekta.production_public_key | default('') }}\" class=\"form-control\">
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
                        <form action=\"{{ path('backend_configuration_update') }}\" method=\"post\" class=\"form-horizontal form-label-left\" role=\"form\">
                            <fieldset>
                                <legend><small>Cancelaciones</small></legend>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"sessions_time_cancel_individual\">
                                        Individuales:<br />
                                        <small class=\"help\">Tiempo limite, <u>en minutos</u>, para cancelar una clase individual</small>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"sessions_time_cancel_individual\" name=\"sessions[time_cancel_individual]\" value=\"{{ sessions.time_cancel_individual | default('') }}\" placeholder=\"1440\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-6 col-sm-6 col-xs-12\" for=\"sessions_time_cancel_group\">
                                        Grupal:<br />
                                        <small class=\"help\">Tiempo limite, <u>en minutos</u>, para cancelar una clase grupal</small>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"sessions_time_cancel_group\" name=\"sessions[time_cancel_group]\" value=\"{{ sessions.time_cancel_group | default('') }}\" placeholder=\"720\" class=\"form-control\">
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
                        <form action=\"{{ path('backend_configuration_update') }}\" method=\"post\" class=\"form-horizontal form-label-left\" role=\"form\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-6 col-sm-6 col-xs-12 required\" for=\"stats_start_date\">
                                    Fecha inicio de mes:<br />
                                    <small class=\"help\">Fecha para cálculo de catorcena y mensualidad de instructores</small>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"stats_start_date\" name=\"stats[start_date]\" value=\"{{ stats.start_date|default('') }}\" class=\"form-control datepicker has-feedback-right\">
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
{% endblock %}
", "backend/configuration/index.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\configuration\\index.html.twig");
    }
}
