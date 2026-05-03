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
class __TwigTemplate_69b8eaff903b1d9776c92597168e93f7 extends Template
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
            'body' => [$this, 'block_body'],
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
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
    </head>
    <body>
            ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/sidebar.html.twig");
        yield "
            
            <main class=\"main-content\">
                ";
        // line 16
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 17
        yield "            </main>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (!entry.isIntersecting) return;

                        const id = entry.target.getAttribute('id');

                        // Retire active de tous les liens principaux
                        document.querySelectorAll('.nav-link-custom').forEach(link => {
                            link.classList.remove('active');
                        });

                        // Ajoute active sur le lien principal correspondant
                        // (Accueil si section #accueil, #profil ou #parcours)
                        // (Projets si section #projets)
                        // (Veille si section #veille)
                        // (Contact si section #contact)
                        const map = {
                            'accueil':  '";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#accueil',
                            'profil':   '";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#profil',
                            'parcours': '";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#parcours',
                            'projets':  '";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#projets',
                            'veille':   '";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#veille',
                            'contact':  '";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#contact',
                        };

                        const targetHref = map[id];
                        if (targetHref) {
                            const link = document.querySelector(`.nav-link-custom[href=\"\${targetHref}\"]`);
                            if (link) link.classList.add('active');
                        }
                    });
                }, { threshold: 0.5 });

                document.querySelectorAll('section[id]').forEach(section => {
                    observer.observe(section);
                });
            });
        </script>

        <script>
            // Initialisation de la carte sur La Grande-Motte
            var map = L.map('map').setView([44.52504, 3.47931], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            L.marker([44.52504, 3.47931]).addTo(map)
                .bindPopup('Lycée Emile Peytavin<br>Mende, Lozère')
                .openPopup();
        </script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Portfolio | Clément SANCHIS";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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
        return array (  187 => 16,  164 => 5,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  78 => 17,  76 => 16,  70 => 13,  62 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Portfolio | Clément SANCHIS{% endblock %}</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('styles/app.css') }}\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
    </head>
    <body>
            {{ include('components/sidebar.html.twig') }}
            
            <main class=\"main-content\">
                {% block body %}{% endblock %}
            </main>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (!entry.isIntersecting) return;

                        const id = entry.target.getAttribute('id');

                        // Retire active de tous les liens principaux
                        document.querySelectorAll('.nav-link-custom').forEach(link => {
                            link.classList.remove('active');
                        });

                        // Ajoute active sur le lien principal correspondant
                        // (Accueil si section #accueil, #profil ou #parcours)
                        // (Projets si section #projets)
                        // (Veille si section #veille)
                        // (Contact si section #contact)
                        const map = {
                            'accueil':  '{{ path(\"app_home\") }}#accueil',
                            'profil':   '{{ path(\"app_home\") }}#profil',
                            'parcours': '{{ path(\"app_home\") }}#parcours',
                            'projets':  '{{ path(\"app_home\") }}#projets',
                            'veille':   '{{ path(\"app_home\") }}#veille',
                            'contact':  '{{ path(\"app_home\") }}#contact',
                        };

                        const targetHref = map[id];
                        if (targetHref) {
                            const link = document.querySelector(`.nav-link-custom[href=\"\${targetHref}\"]`);
                            if (link) link.classList.add('active');
                        }
                    });
                }, { threshold: 0.5 });

                document.querySelectorAll('section[id]').forEach(section => {
                    observer.observe(section);
                });
            });
        </script>

        <script>
            // Initialisation de la carte sur La Grande-Motte
            var map = L.map('map').setView([44.52504, 3.47931], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            L.marker([44.52504, 3.47931]).addTo(map)
                .bindPopup('Lycée Emile Peytavin<br>Mende, Lozère')
                .openPopup();
        </script>
    </body>
</html>", "base.html.twig", "C:\\wamp64\\www\\Portfolio\\templates\\base.html.twig");
    }
}
