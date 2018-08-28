<?php

/* emails/keep_me_updated_admin.html.twig */
class __TwigTemplate_b2356e60870012708cd2d6f4c0fecdf6119a3eed44b2a3bd31ff2336e361e8d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/keep_me_updated_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/keep_me_updated_admin.html.twig"));

        // line 2
        echo "

<!-- This template defines how the message sent to the administrator upon a client's keep me updated registration -->
<h2> There has been a new subscriber </h2>

Hi administrator, <br/>

There has been a new person willing to be kept updated about the Pangea quiz! Here are the related informations:

<ul>
  <li> Name: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["new_update"]) || array_key_exists("new_update", $context) ? $context["new_update"] : (function () { throw new Twig_Error_Runtime('Variable "new_update" does not exist.', 12, $this->source); })()), "name", array()), "html", null, true);
        echo " </li>
  <li> Surname: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["new_update"]) || array_key_exists("new_update", $context) ? $context["new_update"] : (function () { throw new Twig_Error_Runtime('Variable "new_update" does not exist.', 13, $this->source); })()), "surname", array()), "html", null, true);
        echo " </li>
  <li> Email address: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["new_update"]) || array_key_exists("new_update", $context) ? $context["new_update"] : (function () { throw new Twig_Error_Runtime('Variable "new_update" does not exist.', 14, $this->source); })()), "email", array()), "html", null, true);
        echo " </li>
</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/keep_me_updated_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 13,  41 => 12,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/emails/keep_me_updated.html.twig #}


<!-- This template defines how the message sent to the administrator upon a client's keep me updated registration -->
<h2> There has been a new subscriber </h2>

Hi administrator, <br/>

There has been a new person willing to be kept updated about the Pangea quiz! Here are the related informations:

<ul>
  <li> Name: {{new_update.name}} </li>
  <li> Surname: {{new_update.surname}} </li>
  <li> Email address: {{new_update.email}} </li>
</ul>
", "emails/keep_me_updated_admin.html.twig", "/home/clorentz/www/fedactio_pangea/templates/emails/keep_me_updated_admin.html.twig");
    }
}
