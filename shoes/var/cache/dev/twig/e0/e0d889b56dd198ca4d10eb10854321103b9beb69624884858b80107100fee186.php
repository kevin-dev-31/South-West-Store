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
class __TwigTemplate_c0c1d764c8a1ba53ca8fced274788292ef686a7604e9e43f7853bd33fd7d1ebe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/show.html.twig", 1);
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

        echo "Le shop
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
        echo "    <main id=\"show_products\">


        <div class=\"container\">
            ";
        // line 11
        if ( !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "                <div class=\"alert alert-danger\">";
            echo (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })());
            echo "</div>
            ";
        }
        // line 14
        echo "            <div class=\"row\">
                <aside class=\"col-md-3 mb-3 d-none d-md-block\">
                    <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" method=\"get\" class=\"border rounded border-dark position-sticky\" style=\"top:30px\">
                        <div class=\"mx-3 mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Marques</label>
                            <ul class=\"list-unstyled\">

                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["keyBrand"] => $context["valueBrand"]) {
            // line 22
            echo "                                    <li class=\"mt-1\">
                                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "?search=yes&brand=";
            echo twig_escape_filter($this->env, $context["keyBrand"], "html", null, true);
            echo " \" title=\" ";
            echo twig_escape_filter($this->env, $context["valueBrand"], "html", null, true);
            echo " \" class=\"text-uppercase w-100 btn btn-outline-secondary ";
            echo ((($context["keyBrand"] == (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 23, $this->source); })()))) ? ("active") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $context["valueBrand"], "html", null, true);
            echo "</a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keyBrand'], $context['valueBrand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                            </ul>
                        </div>
                        <div class=\"mx-3 mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Tailles (US)</label>
                            <div class=\"row no-gutters\">
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizesList"]) || array_key_exists("sizesList", $context) ? $context["sizesList"] : (function () { throw new RuntimeError('Variable "sizesList" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["keySize"] => $context["valueSize"]) {
            // line 32
            echo "                                    <div class=\"col-lg-3 col-md-6 mb-1\">
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "?search=yes&brand=";
            echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "&size=";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo "\" title=\" ";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo " \" class=\" btn btn-outline-secondary btn-size ";
            echo ((($context["valueSize"] == (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 33, $this->source); })()))) ? ("active") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo "</a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keySize'], $context['valueSize'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            </div>
                        </div>
                        <div class=\"mx-3  mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Couleurs</label>
                            <div class=\"row no-gutters\">
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["keyColor"] => $context["valueColor"]) {
            // line 42
            echo "                                    <div class=\"col-lg-3 col-md-6 mb-1\">
                                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "?search=yes&brand=";
            echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "&size=";
            echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "&color=";
            echo twig_escape_filter($this->env, $context["keyColor"], "html", null, true);
            echo "\" title=\" ";
            echo twig_escape_filter($this->env, $context["keyColor"], "html", null, true);
            echo " \" class=\"btn border btn-outline-secondary border-dark rounded-0 btn-color ";
            echo ((($context["keyColor"] === (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 43, $this->source); })()))) ? ("focus") : (""));
            echo "\" style=\"";
            echo twig_escape_filter($this->env, $context["valueColor"], "html", null, true);
            echo "\"></a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keyColor'], $context['valueColor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            </div>
                        </div>
                        <div class=\"mx-3\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Prix</label>
                            <ul class=\"row list-unstyled\">
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "?search=yes&brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "&pricemax=500\" title=\" Moins de 500€\" class=\"w-100 btn btn-outline-secondary ";
        echo ((((isset($context["selectedMaxPrice"]) || array_key_exists("selectedMaxPrice", $context) ? $context["selectedMaxPrice"] : (function () { throw new RuntimeError('Variable "selectedMaxPrice" does not exist.', 52, $this->source); })()) == "500")) ? ("active") : (""));
        echo "\">Moins de 500€</a>
                                </li>
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "?search=yes&brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "&pricemin=500&pricemax=1000\" title=\"500€ à 1000€\" class=\"w-100 btn btn-outline-secondary ";
        echo ((((isset($context["selectedMaxPrice"]) || array_key_exists("selectedMaxPrice", $context) ? $context["selectedMaxPrice"] : (function () { throw new RuntimeError('Variable "selectedMaxPrice" does not exist.', 55, $this->source); })()) == "1000")) ? ("active") : (""));
        echo "\">500€ à 1000€</a>
                                </li>
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "?search=yes&brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "&pricemin=1000\" title=\"Plus de 1000€\" class=\"w-100 btn btn-outline-secondary ";
        echo ((((isset($context["selectedMinPrice"]) || array_key_exists("selectedMinPrice", $context) ? $context["selectedMinPrice"] : (function () { throw new RuntimeError('Variable "selectedMinPrice" does not exist.', 58, $this->source); })()) == "1000")) ? ("active") : (""));
        echo "\">Plus de 1000€</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"mx-3\">
                            <div class=\"row no-gutters text-center\">
                                <select onchange=\"if(this.selectedIndex!=0) self.location=this.options[this.selectedIndex].value\" class=\"border-secondary form-control text-center\">

                                    <option value=\"0\" selected>--Trier par--</option>
                                    <option value=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "?search=yes&brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "&pricemin=";
        echo twig_escape_filter($this->env, (isset($context["selectedMinPrice"]) || array_key_exists("selectedMinPrice", $context) ? $context["selectedMinPrice"] : (function () { throw new RuntimeError('Variable "selectedMinPrice" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "&pricemax=";
        echo twig_escape_filter($this->env, (isset($context["selectedMaxPrice"]) || array_key_exists("selectedMaxPrice", $context) ? $context["selectedMaxPrice"] : (function () { throw new RuntimeError('Variable "selectedMaxPrice" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "&orderdir=asc\">Prix croissant</option>
                                    <option value=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "?search=yes&brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "&pricemin=";
        echo twig_escape_filter($this->env, (isset($context["selectedMinPrice"]) || array_key_exists("selectedMinPrice", $context) ? $context["selectedMinPrice"] : (function () { throw new RuntimeError('Variable "selectedMinPrice" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "&pricemax=";
        echo twig_escape_filter($this->env, (isset($context["selectedMaxPrice"]) || array_key_exists("selectedMaxPrice", $context) ? $context["selectedMaxPrice"] : (function () { throw new RuntimeError('Variable "selectedMaxPrice" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "&orderdir=desc\">Prix décroissant</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"row no-gutters\">
                            <div class=\"mx-auto mt-2 mb-3 justify-content-center\">
                                <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\" title=\"Reinitialiser\" class=\"text-uppercase w-100 btn btn-outline-secondary\">
                                    <i class=\"far fa-times-circle\"></i>
                                    Reinitialiser</a>

                            </div>
                        </div>

                    </form>
                </aside>

                <div class=\"col-md-9\">
                    <div class=\"row no-gutters\">


                        ";
        // line 89
        if ( !twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 89, $this->source); })()))) {
            // line 90
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                echo "                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"card bg-light m-1 border-0\">
                                        <div class=\"card-body\">
                                            <p class=\"card-text text-uppercase\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 94, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "getBrand", [], "method", false, false, false, 94), [], "array", false, false, false, 94), "html", null, true);
                echo "</p>
                                            <p class=\"card-text text-capitalize\">";
                // line 95
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getModel", [], "method", false, false, false, 95), 0, 35) . " ..."), "html", null, true);
                echo "</p>
                                            <p class=\"card-text font-weight-bold \">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 96), "html", null, true);
                echo "
                                                €</p>
                                            <img src=\"";
                // line 98
                echo twig_escape_filter($this->env, ("/" . twig_get_attribute($this->env, $this->source, $context["product"], "getPicture1", [], "method", false, false, false, 98)), "html", null, true);
                echo "\" class=\"card-img-top mb-2\" alt=\"photo du produit\">
                                            <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 99)]), "html", null, true);
                echo "\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase\">Voir plus</a>
                                            <form method=\"post\">
                                                <input type=\"hidden\" name=\"id_product\" value=\"";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 101), "html", null, true);
                echo "\">
                                                <input type=\"hidden\" name=\"action\" value=\"add-to-cart\">
                                                <button type=\"submit\" class=\"add-product btn btn-outline-dark btn-block btn-sm text-uppercase font-weight-bold w-100\"><img src=\"/img/icons/buy.png\" class=\"p-1\" alt=\"logo buy\">


                                                    Ajouter au panier</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                        ";
        } else {
            // line 114
            echo "
                            <div class=\"alert alert-warning\" role=\"alert\">
                                <p>Nous ne disposons pas de chaussures
                                    ";
            // line 117
            if (((isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 117, $this->source); })()) != 0)) {
                // line 118
                echo "                                        ";
                echo twig_escape_filter($this->env, (("de marque " . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 118, $this->source); })()), (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 118, $this->source); })()), [], "array", false, false, false, 118))) . " et "), "html", null, true);
                echo "
                                    ";
            }
            // line 120
            echo "                                    ";
            if (((isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 120, $this->source); })()) != 0)) {
                // line 121
                echo "                                        ";
                echo twig_escape_filter($this->env, ("de taille " . (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 121, $this->source); })())), "html", null, true);
                echo "
                                    ";
            }
            // line 123
            echo "                                    ";
            if (((isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 123, $this->source); })()) != "0")) {
                // line 124
                echo "                                        ";
                echo twig_escape_filter($this->env, ("de couleur " . (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 124, $this->source); })())), "html", null, true);
                echo "
                                    ";
            }
            // line 126
            echo "                                </p>
                            </div>

                        ";
        }
        // line 130
        echo "                    </div>
                </div>

                <div class=\"navigation\">
                    ";
        // line 134
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 134, $this->source); })()));
        echo "
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
        return array (  412 => 134,  406 => 130,  400 => 126,  394 => 124,  391 => 123,  385 => 121,  382 => 120,  376 => 118,  374 => 117,  369 => 114,  366 => 113,  348 => 101,  343 => 99,  339 => 98,  334 => 96,  330 => 95,  326 => 94,  321 => 91,  316 => 90,  314 => 89,  297 => 75,  277 => 68,  263 => 67,  243 => 58,  229 => 55,  215 => 52,  207 => 46,  186 => 43,  183 => 42,  179 => 41,  172 => 36,  153 => 33,  150 => 32,  146 => 31,  139 => 26,  122 => 23,  119 => 22,  115 => 21,  107 => 16,  103 => 14,  97 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le shop
{% endblock %}

{% block body %}
    <main id=\"show_products\">


        <div class=\"container\">
            {% if error is not empty %}
                <div class=\"alert alert-danger\">{{error|raw}}</div>
            {% endif %}
            <div class=\"row\">
                <aside class=\"col-md-3 mb-3 d-none d-md-block\">
                    <form action=\"{{ current_url }}\" method=\"get\" class=\"border rounded border-dark position-sticky\" style=\"top:30px\">
                        <div class=\"mx-3 mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Marques</label>
                            <ul class=\"list-unstyled\">

                                {% for keyBrand, valueBrand in brandsList %}
                                    <li class=\"mt-1\">
                                        <a href=\"{{current_url}}?search=yes&brand={{keyBrand}} \" title=\" {{ valueBrand }} \" class=\"text-uppercase w-100 btn btn-outline-secondary {{ (keyBrand == selectedBrand) ? 'active' : '' }}\">{{ valueBrand }}</a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"mx-3 mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Tailles (US)</label>
                            <div class=\"row no-gutters\">
                                {% for keySize, valueSize in sizesList %}
                                    <div class=\"col-lg-3 col-md-6 mb-1\">
                                        <a href=\"{{current_url}}?search=yes&brand={{selectedBrand}}&size={{valueSize}}\" title=\" {{ valueSize }} \" class=\" btn btn-outline-secondary btn-size {{ (valueSize == selectedSize) ? 'active' : '' }}\">{{ valueSize }}</a>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"mx-3  mt-2\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Couleurs</label>
                            <div class=\"row no-gutters\">
                                {% for keyColor, valueColor in colors %}
                                    <div class=\"col-lg-3 col-md-6 mb-1\">
                                        <a href=\"{{current_url}}?search=yes&brand={{selectedBrand}}&size={{selectedSize}}&color={{keyColor}}\" title=\" {{ keyColor }} \" class=\"btn border btn-outline-secondary border-dark rounded-0 btn-color {{ (keyColor is same as(selectedColor)) ? 'focus' : '' }}\" style=\"{{ valueColor }}\"></a>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"mx-3\">
                            <label for=\"size\" class=\"text-uppercase font-weight-bold\">Prix</label>
                            <ul class=\"row list-unstyled\">
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"{{current_url}}?search=yes&brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemax=500\" title=\" Moins de 500€\" class=\"w-100 btn btn-outline-secondary {{ (selectedMaxPrice == '500') ? 'active' : '' }}\">Moins de 500€</a>
                                </li>
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"{{current_url}}?search=yes&brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin=500&pricemax=1000\" title=\"500€ à 1000€\" class=\"w-100 btn btn-outline-secondary {{ (selectedMaxPrice == '1000') ? 'active' : '' }}\">500€ à 1000€</a>
                                </li>
                                <li class=\"mx-3 mt-2 w-100\">
                                    <a href=\"{{current_url}}?search=yes&brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin=1000\" title=\"Plus de 1000€\" class=\"w-100 btn btn-outline-secondary {{ (selectedMinPrice == '1000') ? 'active' : '' }}\">Plus de 1000€</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"mx-3\">
                            <div class=\"row no-gutters text-center\">
                                <select onchange=\"if(this.selectedIndex!=0) self.location=this.options[this.selectedIndex].value\" class=\"border-secondary form-control text-center\">

                                    <option value=\"0\" selected>--Trier par--</option>
                                    <option value=\"{{current_url}}?search=yes&brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin={{selectedMinPrice}}&pricemax={{selectedMaxPrice}}&orderdir=asc\">Prix croissant</option>
                                    <option value=\"{{current_url}}?search=yes&brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin={{selectedMinPrice}}&pricemax={{selectedMaxPrice}}&orderdir=desc\">Prix décroissant</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"row no-gutters\">
                            <div class=\"mx-auto mt-2 mb-3 justify-content-center\">
                                <a href=\"{{current_url}}\" title=\"Reinitialiser\" class=\"text-uppercase w-100 btn btn-outline-secondary\">
                                    <i class=\"far fa-times-circle\"></i>
                                    Reinitialiser</a>

                            </div>
                        </div>

                    </form>
                </aside>

                <div class=\"col-md-9\">
                    <div class=\"row no-gutters\">


                        {% if products is not empty %}
                            {% for product in products %}
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"card bg-light m-1 border-0\">
                                        <div class=\"card-body\">
                                            <p class=\"card-text text-uppercase\">{{ brandsList[product.getBrand()] }}</p>
                                            <p class=\"card-text text-capitalize\">{{ product.getModel()|slice(0,35) ~ ' ...'  }}</p>
                                            <p class=\"card-text font-weight-bold \">{{ product.getPrice() }}
                                                €</p>
                                            <img src=\"{{ '/'~ product.getPicture1() }}\" class=\"card-img-top mb-2\" alt=\"photo du produit\">
                                            <a href=\"{{path('view_details',{id:product.getId()})}}\" class=\"btn btn-outline-dark btn-block btn-sm text-uppercase\">Voir plus</a>
                                            <form method=\"post\">
                                                <input type=\"hidden\" name=\"id_product\" value=\"{{ product.getId() }}\">
                                                <input type=\"hidden\" name=\"action\" value=\"add-to-cart\">
                                                <button type=\"submit\" class=\"add-product btn btn-outline-dark btn-block btn-sm text-uppercase font-weight-bold w-100\"><img src=\"/img/icons/buy.png\" class=\"p-1\" alt=\"logo buy\">


                                                    Ajouter au panier</button>
                                            </form>
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
                    </div>
                </div>

                <div class=\"navigation\">
                    {{ knp_pagination_render(products) }}
                </div>
            </div>
        </main>
    {% endblock %}
", "products/show.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\products\\show.html.twig");
    }
}
