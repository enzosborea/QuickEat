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

/* index/index.html.twig */
class __TwigTemplate_62006b9a0e101362ae79e4524031d012657f724c232b5fa79c25ae272cbef432 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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

        echo "Accueil | QuickEat";
        
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
        echo "    <section>
        <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"https://getintheloop.ca/wp-content/uploads/2020/10/Steinbach-Header.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"https://www.laplancha-angouleme.fr/userfiles/7370/bandeau-07.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"https://magasins.pizzabonici.com/media/magiccart/magicslider/cache/1920x800//p/i/pizza_background.jpg\" class=\"d-block w-100\" alt=\"...\" >
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Précédent</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Suivant</span>
            </a>
        </div>
    </section>
    <section class=\"search-sec\">
        <div class=\"container\">
            <form action=\"#\" method=\"post\" novalidate=\"novalidate\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"row\">
                            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
                            <div class=\"col-lg-3 col-md-3 col-sm-12 p-0\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "city", [], "any", false, false, false, 37), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 p-0\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 p-0\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "categories", [], "any", false, false, false, 43), 'row');
        echo "
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 p-0\">
                                <button type=\"submit\" class=\"btn btn-danger wrn-btn\">Rechercher</button>
                            </div>
                            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div class=\"container\">
    <div class=\"d-flex justify-content-center shadow p-3 mb-5 bg-warning rounded\">
        <h1>Nos restaurants</h1>
    </div>
    </div>
<div class=\"container my-5 d-flex flex-wrap justify-content-center\">
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 62
            echo "    <div class=\"card mx-3 my-3\" style=\"width: 20rem;\">
        ";
            // line 63
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["restaurant"], "imageFilename", [], "any", false, false, false, 63))) {
                // line 64
                echo "            <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/resto_logo/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "imageFilename", [], "any", false, false, false, 64))), "thumb"), "html", null, true);
                echo "\" alt=\"Image restaurant\">
        ";
            }
            // line 66
            echo "        ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["restaurant"], "imageFilename", [], "any", false, false, false, 66))) {
                // line 67
                echo "            <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimg/image.jpg"), "thumb"), "html", null, true);
                echo "\" alt=\"Card image cap\">
        ";
            }
            // line 69
            echo "    <div class=\"card-body\">
        <h5 class=\"card-title\"> Restaurant : ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</h5>
        <p class=\"card-text\">Catégorie : ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "categories", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
        <p class=\"card-text\">Ville : ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["restaurant"], "localisation", [], "any", false, false, false, 72), "city", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lerestaurant", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">En savoir +</a>
    </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 77,  199 => 73,  195 => 72,  191 => 71,  187 => 70,  184 => 69,  178 => 67,  175 => 66,  169 => 64,  167 => 63,  164 => 62,  160 => 61,  144 => 48,  136 => 43,  130 => 40,  124 => 37,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil | QuickEat{% endblock %}

{% block body %}
    <section>
        <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"https://getintheloop.ca/wp-content/uploads/2020/10/Steinbach-Header.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"https://www.laplancha-angouleme.fr/userfiles/7370/bandeau-07.jpg\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"https://magasins.pizzabonici.com/media/magiccart/magicslider/cache/1920x800//p/i/pizza_background.jpg\" class=\"d-block w-100\" alt=\"...\" >
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Précédent</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleFade\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Suivant</span>
            </a>
        </div>
    </section>
    <section class=\"search-sec\">
        <div class=\"container\">
            <form action=\"#\" method=\"post\" novalidate=\"novalidate\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"row\">
                            {{ form_start(form) }}
                            <div class=\"col-lg-3 col-md-3 col-sm-12 p-0\">
                                {{ form_row(form.city) }}
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 p-0\">
                                {{ form_row(form.name) }}
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 p-0\">
                                {{ form_row(form.categories) }}
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 p-0\">
                                <button type=\"submit\" class=\"btn btn-danger wrn-btn\">Rechercher</button>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div class=\"container\">
    <div class=\"d-flex justify-content-center shadow p-3 mb-5 bg-warning rounded\">
        <h1>Nos restaurants</h1>
    </div>
    </div>
<div class=\"container my-5 d-flex flex-wrap justify-content-center\">
{% for restaurant in restaurants %}
    <div class=\"card mx-3 my-3\" style=\"width: 20rem;\">
        {% if not restaurant.imageFilename is empty %}
            <img class=\"card-img-top\" src=\"{{ asset('uploads/resto_logo/' ~ restaurant.imageFilename) | imagine_filter('thumb')}}\" alt=\"Image restaurant\">
        {% endif %}
        {% if restaurant.imageFilename is empty %}
            <img class=\"card-img-top\" src=\"{{ asset('noimg/image.jpg') | imagine_filter('thumb')}}\" alt=\"Card image cap\">
        {% endif %}
    <div class=\"card-body\">
        <h5 class=\"card-title\"> Restaurant : {{ restaurant.name }}</h5>
        <p class=\"card-text\">Catégorie : {{ restaurant.categories }}</p>
        <p class=\"card-text\">Ville : {{ restaurant.localisation.city }}</p>
        <a href=\"{{ path('lerestaurant', {'id': restaurant.id}) }}\" class=\"btn btn-primary\">En savoir +</a>
    </div>
    </div>
{% endfor %}
</div>

{% endblock %}
", "index/index.html.twig", "/Users/sbo/Documents/Ecole/B2/Projet web/Quickeat/templates/index/index.html.twig");
    }
}
