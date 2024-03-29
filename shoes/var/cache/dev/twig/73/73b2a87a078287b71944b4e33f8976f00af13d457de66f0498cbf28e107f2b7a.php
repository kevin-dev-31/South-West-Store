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

/* default/cgv.html.twig */
class __TwigTemplate_4f8fe30fdcd299133e426e86168f96d7df59281713a06096b06321f82c4556c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/cgv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/cgv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/cgv.html.twig", 1);
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

        echo "Condtions générales de vente
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
    <main id=\"cgv\" class=\"container\">

        <h2 class=\"text-center mt-5 mb-5\">Condtions générales de vente</h2>

        <h3 class=\"mb-3 mt-5\">Généralités</h3>

        <p>Les présentes conditions générales de vente (C.G.V.) ont pour objet d'informer tout éventuel client sur les conditions ainsi que les modalités dans lesquelles le vendeur procède à la vente des produits du catalogue mise en ligne sur le site internet Southweststore.com.  Les C.G.V. fixent les droits et les obligations des parties dans le cadre de la vente.<br>

        La validation de la commande par le client implique l’acceptation par l’acheteur de ces conditions générales de vente sans réserve.
        Si l’une des clauses des présentes conditions générales de vente se trouvait nulle ou annulée, les autres clauses n’en seraient pas pour autant annulées.<br>

        Le fait que le vendeur ne fasse pas application à un moment donné d’un quelconque article des présentes conditions, ne peut être interprété comme valant renonciation à se prévaloir ultérieurement des dites conditions générales de vente.</p>

        <h3 class=\"mb-3 mt-5\">Commande</h3> 
        
        <p>Toute commande en ligne implique l’acceptation des présentes conditions.</p>

        <h3 class=\" mb-3 mt-5\">Prix</h3>

        <p>Les prix et taux de TVA sont ceux en vigueur au jour de la commande.<br>

        Ils s’entendent emballage et acheminement en France métropolitaine compris, majorés éventuellement du prix des modalités spéciales choisies par l’acheteur.<br>


        Les livraisons en dehors de la France Métropolitaine et Corse font l'objet de conditions particulières dont le client sera informé, avant la validation de sa commande.<br>

        Tous les prix sont donnés sous réserve d'erreur typographique manifeste. Si une erreur devait survenir le vendeur contactera le client afin de l'avertir de l'erreur effectuée par ses services et lui indiquera que la commande sera facturée aux conditions corrigées.<br>

        Néanmoins le client a le droit de refuser la correction du prix il sera libre d'annuler la commande corrigée et cela sans pénalités.</p>

        <h3 class=\" mb-3 mt-5\">Livraison</h3>

        <p>Le délai de livraison figure explicitement sur la fiche d'un produit. Ce délai s'entend hors week-end et jours fériés, et sous réserve de disponibilité des produits confirmée par le fournisseur. Tout retard de livraison du fait de circonstances indépendantes de la volonté du vendeur ne pourra entraîner l’annulation de la commande. La responsabilité du vendeur ne pourra être engagée pour tout préjudice résultant de ce retard.<br>


        Toutefois, si la délivrance des biens n’est pas intervenue 30 jours après la date indicative de livraison, pour toute autre cause qu’un cas de force majeure, la vente sera alors être résolue et l’acheteur sera remboursé sans pouvoir alors prétendre à quelque indemnité.<br>


        Le vendeur est dégagé de plein droit de toute responsabilité en cas de force majeure ou d’événements tels que : lock-out, grève, épidémie, guerre, réquisition, incendie, inondation, accident d’outillage, retard dans les transports ou toute autre cause amenant un chômage partiel ou total pour le vendeur ou ses fournisseurs.<br>


        Le vendeur informera l’acheteur en temps opportun des cas et événements ci-dessus énumérés.<br>


        Tout retard de livraison dû à un fait caractéristique de force majeure entraînera, au choix du vendeur, soit la résolution pure et simple de la vente, soit la prorogation des délais de livraison ou de mise à disposition, et ce sans qu’aucune des parties ne puisse prétendre à autre indemnité.<br>


        En toute hypothèse, la livraison dans les délais ne peut intervenir que si l’acheteur a rempli toutes ses obligations à l’égard du vendeur.<br>


        Lorsque la livraison s’effectue par mise à disposition, le vendeur s’engage à informer l’acheteur par écrit de la date de mise à disposition. L’acheteur s’engage à prendre livraison des biens dans les 5 jours suivant la réception de l’avis de mise à disposition. Passé ce délai, les frais de stockage seront facturés à l’acheteur sans préjudice de toute action qu’entendra mener le vendeur.<br>


        -   Livraison France : Colissimo Suivi (assurance standard 23€ par kilo)<br>

        -   Livraison UE : Colissimo Suivi Europe (assurance standard 23€ par kilo)<br>

        -   Livraison Hors UE : Colissimo Suivi International (assurance standard 23€ par kilo)<br>


        Southweststore.com s'engage a mettre à la disposition du transporteur les produits commandés dans un délai maximum de 72h.</p>

        <p>...ETC</p>
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/cgv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Condtions générales de vente
{% endblock %}

