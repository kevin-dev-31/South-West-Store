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
class __TwigTemplate_4118a14d043243d533b6cfeb6c8a9d2d55381a6216ab4f332674fd02c916a392 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/modify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/modify.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/modify.html.twig", 1);
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

        echo "Modifier un produit
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
    <main id=\"edit_product\">

        <div class=\"container\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Marque
                            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "?orderby=brand&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "?orderby=brand&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>

                        <th>SKU
                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "?orderby=sku&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "?orderby=sku&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>

                        <th>Modèle
                            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "?orderby=model&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "?orderby=model&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>

                        <th>Couleurs
                            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "?orderby=color&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "?orderby=color&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>
                        <th>Taille
                            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "?orderby=shoe_size&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["current_url"]) || array_key_exists("current_url", $context) ? $context["current_url"] : (function () { throw new RuntimeError('Variable "current_url" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "?orderby=shoe_size&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 62
        if ( !(null === (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 62, $this->source); })()))) {
            // line 63
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 64
                echo "                            <tr>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 65, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "getBrand", [], "method", false, false, false, 65), [], "array", false, false, false, 65), "html", null, true);
                echo "</td>
                                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getSku", [], "method", false, false, false, 66), "html", null, true);
                echo "</td>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getModel", [], "method", false, false, false, 67), 0, 15) . "..."), "html", null, true);
                echo "</td>
                                <td class=\"text-capitalize\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getColor", [], "method", false, false, false, 68), "html", null, true);
                echo "</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sizesList"]) || array_key_exists("sizesList", $context) ? $context["sizesList"] : (function () { throw new RuntimeError('Variable "sizesList" does not exist.', 69, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "getShoeSize", [], "method", false, false, false, 69), [], "array", false, false, false, 69), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 71)]), "html", null, true);
                echo "\">
                                        Détails
                                    </a>

                                    <button type=\"button\" class=\"btn btn-secondary open-modal-edit btn-modify\" data-id=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 75), "html", null, true);
                echo "\">
                                        Modifier
                                    </button>

                                    <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_products", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 79)]), "html", null, true);
                echo "\" onclick=\"return confirm('Etes vous sur de vouloir supprimer?')\" class=\"btn btn-danger\">Supprimer</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                    ";
        }
        // line 84
        echo "                </tbody>
            </table>
        </div>
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
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brandsList"]) || array_key_exists("brandsList", $context) ? $context["brandsList"] : (function () { throw new RuntimeError('Variable "brandsList" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["brand"]) {
            // line 104
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["brand"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizesList"]) || array_key_exists("sizesList", $context) ? $context["sizesList"] : (function () { throw new RuntimeError('Variable "sizesList" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["size"]) {
            // line 121
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo ";
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"color\">Couleurs</label>
                                <select name=\"color\" id=\"color\" class=\"form-control\">
                                    <option value=\"0\" selected>-- Sélectionnez la couleur --</option>
                                    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["color"]) {
            // line 130
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 130, $this->source); })()) == $context["key"])) {
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
        // line 131
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

    // line 152
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
        echo "        <script>
            \$('.open-modal-edit').click(function (e) {
                e.preventDefault();
                \$('#edit').modal('show');
                var editId = \$(this).data('id');
                // affichage des info d'origine dans le form
                \$.post('";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_products_ajax");
        echo "', {
                    id: editId
                }, function (retourJSON) {
                    \$('#edit form').find('[name=\"brand\"]').val(retourJSON.brand);
                    \$('#edit form').find('[name=\"model\"]').val(retourJSON.model);
                    \$('#edit form').find('[name=\"sku\"]').val(retourJSON.sku);
                    \$('#edit form').find('[name=\"size\"]').val(retourJSON.size);
                    \$('#edit form').find('[name=\"color\"]').val(retourJSON.color);
                    \$('#edit form').find('[name=\"price\"]').val(retourJSON.price);
                    \$('#edit form').find('[name=\"id\"]').val(retourJSON.id);
                });

            });

            \$('#edit form').submit(function (e) {
                e.preventDefault();
                \$('#edit').modal('show');
                var form = \$(this);


                // envoie des données au php
                \$.post('";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_validate");
        echo "', form.serialize(), function (response) {
                    if (response.status == 'ok') {
                        Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Article modifié',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        // redirection si changement ok
                        window.location.href = \"/admin/modify-product\";
                    } else {
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
        return array (  404 => 180,  380 => 159,  372 => 153,  362 => 152,  333 => 131,  316 => 130,  312 => 129,  303 => 122,  292 => 121,  288 => 120,  271 => 105,  260 => 104,  256 => 103,  235 => 84,  232 => 83,  222 => 79,  215 => 75,  208 => 71,  203 => 69,  199 => 68,  195 => 67,  191 => 66,  187 => 65,  184 => 64,  179 => 63,  177 => 62,  165 => 53,  159 => 50,  151 => 45,  145 => 42,  136 => 36,  130 => 33,  121 => 27,  115 => 24,  106 => 18,  100 => 15,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un produit
{% endblock %}

{% block body %}

    <main id=\"edit_product\">

        <div class=\"container\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Marque
                            <a href=\"{{ current_url }}?orderby=brand&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"{{ current_url }}?orderby=brand&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>

                        <th>SKU
                            <a href=\"{{ current_url }}?orderby=sku&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"{{ current_url }}?orderby=sku&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>

                        <th>Modèle
                            <a href=\"{{ current_url }}?orderby=model&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"{{ current_url }}?orderby=model&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>

                        <th>Couleurs
                            <a href=\"{{ current_url }}?orderby=color&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"{{ current_url }}?orderby=color&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>
                        <th>Taille
                            <a href=\"{{ current_url }}?orderby=shoe_size&orderdir=asc\">
                                <i class=\"fas fa-caret-up\"></i>
                            </a>
                            <a href=\"{{ current_url }}?orderby=shoe_size&orderdir=desc\">
                                <i class=\"fas fa-caret-down\"></i>
                            </a>
                        </th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    {% if products is not null %}
                        {% for product in products %}
                            <tr>
                                <td>{{ brandsList[product.getBrand()] }}</td>
                                <td>{{ product.getSku() }}</td>
                                <td>{{ product.getModel()|slice(0,15) ~ '...'  }}</td>
                                <td class=\"text-capitalize\">{{ product.getColor() }}</td>
                                <td>{{ sizesList[product.getShoeSize()] }}</td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"{{path('view_details',{id:product.getId()})}}\">
                                        Détails
                                    </a>

                                    <button type=\"button\" class=\"btn btn-secondary open-modal-edit btn-modify\" data-id=\"{{ product.getId() }}\">
                                        Modifier
                                    </button>

                                    <a href=\"{{ path ('delete_products',{id : product.getId()}) }}\" onclick=\"return confirm('Etes vous sur de vouloir supprimer?')\" class=\"btn btn-danger\">Supprimer</a>
                                </td>
                            </tr>
                        {% endfor %}
                    {% endif %}
                </tbody>
            </table>
        </div>
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
                                    <option value=\"0\" selected>-- Sélectionnez la couleur --</option>
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
            \$('.open-modal-edit').click(function (e) {
                e.preventDefault();
                \$('#edit').modal('show');
                var editId = \$(this).data('id');
                // affichage des info d'origine dans le form
                \$.post('{{ path ('edit_products_ajax') }}', {
                    id: editId
                }, function (retourJSON) {
                    \$('#edit form').find('[name=\"brand\"]').val(retourJSON.brand);
                    \$('#edit form').find('[name=\"model\"]').val(retourJSON.model);
                    \$('#edit form').find('[name=\"sku\"]').val(retourJSON.sku);
                    \$('#edit form').find('[name=\"size\"]').val(retourJSON.size);
                    \$('#edit form').find('[name=\"color\"]').val(retourJSON.color);
                    \$('#edit form').find('[name=\"price\"]').val(retourJSON.price);
                    \$('#edit form').find('[name=\"id\"]').val(retourJSON.id);
                });

            });

            \$('#edit form').submit(function (e) {
                e.preventDefault();
                \$('#edit').modal('show');
                var form = \$(this);


                // envoie des données au php
                \$.post('{{ path ('edit_validate') }}', form.serialize(), function (response) {
                    if (response.status == 'ok') {
                        Swal.fire({
                            position: 'center',
                            type: 'success',
                            title: 'Article modifié',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        // redirection si changement ok
                        window.location.href = \"/admin/modify-product\";
                    } else {
                        alert(response.message);
                    }
                });
            });

        </script>
    {% endblock %}
", "products/modify.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\products\\modify.html.twig");
    }
}
