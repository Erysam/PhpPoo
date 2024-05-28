<?php

use Class\Enums\OfficeStatus;
use Class\OfficeReservation;
use Class\Reservation;
use Class\Singleton;


require '../vendor/autoload.php';

$reservation = new OfficeReservation('reservation pour le mois de janvier');

if (OfficeStatus::APPROVAL_PENDING === $reservation->status) { //lorsqu on créé une reservation (un objet de OfficeReservation), elle est en APPROVAL_PENDING donc on compart au status enum deOfficeStatus
    echo 'en attente';
}
//static attibut commun à la classe
var_dump($reservation::getCountResa());


//singleton

var_dump(Singleton::getInstance());
