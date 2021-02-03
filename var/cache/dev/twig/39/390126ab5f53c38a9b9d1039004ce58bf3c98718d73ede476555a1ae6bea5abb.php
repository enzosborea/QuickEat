<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* nav.html.twig */
class __TwigTemplate_47517a36275fd12cb4ad96230f7ab037f470f9723b6238564bcb7cabd523a855 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-expand-sm navbar-dark bg-warning\">
    <a class=\"navbar-brand text-dark\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
        <img src=\"https://www.rts.ch/2019/11/12/12/50/10858955.image?w=1200&h=700\" width=\"40\" height=\"30\" class=\"d-inline-block align-top\" alt=\"image burger\">
        QuickEat
    </a>
        <!-- Left -->
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link active text-dark\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</a>
            </li>
        </ul>
        <!-- Right -->
        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\">Bonjour ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "User", [], "any", false, false, false, 17), "firstname", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\">|</a>
                </li>
                ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "roles", [], "any", false, false, false, 22), 0, [], "any", false, false, false, 22), "ROLE_RESTAURATEUR")))) {
                // line 23
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-dark\" href=\"";
                // line 24
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurateur");
                echo "\">Espace restaurant</a>
                    </li>
                ";
            }
            // line 27
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "roles", [], "any", false, false, false, 27), 0, [], "any", false, false, false, 27), "ROLE_ADMIN")))) {
                // line 28
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-dark\" href=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Espace administrateur</a>
                    </li>
                ";
            }
            // line 32
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte</a>
                </li>
                ";
            // line 35
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "roles", [], "any", false, false, false, 35), 0, [], "any", false, false, false, 35), "ROLE_USER")) || "ROLE_RESTAURATEUR")) {
                // line 36
                echo "                     <li class=\"nav-item\">
                        <a class=\"nav-link text-dark\" href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
                echo "\">Panier</a>
                    </li>
                ";
            }
            // line 40
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                </li>
            ";
        }
        // line 44
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                </li>
            ";
        }
        // line 52
        echo "        </ul>
</nav>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  141 => 49,  135 => 46,  132 => 45,  129 => 44,  123 => 41,  120 => 40,  114 => 37,  111 => 36,  109 => 35,  104 => 33,  101 => 32,  95 => 29,  92 => 28,  89 => 27,  83 => 24,  80 => 23,  78 => 22,  70 => 17,  67 => 16,  65 => 15,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar navbar-expand-sm navbar-dark bg-warning\">
    <a class=\"navbar-brand text-dark\" href=\"{{ path('index') }}\">
        <img src=\"https://www.rts.ch/2019/11/12/12/50/10858955.image?w=1200&h=700\" width=\"40\" height=\"30\" class=\"d-inline-block align-top\" alt=\"image burger\">
        QuickEat
    </a>
        <!-- Left -->
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link active text-dark\" href=\"{{ path('index') }}\">Accueil</a>
            </li>
        </ul>
        <!-- Right -->
        <ul class=\"navbar-nav ml-auto\">
            {% if app.user %}
                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\">Bonjour {{ app.User.firstname }}</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\">|</a>
                </li>
                {% if app.user and app.user.roles.0 == \"ROLE_RESTAURATEUR\" %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-dark\" href=\"{{ path('restaurateur')}}\">Espace restaurant</a>
                    </li>
                {% endif %}
                {% if app.user and app.user.roles.0 == \"ROLE_ADMIN\" %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-dark\" href=\"{{ path('admin')}}\">Espace administrateur</a>
                    </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\" href=\"{{ path('account')}}\">Mon compte</a>
                </li>
                {% if app.user.roles.0 == \"ROLE_USER\" or \"ROLE_RESTAURATEUR\"  %}
                     <li class=\"nav-item\">
                        <a class=\"nav-link text-dark\" href=\"{{ path('panier')}}\">Panier</a>
                    </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                </li>
            {% endif %}
            {% if not app.user %}
                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\" href=\"{{ path('register') }}\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-dark\" href=\"{{ path('app_login') }}\">Connexion</a>
                </li>
            {% endif %}
        </ul>
</nav>

", "nav.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/nav.html.twig");
    }
}
