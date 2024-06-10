<?php

namespace Class;

class Cart
{
    public function __construct(
        private int $quantity,
        private float $totalPrice
    ) {
    }

    /* avant php8
    private int $quantity;
    private float $totalPrice;

    public function __construct(int $quantity, float $totalPrice)
    {
        $this->quantity = $quantity; //this fait reference à l'objet courant, on assigne la valeur recupérée par le constructeur au parametre de l'objet courant
        $this->totalPrice = $totalPrice;
    }*/



    //on créé un getteur qui renvoie la valeur d'un param
    //:float veut dire que la methode renvoie un float
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    //on créé un getteur pour modifier la valeur de la variable
    public function setTotalPrice(float $price): void //la méthode ne revoie rien 'void', elle applique quelque chose
    {
        $this->totalPrice = $price;
    }

    public function discount(float $discount): void
    { //-= veut dire on affecte totalprice - la valeur à droite (on soustrait quelque chose à totalPrice et on affecte ce resultat)
        $this->totalPrice -= $this->totalPrice * ($discount / 100); //si totalPrice vaut 100 et qu on fait une remise de 20% : 100x(20/100) = 20 et on soustrait 20 de 100
    }


    // on cree un getteur et un setteur pour quantity
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    //on créé un getteur pour modifier la valeur de la variable
    public function setQuantity(float $newQuantity): void //la méthode ne revoie rien 'void', elle applique quelque chose
    {
        $this->quantity = $newQuantity;
    }
}
