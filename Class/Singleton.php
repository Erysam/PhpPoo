<?php

namespace Class;

class Singleton
{
    private static ?self $instance = null; //on créé un attribut privé (appelé que au sein de la classe) qui ets null au déprt, avec le '?' on indique qu'elle peut être null

    private function __construct()
    {
        echo 'Nouvelle instance';
    }

    // ::self permet d'acceder aux membres (membres : elements qui composent la classe) statiques aux constantes de classe ou à une methode de classe  classe courante
    public static function getInstance(): self
    {
        if (is_null(self::$instance)) { // si l $instance est nulle, 

            self::$instance = new self; //alors on créé un objet de la classe et on le stock dans $instance 
        }
        return self::$instance; //si no null, retourne l'objet stocké dans $instance
    }
}