{% block body %}

    <main id=\"cgv\" class=\"container\">

        <h2 class=\"text-center mt-5 mb-5\">Condtions générales de vente</h2>

        <h3 class=\"mb-3 mt-5\">Généralités</h3>

        <p>Les présentes conditions générales de vente (C.G.V.) ont pour objet d'informer tout éventuel client sur les conditions ainsi que les modalités dans lesquelles le vendeur procède à la vente des produits du catalogue mise en ligne sur le site internet Southweststore.com.  Les C.G.V. fixent les droits et les obligations des parties dans le cadre de la vente.<br>

        La validation de la commande par le client implique l’acceptation par l’acheteur de ces conditions générales de vente sans réserve.
        Si l’une des clauses des présentes conditions générales de vente se trouvait nulle ou annulée, les autres clauses n’en seraient pas pour autant annulées.<br>

        Le fait que le vendeur ne fasse pas application à un moment donné d’un quelconque article des présentes conditions, ne peut être interprété comme valant renonciation à se prévaloir ultérieurement des dites conditions générales de vente.</p>

        <h3 class=\"mb-3 mt-5\">Commande</h3> 
        
        <p>Toute commande en ligne implique l’acceptation des présentes conditions.</p>

        <h3 class=\" mb-3 mt-5\">Prix</h3>

        <p>Les prix et taux de TVA sont ceux en vigueur au jour de la commande.<br>

        Ils s’entendent emballage et acheminement en France métropolitaine compris, majorés éventuellement du prix des modalités spéciales choisies par l’acheteur.<br>


        Les livraisons en dehors de la France Métropolitaine et Corse font l'objet de conditions particulières dont le client sera informé, avant la validation de sa commande.<br>

        Tous les prix sont donnés sous réserve d'erreur typographique manifeste. Si une erreur devait survenir le vendeur contactera le client afin de l'avertir de l'erreur effectuée par ses services et lui indiquera que la commande sera facturée aux conditions corrigées.<br>

        Néanmoins le client a le droit de refuser la correction du prix il sera libre d'annuler la commande corrigée et cela sans pénalités.</p>

        <h3 class=\" mb-3 mt-5\">Livraison</h3>

        <p>Le délai de livraison figure explicitement sur la fiche d'un produit. Ce délai s'entend hors week-end et jours fériés, et sous réserve de disponibilité des produits confirmée par le fournisseur. Tout retard de livraison du fait de circonstances indépendantes de la volonté du vendeur ne pourra entraîner l’annulation de la commande. La responsabilité du vendeur ne pourra être engagée pour tout préjudice résultant de ce retard.<br>


        Toutefois, si la délivrance des biens n’est pas intervenue 30 jours après la date indicative de livraison, pour toute autre cause qu’un cas de force majeure, la vente sera alors être résolue et l’acheteur sera remboursé sans pouvoir alors prétendre à quelque indemnité.<br>


        Le vendeur est dégagé de plein droit de toute responsabilité en cas de force majeure ou d’événements tels que : lock-out, grève, épidémie, guerre, réquisition, incendie, inondation, accident d’outillage, retard dans les transports ou toute autre cause amenant un chômage partiel ou total pour le vendeur ou ses fournisseurs.<br>


        Le vendeur informera l’acheteur en temps opportun des cas et événements ci-dessus énumérés.<br>


        Tout retard de livraison dû à un fait caractéristique de force majeure entraînera, au choix du vendeur, soit la résolution pure et simple de la vente, soit la prorogation des délais de livraison ou de mise à disposition, et ce sans qu’aucune des parties ne puisse prétendre à autre indemnité.<br>


        En toute hypothèse, la livraison dans les délais ne peut intervenir que si l’acheteur a rempli toutes ses obligations à l’égard du vendeur.<br>


        Lorsque la livraison s’effectue par mise à disposition, le vendeur s’engage à informer l’acheteur par écrit de la date de mise à disposition. L’acheteur s’engage à prendre livraison des biens dans les 5 jours suivant la réception de l’avis de mise à disposition. Passé ce délai, les frais de stockage seront facturés à l’acheteur sans préjudice de toute action qu’entendra mener le vendeur.<br>


        -   Livraison France : Colissimo Suivi (assurance standard 23€ par kilo)<br>

        -   Livraison UE : Colissimo Suivi Europe (assurance standard 23€ par kilo)<br>

        -   Livraison Hors UE : Colissimo Suivi International (assurance standard 23€ par kilo)<br>


        Southweststore.com s'engage a mettre à la disposition du transporteur les produits commandés dans un délai maximum de 72h.</p>

        <p>...ETC</p>
    </main>

{% endblock %}
", "default/cgv.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\default\\cgv.html.twig");
    }
}
