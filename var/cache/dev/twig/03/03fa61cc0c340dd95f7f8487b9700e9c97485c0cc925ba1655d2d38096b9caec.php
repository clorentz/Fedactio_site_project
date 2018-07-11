<?php

/* admin/admin_training.html.twig */
class __TwigTemplate_3cf964dad1c41ee5c4b80a336ffe5a87e3556bb6afad9b71b0f0b22bd6d69457 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin_homepage.html.twig", "admin/admin_training.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin_training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin_training.html.twig"));

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
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "  <div class=\"alert alert-success\">
    ";
            // line 16
            echo $context["flashMessage"];
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
<h3>
  Quiz difficulty:
  ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new Twig_Error_Runtime('Variable "quiz" does not exist.', 22, $this->source); })()), "difficulty", array()) == 1)) {
            // line 23
            echo "    First Grade
  ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new Twig_Error_Runtime('Variable "quiz" does not exist.', 24, $this->source); })()), "difficulty", array()) == 2)) {
            // line 25
            echo "    Second Grade
  ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new Twig_Error_Runtime('Variable "quiz" does not exist.', 26, $this->source); })()), "difficulty", array()) == 3)) {
            // line 27
            echo "    Third Grade
  ";
        }
        // line 29
        echo "</h3>

";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
<div class=\"form-group\">
  ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "difficulty", array()), 'row');
        echo "
</div>

";
        // line 36
        $context["question_cmpt"] = 1;
        // line 37
        $context["question_index"] = 0;
        // line 38
        echo "
<div class=\"js-training-questions-wrapper\"
   data-prototype=\" ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "questions", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\"
   data-index=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "questions", array())), "html", null, true);
        echo "\">
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 43
            echo "  <div class=\"js-training-questions-item\">
  <h4> Question ";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 44, $this->source); })()), "html", null, true);
            echo " </h4>

  ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "question", array()), 'row');
            echo "
  ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "difficulty", array()), 'row');
            echo "
  ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "image", array()), 'row');
            echo "

    ";
            // line 50
            if ( !twig_test_empty((isset($context["image_location"]) || array_key_exists("image_location", $context) ? $context["image_location"] : (function () { throw new Twig_Error_Runtime('Variable "image_location" does not exist.', 50, $this->source); })()))) {
                // line 51
                echo "      <div class='question_image'>
        current image:
          <img src=\" ";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/question_images/" . (isset($context["image_location"]) || array_key_exists("image_location", $context) ? $context["image_location"] : (function () { throw new Twig_Error_Runtime('Variable "image_location" does not exist.', 53, $this->source); })()))), "html", null, true);
                echo " \" alt=\"current image\">
      </div>
    ";
            } else {
                // line 56
                echo "      No current image found
    ";
            }
            // line 58
            echo "
    <h5> Answers </h5>
    <div class=\"js-training-answers-wrapper\"
    data-prototype=\" ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "answers", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
            echo "\"
    data-index=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "answers", array())), "html", null, true);
            echo "\"
    data-question=\"";
            // line 63
            echo twig_escape_filter($this->env, ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 63, $this->source); })()) - 1), "html", null, true);
            echo "\">

    <table style=\"width:100%\" id='answers'>
      <tr id='answers-row'>
        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 68
                echo "        <td>
          <div class=\"js-training-answers-item\">
          ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["answer"], 'errors');
                echo "
          ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["answer"], 'widget');
                echo "
          <!--<div class=\"col-md-1\">-->
            <a href='' class='js-remove-answers-item'> <i class=\"far fa-trash-alt\"></i>Remove the answer</a>
          <!-- </div> -->
        </div>
        </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "      </tr>
    </table>
    <a href=\"\" class=\"js-training-answers-item-add\">
             <span class=\"fa fa-plus-circle\"></span>
             Add Another Answer to the question
   </a>
  </div>
    ";
            // line 85
            $context["question_index"] = ((isset($context["question_index"]) || array_key_exists("question_index", $context) ? $context["question_index"] : (function () { throw new Twig_Error_Runtime('Variable "question_index" does not exist.', 85, $this->source); })()) + 1);
            // line 86
            echo "    ";
            $context["question_cmpt"] = ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 86, $this->source); })()) + 1);
            // line 87
            echo "    <button type=\"button\" class=\"btn btn-danger js-remove-questions-item\">Remove the question</button>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "  <a href=\"\" class=\"js-training-questions-item-add\">
           <span class=\"fa fa-plus-circle\"></span>
           Add Another Question to the quiz
 </a>
