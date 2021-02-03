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

/* account/settings_account.html.twig */
class __TwigTemplate_e1ac9eb9c4c7eee5e07dadb0039d7b7750e9a087c9df84354c7d2fea92030cf6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/settings_account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/settings_account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/settings_account.html.twig", 1);
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

        echo "Modification compte | QuickEat";
        
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
        <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
            <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
                <h1>Modifications</h1>
            </div>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaccount"]) || array_key_exists("formaccount", $context) ? $context["formaccount"] : (function () { throw new RuntimeError('Variable "formaccount" does not exist.', 11, $this->source); })()), "_token", [], "any", false, false, false, 11), 'row');
        echo "
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaccount"]) || array_key_exists("formaccount", $context) ? $context["formaccount"] : (function () { throw new RuntimeError('Variable "formaccount" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaccount"]) || array_key_exists("formaccount", $context) ? $context["formaccount"] : (function () { throw new RuntimeError('Variable "formaccount" does not exist.', 14, $this->source); })()), "phoneNumber", [], "any", false, false, false, 14), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formaccount"]) || array_key_exists("formaccount", $context) ? $context["formaccount"] : (function () { throw new RuntimeError('Variable "formaccount" does not exist.', 17, $this->source); })()), "localisation", [], "any", false, false, false, 17), "number", [], "any", false, false, false, 17), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formaccount"]) || array_key_exists("formaccount", $context) ? $context["formaccount"] : (function () { throw new RuntimeError('Variable "formaccount" does not exist.', 18, $this->source); })()), "localisation", [], "any", false, false, false, 18), "address", [], "any", false, false, false, 18), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formaccount"]) || array_key_exists("formaccount", $context) ? $context["formaccount"] : (function () { throw new RuntimeError('Variable "formaccount" does not exist.', 21, $this->source); })()), "localisation", [], "any", false, false, false, 21), "city", [], "any", false, false, false, 21), 'row');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formaccount"]) || array_key_exists("formaccount", $context) ? $context["formaccount"] : (function () { throw new RuntimeError('Variable "formaccount" does not exist.', 22, $this->source); })()), "localisation", [], "any", false, false, false, 22), "postalCode", [], "any", false, false, false, 22), 'row');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formaccount"]) || array_key_exists("formaccount", $context) ? $context["formaccount"] : (function () { throw new RuntimeError('Variable "formaccount" does not exist.', 23, $this->source); })()), "localisation", [], "any", false, false, false, 23), "country", [], "any", false, false, false, 23), 'row');
        echo "</div>
            </div>
            <div class=\"col d-flex justify-content-end\">
                <button class=\"btn btn-primary\">Enregistrer modifications</button>
            </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/settings_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 23,  124 => 22,  120 => 21,  114 => 18,  110 => 17,  104 => 14,  100 => 13,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification compte | QuickEat{% endblock %}

{% block body %}
    <div class=\"container mt-4 mb-3\">
        <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
            <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
                <h1>Modifications</h1>
            </div>
            {{ form_row(formaccount._token) }}
            <div class=\"row\">
                <div class=\"col-md-6\">{{ form_row(formaccount.email) }}</div>
                <div class=\"col-md-6\">{{ form_row(formaccount.phoneNumber) }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">{{ form_row(formaccount.localisation.number) }}</div>
                <div class=\"col-md-6\">{{ form_row(formaccount.localisation.address) }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">{{ form_row(formaccount.localisation.city) }}</div>
                <div class=\"col-md-4\">{{ form_row(formaccount.localisation.postalCode) }}</div>
                <div class=\"col-md-4\">{{ form_row(formaccount.localisation.country) }}</div>
            </div>
            <div class=\"col d-flex justify-content-end\">
                <button class=\"btn btn-primary\">Enregistrer modifications</button>
            </div>
        </form>
    </div>
{% endblock %}
", "account/settings_account.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/account/settings_account.html.twig");
    }
}
