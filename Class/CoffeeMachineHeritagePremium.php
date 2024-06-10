<?php

namespace Class;
//PHP ne supporte pas l heritage multiple avec de mutiples extends comme java
class CoffeeMachineHeritagePremium extends CoffeeMachineHeritage //c'ets une CoffeeMachine qui a besoin des même variables de class et methodes de classe que CoffeeMachine
{
    protected int $cups = 2;

    public function __construct()
    {
        parent::__construct(2); //j appelle le constructeur parent et lui donne l argu qu il attend
        // je peux aussi mettre cups en argument dans le constructeur fille en faisant cela :
        // parent::__construct($cups);
        //dans ce cas, je dois recup l'argument depuis indexHeritage
    }




    public function select(string $selection)
    // si $selection est espresso , il fait appel à la methode makeEspresso
    {
        $result = match ($selection) {
            'espresso' => $this->makeEspresso(),
            'vanilla' => $this->makeVanilla(),
            default => 'erreur'
        };
    }

    protected function makeVanilla()
    {
        for ($i = 0; $i < $this->cups; $i++) {
            echo 'Café Vanille n°' . $i + 1 . ' fait!';
        }
    }
}
    /* PUBLIC/PROTECTED/PRIVATE : cette variable de la classe parent est modifiée dans la classe enfant et sera prioritaire sur celle de la classe mère
cela est possible uniquement si la variables est en public. si elle est en private, on ne pourra pas la modifier 
 pour rappel, public permet d appeler la methode ou l'attribut de la classe  en dehors de la classe (classe fille ou environnement externe comme index.php)
Private ne permet pas d appeler un attribut ou une methode en dehors de la classe (uniquement dans la classe elle mais on peut faire des methodes public qui peuvent getter ou setter)
Protected qui est entre private et public et peut être appeler dans les classes parents et filles uniquement*/

//si le niveau est protected dans la class parent, je ne peux pas etre en private dans la classe enfant, le niveau ne peut pas etre superieur dans la classe enfant  
// si on a un constructeur dans la classe parent, on en herite dans la classe enfant si dasn mon custruct de parents