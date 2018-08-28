<?php

/* public/correction.html.twig */
class __TwigTemplate_607402a6191cc35535f8951adb6a5e37bbf1708c5a48f9bef56cc296abe6fa05 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("homepage.html.twig", "public/correction.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/correction.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/correction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page de correction de quiz
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
";
        // line 10
        $context["question_cmpt"] = 0;
        // line 11
        echo "
<!-- Print out the correction to the math quiz selected -->
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new Twig_Error_Runtime('Variable "quiz" does not exist.', 13, $this->source); })()), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 14
            echo " <h2> Question n°";
            echo twig_escape_filter($this->env, ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 14, $this->source); })()) + 1), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new Twig_Error_Runtime('Variable "quiz" does not exist.', 14, $this->source); })()), "questions", array()), (isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 14, $this->source); })()), array(), "array"), "question", array()), "html", null, true);
            echo "</h2>

 <div class=\"btn-group d-flex\" role=\"group\" aria-label=\"";
            // line 16
            echo twig_escape_filter($this->env, ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 16, $this->source); })()) + 1), "html", null, true);
            echo "\">
   ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 18
                echo "   <!-- The buttons are disabled so there is no click possible -->
   <!-- If the answer is one of the correct ones, it is green, otherwise it is gray -->
     <button type=\"button\" class=\"btn ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["answer"], "isTrue", array())) {
                    echo " btn-success ";
                } else {
                    echo " btn-light ";
                }
                echo " w-100\" disabled>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", array()), "html", null, true);
                echo "</button>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo " </div>
 ";
            // line 23
            $context["question_cmpt"] = ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 23, $this->source); })()) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/correction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 23,  121 => 22,  107 => 20,  103 => 18,  99 => 17,  95 => 16,  87 => 14,  83 => 13,  79 => 11,  77 => 10,  74 => 9,  65 => 8,  54 => 5,  45 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'homepage.html.twig' %}

{% block title %}
  Page de correction de quiz
{% endblock %}

{% block body %}

{% set question_cmpt = 0 %}

<!-- Print out the correction to the math quiz selected -->
{% for question in quiz.questions %}
 <h2> Question n°{{question_cmpt + 1}}: {{quiz.questions[question_cmpt].question}}</h2>

 <div class=\"btn-group d-flex\" role=\"group\" aria-label=\"{{ question_cmpt + 1}}\">
   {% for answer in question.answers %}
   <!-- The buttons are disabled so there is no click possible -->
   <!-- If the answer is one of the correct ones, it is green, otherwise it is gray -->
     <button type=\"button\" class=\"btn {% if answer.isTrue %} btn-success {% else %} btn-light {% endif %} w-100\" disabled>{{answer.answer}}</button>
   {% endfor %}
 </div>
 {% set question_cmpt = question_cmpt + 1 %}
{% endfor %}
{% endblock %}
", "public/correction.html.twig", "/home/clorentz/www/fedactio_pangea/templates/public/correction.html.twig");
    }
}
