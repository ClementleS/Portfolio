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
class __TwigTemplate_4ab7b7e7be803d7c22dd7224c7a537e9 extends Template
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
        yield "<nav class=\"sidebar\">
\t<div class=\"top-content\">
\t\t<div class=\"profile-card\">
\t\t\t<h2>Clément<br>SANCHIS</h2>
\t\t\t<p>Étudiant en BTS SIO<br>Option SLAM</p>
\t\t</div>

\t\t<div class=\"nav-menu\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#accueil\" class=\"nav-link-custom ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", ["_route"], "method", false, false, false, 9) == "app_home")) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-home\"></i>
                Accueil
            </a>

            <div class=\"sub-menu\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#profil\" class=\"nav-link-custom small\">
                    <i class=\"fas fa-user\"></i>
                    Profil
                </a>
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#parcours\" class=\"nav-link-custom small\">
                    <i class=\"fas fa-graduation-cap\"></i>
                    Parcours
                </a>
            </div>

            <div class=\"nav-item\">
                ";
        // line 27
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#projets\" class=\"nav-link-custom ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", ["_route"], "method", false, false, false, 27) == "app_projets")) ? ("active") : (""));
        yield "\">
                    <i class=\"fas fa-code\"></i> Projets
                </a>
            </div>

            ";
        // line 33
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "app_projets")) {
            // line 34
            yield "                <ul class=\"list-unstyled ps-4 mt-2\">
                    <li>
                        <a href=\"#projets-scolaires\" class=\"nav-link-custom small py-1\">
                            <i class=\"fas fa-graduation-cap\"></i> Projets Scolaires
                        </a>
                    </li>
                    <li>
                        <a href=\"#projets-persos\" class=\"nav-link-custom small py-1\">
                            <i class=\"fas fa-user\"></i> Projets Personnels
                        </a>
                    </li>
                    <li>
                        <a href=\"#projets-pros\" class=\"nav-link-custom small py-1\">
                            <i class=\"fas fa-briefcase\"></i> Projets Professionnels
                        </a>
                    </li>
                </ul>
            ";
        }
        // line 52
        yield "
            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#veille\" class=\"nav-link-custom\">
                <i class=\"fas fa-search\"></i>
                Veille
            </a>

            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#contact\" class=\"nav-link-custom\">
                <i class=\"fas fa-envelope\"></i>
                Contact
            </a>
        </div>
\t</div>

\t<div class=\"mt-auto text-center\">
\t\t<div class=\"social-icons mb-3\">
\t\t\t<a href=\"https://www.linkedin.com/in/clement-sanchis-2b989b196\" target=\"_blank\" class=\"text-white fs-3\">
\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t</a>
\t\t</div>
\t\t<footer class=\"small text-muted\">
\t\t\t© 2026 Designed by Clément SANCHIS
\t\t</footer>
\t</div>
</nav>
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
        return array (  131 => 58,  123 => 53,  120 => 52,  100 => 34,  97 => 33,  86 => 27,  76 => 19,  69 => 15,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"sidebar\">
\t<div class=\"top-content\">
\t\t<div class=\"profile-card\">
\t\t\t<h2>Clément<br>SANCHIS</h2>
\t\t\t<p>Étudiant en BTS SIO<br>Option SLAM</p>
\t\t</div>

\t\t<div class=\"nav-menu\">
            <a href=\"{{ path('app_home') }}#accueil\" class=\"nav-link-custom {{ app.request.attributes.get('_route') == 'app_home' ? 'active' : '' }}\">
                <i class=\"fas fa-home\"></i>
                Accueil
            </a>

            <div class=\"sub-menu\">
                <a href=\"{{ path('app_home') }}#profil\" class=\"nav-link-custom small\">
                    <i class=\"fas fa-user\"></i>
                    Profil
                </a>
                <a href=\"{{ path('app_home') }}#parcours\" class=\"nav-link-custom small\">
                    <i class=\"fas fa-graduation-cap\"></i>
                    Parcours
                </a>
            </div>

            <div class=\"nav-item\">
                {# Le lien parent \"Projets\" devient actif si on est sur la page des projets #}
                <a href=\"{{ path('app_home') }}#projets\" class=\"nav-link-custom {{ app.request.attributes.get('_route') == 'app_projets' ? 'active' : '' }}\">
                    <i class=\"fas fa-code\"></i> Projets
                </a>
            </div>

            {# --- CORRECTION ICI : utilisation de attributes.get --- #}
            {% if app.request.attributes.get('_route') == 'app_projets' %}
                <ul class=\"list-unstyled ps-4 mt-2\">
                    <li>
                        <a href=\"#projets-scolaires\" class=\"nav-link-custom small py-1\">
                            <i class=\"fas fa-graduation-cap\"></i> Projets Scolaires
                        </a>
                    </li>
                    <li>
                        <a href=\"#projets-persos\" class=\"nav-link-custom small py-1\">
                            <i class=\"fas fa-user\"></i> Projets Personnels
                        </a>
                    </li>
                    <li>
                        <a href=\"#projets-pros\" class=\"nav-link-custom small py-1\">
                            <i class=\"fas fa-briefcase\"></i> Projets Professionnels
                        </a>
                    </li>
                </ul>
            {% endif %}

            <a href=\"{{ path('app_home') }}#veille\" class=\"nav-link-custom\">
                <i class=\"fas fa-search\"></i>
                Veille
            </a>

            <a href=\"{{ path('app_home') }}#contact\" class=\"nav-link-custom\">
                <i class=\"fas fa-envelope\"></i>
                Contact
            </a>
        </div>
\t</div>

\t<div class=\"mt-auto text-center\">
\t\t<div class=\"social-icons mb-3\">
\t\t\t<a href=\"https://www.linkedin.com/in/clement-sanchis-2b989b196\" target=\"_blank\" class=\"text-white fs-3\">
\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t</a>
\t\t</div>
\t\t<footer class=\"small text-muted\">
\t\t\t© 2026 Designed by Clément SANCHIS
\t\t</footer>
\t</div>
</nav>
", "components/sidebar.html.twig", "C:\\Users\\Etudiant\\Portfolio\\templates\\components\\sidebar.html.twig");
    }
}
