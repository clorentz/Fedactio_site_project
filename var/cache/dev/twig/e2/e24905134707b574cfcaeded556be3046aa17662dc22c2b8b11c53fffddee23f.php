<?php

/* homepage.html.twig */
class __TwigTemplate_325af2151fcee78ae79f26661a9462fcf72b6841ca1777089cc5f1f9e49d7080 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topmenu' => array($this, 'block_topmenu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Page d'accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/public.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_topmenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topmenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topmenu"));

        // line 12
        echo "<!-- Top menu for the public -->
<!-- Test if the page is active to set the button correclty -->
  ";
        // line 14
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 15
        echo "  <a href=";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo " class=\"btn btn-primary ";
        if (("homepage" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 15, $this->source); })()))) {
            echo " active ";
        }
        echo " w-100\"> <i class=\"fas fa-home\"></i> Accueil</a>
  <a href=";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        echo " class=\"btn btn-primary ";
        if (("aboutus" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 16, $this->source); })()))) {
            echo " active ";
        }
        echo " w-100\">À propos</a>
  <a href=";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("regulation");
        echo " class=\"btn btn-primary ";
        if (("regulation" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 17, $this->source); })()))) {
            echo " active ";
        }
        echo " w-100\">Règlement</a>
  <!-- <div class=\"btn-group\"> -->
    <button type=\"button\" class=\"btn btn-primary dropdown-toggle ";
        // line 19
        if (("gallery" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 19, $this->source); })()))) {
            echo " active ";
        }
        echo " w-100\" data-toggle=\"dropdown\">
       Gallery
    </button>
    <div class=\"dropdown-menu\">
      <a class=\"dropdown-item\" href=";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("img_gallery");
        echo ">Image Gallery</a>
      <a class=\"dropdown-item\" href=";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_gallery");
        echo ">Previous Quizs</a>
    </div>
  <!-- </div> -->
  <a href=";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("training_choice");
        echo " class=\"btn btn-primary ";
        if (("training_choice" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 27, $this->source); })()))) {
            echo " active ";
        }
        echo " w-100\">S'entraîner</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "<img class=\"d-block w-100\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner_homepage.png"), "html", null, true);
        echo "\" alt=\"Homepage Banner\" />

