<?php

/* admin/admin_gallery.html.twig */
class __TwigTemplate_ad63b6bfbbf55545f9969a1e3cc2ff29e0becdc948f2fa51d7baee333711b945 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin_homepage.html.twig", "admin/admin_gallery.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin_gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin_gallery.html.twig"));

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
        echo "  Page de gallerie
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

<!-- Image part of the template -->
<h1> Images: </h1>
<h2> Images actuellement uploadées: </h2>


<!-- List of the current puploaded images -->
<ul>
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 27
            echo "    <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_image", array("id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "name", array()), "html", null, true);
            echo " </a> </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</ul>

<!-- Form to add an image -->
<h2> Ajouter une image: </h2>
";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "

";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 35, $this->source); })()), "ImageYear", array()), 'row');
        echo "
";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 36, $this->source); })()), "image", array()), 'row');
        echo "
";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 37, $this->source); })()), "description", array()), 'row');
        echo "
";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 38, $this->source); })()), "send", array()), 'row');
        echo "

";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "



<h1> Quizs précédents </h1>

<h2> Quizs uploadés:</h2>

<div class=\"js-quizs-wrapper\">
  <ul>
      ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["p_quiz"]) || array_key_exists("p_quiz", $context) ? $context["p_quiz"] : (function () { throw new Twig_Error_Runtime('Variable "p_quiz" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 51
            echo "      ";
            $context["prefix"] = "";
            // line 52
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) == 1)) {
                // line 53
                echo "        ";
                $context["prefix"] = "st";
                // line 54
                echo "      ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) == 2)) {
                // line 55
                echo "        ";
                $context["prefix"] = "nd";
                // line 56
                echo "      ";
            } else {
                // line 57
                echo "        ";
                $context["prefix"] = "rd";
                // line 58
                echo "      ";
            }
            // line 59
            echo "      <div class=\"js-quiz-item\">
        <li> <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_quiz", array("id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "yearOfQuiz", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) . (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 60, $this->source); })())), "html", null, true);
            echo " Grade </a> </li>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "  </ul>
</div>


<!-- Adding form for the quiz -->
<h2> Ajouter un quiz: </h2>

";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 70, $this->source); })()), 'form_start');
        echo "

";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 72, $this->source); })()), "school", array()), 'row');
        echo "
";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 73, $this->source); })()), "difficulty", array()), 'row');
        echo "
";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 74, $this->source); })()), "yearOfQuiz", array()), 'row');
        echo "
";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 75, $this->source); })()), "quiz", array()), 'row');
        echo "
";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 76, $this->source); })()), "send", array()), 'row');
        echo "

";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 78,  237 => 76,  233 => 75,  229 => 74,  225 => 73,  221 => 72,  216 => 70,  207 => 63,  194 => 60,  191 => 59,  188 => 58,  185 => 57,  182 => 56,  179 => 55,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  163 => 50,  150 => 40,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  128 => 33,  122 => 29,  111 => 27,  107 => 26,  96 => 17,  84 => 11,  81 => 10,  77 => 9,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin_homepage.html.twig' %}

{% block title %}
  Page de gallerie
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


<!-- Image part of the template -->
<h1> Images: </h1>
<h2> Images actuellement uploadées: </h2>


<!-- List of the current puploaded images -->
<ul>
  {% for image in images %}
    <li> <a href=\"{{ path('admin_gallery_image', {'id': image.id}) }}\"> {{image.name}} </a> </li>
  {% endfor %}
</ul>

<!-- Form to add an image -->
<h2> Ajouter une image: </h2>
{{ form_start(img_form) }}

{{ form_row(img_form.ImageYear) }}
{{ form_row(img_form.image) }}
{{ form_row(img_form.description) }}
{{ form_row(img_form.send) }}

{{ form_end(img_form) }}



<h1> Quizs précédents </h1>

<h2> Quizs uploadés:</h2>

<div class=\"js-quizs-wrapper\">
  <ul>
      {% for quiz in p_quiz %}
      {% set prefix = \"\" %}
      {% if quiz.difficulty == 1 %}
        {% set prefix = \"st\" %}
      {% elseif quiz.difficulty == 2 %}
        {% set prefix = \"nd\" %}
      {% else %}
        {% set prefix = \"rd\" %}
      {% endif %}
      <div class=\"js-quiz-item\">
        <li> <a href=\"{{ path('admin_quiz', {'id': quiz.id}) }}\"> {{quiz.yearOfQuiz}}: {{quiz.difficulty ~ prefix}} Grade </a> </li>
      </div>
    {% endfor %}
  </ul>
</div>


<!-- Adding form for the quiz -->
<h2> Ajouter un quiz: </h2>

{{ form_start(quiz_form) }}

{{ form_row(quiz_form.school) }}
{{ form_row(quiz_form.difficulty) }}
{{ form_row(quiz_form.yearOfQuiz) }}
{{ form_row(quiz_form.quiz) }}
{{ form_row(quiz_form.send) }}

{{ form_end(img_form) }}


{% endblock %}
", "admin/admin_gallery.html.twig", "/home/clorentz/www/fedactio_pangea/templates/admin/admin_gallery.html.twig");
    }
}
