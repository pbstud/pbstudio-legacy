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

/* backend/session_day/new_branch_office.html.twig */
class __TwigTemplate_0a05caf0385b09352168c70a35374fdc extends Template
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
        // line 3
        $context["page_section"] = "Clases x día";
        // line 4
        $context["page_title"] = "Programar día";
        // line 5
        $context["return_to"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day");
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/session_day/new_branch_office.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        yield from         $this->loadTemplate("backend/session_day/new_branch_office.html.twig", "backend/session_day/new_branch_office.html.twig", 8, "416533644")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session_day/new_branch_office.html.twig";
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
        return array (  58 => 8,  54 => 7,  49 => 1,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session_day/new_branch_office.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session_day/new_branch_office.html.twig");
    }
}


/* backend/session_day/new_branch_office.html.twig */
class __TwigTemplate_0a05caf0385b09352168c70a35374fdc___416533644 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/embed/form_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/form_common.html.twig", "backend/session_day/new_branch_office.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "            <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_session_day_new");
        yield "\" method=\"get\" class=\"form-horizontal\">
                <div class=\"item form-group\">
                    <label class=\"col-form-label col-md-2 label-align text-right\" for=\"branch_office\">Sucursal:</label>
                    <div class=\"col-md-6 col-sm-6\">
                        <select name=\"branch_office\" id=\"branch_office\" class=\"form-control\">
                            <option value=\"\">Seleccione Sucursal</option>
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["branchOffices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["branchOffice"]) {
            // line 17
            yield "                                <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["branchOffice"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchOffice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "                        </select>
                    </div>
                </div>

                <div class=\"ln_solid\"></div>

                <div class=\"form-group\">
                    <div class=\"col-xs-12\">
                        <div class=\"pull-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Continuar
                            </button>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </form>
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/session_day/new_branch_office.html.twig";
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
        return array (  153 => 19,  142 => 17,  138 => 16,  128 => 10,  124 => 9,  58 => 8,  54 => 7,  49 => 1,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/session_day/new_branch_office.html.twig", "/var/www/pbstudio/releases/81/templates/backend/session_day/new_branch_office.html.twig");
    }
}
