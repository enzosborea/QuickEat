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

/* admin/index.html.twig */
class __TwigTemplate_baae1cefd2d050722e6f12a27c81aa70bffc2e4decdcd975e42db504b0ae2b32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Espace administrateur | QuickEat";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


<div class=\"container\">
<div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
    <h1>Interface Administrateur</h1>
</div>

<div class=\"d-flex justify-content-center\">
    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
        echo "\" class=\"btn btn-primary mx-3 mb-5\">Gestion des restaurants</a>
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"btn btn-primary mx-3 mb-5\">Gestion des utilisateurs</a>
</div>

    <div class=\"row\">
        <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Nombre de restaurant : </p>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</div>
        <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Commande passé : </p>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["commandePasse"]) || array_key_exists("commandePasse", $context) ? $context["commandePasse"] : (function () { throw new RuntimeError('Variable "commandePasse" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</div>
        <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Commande en cours : </p> ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["commandeEnCours"]) || array_key_exists("commandeEnCours", $context) ? $context["commandeEnCours"] : (function () { throw new RuntimeError('Variable "commandeEnCours" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</div>
    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 25,  117 => 24,  113 => 23,  106 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace administrateur | QuickEat{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


<div class=\"container\">
<div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
    <h1>Interface Administrateur</h1>
</div>

<div class=\"d-flex justify-content-center\">
    <a href=\"{{ path('restaurant_index') }}\" class=\"btn btn-primary mx-3 mb-5\">Gestion des restaurants</a>
    <a href=\"{{ path('user_index') }}\" class=\"btn btn-primary mx-3 mb-5\">Gestion des utilisateurs</a>
</div>

    <div class=\"row\">
        <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Nombre de restaurant : </p>{{ restaurant }}</div>
        <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Commande passé : </p>{{ commandePasse }}</div>
        <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\">Commande en cours : </p> {{ commandeEnCours }}</div>
    </div>

</div>

{% endblock %}
", "admin/index.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/admin/index.html.twig");
    }
}
