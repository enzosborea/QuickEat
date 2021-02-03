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

/* restaurateur/new.html.twig */
class __TwigTemplate_ab90932d3a7141d12f5785d2c747a5dd6ac0cf66d69aeafe0ad250303759caf6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurateur/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurateur/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "restaurateur/new.html.twig", 1);
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

        echo "new";
        
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
   <div class=\"container mt-4 mb-3\">
        <form method=\"post\">
            <div class=\"d-flex justify-content-center shadow p-3 mb-5 bg-warning rounded\">
                <h1>Nouveau restaurant</h1>
            </div>
            <div class=\"container\">
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-md-6\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row');
        echo "</div>
                    <div class=\"col-md-6\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 16, $this->source); })()), "categories", [], "any", false, false, false, 16), 'row');
        echo "</div>
                </div>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'row');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 19, $this->source); })()), "categories", [], "any", false, false, false, 19), 'row');
        echo "
            <div>
            <h3 class=\"shadow-sm p-3 mb-5 bg-warning rounded mt-3\">Coordonnées :</h3>
            </div>
                <div class=\"row\">
                    <div class=\"col-md-3\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 24, $this->source); })()), "localisation", [], "any", false, false, false, 24), "city", [], "any", false, false, false, 24), 'row');
        echo "</div>
                    <div class=\"col-md-2\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 25, $this->source); })()), "localisation", [], "any", false, false, false, 25), "number", [], "any", false, false, false, 25), 'row');
        echo "</div>
                    <div class=\"col-md-3\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 26, $this->source); })()), "localisation", [], "any", false, false, false, 26), "address", [], "any", false, false, false, 26), 'row');
        echo "</div>
                    <div class=\"col-md-2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 27, $this->source); })()), "localisation", [], "any", false, false, false, 27), "postalCode", [], "any", false, false, false, 27), 'row');
        echo "</div>
                    <div class=\"col-md-2\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 28, $this->source); })()), "localisation", [], "any", false, false, false, 28), "country", [], "any", false, false, false, 28), 'row');
        echo "</div>
                </div>

            <div class=\"row mb-5 mt-5\">
                <div class=\"col d-flex justify-content-end\">
                    <button class=\"btn btn-primary\">Valider</button>
                </div>
            </div>
        </form>
        ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["new_restaurateur"]) || array_key_exists("new_restaurateur", $context) ? $context["new_restaurateur"] : (function () { throw new RuntimeError('Variable "new_restaurateur" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
    </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "restaurateur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  123 => 24,  115 => 19,  111 => 18,  106 => 16,  102 => 15,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}new{% endblock %}

{% block body %}

   <div class=\"container mt-4 mb-3\">
        <form method=\"post\">
            <div class=\"d-flex justify-content-center shadow p-3 mb-5 bg-warning rounded\">
                <h1>Nouveau restaurant</h1>
            </div>
            <div class=\"container\">
        {{ form_start(new_restaurateur) }}
                <div class=\"row\">
                    <div class=\"col-md-6\">{{ form_row(new_restaurateur.name) }}</div>
                    <div class=\"col-md-6\">{{ form_row(new_restaurateur.categories) }}</div>
                </div>
            {{ form_row(new_restaurateur.name) }}
            {{ form_row(new_restaurateur.categories) }}
            <div>
            <h3 class=\"shadow-sm p-3 mb-5 bg-warning rounded mt-3\">Coordonnées :</h3>
            </div>
                <div class=\"row\">
                    <div class=\"col-md-3\">{{ form_row(new_restaurateur.localisation.city) }}</div>
                    <div class=\"col-md-2\">{{ form_row(new_restaurateur.localisation.number) }}</div>
                    <div class=\"col-md-3\">{{ form_row(new_restaurateur.localisation.address) }}</div>
                    <div class=\"col-md-2\">{{ form_row(new_restaurateur.localisation.postalCode) }}</div>
                    <div class=\"col-md-2\">{{ form_row(new_restaurateur.localisation.country) }}</div>
                </div>

            <div class=\"row mb-5 mt-5\">
                <div class=\"col d-flex justify-content-end\">
                    <button class=\"btn btn-primary\">Valider</button>
                </div>
            </div>
        </form>
        {{ form_end(new_restaurateur) }}
    </div>
    </div>


{% endblock %}
", "restaurateur/new.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/restaurateur/new.html.twig");
    }
}
