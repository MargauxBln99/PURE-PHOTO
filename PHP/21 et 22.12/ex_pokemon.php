<?php
$listeDesPokemon = [
    'Dragmara' => [
        'Taille' => 2.7,
        'Poids' => 225,
    ],
    'Chacripan' => [
        'Taille' => 0.4,
        'Poids' => 10.1,
    ],
    'Pikachu' => [
        'Taille' => 0.4,
        'Poids' => 6,
    ],
    'Ronflex' => [
        'Taille' => 2.1,
        'Poids' => 460,
    ],
];

// Afficher la taille de Pikachu en cm //

echo "Pikachu mesure : ".($listeDesPokemon["Pikachu"]["Taille"]*100)." cm<br>";

// Afficher le poids de Ronflex en kg //

echo "Ronflex pèse : " .($listeDesPokemon["Ronflex"]["Poids"])." kg<br>";

// Pour chaque Pokémon, afficher son nom, sa taille en m et son poids en kg //

foreach ($listeDesPokemon as $n => $v) {
    echo $n;
    foreach ($v as $k => $val){
        if ($k == "Taille") echo " mesure ".$val." m ";
        else echo "et pèse $val kg</br>";
    }
}