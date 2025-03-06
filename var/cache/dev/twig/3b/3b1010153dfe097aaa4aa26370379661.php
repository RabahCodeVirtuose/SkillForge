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

/* atelier/_form.html.twig */
class __TwigTemplate_5de745a7ebfa0ded927215026ad433d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
<div class=\"mb-3\">
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'widget');
        yield "
</div>
<div class=\"d-grid\">
    <button class=\"btn btn-primary btn-lg rounded-pill shadow-sm\">
        <i class=\"bi bi-save me-2\"></i> ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 7, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
    </button>
</div>
";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_end');
        yield "

<!-- 🌟 Styles améliorés -->
<style>
    /* 🎭 Effet Glassmorphism */


    /* 🎨 Bouton stylisé */
    .btn-primary {
        background: #FFBF66;
        color: #00353F;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: #D46F4D;
        color: white;
        transform: scale(1.05);
    }
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "atelier/_form.html.twig";
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
        return array (  66 => 10,  60 => 7,  53 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
<div class=\"mb-3\">
    {{ form_widget(form) }}
</div>
<div class=\"d-grid\">
    <button class=\"btn btn-primary btn-lg rounded-pill shadow-sm\">
        <i class=\"bi bi-save me-2\"></i> {{ button_label|default('Enregistrer') }}
    </button>
</div>
{{ form_end(form) }}

<!-- 🌟 Styles améliorés -->
<style>
    /* 🎭 Effet Glassmorphism */


    /* 🎨 Bouton stylisé */
    .btn-primary {
        background: #FFBF66;
        color: #00353F;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: #D46F4D;
        color: white;
        transform: scale(1.05);
    }
</style>", "atelier/_form.html.twig", "/var/www/html/cc15/templates/atelier/_form.html.twig");
    }
}
