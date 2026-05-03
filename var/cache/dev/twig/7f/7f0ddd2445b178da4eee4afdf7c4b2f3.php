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

/* main/index.html.twig */
class __TwigTemplate_50dc215cf76beca6362094f85b5cd489 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

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

        yield "Portfolio | Clément SANCHIS
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<section id=\"accueil\" class=\"hero-section\">
\t\t<h1 class=\"main-title\">Clément
\t\t\t<span class=\"text-cyan\">SANCHIS</span>
\t\t</h1>
\t\t<h2 class=\"h3 fw-light\">Étudiant en
\t\t\t<span class=\"text-white fw-bold\">BTS SIO</span>
\t\t\t- Option SLAM</h2>
\t</section>

\t<section id=\"profil\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-4\">
\t\t\t<i class=\"fas fa-user me-3\"></i>Profil</h2>
\t\t<div class=\"profile-content\">
\t\t\t<p class=\"lead\">Je suis un étudiant en 2ème année de BTS Services Informatiques aux Organisations option SLAM au Lycée Emile Peytavin à Mende.
\t\t\t\t<br><br>Je vous propose sur ce portfolio de retrouver ci-dessous mon parcours, les projets personnels et professionnels que j'ai pu entreprendre durant mes stages.
\t\t\t\t<br>Et vous retrouverez ci-dessous mon CV.</p>

\t\t\t";
        // line 25
        yield "\t\t\t<div class=\"mt-4\">
\t\t\t\t<a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/CV_Clement_Sanchis.pdf"), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-cyan px-4 py-2\">
\t\t\t\t\t<i class=\"fas fa-file-pdf me-2\"></i>Voir mon CV (PDF)
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"parcours\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-5\">
\t\t\t<i class=\"fas fa-graduation-cap me-3\"></i>Parcours</h2>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 border-end border-secondary\">
\t\t\t\t<h4 class=\"mb-4 text-white\">
\t\t\t\t\t<i class=\"fas fa-school me-2 text-cyan\"></i>Formation
\t\t\t\t</h4>

\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t<span class=\"badge bg-cyan text-dark\">Sept 2024 - Juin 2026</span>
\t\t\t\t\t<h5 class=\"mt-2\">BTS SIO - Option SLAM</h5>
\t\t\t\t\t<p>Lycée Emile Peytavin, Mende</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t<span class=\"badge bg-cyan text-dark\">Sept 2018 - Juin 2019</span>
\t\t\t\t\t<h5 class=\"mt-2\">Baccalauréat Économique et Social</h5>
\t\t\t\t\t<p>Lycée Jean François Champollion, Lattes</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6 ps-md-4\">
\t\t\t\t<h4 class=\"mb-4 text-white\">
\t\t\t\t\t<i class=\"fas fa-briefcase me-2 text-warning\"></i>Expériences
\t\t\t\t</h4>

\t\t\t\t<div class=\"timeline-item mb-4\">
\t\t\t\t\t<span class=\"badge bg-warning text-dark\">Janv 2026 - Fév 2026</span>
\t\t\t\t\t<h5 class=\"mt-2\">Stage Développement Web</h5>
\t\t\t\t\t<p>Conseil Départemental - Service Informatique (Mende)</p>
\t\t\t\t\t<p class=\"small\">Modernisation d'une application interne de gestion des fournitures. Passage d'un code PHP brut vers une structure plus moderne.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t<span class=\"badge bg-warning text-dark\">Mai 2025 - Juin 2025</span>
\t\t\t\t\t<h5 class=\"mt-2\">Stage Développement Web</h5>
\t\t\t\t\t<p>PETR du Pays du Gévaudan (Marvejols)</p>
\t\t\t\t\t<p class=\"small\">Amélioration du site Web sous WordPress et ajout d'une carte interactive pour le territoire.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 79
        yield "    <section id=\"projets\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-5\">
\t\t\t<i class=\"fas fa-code me-3\"></i>Projets
\t\t</h2>

\t\t<div class=\"row align-items-center g-0\"> ";
        // line 85
        yield "\t\t\t<div class=\"col-lg-5\"> ";
        // line 86
        yield "\t\t\t\t<div class=\"projet-stack\">
\t\t\t\t\t<div class=\"stack-card card-1\">
\t\t\t\t\t\t<img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" alt=\"Projets Scolaires\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stack-card card-2\">
\t\t\t\t\t\t<img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" alt=\"Projets Personnels\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stack-card card-3\">
\t\t\t\t\t\t<img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" alt=\"Projets Professionnels\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-7 ps-lg-5\"> ";
        // line 100
        yield "\t\t\t\t<h3 class=\"fs-2 fw-bold text-cyan mb-2\">Découvrez mes projets</h3>
\t\t\t\t<p class=\"mb-4 small\">Explorez mes différentes réalisations classées par catégories</p>

\t\t\t\t<div class=\"category-list\">
\t\t\t\t\t<a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projets");
        yield "#projets-scolaires\" class=\"category-item\">
