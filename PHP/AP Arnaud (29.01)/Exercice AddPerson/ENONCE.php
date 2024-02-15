<?php

include 'datas/persons.php';

/************************ AVANT PROPOS ************************/
// Avant de commencer, comprenons l'usage des variables globales :)
// Dans le fichier persons.php qui est inclut ci-dessus, 
// il y a une variable $persons qui contient un tableau.
// Par défaut les variables sont considérées comme globales.
// C'est à dire qu'on peut intéragir avec elles partout, SAUF DANS LES FONCTIONS.
// Par défaut, seules les variables définies dans une fonction sont accessibles dans cette derniere.

// exemple :

$a = 10;
function test(){
    echo $a; // une erreur survient car $a n'est pas accessible hors de la fonction
    $a = 5; // cette variable existera uniquement dans la fonction
    echo 'La valeur de $a dans la fonction est '.$a.'<br>';
}

test();
echo 'La valeur de $a hors de la fonction est '.$a.'<br>';
// on constate dans cette exemple que les deux variables $a sont différentes


// Donc si nous souhaitons intéragir avec une variable globale, 
// à l'INTERIEUR d'une fonction, nous devons simplement préciser :
// global $variable;
// global est utilisé dans 2 cas :
// - pour RECUPERER dans une fonction une variable déjà existante à l'extérieur
// - pour rendre une variable, locale à une fonction, accessible à l'extérieur

function testGlobal(){
    global $c; //si $c n'existe pas à l'extérieur, elle sera créé
    $c = 10; //on assigne la valeur à la variable $c (ATTENTION, on ne fait jamais : global $c = 10; ON DOIT TOUJOURS ASSIGNER LA VALEUR APRES LA DECLARATION)
}
echo $c; // va renvoyer une erreur car $c n'existe pas
testGlobal(); // on lance la fonction qui va créer $c et la rendre accessible
echo $c; // affiche $c qui est accessible depuis l'extérieur car définie comme globale dans la fonction



/************************ EXERCICE ************************/

// faites fonctionner ce code :

$persons = array(
    array('nom' => 'Balin', 'prenom' => 'Margaux', 'date_naissance' => '1999-11-15' ),
);

function displayPersons(){

    global $persons;

    foreach($persons as $person) {
        echo '<p>'.$person['nom'].' '.$person['prenom'].', né le '.$person['date_naissance'].'</p>';
    }
}

displayPersons();

?>