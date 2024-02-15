<?php
$persons = array(
    array('nom' => 'Gates', 'prenom' => 'Bill', 'date_naissance' => '28/10/1955', 'entreprise' => 'Microsoft', 'photo' => 'photo_1.jpg')
);

// ajout d'une nouvelle personne dans le tableau $persons

addPerson('Sundar', 'Pichai', '10/06/1972', 'Google', 'photo_2.jpg');

function addPerson($prenom, $nom, $date_naissance, $entreprise, $photo) {

    if ($prenom != '' && $nom != '' && $date_naissance != '' && $entreprise != '' && $photo != '') {
        global $persons;
        $persons[] = [
            'nom' => $nom,
            'prenom' => $prenom,
            'date_naissance' => $date_naissance,
            'entreprise' => $entreprise,
            'photo' => $photo,
        ];

        return true;
    } else {
        return false;
    }
}


?>
