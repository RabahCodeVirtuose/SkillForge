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

/* atelier/show.html.twig */
class __TwigTemplate_587e1c6c0bd233b47c6379d1f246ef98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "atelier/show.html.twig", 1);
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

        yield "Atelier - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <div class=\"container mt-2\" style=\"width: 60%\">
        <div class=\"text-center\">
            <h1 class=\"text-uppercase fw-bold text-warning\">
                <i class=\"bi bi-bookmark-star-fill me-2\"></i>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        yield "
            </h1>
        </div>

        <!-- Messages flash -->
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "            <div class=\"alert alert-success alert-dismissible fade show text-center\" role=\"alert\">
                <i class=\"bi bi-check-circle me-2\"></i>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "            <div class=\"alert alert-danger alert-dismissible fade show text-center\" role=\"alert\">
                <i class=\"bi bi-exclamation-circle me-2\"></i>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
        <div class=\"card shadow-lg p-4 mt-4 glass-effect\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-info fw-bold\">Détails de l'atelier</h5>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item bg-transparent text-white\">
                        <strong><i class=\"bi bi-hash me-2\"></i>ID:</strong> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
        yield "
                    </li>
                    <li class=\"list-group-item bg-transparent text-white\">
                        <strong><i class=\"bi bi-card-text me-2\"></i>Description:</strong> ";
        // line 36
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36);
        yield "
                    </li>
                    <li class=\"list-group-item bg-transparent text-white\">
                        <strong><i class=\"bi bi-person me-2\"></i>Instructeur:</strong>
                        ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 40, $this->source); })()), "instructeur", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 40, $this->source); })()), "instructeur", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true);
        yield ")
                    </li>
                </ul>
            </div>
        </div>

        <!-- Affichage de la moyenne des notes -->
        <div class=\"mt-4\">
            ";
        // line 48
        if (((isset($context["moyenne_notes"]) || array_key_exists("moyenne_notes", $context) ? $context["moyenne_notes"] : (function () { throw new RuntimeError('Variable "moyenne_notes" does not exist.', 48, $this->source); })()) > 0)) {
            // line 49
            yield "                <div class=\"alert alert-info text-center shadow-sm\">
                    <i class=\"bi bi-star-fill text-warning\"></i> Note moyenne : <strong>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["moyenne_notes"]) || array_key_exists("moyenne_notes", $context) ? $context["moyenne_notes"] : (function () { throw new RuntimeError('Variable "moyenne_notes" does not exist.', 50, $this->source); })()), "html", null, true);
            yield "</strong>/5
                </div>
            ";
        } else {
            // line 53
            yield "                <p class=\"text-muted text-center\">Cet atelier n'a pas encore reçu de notes.</p>
            ";
        }
        // line 55
        yield "        </div>

        <!-- Affichage du graphique des notes -->
        ";
        // line 58
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["notes_data"]) || array_key_exists("notes_data", $context) ? $context["notes_data"] : (function () { throw new RuntimeError('Variable "notes_data" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "            <div class=\"card mt-3 shadow-lg glass-effect\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-info fw-bold\">Répartition des notes</h5>
                    <canvas id=\"chartNotes\"></canvas>
                </div>
            </div>
        ";
        }
        // line 66
        yield "
        <!-- Liste des apprentis inscrits (visible uniquement pour les instructeurs) -->
        ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68) && CoreExtension::inFilter("ROLE_INSTRUCTEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "roles", [], "any", false, false, false, 68)))) {
            // line 69
            yield "            <div class=\"card mt-3 shadow-lg glass-effect\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-info fw-bold\">Apprentis inscrits</h5>
                    ";
            // line 72
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 72, $this->source); })()), "inscrits", [], "any", false, false, false, 72))) {
                // line 73
                yield "                        <ul class=\"list-group list-group-flush\">
                            ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 74, $this->source); })()), "inscrits", [], "any", false, false, false, 74));
                foreach ($context['_seq'] as $context["_key"] => $context["apprenti"]) {
                    // line 75
                    yield "                                <li class=\"list-group-item bg-transparent text-white\">
                                    <i class=\"bi bi-person-circle me-2\"></i> ";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apprenti"], "nom", [], "any", false, false, false, 76), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["apprenti"], "email", [], "any", false, false, false, 76), "html", null, true);
                    yield ")
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['apprenti'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "                        </ul>
                    ";
            } else {
                // line 81
                yield "                        <p class=\"text-muted\">Aucun apprenti inscrit pour le moment.</p>
                    ";
            }
            // line 83
            yield "                </div>
            </div>
        ";
        }
        // line 86
        yield "
        <div class=\"mt-4 text-center\">
            ";
        // line 88
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88) && CoreExtension::inFilter("ROLE_APPRENTI", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "roles", [], "any", false, false, false, 88)))) {
            // line 89
            yield "                ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 89, $this->source); })()), "inscrits", [], "any", false, false, false, 89))) {
                // line 90
                yield "                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_desinscription", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                        <button type=\"submit\" class=\"btn btn-danger btn-lg rounded-pill shadow-sm\">
                            <i class=\"bi bi-x-circle me-2\"></i> Se désinscrire
                        </button>
                    </form>
                ";
            } else {
                // line 96
                yield "                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_inscription", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                        <button type=\"submit\" class=\"btn btn-success btn-lg rounded-pill shadow-sm\">
                            <i class=\"bi bi-check-circle me-2\"></i> S'inscrire
                        </button>
                    </form>
                ";
            }
            // line 102
            yield "
                <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_noter", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-lg rounded-pill shadow-sm ms-2\">
                    <i class=\"bi bi-pencil-square\"></i> Noter cet atelier
                </a>
            ";
        }
        // line 107
        yield "        </div>

        <div class=\"mt-4 text-center\">
            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_index");
        yield "\" class=\"btn btn-secondary btn-lg rounded-pill shadow-sm\">
                <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
            </a>
        </div>

        ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 115, $this->source); })()), "instructeur", [], "any", false, false, false, 115)))) {
            // line 116
            yield "            <div class=\"mt-3 text-center\">
                <a href=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg rounded-pill shadow-sm\">
                    <i class=\"bi bi-pencil-square me-2\"></i> Modifier
                </a>
                <br>
                ";
            // line 121
            yield Twig\Extension\CoreExtension::include($this->env, $context, "atelier/_delete_form.html.twig");
            yield "
            </div>
        ";
        }
        // line 124
        yield "    </div>

    <!-- Ajout d'un conteneur avec une taille fixe -->
    <div style=\"width: 700px; height:50vh; margin: auto;\">
        <canvas id=\"chartNotes\"></canvas>
    </div>

    <!-- Script Chart.js pour afficher les notes -->
    ";
        // line 132
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["notes_data"]) || array_key_exists("notes_data", $context) ? $context["notes_data"] : (function () { throw new RuntimeError('Variable "notes_data" does not exist.', 132, $this->source); })()))) {
            // line 133
            yield "        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script>
            var ctx = document.getElementById('chartNotes').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['0', '1', '2', '3', '4', '5'],
                    datasets: [{
                        label: 'Nombre de votes',
                        data: ";
            // line 142
            yield json_encode((isset($context["notes_data"]) || array_key_exists("notes_data", $context) ? $context["notes_data"] : (function () { throw new RuntimeError('Variable "notes_data" does not exist.', 142, $this->source); })()));
            yield ",
                        backgroundColor: 'rgba(8, 197, 209, 0.6)',
                        borderColor: 'rgba(8, 197, 209, 1)',
                        borderWidth: 2,
                        borderRadius: 5,
                    }]
                },
                options: {
                    responsive: true,  // Désactiver la réactivité automatique
                    maintainAspectRatio: true, // Désactiver l'ajustement automatique de l'aspect ratio
                    plugins: {
                        legend: {
                            labels: {
                                color: 'white',
                                font: {
                                    size: 18,
                                    weight: 'bold'
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                color: 'white',
                                font: { size: 14 }
                            },
                            grid: { color: 'rgba(255, 255, 255, 0.2)' }
                        },
                        y: {
                            ticks: {
                                color: 'white',
                                font: { size: 14 }
                            },
                            grid: { color: 'rgba(255, 255, 255, 0.2)' }
                        }
                    }
                }
            });
        </script>
    ";
        }
        // line 183
        yield "


    <style>
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
            color: white;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .btn {
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            transform: scale(1.05);
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
        return "atelier/show.html.twig";
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
        return array (  400 => 183,  356 => 142,  345 => 133,  343 => 132,  333 => 124,  327 => 121,  320 => 117,  317 => 116,  315 => 115,  307 => 110,  302 => 107,  295 => 103,  292 => 102,  282 => 96,  272 => 90,  269 => 89,  267 => 88,  263 => 86,  258 => 83,  254 => 81,  250 => 79,  239 => 76,  236 => 75,  232 => 74,  229 => 73,  227 => 72,  222 => 69,  220 => 68,  216 => 66,  207 => 59,  205 => 58,  200 => 55,  196 => 53,  190 => 50,  187 => 49,  185 => 48,  172 => 40,  165 => 36,  159 => 33,  151 => 27,  141 => 23,  138 => 22,  134 => 21,  131 => 20,  121 => 16,  118 => 15,  114 => 14,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Atelier - {{ atelier.nom }}{% endblock %}

{% block body %}
    <div class=\"container mt-2\" style=\"width: 60%\">
        <div class=\"text-center\">
            <h1 class=\"text-uppercase fw-bold text-warning\">
                <i class=\"bi bi-bookmark-star-fill me-2\"></i>{{ atelier.nom }}
            </h1>
        </div>

        <!-- Messages flash -->
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

        <div class=\"card shadow-lg p-4 mt-4 glass-effect\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-info fw-bold\">Détails de l'atelier</h5>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item bg-transparent text-white\">
                        <strong><i class=\"bi bi-hash me-2\"></i>ID:</strong> {{ atelier.id }}
                    </li>
                    <li class=\"list-group-item bg-transparent text-white\">
                        <strong><i class=\"bi bi-card-text me-2\"></i>Description:</strong> {{ atelier.description | raw }}
                    </li>
                    <li class=\"list-group-item bg-transparent text-white\">
                        <strong><i class=\"bi bi-person me-2\"></i>Instructeur:</strong>
                        {{ atelier.instructeur.nom }} ({{ atelier.instructeur.email }})
                    </li>
                </ul>
            </div>
        </div>

        <!-- Affichage de la moyenne des notes -->
        <div class=\"mt-4\">
            {% if moyenne_notes > 0 %}
                <div class=\"alert alert-info text-center shadow-sm\">
                    <i class=\"bi bi-star-fill text-warning\"></i> Note moyenne : <strong>{{ moyenne_notes }}</strong>/5
                </div>
            {% else %}
                <p class=\"text-muted text-center\">Cet atelier n'a pas encore reçu de notes.</p>
            {% endif %}
        </div>

        <!-- Affichage du graphique des notes -->
        {% if notes_data is not empty %}
            <div class=\"card mt-3 shadow-lg glass-effect\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-info fw-bold\">Répartition des notes</h5>
                    <canvas id=\"chartNotes\"></canvas>
                </div>
            </div>
        {% endif %}

        <!-- Liste des apprentis inscrits (visible uniquement pour les instructeurs) -->
        {% if app.user and 'ROLE_INSTRUCTEUR' in app.user.roles %}
            <div class=\"card mt-3 shadow-lg glass-effect\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-info fw-bold\">Apprentis inscrits</h5>
                    {% if atelier.inscrits is not empty %}
                        <ul class=\"list-group list-group-flush\">
                            {% for apprenti in atelier.inscrits %}
                                <li class=\"list-group-item bg-transparent text-white\">
                                    <i class=\"bi bi-person-circle me-2\"></i> {{ apprenti.nom }} ({{ apprenti.email }})
                                </li>
                            {% endfor %}
                        </ul>
                    {% else %}
                        <p class=\"text-muted\">Aucun apprenti inscrit pour le moment.</p>
                    {% endif %}
                </div>
            </div>
        {% endif %}

        <div class=\"mt-4 text-center\">
            {% if app.user and 'ROLE_APPRENTI' in app.user.roles %}
                {% if app.user in atelier.inscrits %}
                    <form action=\"{{ path('app_atelier_desinscription', {'id': atelier.id}) }}\" method=\"post\" class=\"d-inline\">
                        <button type=\"submit\" class=\"btn btn-danger btn-lg rounded-pill shadow-sm\">
                            <i class=\"bi bi-x-circle me-2\"></i> Se désinscrire
                        </button>
                    </form>
                {% else %}
                    <form action=\"{{ path('app_atelier_inscription', {'id': atelier.id}) }}\" method=\"post\" class=\"d-inline\">
                        <button type=\"submit\" class=\"btn btn-success btn-lg rounded-pill shadow-sm\">
                            <i class=\"bi bi-check-circle me-2\"></i> S'inscrire
                        </button>
                    </form>
                {% endif %}

                <a href=\"{{ path('app_atelier_noter', {'id': atelier.id}) }}\" class=\"btn btn-warning btn-lg rounded-pill shadow-sm ms-2\">
                    <i class=\"bi bi-pencil-square\"></i> Noter cet atelier
                </a>
            {% endif %}
        </div>

        <div class=\"mt-4 text-center\">
            <a href=\"{{ path('app_atelier_index') }}\" class=\"btn btn-secondary btn-lg rounded-pill shadow-sm\">
                <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
            </a>
        </div>

        {% if app.user and app.user == atelier.instructeur %}
            <div class=\"mt-3 text-center\">
                <a href=\"{{ path('app_atelier_edit', {'id': atelier.id}) }}\" class=\"btn btn-primary btn-lg rounded-pill shadow-sm\">
                    <i class=\"bi bi-pencil-square me-2\"></i> Modifier
                </a>
                <br>
                {{ include('atelier/_delete_form.html.twig') }}
            </div>
        {% endif %}
    </div>

    <!-- Ajout d'un conteneur avec une taille fixe -->
    <div style=\"width: 700px; height:50vh; margin: auto;\">
        <canvas id=\"chartNotes\"></canvas>
    </div>

    <!-- Script Chart.js pour afficher les notes -->
    {% if notes_data is not empty %}
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script>
            var ctx = document.getElementById('chartNotes').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['0', '1', '2', '3', '4', '5'],
                    datasets: [{
                        label: 'Nombre de votes',
                        data: {{ notes_data|json_encode|raw }},
                        backgroundColor: 'rgba(8, 197, 209, 0.6)',
                        borderColor: 'rgba(8, 197, 209, 1)',
                        borderWidth: 2,
                        borderRadius: 5,
                    }]
                },
                options: {
                    responsive: true,  // Désactiver la réactivité automatique
                    maintainAspectRatio: true, // Désactiver l'ajustement automatique de l'aspect ratio
                    plugins: {
                        legend: {
                            labels: {
                                color: 'white',
                                font: {
                                    size: 18,
                                    weight: 'bold'
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                color: 'white',
                                font: { size: 14 }
                            },
                            grid: { color: 'rgba(255, 255, 255, 0.2)' }
                        },
                        y: {
                            ticks: {
                                color: 'white',
                                font: { size: 14 }
                            },
                            grid: { color: 'rgba(255, 255, 255, 0.2)' }
                        }
                    }
                }
            });
        </script>
    {% endif %}



    <style>
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
            color: white;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .btn {
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            transform: scale(1.05);
        }
    </style>
{% endblock %}
", "atelier/show.html.twig", "/var/www/html/cc15/templates/atelier/show.html.twig");
    }
}
