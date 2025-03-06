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

/* security/login.html.twig */
class __TwigTemplate_3c8015aede0191dee2e3976010fef906 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Connexion";
        
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
        yield "    <div class=\"d-flex justify-content-center align-items-center vh-100\">
        <div class=\"card custom-card shadow-lg p-4\">
            <div class=\"card-body text-center\">
                <h1 class=\"h3 fw-bold mb-4 text-primary\">
                    <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                </h1>

                <!-- Message d'erreur -->
                ";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            yield "                    <div class=\"alert alert-danger text-danger fw-bold\">
                        ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageKey", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 19
        yield "
                <!-- Utilisateur déjà connecté -->
                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    <div class=\"alert alert-info\">
                        <i class=\"bi bi-person-check\"></i> Vous êtes connecté en tant que <strong>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "userIdentifier", [], "any", false, false, false, 23), "html", null, true);
            yield "</strong>.
                        <a href=\"";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-danger btn-sm mt-2 custom-btn\">
                            <i class=\"bi bi-box-arrow-right\"></i> Se déconnecter
                        </a>
                    </div>
                ";
        } else {
            // line 29
            yield "                    <!-- Formulaire de connexion -->
                    <form method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"inputEmail\" class=\"form-label text-dark\">
                                <i class=\"bi bi-envelope-fill\"></i> Email
                            </label>
                            <input type=\"email\" value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "\" name=\"email\" id=\"inputEmail\"
                                   class=\"form-control rounded-pill shadow-sm\" autocomplete=\"email\" required autofocus>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPassword\" class=\"form-label text-dark\">
                                <i class=\"bi bi-lock-fill\"></i> Mot de passe
                            </label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                   class=\"form-control rounded-pill shadow-sm\" autocomplete=\"current-password\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\">

                        <button class=\"btn custom-btn w-100 rounded-pill shadow-sm\" type=\"submit\">
                            <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                        </button>
                    </form>

                    <!-- Lien d'inscription -->
                    <p class=\"mt-3 text-center\">
                        <span class=\"text-dark\">Pas encore de compte ?</span>
                        <a href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registeration");
            yield "\" class=\"text-primary fw-bold\">Créer un compte</a>
                    </p>
                ";
        }
        // line 60
        yield "            </div>
        </div>
    </div>

    <!-- Styles personnalisés -->
    <style>
        /* 🌌 Effet futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
            color: #FFBF66;
        }

        /* 🎭 Carte stylisée */
        .custom-card {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* ✨ Suppression du flou au hover */
        .custom-card:hover {
            transform: scale(1.02);
            box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.3);
        }

        /* 🎨 Boutons stylisés avec effet hover visible */
        .custom-btn {
            background: linear-gradient(to right, #D46F4D, #FFBF66);
            border: none;
            color: white;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .custom-btn:hover {
            background: linear-gradient(to right, #FFBF66, #D46F4D);
            color: white;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
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
        return "security/login.html.twig";
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
        return array (  184 => 60,  178 => 57,  165 => 47,  150 => 35,  142 => 29,  134 => 24,  130 => 23,  127 => 22,  125 => 21,  121 => 19,  115 => 16,  112 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-center align-items-center vh-100\">
        <div class=\"card custom-card shadow-lg p-4\">
            <div class=\"card-body text-center\">
                <h1 class=\"h3 fw-bold mb-4 text-primary\">
                    <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                </h1>

                <!-- Message d'erreur -->
                {% if error %}
                    <div class=\"alert alert-danger text-danger fw-bold\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                <!-- Utilisateur déjà connecté -->
                {% if app.user %}
                    <div class=\"alert alert-info\">
                        <i class=\"bi bi-person-check\"></i> Vous êtes connecté en tant que <strong>{{ app.user.userIdentifier }}</strong>.
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger btn-sm mt-2 custom-btn\">
                            <i class=\"bi bi-box-arrow-right\"></i> Se déconnecter
                        </a>
                    </div>
                {% else %}
                    <!-- Formulaire de connexion -->
                    <form method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"inputEmail\" class=\"form-label text-dark\">
                                <i class=\"bi bi-envelope-fill\"></i> Email
                            </label>
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"
                                   class=\"form-control rounded-pill shadow-sm\" autocomplete=\"email\" required autofocus>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPassword\" class=\"form-label text-dark\">
                                <i class=\"bi bi-lock-fill\"></i> Mot de passe
                            </label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                   class=\"form-control rounded-pill shadow-sm\" autocomplete=\"current-password\" required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <button class=\"btn custom-btn w-100 rounded-pill shadow-sm\" type=\"submit\">
                            <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                        </button>
                    </form>

                    <!-- Lien d'inscription -->
                    <p class=\"mt-3 text-center\">
                        <span class=\"text-dark\">Pas encore de compte ?</span>
                        <a href=\"{{ path('registeration') }}\" class=\"text-primary fw-bold\">Créer un compte</a>
                    </p>
                {% endif %}
            </div>
        </div>
    </div>

    <!-- Styles personnalisés -->
    <style>
        /* 🌌 Effet futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            font-family: 'Poppins', sans-serif;
            color: #FFBF66;
        }

        /* 🎭 Carte stylisée */
        .custom-card {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* ✨ Suppression du flou au hover */
        .custom-card:hover {
            transform: scale(1.02);
            box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.3);
        }

        /* 🎨 Boutons stylisés avec effet hover visible */
        .custom-btn {
            background: linear-gradient(to right, #D46F4D, #FFBF66);
            border: none;
            color: white;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .custom-btn:hover {
            background: linear-gradient(to right, #FFBF66, #D46F4D);
            color: white;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
{% endblock %}
", "security/login.html.twig", "/var/www/html/cc15/templates/security/login.html.twig");
    }
}
