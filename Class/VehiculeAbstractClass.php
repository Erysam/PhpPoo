<?php

namespace Class;

abstract class VehiculeAbstractClass //elle sert de tronc commun aux classes fille mais n est jamais instancié (on n en fera jamais un objet)
{
    public function __construct(protected string $marque)
    {
    }

    public function rouler(): string
    {
        return 'Je roule';
    }

    abstract public function marque(): string; //on defini le quoi, quest ce que mes classes fille doivent implementer, ici une methode marque dont elles doivent definir le'comment'
    //dans les classes fille on peut ajouter des parametres aux méthodes :' marque(): public function marque(param1 = 0, parma2)'
}