<h3> Les dates importantes </h3>
<div class=\"row\">
  <div class=\"col\">
    <ul>
      <li> Inscription date: from the ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["inscriptionEndDate"]) || array_key_exists("inscriptionEndDate", $context) ? $context["inscriptionEndDate"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptionEndDate" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " until the ";
        echo twig_escape_filter($this->env, (isset($context["inscriptionEndDate"]) || array_key_exists("inscriptionEndDate", $context) ? $context["inscriptionEndDate"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptionEndDate" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " </li>
      <li> Individual date: ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["indivD"]) || array_key_exists("indivD", $context) ? $context["indivD"] : (function () { throw new Twig_Error_Runtime('Variable "indivD" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " </li>
      <li> Individual location: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new Twig_Error_Runtime('Variable "competition" does not exist.', 39, $this->source); })()), "individualLocation", array()), "html", null, true);
        echo " </li>
      <!-- <li> Competition Start Date: ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["competSD"]) || array_key_exists("competSD", $context) ? $context["competSD"] : (function () { throw new Twig_Error_Runtime('Variable "competSD" does not exist.', 40, $this->source); })()), "html", null, true);
        echo " </li>
      <li> Competition End Date: ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["competED"]) || array_key_exists("competED", $context) ? $context["competED"] : (function () { throw new Twig_Error_Runtime('Variable "competED" does not exist.', 41, $this->source); })()), "html", null, true);
        echo " </li> -->
    </ul>
  </div>
  <div class=\"col\">
    ";
        // line 45
        if (((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new Twig_Error_Runtime('Variable "competition" does not exist.', 45, $this->source); })()), "inscriptionStartDate", array())) <= twig_date_converter($this->env)) && (twig_date_converter($this->env) <= twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new Twig_Error_Runtime('Variable "competition" does not exist.', 45, $this->source); })()), "inscriptionEndDate", array()))))) {
            // line 46
            echo "      <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enroll");
            echo " \" class=\"btn btn-secondary\"> S'inscrire (jusqu'au ";
            echo twig_escape_filter($this->env, (isset($context["inscriptionEndDate"]) || array_key_exists("inscriptionEndDate", $context) ? $context["inscriptionEndDate"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptionEndDate" does not exist.', 46, $this->source); })()), "html", null, true);
            echo " )</a>
    ";
        } else {
            // line 48
            echo "        Les inscriptions ne sont pas ouvertes pour le moment. </br>
        <a href=\" ";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updated");
            echo " \" class=\"btn btn-secondary\"> Me tenir au courant</a>
    ";
        }
        // line 51
        echo "  </div>
</div>


Informations to display

";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "
<script src=\" ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/public.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 59,  258 => 58,  249 => 57,  238 => 62,  236 => 57,  228 => 51,  223 => 49,  220 => 48,  212 => 46,  210 => 45,  203 => 41,  199 => 40,  195 => 39,  191 => 38,  185 => 37,  175 => 31,  166 => 30,  150 => 27,  144 => 24,  140 => 23,  131 => 19,  122 => 17,  114 => 16,  105 => 15,  103 => 14,  99 => 12,  90 => 11,  77 => 8,  68 => 7,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
  Page d'accueil
{% endblock %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('build/public.css') }}\" />
{% endblock %}

{% block topmenu %}
<!-- Top menu for the public -->
<!-- Test if the page is active to set the button correclty -->
  {% set route = app.request.attributes.get(\"_route\") %}
  <a href={{ path('homepage') }} class=\"btn btn-primary {% if 'homepage' == route %} active {% endif %} w-100\"> <i class=\"fas fa-home\"></i> Accueil</a>
  <a href={{ path('aboutus') }} class=\"btn btn-primary {% if 'aboutus' == route %} active {% endif %} w-100\">À propos</a>
  <a href={{ path('regulation') }} class=\"btn btn-primary {% if 'regulation' == route %} active {% endif %} w-100\">Règlement</a>
  <!-- <div class=\"btn-group\"> -->
    <button type=\"button\" class=\"btn btn-primary dropdown-toggle {% if 'gallery' == route %} active {% endif %} w-100\" data-toggle=\"dropdown\">
       Gallery
    </button>
    <div class=\"dropdown-menu\">
      <a class=\"dropdown-item\" href={{ path('img_gallery') }}>Image Gallery</a>
      <a class=\"dropdown-item\" href={{ path('quiz_gallery') }}>Previous Quizs</a>
    </div>
  <!-- </div> -->
  <a href={{ path('training_choice') }} class=\"btn btn-primary {% if 'training_choice' == route %} active {% endif %} w-100\">S'entraîner</a>
{% endblock %}

{% block body %}
<img class=\"d-block w-100\" src=\"{{ asset(\"img/banner_homepage.png\") }}\" alt=\"Homepage Banner\" />

<h3> Les dates importantes </h3>
<div class=\"row\">
  <div class=\"col\">
    <ul>
      <li> Inscription date: from the {{ inscriptionEndDate }} until the {{ inscriptionEndDate }} </li>
      <li> Individual date: {{ indivD }} </li>
      <li> Individual location: {{ competition.individualLocation }} </li>
      <!-- <li> Competition Start Date: {{ competSD }} </li>
      <li> Competition End Date: {{ competED }} </li> -->
    </ul>
  </div>
  <div class=\"col\">
    {% if (date(competition.inscriptionStartDate) <= date()) and (date() <= date(competition.inscriptionEndDate)) %}
      <a href=\" {{ path(\"enroll\") }} \" class=\"btn btn-secondary\"> S'inscrire (jusqu'au {{inscriptionEndDate}} )</a>
    {% else %}
        Les inscriptions ne sont pas ouvertes pour le moment. </br>
        <a href=\" {{ path(\"updated\") }} \" class=\"btn btn-secondary\"> Me tenir au courant</a>
    {% endif %}
  </div>
</div>


Informations to display

{% block javascripts %}

<script src=\" {{ asset('build/public.js') }}\"></script>

{% endblock %}

{% endblock %}
", "homepage.html.twig", "/home/clorentz/www/fedactio_pangea/templates/homepage.html.twig");
    }
}
