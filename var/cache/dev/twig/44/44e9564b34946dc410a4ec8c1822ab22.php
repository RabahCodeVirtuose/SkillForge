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

/* atelier/mes_inscriptions.html.twig */
class __TwigTemplate_c8edb837be7dfb9e78f50bfcd48e7853 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/mes_inscriptions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/mes_inscriptions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "atelier/mes_inscriptions.html.twig", 1);
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

        yield "Mes Inscriptions";
        
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
        yield "    <div class=\"container mt-5\">
        <!-- Titre principal -->
        <h2 class=\"text-center text-white fw-bold\">
            <i class=\"bi bi-journal-check text-warning\"></i> Mes Inscriptions
        </h2>
        <hr class=\"mb-4\">

        ";
        // line 13
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "            <div class=\"row\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
                // line 16
                yield "                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card glass-effect shadow-lg mb-4 border-0\">
                            <div class=\"card-body text-center\">
                                <!-- Icône et Nom de l'atelier -->
                                <h5 class=\"card-title text-info fw-bold\">
                                    <i class=\"bi bi-book\"></i> ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "nom", [], "any", false, false, false, 21), "html", null, true);
                yield "
                                </h5>

                                <!-- Nom de l'instructeur -->
                                <h6 class=\"card-subtitle mb-2 text-light\">
                                    <i class=\"bi bi-person-circle\"></i> ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "instructeur", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
                yield "
                                </h6>

                                <!-- Description courte -->
                                <p class=\"card-text text-light\">
                                    ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "description", [], "any", false, false, false, 31), 0, 80) . "..."), "html", null, true);
                yield "
                                </p>

                                <!-- Bouton Voir Plus -->
                                <a href=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\" class=\"btn btn-info w-100 rounded-pill shadow-sm\">
                                    <i class=\"bi bi-eye\"></i> Voir plus
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['atelier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "            </div>
        ";
        } else {
            // line 44
            yield "            <div class=\"alert alert-warning text-center mt-4 glass-effect text-light\" role=\"alert\">
                <i class=\"bi bi-exclamation-circle\"></i> Vous n'êtes inscrit à aucun atelier pour le moment.
            </div>
        ";
        }
        // line 48
        yield "    </div>

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
            backdrop-filter: blur(15px);
            border-radius: 15px;
            padding: 20px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 10px 30px rgba(255, 255, 255, 0.1);
        }

        /* 🖥 Cartes avec effet */
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 25px rgba(255, 255, 255, 0.2);
        }

        /* 🎨 Boutons stylisés */
        .btn-info {
            background: #08C5D1;
            border: none;
            transition: all 0.3s ease-in-out;
            color: white;
        }

        .btn-info:hover {
            background: #D46F4D;
            color: white;
            transform: scale(1.05);
        }

        /* 🎭 Animation d'apparition */
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
        return "atelier/mes_inscriptions.html.twig";
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
        return array (  171 => 48,  165 => 44,  161 => 42,  148 => 35,  141 => 31,  133 => 26,  125 => 21,  118 => 16,  114 => 15,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Inscriptions{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <!-- Titre principal -->
        <h2 class=\"text-center text-white fw-bold\">
            <i class=\"bi bi-journal-check text-warning\"></i> Mes Inscriptions
        </h2>
        <hr class=\"mb-4\">

        {% if ateliers is not empty %}
            <div class=\"row\">
                {% for atelier in ateliers %}
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card glass-effect shadow-lg mb-4 border-0\">
                            <div class=\"card-body text-center\">
                                <!-- Icône et Nom de l'atelier -->
                                <h5 class=\"card-title text-info fw-bold\">
                                    <i class=\"bi bi-book\"></i> {{ atelier.nom }}
                                </h5>

                                <!-- Nom de l'instructeur -->
                                <h6 class=\"card-subtitle mb-2 text-light\">
                                    <i class=\"bi bi-person-circle\"></i> {{ atelier.instructeur.nom }}
                                </h6>

                                <!-- Description courte -->
                                <p class=\"card-text text-light\">
                                    {{ atelier.description| raw | slice(0, 80) ~ '...' }}
                                </p>

                                <!-- Bouton Voir Plus -->
                                <a href=\"{{ path('app_atelier_show', {'id': atelier.id}) }}\" class=\"btn btn-info w-100 rounded-pill shadow-sm\">
                                    <i class=\"bi bi-eye\"></i> Voir plus
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"alert alert-warning text-center mt-4 glass-effect text-light\" role=\"alert\">
                <i class=\"bi bi-exclamation-circle\"></i> Vous n'êtes inscrit à aucun atelier pour le moment.
            </div>
        {% endif %}
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
            backdrop-filter: blur(15px);
            border-radius: 15px;
            padding: 20px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 10px 30px rgba(255, 255, 255, 0.1);
        }

        /* 🖥 Cartes avec effet */
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 25px rgba(255, 255, 255, 0.2);
        }

        /* 🎨 Boutons stylisés */
        .btn-info {
            background: #08C5D1;
            border: none;
            transition: all 0.3s ease-in-out;
            color: white;
        }

        .btn-info:hover {
            background: #D46F4D;
            color: white;
            transform: scale(1.05);
        }

        /* 🎭 Animation d'apparition */
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
", "atelier/mes_inscriptions.html.twig", "/var/www/html/cc15/templates/atelier/mes_inscriptions.html.twig");
    }
}
