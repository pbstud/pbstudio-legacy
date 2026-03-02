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

/* backend/security/login.html.twig */
class __TwigTemplate_fe40a678479f8775a15e817fe879e4f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/security/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/security/layout.html.twig", "backend/security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Iniciar Sesión";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div>
        <div class=\"login_wrapper\">
            <div class=\"animate form login_form\">
                <section class=\"login_content\">
                    <form method=\"post\" class=\"form-horizontal\">
                        <h1>P&B Studio</h1>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last_username"] ?? null), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"username\" autocomplete=\"username\" required autofocus>
                                <span class=\"fa fa-user form-control-feedback right\"></span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12\">
                                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" autocomplete=\"current-password\" required>
                                <span class=\"fa fa-key form-control-feedback right\"></span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-xs-12 text-left\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\" checked>
                                    Recordar
                                </label>
                            </div>
                        </div>

                        ";
        // line 36
        if (($context["error"] ?? null)) {
            // line 37
            yield "                            <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
                                ";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 38), "security"), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 41
        yield "
                        <div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-default\">Iniciar Sesión</button>
                        </div>

                        <div class=\"clearfix\"></div>

                        <div class=\"separator\">
                            <div>
                                <p>&copy; ";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y"), "html", null, true);
        yield " Todos los derechos reservados</p>
                            </div>
                        </div>
                    </form>
                </section>
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
        return "backend/security/login.html.twig";
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
        return array (  121 => 51,  110 => 43,  106 => 41,  100 => 38,  97 => 37,  95 => 36,  71 => 15,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/security/login.html.twig", "/var/www/pbstudio/releases/81/templates/backend/security/login.html.twig");
    }
}
