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
use Twig\TemplateWrapper;

/* atelier/_delete_form.html.twig */
class __TwigTemplate_e3df96483398af1ad7dd7d04e480bf55 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/_delete_form.html.twig"));

        // line 1
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet atelier ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))), "html", null, true);
        yield "\">
    <button class=\"btn btn-danger btn-lg rounded-pill shadow-sm delete-btn\">
        <i class=\"bi bi-trash me-2\"></i> Supprimer
    </button>
</form>

<!-- 🌟 Styles améliorés -->
<style>
    /* 🎨 Bouton de suppression stylisé */
    .delete-btn {
        background: linear-gradient(45deg, #CE6A6B, #D46F4D);
        border: none;
        font-weight: bold;
        color: white;
        transition: all 0.3s ease-in-out;
        padding: 12px 20px;
        text-transform: uppercase;
        box-shadow: 0px 5px 10px rgba(206, 106, 107, 0.3);
    }

    .delete-btn:hover {
        background: linear-gradient(45deg, #D46F4D, #FFBF66);
        color: white;
        transform: scale(1.05);
        box-shadow: 0px 8px 15px rgba(255, 191, 102, 0.4);
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "atelier/_delete_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_atelier_delete', {'id': atelier.id}) }}\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet atelier ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ atelier.id) }}\">
    <button class=\"btn btn-danger btn-lg rounded-pill shadow-sm delete-btn\">
        <i class=\"bi bi-trash me-2\"></i> Supprimer
    </button>
</form>

<!-- 🌟 Styles améliorés -->
<style>
    /* 🎨 Bouton de suppression stylisé */
    .delete-btn {
        background: linear-gradient(45deg, #CE6A6B, #D46F4D);
        border: none;
        font-weight: bold;
        color: white;
        transition: all 0.3s ease-in-out;
        padding: 12px 20px;
        text-transform: uppercase;
        box-shadow: 0px 5px 10px rgba(206, 106, 107, 0.3);
    }

    .delete-btn:hover {
        background: linear-gradient(45deg, #D46F4D, #FFBF66);
        color: white;
        transform: scale(1.05);
        box-shadow: 0px 8px 15px rgba(255, 191, 102, 0.4);
    }
</style>
", "atelier/_delete_form.html.twig", "/var/www/html/cc15/templates/atelier/_delete_form.html.twig");
    }
}
