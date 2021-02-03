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

/* registration/register.html.twig */
class __TwigTemplate_adb4ec2866d356ceb1326fcf7e01bf4a34e5f3aeec6cdbe70082c9820cbf6931 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription | QuickEat";
        
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
        echo "    <div class=\"container mt-4 mb-3\">
        <form method=\"post\">
            <div class=\"d-flex justify-content-center shadow p-3 mb-5 bg-warning rounded\">
                <h1>Inscription</h1>
            </div>
            <div class=\"row\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 13, $this->source); })()), "_token", [], "any", false, false, false, 13), 'row');
        echo "
                <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'row');
        echo "</div>
                <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 15, $this->source); })()), "firstname", [], "any", false, false, false, 15), 'row');
        echo "</div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'row');
        echo "</div>
                <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), 'row');
        echo "</div>
                <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 21, $this->source); })()), "phoneNumber", [], "any", false, false, false, 21), 'row');
        echo "</div>
            </div>
            <div class=\"d-flex justify-content-center shadow p-2 mb-5 bg-warning rounded\">
                <h1>Coordonnées</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 27, $this->source); })()), "localisation", [], "any", false, false, false, 27), "number", [], "any", false, false, false, 27), 'row');
        echo "</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 28, $this->source); })()), "localisation", [], "any", false, false, false, 28), "address", [], "any", false, false, false, 28), 'row');
        echo "</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 29, $this->source); })()), "localisation", [], "any", false, false, false, 29), "city", [], "any", false, false, false, 29), 'row');
        echo "</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 30, $this->source); })()), "localisation", [], "any", false, false, false, 30), "postalCode", [], "any", false, false, false, 30), 'row');
        echo "</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 31, $this->source); })()), "localisation", [], "any", false, false, false, 31), "country", [], "any", false, false, false, 31), 'row');
        echo "</div>
            </div>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 33, $this->source); })()), "roles", [], "any", false, false, false, 33), 'row');
        echo "
            <div class=\"row mb-5 mt-5\">
                <div class=\"col d-flex justify-content-end\">
                    <button class=\"btn btn-primary\">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["register_form"]) || array_key_exists("register_form", $context) ? $context["register_form"] : (function () { throw new RuntimeError('Variable "register_form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 41,  153 => 33,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  132 => 27,  123 => 21,  119 => 20,  115 => 19,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription | QuickEat{% endblock %}

{% block body %}
    <div class=\"container mt-4 mb-3\">
        <form method=\"post\">
            <div class=\"d-flex justify-content-center shadow p-3 mb-5 bg-warning rounded\">
                <h1>Inscription</h1>
            </div>
            <div class=\"row\">
            {{ form_start(register_form) }}
            {{ form_row(register_form._token) }}
                <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.name) }}</div>
                <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.firstname) }}</div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.email) }}</div>
                <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.password) }}</div>
                <div class=\"col-md-4 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.phoneNumber) }}</div>
            </div>
            <div class=\"d-flex justify-content-center shadow p-2 mb-5 bg-warning rounded\">
                <h1>Coordonnées</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.localisation.number) }}</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.localisation.address) }}</div>
                <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.localisation.city) }}</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.localisation.postalCode) }}</div>
                <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(register_form.localisation.country) }}</div>
            </div>
            {{ form_row(register_form.roles) }}
            <div class=\"row mb-5 mt-5\">
                <div class=\"col d-flex justify-content-end\">
                    <button class=\"btn btn-primary\">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
    {{ form_end(register_form) }}

{% endblock %}
", "registration/register.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/registration/register.html.twig");
    }
}
