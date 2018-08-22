<?php

/* public/training_choice.html.twig */
class __TwigTemplate_54ffe62ffffa4d85b8c3bb36aae5689a21ef009b51d375d26bc483e426f4c9ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("homepage.html.twig", "public/training_choice.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/training_choice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/training_choice.html.twig"));

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
        echo "  Page d'entraînement
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
        echo "<h1> Training section </h1>

<h3>Primary School</h3>
<div class=\"d-flex\" role=\"group\" aria-label=\"Primary Traning Choice\">
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["primary_quiz"]) || array_key_exists("primary_quiz", $context) ? $context["primary_quiz"] : (function () { throw new Twig_Error_Runtime('Variable "primary_quiz" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 13
            echo "      <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("training", array("id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", array()))), "html", null, true);
            echo " class=\"btn btn-secondary w-100 training-choice-btn\">Entrainement de niveau ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["difficulty"]) || array_key_exists("difficulty", $context) ? $context["difficulty"] : (function () { throw new Twig_Error_Runtime('Variable "difficulty" does not exist.', 13, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) - 1), array(), "array"), "html", null, true);
            echo "</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>

<h3>Secondary School</h3>
<div class=\"d-flex\" role=\"group\" aria-label=\"Secondary Traning Choice\">
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["secondary_quiz"]) || array_key_exists("secondary_quiz", $context) ? $context["secondary_quiz"] : (function () { throw new Twig_Error_Runtime('Variable "secondary_quiz" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 20
            echo "      <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("training", array("id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", array()))), "html", null, true);
            echo " class=\"btn btn-secondary w-100 training-choice-btn\">Entrainement de niveau ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["difficulty"]) || array_key_exists("difficulty", $context) ? $context["difficulty"] : (function () { throw new Twig_Error_Runtime('Variable "difficulty" does not exist.', 20, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) - 1), array(), "array"), "html", null, true);
            echo "</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/training_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  105 => 20,  101 => 19,  95 => 15,  84 => 13,  80 => 12,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'homepage.html.twig' %}

{% block title %}
  Page d'entraînement
{% endblock %}

{% block body %}
<h1> Training section </h1>

<h3>Primary School</h3>
<div class=\"d-flex\" role=\"group\" aria-label=\"Primary Traning Choice\">
  {% for quiz in primary_quiz %}
      <a href={{ path('training', {'id': quiz.id}) }} class=\"btn btn-secondary w-100 training-choice-btn\">Entrainement de niveau {{ difficulty[quiz.difficulty-1] }}</a>
  {% endfor %}
</div>

<h3>Secondary School</h3>
<div class=\"d-flex\" role=\"group\" aria-label=\"Secondary Traning Choice\">
  {% for quiz in secondary_quiz %}
      <a href={{ path('training', {'id': quiz.id}) }} class=\"btn btn-secondary w-100 training-choice-btn\">Entrainement de niveau {{ difficulty[quiz.difficulty-1] }}</a>
  {% endfor %}
</div>

{% endblock %}
", "public/training_choice.html.twig", "/home/clorentz/www/fedactio_pangea/templates/public/training_choice.html.twig");
    }
}
