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
class __TwigTemplate_0d98ebd3e4a6f0bcabcaf8feb4f8f8e0c03aec6cacab802750f5246db9d1a0c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/cart_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/cart_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orders/cart_detail.html.twig", 1);
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

        echo "Panier
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <main id=\"cart_details\">
        <div class=\"container\">
            <h2>Mon panier</h2>


            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
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
                            <th>Voir plus</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["cart_item"]) {
            // line 37
            echo "                            <tr>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["cart_item"], "brand", [], "any", false, false, false, 38), [], "array", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "model", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "sku", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "shoe_size", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "price", [], "any", false, false, false, 42), 2, ",", " "), "html", null, true);
            echo "
                                    €</td>

                                <td>
                                    <a class=\"btn btn-secondary\" href=\" ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_details", ["id" => twig_get_attribute($this->env, $this->source, $context["cart_item"], "id_product", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Détails</a>
                                </td>

                                <td>
                                    <a id=\"#delete-cart-product\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_cart_product", ["key" => $context["key"]]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cart_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Prix total :</th>
                            <td>
                                ";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "get", [0 => "total_price"], "method", false, false, false, 62), 2, ",", " "), "html", null, true);
        echo "
                                €</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>


            <a id=\"clean-cart\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clean_cart");
        echo "\" class=\"btn clear\">Vider le panier</a>


            <a id=\"valid-order\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validate_order");
        echo "\" class=\"btn validate\">Valider la commande</a>


        </main>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "        <script>
            \$(\"#clean-cart\").click(function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Etes-vous sur(e) de vouloir vider le panier?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui !',
                    cancelButtonText: 'Non !'
                }).then((result) => {
                    if (result.value) {
                        \$.get('";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clean_cart");
        echo "', function (res) {
                            Swal.fire('Vide', 'Le panier à été vidé', 'success').then((result) => {
                                window.location.reload();
                            });
                        });
                    };
                });

            });

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
                        window.location.assign('";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validate_order");
        echo "');
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
        return "orders/cart_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 121,  252 => 98,  236 => 84,  226 => 83,  209 => 75,  203 => 72,  190 => 62,  180 => 54,  170 => 50,  163 => 46,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  137 => 37,  133 => 36,  114 => 19,  105 => 16,  102 => 15,  98 => 14,  90 => 8,  80 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier
{% endblock %}


{% block body %}

    <main id=\"cart_details\">
        <div class=\"container\">
            <h2>Mon panier</h2>


            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
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
                                    <a class=\"btn btn-secondary\" href=\" {{ path('view_details',{id:cart_item.id_product} ) }}\">Détails</a>
                                </td>

                                <td>
                                    <a id=\"#delete-cart-product\" href=\"{{ path('delete_cart_product' ,{key : key }) }}\" class=\"btn btn-danger\">Supprimer</a>
                                </td>
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
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>


            <a id=\"clean-cart\" href=\"{{ path ('clean_cart') }}\" class=\"btn clear\">Vider le panier</a>


            <a id=\"valid-order\" href=\"{{ path ('validate_order') }}\" class=\"btn validate\">Valider la commande</a>


        </main>


    {% endblock %}

    {% block javascripts %}
        <script>
            \$(\"#clean-cart\").click(function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Etes-vous sur(e) de vouloir vider le panier?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui !',
                    cancelButtonText: 'Non !'
                }).then((result) => {
                    if (result.value) {
                        \$.get('{{ path ('clean_cart') }}', function (res) {
                            Swal.fire('Vide', 'Le panier à été vidé', 'success').then((result) => {
                                window.location.reload();
                            });
                        });
                    };
                });

            });

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
                        window.location.assign('{{ path ('validate_order') }}');
                    };

                });

            });
        </script>
    {% endblock %}
", "orders/cart_detail.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\orders\\cart_detail.html.twig");
    }
}
