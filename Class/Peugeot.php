<?php

namespace Class;

class Peugeot extends VehiculeAbstractClass
{

    public function marque(): string
    {
        //->marque fait reference à la marque dans la classe parent
        return 'Je suis un vehicule et je suis une ' . $this->marque . '.'; //j ai defini le comment de la methode
    }
}
