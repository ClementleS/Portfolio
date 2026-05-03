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
class __TwigTemplate_908612ea71d9a03b8d763f8299662a6d extends Template
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
        yield "
    ";
        // line 8
        yield "    <section id=\"projets-header\" class=\"d-flex align-items-center justify-content-center position-relative\" style=\"min-height: 50vh;\">
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
            <p class=\"fs-4 text-white\">Clément SANCHIS — Étudiant en BTS SIO</p>
        </div>
    </section>

    ";
        // line 21
        yield "    <section id=\"projets-scolaires\" class=\"py-5 px-4\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-graduation-cap me-3\"></i>Projets Scolaires
        </h2>

        <div class=\"row g-4\">

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" class=\"w-100 projet-card-img\" alt=\"TechShop\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Projet 1 — Création de site web statique</h5>
                        <p class=\"text-muted small mb-3\">Création d'un site web statique avec HTML, CSS et JavaScript, au choix et sans utiliser de framework.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">HTML</span>
                            <span class=\"badge border border-secondary text-white\">CSS</span>
                            <span class=\"badge border border-secondary text-white\">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" class=\"w-100 projet-card-img\" alt=\"Portfolio\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Projet 2 — Création du Portfolio</h5>
                        <p class=\"text-muted small mb-3\">Création d'un site portfolio, mise en ligne et référencement — BTS SIO première année.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">HTML</span>
                            <span class=\"badge border border-secondary text-white\">CSS</span>
                            <span class=\"badge border border-secondary text-white\">JavaScript</span>
                            <span class=\"badge border border-secondary text-white\">PHP</span>
                            <span class=\"badge border border-secondary text-white\">MySQL</span>
                            <span class=\"badge border border-secondary text-white\">SEO</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    ";
        // line 65
        yield "    <section id=\"projets-persos\" class=\"py-5 px-4\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-user me-3\"></i>Projets Personnels
        </h2>

        <div class=\"row g-4\">

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" class=\"w-100 projet-card-img\" alt=\"WebUSBPrinter\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">WebUSBPrinter</h5>
                        <p class=\"text-muted small mb-3\">Tableau de bord pour contrôler une imprimante connectée via USB à un ordinateur local. Hébergé localement, accessible depuis smartphones et tablettes pour effectuer numérisations ou impressions.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">HTML</span>
                            <span class=\"badge border border-secondary text-white\">CSS</span>
                            <span class=\"badge border border-secondary text-white\">JavaScript</span>
                            <span class=\"badge border border-secondary text-white\">PHP</span>
                            <span class=\"badge border border-secondary text-white\">PowerShell</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" class=\"w-100 projet-card-img\" alt=\"Minecraft Plugins\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Serveur Minecraft — Plugins Java</h5>
                        <p class=\"text-muted small mb-3\">Création de plugins pour un serveur Minecraft : gestion des modes de jeu, modération, régénération de map, statistiques. API partagée entre tous les plugins.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">Java</span>
                            <span class=\"badge border border-secondary text-white\">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" class=\"w-100 projet-card-img\" alt=\"Bot Discord\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Bot Discord — Anti Raid (2020–2022)</h5>
                        <p class=\"text-muted small mb-3\">Bot anti-raid sur Discord comptant les actions administratives par seconde. Si le seuil est dépassé, il déclenche des protections automatiques. Multilingue (FR/EN), abandonné en 2022 suite aux changements Discord.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">Python</span>
                            <span class=\"badge border border-secondary text-white\">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    ";
        // line 121
        yield "    <section id=\"projets-pros\" class=\"py-5 px-4\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-briefcase me-3\"></i>Projets Professionnels
        </h2>

        <div class=\"row g-4\">

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" class=\"w-100 projet-card-img\" alt=\"Plateforme Alumni\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Stage 2ème année — Plateforme Alumni (jan–fév 2026)</h5>
                        <p class=\"text-muted small mb-3\">
                            Développement d'une plateforme de suivi des anciens élèves du Lycée Emile Peytavin (Mende).
                            Authentification avec rôles, annuaire des profils, import CSV, système d'e-mailing en masse, respect des normes RGPD.
                        </p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">Laravel</span>
                            <span class=\"badge border border-secondary text-white\">Bootstrap 5</span>
                            <span class=\"badge border border-secondary text-white\">Alpine.js</span>
                            <span class=\"badge border border-secondary text-white\">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" class=\"w-100 projet-card-img\" alt=\"Stage PETR Gévaudan\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Stage 1ère année — PETR du Pays du Gévaudan (mai–juin 2025)</h5>
                        <p class=\"text-muted small mb-3\">
                            Amélioration du site WordPress du PETR : intégration de contenus, adaptation responsive, mise en conformité RGAA, création de modèles personnalisés avec documentation utilisateur. Ajout d'une carte interactive pour le territoire.
                        </p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">WordPress</span>
                            <span class=\"badge border border-secondary text-white\">Elementor</span>
                            <span class=\"badge border border-secondary text-white\">RGAA</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

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
        return array (  271 => 149,  249 => 130,  238 => 121,  220 => 105,  203 => 91,  183 => 74,  172 => 65,  150 => 45,  132 => 30,  121 => 21,  108 => 10,  104 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Projets - {{ parent() }}{% endblock %}

{% block body %}

    {# --- HEADER --- #}
    <section id=\"projets-header\" class=\"d-flex align-items-center justify-content-center position-relative\" style=\"min-height: 50vh;\">
        <div class=\"position-absolute top-0 start-0 m-4\">
            <a href=\"{{ path('app_home') }}\" class=\"btn btn-cyan btn-sm rounded-pill px-4 py-2 shadow\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à l'accueil
            </a>
        </div>
        <div class=\"text-center\">
            <h1 class=\"display-1 fw-bold text-cyan mb-3\">Mes projets</h1>
            <p class=\"fs-4 text-white\">Clément SANCHIS — Étudiant en BTS SIO</p>
        </div>
    </section>

    {# --- PROJETS SCOLAIRES --- #}
    <section id=\"projets-scolaires\" class=\"py-5 px-4\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-graduation-cap me-3\"></i>Projets Scolaires
        </h2>

        <div class=\"row g-4\">

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" class=\"w-100 projet-card-img\" alt=\"TechShop\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Projet 1 — Création de site web statique</h5>
                        <p class=\"text-muted small mb-3\">Création d'un site web statique avec HTML, CSS et JavaScript, au choix et sans utiliser de framework.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">HTML</span>
                            <span class=\"badge border border-secondary text-white\">CSS</span>
                            <span class=\"badge border border-secondary text-white\">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" class=\"w-100 projet-card-img\" alt=\"Portfolio\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Projet 2 — Création du Portfolio</h5>
                        <p class=\"text-muted small mb-3\">Création d'un site portfolio, mise en ligne et référencement — BTS SIO première année.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">HTML</span>
                            <span class=\"badge border border-secondary text-white\">CSS</span>
                            <span class=\"badge border border-secondary text-white\">JavaScript</span>
                            <span class=\"badge border border-secondary text-white\">PHP</span>
                            <span class=\"badge border border-secondary text-white\">MySQL</span>
                            <span class=\"badge border border-secondary text-white\">SEO</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {# --- PROJETS PERSONNELS --- #}
    <section id=\"projets-persos\" class=\"py-5 px-4\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-user me-3\"></i>Projets Personnels
        </h2>

        <div class=\"row g-4\">

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" class=\"w-100 projet-card-img\" alt=\"WebUSBPrinter\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">WebUSBPrinter</h5>
                        <p class=\"text-muted small mb-3\">Tableau de bord pour contrôler une imprimante connectée via USB à un ordinateur local. Hébergé localement, accessible depuis smartphones et tablettes pour effectuer numérisations ou impressions.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">HTML</span>
                            <span class=\"badge border border-secondary text-white\">CSS</span>
                            <span class=\"badge border border-secondary text-white\">JavaScript</span>
                            <span class=\"badge border border-secondary text-white\">PHP</span>
                            <span class=\"badge border border-secondary text-white\">PowerShell</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" class=\"w-100 projet-card-img\" alt=\"Minecraft Plugins\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Serveur Minecraft — Plugins Java</h5>
                        <p class=\"text-muted small mb-3\">Création de plugins pour un serveur Minecraft : gestion des modes de jeu, modération, régénération de map, statistiques. API partagée entre tous les plugins.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">Java</span>
                            <span class=\"badge border border-secondary text-white\">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" class=\"w-100 projet-card-img\" alt=\"Bot Discord\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Bot Discord — Anti Raid (2020–2022)</h5>
                        <p class=\"text-muted small mb-3\">Bot anti-raid sur Discord comptant les actions administratives par seconde. Si le seuil est dépassé, il déclenche des protections automatiques. Multilingue (FR/EN), abandonné en 2022 suite aux changements Discord.</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">Python</span>
                            <span class=\"badge border border-secondary text-white\">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {# --- PROJETS PROFESSIONNELS --- #}
    <section id=\"projets-pros\" class=\"py-5 px-4\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-briefcase me-3\"></i>Projets Professionnels
        </h2>

        <div class=\"row g-4\">

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" class=\"w-100 projet-card-img\" alt=\"Plateforme Alumni\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Stage 2ème année — Plateforme Alumni (jan–fév 2026)</h5>
                        <p class=\"text-muted small mb-3\">
                            Développement d'une plateforme de suivi des anciens élèves du Lycée Emile Peytavin (Mende).
                            Authentification avec rôles, annuaire des profils, import CSV, système d'e-mailing en masse, respect des normes RGPD.
                        </p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">Laravel</span>
                            <span class=\"badge border border-secondary text-white\">Bootstrap 5</span>
                            <span class=\"badge border border-secondary text-white\">Alpine.js</span>
                            <span class=\"badge border border-secondary text-white\">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"projet-card bg-dark-light border border-secondary rounded-4 overflow-hidden\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" class=\"w-100 projet-card-img\" alt=\"Stage PETR Gévaudan\">
                    <div class=\"p-4\">
                        <h5 class=\"text-white mb-2\">Stage 1ère année — PETR du Pays du Gévaudan (mai–juin 2025)</h5>
                        <p class=\"text-muted small mb-3\">
                            Amélioration du site WordPress du PETR : intégration de contenus, adaptation responsive, mise en conformité RGAA, création de modèles personnalisés avec documentation utilisateur. Ajout d'une carte interactive pour le territoire.
                        </p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">WordPress</span>
                            <span class=\"badge border border-secondary text-white\">Elementor</span>
                            <span class=\"badge border border-secondary text-white\">RGAA</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

{% endblock %}
", "main/projets.html.twig", "C:\\wamp64\\www\\Portfolio\\templates\\main\\projets.html.twig");
    }
}
