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

/* index_rdv/index.html.twig */
class __TwigTemplate_6a6e41de7987a2babc4f8a8dd8659d69b5253723c0ca8e900aa4f099aacd0ba9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index_rdv/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index_rdv/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index_rdv/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->loadTemplate("navbar.html.twig", "index_rdv/index.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SECRETAIRE"))) {
            // line 7
            echo "        <center>
            <DIV STYLE=\"margin-top: 250PX\">
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><a style=\"color: white\" href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medecinliste");
            echo "\">Prendre Rendez-vous</a></button>
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><a style=\"color: white\" href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv_listWaitPatient");
            echo "\">Voir les rendez-vous en attente</a></button>
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><a style=\"color: white\" href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv_listAccept");
            echo "\">Voir mes rendez-vous</a></button>
            </DIV>
        </center>

    ";
        }
        // line 16
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SECRETAIRE")) {
            // line 17
            echo "        <center>
            <DIV STYLE=\"margin-top: 250PX\">
                <button type=\"button\" class=\"btn btn-secondary btn-lg\" style=\"margin-left: auto;margin-top: auto;margin-right: auto\"><a style=\"color: white\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv_listWait");
            echo "\">Voir les rendez-vous en attente</a></button>
                <button type=\"button\" class=\"btn btn-secondary btn-lg\" style=\"margin-left: auto;margin-top: auto;margin-right: auto\"><a style=\"color: white\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rdv_listAll");
            echo "\">Voir les demandes de rendez-vous</a></button>
                <button type=\"button\" class=\"btn btn-secondary btn-lg\" style=\"margin-left: auto;margin-top: auto;margin-right: auto\"><a style=\"color: white\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medecinliste");
            echo "\">Voir les médecins</a></button>

            </DIV>
        </center>
    ";
        }
        // line 26
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index_rdv/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  109 => 21,  105 => 20,  101 => 19,  97 => 17,  94 => 16,  86 => 11,  82 => 10,  78 => 9,  74 => 7,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    {% include 'navbar.html.twig' %}
    {% if is_granted('ROLE_PATIENT') and not is_granted('ROLE_SECRETAIRE') %}
        <center>
            <DIV STYLE=\"margin-top: 250PX\">
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><a style=\"color: white\" href=\"{{ path(\"medecinliste\") }}\">Prendre Rendez-vous</a></button>
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><a style=\"color: white\" href=\"{{ path(\"rdv_listWaitPatient\") }}\">Voir les rendez-vous en attente</a></button>
                <button type=\"button\" class=\"btn btn-secondary btn-lg\"><a style=\"color: white\" href=\"{{ path(\"rdv_listAccept\") }}\">Voir mes rendez-vous</a></button>
            </DIV>
        </center>

    {% endif %}
    {% if is_granted('ROLE_SECRETAIRE') %}
        <center>
            <DIV STYLE=\"margin-top: 250PX\">
                <button type=\"button\" class=\"btn btn-secondary btn-lg\" style=\"margin-left: auto;margin-top: auto;margin-right: auto\"><a style=\"color: white\" href=\"{{ path(\"rdv_listWait\") }}\">Voir les rendez-vous en attente</a></button>
                <button type=\"button\" class=\"btn btn-secondary btn-lg\" style=\"margin-left: auto;margin-top: auto;margin-right: auto\"><a style=\"color: white\" href=\"{{ path(\"rdv_listAll\") }}\">Voir les demandes de rendez-vous</a></button>
                <button type=\"button\" class=\"btn btn-secondary btn-lg\" style=\"margin-left: auto;margin-top: auto;margin-right: auto\"><a style=\"color: white\" href=\"{{ path(\"medecinliste\") }}\">Voir les médecins</a></button>

            </DIV>
        </center>
    {% endif %}

{% endblock %}
", "index_rdv/index.html.twig", "C:\\Users\\33769\\Desktop\\ppe2\\projetpatientv2\\templates\\index_rdv\\index.html.twig");
    }
}
