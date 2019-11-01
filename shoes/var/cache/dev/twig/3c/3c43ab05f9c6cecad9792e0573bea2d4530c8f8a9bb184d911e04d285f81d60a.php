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

/* products/show.html.twig */
class __TwigTemplate_d80bb9c36f0ae6db1775ddb76163b1b3b001927a327d127780bbc9ea76eec30c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/show.html.twig", 1);
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
        echo "    ";
        if ( !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "        <div class=\"alert alert-danger\">";
            echo (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })());
            echo "</div>
    ";
        }
        // line 7
        echo "    <main id=\"show_products\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 position-relative mb-3 search_bar\">
                    <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\" method=\"get\" class=\"border rounded border-dark position-sticky\" style=\"top:30px\">
                        <div class=\"mx-3 mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Marques</label>
                            <ul class=\"list-unstyled\">

                                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["keyBrand"] => $context["valueBrand"]) {
            // line 17
            echo "                                    <li class=\"mt-1\">
                                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, $context["keyBrand"], "html", null, true);
            echo " \" title=\" ";
            echo twig_escape_filter($this->env, $context["valueBrand"], "html", null, true);
            echo " \" class=\"text-uppercase w-100 btn btn-outline-secondary ";
            echo ((($context["keyBrand"] == (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 18, $this->source); })()))) ? ("active") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $context["valueBrand"], "html", null, true);
            echo "</a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keyBrand'], $context['valueBrand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                            </ul>
                        </div>
                        <div class=\"mx-3 mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Tailles (US)</label>
                            <div class=\"row no-gutters\">
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizesList"]) || array_key_exists("sizesList", $context) ? $context["sizesList"] : (function () { throw new RuntimeError('Variable "sizesList" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["keySize"] => $context["valueSize"]) {
            // line 27
            echo "                                    <div class=\"col-lg-3 col-md-6 mb-1\">
                                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "&size=";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo "\" title=\" ";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo " \" class=\" btn btn-outline-secondary btn-size ";
            echo ((($context["valueSize"] == (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 28, $this->source); })()))) ? ("active") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo "</a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keySize'], $context['valueSize'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                            </div>
                        </div>
                        <div class=\"mx-3\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Couleurs</label>
                            <div class=\"row no-gutters\">
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["keyColor"] => $context["valueColor"]) {
            // line 37
            echo "                                    <div class=\"col-lg-3 col-md-6 mb-1\">
                                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "&size=";
            echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "&color=";
            echo twig_escape_filter($this->env, $context["keyColor"], "html", null, true);
            echo "\" title=\" ";
            echo twig_escape_filter($this->env, $context["keyColor"], "html", null, true);
            echo " \" class=\"btn border btn-outline-secondary border-dark rounded-0 btn-color ";
            echo ((($context["keyColor"] === (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 38, $this->source); })()))) ? ("focus") : (""));
            echo "\" style=\"";
            echo twig_escape_filter($this->env, $context["valueColor"], "html", null, true);
            echo "\"></a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keyColor'], $context['valueColor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </div>
                        </div>
                        <div class=\"mx-3\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Prix</label>
                            <ul class=\"row list-unstyled\">
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "?brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "&pricemax=500\" title=\" Moins de 500€\" class=\"w-100 btn btn-outline-secondary ";
        echo ((((isset($context["selectedMaxPrice"]) || array_key_exists("selectedMaxPrice", $context) ? $context["selectedMaxPrice"] : (function () { throw new RuntimeError('Variable "selectedMaxPrice" does not exist.', 47, $this->source); })()) == "500")) ? ("active") : (""));
        echo "\">Moins de 500€</a>
                                </li>
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "?brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "&pricemin=500&pricemax=1000\" title=\"500€ à 1000€\" class=\"w-100 btn btn-outline-secondary ";
        echo ((((isset($context["selectedMaxPrice"]) || array_key_exists("selectedMaxPrice", $context) ? $context["selectedMaxPrice"] : (function () { throw new RuntimeError('Variable "selectedMaxPrice" does not exist.', 50, $this->source); })()) == "1000")) ? ("active") : (""));
        echo "\">500€ à 1000€</a>
                                </li>
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "?brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "&pricemin=1000\" title=\"Plus de 1000€\" class=\"w-100 btn btn-outline-secondary ";
        echo ((((isset($context["selectedMinPrice"]) || array_key_exists("selectedMinPrice", $context) ? $context["selectedMinPrice"] : (function () { throw new RuntimeError('Variable "selectedMinPrice" does not exist.', 53, $this->source); })()) == "1000")) ? ("active") : (""));
        echo "\">Plus de 1000€</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"mx-3\">
                            <div class=\"row no-gutters text-center\">
