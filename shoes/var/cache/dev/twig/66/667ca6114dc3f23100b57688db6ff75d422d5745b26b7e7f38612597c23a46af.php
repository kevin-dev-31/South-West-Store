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

/* user/index.html.twig */
class __TwigTemplate_8208970dfe8addf5b82748c56c0118e29563721a0987e4e1b3b9d4bcd623e9fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "Mon profil
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
    <main id=\"user_home\" class=\"container\">

        <h2>Bonjour
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "getFirstName", [], "method", false, false, false, 11), "html", null, true);
        echo "
            !</h2>

        <h4>Informations personnelles</h>

        <div class=\"table-responsive-sm\">
            <table class=\"table-striped\">
                <tr>
                    <th>Email:</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "getEmail", [], "method", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom :</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "getLastName", [], "method", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Prénom :
                    </th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "getFirstName", [], "method", false, false, false, 29), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Adresse :</th>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "getAddress", [], "method", false, false, false, 33), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Complément d'adresse :</th>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "getAdditionalAddress", [], "method", false, false, false, 37), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Code Postal :</th>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "getPostalCode", [], "method", false, false, false, 41), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Ville :</th>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "getCity", [], "method", false, false, false, 45), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Téléphone :</th>
                    <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "getPhoneNumber", [], "method", false, false, false, 49), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>

        <p>
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit_profile");
        echo "\" class=\"modify\">Modifier mes infos</a>

            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgotten_password");
        echo "\" class=\"modify\">Modifier mon mot de passe</a>
        </p>

        <p class=\"pt-3\">
            <a id=\"delete-profile\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_profile", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "getId", [], "method", false, false, false, 61)]), "html", null, true);
        echo "\" class=\"delete\">Supprimer mon compte</a>
        </p>

    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    <script>

        \$(\"#delete-profile\").click(function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Etes-vous sur(e) de vouloir supprimer votre compte?',
                text: \"Vos données seront à jamais perdues\",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui !',
                cancelButtonText: 'Non !'
            }).then((result) => {
                if (result.value) {
                    \$.get('";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_profile", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "getId", [], "method", false, false, false, 84)]), "html", null, true);
        echo "', function (res) {
                        Swal.fire('Supprimé', 'Profil supprimé', 'success').then((result) => {
                            window.location.assign('";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
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
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 86,  222 => 84,  204 => 68,  194 => 67,  179 => 61,  172 => 57,  167 => 55,  158 => 49,  151 => 45,  144 => 41,  137 => 37,  130 => 33,  123 => 29,  115 => 24,  108 => 20,  96 => 11,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil
{% endblock %}

{% block body %}

    <main id=\"user_home\" class=\"container\">

        <h2>Bonjour
            {{ user.getFirstName() }}
            !</h2>

        <h4>Informations personnelles</h>

        <div class=\"table-responsive-sm\">
            <table class=\"table-striped\">
                <tr>
                    <th>Email:</th>
                    <td>{{ user.getEmail() }}</td>
                </tr>
                <tr>
                    <th>Nom :</th>
                    <td>{{ user.getLastName() }}</td>
                </tr>
                <tr>
                    <th>Prénom :
                    </th>
                    <td>{{ user.getFirstName() }}</td>
                </tr>
                <tr>
                    <th>Adresse :</th>
                    <td>{{ user.getAddress() }}</td>
                </tr>
                <tr>
                    <th>Complément d'adresse :</th>
                    <td>{{ user.getAdditionalAddress() }}</td>
                </tr>
                <tr>
                    <th>Code Postal :</th>
                    <td>{{ user.getPostalCode() }}</td>
                </tr>
                <tr>
                    <th>Ville :</th>
                    <td>{{ user.getCity() }}</td>
                </tr>
                <tr>
                    <th>Téléphone :</th>
                    <td>{{ user.getPhoneNumber() }}</td>
                </tr>
            </table>
        </div>

        <p>
            <a href=\"{{ path('user_edit_profile') }}\" class=\"modify\">Modifier mes infos</a>

            <a href=\"{{ path('app_forgotten_password') }}\" class=\"modify\">Modifier mon mot de passe</a>
        </p>

        <p class=\"pt-3\">
            <a id=\"delete-profile\" href=\"{{ path('delete_profile' ,{id : user.getId() }) }}\" class=\"delete\">Supprimer mon compte</a>
        </p>

    </main>
{% endblock %}

{% block javascripts %}
    <script>

        \$(\"#delete-profile\").click(function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Etes-vous sur(e) de vouloir supprimer votre compte?',
                text: \"Vos données seront à jamais perdues\",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui !',
                cancelButtonText: 'Non !'
            }).then((result) => {
                if (result.value) {
                    \$.get('{{ path('delete_profile' ,{id : user.getId() }) }}', function (res) {
                        Swal.fire('Supprimé', 'Profil supprimé', 'success').then((result) => {
                            window.location.assign('{{ path ('homepage') }}');
                        });
                    });
                };
            });
        });
    </script>
{% endblock %}
", "user/index.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\user\\index.html.twig");
    }
}
