<?php

/* emails/keep_me_updated.html.twig */
class __TwigTemplate_2acd598fa5ebd069cedba10257c5868fca58445b5a3db21172596361a60c8b6d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/keep_me_updated.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/keep_me_updated.html.twig"));

        // line 2
        echo "
<h2> Bonjour ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["new_update"]) || array_key_exists("new_update", $context) ? $context["new_update"] : (function () { throw new Twig_Error_Runtime('Variable "new_update" does not exist.', 3, $this->source); })()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["new_update"]) || array_key_exists("new_update", $context) ? $context["new_update"] : (function () { throw new Twig_Error_Runtime('Variable "new_update" does not exist.', 3, $this->source); })()), "surname", array()), "html", null, true);
        echo " </h2>

Merci de votre interêt pour le quiz de Math Pangea. Les inscriptions ne sont pas ouvertes pour le moment, mais vous pouvez d'ors et déjà vous entrainer ou consulter les précédents concours sur notre site web.
<br/>

Vous recevrez une notification lorsque les inscriptions seront ouvertes.
<br/>

Cordialement,
</br/>

Les organisateurs
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/keep_me_updated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/emails/keep_me_updated.html.twig #}

<h2> Bonjour {{new_update.name}} {{new_update.surname}} </h2>

Merci de votre interêt pour le quiz de Math Pangea. Les inscriptions ne sont pas ouvertes pour le moment, mais vous pouvez d'ors et déjà vous entrainer ou consulter les précédents concours sur notre site web.
<br/>

Vous recevrez une notification lorsque les inscriptions seront ouvertes.
<br/>

Cordialement,
</br/>

Les organisateurs
", "emails/keep_me_updated.html.twig", "/home/clorentz/www/fedactio_pangea/templates/emails/keep_me_updated.html.twig");
    }
}
