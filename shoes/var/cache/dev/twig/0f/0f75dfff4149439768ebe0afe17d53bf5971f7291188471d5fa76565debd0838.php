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

/* products/search.html.twig */
class __TwigTemplate_c6d47d7b93428758814768a9e8ee7ed65b3e9f8a4c262ed1e883bec7f45a2bc9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/search.html.twig", 1);
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
        echo "
    ";
        // line 5
        if ( !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "        <div class=\"alert alert-danger\">";
            echo (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })());
            echo "</div>
    ";
        }
        // line 8
        echo "    <main id=\"search_products\">
        <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" method=\"get\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["keyBrand"] => $context["valueBrand"]) {
            // line 11
            echo "                <ul>
                    <li class=\"text-decoration-none\">
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, $context["keyBrand"], "html", null, true);
            echo " \" title=\" ";
            echo twig_escape_filter($this->env, $context["valueBrand"], "html", null, true);
            echo " \" class=\" btn btn-secondary\">";
            echo twig_escape_filter($this->env, $context["valueBrand"], "html", null, true);
            echo "</a>
                    </li>
                </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keyBrand'], $context['valueBrand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            <ul class=\"row\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["keySize"] => $context["valueSize"]) {
            // line 19
            echo "                    <li class=\"col-4 text-decoration-none\">
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "&size=";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo "\" title=\" ";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo " \" class=\" btn btn-secondary\">";
            echo twig_escape_filter($this->env, $context["valueSize"], "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keySize'], $context['valueSize'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </ul>
            <ul class=\"row\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["keyColor"] => $context["valueColor"]) {
            // line 26
            echo "                    <li class=\"col-3 text-decoration-none\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "&size=";
            echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "&color=";
            echo twig_escape_filter($this->env, $context["keyColor"], "html", null, true);
            echo "\" title=\" ";
            echo twig_escape_filter($this->env, $context["valueColor"], "html", null, true);
            echo " \" class=\" btn btn-secondary\" style=\"";
            echo twig_escape_filter($this->env, $context["valueColor"], "html", null, true);
            echo "\"></a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keyColor'], $context['valueColor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
            <ul>
                <li><ahref=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "?brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "&pricemax=500\" title=\"\" class=\" btn btn-secondary\">Moins de 500€</a></li>
                <li><ahref=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "?brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "&pricemin=500&pricemax=1000\" title=\"\" class=\" btn btn-secondary\">500€ à 1000€</a></li>
                <li><ahref=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "?brand=";
        echo twig_escape_filter($this->env, (isset($context["selectedBrand"]) || array_key_exists("selectedBrand", $context) ? $context["selectedBrand"] : (function () { throw new RuntimeError('Variable "selectedBrand" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "&size=";
        echo twig_escape_filter($this->env, (isset($context["selectedSize"]) || array_key_exists("selectedSize", $context) ? $context["selectedSize"] : (function () { throw new RuntimeError('Variable "selectedSize" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "&color=";
        echo twig_escape_filter($this->env, (isset($context["selectedColor"]) || array_key_exists("selectedColor", $context) ? $context["selectedColor"] : (function () { throw new RuntimeError('Variable "selectedColor" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "&pricemin=1000\" title=\"\" class=\" btn btn-secondary\">Plus de 1000€</a></li>
            </ul>


        </form>


        ";
        // line 41
        if ( !twig_test_empty((isset($context["searchResult"]) || array_key_exists("searchResult", $context) ? $context["searchResult"] : (function () { throw new RuntimeError('Variable "searchResult" does not exist.', 41, $this->source); })()))) {
            // line 42
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["searchResult"]) || array_key_exists("searchResult", $context) ? $context["searchResult"] : (function () { throw new RuntimeError('Variable "searchResult" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["pKey"] => $context["pValue"]) {
                // line 43
                echo "                <h4 style=\"color:red\">
                    ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pValue"], "getId", [], "method", false, false, false, 44), "html", null, true);
                echo "
                    ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pValue"], "getModel", [], "method", false, false, false, 45), "html", null, true);
                echo "
                    ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pValue"], "getPrice", [], "method", false, false, false, 46), "html", null, true);
                echo "
                    ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pValue"], "getColor", [], "method", false, false, false, 47), "html", null, true);
                echo "
                    ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pValue"], "getShoeSize", [], "method", false, false, false, 48), "html", null, true);
                echo "
                </h4>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pKey'], $context['pValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        }
        // line 52
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 52,  242 => 51,  233 => 48,  229 => 47,  225 => 46,  221 => 45,  217 => 44,  214 => 43,  209 => 42,  207 => 41,  191 => 34,  181 => 33,  171 => 32,  167 => 30,  148 => 27,  145 => 26,  141 => 25,  137 => 23,  120 => 20,  117 => 19,  113 => 18,  110 => 17,  94 => 13,  90 => 11,  86 => 10,  82 => 9,  79 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% if error is not empty %}
        <div class=\"alert alert-danger\">{{error|raw}}</div>
    {% endif %}
    <main id=\"search_products\">
        <form action=\"{{ current_url }}\" method=\"get\">
            {% for keyBrand, valueBrand in brands %}
                <ul>
                    <li class=\"text-decoration-none\">
                        <a href=\"{{current_url}}?brand={{keyBrand}} \" title=\" {{ valueBrand }} \" class=\" btn btn-secondary\">{{ valueBrand }}</a>
                    </li>
                </ul>
            {% endfor %}
            <ul class=\"row\">
                {% for keySize, valueSize in sizes %}
                    <li class=\"col-4 text-decoration-none\">
                        <a href=\"{{current_url}}?brand={{selectedBrand}}&size={{valueSize}}\" title=\" {{ valueSize }} \" class=\" btn btn-secondary\">{{ valueSize }}</a>
                    </li>
                {% endfor %}
            </ul>
            <ul class=\"row\">
                {% for keyColor, valueColor in colors %}
                    <li class=\"col-3 text-decoration-none\">
                        <a href=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{keyColor}}\" title=\" {{ valueColor }} \" class=\" btn btn-secondary\" style=\"{{ valueColor }}\"></a>
                    </li>
                {% endfor %}
            </ul>
            <ul>
                <li><ahref=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemax=500\" title=\"\" class=\" btn btn-secondary\">Moins de 500€</a></li>
                <li><ahref=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin=500&pricemax=1000\" title=\"\" class=\" btn btn-secondary\">500€ à 1000€</a></li>
                <li><ahref=\"{{current_url}}?brand={{selectedBrand}}&size={{selectedSize}}&color={{selectedColor}}&pricemin=1000\" title=\"\" class=\" btn btn-secondary\">Plus de 1000€</a></li>
            </ul>


        </form>


        {% if searchResult is not empty %}
            {% for pKey, pValue in searchResult %}
                <h4 style=\"color:red\">
                    {{ pValue.getId() }}
                    {{ pValue.getModel() }}
                    {{ pValue.getPrice() }}
                    {{ pValue.getColor() }}
                    {{ pValue.getShoeSize() }}
                </h4>
            {% endfor %}
        {% endif %}


    {% endblock %}
", "products/search.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\products\\search.html.twig");
    }
}
