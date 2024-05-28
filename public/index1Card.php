<?php

//1 LES CLASSES
require_once('./Class/Cart.php');
$cart = new Cart(0, 100); //je donne des valeur au deux parametres attendus quantity et totalPrice
$cart->setTotalPrice(50); //je modifie le valeur de la variable totalPrice
$cart->discount(5); //j'applique la methode discount sur mon objet cette methode applique une remise sur le prix

//2 LES NAMESPACES
//2classes avec des nom identique, celle paypal a un namespace NORD
require_once('./Class/Paypal');
require_once('./Class/Stripe');
//On appelle la methode de cette façon : $paymentPaypal = new Payment(); mais comme on a deux methode avec un meme nom on met '$paymentPaypal = new Class\Paypal\Payment()' 
//pour ne pas utiliser le namespace complet '$paymentPaypal = new Class\Paypal\Payment()' on peut utiliser 'use'
use \Class\Paypal\payment as PaypalPayment;
//ici comme nous avons 2 methodes qui ont le même nom, on met un alias au 'use'
use \Class\stripe\payment;

$paymentPaypal = new PaypalPayment();
$paymentStripe = new Payment();
