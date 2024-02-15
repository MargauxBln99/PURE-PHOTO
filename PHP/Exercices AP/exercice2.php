<?php

/* Question 1 : 

Créez une fonction from scratch qui s'appelle somme()
Elle prendra deux arguments de type int
Elle devra retourner la somme des deux

Exemple : 

    argument 1 = 5
    argument 2 = 6
    résultat = 11

*/

function somme($nombre1, $nombre2)
{
    return $nombre1 + $nombre2;
}

echo somme(5, 6);

/* Question 2 :

Créez une fonction from scratch qui s'appelle soustraction()
Elle prendra deux arguments de type int
Elle devra retourner la soustraction des deux

Exemple : 

    argument 1 = 5
    argument 2 = 4
    résultat = 1

*/

function soustraction($nombre1, $nombre2)
{
    return $nombre1 - $nombre2;
}

echo soustraction(5, 4);


/* Question 3 : 

Créez une fonction from scratch qui s'appelle multiplication()
Elle prendra deux arguments de type int
Elle devra retourner la multiplication des deux

Exemple : 

    argument 1 = 5
    argument 2 = 4
    résultat = 20

*/

function multiplication($nombre1, $nombre2)
{
    return $nombre1 * $nombre2;
}

echo multiplication(5, 4);


/* Question 4 :

Créez une fonction from scratch qui s'appelle heuresMinutesSecondes()
Elle prendra un argument de type int, correspondant à un nombre de secondes
Cette fonction affichera (à l'aide d'un echo) le nombre d'heures, de minutes et de secondes
correspondant au nombre passé en argument

Exemple :

    heureMinutesSecondes(54197) affichera "15 heures, 3 minutes et 17 secondes"

*/

function heureMinutesSecondes($nbSecondes)
{
    $nbMinutes = $nbSecondes * 60;
    $nbHeures = $nbMinutes * 60;
}
