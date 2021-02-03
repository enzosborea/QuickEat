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

/* index/panier.html.twig */
class __TwigTemplate_bf43b7b072ff31a4de45fd5d630e75238ae798b5a35ce1e5a7df552d59e06a8d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/panier.html.twig", 1);
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

        echo "Panier | QuickEat";
        
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
<div class=\"container pt-5\">
";
        // line 8
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })())), 0))) {
            // line 9
            echo "    <div class=\"bg-light p-3\">
        <h1>Votre panier</h1>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Produits</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "                <tr>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "plat", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "plat", [], "any", false, false, false, 25), "price", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "plat", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 27)), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "plat", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </tbody>
        <tfoot>
            <tr></tr>
            <tr>
                <td colspan=\"3\" class=\"text-right\">Frais de livraison : </td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "</td>
            </tr>
             <tr>
                <td colspan=\"3\" class=\"text-right\">Total : </td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td colspan=\"4\" class=\"text-right\"><button class=\"btn btn-primary\">Commander</button></td>
            </tr>
        </tfoot>
    </table>
";
        } else {
            // line 50
            echo "<div class=\"bg-light p-3 my-5\">
    <h1>Votre panier est vide</h1>
    <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\" class=\"btn btn-primary btn-sm mt-3\">Retour à l'Accueil</a>
</div>
";
        }
        // line 55
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 55,  172 => 52,  168 => 50,  157 => 42,  150 => 38,  143 => 33,  133 => 29,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  113 => 23,  109 => 22,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier | QuickEat{% endblock %}

{% block body %}

<div class=\"container pt-5\">
{% if items | length > 0 %}
    <div class=\"bg-light p-3\">
        <h1>Votre panier</h1>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Produits</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            {% for item in items %}
                <tr>
                    <td>{{ item.plat.name }}</td>
                    <td>{{ item.plat.price }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item.plat.price * item.quantity }}</td>
                    <td>
                        <a href=\"{{ path('panier_remove', {'id': item.plat.id }) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
        <tfoot>
            <tr></tr>
            <tr>
                <td colspan=\"3\" class=\"text-right\">Frais de livraison : </td>
                <td>{{ livraison }}</td>
            </tr>
             <tr>
                <td colspan=\"3\" class=\"text-right\">Total : </td>
                <td>{{ total }}</td>
            </tr>
            <tr>
                <td colspan=\"4\" class=\"text-right\"><button class=\"btn btn-primary\">Commander</button></td>
            </tr>
        </tfoot>
    </table>
{% else %}
<div class=\"bg-light p-3 my-5\">
    <h1>Votre panier est vide</h1>
    <a href=\"{{ path('index') }}\" class=\"btn btn-primary btn-sm mt-3\">Retour à l'Accueil</a>
</div>
{% endif %}
</div>

{% endblock %}
", "index/panier.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/index/panier.html.twig");
    }
}
