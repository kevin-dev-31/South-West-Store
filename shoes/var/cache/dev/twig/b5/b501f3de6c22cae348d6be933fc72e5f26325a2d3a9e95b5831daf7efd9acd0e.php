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

/* default/a_propos.html.twig */
class __TwigTemplate_6ddc26d26861ada0a713578811e4a10804da874f5f292e12478b9ccb3c6c738e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/a_propos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/a_propos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/a_propos.html.twig", 1);
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

        echo "A propos du shop
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <main id=\"a_propos\" class=\"container\">


        <section>
            <h3>Nous contacter</h3>
            <p>N'hésitez pas à nous contacter pour toute question en utilisant
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">le formulaire de contact</a>, nous vous répondrons en 24h maximum. Vous pouvez également nous contacter par téléphone du lundi au vendredi de 11h à 17h au 06 80 66 88 20.</p>
        </section>

        <section>
            <h3>Nous suivre</h3>
            <p>Si vous voulez en savoir plus sur nos dernières sorties, nos coups de coeur et échanger avec nous, vous pouvez également nous rejoindre sur différents réseaux sociaux :</p>
            <div class=\"logo row text-center\">
                <div class=\"col-6\">
                    <a href=\"#\">
                        <i class=\"fab fa-facebook-square\"></i>
                    </a>
                </div>
                <div class=\"col-6\">
                    <a href=\"#\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                </div>
                <div class=\"col-6\">
                    <a href=\"#\">
                        <i class=\"fab fa-snapchat-square\"></i>
                    </a>
                </div>
                <div class=\"col-6\">
                    <a href=\"#\">
                        <i class=\"fab fa-twitter-square\"></i>
                    </a>
                </div>
            </div>
        </section>

        <section class=\"staff\">
            <div class=\" text-center container\">
                <h2>Presentation du staff :</h2>
                <p>Nous sommes des passionnés de sneakers et de mode de longue date, toujours prêts à pouvoir vous satisfaire, trouver le produit que vous recherchez ou vous conseiller pour vos achats sur internet.</p>
                <div class=\"row justify-content-around\">
                    <div class=\"col-md-5 picture\">
                        <h3>
                            Boris Gomes</h3>
                        <img src=\"img/home/staff/boris.jpg\" alt=\"Photo Boris\">
                    </div>
                    <div class=\"col-md-5 picture\">
                        <h3>Estelle Pratlong</h3>
                        <img src=\"img/home/staff/estelle.jpg\" alt=\"Photo Estelle\">
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <img class=\"col-md-3 logo\" src=\"/img/South-West-Store-Logo.png\" alt=\"Logo\">
                </div>
                <div class=\"row justify-content-around\">
                    <div class=\"col-md-5 picture\">
                        <h3>Fabien Puech</h3>
                        <img src=\"img/home/staff/fabien.jpg\" alt=\"Photo Fabien\">

                    </div>
                    <div class=\"col-md-5 picture\">
                        <h3>Kévin Ricou</h3>
                        <img src=\"img/home/staff/kevin.jpg\" alt=\"Photo Kévin\">

                    </div>
                </div>
            </div>
        </section>

    </main>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/a_propos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A propos du shop
{% endblock %}

{% block body %}

    <main id=\"a_propos\" class=\"container\">


        <section>
            <h3>Nous contacter</h3>
            <p>N'hésitez pas à nous contacter pour toute question en utilisant
                <a href=\"{{ path('contact') }}\">le formulaire de contact</a>, nous vous répondrons en 24h maximum. Vous pouvez également nous contacter par téléphone du lundi au vendredi de 11h à 17h au 06 80 66 88 20.</p>
        </section>

        <section>
            <h3>Nous suivre</h3>
            <p>Si vous voulez en savoir plus sur nos dernières sorties, nos coups de coeur et échanger avec nous, vous pouvez également nous rejoindre sur différents réseaux sociaux :</p>
            <div class=\"logo row text-center\">
                <div class=\"col-6\">
                    <a href=\"#\">
                        <i class=\"fab fa-facebook-square\"></i>
                    </a>
                </div>
                <div class=\"col-6\">
                    <a href=\"#\">
                        <i class=\"fab fa-instagram\"></i>
                    </a>
                </div>
                <div class=\"col-6\">
                    <a href=\"#\">
                        <i class=\"fab fa-snapchat-square\"></i>
                    </a>
                </div>
                <div class=\"col-6\">
                    <a href=\"#\">
                        <i class=\"fab fa-twitter-square\"></i>
                    </a>
                </div>
            </div>
        </section>

        <section class=\"staff\">
            <div class=\" text-center container\">
                <h2>Presentation du staff :</h2>
                <p>Nous sommes des passionnés de sneakers et de mode de longue date, toujours prêts à pouvoir vous satisfaire, trouver le produit que vous recherchez ou vous conseiller pour vos achats sur internet.</p>
                <div class=\"row justify-content-around\">
                    <div class=\"col-md-5 picture\">
                        <h3>
                            Boris Gomes</h3>
                        <img src=\"img/home/staff/boris.jpg\" alt=\"Photo Boris\">
                    </div>
                    <div class=\"col-md-5 picture\">
                        <h3>Estelle Pratlong</h3>
                        <img src=\"img/home/staff/estelle.jpg\" alt=\"Photo Estelle\">
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <img class=\"col-md-3 logo\" src=\"/img/South-West-Store-Logo.png\" alt=\"Logo\">
                </div>
                <div class=\"row justify-content-around\">
                    <div class=\"col-md-5 picture\">
                        <h3>Fabien Puech</h3>
                        <img src=\"img/home/staff/fabien.jpg\" alt=\"Photo Fabien\">

                    </div>
                    <div class=\"col-md-5 picture\">
                        <h3>Kévin Ricou</h3>
                        <img src=\"img/home/staff/kevin.jpg\" alt=\"Photo Kévin\">

                    </div>
                </div>
            </div>
        </section>

    </main>


{% endblock %}
", "default/a_propos.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\default\\a_propos.html.twig");
    }
}
