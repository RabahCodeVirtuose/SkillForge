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

/* registration/register.html.twig */
class __TwigTemplate_11a4c01b8528bb812205371710186dc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Inscription";
        
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
        <div class=\"card p-4 shadow-lg rounded-4\" style=\"max-width: 500px; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);\">
            <div class=\"card-body\">
                <h1 class=\"h3 mb-3 text-center text-white\">
                    <i class=\"bi bi-person-plus-fill me-2\"></i>Créer un compte
                </h1>

                <!-- Messages Flash -->
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 15
            yield "                    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " text-center\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                yield "                            <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
                <!-- Formulaire -->
                ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        yield "

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-envelope-fill me-2\"></i>Email</label>
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control rounded-pill border-0 shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-person-fill me-2\"></i>Nom</label>
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control rounded-pill border-0 shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-person-fill me-2\"></i>Prénom</label>
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prenom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control rounded-pill border-0 shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-lock-fill me-2\"></i>Mot de passe</label>
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), "first", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control rounded-pill border-0 shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-lock-fill me-2\"></i>Confirmer le mot de passe</label>
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "password", [], "any", false, false, false, 47), "second", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control rounded-pill border-0 shadow-sm"]]);
        yield "
                </div>




                ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        yield "

                <!-- Lien vers la connexion -->
                <p class=\"mt-3 text-center text-white\">
                    Vous avez déjà un compte ? <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-warning text-decoration-none\">Connectez-vous</a>
                </p>
            </div>
        </div>
    </div>

    <style>
        /* Appliquer la palette de couleurs */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            color: #FFBF66;
            font-family: 'Poppins', sans-serif;
        }

        /* Boutons stylisés */
        .btn-primary {
            background: #D46F4D;
            border: none;
            transition: all 0.3s ease-in-out;
        }


        /* Champs de formulaire modernisés */
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
        }

        /* Liens stylisés */
        a.text-warning:hover {
            color: #08C5D1 !important;
            text-decoration: underline;
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
        return "registration/register.html.twig";
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
        return array (  198 => 57,  191 => 53,  182 => 47,  174 => 42,  166 => 37,  158 => 32,  150 => 27,  143 => 23,  139 => 21,  132 => 19,  123 => 17,  119 => 16,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"card p-4 shadow-lg rounded-4\" style=\"max-width: 500px; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);\">
            <div class=\"card-body\">
                <h1 class=\"h3 mb-3 text-center text-white\">
                    <i class=\"bi bi-person-plus-fill me-2\"></i>Créer un compte
                </h1>

                <!-- Messages Flash -->
                {% for label, messages in app.flashes %}
                    <div class=\"alert alert-{{ label }} text-center\">
                        {% for message in messages %}
                            <p>{{ message }}</p>
                        {% endfor %}
                    </div>
                {% endfor %}

                <!-- Formulaire -->
                {{ form_start(form) }}

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-envelope-fill me-2\"></i>Email</label>
                    {{ form_widget(form.email, {'attr': {'class': 'form-control rounded-pill border-0 shadow-sm'}}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-person-fill me-2\"></i>Nom</label>
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control rounded-pill border-0 shadow-sm'}}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-person-fill me-2\"></i>Prénom</label>
                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control rounded-pill border-0 shadow-sm'}}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-lock-fill me-2\"></i>Mot de passe</label>
                    {{ form_widget(form.password.first, {'attr': {'class': 'form-control rounded-pill border-0 shadow-sm'}}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label text-white\"><i class=\"bi bi-lock-fill me-2\"></i>Confirmer le mot de passe</label>
                    {{ form_widget(form.password.second, {'attr': {'class': 'form-control rounded-pill border-0 shadow-sm'}}) }}
                </div>




                {{ form_end(form) }}

                <!-- Lien vers la connexion -->
                <p class=\"mt-3 text-center text-white\">
                    Vous avez déjà un compte ? <a href=\"{{ path('app_login') }}\" class=\"text-warning text-decoration-none\">Connectez-vous</a>
                </p>
            </div>
        </div>
    </div>

    <style>
        /* Appliquer la palette de couleurs */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            color: #FFBF66;
            font-family: 'Poppins', sans-serif;
        }

        /* Boutons stylisés */
        .btn-primary {
            background: #D46F4D;
            border: none;
            transition: all 0.3s ease-in-out;
        }


        /* Champs de formulaire modernisés */
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
        }

        /* Liens stylisés */
        a.text-warning:hover {
            color: #08C5D1 !important;
            text-decoration: underline;
        }
    </style>
{% endblock %}
", "registration/register.html.twig", "/var/www/html/cc15/templates/registration/register.html.twig");
    }
}
