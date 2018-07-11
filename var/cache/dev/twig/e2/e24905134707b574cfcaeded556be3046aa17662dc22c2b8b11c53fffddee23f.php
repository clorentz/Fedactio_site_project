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
            'topmenu' => array($this, 'block_topmenu'),
            'body' => array($this, 'block_body'),
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
    public function block_topmenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topmenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topmenu"));

        // line 8
        echo "<!-- Top menu for the public -->
<!-- Test if the page is active to set the button correclty -->
  ";
        // line 10
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 11
        echo "  <a href=";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo " class=\"btn btn-primary ";
        if (("homepage" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 11, $this->source); })()))) {
            echo " active ";
        }
        echo "\"> <i class=\"fas fa-home\"></i> Accueil</a>
  <a href=";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        echo " class=\"btn btn-primary ";
        if (("aboutus" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 12, $this->source); })()))) {
            echo " active ";
        }
        echo "\">À propos</a>
  <a href=";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("regulation");
        echo " class=\"btn btn-primary ";
        if (("regulation" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 13, $this->source); })()))) {
            echo " active ";
        }
        echo "\">Règlement</a>
  <a href=";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo " class=\"btn btn-primary ";
        if (("gallery" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 14, $this->source); })()))) {
            echo " active ";
        }
        echo "\">Gallerie</a>
  <a href=";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("training");
        echo " class=\"btn btn-primary ";
        if (("training" == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 15, $this->source); })()))) {
            echo " active ";
        }
        echo "\">S'entraîner</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<h3> Concours de mathématiques Pangea </h3>

Informations du concours:

<ul>
  <li> Inscription date: ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["inscriptionD"]) || array_key_exists("inscriptionD", $context) ? $context["inscriptionD"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptionD" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " </li>
  <li> Individual date: ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["indivD"]) || array_key_exists("indivD", $context) ? $context["indivD"] : (function () { throw new Twig_Error_Runtime('Variable "indivD" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " </li>
  <li> Individual location: ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new Twig_Error_Runtime('Variable "competition" does not exist.', 26, $this->source); })()), "individualLocation", array()), "html", null, true);
        echo " </li>
  <li> Competition Start Date: ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["competSD"]) || array_key_exists("competSD", $context) ? $context["competSD"] : (function () { throw new Twig_Error_Runtime('Variable "competSD" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " </li>
  <li> Competition End Date: ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["competED"]) || array_key_exists("competED", $context) ? $context["competED"] : (function () { throw new Twig_Error_Runtime('Variable "competED" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " </li>
</ul>


Informations to display
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
        return array (  162 => 28,  158 => 27,  154 => 26,  150 => 25,  146 => 24,  139 => 19,  130 => 18,  114 => 15,  106 => 14,  98 => 13,  90 => 12,  81 => 11,  79 => 10,  75 => 8,  66 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
  Page d'accueil
{% endblock %}

{% block topmenu %}
<!-- Top menu for the public -->
<!-- Test if the page is active to set the button correclty -->
  {% set route = app.request.attributes.get(\"_route\") %}
  <a href={{ path('homepage') }} class=\"btn btn-primary {% if 'homepage' == route %} active {% endif %}\"> <i class=\"fas fa-home\"></i> Accueil</a>
  <a href={{ path('aboutus') }} class=\"btn btn-primary {% if 'aboutus' == route %} active {% endif %}\">À propos</a>
  <a href={{ path('regulation') }} class=\"btn btn-primary {% if 'regulation' == route %} active {% endif %}\">Règlement</a>
  <a href={{ path('gallery') }} class=\"btn btn-primary {% if 'gallery' == route %} active {% endif %}\">Gallerie</a>
  <a href={{ path('training') }} class=\"btn btn-primary {% if 'training' == route %} active {% endif %}\">S'entraîner</a>
{% endblock %}

{% block body %}
<h3> Concours de mathématiques Pangea </h3>

Informations du concours:

<ul>
  <li> Inscription date: {{ inscriptionD }} </li>
  <li> Individual date: {{ indivD }} </li>
  <li> Individual location: {{ competition.individualLocation }} </li>
  <li> Competition Start Date: {{ competSD }} </li>
  <li> Competition End Date: {{ competED }} </li>
</ul>


Informations to display
{% endblock %}
", "homepage.html.twig", "/home/clorentz/www/fedactio_pangea/templates/homepage.html.twig");
    }
}
