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

/* user/_form.html.twig */
class __TwigTemplate_76dc51b845360ccfeca7d579c2135cdee701d949afea9f612f7cad1933cfd6f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
        <h1>Modification de l'utilisateur</h1>
    </div>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "_token", [], "any", false, false, false, 6), 'row');
        echo "
    <div class=\"row\">
        <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'row');
        echo "</div>
        <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "firstname", [], "any", false, false, false, 9), 'row');
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'row');
        echo "</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "password", [], "any", false, false, false, 13), 'row');
        echo "</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "phoneNumber", [], "any", false, false, false, 14), 'row');
        echo "</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "roles", [], "any", false, false, false, 15), 'row');
        echo "</div>

    </div>
    <div class=\"d-flex justify-content-center shadow p-2 mb-5 bg-warning rounded\">
        <h1>Coordonnées</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "localisation", [], "any", false, false, false, 22), "number", [], "any", false, false, false, 22), 'row');
        echo "</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "localisation", [], "any", false, false, false, 23), "address", [], "any", false, false, false, 23), 'row');
        echo "</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "localisation", [], "any", false, false, false, 24), "city", [], "any", false, false, false, 24), 'row');
        echo "</div>
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "localisation", [], "any", false, false, false, 25), "postalCode", [], "any", false, false, false, 25), 'row');
        echo "</div>
        <div class=\"col-md-2 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "localisation", [], "any", false, false, false, 26), "country", [], "any", false, false, false, 26), 'row');
        echo "</div>
    </div>
<div class=\"d-flex justify-content-end mb-2\">
    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"btn btn-primary ml-3\">Retour</a>
    <button class=\"btn btn-success ml-2\">";
        // line 30
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
</div>
";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  117 => 30,  113 => 29,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  63 => 9,  59 => 8,  54 => 6,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"d-flex justify-content-center shadow p-3 my-5 bg-warning rounded\">
        <h1>Modification de l'utilisateur</h1>
    </div>
    {{ form_start(form) }}
    {{ form_row(form._token) }}
    <div class=\"row\">
        <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.name) }}</div>
        <div class=\"col-md-6 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.firstname) }}</div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.email) }}</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.password) }}</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.phoneNumber) }}</div>
        <div class=\"col-md-3 shadow-sm p-3 mb-5 bg-white rounded\"><p class=\"font-weight-bold\"></p>{{ form_row(form.roles) }}</div>

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
    <a href=\"{{ path('user_index') }}\" class=\"btn btn-primary ml-3\">Retour</a>
    <button class=\"btn btn-success ml-2\">{{ button_label|default('Enregistrer') }}</button>
</div>
{{ form_end(form) }}
", "user/_form.html.twig", "/Users/sbo/Documents/Projet web/Quickeat/templates/user/_form.html.twig");
    }
}
