<?php
//CoffeeMachine ets la classe parent et les autres classes enfant vont extends celle ci 
namespace Class;
// si on ne veut pas etendre la CoffeeMachineHeritage on indique final class CoffeeMachineHeritage et ça marche aussi sur les methodes
class CoffeeMachineHeritage
{
    protected int $cups = 1;
    public function __construct(int $cups)
    {
        $this->cups = $cups;
    }


    public function selection(string $selection)
    {
        $result = match ($selection) {
            'espresso' => $this->makeEspresso(),
            default => 'erreur'
        };
        return $result; //match est une structure de contrôle puissante et concise pour comparer des valeurs et retourner des résultats en PHP, et les flèches => et -> ont des utilisations distinctes selon qu'on travaille avec des tableaux ou des objets.
    }

    protected function makeEspresso()
    // on peut la mettre en private car on ne s'en sert que dans la classe mère mais si on veut la reecrire dans la classe enfant, il faut la mettre en proteted  
    {
        for ($i = 0; $i < $this->cups; $i++) {
            echo 'Café Espresso n°' . $i + 1 . ' fait!'; //+1 car la boucle commence à for 0
        }
    }
}
