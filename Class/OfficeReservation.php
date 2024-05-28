<?php

namespace Class;

use Class\Enums\OfficeStatus;

class OfficeReservation
{

    private static int $countResa; // static pour avoir un attribut commun à la classe et non aux instances 

    public OfficeStatus $status;

    public function __construct(public string $information)
    {
        $this->status = OfficeStatus::APPROVAL_PENDING; //

    }

    public static function getCountResa()
    {
        return self::$countResa;
    }
}


/*
public const APPROVAL_PENDING = "en attente"; // les constantes sont tjrs en maj, si rien n'est precisé, elles sont en 'public' par defaut
public const APPROVAL_APPROVED = 'approuvée';
public const APPROVAL_REJECTED = 'rejectée';

this c'est pour appeler l'instance de class, self c'est appeler la classe
*/