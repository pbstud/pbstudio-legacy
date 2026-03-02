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

/* backend/instructor/index.html.twig */
class __TwigTemplate_8f6c828838bde76226800ed54c59d475 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actions' => [$this, 'block_actions'],
            'table_thead' => [$this, 'block_table_thead'],
            'table_tbody' => [$this, 'block_table_tbody'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["allowDelete"] = $this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_instructor_delete");
        // line 1
        $this->parent = $this->loadTemplate("backend/default/list.html.twig", "backend/instructor/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Listado de Instructores";
        return; yield '';
    }

    // line 6
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        if ($this->env->getRuntime('App\Twig\Runtime\AppExtensionRuntime')->isAllowedRoute("backend_instructor_new")) {
            // line 8
            yield "        <div class=\"col-md-3 col-sm-4 col-xs-8 form-group pull-right top_search text-right\">
            <a href=\"";
            // line 9
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_instructor_new");
            yield "\" class=\"btn btn-dark\">
                <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                ";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main.backend_instructor_new"), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        return; yield '';
    }

    // line 17
    public function block_table_thead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        yield "    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Disciplinas</th>
        <th>Estado</th>
        ";
        // line 25
        if (($context["allowDelete"] ?? null)) {
            // line 26
            yield "            <th></th>
        ";
        }
        // line 28
        yield "    </tr>
";
        return; yield '';
    }

    // line 31
    public function block_table_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 33
            yield "        <tr>
            <td>
                <a href=\"";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_instructor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"link-edit\">
                    <u>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "</u>
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                </a>
            </td>
            <td>
                ";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["instructor"], "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "email", [], "any", false, false, false, 44), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "profile", [], "any", false, false, false, 47), "telephone", [], "any", false, false, false, 47), "html", null, true);
            yield "
            </td>
            <td>
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "disciplines", [], "any", false, false, false, 50));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["discipline"]) {
                // line 51
                yield "                    ";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["discipline"], "html", null, true);
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) ? ("") : (","));
                yield "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discipline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            </td>
            <td>
                ";
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "isActive", [], "any", false, false, false, 55)) {
                // line 56
                yield "                    <span class=\"label label-primary\">Activo</span>
                ";
            } else {
                // line 58
                yield "                    <span class=\"label label-danger\">Inactivo</span>
                ";
            }
            // line 60
            yield "            </td>
            ";
            // line 61
            if (($context["allowDelete"] ?? null)) {
                // line 62
                yield "                <td>
                    <a href=\"";
                // line 63
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_instructor_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" data-token=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 63))), "html", null, true);
                yield "\" class=\"btn btn-danger btn-xs btn-delete\">
                        <i class=\"fa fa-trash-o\"></i> Borrar
                    </a>
                </td>
            ";
            }
            // line 68
            yield "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "backend/instructor/_delete_form.html.twig");
        yield "
";
        return; yield '';
    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        \$(function () {
            const \$frmDelete = \$('#frm-delete');

            \$('.btn-delete').on('click', function (event) {
                event.preventDefault();
                let \$el = \$(this);

                if (confirm('¿Confirmas que deseas borrar el instructor?')) {
                    \$frmDelete.attr('action', \$el.attr('href'));
                    \$frmDelete.find('input[name=\"_token\"]').val(\$el.data('token'));

                    \$frmDelete.submit();
                }
            });
        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/instructor/index.html.twig";
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
        return array (  249 => 77,  245 => 76,  237 => 73,  233 => 72,  223 => 68,  213 => 63,  210 => 62,  208 => 61,  205 => 60,  201 => 58,  197 => 56,  195 => 55,  191 => 53,  173 => 51,  156 => 50,  150 => 47,  144 => 44,  138 => 41,  130 => 36,  126 => 35,  122 => 33,  117 => 32,  113 => 31,  107 => 28,  103 => 26,  101 => 25,  92 => 18,  88 => 17,  78 => 11,  73 => 9,  70 => 8,  67 => 7,  63 => 6,  55 => 3,  50 => 1,  48 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/instructor/index.html.twig", "/var/www/pbstudio/releases/81/templates/backend/instructor/index.html.twig");
    }
}
