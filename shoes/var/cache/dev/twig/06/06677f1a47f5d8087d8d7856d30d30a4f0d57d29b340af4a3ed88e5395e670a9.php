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

/* products/add_products.html.twig */
class __TwigTemplate_92690e41fb0c0ee80899de6d3be370f676a359b079a560e4f50dd2d76e935516 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/add_products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/add_products.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/add_products.html.twig", 1);
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

        echo "Ajouter un article
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
        echo "    <main id=\"add_product\" class=\"container\">

        <h2 class=\"text-center mt-5 mb-4\">Ajouter une paire</h2>

        ";
        // line 11
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "            <div class=\"alert alert-danger\">";
            echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 12, $this->source); })());
            echo "</div>
        ";
        } elseif ((        // line 13
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 13, $this->source); })()) == true)) {
            // line 14
            echo "            <div class=\"alert alert-success\">Votre article a bien été envoyé</div>
        ";
        }
        // line 16
        echo "
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">

                <form method=\"post\" enctype=\"multipart/form-data\">

                    <div class=\"form-group\">
                        <label for=\"brand\" class=\"col-md-2 col-form-label\">Marque</label>
                        <select name=\"brand\" id=\"brand\" class=\"form-control\">
                            <option selected>-- Sélectionnez une marque --</option>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["brand"]) {
            // line 27
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (((isset($context["brandValue"]) || array_key_exists("brandValue", $context) ? $context["brandValue"] : (function () { throw new RuntimeError('Variable "brandValue" does not exist.', 27, $this->source); })()) == $context["key"])) {
                echo " ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["brand"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo ";
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"model\" class=\"col-md-2 col-form-label\">Modèle</label>
                        <input type=\"text\" name=\"model\" id=\"model\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["modelValue"]) || array_key_exists("modelValue", $context) ? $context["modelValue"] : (function () { throw new RuntimeError('Variable "modelValue" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sku\" class=\"col-md-2 col-form-label\">SKU</label>
                        <input type=\"text\" name=\"sku\" id=\"sku\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["skuValue"]) || array_key_exists("skuValue", $context) ? $context["skuValue"] : (function () { throw new RuntimeError('Variable "skuValue" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"size\" class=\"col-md-2 col-form-label\">Taille</label>
                        <select name=\"size\" id=\"size\" class=\"form-control\">
                            <option selected>-- Sélectionnez votre taille --</option>
                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            // line 47
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "\" ";
            if (((isset($context["sizeValue"]) || array_key_exists("sizeValue", $context) ? $context["sizeValue"] : (function () { throw new RuntimeError('Variable "sizeValue" does not exist.', 47, $this->source); })()) == $context["key"])) {
                echo " ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo ";
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"color\" class=\"col-md-2 col-form-label\">Couleur</label>
                        <select name=\"color\" id=\"color\" class=\"form-control\">
                            <option selected>-- Sélectionnez la couleur --</option>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["color"]) {
            // line 57
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (((isset($context["colorValue"]) || array_key_exists("colorValue", $context) ? $context["colorValue"] : (function () { throw new RuntimeError('Variable "colorValue" does not exist.', 57, $this->source); })()) == $context["key"])) {
                echo " ";
            }
            echo " style=\"";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo ";
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"price\" class=\"col-md-2 col-form-label\">Prix</label>
                        <input type=\"text\" name=\"price\" id=\"price\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["priceValue"]) || array_key_exists("priceValue", $context) ? $context["priceValue"] : (function () { throw new RuntimeError('Variable "priceValue" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-md-3\" for=\"picture1\">Photo 1 :</label>
                        <input class=\"col-md-9\" type=\"file\" name=\"picture1\" id=\"picture1\" accept=\"image/*\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3\" for=\"picture2\">Photo 2 :</label>
                        <input class=\"col-md-9\" type=\"file\" name=\"picture2\" id=\"picture2\" accept=\"image/*\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3\" for=\"picture3\">Photo 3 :</label>
                        <input class=\"col-md-9\" type=\"file\" name=\"picture3\" id=\"picture3\" accept=\"image/*\">
                    </div>

                        <button type=\"submit\" class=\"btn btn-lg btn-primary\">Ajouter la paire</button>
                
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
        return "products/add_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 64,  215 => 58,  198 => 57,  194 => 56,  184 => 48,  169 => 47,  165 => 46,  155 => 39,  147 => 34,  139 => 28,  124 => 27,  120 => 26,  108 => 16,  104 => 14,  102 => 13,  97 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un article
{% endblock %}

{% block body %}
    <main id=\"add_product\" class=\"container\">

        <h2 class=\"text-center mt-5 mb-4\">Ajouter une paire</h2>

        {% if errors is not empty %}
            <div class=\"alert alert-danger\">{{errors|raw}}</div>
        {% elseif success == true %}
            <div class=\"alert alert-success\">Votre article a bien été envoyé</div>
        {% endif %}

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">

                <form method=\"post\" enctype=\"multipart/form-data\">

                    <div class=\"form-group\">
                        <label for=\"brand\" class=\"col-md-2 col-form-label\">Marque</label>
                        <select name=\"brand\" id=\"brand\" class=\"form-control\">
                            <option selected>-- Sélectionnez une marque --</option>
                            {% for key, brand in brands %}
                                <option value=\"{{key}}\" {% if brandValue == key %} {%endif%}>{{brand}}</option>
                            {% endfor %};
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"model\" class=\"col-md-2 col-form-label\">Modèle</label>
                        <input type=\"text\" name=\"model\" id=\"model\" class=\"form-control\" value=\"{{modelValue}}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sku\" class=\"col-md-2 col-form-label\">SKU</label>
                        <input type=\"text\" name=\"sku\" id=\"sku\" class=\"form-control\" value=\"{{skuValue}}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"size\" class=\"col-md-2 col-form-label\">Taille</label>
                        <select name=\"size\" id=\"size\" class=\"form-control\">
                            <option selected>-- Sélectionnez votre taille --</option>
                            {% for key, size in sizes %}
                                <option value=\"{{size}}\" {% if sizeValue == key %} {%endif%}>{{size}}</option>
                            {% endfor %};
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"color\" class=\"col-md-2 col-form-label\">Couleur</label>
                        <select name=\"color\" id=\"color\" class=\"form-control\">
                            <option selected>-- Sélectionnez la couleur --</option>
                            {% for key, color in colors %}
                                <option value=\"{{key}}\" {% if colorValue == key %} {%endif%} style=\"{{ color }}\">{{key}}</option>
                            {% endfor %};
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"price\" class=\"col-md-2 col-form-label\">Prix</label>
                        <input type=\"text\" name=\"price\" id=\"price\" class=\"form-control\" value=\"{{priceValue}}\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-md-3\" for=\"picture1\">Photo 1 :</label>
                        <input class=\"col-md-9\" type=\"file\" name=\"picture1\" id=\"picture1\" accept=\"image/*\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3\" for=\"picture2\">Photo 2 :</label>
                        <input class=\"col-md-9\" type=\"file\" name=\"picture2\" id=\"picture2\" accept=\"image/*\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3\" for=\"picture3\">Photo 3 :</label>
                        <input class=\"col-md-9\" type=\"file\" name=\"picture3\" id=\"picture3\" accept=\"image/*\">
                    </div>

                        <button type=\"submit\" class=\"btn btn-lg btn-primary\">Ajouter la paire</button>
                
                </form>
            </div>
        </div>

    </main>

{% endblock %}
", "products/add_products.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\products\\add_products.html.twig");
    }
}
