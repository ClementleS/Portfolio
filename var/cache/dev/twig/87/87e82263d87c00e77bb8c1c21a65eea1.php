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

/* main/projets.html.twig */
class __TwigTemplate_f5261d82e2ed0bfa5d97703b7595844a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/projets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/projets.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Mes Projets - ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
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
        yield "<div class=\"container-fluid p-0\">
    ";
        // line 8
        yield "    <section id=\"projets-header\" class=\"d-flex align-items-center justify-content-center position-relative\" style=\"min-height: 80vh;\">
        <div class=\"position-absolute top-0 start-0 m-4\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-cyan btn-sm rounded-pill px-4 py-2 shadow\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à l'accueil
            </a>
        </div>

        <div class=\"text-center\">
            <h1 class=\"display-1 fw-bold text-cyan mb-3\">Mes projets</h1>
            <p class=\"fs-4 text-white\">Clément SANCHIS - Étudiant en BTS SIO</p>
        </div>

        <div class=\"position-absolute bottom-0 end-0 m-4\">
            <a href=\"#projets-scolaires\" class=\"btn btn-cyan rounded-circle p-3 shadow\">
                <i class=\"fas fa-redo-alt\"></i> ";
        // line 23
        yield "            </a>
        </div>
    </section>

    ";
        // line 28
        yield "    <section id=\"projets-scolaires\" class=\"py-5 px-4\">
        <h2 class=\"text-cyan mb-4 border-bottom border-cyan border-3 d-inline-block pb-2\">Projets Scolaires</h2>
        
        <div class=\"d-flex gap-2 mb-5 flex-wrap\">
            <span class=\"badge rounded-pill bg-cyan text-dark px-3 py-2\">Tous</span>
            <span class=\"badge rounded-pill border border-secondary text-white px-3 py-2\">HTML/CSS</span>
            <span class=\"badge rounded-pill border border-secondary text-white px-3 py-2\">JavaScript</span>
            <span class=\"badge rounded-pill border border-secondary text-white px-3 py-2\">PHP</span>
            <span class=\"badge rounded-pill border border-secondary text-white px-3 py-2\">MySQL</span>
        </div>

        <div class=\"row g-4\">
            ";
        // line 41
        yield "            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" class=\"w-100\" alt=\"TechShop\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white\">Projet 1 - Création du jeu Mastermind (version console et version graphique) - BTS SIO première année</h5>
                        <div class=\"d-flex gap-2 mb-3\">
                            <span class=\"badge border border-secondary\">Java</span>
                        </div>
                        <div class=\"d-flex gap-3\">
                            <a href=\"#\" class=\"text-white text-decoration-none small\"><i class=\"fas fa-info-circle text-cyan me-1\"></i> En savoir plus</a>
                            <a href=\"#\" class=\"text-white text-decoration-none small\"><i class=\"fas fa-external-link-alt text-cyan me-1\"></i> Demo</a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 57
        yield "        </div>
    </section>
</div>
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
        return "main/projets.html.twig";
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
        return array (  163 => 57,  147 => 43,  143 => 41,  129 => 28,  123 => 23,  108 => 10,  104 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Projets - {{ parent() }}{% endblock %}

{% block body %}
<div class=\"container-fluid p-0\">
    {# --- SECTION HEADER (Screen 2) --- #}
    <section id=\"projets-header\" class=\"d-flex align-items-center justify-content-center position-relative\" style=\"min-height: 80vh;\">
        <div class=\"position-absolute top-0 start-0 m-4\">
            <a href=\"{{ path('app_home') }}\" class=\"btn btn-cyan btn-sm rounded-pill px-4 py-2 shadow\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à l'accueil
            </a>
        </div>

        <div class=\"text-center\">
            <h1 class=\"display-1 fw-bold text-cyan mb-3\">Mes projets</h1>
            <p class=\"fs-4 text-white\">Clément SANCHIS - Étudiant en BTS SIO</p>
        </div>

        <div class=\"position-absolute bottom-0 end-0 m-4\">
            <a href=\"#projets-scolaires\" class=\"btn btn-cyan rounded-circle p-3 shadow\">
                <i class=\"fas fa-redo-alt\"></i> {# Ou une flèche vers le bas #}
            </a>
        </div>
    </section>

    {# --- SECTION 1 : PROJETS SCOLAIRES (Screen 3) --- #}
    <section id=\"projets-scolaires\" class=\"py-5 px-4\">
        <h2 class=\"text-cyan mb-4 border-bottom border-cyan border-3 d-inline-block pb-2\">Projets Scolaires</h2>
        
        <div class=\"d-flex gap-2 mb-5 flex-wrap\">
            <span class=\"badge rounded-pill bg-cyan text-dark px-3 py-2\">Tous</span>
            <span class=\"badge rounded-pill border border-secondary text-white px-3 py-2\">HTML/CSS</span>
            <span class=\"badge rounded-pill border border-secondary text-white px-3 py-2\">JavaScript</span>
            <span class=\"badge rounded-pill border border-secondary text-white px-3 py-2\">PHP</span>
            <span class=\"badge rounded-pill border border-secondary text-white px-3 py-2\">MySQL</span>
        </div>

        <div class=\"row g-4\">
            {# Projet 1 - TechShop #}
            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" class=\"w-100\" alt=\"TechShop\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white\">Projet 1 - Création du jeu Mastermind (version console et version graphique) - BTS SIO première année</h5>
                        <div class=\"d-flex gap-2 mb-3\">
                            <span class=\"badge border border-secondary\">Java</span>
                        </div>
                        <div class=\"d-flex gap-3\">
                            <a href=\"#\" class=\"text-white text-decoration-none small\"><i class=\"fas fa-info-circle text-cyan me-1\"></i> En savoir plus</a>
                            <a href=\"#\" class=\"text-white text-decoration-none small\"><i class=\"fas fa-external-link-alt text-cyan me-1\"></i> Demo</a>
                        </div>
                    </div>
                </div>
            </div>
            {# Ajoute tes autres projets ici selon tes screens 4 et 5 #}
        </div>
    </section>
</div>
{% endblock %}", "main/projets.html.twig", "P:\\cours\\html\\Portfolio\\templates\\main\\projets.html.twig");
    }
}
