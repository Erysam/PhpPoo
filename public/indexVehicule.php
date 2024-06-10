<?php

use Class\Peugeot;

require '../vendor/autoload.php';

$peugeot = new Peugeot('peugeot'); // constructeur de la classe parent
var_dump($peugeot->marque());
