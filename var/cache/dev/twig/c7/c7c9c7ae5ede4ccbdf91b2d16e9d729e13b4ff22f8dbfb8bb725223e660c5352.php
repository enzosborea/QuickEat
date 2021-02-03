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

/* restaurant/show.html.twig */
class __TwigTemplate_d9df936d04e29232e2a76a3ec14878fac9afcc51c849dd55be9a4807f1684bfd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "restaurant/show.html.twig", 1);
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

        echo "Restaurant";
        
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
        echo "<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
        <h1>Restaurant</h1>
    </div>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 23, $this->source); })()), "categories", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>N° Adresse</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 27, $this->source); })()), "localisation", [], "any", false, false, false, 27), "number", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 31, $this->source); })()), "localisation", [], "any", false, false, false, 31), "address", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 35, $this->source); })()), "localisation", [], "any", false, false, false, 35), "city", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code postal</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 39, $this->source); })()), "localisation", [], "any", false, false, false, 39), "postalCode", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 43, $this->source); })()), "localisation", [], "any", false, false, false, 43), "Country", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
        echo "\" class=\"btn btn-primary\">Retour</a>

    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" class=\"btn btn-secondary\">Modifier</a>

    ";
        // line 52
        echo twig_include($this->env, $context, "restaurant/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 52,  161 => 50,  156 => 48,  148 => 43,  141 => 39,  134 => 35,  127 => 31,  120 => 27,  113 => 23,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Restaurant{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
        <h1>Restaurant</h1>
    </div>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ restaurant.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ restaurant.name }}</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>{{ restaurant.categories }}</td>
            </tr>
            <tr>
                <th>N° Adresse</th>
                <td>{{ restaurant.localisation.number }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ restaurant.localisation.address }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ restaurant.localisation.city }}</td>
            </tr>
            <tr>
                <th>Code postal</th>
                <td>{{ restaurant.localisation.postalCode }}</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>{{ restaurant.localisation.Country }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('restaurant_index') }}\" class=\"btn btn-primary\">Retour</a>

    <a href=\"{{ path('restaurant_edit', {'id': restaurant.id}) }}\" class=\"btn btn-secondary\">Modifier</a>

    {{ include('restaurant/_delete_form.html.twig') }}
</div>
{% endblock %}
", "restaurant/show.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/restaurant/show.html.twig");
    }
}
