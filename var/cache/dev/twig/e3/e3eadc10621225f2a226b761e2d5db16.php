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

/* base.html.twig */
class __TwigTemplate_7b5892e7765f6950af11c8fd8835e1f1 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Bootstrap & Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Custom styles -->
    <style>
        /* Arrière-plan futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            color: #FFBF66;
            font-family: 'Poppins', sans-serif;
            transition: background 0.5s ease-in-out;
        }

        /* Navbar stylisée */
        .navbar {
            background: #430C05;
            border-bottom: 3px solid #D46F4D;
            padding: 15px;
            transition: all 0.4s ease-in-out;
        }

        .navbar-brand, .nav-link {
            color: #FFBF66 !important;
            transition: 0.3s ease-in-out;
        }

        .navbar-brand:hover {
            color: #08C5D1 !important;
            transform: scale(1.1);
        }

        /* Conteneur principal */
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease-in-out;
        }

        /* Boutons stylisés */
        .btn {
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary {
            background: #D46F4D;
            border-color: #D46F4D;
        }

        .btn-primary:hover {
            background: #08C5D1;
            border-color: #08C5D1;
            transform: scale(1.05);
        }

        .btn-danger {
            background: #D46F4D;
            border-color: #D46F4D;
        }

        .btn-danger:hover {
            background: #FFBF66;
            border-color: #FFBF66;
            color: #430C05;
            transform: scale(1.05);
        }

        /* Footer stylisé */
        footer {
            text-align: center;
            padding: 15px;
            background: #430C05;
            color: #FFBF66;
            font-size: 1rem;
            border-top: 3px solid #D46F4D;
            margin-top: 20px;
            opacity: 0;
            animation: fadeIn 1s ease-in forwards;
        }

        /* Effet d'apparition du footer */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Effet d'ombre sur les boutons */
        .btn:hover {
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.2);
        }
    </style>

    ";
        // line 104
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 107
        yield "</head>

<body>
<!-- Navbar -->
";
        // line 111
        yield from $this->loadTemplate("atelier/_navbar.html.twig", "base.html.twig", 111)->unwrap()->yield($context);
        // line 112
        yield "
<div class=\"container mt-4\">
    ";
        // line 114
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 115
        yield "</div>

<!-- Footer -->
<footer class=\"footer text-center mt-5 p-4\">
    <div class=\"container\">
        <p class=\"mb-2\">
            &copy; 2025 - <strong>SkillForge</strong> 🚀 | Apprenez et évoluez avec nous
        </p>
        <p class=\"team\">
            Créé avec passion <i class=\"bi bi-fire text-warning\"></i> par
            <span class=\"name\">TOUBAL Rabah</span>,
            <span class=\"name\">RAHMOUN Merouane</span>,
            <span class=\"name\">HAMZE Muhamad</span>,
            <span class=\"name\">GUILLARD Joan</span>
        </p>
    </div>
</footer>

<style>
    /* 🌟 Footer Stylisé */
    .footer {
        background: linear-gradient(to right, #00353F, #430C05);
        color: white;
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        transition: all 0.5s ease-in-out; /* Assurez une transition fluide */
        border-top: 2px solid rgba(255, 255, 255, 0.2);
        padding: 15px;
    }

    /* 🎭 Effet au survol */
    .footer:hover {
        background: linear-gradient(to right, #430C05, #00353F);
        transform: scale(1.02); /* Légère augmentation pour un effet dynamique */
        transition: all 0.5s ease-in-out; /* Assurez une transition sur toutes les propriétés */
    }


    .team {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .name {
        color: #FFBF66;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .name:hover {
        color: #08C5D1;
        text-decoration: underline;
    }
</style>


<!-- Bootstrap Scripts -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

";
        // line 174
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 177
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 105
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 174
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 175
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
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
        return "base.html.twig";
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
        return array (  337 => 175,  324 => 174,  302 => 114,  288 => 105,  275 => 104,  252 => 6,  239 => 177,  237 => 174,  176 => 115,  174 => 114,  170 => 112,  168 => 111,  162 => 107,  160 => 104,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Bootstrap & Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Custom styles -->
    <style>
        /* Arrière-plan futuriste */
        body {
            background: linear-gradient(to right, #430C05, #00353F);
            color: #FFBF66;
            font-family: 'Poppins', sans-serif;
            transition: background 0.5s ease-in-out;
        }

        /* Navbar stylisée */
        .navbar {
            background: #430C05;
            border-bottom: 3px solid #D46F4D;
            padding: 15px;
            transition: all 0.4s ease-in-out;
        }

        .navbar-brand, .nav-link {
            color: #FFBF66 !important;
            transition: 0.3s ease-in-out;
        }

        .navbar-brand:hover {
            color: #08C5D1 !important;
            transform: scale(1.1);
        }

        /* Conteneur principal */
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease-in-out;
        }

        /* Boutons stylisés */
        .btn {
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary {
            background: #D46F4D;
            border-color: #D46F4D;
        }

        .btn-primary:hover {
            background: #08C5D1;
            border-color: #08C5D1;
            transform: scale(1.05);
        }

        .btn-danger {
            background: #D46F4D;
            border-color: #D46F4D;
        }

        .btn-danger:hover {
            background: #FFBF66;
            border-color: #FFBF66;
            color: #430C05;
            transform: scale(1.05);
        }

        /* Footer stylisé */
        footer {
            text-align: center;
            padding: 15px;
            background: #430C05;
            color: #FFBF66;
            font-size: 1rem;
            border-top: 3px solid #D46F4D;
            margin-top: 20px;
            opacity: 0;
            animation: fadeIn 1s ease-in forwards;
        }

        /* Effet d'apparition du footer */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Effet d'ombre sur les boutons */
        .btn:hover {
            box-shadow: 0px 5px 15px rgba(255, 255, 255, 0.2);
        }
    </style>

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>

<body>
<!-- Navbar -->
{% include 'atelier/_navbar.html.twig' %}

<div class=\"container mt-4\">
    {% block body %}{% endblock %}
</div>

<!-- Footer -->
<footer class=\"footer text-center mt-5 p-4\">
    <div class=\"container\">
        <p class=\"mb-2\">
            &copy; 2025 - <strong>SkillForge</strong> 🚀 | Apprenez et évoluez avec nous
        </p>
        <p class=\"team\">
            Créé avec passion <i class=\"bi bi-fire text-warning\"></i> par
            <span class=\"name\">TOUBAL Rabah</span>,
            <span class=\"name\">RAHMOUN Merouane</span>,
            <span class=\"name\">HAMZE Muhamad</span>,
            <span class=\"name\">GUILLARD Joan</span>
        </p>
    </div>
</footer>

<style>
    /* 🌟 Footer Stylisé */
    .footer {
        background: linear-gradient(to right, #00353F, #430C05);
        color: white;
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        transition: all 0.5s ease-in-out; /* Assurez une transition fluide */
        border-top: 2px solid rgba(255, 255, 255, 0.2);
        padding: 15px;
    }

    /* 🎭 Effet au survol */
    .footer:hover {
        background: linear-gradient(to right, #430C05, #00353F);
        transform: scale(1.02); /* Légère augmentation pour un effet dynamique */
        transition: all 0.5s ease-in-out; /* Assurez une transition sur toutes les propriétés */
    }


    .team {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .name {
        color: #FFBF66;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .name:hover {
        color: #08C5D1;
        text-decoration: underline;
    }
</style>


<!-- Bootstrap Scripts -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/html/cc15/templates/base.html.twig");
    }
}
