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

/* products/modify.html.twig */
class __TwigTemplate_9a75215caa91fa792f00d577337a5547689effb4a731d072ea60a08e6721ebb0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/modify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/modify.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/modify.html.twig", 1);
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
    <main id=\"edit_product\">


        <div class=\"container\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Marque</th>
                        <th>SKU</th>
                        <th>Modèle</th>
                        <th>Couleurs</th>
                        <th>Taille</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "                        <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 23, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "getBrand", [], "method", false, false, false, 23), [], "array", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getSku", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getModel", [], "method", false, false, false, 25), 0, 15) . "..."), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getColor", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sizesList"]) || array_key_exists("sizesList", $context) ? $context["sizesList"] : (function () { throw new RuntimeError('Variable "sizesList" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "getShoeSize", [], "method", false, false, false, 27), [], "array", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-success\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 29)]), "html", null, true);
            echo "\">
                                    Détails
                                </a>

                                <button type=\"button\" class=\"btn btn-secondary open-modal-edit\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 33), "html", null, true);
            echo "\">
                                    Modifier
                                </button>

                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_products", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 37)]), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sur de vouloir supprimer?')\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
            </table>
        </div>
    </main>


    <!-- Modal -->
    <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">          
                    <h5 class=\"modal-title\">Editer :</h5>            
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form>
                        <div class=\"form-group\">
                            <label for=\"brand\">Marque</label>
                            <select name=\"brand\" id=\"brand\" class=\"form-control\">
                                <option selected>-- Sélectionnez une marque --</option>
                                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["brand"]) {
            // line 64
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["brand"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo ";
                            </select>
                        </div>                        
                        <div class=\"form-group\">
                            <label for=\"model\">Model</label>
                            <input type=\"text\" class=\"form-control\" id=\"model\" name=\"model\">
                        </div>                         
                        <div class=\"form-group\">
                            <label for=\"sku\">Sku</label>
                            <input type=\"text\" class=\"form-control\" id=\"sku\" name=\"sku\">
                        </div> 
                        <div class=\"form-group\">
                            <label for=\"size\">Pointure</label>
                            <select name=\"size\" id=\"size\" class=\"form-control\">
                                <option value=\"0\" selected>-- Sélectionnez une taille --</option>
                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizesList"]) || array_key_exists("sizesList", $context) ? $context["sizesList"] : (function () { throw new RuntimeError('Variable "sizesList" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            // line 81
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo ";
                            </select>
                        </div>                         
                        <div class=\"form-group\">
                            <label for=\"color\">Couleurs</label>
                            <select name=\"color\" id=\"color\" class=\"form-control\">
                                <option  value=\"0\" selected>-- Sélectionnez la couleur --</option>
                                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["color"]) {
            // line 90
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 90, $this->source); })()) == $context["key"])) {
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
        // line 91
        echo ";
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"price\">Prix</label>
                            <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\">
                        </div>
                        <div>    
                            <input type=\"hidden\" name=\"id\" value=\"id\">
                        </div>  
                        <button class=\"btn btn-success\" type=\"submit\">Valider</button>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                </div>
            </div>
        </div>
    </div>
";
        
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

        // line 113
        echo "
<script>

\$('.open-modal-edit').click(function(e){
    e.preventDefault();
    \$('#edit').modal('show');
    var editId = \$(this).data('id');
    // affichage des info d'origine dans le form
    \$.post('";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_products_ajax");
        echo "', {id: editId}, function(retourJSON){
        \$('#edit form').find('[name=\"brand\"]').val(retourJSON.brand);
        \$('#edit form').find('[name=\"model\"]').val(retourJSON.model);
        \$('#edit form').find('[name=\"sku\"]').val(retourJSON.sku);
        \$('#edit form').find('[name=\"size\"]').val(retourJSON.size);
        \$('#edit form').find('[name=\"color\"]').val(retourJSON.color);
        \$('#edit form').find('[name=\"price\"]').val(retourJSON.price);
        \$('#edit form').find('[name=\"id\"]').val(retourJSON.id);
    });

});

\$('#edit form').submit(function(e){
    e.preventDefault();
    \$('#edit').modal('show');    
    var form = \$(this);

    
    // envoie des données au php
    \$.post('";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_validate");
        echo "', form.serialize(), function(response){
        if(response.status == 'ok'){
            alert(response.message);
            // redirection si changement ok
           window.location.href = \"/admin/modify-product\";
        }
        else {
            alert(response.message);
        }

    });

});

