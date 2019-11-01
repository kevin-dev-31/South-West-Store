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

/* base.html.twig */
class __TwigTemplate_10b434e73ca82793871a28dc0717603fb8f004872297e1ac14c13ea38af294b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Emilys+Candy|Josefin+Sans|Shadows+Into+Light|Caveat|Love+Ya+Like+A+Sister|Rock+Salt&display=swap\" rel=\"stylesheet\"> 
        <link rel=\"stylesheet\" href=\"/css/styles.css\"> ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        </head>

        <body>

            <header>
                <div class=\"vid\">
                    <video width=\"100%\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"/img/home/shoes.mp4\" type=\"video/mp4\">
                    </video>
                </div>
                <div class=\"container h-100\">
                    <div class=\"d-flex h-100 text-center justify-content-around align-items-center\">
                     
                            <div class=\"col-md-2 col-sm-12\">
                                <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><img src=\"/img/South-West-Store-Logo.png\" alt=\"Logo South-West-Store\"></a>
                            </div>
                            <div class=\" col-md-8 align-self-center d-none d-md-inline-block\">
                                <h1>Bienvenue chez South-West-Store</h1>
                            </div>
                    </div>
                </div>
            </header>


            <nav id=\"navbar\" class=\"navbar\">
                <div class=\"left\">

                    <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_products");
        echo "\">Shop</a>

                    ";
        // line 42
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire</a>

                        <a class=\"nav-link\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>

                    ";
        } else {
            // line 48
            echo "
                        ";
            // line 49
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted($this->extensions['Symfony\Bridge\Twig\Extension\ExpressionExtension']->createExpression("\"ROLE_ADMIN\" in roles or (not is_anonymous() and not \"ROLE_USER\" in roles)"))) {
                // line 50
                echo "                            <div class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin</a>

                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item nav-link\" href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
                echo "\">Ajouter</a>

                                    <a class=\"dropdown-item nav-link\" href=\"";
                // line 56
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_product");
                echo "\">Modifier</a>

                                    <a class=\"dropdown-item nav-link\" href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
                echo "\">Commandes</a>

                                </div>
                            </div>

                        ";
            } else {
                // line 64
                echo "                            <div class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "firstName", [], "any", false, false, false, 65), "html", null, true);
                echo "</a>

                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item nav-link\" href=\"";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_session");
                echo "\">Profil</a>

                                    <a class=\"dropdown-item nav-link\" href=\"";
                // line 70
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_orders");
                echo "\">Commandes</a>
                                </div>
                            </div>

                        ";
            }
            // line 75
            echo "                    ";
        }
        // line 76
        echo "                </div>
                <div class=\"right\">
                    ";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 79
            echo "
                        <a class=\"nav-link\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>

                    ";
        }
        // line 83
        echo "

                    <a class=\"nav-link\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_details");
        echo "\">Panier (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "session", [], "any", false, false, false, 85), "get", [0 => "cart"], "method", false, false, false, 85)), "html", null, true);
        echo ")</a>

                </div>


            </nav>

            ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "
            <footer>
                <p class=\"text-center\">&copy; Copyright 2019 - South-West-Store - Ne pas reproduire |
                    <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions légales</a>
                    |
                    <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgv");
        echo "\">CGV</a>
                    |
                    <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
                </p>

            </footer>
            <!-- Jquery -->
            <script src=\"https://code.jquery.com/jquery-3.4.1.js\" integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\" crossorigin=\"anonymous\"></script>
            <!-- Bootstrap-->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <!-- Mon script-->
            <script src=\"public/js/script.js\"></script>

            ";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "
        </body>
    </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Shoes Wall
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 112,  286 => 92,  268 => 12,  248 => 6,  235 => 113,  233 => 112,  218 => 100,  213 => 98,  208 => 96,  203 => 93,  201 => 92,  189 => 85,  185 => 83,  179 => 80,  176 => 79,  174 => 78,  170 => 76,  167 => 75,  159 => 70,  154 => 68,  148 => 65,  145 => 64,  136 => 58,  131 => 56,  126 => 54,  120 => 50,  118 => 49,  115 => 48,  109 => 45,  103 => 43,  101 => 42,  96 => 40,  80 => 27,  64 => 13,  62 => 12,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            {% block title %}Shoes Wall
            {% endblock %}
        </title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Emilys+Candy|Josefin+Sans|Shadows+Into+Light|Caveat|Love+Ya+Like+A+Sister|Rock+Salt&display=swap\" rel=\"stylesheet\"> 
        <link rel=\"stylesheet\" href=\"/css/styles.css\"> {% block stylesheets %}{% endblock %}
        </head>

        <body>

            <header>
                <div class=\"vid\">
                    <video width=\"100%\" autoplay=\"autoplay\" muted=\"muted\" loop=\"loop\">
                        <source src=\"/img/home/shoes.mp4\" type=\"video/mp4\">
                    </video>
                </div>
                <div class=\"container h-100\">
                    <div class=\"d-flex h-100 text-center justify-content-around align-items-center\">
                     
                            <div class=\"col-md-2 col-sm-12\">
                                <a class=\"nav-link\" href=\"{{ path ('homepage') }}\"><img src=\"/img/South-West-Store-Logo.png\" alt=\"Logo South-West-Store\"></a>
                            </div>
                            <div class=\" col-md-8 align-self-center d-none d-md-inline-block\">
                                <h1>Bienvenue chez South-West-Store</h1>
                            </div>
                    </div>
                </div>
            </header>


            <nav id=\"navbar\" class=\"navbar\">
                <div class=\"left\">

                    <a class=\"nav-link\" href=\"{{ path ('show_products') }}\">Shop</a>

                    {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <a class=\"nav-link\" href=\"{{ path('app_register') }}\">S'inscrire</a>

                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>

                    {% else %}

                        {% if is_granted(expression('\"ROLE_ADMIN\" in roles or (not is_anonymous() and not \"ROLE_USER\" in roles)')) %}
                            <div class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin</a>

                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item nav-link\" href=\"{{ path('add_product') }}\">Ajouter</a>

                                    <a class=\"dropdown-item nav-link\" href=\"{{ path('modify_product') }}\">Modifier</a>

                                    <a class=\"dropdown-item nav-link\" href=\"{{ path('admin_orders') }}\">Commandes</a>

                                </div>
                            </div>

                        {% else %}
                            <div class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.user.firstName }}</a>

                                <div class=\"dropdown-menu\">
                                    <a class=\"dropdown-item nav-link\" href=\"{{ path('user_session') }}\">Profil</a>

                                    <a class=\"dropdown-item nav-link\" href=\"{{ path('user_orders') }}\">Commandes</a>
                                </div>
                            </div>

                        {% endif %}
                    {% endif %}
                </div>
                <div class=\"right\">
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}

                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>

                    {% endif %}


                    <a class=\"nav-link\" href=\"{{path('cart_details')}}\">Panier ({{app.session.get('cart')|length}})</a>

                </div>


            </nav>

            {% block body %}{% endblock %}

            <footer>
                <p class=\"text-center\">&copy; Copyright 2019 - South-West-Store - Ne pas reproduire |
                    <a href=\"{{ path('mentions') }}\">Mentions légales</a>
                    |
                    <a href=\"{{ path('cgv') }}\">CGV</a>
                    |
                    <a href=\"{{ path('contact') }}\">Nous contacter</a>
                </p>

            </footer>
            <!-- Jquery -->
            <script src=\"https://code.jquery.com/jquery-3.4.1.js\" integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\" crossorigin=\"anonymous\"></script>
            <!-- Bootstrap-->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <!-- Mon script-->
            <script src=\"public/js/script.js\"></script>

            {% block javascripts %}{% endblock %}

        </body>
    </html>
", "base.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\base.html.twig");
    }
}
