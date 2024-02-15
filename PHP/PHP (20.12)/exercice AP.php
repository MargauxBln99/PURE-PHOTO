<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <u>Exercice 1</u> :<br>
    Début Algorithme<br>
    Déclaration des variables : nb = 4, i=1, resultat<br>
    Début<br>
    Afficher("Quelle table de multiplication voulez-vous ?")<br>
    Afficher("Table de",nb,":")<br>
    pour i = 0 jusqu'à 10 par par de 1<br>
    resultat = nb * i<br>
    Afficher(nb , " x ", i , " = ", resultat)<br>
    i = i + 1<br>
    Fin pour<br>
    Fin<br>
    Fin Algorithme <br>
    <br>

    <?php
    $nb = 4;

    echo "Quelle table de multiplication voulez-vous ?<br>";
    echo "Table de " . $nb . " : " . "<br>";

    /* i = au choix, condition d'arrêt, incrémentation*/

    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nb * $i;
        echo $nb . " x " . $i . " = " . $resultat . "<br>";
    }
    ?>

    <u>Exercice 2</u> :<br>
    Début algorithme<br>
    Déclaration variables : i, nombre, max = 0<br>
    Déclaration tableaux : tab[52,8,1,50,90,5,7], tab_final[]<br>
    Début<br>
    Pour i = 0 A nb_elements - 1 Par Pas de 1 Faire<br>
    Si (nombre > max) max = nombre<br>
    FinPour<br>
    Pour tous les éléments du tableau tab<br>
    Si (tab[i] = 1) Alors<br>
    tab_final[] = i<br>
    FinSi<br>
    FinPour<br>
    Fin<br>
    <br>

    <?php

    /* pour retenir foreach ->  $key => $value ! à utiliser avec les tableaux ! */

    $max = 0;
    $tab = [52, 8, 1, 50, 90, 5, 7];
    $tab_final = [];

    foreach ($tab as $index => $valeur) {
        if ($valeur > $max) {
            $max = $valeur;
        }
    }

    for ($i = 1; $i <= $max; $i++) {
        if ($tab[$i - 1] == 1) {
            $tab_final[] = $i;
        }
    }

    echo ($tab);
    echo ($tab_final);

    ?>

</body>

</html>