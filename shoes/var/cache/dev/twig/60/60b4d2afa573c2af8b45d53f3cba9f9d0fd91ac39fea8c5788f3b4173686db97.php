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

/* user/register.html.twig */
class __TwigTemplate_c17d03b3f0b189a38c189aab3fa2ef1eb076726953053991d387f639d4574303 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
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

        echo "Inscription

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
        echo "

    <main id=\"user_register\" class=\"container\">
        <h2>Inscription</h2>

        ";
        // line 13
        if ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "            <div class=\"alert alert-danger col-md-8\">";
            echo twig_join_filter((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 14, $this->source); })()), "<br>");
            echo "</div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ((isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "            <div class=\"alert alert-success col-md-8\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</div>
        ";
        }
        // line 20
        echo "
        <form method=\"post\" class=\"col-md-8\">

            <div class=\"row\">
                <div class=\"col\">
                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom\" value=\"";
        // line 25
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "name", [], "any", true, true, false, 25) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "name", [], "any", false, false, false, 25)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true))) : (print ("")));
        echo "\">
                </div>
                <div class=\"col\">
                    <input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"Prénom\" value=\"";
        // line 28
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "firstname", [], "any", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "firstname", [], "any", false, false, false, 28)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "firstname", [], "any", false, false, false, 28), "html", null, true))) : (print ("")));
        echo "\">
                </div>
            </div>

            <input type=\"text\" name=\"address\" class=\"form-control\" placeholder=\"Adresse\" value=\"";
        // line 32
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "address", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "address", [], "any", false, false, false, 32)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "address", [], "any", false, false, false, 32), "html", null, true))) : (print ("")));
        echo "\">

            <input type=\"text\" name=\"complement\" class=\"form-control\" placeholder=\"Complément\" value=\"";
        // line 34
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "complement", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "complement", [], "any", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "complement", [], "any", false, false, false, 34), "html", null, true))) : (print ("")));
        echo "\">

            <div class=\"row\">
                <div class=\" col\">
                    <input type=\"text\" name=\"city\" class=\"form-control\" placeholder=\"Ville\" value=\"";
        // line 38
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "city", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "city", [], "any", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "city", [], "any", false, false, false, 38), "html", null, true))) : (print ("")));
        echo "\">

                </div>
                <div class=\"col\">
                    <input type=\"number\" name=\"pC\" class=\"form-control\" placeholder=\"Code postal\" value=\"";
        // line 42
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "pC", [], "any", true, true, false, 42) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "pC", [], "any", false, false, false, 42)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "pC", [], "any", false, false, false, 42), "html", null, true))) : (print ("")));
        echo "\">
                </div>
            </div>

            <input type=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Télephone\" value=\"";
        // line 46
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "phone", [], "any", true, true, false, 46) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "phone", [], "any", false, false, false, 46)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "phone", [], "any", false, false, false, 46), "html", null, true))) : (print ("")));
        echo "\">

            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"";
        // line 48
        (((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "email", [], "any", true, true, false, 48) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "email", [], "any", false, false, false, 48)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true))) : (print ("")));
        echo "\">

            <input type=\"password\" name=\"pwd\" class=\"form-control\" placeholder=\"Mot de passe\">

            <input type=\"password\" name=\"pwdVerif\" class=\"form-control\" placeholder=\"Confirmer le mot de passe\">


            <button class=\"btn-lg btn-form\" type=\"submit\">
                S'inscrire
            </button>

        </form>
    </main>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 48,  162 => 46,  155 => 42,  148 => 38,  141 => 34,  136 => 32,  129 => 28,  123 => 25,  116 => 20,  110 => 18,  108 => 17,  105 => 16,  99 => 14,  97 => 13,  90 => 8,  80 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription

{% endblock %}

{% block body %}


    <main id=\"user_register\" class=\"container\">
        <h2>Inscription</h2>

        {% if erreur %}
            <div class=\"alert alert-danger col-md-8\">{{ erreur|join('<br>')|raw }}</div>
        {% endif %}

        {% if msg %}
            <div class=\"alert alert-success col-md-8\">{{ msg }}</div>
        {% endif %}

        <form method=\"post\" class=\"col-md-8\">

            <div class=\"row\">
                <div class=\"col\">
                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom\" value=\"{{ donnees.name ?? '' }}\">
                </div>
                <div class=\"col\">
                    <input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"Prénom\" value=\"{{ donnees.firstname ?? '' }}\">
                </div>
            </div>

            <input type=\"text\" name=\"address\" class=\"form-control\" placeholder=\"Adresse\" value=\"{{ donnees.address ?? '' }}\">

            <input type=\"text\" name=\"complement\" class=\"form-control\" placeholder=\"Complément\" value=\"{{ donnees.complement ?? '' }}\">

            <div class=\"row\">
                <div class=\" col\">
                    <input type=\"text\" name=\"city\" class=\"form-control\" placeholder=\"Ville\" value=\"{{ donnees.city ?? '' }}\">

                </div>
                <div class=\"col\">
                    <input type=\"number\" name=\"pC\" class=\"form-control\" placeholder=\"Code postal\" value=\"{{ donnees.pC ?? '' }}\">
                </div>
            </div>

            <input type=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Télephone\" value=\"{{ donnees.phone ?? '' }}\">

            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"{{ donnees.email ?? '' }}\">

            <input type=\"password\" name=\"pwd\" class=\"form-control\" placeholder=\"Mot de passe\">

            <input type=\"password\" name=\"pwdVerif\" class=\"form-control\" placeholder=\"Confirmer le mot de passe\">


            <button class=\"btn-lg btn-form\" type=\"submit\">
                S'inscrire
            </button>

        </form>
    </main>


{% endblock %}
", "user/register.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\user\\register.html.twig");
    }
}
