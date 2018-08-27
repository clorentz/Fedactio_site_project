<?php

/* public/quiz_gallery.html.twig */
class __TwigTemplate_09fd84dd0ca503e36f0d0c8d7878e57449319d4b29bc1f6f85b704027ae67dd8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("homepage.html.twig", "public/quiz_gallery.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/quiz_gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/quiz_gallery.html.twig"));

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
        echo "  Page de gallerie de quiz
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
Voici les fichiers recensant les quizs des années précédentes ainsi que les réponses de ceux-ci:

  <h1> Quizs de l'école primaire </h1>
  ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["primary_quizs"]) || array_key_exists("primary_quizs", $context) ? $context["primary_quizs"] : (function () { throw new Twig_Error_Runtime('Variable "primary_quizs" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            echo "    <ul>
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["primary_quizs"]) || array_key_exists("primary_quizs", $context) ? $context["primary_quizs"] : (function () { throw new Twig_Error_Runtime('Variable "primary_quizs" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
                // line 15
                echo "      <li> <a href=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/previous_quiz/" . twig_get_attribute($this->env, $this->source, $context["quiz"], "quiz", array()))), "html", null, true);
                echo "\" class=\"quiz_link\">Quiz de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "yearOfQuiz", array()), "html", null, true);
                echo " pour les ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["difficulty"]) || array_key_exists("difficulty", $context) ? $context["difficulty"] : (function () { throw new Twig_Error_Runtime('Variable "difficulty" does not exist.', 15, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) - 1), array(), "array"), "html", null, true);
                echo " </a> </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </ul>
  ";
        } else {
            // line 19
            echo "      Il n'y a aucun quiz disponible pour ce niveau.
  ";
        }
        // line 21
        echo "
  <h1> Quizs de l'école secondaire </h1>
  ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["secondary_quizs"]) || array_key_exists("secondary_quizs", $context) ? $context["secondary_quizs"] : (function () { throw new Twig_Error_Runtime('Variable "secondary_quizs" does not exist.', 23, $this->source); })())) > 0)) {
            // line 24
            echo "    <ul>
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secondary_quizs"]) || array_key_exists("secondary_quizs", $context) ? $context["secondary_quizs"] : (function () { throw new Twig_Error_Runtime('Variable "secondary_quizs" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
                // line 26
                echo "      <li> <a href=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/previous_quiz/" . twig_get_attribute($this->env, $this->source, $context["quiz"], "quiz", array()))), "html", null, true);
                echo "\" class=\"quiz_link\">Quiz de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "yearOfQuiz", array()), "html", null, true);
                echo " pour les ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["difficulty"]) || array_key_exists("difficulty", $context) ? $context["difficulty"] : (function () { throw new Twig_Error_Runtime('Variable "difficulty" does not exist.', 26, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) - 1), array(), "array"), "html", null, true);
                echo " </a> </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </ul>
  ";
        } else {
            // line 30
            echo "    Il n'y a aucun quiz disponible pour ce niveau.
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/quiz_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  136 => 28,  123 => 26,  119 => 25,  116 => 24,  114 => 23,  110 => 21,  106 => 19,  102 => 17,  89 => 15,  85 => 14,  82 => 13,  80 => 12,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'homepage.html.twig' %}

{% block title %}
  Page de gallerie de quiz
{% endblock %}

{% block body %}

Voici les fichiers recensant les quizs des années précédentes ainsi que les réponses de ceux-ci:

  <h1> Quizs de l'école primaire </h1>
  {% if primary_quizs|length > 0 %}
    <ul>
      {% for quiz in primary_quizs %}
      <li> <a href=\" {{ asset(\"uploads/previous_quiz/\" ~ quiz.quiz) }}\" class=\"quiz_link\">Quiz de {{quiz.yearOfQuiz}} pour les {{ difficulty[quiz.difficulty-1] }} </a> </li>
      {% endfor %}
    </ul>
  {% else %}
      Il n'y a aucun quiz disponible pour ce niveau.
  {% endif %}

  <h1> Quizs de l'école secondaire </h1>
  {% if secondary_quizs|length > 0 %}
    <ul>
      {% for quiz in secondary_quizs %}
      <li> <a href=\" {{ asset(\"uploads/previous_quiz/\" ~ quiz.quiz) }}\" class=\"quiz_link\">Quiz de {{quiz.yearOfQuiz}} pour les {{ difficulty[quiz.difficulty-1] }} </a> </li>
      {% endfor %}
    </ul>
  {% else %}
    Il n'y a aucun quiz disponible pour ce niveau.
  {% endif %}
{% endblock %}
", "public/quiz_gallery.html.twig", "/home/clorentz/www/fedactio_pangea/templates/public/quiz_gallery.html.twig");
    }
}
