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
class __TwigTemplate_1828605fd97f81ecf59f09988083e590104073cb1ee71b17335325e509a4ec41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/details.html.twig", 1);
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

        echo "Détail
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
        echo "    <main id=\"product_detail\" class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div id=\"carousel\" class=\"carousel slide\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()), "getPicture1", [], "method", false, false, false, 19)), "html", null, true);
        echo "\" alt=\"photo du produit\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 22, $this->source); })()), "getPicture2", [], "method", false, false, false, 22)), "html", null, true);
        echo "\" alt=\"photo du produit\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 25, $this->source); })()), "getPicture3", [], "method", false, false, false, 25)), "html", null, true);
        echo "\" alt=\"photo du produit\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"prev-icon\" aria-hidden=\"true\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </span>
                        <span class=\"sr-only\">Previous</span>

                    </a>
                    <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
                        <span class=\"next-icon\" aria-hidden=\"true\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </span>
                        <span class=\"sr-only\">Next</span>

                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 flex-column mt-3 bg-light card\">
                <p class=\"text-uppercase font-weight-bold\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 45, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 45, $this->source); })()), "getBrand", [], "method", false, false, false, 45), [], "array", false, false, false, 45), "html", null, true);
        echo "</p>
                <p class=\"text-capitalize font-weight-bold\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 46, $this->source); })()), "getModel", [], "method", false, false, false, 46), "html", null, true);
        echo "</p>
                <p class=\"text-capitalize\">Sku :
                    ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 48, $this->source); })()), "getSku", [], "method", false, false, false, 48), "html", null, true);
        echo "</p>

                <hr>
                <p class=\"text-capitalize\">Couleur :
                    ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 52, $this->source); })()), "getColor", [], "method", false, false, false, 52), "html", null, true);
        echo "</p>
                <p class=\"text-capitalize\">Taille (US) :
                    ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 54, $this->source); })()), "getShoeSize", [], "method", false, false, false, 54), "html", null, true);
        echo "</p>
                <!-- Modal -->
                <p>
                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal-size\">
                        Guide des tailles
                    </button>
                </p>
                <hr>
                <p class=\"font-weight-bold\">Prix :
                    ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 63, $this->source); })()), "getPrice", [], "method", false, false, false, 63), "html", null, true);
        echo "
                    €</p>

                <form method=\"post\">

                    <input type=\"hidden\" name=\"id_product\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 68, $this->source); })()), "getId", [], "method", false, false, false, 68), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"action\" value=\"add-to-cart\">

                    <button type=\"submit\" class=\"add-product text-uppercase font-weight-bold w-100\">

                        <img src=\"/img/icons/buy.png\" alt=\"logo buy\" class=\"p-1\">
                        Ajouter au panier
                    </button>

                </form>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"modal-size\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modal-size\">Guide des tailles</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Pointure US</th>
                                <th>Pointure FR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>5.5</td>
                                <td>38</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>38.5</td>
                            </tr>
                            <tr>
                                <td>6.5</td>
                                <td>39</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td>7.5</td>
                                <td>40.5</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>41</td>
                            </tr>
                            <tr>
                                <td>8.5</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>42.5</td>
                            </tr>
                            <tr>
                                <td>9.5</td>
                                <td>43</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>44</td>
                            </tr>
                            <tr>
                                <td>10.5</td>
                                <td>44.5</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <td>11.5</td>
                                <td>45.5</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>46</td>
                            </tr>
                            <tr>
                                <td>12.5</td>
                                <td>47</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">X</button>
                </div>
            </div>
        </div>
    </div>


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
        return array (  179 => 68,  171 => 63,  159 => 54,  154 => 52,  147 => 48,  142 => 46,  138 => 45,  115 => 25,  109 => 22,  103 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail
{% endblock %}

{% block body %}
    <main id=\"product_detail\" class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div id=\"carousel\" class=\"carousel slide\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"{{ '/'~ products.getPicture1() }}\" alt=\"photo du produit\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ '/'~ products.getPicture2() }}\" alt=\"photo du produit\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ '/'~ products.getPicture3() }}\" alt=\"photo du produit\" class=\"d-block w-100\" alt=\"...\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"prev-icon\" aria-hidden=\"true\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </span>
                        <span class=\"sr-only\">Previous</span>

                    </a>
                    <a class=\"carousel-control-next\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
                        <span class=\"next-icon\" aria-hidden=\"true\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </span>
                        <span class=\"sr-only\">Next</span>

                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 flex-column mt-3 bg-light card\">
                <p class=\"text-uppercase font-weight-bold\">{{ brands[products.getBrand()] }}</p>
                <p class=\"text-capitalize font-weight-bold\">{{ products.getModel() }}</p>
                <p class=\"text-capitalize\">Sku :
                    {{ products.getSku() }}</p>

                <hr>
                <p class=\"text-capitalize\">Couleur :
                    {{ products.getColor() }}</p>
                <p class=\"text-capitalize\">Taille (US) :
                    {{ products.getShoeSize() }}</p>
                <!-- Modal -->
                <p>
                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal-size\">
                        Guide des tailles
                    </button>
                </p>
                <hr>
                <p class=\"font-weight-bold\">Prix :
                    {{ products.getPrice() }}
                    €</p>

                <form method=\"post\">

                    <input type=\"hidden\" name=\"id_product\" value=\"{{ products.getId() }}\">
                    <input type=\"hidden\" name=\"action\" value=\"add-to-cart\">

                    <button type=\"submit\" class=\"add-product text-uppercase font-weight-bold w-100\">

                        <img src=\"/img/icons/buy.png\" alt=\"logo buy\" class=\"p-1\">
                        Ajouter au panier
                    </button>

                </form>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"modal-size\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modal-size\">Guide des tailles</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Pointure US</th>
                                <th>Pointure FR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>5.5</td>
                                <td>38</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>38.5</td>
                            </tr>
                            <tr>
                                <td>6.5</td>
                                <td>39</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td>7.5</td>
                                <td>40.5</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>41</td>
                            </tr>
                            <tr>
                                <td>8.5</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>42.5</td>
                            </tr>
                            <tr>
                                <td>9.5</td>
                                <td>43</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>44</td>
                            </tr>
                            <tr>
                                <td>10.5</td>
                                <td>44.5</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <td>11.5</td>
                                <td>45.5</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>46</td>
                            </tr>
                            <tr>
                                <td>12.5</td>
                                <td>47</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">X</button>
                </div>
            </div>
        </div>
    </div>


{% endblock %}
", "products/details.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\products\\details.html.twig");
    }
}
