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

/* account/account.html.twig */
class __TwigTemplate_7a0e2a87a89e208d91da0af342f37ba36fd331c50bbd3b2c36f3c277523ad5e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/account.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon compte | QuickEat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container mb-4\">
    <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
        <h1>Mon compte</h1>
    </div>
    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Nom : </p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "User", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Prénom : </p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "User", [], "any", false, false, false, 13), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Email : </p> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "User", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Argent : </p> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "User", [], "any", false, false, false, 15), "sold", [], "any", false, false, false, 15), "html", null, true);
        echo " €</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">N° de l'adresse : </p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "User", [], "any", false, false, false, 18), "localisation", [], "any", false, false, false, 18), "number", [], "any", false, false, false, 18), "html", null, true);
        echo "</div>
                <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Adresse : </p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "User", [], "any", false, false, false, 19), "localisation", [], "any", false, false, false, 19), "address", [], "any", false, false, false, 19), "html", null, true);
        echo "</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Ville : </p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "User", [], "any", false, false, false, 20), "localisation", [], "any", false, false, false, 20), "city", [], "any", false, false, false, 20), "html", null, true);
        echo "</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Code postal : </p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "User", [], "any", false, false, false, 21), "localisation", [], "any", false, false, false, 21), "Postalcode", [], "any", false, false, false, 21), "html", null, true);
        echo "</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Pays: </p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "User", [], "any", false, false, false, 22), "localisation", [], "any", false, false, false, 22), "country", [], "any", false, false, false, 22), "html", null, true);
        echo "</div>
            </div>
    </div>
    <div class=\"row mb-5 mt-4\">
        <div class=\"col d-flex justify-content-end\">
            ";
        // line 27
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "User", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "User", [], "any", false, false, false, 27)))) {
            // line 28
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "User", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-primary mr-2\">Modifier informations</a>
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgotten_password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "User", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-primary mr-2\">Modifier mot de passe</a>
            ";
        }
        // line 31
        echo "        </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 31,  145 => 29,  140 => 28,  138 => 27,  130 => 22,  126 => 21,  122 => 20,  118 => 19,  114 => 18,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte | QuickEat{% endblock %}

{% block body %}
<div class=\"container mb-4\">
    <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
        <h1>Mon compte</h1>
    </div>
    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Nom : </p>{{app.User.name }}</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Prénom : </p>{{app.User.firstname }}</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Email : </p> {{app.User.email }}</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Argent : </p> {{app.User.sold }} €</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">N° de l'adresse : </p>{{app.User.localisation.number }}</div>
                <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Adresse : </p>{{app.User.localisation.address }}</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Ville : </p>{{app.User.localisation.city }}</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Code postal : </p>{{app.User.localisation.Postalcode }}</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Pays: </p>{{app.User.localisation.country }}</div>
            </div>
    </div>
    <div class=\"row mb-5 mt-4\">
        <div class=\"col d-flex justify-content-end\">
            {% if app.User == app.User %}
            <a href=\"{{ path('account_edit', {'id': app.User.id}) }}\" class=\"btn btn-primary mr-2\">Modifier informations</a>
            <a href=\"{{ path('app_forgotten_password', {'id': app.User.id}) }}\" class=\"btn btn-primary mr-2\">Modifier mot de passe</a>
            {% endif %}
        </div>
    </div>

</div>
{% endblock %}
", "account/account.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/account/account.html.twig");
    }
}
