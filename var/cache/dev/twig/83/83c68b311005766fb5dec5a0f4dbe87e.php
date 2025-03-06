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

/* atelier/edit.html.twig */
class __TwigTemplate_e940daa996f17a8520c9d1e6da8a5116 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "atelier/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier Atelier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-4\">
        <!-- Titre de la page avec icône -->
        <h1 class=\"text-center fw-bold text-light\">
            <i class=\"bi bi-pencil-square text-warning\"></i> Modifier ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        yield "
        </h1>
        <hr class=\"mb-4\">

        <!-- Carte du formulaire avec effet Glassmorphism -->
        <div class=\"card glass-effect shadow-lg mx-auto\" style=\"max-width: 600px;\">
            <div class=\"card-body\">
                <h2 class=\"card-title text-center text-light\">
                    <i class=\"bi bi-tools text-info\"></i> Formulaire de modification
                </h2>
                <hr class=\"mb-4 border-light\">

                <!-- Formulaire -->
                ";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "atelier/_form.html.twig", ["button_label" => "Modifier"]);
        yield "
            </div>
        </div>

        <!-- Boutons d'action alignés -->
        <div class=\"mt-4 text-center\">
            <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_index");
        yield "\" class=\"btn btn-outline-light btn-lg rounded-pill shadow-sm me-2\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
            <div style=\"height: 10px;\">

            </div>
            <!-- Bouton Supprimer stylisé -->
            ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "atelier/_delete_form.html.twig");
        yield "
        </div>
    </div>

    <!-- 🌟 Styles personnalisés -->
    <style>
        /* 🌌 Arrière-plan futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
        }

        /* ✨ Effet Glassmorphism */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 10px 30px rgba(255, 255, 255, 0.1);
            padding: 20px;
        }

        /* 🎭 Animation légère */
        .glass-effect:hover {
            transform: scale(1.02);
        }

        /* 🎨 Boutons stylisés */
        .btn-outline-light {
            border: 2px solid #FFBF66;
            color: #FFBF66;
            transition: all 0.3s ease-in-out;
        }

        .btn-outline-light:hover {
            background: #FFBF66;
            color: #00353F;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "atelier/edit.html.twig";
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
        return array (  140 => 35,  130 => 28,  121 => 22,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Atelier{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <!-- Titre de la page avec icône -->
        <h1 class=\"text-center fw-bold text-light\">
            <i class=\"bi bi-pencil-square text-warning\"></i> Modifier {{ atelier.nom }}
        </h1>
        <hr class=\"mb-4\">

        <!-- Carte du formulaire avec effet Glassmorphism -->
        <div class=\"card glass-effect shadow-lg mx-auto\" style=\"max-width: 600px;\">
            <div class=\"card-body\">
                <h2 class=\"card-title text-center text-light\">
                    <i class=\"bi bi-tools text-info\"></i> Formulaire de modification
                </h2>
                <hr class=\"mb-4 border-light\">

                <!-- Formulaire -->
                {{ include('atelier/_form.html.twig', {'button_label': 'Modifier'}) }}
            </div>
        </div>

        <!-- Boutons d'action alignés -->
        <div class=\"mt-4 text-center\">
            <a href=\"{{ path('app_atelier_index') }}\" class=\"btn btn-outline-light btn-lg rounded-pill shadow-sm me-2\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
            <div style=\"height: 10px;\">

            </div>
            <!-- Bouton Supprimer stylisé -->
            {{ include('atelier/_delete_form.html.twig') }}
        </div>
    </div>

    <!-- 🌟 Styles personnalisés -->
    <style>
        /* 🌌 Arrière-plan futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
        }

        /* ✨ Effet Glassmorphism */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 10px 30px rgba(255, 255, 255, 0.1);
            padding: 20px;
        }

        /* 🎭 Animation légère */
        .glass-effect:hover {
            transform: scale(1.02);
        }

        /* 🎨 Boutons stylisés */
        .btn-outline-light {
            border: 2px solid #FFBF66;
            color: #FFBF66;
            transition: all 0.3s ease-in-out;
        }

        .btn-outline-light:hover {
            background: #FFBF66;
            color: #00353F;
        }
    </style>
{% endblock %}
", "atelier/edit.html.twig", "/var/www/html/cc15/templates/atelier/edit.html.twig");
    }
}
