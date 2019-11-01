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
class __TwigTemplate_2fa54d003777b3941fdeb7289101e4164660b938ed7cca365b41975d589c8a65 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <main id=\"contact\" class=\"container col-md-6\">

        <h2 class=\"text-center\">Nous contacter</h2>

        <div id=\"msgNotGood\">
            <p>";
        // line 9
        echo twig_join_filter((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 9, $this->source); })()), "<br>");
        echo "</p>
        </div>
        <p id=\"msgGood\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>

        <form method=\"post\">
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                    <label for=\"name\">Nom :</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-7\">
                        <label for=\"email\">Email :</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\">
                    </div>
                    </div>    
                <p>
                    <label for=\"subject\">Sujet :</label>
                    <input type=\"text\" name=\"subject\" class=\"form-control\">
                </p>
                <p>
                    <label for=\"message\">Message :</label>
                    <textarea name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\"></textarea>
                </p>
                <button class=\"btn btn-lg btn-success\" type=\"submit\">
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
        return array (  80 => 11,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                    <label for=\"name\">Nom :</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-7\">
                        <label for=\"email\">Email :</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\">
                    </div>
                    </div>    
                <p>
                    <label for=\"subject\">Sujet :</label>
                    <input type=\"text\" name=\"subject\" class=\"form-control\">
                </p>
                <p>
                    <label for=\"message\">Message :</label>
                    <textarea name=\"message\" class=\"form-control\" cols=\"40\" rows=\"5\"></textarea>
                </p>
                <button class=\"btn btn-lg btn-success\" type=\"submit\">
                    Envoyer
                </button>


            </div>
        </form>
    </main>

{% endblock %}
", "contact/contact.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\contact\\contact.html.twig");
    }
}
