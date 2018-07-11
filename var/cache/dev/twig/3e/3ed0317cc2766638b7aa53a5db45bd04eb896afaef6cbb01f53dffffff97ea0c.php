<?php

/* admin/admin_gallery.html.twig */
class __TwigTemplate_e71b1e256347a46db3556055444cb0242359d68b105daf6e449587c645132e00 extends Twig_Template
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
            echo "  <div class=\"alert alert-success\">
    ";
            // line 11
            echo $context["flashMessage"];
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
<h1> Images: </h1>
<h2> Current uploaded images: </h2>

<ul>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            echo "    <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_image", array("id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", array()), "html", null, true);
            echo " </a> </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>

<h2> Add an image: </h2>
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "

";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 27, $this->source); })()), "ImageYear", array()), 'row');
        echo "
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 28, $this->source); })()), "image", array()), 'row');
        echo "
";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 29, $this->source); })()), "description", array()), 'row');
        echo "
";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 30, $this->source); })()), "send", array()), 'row');
        echo "

";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "



<h1> Previous Quiz </h1>

<h2> Current uploaded quizs</h2>

<div class=\"js-quizs-wrapper\">
  <ul>
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["p_quiz"]) || array_key_exists("p_quiz", $context) ? $context["p_quiz"] : (function () { throw new Twig_Error_Runtime('Variable "p_quiz" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 43
            echo "      ";
            $context["prefix"] = "";
            // line 44
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) == 1)) {
                // line 45
                echo "        ";
                $context["prefix"] = "st";
                // line 46
                echo "      ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) == 2)) {
                // line 47
                echo "        ";
                $context["prefix"] = "nd";
                // line 48
                echo "      ";
            } else {
                // line 49
                echo "        ";
                $context["prefix"] = "rd";
                // line 50
                echo "      ";
            }
            // line 51
            echo "      <div class=\"js-quiz-item\">
        <li> <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_quiz", array("id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "yearOfQuiz", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["quiz"], "difficulty", array()) . (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 52, $this->source); })())), "html", null, true);
            echo " Grade </a> </li>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </ul>
</div>


<h2> Add a quiz </h2>

";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 61, $this->source); })()), 'form_start');
        echo "

";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 63, $this->source); })()), "difficulty", array()), 'row');
        echo "
";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 64, $this->source); })()), "yearOfQuiz", array()), 'row');
        echo "
";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 65, $this->source); })()), "quiz", array()), 'row');
        echo "
";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["quiz_form"]) || array_key_exists("quiz_form", $context) ? $context["quiz_form"] : (function () { throw new Twig_Error_Runtime('Variable "quiz_form" does not exist.', 66, $this->source); })()), "send", array()), 'row');
        echo "

";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["img_form"]) || array_key_exists("img_form", $context) ? $context["img_form"] : (function () { throw new Twig_Error_Runtime('Variable "img_form" does not exist.', 68, $this->source); })()), 'form_end');
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
        return array (  229 => 68,  224 => 66,  220 => 65,  216 => 64,  212 => 63,  207 => 61,  199 => 55,  186 => 52,  183 => 51,  180 => 50,  177 => 49,  174 => 48,  171 => 47,  168 => 46,  165 => 45,  162 => 44,  159 => 43,  155 => 42,  142 => 32,  137 => 30,  133 => 29,  129 => 28,  125 => 27,  120 => 25,  115 => 22,  104 => 20,  100 => 19,  93 => 14,  84 => 11,  81 => 10,  77 => 9,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin_homepage.html.twig' %}

{% block title %}
  Page de gallerie
{% endblock %}

{% block body %}

{% for flashMessage in app.session.flashbag.get('success') %}
  <div class=\"alert alert-success\">
    {{ flashMessage|raw }}
  </div>
{% endfor %}

<h1> Images: </h1>
<h2> Current uploaded images: </h2>

<ul>
  {% for image in images %}
    <li> <a href=\"{{ path('admin_gallery_image', {'id': image.id}) }}\"> {{image.image}} </a> </li>
  {% endfor %}
</ul>

<h2> Add an image: </h2>
{{ form_start(img_form) }}

{{ form_row(img_form.ImageYear) }}
{{ form_row(img_form.image) }}
{{ form_row(img_form.description) }}
{{ form_row(img_form.send) }}

{{ form_end(img_form) }}



<h1> Previous Quiz </h1>

<h2> Current uploaded quizs</h2>

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


<h2> Add a quiz </h2>

{{ form_start(quiz_form) }}

{{ form_row(quiz_form.difficulty) }}
{{ form_row(quiz_form.yearOfQuiz) }}
{{ form_row(quiz_form.quiz) }}
{{ form_row(quiz_form.send) }}

{{ form_end(img_form) }}


{% endblock %}
", "admin/admin_gallery.html.twig", "/home/clorentz/www/fedactio_pangea/templates/admin/admin_gallery.html.twig");
    }
}