<select onchange=\"if(this.selectedIndex!=0) self.location=this.options[this.selectedIndex].value\" class=\"border-secondary form-control text-center\">

                                    <option value=\"0\" selected>--Trier par--</option>
                                    <option value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "?brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "&pricemin=";
        echo twig_escape_filter($this->env, (isset($context["selectedMinPrice"]) || array_key_exists("selectedMinPrice", $context) ? $context["selectedMinPrice"] : (function () { throw new RuntimeError('Variable "selectedMinPrice" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "&pricemax=";
        echo twig_escape_filter($this->env, (isset($context["selectedMaxPrice"]) || array_key_exists("selectedMaxPrice", $context) ? $context["selectedMaxPrice"] : (function () { throw new RuntimeError('Variable "selectedMaxPrice" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "&orderdir=asc\">Prix croissant</option>
                                    <option value=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "?brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "&pricemin=";
        echo twig_escape_filter($this->env, (isset($context["selectedMinPrice"]) || array_key_exists("selectedMinPrice", $context) ? $context["selectedMinPrice"] : (function () { throw new RuntimeError('Variable "selectedMinPrice" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "&pricemax=";
        echo twig_escape_filter($this->env, (isset($context["selectedMaxPrice"]) || array_key_exists("selectedMaxPrice", $context) ? $context["selectedMaxPrice"] : (function () { throw new RuntimeError('Variable "selectedMaxPrice" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "&orderdir=desc\">Prix décroissant</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"row no-gutters\">
                            <div class=\"mx-auto mt-2 mb-3 justify-content-center\">
<a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "\" title=\"Reinitialiser\" class=\"text-uppercase w-100 btn btn-outline-secondary\">
    <i class=\"far fa-times-circle\"></i> Reinitialiser</a>

                            </div>
                        </div>

                    </form>
                </div>
                <div class=\"col-lg-9 col-md-9\">
                    <div class=\"row no-gutters\">
                        ";
        // line 80
        if ( !(null === (isset($context["searchResult"]) || array_key_exists("searchResult", $context) ? $context["searchResult"] : (function () { throw new RuntimeError('Variable "searchResult" does not exist.', 80, $this->source); })()))) {
            // line 81
            echo "                            ";
            if ( !twig_test_empty((isset($context["searchResult"]) || array_key_exists("searchResult", $context) ? $context["searchResult"] : (function () { throw new RuntimeError('Variable "searchResult" does not exist.', 81, $this->source); })()))) {
                // line 82
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["searchResult"]) || array_key_exists("searchResult", $context) ? $context["searchResult"] : (function () { throw new RuntimeError('Variable "searchResult" does not exist.', 82, $this->source); })()));
                foreach ($context['_seq'] as $context["pKey"] => $context["pValue"]) {
                    // line 83
                    echo "                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"card bg-light m-1 border-0\">
                                            <div class=\"card-body\">
                                                <p class=\"card-text text-uppercase\">";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 86, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["pValue"], "getBrand", [], "method", false, false, false, 86), [], "array", false, false, false, 86), "html", null, true);
                    echo "</p>

                                                <p class=\"card-text text-capitalize\">";
                    // line 88
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["pValue"], "getModel", [], "method", false, false, false, 88), 0, 35) . " ..."), "html", null, true);
                    echo "</p>

                                                <p class=\"card-text font-weight-bold \">";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pValue"], "getPrice", [], "method", false, false, false, 90), "html", null, true);
                    echo "
                                                    €</p>

                                                <img src=\"";
                    // line 93
                    echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, $context["pValue"], "getPicture1", [], "method", false, false, false, 93)), "html", null, true);
                    echo "\" class=\"card-img-top mb-2\" alt=\"";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 93, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["pValue"], "getBrand", [], "method", false, false, false, 93), [], "array", false, false, false, 93) . twig_get_attribute($this->env, $this->source, $context["pValue"], "getModel", [], "method", false, false, false, 93)), "html", null, true);
                    echo "\">

                                                <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_details", ["id" => twig_get_attribute($this->env, $this->source, $context["pValue"], "getId", [], "method", false, false, false, 95)]), "html", null, true);
                    echo "\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase\">Voir plus</a>

                                                <button type=\"submit\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase font-weight-bold w-100\"><img src=\"/img/icons/buy.png\" class=\"p-1\">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pKey'], $context['pValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                            ";
            } else {
                // line 103
                echo "
                                <div class=\"alert alert-warning\" role=\"alert\">
                                    <p>Nous ne disposons pas de chaussures
                                        ";
                // line 106
                if (((isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 106, $this->source); })()) != 0)) {
                    // line 107
                    echo "                                            ";
                    echo twig_escape_filter($this->env, (("de marque " . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 107, $this->source); })()), (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 107, $this->source); })()), [], "array", false, false, false, 107))) . " et "), "html", null, true);
                    echo "
                                        ";
                }
                // line 109
                echo "                                        ";
                if (((isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 109, $this->source); })()) != 0)) {
                    // line 110
                    echo "                                            ";
                    echo twig_escape_filter($this->env, ("de taille " . (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 110, $this->source); })())), "html", null, true);
                    echo "
                                        ";
                }
                // line 112
                echo "                                        ";
                if (((isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 112, $this->source); })()) != "0")) {
                    // line 113
                    echo "                                            ";
                    echo twig_escape_filter($this->env, ("de couleur " . (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 113, $this->source); })())), "html", null, true);
                    echo "
                                        ";
                }
                // line 115
                echo "                                    </p>
                                </div>

                            ";
            }
            // line 119
            echo "                        ";
        } else {
            // line 120
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 121
                echo "                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"card bg-light m-1 border-0\">
                                        <div class=\"card-body\">
                                            <p class=\"card-text text-uppercase\">";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 124, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "getBrand", [], "method", false, false, false, 124), [], "array", false, false, false, 124), "html", null, true);
                echo "</p>
                                            <p class=\"card-text text-capitalize\">";
                // line 125
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getModel", [], "method", false, false, false, 125), 0, 35) . " ..."), "html", null, true);
                echo "</p>
                                            <p class=\"card-text font-weight-bold \">";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 126), "html", null, true);
                echo "
                                                €</p>

                                            <img src=\"";
                // line 129
                echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, $context["product"], "getPicture1", [], "method", false, false, false, 129)), "html", null, true);
                echo "\" class=\"card-img-top mb-2\" alt=\"\">

                                            <a href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 131)]), "html", null, true);
                echo "\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase\">Voir plus</a>
                                            <form method=\"post\">
                                                <input type=\"hidden\" name=\"id_product\" value=\"";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 133), "html", null, true);
                echo "\">
                                                <input type=\"hidden\" name=\"action\" value=\"add-to-cart\">
                                                <button onclick=\"return alert('Article ajouté')\" type=\"submit\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase font-weight-bold w-100\"><img src=\"/img/icons/buy.png\" class=\"p-1\"> Ajouter au panier</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                        ";
        }
        // line 143
        echo "                    </div>
                </div>
            </div>
        </main>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 143,  429 => 142,  414 => 133,  409 => 131,  404 => 129,  398 => 126,  394 => 125,  390 => 124,  385 => 121,  380 => 120,  377 => 119,  371 => 115,  365 => 113,  362 => 112,  356 => 110,  353 => 109,  347 => 107,  345 => 106,  340 => 103,  337 => 102,  324 => 95,  317 => 93,  311 => 90,  306 => 88,  301 => 86,  296 => 83,  291 => 82,  288 => 81,  286 => 80,  273 => 70,  253 => 63,  239 => 62,  219 => 53,  205 => 50,  191 => 47,  183 => 41,  162 => 38,  159 => 37,  155 => 36,  148 => 31,  129 => 28,  126 => 27,  122 => 26,  115 => 21,  98 => 18,  95 => 17,  91 => 16,  83 => 11,  77 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if error is not empty %}
        <div class=\"alert alert-danger\">{{error|raw}}</div>
    {% endif %}
    <main id=\"show_products\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 position-relative mb-3 search_bar\">
                    <form action=\"{{ current_url }}\" method=\"get\" class=\"border rounded border-dark position-sticky\" style=\"top:30px\">
                        <div class=\"mx-3 mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Marques</label>
                            <ul class=\"list-unstyled\">

                                {% for keyBrand, valueBrand in brandsList %}
                                    <li class=\"mt-1\">
                                        <a href=\"{{current_url}}?brand={{keyBrand}} \" title=\" {{ valueBrand }} \" class=\"text-uppercase w-100 btn btn-outline-secondary {{ (keyBrand == selectedBrand) ? 'active' : '' }}\">{{ valueBrand }}</a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"mx-3 mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Tailles (US)</label>
                            <div class=\"row no-gutters\">
                                {% for keySize, valueSize in sizesList %}
                                    <div class=\"col-lg-3 col-md-6 mb-1\">
                                        <a href=\"{{current_url}}?brand={{selectedBrand}}&size={{valueSize}}\" title=\" {{ valueSize }} \" class=\" btn btn-outline-secondary btn-size {{ (valueSize == selectedSize) ? 'active' : '' }}\">{{ valueSize }}</a>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"mx-3\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Couleurs</label>
                            <div class=\"row no-gutters\">
                                {% for keyColor, valueColor in colors %}
                                    <div class=\"col-lg-3 col-md-6 mb-1\">
                                        <a href=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{keyColor}}\" title=\" {{ keyColor }} \" class=\"btn border btn-outline-secondary border-dark rounded-0 btn-color {{ (keyColor is same as(selectedColor)) ? 'focus' : '' }}\" style=\"{{ valueColor }}\"></a>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"mx-3\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Prix</label>
                            <ul class=\"row list-unstyled\">
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemax=500\" title=\" Moins de 500€\" class=\"w-100 btn btn-outline-secondary {{ (selectedMaxPrice == '500') ? 'active' : '' }}\">Moins de 500€</a>
                                </li>
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin=500&pricemax=1000\" title=\"500€ à 1000€\" class=\"w-100 btn btn-outline-secondary {{ (selectedMaxPrice == '1000') ? 'active' : '' }}\">500€ à 1000€</a>
                                </li>
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin=1000\" title=\"Plus de 1000€\" class=\"w-100 btn btn-outline-secondary {{ (selectedMinPrice == '1000') ? 'active' : '' }}\">Plus de 1000€</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"mx-3\">
                            <div class=\"row no-gutters text-center\">
