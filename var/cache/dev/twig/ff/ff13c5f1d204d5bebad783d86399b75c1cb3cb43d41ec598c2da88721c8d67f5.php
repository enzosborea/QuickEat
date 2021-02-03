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

/* restaurateur/index.html.twig */
class __TwigTemplate_9f6bfbf641678583bda57d21bbdbfacfe276b774ab0982cbaee00f818c679e8b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurateur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "restaurateur/index.html.twig", 1);
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

        echo "Restaurant | QuickEat";
        
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
        echo "<div class=\"container mt-4 mb-4\">
    <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
        <h1>Mes restaurants</h1>
    </div>
    <div class=\"row\">
        <div class=\"col d-flex justify-content-center\">
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new");
        echo "\" class=\"btn btn-primary\">Nouveau restaurant</a>
        </div>
    </div>
    <hr>
        <div class=\"row d-flex justify-content-center\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 18
            echo "            <div class=\"card m-4\" style=\"width: 20em\">
                ";
            // line 19
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["restaurant"], "imageFilename", [], "any", false, false, false, 19))) {
                // line 20
                echo "                    <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/resto_logo/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "imageFilename", [], "any", false, false, false, 20))), "thumb"), "html", null, true);
                echo "\" alt=\"Image restaurant\">
                ";
            }
            // line 22
            echo "                ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["restaurant"], "imageFilename", [], "any", false, false, false, 22))) {
                // line 23
                echo "                    <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimg/image.jpg"), "thumb"), "html", null, true);
                echo "\" alt=\"Card image cap\">
                ";
            }
            // line 25
            echo "                        <div class=\"card-body\">
                        <h5 class=\"card-title\">Restaurant : ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Catégorie : ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "categories", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">Adresse : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["restaurant"], "localisation", [], "any", false, false, false, 30), "address", [], "any", false, false, false, 30), "html", null, true);
            echo "</li>
                        <li class=\"list-group-item\">Ville : ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["restaurant"], "localisation", [], "any", false, false, false, 31), "city", [], "any", false, false, false, 31), "html", null, true);
            echo "</li>
                    </ul>
                    <div class=\"card-body\">
                        ";
            // line 34
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["restaurant"], "imageFilename", [], "any", false, false, false, 34))) {
                // line 35
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_logo", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Modifier l'image</a>
                        ";
            }
            // line 37
            echo "                        ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["restaurant"], "imageFilename", [], "any", false, false, false, 37))) {
                // line 38
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_logo", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Ajouter une image</a>
                        ";
            }
            // line 40
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_index", ["resto" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-3\">Gestion des plats</a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>

        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "restaurateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 44,  168 => 40,  162 => 38,  159 => 37,  153 => 35,  151 => 34,  145 => 31,  141 => 30,  135 => 27,  131 => 26,  128 => 25,  122 => 23,  119 => 22,  113 => 20,  111 => 19,  108 => 18,  104 => 17,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Restaurant | QuickEat{% endblock %}

{% block body %}
<div class=\"container mt-4 mb-4\">
    <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
        <h1>Mes restaurants</h1>
    </div>
    <div class=\"row\">
        <div class=\"col d-flex justify-content-center\">
            <a href=\"{{ path('new') }}\" class=\"btn btn-primary\">Nouveau restaurant</a>
        </div>
    </div>
    <hr>
        <div class=\"row d-flex justify-content-center\">
            {% for restaurant in restaurants %}
            <div class=\"card m-4\" style=\"width: 20em\">
                {% if not restaurant.imageFilename is empty %}
                    <img class=\"card-img-top\" src=\"{{ asset('uploads/resto_logo/' ~ restaurant.imageFilename) | imagine_filter('thumb')}}\" alt=\"Image restaurant\">
                {% endif %}
                {% if restaurant.imageFilename is empty %}
                    <img class=\"card-img-top\" src=\"{{ asset('noimg/image.jpg') | imagine_filter('thumb')}}\" alt=\"Card image cap\">
                {% endif %}
                        <div class=\"card-body\">
                        <h5 class=\"card-title\">Restaurant : {{ restaurant.name }}</h5>
                        <p class=\"card-text\">Catégorie : {{ restaurant.categories }}</p>
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">Adresse : {{ restaurant.localisation.address }}</li>
                        <li class=\"list-group-item\">Ville : {{ restaurant.localisation.city }}</li>
                    </ul>
                    <div class=\"card-body\">
                        {% if not restaurant.imageFilename is empty %}
                            <a href=\"{{ path('edit_logo', {'id': restaurant.id}) }}\" class=\"btn btn-primary\">Modifier l'image</a>
                        {% endif %}
                        {% if restaurant.imageFilename is empty %}
                            <a href=\"{{ path('edit_logo', {'id': restaurant.id}) }}\" class=\"btn btn-primary\">Ajouter une image</a>
                        {% endif %}
                        <a href=\"{{ path('plat_index', {'resto': restaurant.id}) }}\" class=\"btn btn-primary mt-3\">Gestion des plats</a>
                </div>
            </div>
            {% endfor %}
        </div>

        </div>
{% endblock %}
", "restaurateur/index.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/restaurateur/index.html.twig");
    }
}
