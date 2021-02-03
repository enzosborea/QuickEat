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

/* restaurant/_form.html.twig */
class __TwigTemplate_25ab1cec3d316ec2a4532efac89f82ee7e0ebbb6a56225e3f63158dde8744557 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

    <div class=\"row\">
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
        <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'row');
        echo "</div>
        <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "categories", [], "any", false, false, false, 6), 'row');
        echo "</div>
    </div>

    <div class=\"d-flex justify-content-center shadow p-2 mb-5 bg-warning rounded\">
        <h1>Coordonnées</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "localisation", [], "any", false, false, false, 13), "number", [], "any", false, false, false, 13), 'row');
        echo "</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "localisation", [], "any", false, false, false, 14), "address", [], "any", false, false, false, 14), 'row');
        echo "</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "localisation", [], "any", false, false, false, 15), "city", [], "any", false, false, false, 15), 'row');
        echo "</div>
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "localisation", [], "any", false, false, false, 16), "postalCode", [], "any", false, false, false, 16), 'row');
        echo "</div>
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "localisation", [], "any", false, false, false, 17), "country", [], "any", false, false, false, 17), 'row');
        echo "</div>
    </div>

<div class=\"d-flex justify-content-end mb-2\">
    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
        echo "\" class=\"btn btn-primary ml-3\">Retour</a>
    <button class=\"btn btn-success ml-2\">";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 22, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
</div>
";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  94 => 22,  90 => 21,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

    <div class=\"row\">
    {{ form_start(form) }}
        <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.name) }}</div>
        <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.categories) }}</div>
    </div>

    <div class=\"d-flex justify-content-center shadow p-2 mb-5 bg-warning rounded\">
        <h1>Coordonnées</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.localisation.number) }}</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.localisation.address) }}</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.localisation.city) }}</div>
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.localisation.postalCode) }}</div>
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.localisation.country) }}</div>
    </div>

<div class=\"d-flex justify-content-end mb-2\">
    <a href=\"{{ path('restaurant_index') }}\" class=\"btn btn-primary ml-3\">Retour</a>
    <button class=\"btn btn-success ml-2\">{{ button_label|default('Enregistrer') }}</button>
</div>
{{ form_end(form) }}
", "restaurant/_form.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/restaurant/_form.html.twig");
    }
}
