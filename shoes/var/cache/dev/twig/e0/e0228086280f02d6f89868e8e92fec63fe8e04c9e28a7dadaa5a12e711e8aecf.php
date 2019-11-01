<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact/contact.html.twig */
class __TwigTemplate_dc2b463234850dcd874073684801dda35532e49e8ca628ea3af09fa75af93940 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nous contacter
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <main id=\"contact\" class=\"container col-md-6\">

        <h2 class=\"text-center\">Nous contacter</h2>

        <div id=\"msgNotGood\">
            <p>";
        // line 13
        echo twig_join_filter((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 13, $this->source); })()), "<br>");
        echo "</p>
        </div>
        <p id=\"msgGood\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</p>

        <form method=\"post\">
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom\" value=\"";
        // line 21
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "name", [], "any", true, true, false, 21) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "name", [], "any", false, false, false, 21)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true))) : (print ("")));
        echo "\">
                    </div>
                    <div class=\"col-md-7\">
<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"";
        // line 24
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "email", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "email", [], "any", false, false, false, 24)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "email", [], "any", false, false, false, 24), "html", null, true))) : (print ("")));
        echo "\">

                    </div>
                    </div>    
                <p>
<input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Sujet\" value=\"";
        // line 29
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "subject", [], "any", true, true, false, 29) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "subject", [], "any", false, false, false, 29)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "subject", [], "any", false, false, false, 29), "html", null, true))) : (print ("")));
        echo "\">

                </p>
                <p>
<textarea name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Message\" value=\"";
        // line 33
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "message", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "message", [], "any", false, false, false, 33)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "message", [], "any", false, false, false, 33), "html", null, true))) : (print ("")));
        echo "\"></textarea>

                </p>
                <button class=\"btn-lg btn-form\" type=\"submit\">
                    Envoyer
                </button>


            </div>
        </form>
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 33,  124 => 29,  116 => 24,  110 => 21,  101 => 15,  96 => 13,  89 => 8,  79 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nous contacter
{% endblock %}


{% block body %}
    <main id=\"contact\" class=\"container col-md-6\">

        <h2 class=\"text-center\">Nous contacter</h2>

        <div id=\"msgNotGood\">
            <p>{{ erreur|join('<br>')|raw }}</p>
        </div>
        <p id=\"msgGood\">{{ msg }}</p>

        <form method=\"post\">
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom\" value=\"{{ donnees.name ?? ''}}\">
                    </div>
                    <div class=\"col-md-7\">
<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"{{ donnees.email ?? '' }}\">

                    </div>
                    </div>    
                <p>
<input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Sujet\" value=\"{{ donnees.subject ?? '' }}\">

                </p>
                <p>
<textarea name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\" placeholder=\"Message\" value=\"{{ donnees.message ?? '' }}\"></textarea>

                </p>
                <button class=\"btn-lg btn-form\" type=\"submit\">
                    Envoyer
                </button>


            </div>
        </form>
    </main>

{% endblock %}
", "contact/contact.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\contact\\contact.html.twig");
    }
}