</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 140,  290 => 121,  280 => 113,  270 => 112,  241 => 91,  224 => 90,  220 => 89,  211 => 82,  200 => 81,  196 => 80,  179 => 65,  168 => 64,  164 => 63,  140 => 41,  130 => 37,  123 => 33,  116 => 29,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  92 => 22,  88 => 21,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <main id=\"edit_product\">


        <div class=\"container\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Marque</th>
                        <th>SKU</th>
                        <th>Modèle</th>
                        <th>Couleurs</th>
                        <th>Taille</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for product in products %}
                        <tr>
                            <td>{{ brandsList[product.getBrand()] }}</td>
                            <td>{{ product.getSku() }}</td>
                            <td>{{ product.getModel()|slice(0,15) ~ '...'  }}</td>
                            <td>{{ product.getColor() }}</td>
                            <td>{{ sizesList[product.getShoeSize()] }}</td>
                            <td>
                                <a class=\"btn btn-success\" href=\"{{path('view_details',{id:product.getId()})}}\">
                                    Détails
                                </a>

                                <button type=\"button\" class=\"btn btn-secondary open-modal-edit\" data-id=\"{{ product.getId() }}\">
                                    Modifier
                                </button>

                                <a href=\"{{ path ('delete_products',{id : product.getId()}) }}\" onclick=\"return confirm('Etes vous sur de vouloir supprimer?')\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </main>


    <!-- Modal -->
    <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">          
                    <h5 class=\"modal-title\">Editer :</h5>            
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form>
                        <div class=\"form-group\">
                            <label for=\"brand\">Marque</label>
                            <select name=\"brand\" id=\"brand\" class=\"form-control\">
                                <option selected>-- Sélectionnez une marque --</option>
                                {% for key, brand in brandsList %}
                                <option value=\"{{key}}\">{{brand}}</option>
                                {% endfor %};
                            </select>
                        </div>                        
                        <div class=\"form-group\">
                            <label for=\"model\">Model</label>
                            <input type=\"text\" class=\"form-control\" id=\"model\" name=\"model\">
                        </div>                         
                        <div class=\"form-group\">
                            <label for=\"sku\">Sku</label>
                            <input type=\"text\" class=\"form-control\" id=\"sku\" name=\"sku\">
                        </div> 
                        <div class=\"form-group\">
                            <label for=\"size\">Pointure</label>
                            <select name=\"size\" id=\"size\" class=\"form-control\">
                                <option value=\"0\" selected>-- Sélectionnez une taille --</option>
                                {% for key, size in sizesList %}
                                    <option value=\"{{key}}\">{{size}}</option>
                                {% endfor %};
                            </select>
                        </div>                         
                        <div class=\"form-group\">
                            <label for=\"color\">Couleurs</label>
                            <select name=\"color\" id=\"color\" class=\"form-control\">
                                <option  value=\"0\" selected>-- Sélectionnez la couleur --</option>
                                {% for key, color in colors %}
                                    <option value=\"{{key}}\" {% if colors == key %} {%endif%} style=\"{{ color }}\">{{key}}</option>
                                {% endfor %};
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"price\">Prix</label>
                            <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\">
                        </div>
                        <div>    
                            <input type=\"hidden\" name=\"id\" value=\"id\">
                        </div>  
                        <button class=\"btn btn-success\" type=\"submit\">Valider</button>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}

<script>

\$('.open-modal-edit').click(function(e){
    e.preventDefault();
    \$('#edit').modal('show');
    var editId = \$(this).data('id');
    // affichage des info d'origine dans le form
    \$.post('{{ path ('edit_products_ajax') }}', {id: editId}, function(retourJSON){
        \$('#edit form').find('[name=\"brand\"]').val(retourJSON.brand);
        \$('#edit form').find('[name=\"model\"]').val(retourJSON.model);
        \$('#edit form').find('[name=\"sku\"]').val(retourJSON.sku);
        \$('#edit form').find('[name=\"size\"]').val(retourJSON.size);
        \$('#edit form').find('[name=\"color\"]').val(retourJSON.color);
        \$('#edit form').find('[name=\"price\"]').val(retourJSON.price);
        \$('#edit form').find('[name=\"id\"]').val(retourJSON.id);
    });

});

\$('#edit form').submit(function(e){
    e.preventDefault();
    \$('#edit').modal('show');    
    var form = \$(this);

    
    // envoie des données au php
    \$.post('{{ path ('edit_validate') }}', form.serialize(), function(response){
        if(response.status == 'ok'){
            alert(response.message);
            // redirection si changement ok
           window.location.href = \"/admin/modify-product\";
        }
        else {
            alert(response.message);
        }

    });

});

</script>


{% endblock %}
", "products/modify.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\products\\modify.html.twig");
    }
}
