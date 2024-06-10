<?php

use Class\CoffeeMachineHeritage;
use Class\CoffeeMachineHeritagePremium;

require '../vendor/autoload.php';

// $coffeeMachine = new CoffeeMachineHeritagePremium;  sans le constructeur
$coffeeMachine = new CoffeeMachineHeritagePremium(3); // la classe fille herite du constructeur parent, mais je peux aussi avoir un constructeur dans la classe enfant dans lequel je vais lui donner l'argument qu il attend manuellement et je n ai plus besoin de le recuperer dans l indexHeritage lors de l instantiation
$coffeeMachine->selection('espresso');
$coffeeMachine->selection('vanilla');
