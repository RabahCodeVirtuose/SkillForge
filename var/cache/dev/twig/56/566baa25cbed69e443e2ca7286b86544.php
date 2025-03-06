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

/* atelier/_navbar.html.twig */
class __TwigTemplate_125c3e06dd696f36283d6ff88715c2f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/_navbar.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark custom-navbar\">
    <div class=\"container\">
        ";
        // line 4
        yield "        <a class=\"navbar-brand text-light fw-bold\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_index");
        yield "\">
            <i class=\"bi-house\"></i> Accueil
        </a>

        ";
        // line 9
        yield "        <button class=\"navbar-toggler shadow-sm\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        ";
        // line 16
        yield "        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">

                ";
        // line 20
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20) && CoreExtension::inFilter("ROLE_INSTRUCTEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20)))) {
            // line 21
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link btn btn-outline-light me-2 rounded-pill shadow-sm hover-btn\"
                           href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_atelier_new");
            yield "\">
                            <i class=\"bi-plus-circle\"></i> Nouveau
                        </a>
                    </li>
                ";
        }
        // line 28
        yield "
                ";
        // line 30
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30) && CoreExtension::inFilter("ROLE_APPRENTI", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "roles", [], "any", false, false, false, 30)))) {
            // line 31
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link btn btn-outline-light me-2 rounded-pill shadow-sm hover-btn\"
                           href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_inscriptions");
            yield "\">
                            <i class=\"bi bi-journal-check\"></i> Mes inscriptions
                        </a>
                    </li>
                ";
        }
        // line 38
        yield "
                ";
        // line 40
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) {
            // line 41
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-light fw-bold\" href=\"#\" id=\"userDropdown\"
                           role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bi-person-circle\"></i> ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            yield "
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            <li>
                                <a class=\"dropdown-item text-danger fw-bold hover-logout\"
                                   href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"bi-box-arrow-right\"></i> Se déconnecter
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        } else {
            // line 56
            yield "                    ";
            // line 57
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link btn btn-primary rounded-pill shadow-sm hover-login\"
                           href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            <i class=\"bi-box-arrow-in-right\"></i> Se connecter
                        </a>
                    </li>
                ";
        }
        // line 64
        yield "            </ul>
        </div>
    </div>
</nav>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

<style>
    /* 🌌 Effet Glassmorphism */
    .custom-navbar {
        background: rgba(0, 53, 63, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        padding: 10px 0;
        transition: all 0.3s ease-in-out;
    }

    /* 📌 Liens de la navbar */
    .navbar-nav .nav-link {
        font-weight: bold;
        color: #FFBF66 !important;
        transition: all 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover {
        color: #D46F4D !important;
    }

    /* ✨ Boutons stylisés */
    .hover-btn {
        border: 2px solid white;
        color: white !important;
        transition: all 0.3s ease-in-out;
    }

    .hover-btn:hover {
        background-color: white;
        color: #00353F !important;
    }

    /* 🔴 Bouton de déconnexion */
    .hover-logout:hover {
        background: #CE6A6B !important;
        color: white !important;
    }

    /* 🔵 Bouton de connexion */
    .hover-login {
        background: #CE6A6B;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .hover-login:hover {
        background: #00353F !important;
        color: white !important;
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
        return "atelier/_navbar.html.twig";
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
        return array (  149 => 64,  141 => 59,  137 => 57,  135 => 56,  125 => 49,  117 => 44,  112 => 41,  109 => 40,  106 => 38,  98 => 33,  94 => 31,  91 => 30,  88 => 28,  80 => 23,  76 => 21,  73 => 20,  68 => 16,  60 => 9,  52 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark custom-navbar\">
    <div class=\"container\">
        {# Logo et lien Accueil #}
        <a class=\"navbar-brand text-light fw-bold\" href=\"{{ path('app_atelier_index') }}\">
            <i class=\"bi-house\"></i> Accueil
        </a>

        {# Bouton pour les écrans mobiles #}
        <button class=\"navbar-toggler shadow-sm\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        {# Contenu de la navbar #}
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">

                {# Bouton \"Nouveau\" pour créer un atelier (accessible uniquement aux instructeurs) #}
                {% if app.user and 'ROLE_INSTRUCTEUR' in app.user.roles %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link btn btn-outline-light me-2 rounded-pill shadow-sm hover-btn\"
                           href=\"{{ path('app_atelier_new') }}\">
                            <i class=\"bi-plus-circle\"></i> Nouveau
                        </a>
                    </li>
                {% endif %}

                {# Bouton \"Mes inscriptions\" (visible uniquement pour les apprentis) #}
                {% if app.user and 'ROLE_APPRENTI' in app.user.roles %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link btn btn-outline-light me-2 rounded-pill shadow-sm hover-btn\"
                           href=\"{{ path('mes_inscriptions') }}\">
                            <i class=\"bi bi-journal-check\"></i> Mes inscriptions
                        </a>
                    </li>
                {% endif %}

                {# Section utilisateur connecté #}
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-light fw-bold\" href=\"#\" id=\"userDropdown\"
                           role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"bi-person-circle\"></i> {{ app.user.nom }}
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            <li>
                                <a class=\"dropdown-item text-danger fw-bold hover-logout\"
                                   href=\"{{ path('app_logout') }}\">
                                    <i class=\"bi-box-arrow-right\"></i> Se déconnecter
                                </a>
                            </li>
                        </ul>
                    </li>
                {% else %}
                    {# Bouton \"Se connecter\" si l'utilisateur n'est pas connecté #}
                    <li class=\"nav-item\">
                        <a class=\"nav-link btn btn-primary rounded-pill shadow-sm hover-login\"
                           href=\"{{ path('app_login') }}\">
                            <i class=\"bi-box-arrow-in-right\"></i> Se connecter
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

<style>
    /* 🌌 Effet Glassmorphism */
    .custom-navbar {
        background: rgba(0, 53, 63, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        padding: 10px 0;
        transition: all 0.3s ease-in-out;
    }

    /* 📌 Liens de la navbar */
    .navbar-nav .nav-link {
        font-weight: bold;
        color: #FFBF66 !important;
        transition: all 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover {
        color: #D46F4D !important;
    }

    /* ✨ Boutons stylisés */
    .hover-btn {
        border: 2px solid white;
        color: white !important;
        transition: all 0.3s ease-in-out;
    }

    .hover-btn:hover {
        background-color: white;
        color: #00353F !important;
    }

    /* 🔴 Bouton de déconnexion */
    .hover-logout:hover {
        background: #CE6A6B !important;
        color: white !important;
    }

    /* 🔵 Bouton de connexion */
    .hover-login {
        background: #CE6A6B;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .hover-login:hover {
        background: #00353F !important;
        color: white !important;
    }
</style>
", "atelier/_navbar.html.twig", "/var/www/html/cc15/templates/atelier/_navbar.html.twig");
    }
}
