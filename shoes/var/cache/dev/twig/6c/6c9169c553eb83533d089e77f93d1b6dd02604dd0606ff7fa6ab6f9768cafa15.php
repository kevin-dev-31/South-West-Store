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

/* user/edit_profile.html.twig */
class __TwigTemplate_9f26fa2cb0d57f976ace8f532b6e6d75a36ab307a064c3bc62cf53f762b1722a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit_profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit_profile.html.twig", 1);
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

        echo "Modifier mes infos

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
    <main id=\"user_edit_profile\" class=\"container\">

        <h2>Modifier mes infos</h2>

        ";
        // line 13
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "            <p class=\"alert alert-danger col-md-8\">";
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 14, $this->source); })()), "<br>");
            echo "</p>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ((isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "            <p class=\"alert alert-success col-md-8\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</p>
        ";
        }
        // line 20
        echo "
        <form method=\"post\" class=\"col-md-8\">

            <div class=\"row\">
                <div class=\"col\">
                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom\" value=\"";
        // line 25
        (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getLastName", [], "method", true, true, false, 25) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getLastName", [], "method", false, false, false, 25)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getLastName", [], "method", false, false, false, 25), "html", null, true))) : (print ("")));
        echo "\">
                </div>
                <div class=\"col\">
                    <input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"Prénom\" value=\"";
        // line 28
        (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFirstName", [], "method", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFirstName", [], "method", false, false, false, 28)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFirstName", [], "method", false, false, false, 28), "html", null, true))) : (print ("")));
        echo "\">
                </div>
            </div>

            <input type=\"text\" name=\"address\" class=\"form-control\" placeholder=\"Adresse\" value=\"";
        // line 32
        (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getAddress", [], "method", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getAddress", [], "method", false, false, false, 32)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getAddress", [], "method", false, false, false, 32), "html", null, true))) : (print ("")));
        echo "\">

            <input type=\"text\" name=\"complement\" class=\"form-control\" placeholder=\"Complément\" value=\"";
        // line 34
        (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getAdditionalAddress", [], "method", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getAdditionalAddress", [], "method", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getAdditionalAddress", [], "method", false, false, false, 34), "html", null, true))) : (print ("")));
        echo "\">

            <div class=\"row\">
                <div class=\" col\">
                    <input type=\"text\" name=\"city\" class=\"form-control\" placeholder=\"Ville\" value=\"";
        // line 38
        (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getCity", [], "method", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getCity", [], "method", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getCity", [], "method", false, false, false, 38), "html", null, true))) : (print ("")));
        echo "\">
                </div>
                <div class=\"col\">
                    <input type=\"number\" name=\"pC\" class=\"form-control\" placeholder=\"Code postal\" value=\"";
        // line 41
        (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getPostalCode", [], "method", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getPostalCode", [], "method", false, false, false, 41)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getPostalCode", [], "method", false, false, false, 41), "html", null, true))) : (print ("")));
        echo "\">
                </div>
            </div>

            <input type=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Télephone\" value=\"";
        // line 45
        (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getPhoneNumber", [], "method", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getPhoneNumber", [], "method", false, false, false, 45)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getPhoneNumber", [], "method", false, false, false, 45), "html", null, true))) : (print ("")));
        echo "\">

            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"";
        // line 47
        (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getEmail", [], "method", true, true, false, 47) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getEmail", [], "method", false, false, false, 47)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getEmail", [], "method", false, false, false, 47), "html", null, true))) : (print ("")));
        echo "\">

            <button class=\"btn-lg btn-form\" type=\"submit\">
                Modifier
            </button>

        </form>

    </main>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 47,  161 => 45,  154 => 41,  148 => 38,  141 => 34,  136 => 32,  129 => 28,  123 => 25,  116 => 20,  110 => 18,  108 => 17,  105 => 16,  99 => 14,  97 => 13,  90 => 8,  80 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier mes infos

{% endblock %}

{% block body %}

    <main id=\"user_edit_profile\" class=\"container\">

        <h2>Modifier mes infos</h2>

        {% if errors %}
            <p class=\"alert alert-danger col-md-8\">{{ errors|join('<br>')|raw }}</p>
        {% endif %}

        {% if msg %}
            <p class=\"alert alert-success col-md-8\">{{ msg }}</p>
        {% endif %}

        <form method=\"post\" class=\"col-md-8\">

            <div class=\"row\">
                <div class=\"col\">
                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Nom\" value=\"{{ user.getLastName() ?? '' }}\">
                </div>
                <div class=\"col\">
                    <input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"Prénom\" value=\"{{ user.getFirstName() ?? '' }}\">
                </div>
            </div>

            <input type=\"text\" name=\"address\" class=\"form-control\" placeholder=\"Adresse\" value=\"{{ user.getAddress() ?? '' }}\">

            <input type=\"text\" name=\"complement\" class=\"form-control\" placeholder=\"Complément\" value=\"{{ user.getAdditionalAddress() ?? '' }}\">

            <div class=\"row\">
                <div class=\" col\">
                    <input type=\"text\" name=\"city\" class=\"form-control\" placeholder=\"Ville\" value=\"{{ user.getCity() ?? '' }}\">
                </div>
                <div class=\"col\">
                    <input type=\"number\" name=\"pC\" class=\"form-control\" placeholder=\"Code postal\" value=\"{{ user.getPostalCode() ?? '' }}\">
                </div>
            </div>

            <input type=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"Télephone\" value=\"{{ user.getPhoneNumber() ?? '' }}\">

            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"{{ user.getEmail() ?? '' }}\">

            <button class=\"btn-lg btn-form\" type=\"submit\">
                Modifier
            </button>

        </form>

    </main>


{% endblock %}
", "user/edit_profile.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\user\\edit_profile.html.twig");
    }
}
