<?php

/* public/img_gallery.html.twig */
class __TwigTemplate_fab5221084ae7d47e7563c261de57ce30faf54a21ab729cd590a54ba64f0f3c0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("homepage.html.twig", "public/img_gallery.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/img_gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/img_gallery.html.twig"));

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
        echo "  Page de gallerie d'images
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
        if (((isset($context["max_index"]) || array_key_exists("max_index", $context) ? $context["max_index"] : (function () { throw new Twig_Error_Runtime('Variable "max_index" does not exist.', 10, $this->source); })()) > 0)) {
            // line 11
            echo "
  ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["max_index"]) || array_key_exists("max_index", $context) ? $context["max_index"] : (function () { throw new Twig_Error_Runtime('Variable "max_index" does not exist.', 12, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 13
                echo "  <h1> Photos archivées de l'année ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new Twig_Error_Runtime('Variable "years" does not exist.', 13, $this->source); })()), $context["i"], array(), "array"), "html", null, true);
                echo " </h1>

  <!-- Thumbnail display for the last year's quiz -->
  ";
                // line 16
                if (($context["i"] == 0)) {
                    // line 17
                    echo "  <div class=\"row\">
    ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["images_array"]) || array_key_exists("images_array", $context) ? $context["images_array"] : (function () { throw new Twig_Error_Runtime('Variable "images_array" does not exist.', 18, $this->source); })()), $context["i"], array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 19
                        echo "    <div class=\"col-lg-4 col-6 \"><img class=\"img-thumbnail img-fluid\" src=\"";
                        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/gallery_images/") . twig_get_attribute($this->env, $this->source, $context["image"], "image", array())), "html", null, true);
                        echo "\" alt=\"\"></div>
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "  </div>

  <!-- Display as image carousel for the other years --> 
  ";
                } else {
                    // line 25
                    echo "  <div id=\"";
                    echo twig_escape_filter($this->env, ("ImageGallery" . twig_get_attribute($this->env, $this->source, (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new Twig_Error_Runtime('Variable "years" does not exist.', 25, $this->source); })()), $context["i"], array(), "array")), "html", null, true);
                    echo "\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      ";
                    // line 27
                    $context["cmpt"] = 0;
                    // line 28
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["images_array"]) || array_key_exists("images_array", $context) ? $context["images_array"] : (function () { throw new Twig_Error_Runtime('Variable "images_array" does not exist.', 28, $this->source); })()), $context["i"], array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 29
                        echo "      <li data-target=\"#";
                        echo twig_escape_filter($this->env, ("ImageGallery" . twig_get_attribute($this->env, $this->source, (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new Twig_Error_Runtime('Variable "years" does not exist.', 29, $this->source); })()), $context["i"], array(), "array")), "html", null, true);
                        echo "\" data-slide-to=\"";
                        echo twig_escape_filter($this->env, (isset($context["cmpt"]) || array_key_exists("cmpt", $context) ? $context["cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "cmpt" does not exist.', 29, $this->source); })()), "html", null, true);
                        echo "\" class=\"active\"></li>
      ";
                        // line 30
                        $context["cmpt"] = ((isset($context["cmpt"]) || array_key_exists("cmpt", $context) ? $context["cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "cmpt" does not exist.', 30, $this->source); })()) + 1);
                        // line 31
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "    </ol>
    <div class=\"carousel-inner\">
      ";
                    // line 34
                    $context["cmpt"] = 0;
                    // line 35
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["images_array"]) || array_key_exists("images_array", $context) ? $context["images_array"] : (function () { throw new Twig_Error_Runtime('Variable "images_array" does not exist.', 35, $this->source); })()), $context["i"], array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 36
                        echo "      <div class=\"carousel-item ";
                        if (((isset($context["cmpt"]) || array_key_exists("cmpt", $context) ? $context["cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "cmpt" does not exist.', 36, $this->source); })()) == 0)) {
                            echo " active ";
                        }
                        echo "\">
        <img class=\"d-block w-100\" src=\"";
                        // line 37
                        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/gallery_images/") . twig_get_attribute($this->env, $this->source, $context["image"], "image", array())), "html", null, true);
                        echo "\" alt=\"Slide\">
      </div>
      ";
                        // line 39
                        $context["cmpt"] = ((isset($context["cmpt"]) || array_key_exists("cmpt", $context) ? $context["cmpt"] : (function () { throw new Twig_Error_Runtime('Variable "cmpt" does not exist.', 39, $this->source); })()) + 1);
                        // line 40
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "    </div>
    <a class=\"carousel-control-prev\" href=\"#";
                    // line 42
                    echo twig_escape_filter($this->env, ("ImageGallery" . twig_get_attribute($this->env, $this->source, (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new Twig_Error_Runtime('Variable "years" does not exist.', 42, $this->source); })()), $context["i"], array(), "array")), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#";
                    // line 46
                    echo twig_escape_filter($this->env, ("ImageGallery" . twig_get_attribute($this->env, $this->source, (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new Twig_Error_Runtime('Variable "years" does not exist.', 46, $this->source); })()), $context["i"], array(), "array")), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
  ";
                }
                // line 52
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 54
            echo "  <h3> No Photos found </h3>

We don't have any photos available at the moment, please come back to check another time.
";
        }
        // line 58
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/img_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 62,  220 => 61,  209 => 58,  203 => 54,  196 => 52,  187 => 46,  180 => 42,  177 => 41,  171 => 40,  169 => 39,  164 => 37,  157 => 36,  152 => 35,  150 => 34,  146 => 32,  140 => 31,  138 => 30,  131 => 29,  126 => 28,  124 => 27,  118 => 25,  112 => 21,  103 => 19,  99 => 18,  96 => 17,  94 => 16,  87 => 13,  83 => 12,  80 => 11,  78 => 10,  75 => 9,  66 => 8,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'homepage.html.twig' %}

{% block title %}
  Page de gallerie d'images
{% endblock %}


{% block body %}

{% if max_index > 0 %}

  {% for i in 0..max_index %}
  <h1> Photos archivées de l'année {{years[i]}} </h1>

  <!-- Thumbnail display for the last year's quiz -->
  {% if i == 0 %}
  <div class=\"row\">
    {% for image in images_array[i] %}
    <div class=\"col-lg-4 col-6 \"><img class=\"img-thumbnail img-fluid\" src=\"{{asset(\"uploads/gallery_images/\") ~ image.image}}\" alt=\"\"></div>
    {% endfor %}
  </div>

  <!-- Display as image carousel for the other years --> 
  {% else %}
  <div id=\"{{\"ImageGallery\" ~ years[i] }}\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      {% set cmpt = 0 %}
      {% for image in images_array[i] %}
      <li data-target=\"#{{\"ImageGallery\" ~ years[i] }}\" data-slide-to=\"{{cmpt}}\" class=\"active\"></li>
      {% set cmpt = cmpt + 1 %}
      {% endfor %}
    </ol>
    <div class=\"carousel-inner\">
      {% set cmpt = 0 %}
      {% for image in images_array[i] %}
      <div class=\"carousel-item {% if cmpt == 0 %} active {% endif %}\">
        <img class=\"d-block w-100\" src=\"{{asset(\"uploads/gallery_images/\") ~ image.image}}\" alt=\"Slide\">
      </div>
      {% set cmpt = cmpt + 1 %}
      {% endfor %}
    </div>
    <a class=\"carousel-control-prev\" href=\"#{{\"ImageGallery\" ~ years[i] }}\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#{{\"ImageGallery\" ~ years[i] }}\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
  {% endif %}
  {% endfor %}
{% else %}
  <h3> No Photos found </h3>

We don't have any photos available at the moment, please come back to check another time.
{% endif %}

{% endblock %}

{% block javascripts %}

{% endblock %}
", "public/img_gallery.html.twig", "/home/clorentz/www/fedactio_pangea/templates/public/img_gallery.html.twig");
    }
}