</div>

";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->source); })()), "send", array()), 'row');
        echo "
";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 97,  285 => 96,  277 => 90,  269 => 87,  266 => 86,  264 => 85,  255 => 78,  242 => 71,  238 => 70,  234 => 68,  230 => 67,  223 => 63,  219 => 62,  215 => 61,  210 => 58,  206 => 56,  200 => 53,  196 => 51,  194 => 50,  189 => 48,  185 => 47,  181 => 46,  176 => 44,  173 => 43,  169 => 42,  165 => 41,  161 => 40,  157 => 38,  155 => 37,  153 => 36,  147 => 33,  142 => 31,  138 => 29,  134 => 27,  132 => 26,  129 => 25,  127 => 24,  124 => 23,  122 => 22,  117 => 19,  108 => 16,  105 => 15,  101 => 14,  98 => 13,  89 => 12,  75 => 8,  66 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin_homepage.html.twig' %}

{% block title %}
  Page d'entraînement
{% endblock %}

{% block stylesheet %}
  <link rel=\"stylesheet\" href=\"{{ asset('build/admin.css') }}\" />

{% endblock %}

{% block body %}

{% for flashMessage in app.session.flashbag.get('success') %}
  <div class=\"alert alert-success\">
    {{ flashMessage|raw }}
  </div>
{% endfor %}

<h3>
  Quiz difficulty:
  {% if quiz.difficulty == 1 %}
    First Grade
  {% elseif quiz.difficulty == 2 %}
    Second Grade
  {% elseif quiz.difficulty == 3 %}
    Third Grade
  {% endif %}
</h3>

{{ form_start(form) }}
<div class=\"form-group\">
  {{ form_row(form.difficulty)}}
</div>

{% set question_cmpt = 1 %}
{% set question_index = 0 %}

<div class=\"js-training-questions-wrapper\"
   data-prototype=\" {{ form_widget(form.questions.vars.prototype)|e('html_attr') }}\"
   data-index=\"{{ form.questions|length }}\">
{% for question in form.questions %}
  <div class=\"js-training-questions-item\">
  <h4> Question {{question_cmpt}} </h4>

  {{ form_row(question.question) }}
  {{ form_row(question.difficulty) }}
  {{ form_row(question.image) }}

    {% if image_location is not empty %}
      <div class='question_image'>
        current image:
          <img src=\" {{ asset('uploads/question_images/' ~ image_location) }} \" alt=\"current image\">
      </div>
    {% else %}
      No current image found
    {% endif %}

    <h5> Answers </h5>
    <div class=\"js-training-answers-wrapper\"
    data-prototype=\" {{ form_widget(question.answers.vars.prototype)|e('html_attr') }}\"
    data-index=\"{{ question.answers|length }}\"
    data-question=\"{{ question_cmpt - 1}}\">

    <table style=\"width:100%\" id='answers'>
      <tr id='answers-row'>
        {% for answer in question.answers %}
        <td>
          <div class=\"js-training-answers-item\">
          {{ form_errors(answer) }}
          {{ form_widget(answer) }}
          <!--<div class=\"col-md-1\">-->
            <a href='' class='js-remove-answers-item'> <i class=\"far fa-trash-alt\"></i>Remove the answer</a>
          <!-- </div> -->
        </div>
        </td>
        {% endfor %}
      </tr>
    </table>
    <a href=\"\" class=\"js-training-answers-item-add\">
             <span class=\"fa fa-plus-circle\"></span>
             Add Another Answer to the question
   </a>
  </div>
    {% set question_index = question_index + 1 %}
    {% set question_cmpt = question_cmpt + 1 %}
    <button type=\"button\" class=\"btn btn-danger js-remove-questions-item\">Remove the question</button>
    </div>
  {% endfor %}
  <a href=\"\" class=\"js-training-questions-item-add\">
           <span class=\"fa fa-plus-circle\"></span>
           Add Another Question to the quiz
 </a>
</div>

{{ form_row(form.send) }}
{{ form_end(form) }}

{% endblock %}
", "admin/admin_training.html.twig", "/home/clorentz/www/fedactio_pangea/templates/admin/admin_training.html.twig");
    }
}
