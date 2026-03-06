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

/* backend/default/_card_dates.html.twig */
class __TwigTemplate_7fdd74c79faefe0311e52f4ab466066a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/_card_dates.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/_card_dates.html.twig"));

        // line 1
        yield from         $this->loadTemplate("backend/default/_card_dates.html.twig", "backend/default/_card_dates.html.twig", 1, "401504989")->unwrap()->yield(CoreExtension::arrayMerge($context, ["title" => "Fechas", "col" => ((array_key_exists("col", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 1, $this->source); })()), null)) : (null))]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/default/_card_dates.html.twig";
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
        return array (  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'backend/default/_card_table.html.twig' with {'title': 'Fechas', 'col': col|default(null)} %}
    {% block tbody %}
        <tr>
            <th>{{ 'label.created_at'|trans }}</th>
            <td>{{ object.createdAt ? object.createdAt|date('d/m/Y H:i:s') : '--' }}</td>
        </tr>
        <tr>
            <th>{{ 'label.updated_at'|trans }}</th>
            <td>{{ object.updatedAt ? object.updatedAt|date('d/m/Y H:i:s') : '--' }}</td>
        </tr>
    {% endblock %}
{% endembed %}
", "backend/default/_card_dates.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\_card_dates.html.twig");
    }
}


/* backend/default/_card_dates.html.twig */
class __TwigTemplate_7fdd74c79faefe0311e52f4ab466066a___401504989 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "backend/default/_card_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/_card_dates.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/default/_card_dates.html.twig"));

        $this->parent = $this->loadTemplate("backend/default/_card_table.html.twig", "backend/default/_card_dates.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 3
        yield "        <tr>
            <th>";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.created_at"), "html", null, true);
        yield "</th>
            <td>";
        // line 5
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 5, $this->source); })()), "createdAt", [], "any", false, false, false, 5)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 5, $this->source); })()), "createdAt", [], "any", false, false, false, 5), "d/m/Y H:i:s"), "html", null, true)) : (yield "--"));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.updated_at"), "html", null, true);
        yield "</th>
            <td>";
        // line 9
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 9, $this->source); })()), "updatedAt", [], "any", false, false, false, 9)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 9, $this->source); })()), "updatedAt", [], "any", false, false, false, 9), "d/m/Y H:i:s"), "html", null, true)) : (yield "--"));
        yield "</td>
        </tr>
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
        return "backend/default/_card_dates.html.twig";
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
        return array (  166 => 9,  162 => 8,  156 => 5,  152 => 4,  149 => 3,  139 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'backend/default/_card_table.html.twig' with {'title': 'Fechas', 'col': col|default(null)} %}
    {% block tbody %}
        <tr>
            <th>{{ 'label.created_at'|trans }}</th>
            <td>{{ object.createdAt ? object.createdAt|date('d/m/Y H:i:s') : '--' }}</td>
        </tr>
        <tr>
            <th>{{ 'label.updated_at'|trans }}</th>
            <td>{{ object.updatedAt ? object.updatedAt|date('d/m/Y H:i:s') : '--' }}</td>
        </tr>
    {% endblock %}
{% endembed %}
", "backend/default/_card_dates.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\backend\\default\\_card_dates.html.twig");
    }
}
