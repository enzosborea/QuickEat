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

/* index/restaurant.html.twig */
class __TwigTemplate_a472a16bea00ef87f37adc38e7852e755f3aae8f2a23531b8ceb2259f1db405c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/restaurant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/restaurant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/restaurant.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " | QuickEat";
        
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
        echo "
<section>
        <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"https://www.service-quotidien.fr/wp-content/uploads/2019/09/Produits-de-saison-3.png\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"https://www.service-quotidien.fr/wp-content/uploads/2019/09/Produits-de-saison-2-3.png\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"https://www.service-quotidien.fr/wp-content/uploads/2019/09/Repas-a-la-carte-3.png\" class=\"d-block w-100\" alt=\"...\" >
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

    <div class=\"d-flex justify-content-center shadow p-3 bg-warning rounded\">
        <h1>Bienvenue chez ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "</h1>
    </div>
<div class=\"container my-5 d-flex flex-wrap justify-content-center\">
";
        // line 35
        if ((0 !== twig_compare((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 35, $this->source); })()), []))) {
            // line 36
            echo "<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow-sm p-2 my-5 bg-warning rounded\">
        <h2>Nos entrées</h2>
    </div>
</div>
<div class=\"my-4 mx-5 d-flex flex-wrap justify-content-center\">
";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 42, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 43
                echo "  ";
                echo twig_include($this->env, $context, "index/card.html.twig", ["plat" => $context["plat"]]);
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "</div>
";
        }
        // line 47
        echo "

";
        // line 49
        if ((0 !== twig_compare((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 49, $this->source); })()), []))) {
            // line 50
            echo "<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow-sm p-2 my-5 bg-warning rounded\">
        <h2>Nos plats</h2>
    </div>
</div>
<div class=\"my-4 mx-5 d-flex flex-wrap justify-content-center\">
";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 56, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 57
                echo "  ";
                echo twig_include($this->env, $context, "index/card.html.twig", ["plat" => $context["plat"]]);
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "</div>
";
        }
        // line 61
        echo "
";
        // line 62
        if ((0 !== twig_compare((isset($context["desserts"]) || array_key_exists("desserts", $context) ? $context["desserts"] : (function () { throw new RuntimeError('Variable "desserts" does not exist.', 62, $this->source); })()), []))) {
            // line 63
            echo "<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow-sm p-2 my-5 bg-warning rounded\">
        <h2>Nos desserts</h2>
    </div>
</div>
<div class=\"my-4 mx-5 d-flex flex-wrap justify-content-center\">
";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["desserts"]) || array_key_exists("desserts", $context) ? $context["desserts"] : (function () { throw new RuntimeError('Variable "desserts" does not exist.', 69, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 70
                echo "  ";
                echo twig_include($this->env, $context, "index/card.html.twig", ["plat" => $context["plat"]]);
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "</div>
";
        }
        // line 74
        echo "

";
        // line 76
        if ((0 !== twig_compare((isset($context["boissons"]) || array_key_exists("boissons", $context) ? $context["boissons"] : (function () { throw new RuntimeError('Variable "boissons" does not exist.', 76, $this->source); })()), []))) {
            // line 77
            echo "<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow-sm p-2 my-5 bg-warning rounded\">
        <h2>Nos boissons</h2>
    </div>
</div>
<div class=\"my-4 mx-5 d-flex flex-wrap justify-content-center\">
";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["boissons"]) || array_key_exists("boissons", $context) ? $context["boissons"] : (function () { throw new RuntimeError('Variable "boissons" does not exist.', 83, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 84
                echo "  ";
                echo twig_include($this->env, $context, "index/card.html.twig", ["plat" => $context["plat"]]);
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "</div>
";
        }
        // line 88
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/restaurant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 88,  322 => 86,  305 => 84,  288 => 83,  280 => 77,  278 => 76,  274 => 74,  270 => 72,  253 => 70,  236 => 69,  228 => 63,  226 => 62,  223 => 61,  219 => 59,  202 => 57,  185 => 56,  177 => 50,  175 => 49,  171 => 47,  167 => 45,  150 => 43,  133 => 42,  125 => 36,  123 => 35,  117 => 32,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{restaurant.name}} | QuickEat{% endblock %}

{% block body %}

<section>
        <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"https://www.service-quotidien.fr/wp-content/uploads/2019/09/Produits-de-saison-3.png\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"https://www.service-quotidien.fr/wp-content/uploads/2019/09/Produits-de-saison-2-3.png\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                    <img src=\"https://www.service-quotidien.fr/wp-content/uploads/2019/09/Repas-a-la-carte-3.png\" class=\"d-block w-100\" alt=\"...\" >
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

    <div class=\"d-flex justify-content-center shadow p-3 bg-warning rounded\">
        <h1>Bienvenue chez {{restaurant.name}}</h1>
    </div>
<div class=\"container my-5 d-flex flex-wrap justify-content-center\">
{% if (entrees != []) %}
<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow-sm p-2 my-5 bg-warning rounded\">
        <h2>Nos entrées</h2>
    </div>
</div>
<div class=\"my-4 mx-5 d-flex flex-wrap justify-content-center\">
{% for plat in entrees %}
  {{ include('index/card.html.twig', { plat: plat }) }}
{% endfor %}
</div>
{% endif %}


{% if (plats != []) %}
<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow-sm p-2 my-5 bg-warning rounded\">
        <h2>Nos plats</h2>
    </div>
</div>
<div class=\"my-4 mx-5 d-flex flex-wrap justify-content-center\">
{% for plat in plats %}
  {{ include('index/card.html.twig', { plat: plat }) }}
{% endfor %}
</div>
{% endif %}

{% if (desserts != []) %}
<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow-sm p-2 my-5 bg-warning rounded\">
        <h2>Nos desserts</h2>
    </div>
</div>
<div class=\"my-4 mx-5 d-flex flex-wrap justify-content-center\">
{% for plat in desserts %}
  {{ include('index/card.html.twig', { plat: plat }) }}
{% endfor %}
</div>
{% endif %}


{% if (boissons != []) %}
<div class=\"container\">
    <div class=\"d-flex justify-content-center shadow-sm p-2 my-5 bg-warning rounded\">
        <h2>Nos boissons</h2>
    </div>
</div>
<div class=\"my-4 mx-5 d-flex flex-wrap justify-content-center\">
{% for plat in boissons %}
  {{ include('index/card.html.twig', { plat: plat }) }}
{% endfor %}
</div>
{% endif %}
</div>

{% endblock %}
", "index/restaurant.html.twig", "/Users/sbo/Documents/Ecole/B2/Projet web/Quickeat/templates/index/restaurant.html.twig");
    }
}
