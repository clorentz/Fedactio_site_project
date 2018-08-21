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
  Quiz modification :
";
        // line 30
        echo "</h3>

";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
<div class=\"form-group\">
  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "difficulty", array()), 'row');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "school", array()), 'row');
        echo "
</div>

";
        // line 41
        $context["question_cmpt"] = 1;
        // line 42
        $context["question_index"] = 0;
        // line 43
        echo "
<div class=\"js-training-questions-wrapper\"
   data-prototype=\" ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "questions", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\"
   data-index=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "questions", array())), "html", null, true);
        echo "\">
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 48
            echo "  <div class=\"js-training-questions-item\">
  <h4> Question ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " </h4>

  ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "question", array()), 'row');
            echo "
  ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "difficulty", array()), 'row');
            echo "
  ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "image", array()), 'row');
            echo "

    ";
            // line 55
            if (( !twig_test_empty((isset($context["image_locations"]) || array_key_exists("image_locations", $context) ? $context["image_locations"] : (function () { throw new Twig_Error_Runtime('Variable "image_locations" does not exist.', 55, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["image_locations"]) || array_key_exists("image_locations", $context) ? $context["image_locations"] : (function () { throw new Twig_Error_Runtime('Variable "image_locations" does not exist.', 55, $this->source); })()), (isset($context["question_index"]) || array_key_exists("question_index", $context) ? $context["question_index"] : (function () { throw new Twig_Error_Runtime('Variable "question_index" does not exist.', 55, $this->source); })()), array(), "array")))) {
                // line 56
                echo "      <div class='question_image'>
        current image:
          <img src=\" ";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/question_images/" . twig_get_attribute($this->env, $this->source, (isset($context["image_locations"]) || array_key_exists("image_locations", $context) ? $context["image_locations"] : (function () { throw new Twig_Error_Runtime('Variable "image_locations" does not exist.', 58, $this->source); })()), (isset($context["question_index"]) || array_key_exists("question_index", $context) ? $context["question_index"] : (function () { throw new Twig_Error_Runtime('Variable "question_index" does not exist.', 58, $this->source); })()), array(), "array"))), "html", null, true);
                echo " \" alt=\"current image\">
      </div>
    ";
            } else {
                // line 61
                echo "      No current image found
    ";
            }
            // line 63
            echo "
    <h5> Answers </h5>
    <div class=\"js-training-answers-wrapper\"
    data-prototype=\" ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "answers", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
            echo "\"
    data-index=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "answers", array())), "html", null, true);
            echo "\"
    data-question=\"";
            // line 68
            echo twig_escape_filter($this->env, ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 68, $this->source); })()) - 1), "html", null, true);
            echo "\">

    <table style=\"width:100%\" id='answers'>
      <tr id='answers-row'>
        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 73
                echo "        <td>
          <div class=\"js-training-answers-item\">
          ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["answer"], 'errors');
                echo "
          ";
                // line 76
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
            // line 83
            echo "      </tr>
    </table>
    <a href=\"\" class=\"js-training-answers-item-add\">
             <span class=\"fa fa-plus-circle\"></span>
             Add Another Answer to the question
   </a>
  </div>
    ";
            // line 90
            $context["question_index"] = ((isset($context["question_index"]) || array_key_exists("question_index", $context) ? $context["question_index"] : (function () { throw new Twig_Error_Runtime('Variable "question_index" does not exist.', 90, $this->source); })()) + 1);
            // line 91
            echo "    ";
            $context["question_cmpt"] = ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 91, $this->source); })()) + 1);
            // line 92
            echo "    <button type=\"button\" class=\"btn btn-danger js-remove-questions-item\">Remove the question</button>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "  <a href=\"\" class=\"js-training-questions-item-add\">
           <span class=\"fa fa-plus-circle\"></span>
           Add Another Question to the quiz
 </a>
</div>

";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "send", array()), 'row');
        echo "
";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        echo "

<a href=";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_training", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new Twig_Error_Runtime('Variable "quiz" does not exist.', 104, $this->source); })()), "id", array()))), "html", null, true);
        echo " class=\"btn btn-danger\">Remove the quiz</a>

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
        return array (  285 => 104,  280 => 102,  276 => 101,  268 => 95,  260 => 92,  257 => 91,  255 => 90,  246 => 83,  233 => 76,  229 => 75,  225 => 73,  221 => 72,  214 => 68,  210 => 67,  206 => 66,  201 => 63,  197 => 61,  191 => 58,  187 => 56,  185 => 55,  180 => 53,  176 => 52,  172 => 51,  167 => 49,  164 => 48,  160 => 47,  156 => 46,  152 => 45,  148 => 43,  146 => 42,  144 => 41,  138 => 38,  131 => 34,  126 => 32,  122 => 30,  117 => 19,  108 => 16,  105 => 15,  101 => 14,  98 => 13,  89 => 12,  75 => 8,  66 => 7,  55 => 4,  46 => 3,  15 => 1,);
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
  Quiz modification :
{#  {% if quiz.difficulty == 1 %}
    First Grade
  {% elseif quiz.difficulty == 2 %}
    Second Grade
  {% elseif quiz.difficulty == 3 %}
    Third Grade
  {% endif %}
#}
</h3>

{{ form_start(form) }}
<div class=\"form-group\">
  {{ form_row(form.difficulty)}}
</div>

<div class=\"form-group\">
  {{ form_row(form.school)}}
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

    {% if (image_locations is not empty) and (image_locations[question_index] is not empty) %}
      <div class='question_image'>
        current image:
          <img src=\" {{ asset('uploads/question_images/' ~ image_locations[question_index]) }} \" alt=\"current image\">
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

<a href={{ path('admin_delete_training', {'id': quiz.id}) }} class=\"btn btn-danger\">Remove the quiz</a>

{% endblock %}
", "admin/admin_training.html.twig", "/home/clorentz/www/fedactio_pangea/templates/admin/admin_training.html.twig");
    }
}
