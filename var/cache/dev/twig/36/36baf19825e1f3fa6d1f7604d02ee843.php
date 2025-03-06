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

/* atelier/noter.html.twig */
class __TwigTemplate_1aec052889184094c59bc1b498f91fa1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/noter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/noter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "atelier/noter.html.twig", 1);
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

        yield " Noter l'atelier - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        
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
        yield "    <div class=\"d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"card p-4 shadow-lg rounded-4 glass-effect\" style=\"max-width: 500px;\">
            <div class=\"card-body text-center\">
                <h1 class=\"h3 mb-3 text-white\">
                    <i class=\"bi bi-star-fill text-warning\"></i> Noter l'atelier
                </h1>

                <h4 class=\"text-info\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        yield "</h4>

                <!-- Messages Flash -->
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "                    <div class=\"alert alert-success alert-dismissible fade show text-center\" role=\"alert\">
                        <i class=\"bi bi-check-circle me-2\"></i>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["error"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show text-center\" role=\"alert\">
                        <i class=\"bi bi-exclamation-circle me-2\"></i>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
                <!-- Formulaire de notation -->
                ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        yield "

                <div class=\"mb-3 text-start\">
                    <label class=\"form-label text-white\">
                        <i class=\"bi bi-pencil-fill me-2\"></i> Votre note (0 à 5)
                    </label>
                    <div class=\"rating-container\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "note", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-check-inline"]]);
        yield "
                    </div>
                </div>



                ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        yield "

                <!-- Bouton de retour -->
                <p class=\"mt-4\">
                    <a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-lg rounded-pill shadow-sm\">
                        <i class=\"bi bi-arrow-left me-2\"></i> Retour à l'atelier
                    </a>
                </p>
            </div>
        </div>
    </div>

    <style>
        /* 🌌 Arrière-plan futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
            color: #FFBF66;
        }

        /* ✨ Effet Glassmorphism */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* 🎨 Boutons stylisés */
        .btn-primary {
            background: #D46F4D;
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background: #08C5D1;
            transform: scale(1.05);
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.3);
        }

        .btn-secondary {
            background: #FFBF66;
            border: none;
            color: #430C05;
            transition: all 0.3s ease-in-out;
        }

        .btn-secondary:hover {
            background: #08C5D1;
            color: white;
            transform: scale(1.05);
        }

        /* 🖋 Champs de formulaire modernisés */
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
            transform: scale(1.02);
        }

        /* 🎯 Amélioration des radios */
        .rating-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .form-check-inline {
            background: rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: 20px;
            transition: all 0.3s ease-in-out;
        }

        .form-check-inline:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }

        /* 🎭 Animations d'apparition */
        .glass-effect {
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
        return "atelier/noter.html.twig";
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
        return array (  184 => 48,  177 => 44,  168 => 38,  158 => 31,  154 => 29,  144 => 25,  141 => 24,  137 => 23,  134 => 22,  124 => 18,  121 => 17,  117 => 16,  111 => 13,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Noter l'atelier - {{ atelier.nom }} {% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"card p-4 shadow-lg rounded-4 glass-effect\" style=\"max-width: 500px;\">
            <div class=\"card-body text-center\">
                <h1 class=\"h3 mb-3 text-white\">
                    <i class=\"bi bi-star-fill text-warning\"></i> Noter l'atelier
                </h1>

                <h4 class=\"text-info\">{{ atelier.nom }}</h4>

                <!-- Messages Flash -->
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success alert-dismissible fade show text-center\" role=\"alert\">
                        <i class=\"bi bi-check-circle me-2\"></i>{{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}

                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show text-center\" role=\"alert\">
                        <i class=\"bi bi-exclamation-circle me-2\"></i>{{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}

                <!-- Formulaire de notation -->
                {{ form_start(form) }}

                <div class=\"mb-3 text-start\">
                    <label class=\"form-label text-white\">
                        <i class=\"bi bi-pencil-fill me-2\"></i> Votre note (0 à 5)
                    </label>
                    <div class=\"rating-container\">
                        {{ form_widget(form.note, {'attr': {'class': 'form-check-inline'}}) }}
                    </div>
                </div>



                {{ form_end(form) }}

                <!-- Bouton de retour -->
                <p class=\"mt-4\">
                    <a href=\"{{ path('app_atelier_show', {'id': atelier.id}) }}\" class=\"btn btn-secondary btn-lg rounded-pill shadow-sm\">
                        <i class=\"bi bi-arrow-left me-2\"></i> Retour à l'atelier
                    </a>
                </p>
            </div>
        </div>
    </div>

    <style>
        /* 🌌 Arrière-plan futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
            color: #FFBF66;
        }

        /* ✨ Effet Glassmorphism */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* 🎨 Boutons stylisés */
        .btn-primary {
            background: #D46F4D;
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background: #08C5D1;
            transform: scale(1.05);
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.3);
        }

        .btn-secondary {
            background: #FFBF66;
            border: none;
            color: #430C05;
            transition: all 0.3s ease-in-out;
        }

        .btn-secondary:hover {
            background: #08C5D1;
            color: white;
            transform: scale(1.05);
        }

        /* 🖋 Champs de formulaire modernisés */
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
            transform: scale(1.02);
        }

        /* 🎯 Amélioration des radios */
        .rating-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .form-check-inline {
            background: rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: 20px;
            transition: all 0.3s ease-in-out;
        }

        .form-check-inline:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }

        /* 🎭 Animations d'apparition */
        .glass-effect {
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
{% endblock %}
", "atelier/noter.html.twig", "/var/www/html/cc15/templates/atelier/noter.html.twig");
    }
}
