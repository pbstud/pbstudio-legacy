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

/* profile/edit.html.twig */
class __TwigTemplate_b86a6fa8236b37ea42505ad2086af850 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'account_content' => [$this, 'block_account_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "profile/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("profile/layout.html.twig", "profile/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Mi Cuenta | ";
        return; yield '';
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"row\">
        <div class=\"content general\">
            <h4><small>Datos de usuario</small></h4>
            <div id=\"profile_container\">
                ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit"), "attr" => ["id" => "profile_form_edit"]]);
        // line 15
        yield "
                    <fieldset>
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 17), 'widget', ["attr" => ["placeholder" => "Nombre", "autofocus" => "autofocus"]]);
        // line 22
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 23), 'errors');
        yield "

                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 25), 'widget', ["attr" => ["placeholder" => "Apellidos"]]);
        // line 29
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 30), 'errors');
        yield "

                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => "Correo"]]);
        // line 36
        yield "
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 37), 'errors');
        yield "

                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 39), 'widget', ["attr" => ["placeholder" => "Teléfono"]]);
        // line 43
        yield "
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 44), 'errors');
        yield "

                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "birthday", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Fecha de cumpleaños (dd/mm)"]]);
        // line 50
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "birthday", [], "any", false, false, false, 51), 'errors');
        yield "
                    </fieldset>

                    <fieldset>
                        <h4><small>Contacto de emergencia</small></h4>

                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emergencyContactName", [], "any", false, false, false, 57), 'widget', ["attr" => ["placeholder" => "Nombre"]]);
        // line 61
        yield "
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emergencyContactName", [], "any", false, false, false, 62), 'errors');
        yield "

                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emergencyContactPhone", [], "any", false, false, false, 64), 'widget', ["attr" => ["placeholder" => "Teléfono"]]);
        // line 68
        yield "
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emergencyContactPhone", [], "any", false, false, false, 69), 'errors');
        yield "
                    </fieldset>

                    <button type=\"submit\">Actualizar</button>
                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">Cancelar</a>

                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
                ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 81
        yield Twig\Extension\CoreExtension::include($this->env, $context, "profile/_transactions.html.twig");
        yield "

    ";
        // line 83
        yield Twig\Extension\CoreExtension::include($this->env, $context, "package/_aside.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/edit.html.twig";
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
        return array (  170 => 83,  165 => 81,  157 => 76,  153 => 75,  148 => 73,  141 => 69,  138 => 68,  136 => 64,  131 => 62,  128 => 61,  126 => 57,  117 => 51,  114 => 50,  112 => 46,  107 => 44,  104 => 43,  102 => 39,  97 => 37,  94 => 36,  92 => 32,  87 => 30,  84 => 29,  82 => 25,  77 => 23,  74 => 22,  72 => 17,  68 => 15,  66 => 10,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/edit.html.twig", "/var/www/pbstudio/releases/81/templates/profile/edit.html.twig");
    }
}
