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

/* orders/buy.html.twig */
class __TwigTemplate_dc29682eb661dfb323b3451c44ad6b27ac4fb2990bb246a39d75a8b4e75f1714 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/buy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/buy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orders/buy.html.twig", 1);
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

        echo "Validation d'achat
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

    <main id=\"buy-cart\" class=\"container\">
        <h2>Récapitulatif de commande</h2>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        <div class=\"table-responsive\">

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>SKU</th>
                        <th>Taille</th>
                        <th>Prix Unitaire</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["cart_item"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 33, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["cart_item"], "brand", [], "any", false, false, false, 33), [], "array", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "model", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "sku", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "shoe_size", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "price", [], "any", false, false, false, 37), 2, ",", " "), "html", null, true);
            echo "
                                €</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cart_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th>Prix total :</th>
                        <td>
                            ";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [0 => "total_price"], "method", false, false, false, 49), 2, ",", " "), "html", null, true);
        echo "
                            €</td>
                    </tr>
                </tfoot>
            </table>
        </div>


        <h2>Informations de livraison</h2>


        <div class=\"col-md-4\">
            <p>
                <strong>Email:
                </strong>
                ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "getEmail", [], "method", false, false, false, 64), "html", null, true);
        echo "
            </p>
            <p>
                <strong>Nom :
                </strong>
                ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "getLastName", [], "method", false, false, false, 69), "html", null, true);
        echo "
            </p>
            <p>
                <strong>Prénom :
                </strong>
                ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "getFirstName", [], "method", false, false, false, 74), "html", null, true);
        echo "
            </p>
            <p>
                <strong>Adresse :
                </strong>
                ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "getAddress", [], "method", false, false, false, 79), "html", null, true);
        echo "
            </p>
            <p>
                <strong>Complément d'adresse :
                </strong>
                ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "getAdditionalAddress", [], "method", false, false, false, 84), "html", null, true);
        echo "
            </p>
            <p>
                <strong>Code Postal :</strong>
                ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "getPostalCode", [], "method", false, false, false, 88), "html", null, true);
        echo "
            </p>
            <p>
                <strong>Ville :</strong>
                ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "getCity", [], "method", false, false, false, 92), "html", null, true);
        echo "
            </p>
            <p>
                <strong>Téléphone :</strong>
                ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "getPhoneNumber", [], "method", false, false, false, 96), "html", null, true);
        echo "
            </p>

            <div class=\"text-center\">
                <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit_profile");
        echo "\" class=\"btn btn-lg btn-secondary\" type=\"submit\">Modifier</a>

                <a id=\"valid-order\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_cart");
        echo "\" class=\"btn btn-lg btn-primary\">Valider</a>

            </div>

        </div>

    </main>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "    <script>


        \$(\"#valid-order\").click(function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Etes-vous sur(e) de vouloir valider votre commande?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui !',
                cancelButtonText: 'Non !'
            }).then((result) => {
                if (result.value) {
                    \$.get('";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_cart");
        echo "', function (res) {

                        Swal.fire('Validé', 'La commande à été validée', 'success').then((result) => {
                            window.location.assign('";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_orders");
        echo "');
                        });
                    });
                };
            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orders/buy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 133,  303 => 130,  285 => 114,  275 => 113,  255 => 102,  250 => 100,  243 => 96,  236 => 92,  229 => 88,  222 => 84,  214 => 79,  206 => 74,  198 => 69,  190 => 64,  172 => 49,  162 => 41,  152 => 37,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  133 => 32,  129 => 31,  113 => 17,  104 => 14,  101 => 13,  97 => 12,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Validation d'achat
{% endblock %}

{% block body %}


    <main id=\"buy-cart\" class=\"container\">
        <h2>Récapitulatif de commande</h2>

        {% for error in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ error }}
            </div>
        {% endfor %}

        <div class=\"table-responsive\">

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>SKU</th>
                        <th>Taille</th>
                        <th>Prix Unitaire</th>
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
                        </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th>Prix total :</th>
                        <td>
                            {{ app.session.get('total_price')|number_format(2, ',', ' ') }}
                            €</td>
                    </tr>
                </tfoot>
            </table>
        </div>


        <h2>Informations de livraison</h2>


        <div class=\"col-md-4\">
            <p>
                <strong>Email:
                </strong>
                {{ user.getEmail() }}
            </p>
            <p>
                <strong>Nom :
                </strong>
                {{ user.getLastName() }}
            </p>
            <p>
                <strong>Prénom :
                </strong>
                {{ user.getFirstName() }}
            </p>
            <p>
                <strong>Adresse :
                </strong>
                {{ user.getAddress() }}
            </p>
            <p>
                <strong>Complément d'adresse :
                </strong>
                {{ user.getAdditionalAddress() }}
            </p>
            <p>
                <strong>Code Postal :</strong>
                {{ user.getPostalCode() }}
            </p>
            <p>
                <strong>Ville :</strong>
                {{ user.getCity() }}
            </p>
            <p>
                <strong>Téléphone :</strong>
                {{ user.getPhoneNumber() }}
            </p>

            <div class=\"text-center\">
                <a href=\"{{ path ('user_edit_profile') }}\" class=\"btn btn-lg btn-secondary\" type=\"submit\">Modifier</a>

                <a id=\"valid-order\" href=\"{{ path ('buy_cart') }}\" class=\"btn btn-lg btn-primary\">Valider</a>

            </div>

        </div>

    </main>


{% endblock %}

{% block javascripts %}
    <script>


        \$(\"#valid-order\").click(function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Etes-vous sur(e) de vouloir valider votre commande?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui !',
                cancelButtonText: 'Non !'
            }).then((result) => {
                if (result.value) {
                    \$.get('{{ path ('buy_cart') }}', function (res) {

                        Swal.fire('Validé', 'La commande à été validée', 'success').then((result) => {
                            window.location.assign('{{ path ('user_orders') }}');
                        });
                    });
                };
            });

        });
    </script>
{% endblock %}
", "orders/buy.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\orders\\buy.html.twig");
    }
}
