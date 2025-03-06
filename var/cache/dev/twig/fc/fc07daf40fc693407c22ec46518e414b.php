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

/* atelier/index.html.twig */
class __TwigTemplate_fd03e7428a94a50204d0b0b1d66a1830 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "atelier/index.html.twig", 1);
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

        yield "Liste des Ateliers";
        
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
        <h1 class=\"text-center text-light fw-bold\">
            <i class=\"bi bi-list-task text-warning\"></i> Liste des Ateliers
        </h1>
        <hr class=\"mb-4\">

        <!-- Grille d'affichage des ateliers -->
        <div class=\"row\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 16
            yield "                <div class=\"col-md-4 col-lg-3 mb-3\">
                    <div class=\"card shadow-lg glass-effect h-100 p-3\">
                        <div class=\"card-body d-flex flex-column\">
                            <h6 class=\"card-title text-warning fw-bold text-truncate\">
                                <i class=\"bi bi-bookmark-fill me-2\"></i>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "nom", [], "any", false, false, false, 20), "html", null, true);
            yield "
                            </h6>

                            <p class=\"card-text text-info small mb-1\">
                                <i class=\"bi bi-person-fill me-2\"></i><strong>Instructeur :</strong> ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "instructeur", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
            yield "
                            </p>

                            <p class=\"card-text text-white small\">
                                <i class=\"bi bi-card-text me-2\"></i><strong>Description :</strong>
                                <span class=\"text-truncate-multiline\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "description", [], "any", false, false, false, 29)), 0, 50) . "..."), "html", null, true);
            yield "</span>
                            </p>


                            <div class=\"mt-auto text-center\">
                                <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm rounded-pill shadow-sm\">
                                    <i class=\"bi bi-eye me-1\"></i> Voir
                                </a>

                                ";
            // line 38
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38) && CoreExtension::inFilter("ROLE_INSTRUCTEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "roles", [], "any", false, false, false, 38))) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38) == CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "instructeur", [], "any", false, false, false, 38)))) {
                // line 39
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning btn-sm rounded-pill shadow-sm\">
                                        <i class=\"bi bi-pencil-square me-1\"></i> Modifier
                                    </a>
                                ";
            }
            // line 43
            yield "
                                ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44) && CoreExtension::inFilter("ROLE_APPRENTI", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "roles", [], "any", false, false, false, 44)))) {
                // line 45
                yield "                                    ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "inscrits", [], "any", false, false, false, 45))) {
                    // line 46
                    yield "                                        <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_desinscription", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                    yield "\" method=\"post\" class=\"d-inline\">
                                            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm rounded-pill shadow-sm\">
                                                <i class=\"bi bi-x-circle me-1\"></i> Se désinscrire
                                            </button>
                                        </form>
                                    ";
                } else {
                    // line 52
                    yield "                                        <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_inscription", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                    yield "\" method=\"post\" class=\"d-inline\">
                                            <button type=\"submit\" class=\"btn btn-outline-success btn-sm rounded-pill shadow-sm\">
                                                <i class=\"bi bi-check-circle me-1\"></i> S'inscrire
                                            </button>
                                        </form>
                                    ";
                }
                // line 58
                yield "                                ";
            }
            // line 59
            yield "                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                <div class=\"col-12 text-center text-light\">
                    <i class=\"bi bi-exclamation-triangle me-2 text-warning\"></i>
                    Aucun atelier trouvé
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['atelier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "        </div>
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
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.1);
            padding: 10px;
        }

        /* 📏 Taille des cards réduite */
        .card {
            min-height: 180px;
        }

        /* 🎭 Animation de survol */
        .glass-effect:hover {
            transform: scale(1.02);
            transition: all 0.3s ease-in-out;
        }

        /* 🎨 Boutons stylisés */
        .btn-outline-info, .btn-outline-warning, .btn-outline-danger, .btn-outline-success {
            transition: all 0.3s ease-in-out;
            font-size: 0.85rem;
            padding: 5px 10px;
        }

        .btn-outline-info:hover {
            background: #08C5D1;
            color: white;
        }

        .btn-outline-warning:hover {
            background: #D46F4D;
            color: white;
        }

        .btn-outline-danger:hover {
            background: #CE6A6B;
            color: white;
        }

        .btn-outline-success:hover {
            background: #4A919E;
            color: white;
        }
        .card-text {
            max-height: 3rem;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        /* 📌 Forcer le retour à la ligne et gérer le texte sur plusieurs lignes */
        .text-truncate-multiline {
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Afficher jusqu'à 4 lignes */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal !important;
            word-wrap: break-word;
        }

        /* 📏 Ajuster la hauteur de la carte pour laisser plus de place à la description */
        .card {
            min-height: 260px; /* Était à 240px, on l'augmente un peu */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* 🎭 S'assurer que la description prend plus de place */
        .card-text {
            flex-grow: 1; /* Permet à la description d'occuper tout l'espace disponible */
            max-height: 4.5rem; /* Augmenter un peu la hauteur */
            overflow: hidden;
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
        return "atelier/index.html.twig";
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
        return array (  213 => 69,  203 => 64,  201 => 63,  193 => 59,  190 => 58,  180 => 52,  170 => 46,  167 => 45,  165 => 44,  162 => 43,  154 => 39,  152 => 38,  145 => 34,  137 => 29,  129 => 24,  122 => 20,  116 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Ateliers{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <!-- Titre principal -->
        <h1 class=\"text-center text-light fw-bold\">
            <i class=\"bi bi-list-task text-warning\"></i> Liste des Ateliers
        </h1>
        <hr class=\"mb-4\">

        <!-- Grille d'affichage des ateliers -->
        <div class=\"row\">
            {% for atelier in ateliers %}
                <div class=\"col-md-4 col-lg-3 mb-3\">
                    <div class=\"card shadow-lg glass-effect h-100 p-3\">
                        <div class=\"card-body d-flex flex-column\">
                            <h6 class=\"card-title text-warning fw-bold text-truncate\">
                                <i class=\"bi bi-bookmark-fill me-2\"></i>{{ atelier.nom }}
                            </h6>

                            <p class=\"card-text text-info small mb-1\">
                                <i class=\"bi bi-person-fill me-2\"></i><strong>Instructeur :</strong> {{ atelier.instructeur.nom }}
                            </p>

                            <p class=\"card-text text-white small\">
                                <i class=\"bi bi-card-text me-2\"></i><strong>Description :</strong>
                                <span class=\"text-truncate-multiline\">{{ atelier.description | striptags | slice(0, 50) ~ '...' }}</span>
                            </p>


                            <div class=\"mt-auto text-center\">
                                <a href=\"{{ path('app_atelier_show', {'id': atelier.id}) }}\" class=\"btn btn-outline-info btn-sm rounded-pill shadow-sm\">
                                    <i class=\"bi bi-eye me-1\"></i> Voir
                                </a>

                                {% if app.user and 'ROLE_INSTRUCTEUR' in app.user.roles and app.user == atelier.instructeur %}
                                    <a href=\"{{ path('app_atelier_edit', {'id': atelier.id}) }}\" class=\"btn btn-outline-warning btn-sm rounded-pill shadow-sm\">
                                        <i class=\"bi bi-pencil-square me-1\"></i> Modifier
                                    </a>
                                {% endif %}

                                {% if app.user and 'ROLE_APPRENTI' in app.user.roles %}
                                    {% if app.user in atelier.inscrits %}
                                        <form action=\"{{ path('app_atelier_desinscription', {'id': atelier.id}) }}\" method=\"post\" class=\"d-inline\">
                                            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm rounded-pill shadow-sm\">
                                                <i class=\"bi bi-x-circle me-1\"></i> Se désinscrire
                                            </button>
                                        </form>
                                    {% else %}
                                        <form action=\"{{ path('app_atelier_inscription', {'id': atelier.id}) }}\" method=\"post\" class=\"d-inline\">
                                            <button type=\"submit\" class=\"btn btn-outline-success btn-sm rounded-pill shadow-sm\">
                                                <i class=\"bi bi-check-circle me-1\"></i> S'inscrire
                                            </button>
                                        </form>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12 text-center text-light\">
                    <i class=\"bi bi-exclamation-triangle me-2 text-warning\"></i>
                    Aucun atelier trouvé
                </div>
            {% endfor %}
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
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.1);
            padding: 10px;
        }

        /* 📏 Taille des cards réduite */
        .card {
            min-height: 180px;
        }

        /* 🎭 Animation de survol */
        .glass-effect:hover {
            transform: scale(1.02);
            transition: all 0.3s ease-in-out;
        }

        /* 🎨 Boutons stylisés */
        .btn-outline-info, .btn-outline-warning, .btn-outline-danger, .btn-outline-success {
            transition: all 0.3s ease-in-out;
            font-size: 0.85rem;
            padding: 5px 10px;
        }

        .btn-outline-info:hover {
            background: #08C5D1;
            color: white;
        }

        .btn-outline-warning:hover {
            background: #D46F4D;
            color: white;
        }

        .btn-outline-danger:hover {
            background: #CE6A6B;
            color: white;
        }

        .btn-outline-success:hover {
            background: #4A919E;
            color: white;
        }
        .card-text {
            max-height: 3rem;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        /* 📌 Forcer le retour à la ligne et gérer le texte sur plusieurs lignes */
        .text-truncate-multiline {
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Afficher jusqu'à 4 lignes */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal !important;
            word-wrap: break-word;
        }

        /* 📏 Ajuster la hauteur de la carte pour laisser plus de place à la description */
        .card {
            min-height: 260px; /* Était à 240px, on l'augmente un peu */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* 🎭 S'assurer que la description prend plus de place */
        .card-text {
            flex-grow: 1; /* Permet à la description d'occuper tout l'espace disponible */
            max-height: 4.5rem; /* Augmenter un peu la hauteur */
            overflow: hidden;
        }


    </style>
{% endblock %}
", "atelier/index.html.twig", "/var/www/html/cc15/templates/atelier/index.html.twig");
    }
}
