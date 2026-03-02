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

/* backend/instructor/profile.html.twig */
class __TwigTemplate_d89b9763e4a171165df859ade3065931 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section' => [$this, 'block_section'],
            'subcontent' => [$this, 'block_subcontent'],
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
        $context["page_section"] = "Instructores";
        // line 4
        $context["active_tab"] = (( !array_key_exists("active_tab", $context)) ? ("data_general") : (($context["active_tab"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/instructor/profile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["page_title"] ?? null), "html", null, true);
        yield "</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                        <div class=\"profile_img\">
                            <div id=\"crop-avatar\">
                                <img src=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, ($context["instructor"] ?? null), "profile", [], "any", false, false, false, 18)), "html", null, true);
        yield "\" alt=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["instructor"] ?? null), "html", null, true);
        yield "\" class=\"img-thumbnail\" />
                            </div>
                        </div>
                        <h3>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["instructor"] ?? null), "html", null, true);
        yield "</h3>

                        <ul class=\"list-unstyled user_data\">
                            <li>
                                <i class=\"fa fa-user user-profile-icon\"></i> ";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["instructor"] ?? null), "username", [], "any", false, false, false, 25), "html", null, true);
        yield "
                            </li>
                            <li>
                                <i class=\"fa fa-at user-profile-icon\"></i> ";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["instructor"] ?? null), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "
                            </li>
                            <li>
                                <i class=\"fa fa-mobile user-profile-icon\"></i> ";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["instructor"] ?? null), "profile", [], "any", false, false, false, 31), "telephone", [], "any", false, false, false, 31), "html", null, true);
        yield "
                            </li>
                            <li>
                                <i class=\"fa fa-heart-o user-profile-icon\"></i>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["instructor"] ?? null), "disciplines", [], "any", false, false, false, 35));
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
            // line 36
            yield "                                    ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["discipline"], "html", null, true);
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 36)) ? ("") : (","));
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
        // line 38
        yield "                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                            <ul id=\"instructorTab\" class=\"nav nav-tabs nav-tabs-custom\" role=\"tablist\">
                                <li role=\"presentation\" ";
        // line 44
        if (("data_general" == ($context["active_tab"] ?? null))) {
            yield "class=\"active\"";
        }
        yield ">
                                    <a href=\"";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_instructor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["instructor"] ?? null), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\">Datos Generales</a>
                                </li>
                            </ul>
                            <div id=\"instructorTabContent\" class=\"tab-content\">
                                ";
        // line 49
        yield from $this->unwrap()->yieldBlock('subcontent', $context, $blocks);
        // line 50
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 49
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/instructor/profile.html.twig";
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
        return array (  177 => 49,  165 => 50,  163 => 49,  156 => 45,  150 => 44,  142 => 38,  124 => 36,  107 => 35,  100 => 31,  94 => 28,  88 => 25,  81 => 21,  73 => 18,  63 => 11,  57 => 7,  53 => 6,  48 => 1,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/instructor/profile.html.twig", "/var/www/pbstudio/releases/81/templates/backend/instructor/profile.html.twig");
    }
}
