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
class __TwigTemplate_3da7a54a9239bc81f52a824502951963 extends Template
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
        return array (  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_footer.html.twig", "/var/www/pbstudio/releases/81/templates/default/_footer.html.twig");
    }
}
