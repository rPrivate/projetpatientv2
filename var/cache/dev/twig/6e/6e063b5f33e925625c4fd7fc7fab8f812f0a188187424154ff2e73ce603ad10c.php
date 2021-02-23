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

/* rdv_list/index.html.twig */
class __TwigTemplate_740c298e38e64e5ed83345ad0f6956f9212ee0a7dff7fc530570eb2e75d9970b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rdv_list/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rdv_list/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rdv_list/index.html.twig", 1);
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

        echo "Hello RDVListController!";
        
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
        echo "<h1 style=\"text-align: center\">Vos rendez-vous</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvs"]) || array_key_exists("rdvs", $context) ? $context["rdvs"] : (function () { throw new RuntimeError('Variable "rdvs" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 8
            echo "        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h3>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "heure", [], "any", false, false, false, 10), "H:i d-m-Y"), "html", null, true);
            echo "</h3>
                <h5 class=\"card-title\">Dr.";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rdv"], "Medecin", [], "any", false, false, false, 11), "prenom", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rdv"], "Medecin", [], "any", false, false, false, 11), "nom", [], "any", false, false, false, 11), "html", null, true);
            echo "</h5>
                ";
            // line 12
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SECRETAIRE")) {
                // line 13
                echo "                    <h4>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rdv"], "patient", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
                echo "</h4>
                ";
            }
            // line 15
            echo "                <p class=\"card-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rdv"], "medecin", [], "any", false, false, false, 15), "specialite", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                <h3>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "etat", [], "any", false, false, false, 16), "html", null, true);
            echo "</h3>
                ";
            // line 17
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SECRETAIRE")) {
                // line 18
                echo "                    <button type=\"button\" class=\"btn btn-success\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept", ["id" => twig_get_attribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\">Accepter</a></button>
                    <button type=\"button\" class=\"btn btn-danger\"><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decline", ["id" => twig_get_attribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\">Refuser</a></button>
                ";
            }
            // line 21
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rdv_list/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 21,  133 => 19,  128 => 18,  126 => 17,  122 => 16,  117 => 15,  111 => 13,  109 => 12,  103 => 11,  99 => 10,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello RDVListController!{% endblock %}

{% block body %}
<h1 style=\"text-align: center\">Vos rendez-vous</h1>
    {% for rdv in rdvs %}
        <div class=\"card\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h3>{{ rdv.heure|date('H:i d-m-Y') }}</h3>
                <h5 class=\"card-title\">Dr.{{ rdv.Medecin.prenom }} {{ rdv.Medecin.nom }}</h5>
                {% if is_granted('ROLE_SECRETAIRE') %}
                    <h4>{{ rdv.patient.username }}</h4>
                {% endif %}
                <p class=\"card-text\">{{ rdv.medecin.specialite }}</p>
                <h3>{{ rdv.etat }}</h3>
                {% if is_granted('ROLE_SECRETAIRE') %}
                    <button type=\"button\" class=\"btn btn-success\"><a href=\"{{ path(\"accept\", {id: rdv.id}) }}\">Accepter</a></button>
                    <button type=\"button\" class=\"btn btn-danger\"><a href=\"{{ path(\"decline\", {id: rdv.id}) }}\">Refuser</a></button>
                {% endif %}

            </div>
        </div>
    {% endfor %}
{% endblock %}
", "rdv_list/index.html.twig", "C:\\wamp64\\www\\patient_symfony\\templates\\rdv_list\\index.html.twig");
    }
}
