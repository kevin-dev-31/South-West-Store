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

/* products/details.html.twig */
class __TwigTemplate_cb75286b96e0e2dc926eda5e12c0131c19a91707118e5f1d32dfd84bb39f8498 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/details.html.twig", 1);
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
        echo "    <main id=\"product_detail\" class=\"container\">

        <div class=\"row\">
            <div class=\"col-8\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 16, $this->source); })()), "getPicture1", [], "method", false, false, false, 16)), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()), "getPicture2", [], "method", false, false, false, 19)), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 22, $this->source); })()), "getPicture3", [], "method", false, false, false, 22)), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"prev-icon\" aria-hidden=\"true\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </span>
                        <span class=\"sr-only\">Previous</span>

                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"next-icon\" aria-hidden=\"true\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </span>
                        <span class=\"sr-only\">Next</span>

                    </a>
                </div>
            </div>
            <div class=\"col-4 flex-column mt-3 bg-light card\">
                <p class=\"text-uppercase font-weight-bold\">Marque :
                    ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 43, $this->source); })()), "getBrand", [], "method", false, false, false, 43), [], "array", false, false, false, 43), "html", null, true);
        echo "</p>
                <p class=\"text-capitalize font-weight-bold\">Modèle :
                    ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 45, $this->source); })()), "getModel", [], "method", false, false, false, 45), "html", null, true);
        echo "</p>
                <p class=\"text-capitalize\">SKU :
                    ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 47, $this->source); })()), "getSku", [], "method", false, false, false, 47), "html", null, true);
        echo "</p>

                <hr>
                <p class=\"text-capitalize\">Couleur :
                    ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 51, $this->source); })()), "getColor", [], "method", false, false, false, 51), "html", null, true);
        echo "</p>
                <p class=\"text-capitalize\">Taille (US) :
                    ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 53, $this->source); })()), "getShoeSize", [], "method", false, false, false, 53), "html", null, true);
        echo "</p>
                <hr>
                <p class=\"font-weight-bold\">Prix :
                    ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 56, $this->source); })()), "getPrice", [], "method", false, false, false, 56), "html", null, true);
        echo "
                    €</p>

                <form method=\"post\">

                    <input type=\"hidden\" name=\"id_product\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 61, $this->source); })()), "getId", [], "method", false, false, false, 61), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"action\" value=\"add-to-cart\">

                    <button onclick=\"Article ajouté\" type=\"submit\" class=\"text-uppercase font-weight-bold w-100\">
                        <img src=\"/img/icons/buy.png\" class=\"p-1\">Add to cart
                    </button>

                </form>
            </div>
        </div>
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 61,  146 => 56,  140 => 53,  135 => 51,  128 => 47,  123 => 45,  118 => 43,  94 => 22,  88 => 19,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <main id=\"product_detail\" class=\"container\">

        <div class=\"row\">
            <div class=\"col-8\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"{{ '/'~ products.getPicture1() }}\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ '/'~ products.getPicture2() }}\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ '/'~ products.getPicture3() }}\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"prev-icon\" aria-hidden=\"true\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </span>
                        <span class=\"sr-only\">Previous</span>

                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"next-icon\" aria-hidden=\"true\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </span>
                        <span class=\"sr-only\">Next</span>

                    </a>
                </div>
            </div>
            <div class=\"col-4 flex-column mt-3 bg-light card\">
                <p class=\"text-uppercase font-weight-bold\">Marque :
                    {{ brands[products.getBrand()] }}</p>
                <p class=\"text-capitalize font-weight-bold\">Modèle :
                    {{ products.getModel() }}</p>
                <p class=\"text-capitalize\">SKU :
                    {{ products.getSku() }}</p>

                <hr>
                <p class=\"text-capitalize\">Couleur :
                    {{ products.getColor() }}</p>
                <p class=\"text-capitalize\">Taille (US) :
                    {{ products.getShoeSize() }}</p>
                <hr>
                <p class=\"font-weight-bold\">Prix :
                    {{ products.getPrice() }}
                    €</p>

                <form method=\"post\">

                    <input type=\"hidden\" name=\"id_product\" value=\"{{ products.getId() }}\">
                    <input type=\"hidden\" name=\"action\" value=\"add-to-cart\">

                    <button onclick=\"Article ajouté\" type=\"submit\" class=\"text-uppercase font-weight-bold w-100\">
                        <img src=\"/img/icons/buy.png\" class=\"p-1\">Add to cart
                    </button>

                </form>
            </div>
        </div>
    </main>

{% endblock %}

", "products/details.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\products\\details.html.twig");
    }
}
