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

/* medecin/rdvAdd.html.twig */
class __TwigTemplate_4762d1167ef5efc2634644449a792f3a96bd4c01dafcb276eeda6e6ae04c0437 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/rdvAdd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/rdvAdd.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medecin/rdvAdd.html.twig", 1);
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

        echo "Hello MedecinController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <style>
        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }
        .container h1 {
            text-transform: uppercase;
            margin-top: 5rem;
            border-bottom: 5px solid black;
        }
        .container .content {
            height: 750px;
            width: 600px;
            box-shadow: 2px 2px 5px rgba(0,0,0,.7);
            margin-top: 5rem;
        }
        .container .content form {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }
        .container .content form #form {
            height: 80%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 5rem;
        }
        .container .content form #form div:first-child {
            height: 80%;
            width: 80%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            margin-top: 5rem;
        }
        .container .content form #form div:first-child label {
            font-size: 2rem;
            font-weight: 2rem;
            text-transform: uppercase;
            border-bottom: 5px solid black;
        }
        .container .content form #form div:first-child div {
            height: 250px;
            width: 100%;
            display: flex;
            flex-flow: row;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
        }
        .container .content form #form div:nth-child(2) {
            height: 20%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container .content form #form div:nth-child(2) button {
            height: 50px;
            width: 150px;
            background: #17324f;
            color: white;
            outline: none;
            border: none;
            border-radius: 5px;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "    <div class=\"container\">
        <h1>Prendre Rendez-vous avec le médecin : ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medecin"]) || array_key_exists("medecin", $context) ? $context["medecin"] : (function () { throw new RuntimeError('Variable "medecin" does not exist.', 90, $this->source); })()), "nom", [], "any", false, false, false, 90), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medecin"]) || array_key_exists("medecin", $context) ? $context["medecin"] : (function () { throw new RuntimeError('Variable "medecin" does not exist.', 90, $this->source); })()), "prenom", [], "any", false, false, false, 90), "html", null, true);
        echo "</h1>
        <section class=\"content\">
            ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form');
        echo "
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "medecin/rdvAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 92,  194 => 90,  191 => 89,  181 => 88,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MedecinController!{% endblock %}
{% block stylesheets %}
    <style>
        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }
        .container h1 {
            text-transform: uppercase;
            margin-top: 5rem;
            border-bottom: 5px solid black;
        }
        .container .content {
            height: 750px;
            width: 600px;
            box-shadow: 2px 2px 5px rgba(0,0,0,.7);
            margin-top: 5rem;
        }
        .container .content form {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }
        .container .content form #form {
            height: 80%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 5rem;
        }
        .container .content form #form div:first-child {
            height: 80%;
            width: 80%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            margin-top: 5rem;
        }
        .container .content form #form div:first-child label {
            font-size: 2rem;
            font-weight: 2rem;
            text-transform: uppercase;
            border-bottom: 5px solid black;
        }
        .container .content form #form div:first-child div {
            height: 250px;
            width: 100%;
            display: flex;
            flex-flow: row;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
        }
        .container .content form #form div:nth-child(2) {
            height: 20%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container .content form #form div:nth-child(2) button {
            height: 50px;
            width: 150px;
            background: #17324f;
            color: white;
            outline: none;
            border: none;
            border-radius: 5px;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
        }

    </style>
{% endblock %}
{% block body %}
    <div class=\"container\">
        <h1>Prendre Rendez-vous avec le médecin : {{ medecin.nom }} {{ medecin.prenom }}</h1>
        <section class=\"content\">
            {{ form(form) }}
        </section>
    </div>
{% endblock %}", "medecin/rdvAdd.html.twig", "C:\\Users\\33769\\Desktop\\ppe2\\projetpatientv2\\templates\\medecin\\rdvAdd.html.twig");
    }
}
