<?php

namespace Class;

class Reservation
{
    public const APPROVAL_PENDING = "en attente"; // les constantes sont tjrs en maj, si rien n'est precisé, elles sont en 'public' par defaut
    public const APPROVAL_APPROVED = 'approuvée';
    public const APPROVAL_REJECTED = 'rejectée';

    public string $statusResa;

    public function __construct()
    {
        $this->statusResa = self::APPROVAL_PENDING; //

    }
}

//this c'est pour appeler l'instance de class, self c'est appeler la classe
// comme on doit appliquer le single responsability (un class ne doit faire qu une seule chose), on cree un enums pour les status car reservation represente une reservation et nom pas les status 
