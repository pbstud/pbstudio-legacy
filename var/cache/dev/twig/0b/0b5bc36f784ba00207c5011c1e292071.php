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
class __TwigTemplate_1f1588c861b9e335453799b6c55964f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/instructor/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/instructor/profile.html.twig"));

        // line 3
        $context["page_section"] = "Instructores";
        // line 4
        $context["active_tab"] = (( !array_key_exists("active_tab", $context)) ? ("data_general") : ((isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 4, $this->source); })())));
        // line 1
        $this->parent = $this->loadTemplate("backend/layout.html.twig", "backend/instructor/profile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 7
        yield "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                        <div class=\"profile_img\">
                            <div id=\"crop-avatar\">
                                <img src=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 18, $this->source); })()), "profile", [], "any", false, false, false, 18)), "html", null, true);
        yield "\" alt=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\" class=\"img-thumbnail\" />
                            </div>
                        </div>
                        <h3>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</h3>

                        <ul class=\"list-unstyled user_data\">
                            <li>
                                <i class=\"fa fa-user user-profile-icon\"></i> ";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25), "html", null, true);
        yield "
                            </li>
                            <li>
                                <i class=\"fa fa-at user-profile-icon\"></i> ";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "
                            </li>
                            <li>
                                <i class=\"fa fa-mobile user-profile-icon\"></i> ";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 31, $this->source); })()), "profile", [], "any", false, false, false, 31), "telephone", [], "any", false, false, false, 31), "html", null, true);
        yield "
                            </li>
                            <li>
                                <i class=\"fa fa-heart-o user-profile-icon\"></i>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 35, $this->source); })()), "disciplines", [], "any", false, false, false, 35));
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
        if (("data_general" == (isset($context["active_tab"]) || array_key_exists("active_tab", $context) ? $context["active_tab"] : (function () { throw new RuntimeError('Variable "active_tab" does not exist.', 44, $this->source); })()))) {
            yield "class=\"active\"";
        }
        yield ">
                                    <a href=\"";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend_instructor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 49
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  201 => 49,  183 => 50,  181 => 49,  174 => 45,  168 => 44,  160 => 38,  142 => 36,  125 => 35,  118 => 31,  112 => 28,  106 => 25,  99 => 21,  91 => 18,  81 => 11,  75 => 7,  65 => 6,  54 => 1,  52 => 4,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend/layout.html.twig' %}

{% set page_section = 'Instructores' %}
{% set active_tab = (active_tab is not defined ? 'data_general' : active_tab) %}

{% block section %}
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>{{ page_title }}</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                        <div class=\"profile_img\">
                            <div id=\"crop-avatar\">
                                <img src=\"{{ vich_uploader_asset(instructor.profile) }}\" alt=\"{{ instructor }}\" class=\"img-thumbnail\" />
                            </div>
                        </div>
                        <h3>{{ instructor }}</h3>

                        <ul class=\"list-unstyled user_data\">
                            <li>
                                <i class=\"fa fa-user user-profile-icon\"></i> {{ instructor.username }}
                            </li>
                            <li>
                                <i class=\"fa fa-at user-profile-icon\"></i> {{ instructor.email }}
                            </li>
                            <li>
                                <i class=\"fa fa-mobile user-profile-icon\"></i> {{ instructor.profile.telephone }}
                            </li>
                            <li>
                                <i class=\"fa fa-heart-o user-profile-icon\"></i>
                                {% for discipline in instructor.disciplines %}
                                    {{ discipline }}{{ loop.last ? '' : ',' }}
                                {% endfor %}
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-12\">
                        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                            <ul id=\"instructorTab\" class=\"nav nav-tabs nav-tabs-custom\" role=\"tablist\">
                                <li role=\"presentation\" {% if 'data_general' == active_tab %}class=\"active\"{% endif %}>
                                    <a href=\"{{ path('backend_instructor_edit', { 'id': instructor.id }) }}\">Datos Generales</a>
                                </li>
                            </ul>
                            <div id=\"instructorTabContent\" class=\"tab-content\">
                                {% block subcontent %}{% endblock %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "backend/instructor/profile.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\instructor\\profile.html.twig");
    }
}