\t\t\t\t\t\t<div class=\"category-icon\"><i class=\"fas fa-graduation-cap\"></i></div>
\t\t\t\t\t\t<div class=\"category-text\">
\t\t\t\t\t\t\t<h5>Projets Scolaires</h5>
\t\t\t\t\t\t\t<p>Travaux réalisés pendant ma formation</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<i class=\"fas fa-arrow-right arrow\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"veille\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-4\">
\t\t\t<i class=\"fas fa-search me-3\"></i>Veille Technologique</h2>
\t\t<p>Suivi des évolutions du framework Symfony et de l'IA en développement.</p>
\t</section>

\t<section id=\"contact\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-5\">
\t\t\t<i class=\"fas fa-envelope me-3\"></i>Contact</h2>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"contact-box p-4 mb-4\">
\t\t\t\t\t<h4 class=\"text-white mb-4\">Mes coordonnées</h4>

\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t<i class=\"fas fa-envelope text-cyan me-3\"></i>
\t\t\t\t\t\t<span class=\"text-white\">sanchisclement5@gmail.com</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t<i class=\"fas fa-phone text-cyan me-3\"></i>
\t\t\t\t\t\t<span class=\"text-white\">06 05 09 10 68</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt text-cyan me-3\"></i>
\t\t\t\t\t\t<span class=\"text-white\">La Grande-Motte (34280)</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"social-icons mb-4\">
\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/clement-sanchis-2b989b196\" target=\"_blank\" class=\"text-white fs-4 me-3\">
\t\t\t\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"map\" style=\"height: 250px; border-radius: 10px;\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-7\">
\t\t\t\t";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "flashes", ["success"], "method", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 159
            yield "\t\t\t\t\t<div class=\"alert alert-success bg-dark text-cyan border-cyan mb-4\">
\t\t\t\t\t\t";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "\t\t\t\t";
        // line 164
        yield "\t\t\t\t";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 164, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form"]]);
        yield "

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 167, $this->source); })()), "nom", [], "any", false, false, false, 167), 'widget');
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 171, $this->source); })()), "email", [], "any", false, false, false, 171), 'widget');
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 175, $this->source); })()), "message", [], "any", false, false, false, 175), 'widget');
        yield "
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn btn-cyan w-100 py-3 fw-bold\">Envoyer</button>

\t\t\t\t";
        // line 180
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 180, $this->source); })()), 'form_end');
        yield "
