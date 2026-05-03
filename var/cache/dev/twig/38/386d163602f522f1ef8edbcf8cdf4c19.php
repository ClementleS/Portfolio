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
class __TwigTemplate_9e955da6b275a46be54933ab8eb73bc0 extends Template
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
        yield "    <section id=\"accueil\" class=\"hero-section\">
        <div class=\"hero-content\">
            <p class=\"hero-label\">Portfolio — BTS SIO SLAM</p>
            <h1 class=\"main-title\">Clément
                <span class=\"text-cyan\">SANCHIS</span>
            </h1>
            <h2 class=\"h3 fw-light hero-subtitle\">Étudiant en
                <span class=\"text-white fw-bold\">BTS SIO</span>
                — Option SLAM
            </h2>

            <div class=\"hero-tags mt-4\">
                <span class=\"hero-tag\"><i class=\"fab fa-codeigniter me-1\"></i>CodeIgniter</span>
                <span class=\"hero-tag\"><i class=\"fab fa-php me-1\"></i>PHP</span>
                <span class=\"hero-tag\"><i class=\"fas fa-shield-alt me-1\"></i>Cybersecurité</span>
                <span class=\"hero-tag\"><i class=\"fab fa-java me-1\"></i>Java</span>
                <span class=\"hero-tag\"><i class=\"fab fa-git-alt me-1\"></i>GitHub</span>
            </div>

            <div class=\"hero-actions mt-5\">
                <a href=\"#profil\" class=\"btn btn-cyan px-4 py-2 me-3\">
                    <i class=\"fas fa-user me-2\"></i>Découvrir mon profil
                </a>
                <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/CV_Clement_Sanchis.pdf"), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-outline-cyan px-4 py-2\">
                    <i class=\"fas fa-file-pdf me-2\"></i>Mon CV
                </a>
            </div>
        </div>

        <div class=\"hero-scroll-hint\">
            <span>Défiler</span>
            <i class=\"fas fa-chevron-down\"></i>
        </div>
    </section>

    <section id=\"profil\" class=\"py-5\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-user me-3\"></i>Profil
        </h2>

        <div class=\"profil-grid\">

            ";
        // line 50
        yield "            <div class=\"profil-text\">
                <p class=\"lead mb-4\">Je suis étudiant en <strong class=\"text-white\">2ème année de BTS SIO option SLAM</strong> au Lycée Émile Peytavin à Mende. Ce portfolio regroupe notamment mon parcours, mes projets scolaires, personnels et professionnels réalisés en stage.</p>

                <div class=\"profil-highlights\">
                    <div class=\"profil-highlight-item\">
                        <i class=\"fas fa-map-marker-alt text-cyan\"></i>
                        <span>Lycée Émile Peytavin, Mende (48)</span>
                    </div>
                    <div class=\"profil-highlight-item\">
                        <i class=\"fas fa-calendar-alt text-cyan\"></i>
                        <span>Promotion 2024 – 2026</span>
                    </div>
                    <div class=\"profil-highlight-item\">
                        <i class=\"fas fa-code text-cyan\"></i>
                        <span>Spécialisation développement web &amp; applications</span>
                    </div>
                    <div class=\"profil-highlight-item\">
                        <i class=\"fas fa-language text-cyan\"></i>
                        <span>Français natif — Anglais technique</span>
                    </div>
                </div>

                <div class=\"mt-4\">
                    <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/CV_Clement_Sanchis.pdf"), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-cyan px-4 py-2\">
                        <i class=\"fas fa-file-pdf me-2\"></i>Voir mon CV (PDF)
                    </a>
                </div>
            </div>

            ";
        // line 80
        yield "            <div class=\"profil-stats\">
                <div class=\"card-stat\">
                    <div class=\"stat-icon\"><i class=\"fas fa-briefcase text-cyan\"></i></div>
                    <div class=\"stat-number\">2</div>
                    <div class=\"stat-label\">Stages réalisés</div>
                </div>
                <div class=\"card-stat\">
                    <div class=\"stat-icon\"><i class=\"fas fa-code-branch text-cyan\"></i></div>
                    <div class=\"stat-number\">5+</div>
                    <div class=\"stat-label\">Projets développés</div>
                </div>
                <div class=\"card-stat\">
                    <div class=\"stat-icon\"><i class=\"fas fa-layer-group text-cyan\"></i></div>
                    <div class=\"stat-number\">6+</div>
                    <div class=\"stat-label\">Technologies maîtrisées</div>
                </div>
                <div class=\"card-stat\">
                    <div class=\"stat-icon\"><i class=\"fas fa-graduation-cap text-cyan\"></i></div>
                    <div class=\"stat-number\">2</div>
                    <div class=\"stat-label\">Ans de formation</div>
                </div>
            </div>

        </div>
    </section>

    <section id=\"parcours\" class=\"py-5\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-graduation-cap me-3\"></i>Parcours
        </h2>

        <div class=\"row g-0\">
            <div class=\"col-md-6 pe-md-4\" style=\"border-right: 1px solid #3d3d3d;\">
                <h4 class=\"mb-4 text-white\">
                    <i class=\"fas fa-school me-2 text-cyan\"></i>Formation
                </h4>

                <div class=\"timeline-item\">
                    <span class=\"badge bg-cyan text-dark\">Sept 2024 - Juin 2026</span>
                    <h5 class=\"mt-2\">BTS SIO - Option SLAM</h5>
                    <p>Lycée Emile Peytavin, Mende</p>
                </div>

                <div class=\"timeline-item\">
                    <span class=\"badge bg-cyan text-dark\">Sept 2018 - Juin 2019</span>
                    <h5 class=\"mt-2\">Baccalauréat Économique et Social</h5>
                    <p>Lycée Jean François Champollion, Lattes</p>
                </div>
            </div>

            <div class=\"col-md-6 ps-md-4\">
                <h4 class=\"mb-4 text-white\">
                    <i class=\"fas fa-briefcase me-2 text-warning\"></i>Expériences
                </h4>

                <div class=\"timeline-item mb-4\">
                    <span class=\"badge bg-warning text-dark\">Janv 2026 - Fév 2026</span>
                    <h5 class=\"mt-2\">Stage Développement Web</h5>
                    <p>Conseil Départemental - Service Informatique (Mende)</p>
                    <p class=\"small\">Modernisation d'une application interne de gestion des fournitures.</p>
                </div>

                <div class=\"timeline-item\">
                    <span class=\"badge bg-warning text-dark\">Mai 2025 - Juin 2025</span>
                    <h5 class=\"mt-2\">Stage Développement Web</h5>
                    <p>PETR du Pays du Gévaudan (Marvejols)</p>
                    <p class=\"small\">Amélioration du site Web sous WordPress et ajout d'une carte interactive.</p>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 153
        yield "    <section id=\"projets\" class=\"py-5\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-code me-3\"></i>Projets
        </h2>

        <div class=\"projects-showcase\">
            <div class=\"projects-images\">
                <div class=\"project-image-container\">
                    <img src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" alt=\"Projet 1\" class=\"project-image\">
                    <div class=\"project-image-caption\">
                        <h3>Nom du projet</h3>
                        <p>Courte description</p>
                    </div>
                </div>
                <div class=\"project-image-container\">
                    <img src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" alt=\"Projet 2\" class=\"project-image\">
                    <div class=\"project-image-caption\">
                        <h3>Nom du projet</h3>
                        <p>Courte description</p>
                    </div>
                </div>
                <div class=\"project-image-container\">
                    <img src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/correction.jpg"), "html", null, true);
        yield "\" alt=\"Projet 3\" class=\"project-image\">
                    <div class=\"project-image-caption\">
                        <h3>Nom du projet</h3>
                        <p>Courte description</p>
                    </div>
                </div>
            </div>

            <div class=\"projects-navigation\">
                <h3>Découvrez mes projets</h3>
                <p>Explorez mes différentes réalisations classées par catégories</p>

                <div class=\"projects-buttons\">
                    <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projets");
        yield "#projets-scolaires\" class=\"project-nav-btn\">
                        <span class=\"btn-icon\"><i class=\"fas fa-graduation-cap\"></i></span>
                        <span class=\"btn-text\">
                            <span class=\"btn-title\">Projets Scolaires</span>
                            <span class=\"btn-description\">Travaux réalisés pendant ma formation</span>
                        </span>
                        <span class=\"btn-arrow\"><i class=\"fas fa-arrow-right\"></i></span>
                    </a>
                    <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projets");
        yield "#projets-persos\" class=\"project-nav-btn\">
                        <span class=\"btn-icon\"><i class=\"fas fa-user\"></i></span>
                        <span class=\"btn-text\">
                            <span class=\"btn-title\">Projets Personnels</span>
                            <span class=\"btn-description\">Mes réalisations personnelles</span>
                        </span>
                        <span class=\"btn-arrow\"><i class=\"fas fa-arrow-right\"></i></span>
                    </a>
                    <a href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projets");
        yield "#projets-pros\" class=\"project-nav-btn\">
                        <span class=\"btn-icon\"><i class=\"fas fa-briefcase\"></i></span>
                        <span class=\"btn-text\">
                            <span class=\"btn-title\">Projets Professionnels</span>
                            <span class=\"btn-description\">Projets réalisés en entreprise</span>
                        </span>
                        <span class=\"btn-arrow\"><i class=\"fas fa-arrow-right\"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id=\"veille\" class=\"py-5\">
        <h2 class=\"text-cyan mb-2\">
            <i class=\"fas fa-search me-3\"></i>Veille Technologique
        </h2>
        <p class=\"mb-5\">Suivi des évolutions du framework Symfony et de l'IA en développement.</p>

        ";
        // line 224
        yield "        <div class=\"veille-intro mb-5\">
            <div class=\"veille-intro-text\">
                <h3 class=\"text-cyan mb-1\">Thème</h3>
                <p class=\"veille-intro-theme\">Technologies appliquées au domaine militaire</p>
            </div>

            <div class=\"veille-intro-cards\">
                <div class=\"veille-intro-card\">
                    <div class=\"veille-intro-card-icon\">
                        <i class=\"fas fa-question-circle\"></i>
                    </div>
                    <div>
                        <h6>Pourquoi ce choix ?</h6>
                        <p>Conflit russo-ukrainien — drones, cyberguerre, innovations civiles détournées à des fins militaires.</p>
                    </div>
                </div>
                <div class=\"veille-intro-card\">
                    <div class=\"veille-intro-card-icon\">
                        <i class=\"fas fa-shield-alt\"></i>
                    </div>
                    <div>
                        <h6>Lien avec la cybersécurité</h6>
                        <p>Comprendre comment les technologies civiles sont optimisées pour la défense.</p>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 253
        yield "        <div class=\"veille-timeline mb-5\">

            <div class=\"veille-step\">
                <div class=\"veille-step-inner\">
                    <div class=\"veille-step-icon\">
                        <i class=\"fas fa-search\"></i>
                    </div>
                    <h5>Phase 1 — Découverte</h5>
                    <p>Google Alerts avec mots-clés ciblés</p>
                </div>
            </div>

            <div class=\"veille-step\">
                <div class=\"veille-step-inner\">
                    <div class=\"veille-step-icon\">
                        <i class=\"fas fa-rss\"></i>
                    </div>
                    <h5>Phase 2 — Expérimentation</h5>
                    <p>Feedly, Inoreader, extension Feedbro</p>
                </div>
            </div>

            <div class=\"veille-step\">
                <div class=\"veille-step-inner\">
                    <div class=\"veille-step-icon\">
                        <i class=\"fas fa-filter\"></i>
                    </div>
                    <h5>Phase 3 — Optimisation</h5>
                    <p>siftRSS + Zotero pour filtrage granulaire &amp; archivage</p>
                </div>
            </div>

            <div class=\"veille-step veille-step--last\">
                <div class=\"veille-step-inner\">
                    <div class=\"veille-step-icon\">
                        <i class=\"fas fa-check\"></i>
                    </div>
                    <h5>Phase 4 — Aujourd'hui</h5>
                    <p>Flux RSS automatisés &amp; alertes ciblées</p>
                </div>
            </div>

        </div>

        ";
        // line 298
        yield "        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"veille-card\">
                    <div class=\"veille-card-header\">
                        <i class=\"fas fa-bell text-cyan me-2\"></i>
                        <span>Google Alerts</span>
                    </div>
                    <div class=\"veille-card-body\">
                        <p class=\"small mb-2\">Mots-clés surveillés :</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">Symfony</span>
                            <span class=\"badge border border-secondary text-white\">Intelligence Artificielle</span>
                            <span class=\"badge border border-secondary text-white\">PHP 8</span>
                            <span class=\"badge border border-secondary text-white\">Machine Learning</span>
                            <span class=\"badge border border-secondary text-white\">API REST</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"veille-card\">
                    <div class=\"veille-card-header\">
                        <i class=\"fas fa-rss text-cyan me-2\"></i>
                        <span>Feedly — Flux RSS</span>
                    </div>
                    <div class=\"veille-card-body\">
                        <p class=\"small mb-2\">Sources suivies :</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">symfony.com/blog</span>
                            <span class=\"badge border border-secondary text-white\">dev.to</span>
                            <span class=\"badge border border-secondary text-white\">lemonde.fr/IA</span>
                            <span class=\"badge border border-secondary text-white\">korben.info</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"veille-card\">
                    <div class=\"veille-card-header\">
                        <i class=\"fas fa-filter text-cyan me-2\"></i>
                        <span>siftRSS — Filtrage</span>
                    </div>
                    <div class=\"veille-card-body\">
                        <p class=\"small\">Filtrage granulaire des flux RSS par mots-clés pour ne conserver que les articles pertinents avant import dans Feedly.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"veille-card\">
                    <div class=\"veille-card-header\">
                        <i class=\"fas fa-archive text-cyan me-2\"></i>
                        <span>Zotero — Archivage</span>
                    </div>
                    <div class=\"veille-card-body\">
                        <p class=\"small\">Sauvegarde et organisation des articles retenus avec notes personnelles, citations et export bibliographique.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id=\"contact\" class=\"py-5\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-envelope me-3\"></i>Contact
        </h2>

        <div class=\"row g-4 align-items-start\">

            ";
        // line 372
        yield "            <div class=\"col-md-5\">
                <div class=\"contact-box p-4\">
                    <h4 class=\"text-white mb-4\">Mes coordonnées</h4>

                    <div class=\"d-flex align-items-center mb-3\">
                        <i class=\"fas fa-envelope text-cyan me-3\"></i>
                        <span class=\"text-white\">sanchisclement5@gmail.com</span>
                    </div>
                    <div class=\"d-flex align-items-center mb-3\">
                        <i class=\"fas fa-phone text-cyan me-3\"></i>
                        <span class=\"text-white\">06 05 09 10 68</span>
                    </div>
                    <div class=\"d-flex align-items-center mb-4\">
                        <i class=\"fas fa-map-marker-alt text-cyan me-3\"></i>
                        <span class=\"text-white\">La Grande-Motte (34280)</span>
                    </div>

                    <div class=\"social-icons mb-4\">
                        <a href=\"https://www.linkedin.com/in/clement-sanchis-2b989b196\" target=\"_blank\" class=\"text-white fs-4\">
                            <i class=\"fab fa-linkedin\"></i>
                        </a>
                    </div>

                    <div id=\"map\" style=\"height: 250px; border-radius: 10px;\"></div>
                </div>
            </div>

            ";
        // line 400
        yield "            <div class=\"col-md-7\">
                ";
        // line 401
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "flashes", ["success"], "method", false, false, false, 401));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 402
            yield "                    <div class=\"alert alert-success bg-dark text-cyan border-cyan mb-4\">
                        ";
            // line 403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        yield "
                ";
        // line 407
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 407, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form"]]);
        yield "
                    <div class=\"mb-3\">
                        ";
        // line 409
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 409, $this->source); })()), "nom", [], "any", false, false, false, 409), 'widget');
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 412
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 412, $this->source); })()), "email", [], "any", false, false, false, 412), 'widget');
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 415
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 415, $this->source); })()), "message", [], "any", false, false, false, 415), 'widget');
        yield "
                    </div>
                    <button type=\"submit\" class=\"btn btn-cyan w-100 py-3 fw-bold\">Envoyer</button>
                ";
        // line 418
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 418, $this->source); })()), 'form_end');
        yield "
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
        return array (  571 => 418,  565 => 415,  559 => 412,  553 => 409,  548 => 407,  545 => 406,  536 => 403,  533 => 402,  529 => 401,  526 => 400,  497 => 372,  422 => 298,  376 => 253,  346 => 224,  324 => 204,  313 => 196,  302 => 188,  286 => 175,  276 => 168,  266 => 161,  256 => 153,  182 => 80,  173 => 73,  148 => 50,  126 => 30,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio | Clément SANCHIS
{% endblock %}

{% block body %}
    <section id=\"accueil\" class=\"hero-section\">
        <div class=\"hero-content\">
            <p class=\"hero-label\">Portfolio — BTS SIO SLAM</p>
            <h1 class=\"main-title\">Clément
                <span class=\"text-cyan\">SANCHIS</span>
            </h1>
            <h2 class=\"h3 fw-light hero-subtitle\">Étudiant en
                <span class=\"text-white fw-bold\">BTS SIO</span>
                — Option SLAM
            </h2>

            <div class=\"hero-tags mt-4\">
                <span class=\"hero-tag\"><i class=\"fab fa-codeigniter me-1\"></i>CodeIgniter</span>
                <span class=\"hero-tag\"><i class=\"fab fa-php me-1\"></i>PHP</span>
                <span class=\"hero-tag\"><i class=\"fas fa-shield-alt me-1\"></i>Cybersecurité</span>
                <span class=\"hero-tag\"><i class=\"fab fa-java me-1\"></i>Java</span>
                <span class=\"hero-tag\"><i class=\"fab fa-git-alt me-1\"></i>GitHub</span>
            </div>

            <div class=\"hero-actions mt-5\">
                <a href=\"#profil\" class=\"btn btn-cyan px-4 py-2 me-3\">
                    <i class=\"fas fa-user me-2\"></i>Découvrir mon profil
                </a>
                <a href=\"{{ asset('pdf/CV_Clement_Sanchis.pdf') }}\" target=\"_blank\" class=\"btn btn-outline-cyan px-4 py-2\">
                    <i class=\"fas fa-file-pdf me-2\"></i>Mon CV
                </a>
            </div>
        </div>

        <div class=\"hero-scroll-hint\">
            <span>Défiler</span>
            <i class=\"fas fa-chevron-down\"></i>
        </div>
    </section>

    <section id=\"profil\" class=\"py-5\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-user me-3\"></i>Profil
        </h2>

        <div class=\"profil-grid\">

            {# --- Colonne gauche : texte --- #}
            <div class=\"profil-text\">
                <p class=\"lead mb-4\">Je suis étudiant en <strong class=\"text-white\">2ème année de BTS SIO option SLAM</strong> au Lycée Émile Peytavin à Mende. Ce portfolio regroupe notamment mon parcours, mes projets scolaires, personnels et professionnels réalisés en stage.</p>

                <div class=\"profil-highlights\">
                    <div class=\"profil-highlight-item\">
                        <i class=\"fas fa-map-marker-alt text-cyan\"></i>
                        <span>Lycée Émile Peytavin, Mende (48)</span>
                    </div>
                    <div class=\"profil-highlight-item\">
                        <i class=\"fas fa-calendar-alt text-cyan\"></i>
                        <span>Promotion 2024 – 2026</span>
                    </div>
                    <div class=\"profil-highlight-item\">
                        <i class=\"fas fa-code text-cyan\"></i>
                        <span>Spécialisation développement web &amp; applications</span>
                    </div>
                    <div class=\"profil-highlight-item\">
                        <i class=\"fas fa-language text-cyan\"></i>
                        <span>Français natif — Anglais technique</span>
                    </div>
                </div>

                <div class=\"mt-4\">
                    <a href=\"{{ asset('pdf/CV_Clement_Sanchis.pdf') }}\" target=\"_blank\" class=\"btn btn-cyan px-4 py-2\">
                        <i class=\"fas fa-file-pdf me-2\"></i>Voir mon CV (PDF)
                    </a>
                </div>
            </div>

            {# --- Colonne droite : stats --- #}
            <div class=\"profil-stats\">
                <div class=\"card-stat\">
                    <div class=\"stat-icon\"><i class=\"fas fa-briefcase text-cyan\"></i></div>
                    <div class=\"stat-number\">2</div>
                    <div class=\"stat-label\">Stages réalisés</div>
                </div>
                <div class=\"card-stat\">
                    <div class=\"stat-icon\"><i class=\"fas fa-code-branch text-cyan\"></i></div>
                    <div class=\"stat-number\">5+</div>
                    <div class=\"stat-label\">Projets développés</div>
                </div>
                <div class=\"card-stat\">
                    <div class=\"stat-icon\"><i class=\"fas fa-layer-group text-cyan\"></i></div>
                    <div class=\"stat-number\">6+</div>
                    <div class=\"stat-label\">Technologies maîtrisées</div>
                </div>
                <div class=\"card-stat\">
                    <div class=\"stat-icon\"><i class=\"fas fa-graduation-cap text-cyan\"></i></div>
                    <div class=\"stat-number\">2</div>
                    <div class=\"stat-label\">Ans de formation</div>
                </div>
            </div>

        </div>
    </section>

    <section id=\"parcours\" class=\"py-5\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-graduation-cap me-3\"></i>Parcours
        </h2>

        <div class=\"row g-0\">
            <div class=\"col-md-6 pe-md-4\" style=\"border-right: 1px solid #3d3d3d;\">
                <h4 class=\"mb-4 text-white\">
                    <i class=\"fas fa-school me-2 text-cyan\"></i>Formation
                </h4>

                <div class=\"timeline-item\">
                    <span class=\"badge bg-cyan text-dark\">Sept 2024 - Juin 2026</span>
                    <h5 class=\"mt-2\">BTS SIO - Option SLAM</h5>
                    <p>Lycée Emile Peytavin, Mende</p>
                </div>

                <div class=\"timeline-item\">
                    <span class=\"badge bg-cyan text-dark\">Sept 2018 - Juin 2019</span>
                    <h5 class=\"mt-2\">Baccalauréat Économique et Social</h5>
                    <p>Lycée Jean François Champollion, Lattes</p>
                </div>
            </div>

            <div class=\"col-md-6 ps-md-4\">
                <h4 class=\"mb-4 text-white\">
                    <i class=\"fas fa-briefcase me-2 text-warning\"></i>Expériences
                </h4>

                <div class=\"timeline-item mb-4\">
                    <span class=\"badge bg-warning text-dark\">Janv 2026 - Fév 2026</span>
                    <h5 class=\"mt-2\">Stage Développement Web</h5>
                    <p>Conseil Départemental - Service Informatique (Mende)</p>
                    <p class=\"small\">Modernisation d'une application interne de gestion des fournitures.</p>
                </div>

                <div class=\"timeline-item\">
                    <span class=\"badge bg-warning text-dark\">Mai 2025 - Juin 2025</span>
                    <h5 class=\"mt-2\">Stage Développement Web</h5>
                    <p>PETR du Pays du Gévaudan (Marvejols)</p>
                    <p class=\"small\">Amélioration du site Web sous WordPress et ajout d'une carte interactive.</p>
                </div>
            </div>
        </div>
    </section>

    {# --- SECTION PRINCIPALE PROJETS (Ta base actuelle) --- #}
    <section id=\"projets\" class=\"py-5\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-code me-3\"></i>Projets
        </h2>

        <div class=\"projects-showcase\">
            <div class=\"projects-images\">
                <div class=\"project-image-container\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" alt=\"Projet 1\" class=\"project-image\">
                    <div class=\"project-image-caption\">
                        <h3>Nom du projet</h3>
                        <p>Courte description</p>
                    </div>
                </div>
                <div class=\"project-image-container\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" alt=\"Projet 2\" class=\"project-image\">
                    <div class=\"project-image-caption\">
                        <h3>Nom du projet</h3>
                        <p>Courte description</p>
                    </div>
                </div>
                <div class=\"project-image-container\">
                    <img src=\"{{ asset('img/correction.jpg') }}\" alt=\"Projet 3\" class=\"project-image\">
                    <div class=\"project-image-caption\">
                        <h3>Nom du projet</h3>
                        <p>Courte description</p>
                    </div>
                </div>
            </div>

            <div class=\"projects-navigation\">
                <h3>Découvrez mes projets</h3>
                <p>Explorez mes différentes réalisations classées par catégories</p>

                <div class=\"projects-buttons\">
                    <a href=\"{{ path('app_projets') }}#projets-scolaires\" class=\"project-nav-btn\">
                        <span class=\"btn-icon\"><i class=\"fas fa-graduation-cap\"></i></span>
                        <span class=\"btn-text\">
                            <span class=\"btn-title\">Projets Scolaires</span>
                            <span class=\"btn-description\">Travaux réalisés pendant ma formation</span>
                        </span>
                        <span class=\"btn-arrow\"><i class=\"fas fa-arrow-right\"></i></span>
                    </a>
                    <a href=\"{{ path('app_projets') }}#projets-persos\" class=\"project-nav-btn\">
                        <span class=\"btn-icon\"><i class=\"fas fa-user\"></i></span>
                        <span class=\"btn-text\">
                            <span class=\"btn-title\">Projets Personnels</span>
                            <span class=\"btn-description\">Mes réalisations personnelles</span>
                        </span>
                        <span class=\"btn-arrow\"><i class=\"fas fa-arrow-right\"></i></span>
                    </a>
                    <a href=\"{{ path('app_projets') }}#projets-pros\" class=\"project-nav-btn\">
                        <span class=\"btn-icon\"><i class=\"fas fa-briefcase\"></i></span>
                        <span class=\"btn-text\">
                            <span class=\"btn-title\">Projets Professionnels</span>
                            <span class=\"btn-description\">Projets réalisés en entreprise</span>
                        </span>
                        <span class=\"btn-arrow\"><i class=\"fas fa-arrow-right\"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id=\"veille\" class=\"py-5\">
        <h2 class=\"text-cyan mb-2\">
            <i class=\"fas fa-search me-3\"></i>Veille Technologique
        </h2>
        <p class=\"mb-5\">Suivi des évolutions du framework Symfony et de l'IA en développement.</p>

        {# --- INTRO THÈME --- #}
        <div class=\"veille-intro mb-5\">
            <div class=\"veille-intro-text\">
                <h3 class=\"text-cyan mb-1\">Thème</h3>
                <p class=\"veille-intro-theme\">Technologies appliquées au domaine militaire</p>
            </div>

            <div class=\"veille-intro-cards\">
                <div class=\"veille-intro-card\">
                    <div class=\"veille-intro-card-icon\">
                        <i class=\"fas fa-question-circle\"></i>
                    </div>
                    <div>
                        <h6>Pourquoi ce choix ?</h6>
                        <p>Conflit russo-ukrainien — drones, cyberguerre, innovations civiles détournées à des fins militaires.</p>
                    </div>
                </div>
                <div class=\"veille-intro-card\">
                    <div class=\"veille-intro-card-icon\">
                        <i class=\"fas fa-shield-alt\"></i>
                    </div>
                    <div>
                        <h6>Lien avec la cybersécurité</h6>
                        <p>Comprendre comment les technologies civiles sont optimisées pour la défense.</p>
                    </div>
                </div>
            </div>
        </div>

        {# --- FRISE CHRONOLOGIQUE HORIZONTALE --- #}
        <div class=\"veille-timeline mb-5\">

            <div class=\"veille-step\">
                <div class=\"veille-step-inner\">
                    <div class=\"veille-step-icon\">
                        <i class=\"fas fa-search\"></i>
                    </div>
                    <h5>Phase 1 — Découverte</h5>
                    <p>Google Alerts avec mots-clés ciblés</p>
                </div>
            </div>

            <div class=\"veille-step\">
                <div class=\"veille-step-inner\">
                    <div class=\"veille-step-icon\">
                        <i class=\"fas fa-rss\"></i>
                    </div>
                    <h5>Phase 2 — Expérimentation</h5>
                    <p>Feedly, Inoreader, extension Feedbro</p>
                </div>
            </div>

            <div class=\"veille-step\">
                <div class=\"veille-step-inner\">
                    <div class=\"veille-step-icon\">
                        <i class=\"fas fa-filter\"></i>
                    </div>
                    <h5>Phase 3 — Optimisation</h5>
                    <p>siftRSS + Zotero pour filtrage granulaire &amp; archivage</p>
                </div>
            </div>

            <div class=\"veille-step veille-step--last\">
                <div class=\"veille-step-inner\">
                    <div class=\"veille-step-icon\">
                        <i class=\"fas fa-check\"></i>
                    </div>
                    <h5>Phase 4 — Aujourd'hui</h5>
                    <p>Flux RSS automatisés &amp; alertes ciblées</p>
                </div>
            </div>

        </div>

        {# --- CARTES OUTILS --- #}
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"veille-card\">
                    <div class=\"veille-card-header\">
                        <i class=\"fas fa-bell text-cyan me-2\"></i>
                        <span>Google Alerts</span>
                    </div>
                    <div class=\"veille-card-body\">
                        <p class=\"small mb-2\">Mots-clés surveillés :</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">Symfony</span>
                            <span class=\"badge border border-secondary text-white\">Intelligence Artificielle</span>
                            <span class=\"badge border border-secondary text-white\">PHP 8</span>
                            <span class=\"badge border border-secondary text-white\">Machine Learning</span>
                            <span class=\"badge border border-secondary text-white\">API REST</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"veille-card\">
                    <div class=\"veille-card-header\">
                        <i class=\"fas fa-rss text-cyan me-2\"></i>
                        <span>Feedly — Flux RSS</span>
                    </div>
                    <div class=\"veille-card-body\">
                        <p class=\"small mb-2\">Sources suivies :</p>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <span class=\"badge border border-secondary text-white\">symfony.com/blog</span>
                            <span class=\"badge border border-secondary text-white\">dev.to</span>
                            <span class=\"badge border border-secondary text-white\">lemonde.fr/IA</span>
                            <span class=\"badge border border-secondary text-white\">korben.info</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"veille-card\">
                    <div class=\"veille-card-header\">
                        <i class=\"fas fa-filter text-cyan me-2\"></i>
                        <span>siftRSS — Filtrage</span>
                    </div>
                    <div class=\"veille-card-body\">
                        <p class=\"small\">Filtrage granulaire des flux RSS par mots-clés pour ne conserver que les articles pertinents avant import dans Feedly.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"veille-card\">
                    <div class=\"veille-card-header\">
                        <i class=\"fas fa-archive text-cyan me-2\"></i>
                        <span>Zotero — Archivage</span>
                    </div>
                    <div class=\"veille-card-body\">
                        <p class=\"small\">Sauvegarde et organisation des articles retenus avec notes personnelles, citations et export bibliographique.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id=\"contact\" class=\"py-5\">
        <h2 class=\"text-cyan mb-5\">
            <i class=\"fas fa-envelope me-3\"></i>Contact
        </h2>

        <div class=\"row g-4 align-items-start\">

            {# --- Colonne gauche : coordonnées + carte --- #}
            <div class=\"col-md-5\">
                <div class=\"contact-box p-4\">
                    <h4 class=\"text-white mb-4\">Mes coordonnées</h4>

                    <div class=\"d-flex align-items-center mb-3\">
                        <i class=\"fas fa-envelope text-cyan me-3\"></i>
                        <span class=\"text-white\">sanchisclement5@gmail.com</span>
                    </div>
                    <div class=\"d-flex align-items-center mb-3\">
                        <i class=\"fas fa-phone text-cyan me-3\"></i>
                        <span class=\"text-white\">06 05 09 10 68</span>
                    </div>
                    <div class=\"d-flex align-items-center mb-4\">
                        <i class=\"fas fa-map-marker-alt text-cyan me-3\"></i>
                        <span class=\"text-white\">La Grande-Motte (34280)</span>
                    </div>

                    <div class=\"social-icons mb-4\">
                        <a href=\"https://www.linkedin.com/in/clement-sanchis-2b989b196\" target=\"_blank\" class=\"text-white fs-4\">
                            <i class=\"fab fa-linkedin\"></i>
                        </a>
                    </div>

                    <div id=\"map\" style=\"height: 250px; border-radius: 10px;\"></div>
                </div>
            </div>

            {# --- Colonne droite : formulaire --- #}
            <div class=\"col-md-7\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success bg-dark text-cyan border-cyan mb-4\">
                        {{ message }}
                    </div>
                {% endfor %}

                {{ form_start(contactForm, {'attr': {'class': 'contact-form'}}) }}
                    <div class=\"mb-3\">
                        {{ form_widget(contactForm.nom) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_widget(contactForm.email) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_widget(contactForm.message) }}
                    </div>
                    <button type=\"submit\" class=\"btn btn-cyan w-100 py-3 fw-bold\">Envoyer</button>
                {{ form_end(contactForm) }}
            </div>

        </div>
    </section>
{% endblock %}


", "main/index.html.twig", "C:\\wamp64\\www\\Portfolio\\templates\\main\\index.html.twig");
    }
}
