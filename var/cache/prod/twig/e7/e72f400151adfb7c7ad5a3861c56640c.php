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

/* backend/page/index.html.twig */
class __TwigTemplate_91b8abb16c5539fb0ccf9c19afb596b3 extends Template
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
        $context["page_section"] = "Páginas";
        // line 4
        $context["page_title"] = "Listado de Páginas";
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/page/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        yield from         $this->loadTemplate("backend/page/index.html.twig", "backend/page/index.html.twig", 7, "1090977180")->unwrap()->yield(CoreExtension::arrayMerge($context, ["page_section" => ($context["page_section"] ?? null), "page_title" => ($context["page_title"] ?? null)]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/page/index.html.twig";
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
        return array (  56 => 7,  52 => 6,  47 => 1,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/page/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/page/index.html.twig");
    }
}


/* backend/page/index.html.twig */
class __TwigTemplate_91b8abb16c5539fb0ccf9c19afb596b3___1090977180 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/embed/list_common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend/default/embed/list_common.html.twig", "backend/page/index.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "            <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_page_new");
        yield "\" class=\"btn btn-default\">Nueva página</a>
                </div>
            </div>
        ";
        return; yield '';
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 18
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Slug</th>
                                <th class=\"text-center\">F. Modificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                yield "                                ";
                // line 30
                yield "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_page_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" class=\"link-edit\">
                                            <u>";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 33), "html", null, true);
                yield "</u>
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                    <td>
";
                // line 39
                yield "                                            /";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 39), "html", null, true);
                yield "
                                            <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
";
                // line 42
                yield "                                    </td>
                                    <td class=\"text-center\">
                                        ";
                // line 44
                if (CoreExtension::getAttribute($this->env, $this->source, $context["page"], "updatedAt", [], "any", false, false, false, 44)) {
                    // line 45
                    yield "                                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "updatedAt", [], "any", false, false, false, 45), "Y-m-d H:i:s"), "html", null, true);
                    yield "
                                        ";
                }
                // line 47
                yield "                                    </td>
                                </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 50
                yield "                                <tr>
                                    <td colspan=\"3\">
                                        <p class=\"text-info text-center\">
                                            <strong>Sin registros para mostrar.</strong>
                                        </p>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 62
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/default/partials/not_records.html.twig");
            yield "
            ";
        }
        // line 64
        yield "        ";
        return; yield '';
    }

    // line 66
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        yield "            ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 68
            yield "                ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["pagination"] ?? null));
            yield "
            ";
        }
        // line 70
        yield "        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/page/index.html.twig";
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
        return array (  251 => 70,  245 => 68,  242 => 67,  238 => 66,  233 => 64,  227 => 62,  221 => 58,  208 => 50,  201 => 47,  195 => 45,  193 => 44,  189 => 42,  183 => 39,  175 => 33,  171 => 32,  167 => 30,  165 => 29,  160 => 28,  148 => 18,  145 => 17,  141 => 16,  132 => 11,  128 => 9,  124 => 8,  56 => 7,  52 => 6,  47 => 1,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/page/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/page/index.html.twig");
    }
}
