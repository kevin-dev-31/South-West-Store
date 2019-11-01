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

/* orders/cart_detail.html.twig */
class __TwigTemplate_225d22ce054c3891e07c5121a62fb14d561a053f2e0f4d3476f40006e61d9cc3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/cart_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/cart_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orders/cart_detail.html.twig", 1);
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
    <main id=\"cart_details\">
        <div class=\"container\">

            ";
        // line 8
        if ((isset($context["success"]) || array_key_exists("success", $context))) {
            // line 9
            echo "                <p class=\"alert alert-success col-md-8\">";
            echo twig_escape_filter($this->env, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "
                    <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_orders");
            echo "\">Commandes</a>
                ";
        }
        // line 12
        echo "
                ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 14
            echo "                    <p class=\"alert alert-danger col-md-8\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "</p>
                ";
        }
        // line 16
        echo "
                <div class=\"table-responsive\">

                    <table class=\"table\">
                        <thead>
                            <tr class=\"table-secondary\">
                                <th>Marque</th>
                                <th>Modèle</th>
                                <th>SKU</th>
                                <th>Taille</th>
                                <th>Prix Unitaire</th>
                                <th>Voir plus</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["cart_item"]) {
            // line 33
            echo "                                <tr>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["cart_item"], "brand", [], "any", false, false, false, 34), [], "array", false, false, false, 34), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "model", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "sku", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "shoe_size", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "price", [], "any", false, false, false, 38), 2, ",", " "), "html", null, true);
            echo "
                                        €</td>

                                    <td>
                                        <a class=\"btn btn-secondary\" href=\"#\">Détails</a>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_cart_product", ["key" => $context["key"]]), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet article?')\" class=\"btn btn-danger\">Supprimer</a>


                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cart_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </tbody>
                        <tfoot>
                            <tr class=\"table-secondary\">
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Prix total :</th>
                                <td>
                                    ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "session", [], "any", false, false, false, 59), "get", [0 => "total_price"], "method", false, false, false, 59), 2, ",", " "), "html", null, true);
        echo "
                                    €</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </tr>
                </tfoot>
            </table>
        </div>

        <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clean_cart");
        echo "\" onclick=\"return confirm('Etes vous sur de vouloir vider le panier?')\" class=\"btn btn-danger\">Vider le panier</a>

        <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validate_order");
        echo "\" onclick=\"return confirm('Etes vous sur de vouloir valider la commande?')\" class=\"btn btn-primary\">Valider la commande</a>


    </div>
</main>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orders/cart_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 72,  184 => 70,  170 => 59,  160 => 51,  148 => 45,  138 => 38,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  119 => 33,  115 => 32,  97 => 16,  91 => 14,  89 => 13,  86 => 12,  81 => 10,  76 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <main id=\"cart_details\">
        <div class=\"container\">

            {% if success is defined %}
                <p class=\"alert alert-success col-md-8\">{{success}}
                    <a href=\"{{ path('user_orders') }}\">Commandes</a>
                {% endif %}

                {% if error is defined %}
                    <p class=\"alert alert-danger col-md-8\">{{error}}</p>
                {% endif %}

                <div class=\"table-responsive\">

                    <table class=\"table\">
                        <thead>
                            <tr class=\"table-secondary\">
                                <th>Marque</th>
                                <th>Modèle</th>
                                <th>SKU</th>
                                <th>Taille</th>
                                <th>Prix Unitaire</th>
                                <th>Voir plus</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for key, cart_item in cart_items %}
                                <tr>
                                    <td>{{ brandsList[cart_item.brand] }}</td>
                                    <td>{{ cart_item.model }}</td>
                                    <td>{{ cart_item.sku }}</td>
                                    <td>{{ cart_item.shoe_size }}</td>
                                    <td>{{ cart_item.price|number_format(2, ',', ' ') }}
                                        €</td>

                                    <td>
                                        <a class=\"btn btn-secondary\" href=\"#\">Détails</a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('delete_cart_product' ,{key : key }) }}\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet article?')\" class=\"btn btn-danger\">Supprimer</a>


                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot>
                            <tr class=\"table-secondary\">
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Prix total :</th>
                                <td>
                                    {{ app.session.get('total_price')|number_format(2, ',', ' ') }}
                                    €</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </tr>
                </tfoot>
            </table>
        </div>

        <a href=\"{{ path ('clean_cart') }}\" onclick=\"return confirm('Etes vous sur de vouloir vider le panier?')\" class=\"btn btn-danger\">Vider le panier</a>

        <a href=\"{{ path ('validate_order') }}\" onclick=\"return confirm('Etes vous sur de vouloir valider la commande?')\" class=\"btn btn-primary\">Valider la commande</a>


    </div>
</main>{% endblock %}
", "orders/cart_detail.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\orders\\cart_detail.html.twig");
    }
}
