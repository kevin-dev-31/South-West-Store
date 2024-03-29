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

/* default/index.html.twig */
class __TwigTemplate_f99555ebdda8104d6346a57a3a3c36dae1ab6c1a5e22498a9c743c56d3c8fa27 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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

        echo "Accueil
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
        echo "    <main id=\"home\">

        <section class=\"video container text-center\">
            <video width=\"100%\" autoplay loop muted>
                <source src=\"img/home/walking.mp4\" type=\"video/mp4\">
            </video>
        </section>

        <section class=\"bg-light pt-3 pb-3\">
            <div class=\"container text-center\">
                <h2>Sneakers de collections depuis 2019</h2>

                <p class=\"text-muted text-justify mt-3\">Lancé en 2019, South-West-Store est le site français référent dédié aux Sneakers rare et introuvable. Si le phénomène sneakers est devenu gigantesque, depuis notre lancement il y a plus de treize ans, avec des multitudes de sorties, de blogs et d’infos, nous continuons de suivre notre ligne éditoriale de passionnés.</p>
                <p class=\"text-muted text-justify\">
                    Notre équipe traite quotidiennement de sneakers mais également des nouvelles tendances urbaines avec une approche lifestyle. Musique, Skate, Basketball et Mode sont autant de thèmes abordés tous les jours sur le site. Conçue par des passionnés, retrouvez chaque jour une sélection éclectique de news sur les meilleures marques, les dernières sorties mais aussi les événements qui nous intéressent. Vous ne trouverez peut-être pas toutes les sorties sur notre site car nous essayons de sélectionner ce qui nous plait le plus parmi les dizaines de sorties hebdomadaires.</p>
            </div>
        </section>

    <section id=\"carrousel\">
        <div id=\"carousel\" class=\"carousel slide carrousel_size mx-auto\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"img/home-slider/shop1.jpg\" alt=\"First slide\">

                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/home-slider/shoe1.jpg\" alt=\"Second slide\">


                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/home-slider/shoe2.jpg\" alt=\"Third slide\">

                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/home-slider/shoe3.jpg\" alt=\"Fourth slide\">

                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </section>

    <section class=\"bg-light pt-3 pb-3\">
        <div class=\"container text-center\">
            <h2>Un peu d'histoire :</h2>
            <p class=\"text-muted text-justify mt-3\">L'histoire de la sneaker remonte au début du XXe siècle et est intimement liée à l'utilisation du caoutchouc. En 1916, l'entreprise United States Rubber Company crée Keds, qui commercialise les premières chaussures dotées de semelles en caoutchouc, considérées comme les premières sneakers de l'histoire. Remarquées pour leur confort et leur discrétion, ces chaussures marquent une rupture avec les chaussures traditionnellement utilisées pour un usage quotidien. L'année suivante, Converse crée la Chuck Taylor All Star, des chaussures de basket-ball qui seront par la suite également vendues pour un usage quotidien.</p>
            <p class=\"text-muted text-justify mt-3\">À partir des années 1950, la part du temps consacré au temps libre augmente considérablement. De plus, les sneakers sont de plus en plus utilisées dans les uniformes scolaires. Les ventes de sneakers augmentent de manière exponentielle, jusqu'à venir concurrencer les ventes des chaussures traditionnelles, en cuir. Durant les années 1990, les marques de sneakers s'attachent de plus en plus à l'esthétique de la chaussure et jouent du marketing pour les vendre au plus grand nombre. Les sneakers sont alors moins choisies pour leur confort que pour l'identité qu'elles façonnent pour celui qui les porte.
            </p>
        </div>
    </section>
    
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}
    <main id=\"home\">

        <section class=\"video container text-center\">
            <video width=\"100%\" autoplay loop muted>
                <source src=\"img/home/walking.mp4\" type=\"video/mp4\">
            </video>
        </section>

        <section class=\"bg-light pt-3 pb-3\">
            <div class=\"container text-center\">
                <h2>Sneakers de collections depuis 2019</h2>

                <p class=\"text-muted text-justify mt-3\">Lancé en 2019, South-West-Store est le site français référent dédié aux Sneakers rare et introuvable. Si le phénomène sneakers est devenu gigantesque, depuis notre lancement il y a plus de treize ans, avec des multitudes de sorties, de blogs et d’infos, nous continuons de suivre notre ligne éditoriale de passionnés.</p>
                <p class=\"text-muted text-justify\">
                    Notre équipe traite quotidiennement de sneakers mais également des nouvelles tendances urbaines avec une approche lifestyle. Musique, Skate, Basketball et Mode sont autant de thèmes abordés tous les jours sur le site. Conçue par des passionnés, retrouvez chaque jour une sélection éclectique de news sur les meilleures marques, les dernières sorties mais aussi les événements qui nous intéressent. Vous ne trouverez peut-être pas toutes les sorties sur notre site car nous essayons de sélectionner ce qui nous plait le plus parmi les dizaines de sorties hebdomadaires.</p>
            </div>
        </section>

    <section id=\"carrousel\">
        <div id=\"carousel\" class=\"carousel slide carrousel_size mx-auto\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"img/home-slider/shop1.jpg\" alt=\"First slide\">

                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/home-slider/shoe1.jpg\" alt=\"Second slide\">


                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/home-slider/shoe2.jpg\" alt=\"Third slide\">

                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"img/home-slider/shoe3.jpg\" alt=\"Fourth slide\">

                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </section>

    <section class=\"bg-light pt-3 pb-3\">
        <div class=\"container text-center\">
            <h2>Un peu d'histoire :</h2>
            <p class=\"text-muted text-justify mt-3\">L'histoire de la sneaker remonte au début du XXe siècle et est intimement liée à l'utilisation du caoutchouc. En 1916, l'entreprise United States Rubber Company crée Keds, qui commercialise les premières chaussures dotées de semelles en caoutchouc, considérées comme les premières sneakers de l'histoire. Remarquées pour leur confort et leur discrétion, ces chaussures marquent une rupture avec les chaussures traditionnellement utilisées pour un usage quotidien. L'année suivante, Converse crée la Chuck Taylor All Star, des chaussures de basket-ball qui seront par la suite également vendues pour un usage quotidien.</p>
            <p class=\"text-muted text-justify mt-3\">À partir des années 1950, la part du temps consacré au temps libre augmente considérablement. De plus, les sneakers sont de plus en plus utilisées dans les uniformes scolaires. Les ventes de sneakers augmentent de manière exponentielle, jusqu'à venir concurrencer les ventes des chaussures traditionnelles, en cuir. Durant les années 1990, les marques de sneakers s'attachent de plus en plus à l'esthétique de la chaussure et jouent du marketing pour les vendre au plus grand nombre. Les sneakers sont alors moins choisies pour leur confort que pour l'identité qu'elles façonnent pour celui qui les porte.
            </p>
        </div>
    </section>
    
</main>{% endblock %}






    {#     <section class=\"staff\">
            <div class=\" text-center container\">
                <h2>Presentation du staff :</h2>
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
        </div>
    </section> #}", "default/index.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\default\\index.html.twig");
    }
}
