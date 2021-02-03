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

/* index/card.html.twig */
class __TwigTemplate_4afd1f4758def85b343dafd8c2432f07bfd498645cbc4179fe9d7b46968a45f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/card.html.twig"));

        // line 1
        echo "<div class=\"card mx-4 my-4\" style=\"width: 20em\">
    ";
        // line 2
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 2, $this->source); })()), "imageFilename", [], "any", false, false, false, 2))) {
            // line 3
            echo "        <img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/plats_logo/" . twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 3, $this->source); })()), "imageFilename", [], "any", false, false, false, 3))), "thumb"), "html", null, true);
            echo "\" alt=\"Image du plat\">
    ";
        }
        // line 5
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 5, $this->source); })()), "imageFilename", [], "any", false, false, false, 5))) {
            // line 6
            echo "        <img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimg/image.jpg"), "thumb"), "html", null, true);
            echo "\" alt=\"Card image cap\">
    ";
        }
        // line 8
        echo "      <div class=\"card-body\">
        <h5 class=\"card-title\">Nom : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h5>
        <h6 class=\"card-text\">Prix : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 10, $this->source); })()), "price", [], "any", false, false, false, 10), "html", null, true);
        echo "€</h6>
        <p class=\"card-text\"><small class=\"text-muted\"></small></p>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter au panier</a>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index/card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  70 => 10,  66 => 9,  63 => 8,  57 => 6,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mx-4 my-4\" style=\"width: 20em\">
    {% if not plat.imageFilename is empty %}
        <img class=\"card-img-top\" src=\"{{ asset('uploads/plats_logo/' ~ plat.imageFilename) | imagine_filter('thumb')}}\" alt=\"Image du plat\">
    {% endif %}
    {% if plat.imageFilename is empty %}
        <img class=\"card-img-top\" src=\"{{ asset('noimg/image.jpg') | imagine_filter('thumb')}}\" alt=\"Card image cap\">
    {% endif %}
      <div class=\"card-body\">
        <h5 class=\"card-title\">Nom : {{ plat.name }}</h5>
        <h6 class=\"card-text\">Prix : {{ plat.price }}€</h6>
        <p class=\"card-text\"><small class=\"text-muted\"></small></p>
        <a href=\"{{ path('panier_add', {'id': plat.id}) }}\" class=\"btn btn-primary\">Ajouter au panier</a>
  </div>
</div>
", "index/card.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/index/card.html.twig");
    }
}
