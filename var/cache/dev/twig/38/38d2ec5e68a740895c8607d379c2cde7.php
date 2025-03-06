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

/* admin/instructeurs.html.twig */
class __TwigTemplate_a62256240167a32e73bd1be2c112f73d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/instructeurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/instructeurs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/instructeurs.html.twig", 1);
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

        yield "Gestion des Instructeurs";
        
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
        <h1 class=\"mb-4 text-center text-light fw-bold\">
            <i class=\"bi bi-people text-warning\"></i> Gestion des Instructeurs
        </h1>
        <hr class=\"mb-4\">

        <!-- Messages Flash -->
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "            <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
                <i class=\"bi bi-check-circle\"></i> ";
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
            yield "            <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
                <i class=\"bi bi-exclamation-triangle\"></i> ";
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
        <!-- Champ de recherche -->
        <div class=\"mb-4\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control rounded-pill shadow-sm\"
                   placeholder=\"🔍 Rechercher un instructeur...\" onkeyup=\"filterTable()\">
        </div>

        <!-- Tableau stylisé -->
        <div class=\"table-responsive glass-effect p-4\">
            <table class=\"table table-hover text-light text-center align-middle\">
                <thead class=\"table-dark\">
                <tr>
                    <th><i class=\"bi bi-person-circle\"></i> Nom</th>
                    <th><i class=\"bi bi-envelope\"></i> Email</th>
                    <th><i class=\"bi bi-award\"></i> Rôles</th>
                    <th><i class=\"bi bi-gear\"></i> Actions</th>
                </tr>
                </thead>
                <tbody id=\"tableBody\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["instructeurs"]) || array_key_exists("instructeurs", $context) ? $context["instructeurs"] : (function () { throw new RuntimeError('Variable "instructeurs" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instructeur"]) {
            // line 47
            yield "                    <tr class=\"hover-effect\">
                        <td class=\"fw-bold text-warning\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instructeur"], "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                        <td class=\"text-light\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instructeur"], "email", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                        <td class=\"text-info\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["instructeur"], "roles", [], "any", false, false, false, 50), ", "), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 52
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["instructeur"], "roles", [], "any", false, false, false, 52))) {
                // line 53
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_downgrade", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["instructeur"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning btn-sm rounded-pill shadow-sm\"
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir retirer le rôle d\\'administrateur ?');\">
                                    <i class=\"bi bi-arrow-down\"></i> Rétrograder
                                </a>
                            ";
            } else {
                // line 58
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["instructeur"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\" class=\"btn btn-outline-success btn-sm rounded-pill shadow-sm\">
                                    <i class=\"bi bi-arrow-up\"></i> Promouvoir Admin
                                </a>
                            ";
            }
            // line 62
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["instructeur"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger btn-sm rounded-pill shadow-sm\"
                               onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet instructeur ?');\">
                                <i class=\"bi bi-trash\"></i> Supprimer
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['instructeur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                </tbody>
            </table>
        </div>
    </div>

    <!-- Styles Personnalisés -->
    <style>
        /* 🌌 Arrière-plan futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
            color: #FFBF66;
        }
        /* 🌑 Assombrir la colonne mail*/
        .table td:nth-child(2) { /* Colonne mail */
            color: black !important;
            font-weight: bold;
        }
        /* ✨ Effet Glassmorphism */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 10px 30px rgba(255, 255, 255, 0.1);
        }

        /* 🖥 Tableau stylisé */
        .table-dark {
            background-color: #212E53 !important;
            color: white;
        }

        .table-hover tbody tr:hover {
            background: rgba(255, 191, 102, 0.2);
            transition: all 0.3s ease-in-out;
        }

        /* 🎭 Animation de survol */
        .hover-effect {
            transition: transform 0.2s ease-in-out;
        }

        .hover-effect:hover {
            transform: scale(1.02);
        }

        /* 🎨 Boutons stylisés */
        .btn-outline-warning:hover {
            background: #D46F4D;
            color: white;
        }

        .btn-outline-success:hover {
            background: #4A919E;
            color: white;
        }

        .btn-outline-danger:hover {
            background: #CE6A6B;
            color: white;
        }
    </style>

    <!-- Script pour filtrer la table en fonction de la recherche -->
    <script>
        function filterTable() {
            let input = document.getElementById(\"searchInput\").value.toLowerCase();
            let rows = document.querySelectorAll(\"#tableBody tr\");

            rows.forEach(row => {
                let name = row.cells[0].textContent.toLowerCase();
                let email = row.cells[1].textContent.toLowerCase();
                if (name.includes(input) || email.includes(input)) {
                    row.style.display = \"\";
                } else {
                    row.style.display = \"none\";
                }
            });
        }
    </script>
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
        return "admin/instructeurs.html.twig";
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
        return array (  221 => 69,  207 => 62,  199 => 58,  190 => 53,  188 => 52,  183 => 50,  179 => 49,  175 => 48,  172 => 47,  168 => 46,  147 => 27,  137 => 23,  134 => 22,  130 => 21,  127 => 20,  117 => 16,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Instructeurs{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <!-- Titre principal -->
        <h1 class=\"mb-4 text-center text-light fw-bold\">
            <i class=\"bi bi-people text-warning\"></i> Gestion des Instructeurs
        </h1>
        <hr class=\"mb-4\">

        <!-- Messages Flash -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
                <i class=\"bi bi-check-circle\"></i> {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
                <i class=\"bi bi-exclamation-triangle\"></i> {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        <!-- Champ de recherche -->
        <div class=\"mb-4\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control rounded-pill shadow-sm\"
                   placeholder=\"🔍 Rechercher un instructeur...\" onkeyup=\"filterTable()\">
        </div>

        <!-- Tableau stylisé -->
        <div class=\"table-responsive glass-effect p-4\">
            <table class=\"table table-hover text-light text-center align-middle\">
                <thead class=\"table-dark\">
                <tr>
                    <th><i class=\"bi bi-person-circle\"></i> Nom</th>
                    <th><i class=\"bi bi-envelope\"></i> Email</th>
                    <th><i class=\"bi bi-award\"></i> Rôles</th>
                    <th><i class=\"bi bi-gear\"></i> Actions</th>
                </tr>
                </thead>
                <tbody id=\"tableBody\">
                {% for instructeur in instructeurs %}
                    <tr class=\"hover-effect\">
                        <td class=\"fw-bold text-warning\">{{ instructeur.nom }}</td>
                        <td class=\"text-light\">{{ instructeur.email }}</td>
                        <td class=\"text-info\">{{ instructeur.roles|join(', ') }}</td>
                        <td>
                            {% if 'ROLE_ADMIN' in instructeur.roles %}
                                <a href=\"{{ path('admin_downgrade', {'id': instructeur.id}) }}\" class=\"btn btn-outline-warning btn-sm rounded-pill shadow-sm\"
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir retirer le rôle d\\'administrateur ?');\">
                                    <i class=\"bi bi-arrow-down\"></i> Rétrograder
                                </a>
                            {% else %}
                                <a href=\"{{ path('admin_promote', {'id': instructeur.id}) }}\" class=\"btn btn-outline-success btn-sm rounded-pill shadow-sm\">
                                    <i class=\"bi bi-arrow-up\"></i> Promouvoir Admin
                                </a>
                            {% endif %}
                            <a href=\"{{ path('admin_delete', {'id': instructeur.id}) }}\" class=\"btn btn-outline-danger btn-sm rounded-pill shadow-sm\"
                               onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet instructeur ?');\">
                                <i class=\"bi bi-trash\"></i> Supprimer
                            </a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <!-- Styles Personnalisés -->
    <style>
        /* 🌌 Arrière-plan futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
            color: #FFBF66;
        }
        /* 🌑 Assombrir la colonne mail*/
        .table td:nth-child(2) { /* Colonne mail */
            color: black !important;
            font-weight: bold;
        }
        /* ✨ Effet Glassmorphism */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 10px 30px rgba(255, 255, 255, 0.1);
        }

        /* 🖥 Tableau stylisé */
        .table-dark {
            background-color: #212E53 !important;
            color: white;
        }

        .table-hover tbody tr:hover {
            background: rgba(255, 191, 102, 0.2);
            transition: all 0.3s ease-in-out;
        }

        /* 🎭 Animation de survol */
        .hover-effect {
            transition: transform 0.2s ease-in-out;
        }

        .hover-effect:hover {
            transform: scale(1.02);
        }

        /* 🎨 Boutons stylisés */
        .btn-outline-warning:hover {
            background: #D46F4D;
            color: white;
        }

        .btn-outline-success:hover {
            background: #4A919E;
            color: white;
        }

        .btn-outline-danger:hover {
            background: #CE6A6B;
            color: white;
        }
    </style>

    <!-- Script pour filtrer la table en fonction de la recherche -->
    <script>
        function filterTable() {
            let input = document.getElementById(\"searchInput\").value.toLowerCase();
            let rows = document.querySelectorAll(\"#tableBody tr\");

            rows.forEach(row => {
                let name = row.cells[0].textContent.toLowerCase();
                let email = row.cells[1].textContent.toLowerCase();
                if (name.includes(input) || email.includes(input)) {
                    row.style.display = \"\";
                } else {
                    row.style.display = \"none\";
                }
            });
        }
    </script>
{% endblock %}
", "admin/instructeurs.html.twig", "/var/www/html/cc15/templates/admin/instructeurs.html.twig");
    }
}
