<?php

/* admin/admin_training_choice.html.twig */
class __TwigTemplate_4f3f078f6dd50d052fb5d1985a009cab0706e49672b97ea61cb8bf3b3bfc120d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin_homepage.html.twig", "admin/admin_training_choice.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin_training_choice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin_training_choice.html.twig"));

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
        echo "  Page de choix du formulaire d'entrainement
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  ";
            // line 11
            echo $context["flashMessage"];
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
<h1>Choix du quiz d'entrainement à modifier</h1>

<h3>École primaire</h3>
<div class=\"d-flex\" role=\"group\" aria-label=\"Primary Traning Choice\">
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["primary_quiz"]) || array_key_exists("primary_quiz", $context) ? $context["primary_quiz"] : (function () { throw new Twig_Error_Runtime('Variable "primary_quiz" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 23
            echo "      <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_training", array("id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", array()))), "html", null, true);
            echo " class=\"btn btn-secondary w-100 training-choice-btn\">Modifier l'entrainement du niveau ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["difficulty"]) || array_key_exists("difficulty", $context) ? $context["difficulty"] : (function () { throw new Twig_Error_Runtime('Variable "difficulty" does not exist.', 23, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) - 1), array(), "array"), "html", null, true);
            echo "</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>

<h3>École Secondaire</h3>
<div class=\"d-flex\" role=\"group\" aria-label=\"Secondary Traning Choice\">
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["secondary_quiz"]) || array_key_exists("secondary_quiz", $context) ? $context["secondary_quiz"] : (function () { throw new Twig_Error_Runtime('Variable "secondary_quiz" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 30
            echo "      <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_training", array("id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", array()))), "html", null, true);
            echo " class=\"btn btn-secondary w-100 training-choice-btn\">Modifier l'entrainement du niveau ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["difficulty"]) || array_key_exists("difficulty", $context) ? $context["difficulty"] : (function () { throw new Twig_Error_Runtime('Variable "difficulty" does not exist.', 30, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) - 1), array(), "array"), "html", null, true);
            echo "</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>

<h1> Ajouter un quiz </h1>

<!-- Button to create a new quiz -->
<a href=";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new_training");
        echo " class=\"btn btn-success\">Ajouter un quiz</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_training_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  139 => 32,  128 => 30,  124 => 29,  118 => 25,  107 => 23,  103 => 22,  96 => 17,  84 => 11,  81 => 10,  77 => 9,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin_homepage.html.twig' %}

{% block title %}
  Page de choix du formulaire d'entrainement
{% endblock %}

{% block body %}

{% for flashMessage in app.session.flashbag.get('success') %}
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  {{ flashMessage|raw }}
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
{% endfor %}

<h1>Choix du quiz d'entrainement à modifier</h1>

<h3>École primaire</h3>
<div class=\"d-flex\" role=\"group\" aria-label=\"Primary Traning Choice\">
  {% for quiz in primary_quiz %}
      <a href={{ path('admin_training', {'id': quiz.id}) }} class=\"btn btn-secondary w-100 training-choice-btn\">Modifier l'entrainement du niveau {{ difficulty[quiz.difficulty-1] }}</a>
  {% endfor %}
</div>

<h3>École Secondaire</h3>
<div class=\"d-flex\" role=\"group\" aria-label=\"Secondary Traning Choice\">
  {% for quiz in secondary_quiz %}
      <a href={{ path('admin_training', {'id': quiz.id}) }} class=\"btn btn-secondary w-100 training-choice-btn\">Modifier l'entrainement du niveau {{ difficulty[quiz.difficulty-1] }}</a>
  {% endfor %}
</div>

<h1> Ajouter un quiz </h1>

<!-- Button to create a new quiz -->
<a href={{ path('admin_new_training') }} class=\"btn btn-success\">Ajouter un quiz</a>

{% endblock %}
", "admin/admin_training_choice.html.twig", "/home/clorentz/www/fedactio_pangea/templates/admin/admin_training_choice.html.twig");
    }
}
