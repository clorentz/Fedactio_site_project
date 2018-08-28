<?php

/* admin/admin_training.html.twig */
class __TwigTemplate_d18b407c3ecc40fa2d7c1085cdb842cbc76604a73eb1fe90a8ccf7b075a41cdb extends Twig_Template
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
            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  ";
            // line 16
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
        // line 22
        echo "


<h3>
  Quiz modification :
</h3>

<!-- Start of quiz modification form -->
";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
<div class=\"form-group\">
  ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "difficulty", array()), 'row');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "school", array()), 'row');
        echo "
</div>

";
        // line 39
        $context["question_cmpt"] = 1;
        // line 40
        $context["question_index"] = 0;
        // line 41
        echo "

<div class=\"js-training-questions-wrapper\"
   data-prototype=\" ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "questions", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\"
   data-index=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "questions", array())), "html", null, true);
        echo "\">
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 47
            echo "
  <!-- Start of one question form -->
  <div class=\"js-training-questions-item\">
  <h4> Question ";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 50, $this->source); })()), "html", null, true);
            echo " </h4>

  ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "question", array()), 'row');
            echo "
  ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "difficulty", array()), 'row');
            echo "
  ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["question"], "image", array()), 'row');
            echo "

    <!-- Only print the image if there is one -->
    ";
            // line 57
            if ((( !twig_test_empty((isset($context["image_locations"]) || array_key_exists("image_locations", $context) ? $context["image_locations"] : (function () { throw new Twig_Error_Runtime('Variable "image_locations" does not exist.', 57, $this->source); })())) && (twig_length_filter($this->env, (isset($context["image_locations"]) || array_key_exists("image_locations", $context) ? $context["image_locations"] : (function () { throw new Twig_Error_Runtime('Variable "image_locations" does not exist.', 57, $this->source); })())) >= (isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 57, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["image_locations"]) || array_key_exists("image_locations", $context) ? $context["image_locations"] : (function () { throw new Twig_Error_Runtime('Variable "image_locations" does not exist.', 57, $this->source); })()), (isset($context["question_index"]) || array_key_exists("question_index", $context) ? $context["question_index"] : (function () { throw new Twig_Error_Runtime('Variable "question_index" does not exist.', 57, $this->source); })()), array(), "array")))) {
                // line 58
                echo "      <div class='question_image'>
        Image actuelle:
          <img src=\" ";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/question_images/" . twig_get_attribute($this->env, $this->source, (isset($context["image_locations"]) || array_key_exists("image_locations", $context) ? $context["image_locations"] : (function () { throw new Twig_Error_Runtime('Variable "image_locations" does not exist.', 60, $this->source); })()), (isset($context["question_index"]) || array_key_exists("question_index", $context) ? $context["question_index"] : (function () { throw new Twig_Error_Runtime('Variable "question_index" does not exist.', 60, $this->source); })()), array(), "array"))), "html", null, true);
                echo " \" alt=\"Question Image\">
      </div>
    <!-- if there is no image found -->
    ";
            } else {
                // line 64
                echo "      Il n'y a pas d'image actuellement
    ";
            }
            // line 66
            echo "
    <!-- Start of the answers form for the question -->
    <h5> Answers </h5>
    <div class=\"js-training-answers-wrapper\"
    data-prototype=\" ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "answers", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
            echo "\"
    data-index=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "answers", array())), "html", null, true);
            echo "\"
    data-question=\"";
            // line 72
            echo twig_escape_filter($this->env, ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 72, $this->source); })()) - 1), "html", null, true);
            echo "\">

    <table style=\"width:100%\" id='answers'>
      <tr id='answers-row'>
        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 77
                echo "        <td>
          <div class=\"js-training-answers-item\">
          ";
                // line 79
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["answer"], 'errors');
                echo "
          ";
                // line 80
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["answer"], 'widget');
                echo "
            <a href='' class='js-remove-answers-item'> <i class=\"far fa-trash-alt\"></i>Remove the answer</a>
        </div>
        </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "      </tr>
    </table>
    <a href=\"\" class=\"js-training-answers-item-add\">
             <span class=\"fa fa-plus-circle\"></span>
             Add Another Answer to the question
   </a>
  </div>
    ";
            // line 92
            $context["question_index"] = ((isset($context["question_index"]) || array_key_exists("question_index", $context) ? $context["question_index"] : (function () { throw new Twig_Error_Runtime('Variable "question_index" does not exist.', 92, $this->source); })()) + 1);
            // line 93
            echo "    ";
            $context["question_cmpt"] = ((isset($context["question_cmpt"]) || array_key_exists("question_cmpt", $context) ? $context["question_cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "question_cmpt" does not exist.', 93, $this->source); })()) + 1);
            // line 94
            echo "    <button type=\"button\" class=\"btn btn-danger js-remove-questions-item\">Remove the question</button>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  <a href=\"\" class=\"js-training-questions-item-add\">
           <span class=\"fa fa-plus-circle\"></span>
           Add Another Question to the quiz
 </a>
</div>

";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->source); })()), "send", array()), 'row');
        echo "
";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        echo "

<!-- Link to the quiz deletion method -->
<a href=";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_training", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new Twig_Error_Runtime('Variable "quiz" does not exist.', 107, $this->source); })()), "id", array()))), "html", null, true);
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
        return array (  294 => 107,  288 => 104,  284 => 103,  276 => 97,  268 => 94,  265 => 93,  263 => 92,  254 => 85,  243 => 80,  239 => 79,  235 => 77,  231 => 76,  224 => 72,  220 => 71,  216 => 70,  210 => 66,  206 => 64,  199 => 60,  195 => 58,  193 => 57,  187 => 54,  183 => 53,  179 => 52,  174 => 50,  169 => 47,  165 => 46,  161 => 45,  157 => 44,  152 => 41,  150 => 40,  148 => 39,  142 => 36,  135 => 32,  130 => 30,  120 => 22,  108 => 16,  105 => 15,  101 => 14,  98 => 13,  89 => 12,  75 => 8,  66 => 7,  55 => 4,  46 => 3,  15 => 1,);
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
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  {{ flashMessage|raw }}
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
{% endfor %}



<h3>
  Quiz modification :
</h3>

<!-- Start of quiz modification form -->
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

  <!-- Start of one question form -->
  <div class=\"js-training-questions-item\">
  <h4> Question {{question_cmpt}} </h4>

  {{ form_row(question.question) }}
  {{ form_row(question.difficulty) }}
  {{ form_row(question.image) }}

    <!-- Only print the image if there is one -->
    {% if (image_locations is not empty) and (image_locations|length >= question_cmpt) and (image_locations[question_index] is not empty) %}
      <div class='question_image'>
        Image actuelle:
          <img src=\" {{ asset('uploads/question_images/' ~ image_locations[question_index]) }} \" alt=\"Question Image\">
      </div>
    <!-- if there is no image found -->
    {% else %}
      Il n'y a pas d'image actuellement
    {% endif %}

    <!-- Start of the answers form for the question -->
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
            <a href='' class='js-remove-answers-item'> <i class=\"far fa-trash-alt\"></i>Remove the answer</a>
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

<!-- Link to the quiz deletion method -->
<a href={{ path('admin_delete_training', {'id': quiz.id}) }} class=\"btn btn-danger\">Remove the quiz</a>

{% endblock %}
", "admin/admin_training.html.twig", "/home/clorentz/www/fedactio_pangea/templates/admin/admin_training.html.twig");
    }
}
