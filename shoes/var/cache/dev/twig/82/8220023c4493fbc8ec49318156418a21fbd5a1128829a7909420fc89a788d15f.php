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
class __TwigTemplate_dff7be3cfe67a3c98e9cb493ba74fba88b52e5a4710b9d9867c725ed443ba40d extends \Twig\Template
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

        echo "Ajouter un article de blog
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

        <h2 class=\"text-center mt-5 mb-4\">Condtions générales de vente</h2>

        <h3>1-Purchase terms and conditions</h3>

        <p>These present General Contract Conditions, hereinafter, GCC, regulate the purchase conditions of the distinct products offered on the website, www.sivasdescalzo.com, owned by PROUDLACES, S.L., hereinafter, SVD, with CIF B65386963 and located at C/ CHURRUCA 5, BAJO- LOCAL, 28004 MADRID.
            
            Users who make purchases at www.sivasdescalzo.com fully accept these present GCC terms and will be legally bound by them, as they have been drafted at the time of consent. As a prerequisite of the purchase of any product via www.sivasdescalzo.com, you must read and accept the GCC terms.
            
            The GCC will remain available at all times from this website, so all users can consult or print them out at any time they see fit. Only those over the age of 18 years old and with sufficient legal capacity to enter into binding contracts may purchase products at www.sivasdescalzo.com. By placing a purchase via this website, you guarantee that you are over the age 18 years old, and that you have the legal capacity to enter into binding agreements.</p>

        <h3>2- Purchase procedure</h3>

        <p>The purchase process is simple, whether it is the first time you buy at www.sivasdescalzo.com, or if you have previously purchased, since no previous registration is required.
            
            1) SELECT: select the desired product, which will be followed by a detailed description of said product, as well as its price (VAT included). By clicking “Add to Cart”, the item will be incorporated into the shopping cart.
            
            2) BUY: Once all desired items are in your shopping cart, the next step will be to process the order. To do so:
            
                Click the \"Shopping cart” icon on the upper, right hand side of the page
                Click on the “Checkout” button
                Fill out or verify contact information, the details of your order, the address to which you want to receive your order, as well as the address to which the invoice must be sent
                Click on the \"Complete Order\" button
                Introduce the details of your credit card, debit card, or PayPal account
                Click \"Authorize Payment\".
            
            3) PAYMENT: choose your payment method: Visa, MasterCard, or PayPal
            
            After finalizing your purchase, you will receive an e-mail acknowledging the receipt of your order (the \"Order Confirmation\"), and specifying all the details of your order, for example: the method of payment chosen. If you observe an error in the address indicated, or any other details, you must immediately give notification via the following contact form: https://www.sivasdescalzo.com/es/contacts, or sending an e-mail to support@sivasdescalzo.me enabling the procedure to correct the error.</p>

        <h3>3-Payment methods</h3>

        <p>Payment by credit card
            
            The customer can choose the payment by credit option by performing this operation at the time of placing the order.
            
            At www.sivasdescalzo.com a system named the SSL (Secure Sockets Layer) is used. It is a payment system in a secure environment, due to the fact it allows for the encryption of the information transmitted during the transaction, ensuring the confidentiality of it.
            
            As a protection measure against fraud, SVD reserves the right to request customers for additional documentation to be sent by e-mail to certify the identity of the buyer as the legal owner of the credit card. This accreditation may be attached digitally in pdf or jpg format from the same e-mail from which it is requested, in order to expedite the validation of the order and to proceed to send it as soon as possible.
            
            By clicking on \"Authorize Payment\" You are confirming that the credit card used is yours.
            
            Payment by PayPal
            
            We offer the possibility to pay through PayPal. To do this, you must have an account with this service. By using PayPal, you will not have to enter your card details at the time of payment, but you will be required to enter your PayPal e-mail and password. The charge will be made at the moment we confirm the order. In order for the transaction to be valid, the Shipping Address and the Address that appears on the PayPal transaction must be exactly the same.</p>

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

{% block title %}Ajouter un article de blog
{% endblock %}

{% block body %}

    <main id=\"cgv\" class=\"container\">

        <h2 class=\"text-center mt-5 mb-4\">Condtions générales de vente</h2>

        <h3>1-Purchase terms and conditions</h3>

        <p>These present General Contract Conditions, hereinafter, GCC, regulate the purchase conditions of the distinct products offered on the website, www.sivasdescalzo.com, owned by PROUDLACES, S.L., hereinafter, SVD, with CIF B65386963 and located at C/ CHURRUCA 5, BAJO- LOCAL, 28004 MADRID.
            
            Users who make purchases at www.sivasdescalzo.com fully accept these present GCC terms and will be legally bound by them, as they have been drafted at the time of consent. As a prerequisite of the purchase of any product via www.sivasdescalzo.com, you must read and accept the GCC terms.
            
            The GCC will remain available at all times from this website, so all users can consult or print them out at any time they see fit. Only those over the age of 18 years old and with sufficient legal capacity to enter into binding contracts may purchase products at www.sivasdescalzo.com. By placing a purchase via this website, you guarantee that you are over the age 18 years old, and that you have the legal capacity to enter into binding agreements.</p>

        <h3>2- Purchase procedure</h3>

        <p>The purchase process is simple, whether it is the first time you buy at www.sivasdescalzo.com, or if you have previously purchased, since no previous registration is required.
            
            1) SELECT: select the desired product, which will be followed by a detailed description of said product, as well as its price (VAT included). By clicking “Add to Cart”, the item will be incorporated into the shopping cart.
            
            2) BUY: Once all desired items are in your shopping cart, the next step will be to process the order. To do so:
            
                Click the \"Shopping cart” icon on the upper, right hand side of the page
                Click on the “Checkout” button
                Fill out or verify contact information, the details of your order, the address to which you want to receive your order, as well as the address to which the invoice must be sent
                Click on the \"Complete Order\" button
                Introduce the details of your credit card, debit card, or PayPal account
                Click \"Authorize Payment\".
            
            3) PAYMENT: choose your payment method: Visa, MasterCard, or PayPal
            
            After finalizing your purchase, you will receive an e-mail acknowledging the receipt of your order (the \"Order Confirmation\"), and specifying all the details of your order, for example: the method of payment chosen. If you observe an error in the address indicated, or any other details, you must immediately give notification via the following contact form: https://www.sivasdescalzo.com/es/contacts, or sending an e-mail to support@sivasdescalzo.me enabling the procedure to correct the error.</p>

        <h3>3-Payment methods</h3>

        <p>Payment by credit card
            
            The customer can choose the payment by credit option by performing this operation at the time of placing the order.
            
            At www.sivasdescalzo.com a system named the SSL (Secure Sockets Layer) is used. It is a payment system in a secure environment, due to the fact it allows for the encryption of the information transmitted during the transaction, ensuring the confidentiality of it.
            
            As a protection measure against fraud, SVD reserves the right to request customers for additional documentation to be sent by e-mail to certify the identity of the buyer as the legal owner of the credit card. This accreditation may be attached digitally in pdf or jpg format from the same e-mail from which it is requested, in order to expedite the validation of the order and to proceed to send it as soon as possible.
            
            By clicking on \"Authorize Payment\" You are confirming that the credit card used is yours.
            
            Payment by PayPal
            
            We offer the possibility to pay through PayPal. To do this, you must have an account with this service. By using PayPal, you will not have to enter your card details at the time of payment, but you will be required to enter your PayPal e-mail and password. The charge will be made at the moment we confirm the order. In order for the transaction to be valid, the Shipping Address and the Address that appears on the PayPal transaction must be exactly the same.</p>

        <p>...ETC</p>
    </main>

{% endblock %}
", "default/cgv.html.twig", "C:\\wamp64\\www\\Projet-soutenance\\shoes\\templates\\default\\cgv.html.twig");
    }
}
