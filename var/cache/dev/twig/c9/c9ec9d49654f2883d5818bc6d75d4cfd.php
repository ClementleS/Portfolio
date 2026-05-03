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

/* components/sidebar.html.twig */
class __TwigTemplate_da1a12132be2d54b8ad65eaf59871c49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sidebar.html.twig"));

        // line 1
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1);
        // line 2
        yield "
<nav class=\"sidebar\">
    <div class=\"top-content\">
        <div class=\"profile-card\">
            <h2>Clément<br>SANCHIS</h2>
            <p>Étudiant en BTS SIO<br>Option SLAM</p>
        </div>

        <div class=\"nav-menu\">

            ";
        // line 13
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#accueil\" class=\"nav-link-custom ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 13, $this->source); })()) == "app_home")) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-home\"></i>
                Accueil
            </a>

            <div class=\"sub-menu\">
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#profil\" class=\"nav-link-custom\">
                    <i class=\"fas fa-user\"></i>
                    Profil
                </a>
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#parcours\" class=\"nav-link-custom\">
                    <i class=\"fas fa-graduation-cap\"></i>
                    Parcours
                </a>
            </div>

            ";
        // line 30
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#projets\" class=\"nav-link-custom ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 30, $this->source); })()) == "app_projets")) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-code\"></i>
                Projets
            </a>

            ";
        // line 36
        yield "            ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 36, $this->source); })()) == "app_projets")) {
            // line 37
            yield "                <div class=\"sub-menu\">
                    <a href=\"#projets-scolaires\" class=\"nav-link-custom sidebar-anchor\">
                        <i class=\"fas fa-graduation-cap\"></i>
                        Projets Scolaires
                    </a>
                    <a href=\"#projets-persos\" class=\"nav-link-custom sidebar-anchor\">
                        <i class=\"fas fa-user\"></i>
                        Projets Personnels
                    </a>
                    <a href=\"#projets-pros\" class=\"nav-link-custom sidebar-anchor\">
                        <i class=\"fas fa-briefcase\"></i>
                        Projets Professionnels
                    </a>
                </div>
            ";
        }
        // line 52
        yield "
            ";
        // line 54
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#veille\" class=\"nav-link-custom\">
                <i class=\"fas fa-search\"></i>
                Veille
            </a>

            ";
        // line 60
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#contact\" class=\"nav-link-custom\">
                <i class=\"fas fa-envelope\"></i>
                Contact
            </a>

        </div>
    </div>

    <div class=\"mt-auto text-center\">
        <div class=\"social-icons mb-3\">
            <a href=\"https://www.linkedin.com/in/clement-sanchis-2b989b196\" target=\"_blank\" class=\"text-white fs-3\">
                <i class=\"fab fa-linkedin\"></i>
            </a>
        </div>
        <footer class=\"small\">
            © 2026 Designed by Clément SANCHIS
        </footer>
    </div>
</nav>

";
        // line 81
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 81, $this->source); })()) == "app_projets")) {
            // line 82
            yield "<script>
    document.addEventListener('DOMContentLoaded', () => {
        const anchors = document.querySelectorAll('.sidebar-anchor');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    anchors.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, { threshold: 0.4 });

        document.querySelectorAll('section[id]').forEach(section => {
            observer.observe(section);
        });
    });
</script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/sidebar.html.twig";
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
        return array (  159 => 82,  157 => 81,  133 => 60,  124 => 54,  121 => 52,  104 => 37,  101 => 36,  90 => 30,  81 => 23,  74 => 19,  62 => 13,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set current_route = app.request.attributes.get('_route') %}

<nav class=\"sidebar\">
    <div class=\"top-content\">
        <div class=\"profile-card\">
            <h2>Clément<br>SANCHIS</h2>
            <p>Étudiant en BTS SIO<br>Option SLAM</p>
        </div>

        <div class=\"nav-menu\">

            {# --- Accueil --- #}
            <a href=\"{{ path('app_home') }}#accueil\" class=\"nav-link-custom {{ current_route == 'app_home' ? 'active' : '' }}\">
                <i class=\"fas fa-home\"></i>
                Accueil
            </a>

            <div class=\"sub-menu\">
                <a href=\"{{ path('app_home') }}#profil\" class=\"nav-link-custom\">
                    <i class=\"fas fa-user\"></i>
                    Profil
                </a>
                <a href=\"{{ path('app_home') }}#parcours\" class=\"nav-link-custom\">
                    <i class=\"fas fa-graduation-cap\"></i>
                    Parcours
                </a>
            </div>

            {# --- Projets : pointe vers app_projets pour que active fonctionne --- #}
            <a href=\"{{ path('app_home') }}#projets\" class=\"nav-link-custom {{ current_route == 'app_projets' ? 'active' : '' }}\">
                <i class=\"fas fa-code\"></i>
                Projets
            </a>

            {# --- Sous-menu Projets visible uniquement sur la page projets --- #}
            {% if current_route == 'app_projets' %}
                <div class=\"sub-menu\">
                    <a href=\"#projets-scolaires\" class=\"nav-link-custom sidebar-anchor\">
                        <i class=\"fas fa-graduation-cap\"></i>
                        Projets Scolaires
                    </a>
                    <a href=\"#projets-persos\" class=\"nav-link-custom sidebar-anchor\">
                        <i class=\"fas fa-user\"></i>
                        Projets Personnels
                    </a>
                    <a href=\"#projets-pros\" class=\"nav-link-custom sidebar-anchor\">
                        <i class=\"fas fa-briefcase\"></i>
                        Projets Professionnels
                    </a>
                </div>
            {% endif %}

            {# --- Veille --- #}
            <a href=\"{{ path('app_home') }}#veille\" class=\"nav-link-custom\">
                <i class=\"fas fa-search\"></i>
                Veille
            </a>

            {# --- Contact --- #}
            <a href=\"{{ path('app_home') }}#contact\" class=\"nav-link-custom\">
                <i class=\"fas fa-envelope\"></i>
                Contact
            </a>

        </div>
    </div>

    <div class=\"mt-auto text-center\">
        <div class=\"social-icons mb-3\">
            <a href=\"https://www.linkedin.com/in/clement-sanchis-2b989b196\" target=\"_blank\" class=\"text-white fs-3\">
                <i class=\"fab fa-linkedin\"></i>
            </a>
        </div>
        <footer class=\"small\">
            © 2026 Designed by Clément SANCHIS
        </footer>
    </div>
</nav>

{# Script : active le bon sous-lien selon la section visible à l'écran #}
{% if current_route == 'app_projets' %}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const anchors = document.querySelectorAll('.sidebar-anchor');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    anchors.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, { threshold: 0.4 });

        document.querySelectorAll('section[id]').forEach(section => {
            observer.observe(section);
        });
    });
</script>
{% endif %}
", "components/sidebar.html.twig", "C:\\wamp64\\www\\Portfolio\\templates\\components\\sidebar.html.twig");
    }
}