\t\t\t</div>
\t\t</div>
\t</section>
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
        return "main/index.html.twig";
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
        return array (  321 => 180,  313 => 175,  306 => 171,  299 => 167,  292 => 164,  290 => 163,  281 => 160,  278 => 159,  274 => 158,  217 => 104,  211 => 100,  203 => 94,  197 => 91,  191 => 88,  187 => 86,  185 => 85,  178 => 79,  123 => 26,  120 => 25,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio | Clément SANCHIS
{% endblock %}

{% block body %}
\t<section id=\"accueil\" class=\"hero-section\">
\t\t<h1 class=\"main-title\">Clément
\t\t\t<span class=\"text-cyan\">SANCHIS</span>
\t\t</h1>
\t\t<h2 class=\"h3 fw-light\">Étudiant en
\t\t\t<span class=\"text-white fw-bold\">BTS SIO</span>
\t\t\t- Option SLAM</h2>
\t</section>

\t<section id=\"profil\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-4\">
\t\t\t<i class=\"fas fa-user me-3\"></i>Profil</h2>
\t\t<div class=\"profile-content\">
\t\t\t<p class=\"lead\">Je suis un étudiant en 2ème année de BTS Services Informatiques aux Organisations option SLAM au Lycée Emile Peytavin à Mende.
\t\t\t\t<br><br>Je vous propose sur ce portfolio de retrouver ci-dessous mon parcours, les projets personnels et professionnels que j'ai pu entreprendre durant mes stages.
\t\t\t\t<br>Et vous retrouverez ci-dessous mon CV.</p>

\t\t\t{# Ajout du bouton CV #}
\t\t\t<div class=\"mt-4\">
\t\t\t\t<a href=\"{{ asset('pdf/CV_Clement_Sanchis.pdf') }}\" target=\"_blank\" class=\"btn btn-cyan px-4 py-2\">
\t\t\t\t\t<i class=\"fas fa-file-pdf me-2\"></i>Voir mon CV (PDF)
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"parcours\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-5\">
\t\t\t<i class=\"fas fa-graduation-cap me-3\"></i>Parcours</h2>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 border-end border-secondary\">
\t\t\t\t<h4 class=\"mb-4 text-white\">
\t\t\t\t\t<i class=\"fas fa-school me-2 text-cyan\"></i>Formation
\t\t\t\t</h4>

\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t<span class=\"badge bg-cyan text-dark\">Sept 2024 - Juin 2026</span>
\t\t\t\t\t<h5 class=\"mt-2\">BTS SIO - Option SLAM</h5>
\t\t\t\t\t<p>Lycée Emile Peytavin, Mende</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t<span class=\"badge bg-cyan text-dark\">Sept 2018 - Juin 2019</span>
\t\t\t\t\t<h5 class=\"mt-2\">Baccalauréat Économique et Social</h5>
\t\t\t\t\t<p>Lycée Jean François Champollion, Lattes</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6 ps-md-4\">
\t\t\t\t<h4 class=\"mb-4 text-white\">
\t\t\t\t\t<i class=\"fas fa-briefcase me-2 text-warning\"></i>Expériences
\t\t\t\t</h4>

\t\t\t\t<div class=\"timeline-item mb-4\">
\t\t\t\t\t<span class=\"badge bg-warning text-dark\">Janv 2026 - Fév 2026</span>
\t\t\t\t\t<h5 class=\"mt-2\">Stage Développement Web</h5>
\t\t\t\t\t<p>Conseil Départemental - Service Informatique (Mende)</p>
\t\t\t\t\t<p class=\"small\">Modernisation d'une application interne de gestion des fournitures. Passage d'un code PHP brut vers une structure plus moderne.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t<span class=\"badge bg-warning text-dark\">Mai 2025 - Juin 2025</span>
\t\t\t\t\t<h5 class=\"mt-2\">Stage Développement Web</h5>
\t\t\t\t\t<p>PETR du Pays du Gévaudan (Marvejols)</p>
\t\t\t\t\t<p class=\"small\">Amélioration du site Web sous WordPress et ajout d'une carte interactive pour le territoire.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t{# --- SECTION PRINCIPALE PROJETS (Ta base actuelle) --- #}
    <section id=\"projets\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-5\">
\t\t\t<i class=\"fas fa-code me-3\"></i>Projets
\t\t</h2>

\t\t<div class=\"row align-items-center g-0\"> {# g-0 pour enlever les gouttières excessives #}
\t\t\t<div class=\"col-lg-5\"> {# On réduit à 5 colonnes #}
\t\t\t\t<div class=\"projet-stack\">
\t\t\t\t\t<div class=\"stack-card card-1\">
\t\t\t\t\t\t<img src=\"{{ asset('img/correction.jpg') }}\" alt=\"Projets Scolaires\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stack-card card-2\">
\t\t\t\t\t\t<img src=\"{{ asset('img/correction.jpg') }}\" alt=\"Projets Personnels\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stack-card card-3\">
\t\t\t\t\t\t<img src=\"{{ asset('img/correction.jpg') }}\" alt=\"Projets Professionnels\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-7 ps-lg-5\"> {# On donne 7 colonnes au texte #}
\t\t\t\t<h3 class=\"fs-2 fw-bold text-cyan mb-2\">Découvrez mes projets</h3>
\t\t\t\t<p class=\"mb-4 small\">Explorez mes différentes réalisations classées par catégories</p>

\t\t\t\t<div class=\"category-list\">
\t\t\t\t\t<a href=\"{{ path('app_projets') }}#projets-scolaires\" class=\"category-item\">
\t\t\t\t\t\t<div class=\"category-icon\"><i class=\"fas fa-graduation-cap\"></i></div>
\t\t\t\t\t\t<div class=\"category-text\">
\t\t\t\t\t\t\t<h5>Projets Scolaires</h5>
\t\t\t\t\t\t\t<p>Travaux réalisés pendant ma formation</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<i class=\"fas fa-arrow-right arrow\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"veille\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-4\">
\t\t\t<i class=\"fas fa-search me-3\"></i>Veille Technologique</h2>
\t\t<p>Suivi des évolutions du framework Symfony et de l'IA en développement.</p>
\t</section>

\t<section id=\"contact\" class=\"py-5\">
\t\t<h2 class=\"text-cyan mb-5\">
\t\t\t<i class=\"fas fa-envelope me-3\"></i>Contact</h2>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"contact-box p-4 mb-4\">
\t\t\t\t\t<h4 class=\"text-white mb-4\">Mes coordonnées</h4>

\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t<i class=\"fas fa-envelope text-cyan me-3\"></i>
\t\t\t\t\t\t<span class=\"text-white\">sanchisclement5@gmail.com</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t<i class=\"fas fa-phone text-cyan me-3\"></i>
\t\t\t\t\t\t<span class=\"text-white\">06 05 09 10 68</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt text-cyan me-3\"></i>
\t\t\t\t\t\t<span class=\"text-white\">La Grande-Motte (34280)</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"social-icons mb-4\">
\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/clement-sanchis-2b989b196\" target=\"_blank\" class=\"text-white fs-4 me-3\">
\t\t\t\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"map\" style=\"height: 250px; border-radius: 10px;\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-7\">
\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<div class=\"alert alert-success bg-dark text-cyan border-cyan mb-4\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t{# On ouvre le formulaire généré par le helper Symfony #}
\t\t\t\t{{ form_start(contactForm, {'attr': {'class': 'contact-form'}}) }}

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_widget(contactForm.nom) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_widget(contactForm.email) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_widget(contactForm.message) }}
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn btn-cyan w-100 py-3 fw-bold\">Envoyer</button>

\t\t\t\t{{ form_end(contactForm) }}
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "main/index.html.twig", "P:\\cours\\html\\Portfolio\\templates\\main\\index.html.twig");
    }
}
