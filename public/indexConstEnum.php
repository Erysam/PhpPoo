<?php

use Class\Enums\OfficeStatus;
use Class\OfficeReservation;
use Class\Reservation;


require '../vendor/autoload.php';

$reservation = new OfficeReservation();

if (OfficeStatus::APPROVAL_PENDING === $reservation->status) { //lorsqu on créé une reservation (un objet de OfficeReservation), elle est en APPROVAL_PENDING donc on compart au status enum deOfficeStatus
    echo 'en attente';
}
