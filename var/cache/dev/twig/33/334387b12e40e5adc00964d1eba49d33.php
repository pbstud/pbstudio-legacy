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

/* default/_footer.html.twig */
class __TwigTemplate_928a68fabfe3fa22019cc8dfaad7724e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_footer.html.twig"));

        // line 1
        yield "<footer>
    <div>
         <div class=\"legales\">
            <p><a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => "aviso-de-privacidad"]);
        yield "\">Aviso de Privacidad</a></p>
            <p>Derechos Reservados &copy; P&amp;B 2020</p>
            <p>Desing &amp; develop with &hearts; by <a href=\"http://www.encodemedia.com.mx/\" target=\"blank\">Encode Media</a> </p>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/_footer.html.twig";
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
        return array (  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div>
         <div class=\"legales\">
            <p><a href=\"{{ path('page', { 'slug': 'aviso-de-privacidad' }) }}\">Aviso de Privacidad</a></p>
            <p>Derechos Reservados &copy; P&amp;B 2020</p>
            <p>Desing &amp; develop with &hearts; by <a href=\"http://www.encodemedia.com.mx/\" target=\"blank\">Encode Media</a> </p>
        </div>
    </div>
</footer>", "default/_footer.html.twig", "C:\\pbstudio\\PBStudio81\\templates\\default\\_footer.html.twig");
    }
}