<select onchange=\"if(this.selectedIndex!=0) self.location=this.options[this.selectedIndex].value\" class=\"border-secondary form-control text-center\">

                                    <option value=\"0\" selected>--Trier par--</option>
                                    <option value=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin={{selectedMinPrice}}&pricemax={{selectedMaxPrice}}&orderdir=asc\">Prix croissant</option>
                                    <option value=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin={{selectedMinPrice}}&pricemax={{selectedMaxPrice}}&orderdir=desc\">Prix décroissant</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"row no-gutters\">
                            <div class=\"mx-auto mt-2 mb-3 justify-content-center\">
<a href=\"{{current_url}}\" title=\"Reinitialiser\" class=\"text-uppercase w-100 btn btn-outline-secondary\">
    <i class=\"far fa-times-circle\"></i> Reinitialiser</a>

                            </div>
                        </div>

                    </form>
                </div>
                <div class=\"col-lg-9 col-md-9\">
                    <div class=\"row no-gutters\">
                        {% if searchResult is not null %}
                            {% if searchResult is not empty %}
                                {% for pKey, pValue in searchResult %}
                                    <div class=\"col-lg-4 col-md-6\">
                                        <div class=\"card bg-light m-1 border-0\">
                                            <div class=\"card-body\">
                                                <p class=\"card-text text-uppercase\">{{ brandsList[pValue.getBrand()] }}</p>

                                                <p class=\"card-text text-capitalize\">{{ pValue.getModel()|slice(0,35) ~ ' ...'  }}</p>

                                                <p class=\"card-text font-weight-bold \">{{ pValue.getPrice() }}
                                                    €</p>

                                                <img src=\"{{ '/'~ pValue.getPicture1() }}\" class=\"card-img-top mb-2\" alt=\"{{ brandsList[pValue.getBrand()] ~ pValue.getModel() }}\">

                                                <a href=\"{{path('view_details',{id:pValue.getId()})}}\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase\">Voir plus</a>

                                                <button type=\"submit\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase font-weight-bold w-100\"><img src=\"/img/icons/buy.png\" class=\"p-1\">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            {% else %}

                                <div class=\"alert alert-warning\" role=\"alert\">
                                    <p>Nous ne disposons pas de chaussures
                                        {% if selectedBrand != 0 %}
                                            {{ 'de marque ' ~ brandsList[selectedBrand]|upper ~ ' et ' }}
                                        {% endif %}
                                        {% if selectedSize != 0 %}
                                            {{ 'de taille ' ~ selectedSize }}
                                        {% endif %}
                                        {% if selectedColor != '0' %}
                                            {{ 'de couleur ' ~ selectedColor }}
                                        {% endif %}
                                    </p>
                                </div>

                            {% endif %}
                        {% else %}
                            {% for product in products %}
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"card bg-light m-1 border-0\">
                                        <div class=\"card-body\">
                                            <p class=\"card-text text-uppercase\">{{ brandsList[product.getBrand()] }}</p>
                                            <p class=\"card-text text-capitalize\">{{ product.getModel()|slice(0,35) ~ ' ...'  }}</p>
                                            <p class=\"card-text font-weight-bold \">{{ product.getPrice() }}
                                                €</p>

                                            <img src=\"{{ '/'~ product.getPicture1() }}\" class=\"card-img-top mb-2\" alt=\"\">

                                            <a href=\"{{path('view_details',{id:product.getId()})}}\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase\">Voir plus</a>
                                            <form method=\"post\">
                                                <input type=\"hidden\" name=\"id_product\" value=\"{{ product.getId() }}\">
                                                <input type=\"hidden\" name=\"action\" value=\"add-to-cart\">
                                                <button onclick=\"return alert('Article ajouté')\" type=\"submit\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase font-weight-bold w-100\"><img src=\"/img/icons/buy.png\" class=\"p-1\"> Ajouter au panier</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
        </main>
    {% endblock %}
", "products/show.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\products\\show.html.twig");
    }
}
