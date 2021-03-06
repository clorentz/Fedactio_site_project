<?php

/* base.html.twig */
class __TwigTemplate_c61eff8bc6dd8af512339e5d38d981d68435e925eb56e89910450f6b5f0667b0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topmenu' => array($this, 'block_topmenu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- The base template -->

<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <!-- stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\" />
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "   <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
  </head>

  <body class=\"d-flex flex-column\">
    <div id=\"banner\" style=\"cursor: pointer;\" onclick=\"window.location='";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "';\"></div>

    <!-- body -->
    <div class=\"container\" id=\"container-main\">
      <!-- Menu -->
      <div class=\"btn-group d-flex\" role=\"group\" aria-label=\"Top Menu\">
        ";
        // line 23
        $this->displayBlock('topmenu', $context, $blocks);
        // line 25
        echo "      </div>
      <div class=\"btn-group d-flex mobile-menu-row\" role=\"group\" aria-label=\"Mobile second row\">

      </div>


        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
    </div>

    <!-- footer -->
    <div id=\"flex-grow\"></div>
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-6 col-12 item links\">
            <h3>Contact</h3>
            <ul>
              <li>
                <span>
                  <i class=\"fas fa-at\"></i>
                  <a href=\"mailto:brussel@fedactio.be?Subject=Pangea%20Math%20Quiz\" target=\"_top\">brussel@fedactio.be</a>
                </span>
              </li>
              <li>
                <span>
                  <i class=\"fas fa-phone\"></i>
                  <a href=\"tel:+32-2-212-19-09\"> +32 2 212 19 09 </a>
                </span>
              </li>
            </ul>
          </div>

          <div class=\"col-md-4 col-sm-6 col-12 item links\">
            <h3>Accès rapide</h3>
            <ul>
      \t\t\t\t<li>
                <span>
                  <i class=\"fas fa-chevron-right\"></i>
                  <a href=";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo ">Retour à l'accueil</a>
                </span>
              </li>
      \t\t\t\t<li>
                <span>
                  <i class=\"fas fa-chevron-right\"></i>
                  <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        echo "\">Informations</a>
                </span>
              </li>
              <li>
                <span>
                  <i class=\"fas fa-chevron-right\"></i>
                  <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enroll");
        echo "\">S'insrire au concours</a>
                </span>
              </li>
      \t\t\t</ul>
          </div>

          <div class=\"col-md-4 col-sm-12 col-12 item logo\">
            <h3> Organisateurs </h3>
            <div class=\"d-flex\" role=\"group\" aria-label=\"Organisateurs\">
              <img class=\"w-100 foot-logo\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo_white.png"), "html", null, true);
        echo "\" alt=\"Fedactio Logo\" />
              <img class=\"w-100 foot-logo\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Francolympiades-transparent.png"), "html", null, true);
        echo "\" alt=\"Logo Francolympiades\" />
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- scripts -->
    <script src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_topmenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topmenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topmenu"));

        // line 24
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 98,  257 => 97,  247 => 32,  238 => 31,  228 => 24,  219 => 23,  209 => 12,  200 => 11,  182 => 7,  169 => 99,  167 => 97,  163 => 96,  151 => 87,  147 => 86,  135 => 77,  126 => 71,  117 => 65,  83 => 33,  81 => 31,  73 => 25,  71 => 23,  62 => 17,  54 => 13,  52 => 11,  48 => 10,  42 => 7,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- The base template -->

<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\" />
    <title>{% block title %}Bienvenue{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <!-- stylesheets -->
    <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\" />
    {% block stylesheets %}
    {% endblock %}
   <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.ico') }}\" />
  </head>

  <body class=\"d-flex flex-column\">
    <div id=\"banner\" style=\"cursor: pointer;\" onclick=\"window.location='{{ path('homepage') }}';\"></div>

    <!-- body -->
    <div class=\"container\" id=\"container-main\">
      <!-- Menu -->
      <div class=\"btn-group d-flex\" role=\"group\" aria-label=\"Top Menu\">
        {% block topmenu %}
        {% endblock %}
      </div>
      <div class=\"btn-group d-flex mobile-menu-row\" role=\"group\" aria-label=\"Mobile second row\">

      </div>


        {% block body %}
        {% endblock %}

    </div>

    <!-- footer -->
    <div id=\"flex-grow\"></div>
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-6 col-12 item links\">
            <h3>Contact</h3>
            <ul>
              <li>
                <span>
                  <i class=\"fas fa-at\"></i>
                  <a href=\"mailto:brussel@fedactio.be?Subject=Pangea%20Math%20Quiz\" target=\"_top\">brussel@fedactio.be</a>
                </span>
              </li>
              <li>
                <span>
                  <i class=\"fas fa-phone\"></i>
                  <a href=\"tel:+32-2-212-19-09\"> +32 2 212 19 09 </a>
                </span>
              </li>
            </ul>
          </div>

          <div class=\"col-md-4 col-sm-6 col-12 item links\">
            <h3>Accès rapide</h3>
            <ul>
      \t\t\t\t<li>
                <span>
                  <i class=\"fas fa-chevron-right\"></i>
                  <a href={{ path('homepage') }}>Retour à l'accueil</a>
                </span>
              </li>
      \t\t\t\t<li>
                <span>
                  <i class=\"fas fa-chevron-right\"></i>
                  <a href=\"{{path(\"aboutus\")}}\">Informations</a>
                </span>
              </li>
              <li>
                <span>
                  <i class=\"fas fa-chevron-right\"></i>
                  <a href=\"{{path(\"enroll\")}}\">S'insrire au concours</a>
                </span>
              </li>
      \t\t\t</ul>
          </div>

          <div class=\"col-md-4 col-sm-12 col-12 item logo\">
            <h3> Organisateurs </h3>
            <div class=\"d-flex\" role=\"group\" aria-label=\"Organisateurs\">
              <img class=\"w-100 foot-logo\" src=\"{{ asset('img/Logo_white.png') }}\" alt=\"Fedactio Logo\" />
              <img class=\"w-100 foot-logo\" src=\"{{ asset('img/Francolympiades-transparent.png') }}\" alt=\"Logo Francolympiades\" />
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- scripts -->
    <script src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
    <script src=\"{{ asset('build/app.js') }}\"></script>
    {% block javascripts %}
    {% endblock %}

  </body>
</html>
", "base.html.twig", "/home/clorentz/www/fedactio_pangea/templates/base.html.twig");
    }
}
