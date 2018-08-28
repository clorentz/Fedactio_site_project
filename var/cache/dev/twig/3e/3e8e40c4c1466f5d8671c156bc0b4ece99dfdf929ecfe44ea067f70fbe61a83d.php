<?php

/* homepage.html.twig */
class __TwigTemplate_b44a18079357b6aa8ce65393e5bda5faf200d26a4c82fbf8dd38dac2769222aa extends Twig_Template
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

  <button type=\"button\" class=\"btn btn-primary dropdown-toggle ";
        // line 19
        if (("gallery" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 19, $this->source); })()))) {
            echo " active ";
        }
        echo " w-100 mobile-menu-change\" data-toggle=\"dropdown\">
     Galleries
  </button>
  <div class=\"dropdown-menu mobile-menu-change\">
    <a class=\"dropdown-item\" href=";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("img_gallery");
        echo ">Gallerie d'images</a>
    <a class=\"dropdown-item\" href=";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_gallery");
        echo ">Quizs précédents</a>
  </div>
  <a href=";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("training_choice");
        echo " class=\"btn btn-primary ";
        if (("training_choice" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 26, $this->source); })()))) {
            echo " active ";
        }
        echo " w-100 mobile-menu-change\">S'entraîner</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "<img class=\"d-block w-100\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner_homepage.png"), "html", null, true);
        echo "\" alt=\"Homepage Banner\" />

<!-- Informations about the competition -->
<h3> Les dates importantes </h3>
<div class=\"row\">
  <div class=\"col\">
    <ul>
      <li> Inscription: du ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["inscriptionStartDate"]) || array_key_exists("inscriptionStartDate", $context) ? $context["inscriptionStartDate"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptionStartDate" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, (isset($context["inscriptionEndDate"]) || array_key_exists("inscriptionEndDate", $context) ? $context["inscriptionEndDate"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptionEndDate" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " </li>
      <li> Date de la compétition individuelle: ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["indivD"]) || array_key_exists("indivD", $context) ? $context["indivD"] : (function () { throw new Twig_Error_Runtime('Variable "indivD" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " </li>
      <li> Emplacement de la compétition individuelle: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new Twig_Error_Runtime('Variable "competition" does not exist.', 39, $this->source); })()), "individualLocation", array()), "html", null, true);
        echo " </li>
    </ul>
  </div>
  <div class=\"col\">
    <!-- Test if we are between the inscription start and end date -->
    ";
        // line 44
        if (((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new Twig_Error_Runtime('Variable "competition" does not exist.', 44, $this->source); })()), "inscriptionStartDate", array())) <= twig_date_converter($this->env)) && (twig_date_converter($this->env) <= twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new Twig_Error_Runtime('Variable "competition" does not exist.', 44, $this->source); })()), "inscriptionEndDate", array()))))) {
            // line 45
            echo "      <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enroll");
            echo " \" class=\"btn btn-secondary\"> S'inscrire (jusqu'au ";
            echo twig_escape_filter($this->env, (isset($context["inscriptionEndDate"]) || array_key_exists("inscriptionEndDate", $context) ? $context["inscriptionEndDate"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptionEndDate" does not exist.', 45, $this->source); })()), "html", null, true);
            echo " )</a>
    ";
        } else {
            // line 47
            echo "        <!-- Otherwise displays the \"Keep me updated\" button -->
        Les inscriptions ne sont pas ouvertes pour le moment. </br>
        <a href=\" ";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updated");
            echo " \" class=\"btn btn-secondary\"> Me tenir au courant</a>
    ";
        }
        // line 51
        echo "  </div>
</div>

";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "<script src=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/public.js"), "html", null, true);
        echo "\"></script>
<script>
\$(document).ready(function() {
\tif (\$(window).width() < 550) {
 \t   var noMobile = document.querySelectorAll('.mobile-menu-change'),
    \ti = 0,
    \tl = noMobile.length;

  \t\tfor (i; i < l; i++) {
        \t  \$('.mobile-menu-row').append(noMobile[i]);
  \t\t}
    }
});
</script>
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
        return array (  249 => 55,  240 => 54,  229 => 70,  227 => 54,  222 => 51,  217 => 49,  213 => 47,  205 => 45,  203 => 44,  195 => 39,  191 => 38,  185 => 37,  174 => 30,  165 => 29,  149 => 26,  144 => 24,  140 => 23,  131 => 19,  122 => 17,  114 => 16,  105 => 15,  103 => 14,  99 => 12,  90 => 11,  77 => 8,  68 => 7,  57 => 4,  48 => 3,  15 => 1,);
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

  <button type=\"button\" class=\"btn btn-primary dropdown-toggle {% if 'gallery' == route %} active {% endif %} w-100 mobile-menu-change\" data-toggle=\"dropdown\">
     Galleries
  </button>
  <div class=\"dropdown-menu mobile-menu-change\">
    <a class=\"dropdown-item\" href={{ path('img_gallery') }}>Gallerie d'images</a>
    <a class=\"dropdown-item\" href={{ path('quiz_gallery') }}>Quizs précédents</a>
  </div>
  <a href={{ path('training_choice') }} class=\"btn btn-primary {% if 'training_choice' == route %} active {% endif %} w-100 mobile-menu-change\">S'entraîner</a>
{% endblock %}

{% block body %}
<img class=\"d-block w-100\" src=\"{{ asset(\"img/banner_homepage.png\") }}\" alt=\"Homepage Banner\" />

<!-- Informations about the competition -->
<h3> Les dates importantes </h3>
<div class=\"row\">
  <div class=\"col\">
    <ul>
      <li> Inscription: du {{ inscriptionStartDate }} au {{ inscriptionEndDate }} </li>
      <li> Date de la compétition individuelle: {{ indivD }} </li>
      <li> Emplacement de la compétition individuelle: {{ competition.individualLocation }} </li>
    </ul>
  </div>
  <div class=\"col\">
    <!-- Test if we are between the inscription start and end date -->
    {% if (date(competition.inscriptionStartDate) <= date()) and (date() <= date(competition.inscriptionEndDate)) %}
      <a href=\" {{ path(\"enroll\") }} \" class=\"btn btn-secondary\"> S'inscrire (jusqu'au {{inscriptionEndDate}} )</a>
    {% else %}
        <!-- Otherwise displays the \"Keep me updated\" button -->
        Les inscriptions ne sont pas ouvertes pour le moment. </br>
        <a href=\" {{ path(\"updated\") }} \" class=\"btn btn-secondary\"> Me tenir au courant</a>
    {% endif %}
  </div>
</div>

{% block javascripts %}
<script src=\" {{ asset('build/public.js') }}\"></script>
<script>
\$(document).ready(function() {
\tif (\$(window).width() < 550) {
 \t   var noMobile = document.querySelectorAll('.mobile-menu-change'),
    \ti = 0,
    \tl = noMobile.length;

  \t\tfor (i; i < l; i++) {
        \t  \$('.mobile-menu-row').append(noMobile[i]);
  \t\t}
    }
});
</script>
{% endblock %}

{% endblock %}
", "homepage.html.twig", "/home/clorentz/www/fedactio_pangea/templates/homepage.html.twig");
    }
}
