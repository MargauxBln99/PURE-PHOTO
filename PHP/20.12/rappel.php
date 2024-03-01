<?php
$element = 3; /* variable */
$element2 = '3'; /* chaîne de caractères */

$prenom = 'Margaux';
echo 'Bienvenue ' . $prenom . ' , comment vas-tu ? <br>'; /* concaténation */

if ($element === $element2) {
    echo 'Ok';
} else {
    echo 'Pas ok';
}

echo '<br>= : donner une valeur à un élément';
echo '<br> == : comparer des éléments -> même valeur';
echo '<br> === : comparer des éléments -> même valeur et même type';
?>

<?php
/* tableaux */
$tab = array(); /* déclaration d'un tableau vide : forme 1 */
$tab = []; /* déclaration d'un tableau vide : forme 2 */

$tab = [3, 'toto', 2.5]; /* tableau rempli */
echo '<br>';
echo '<br>';
echo $tab[1]; /* affiche un élément du tableau */
$tab[5] = "titi"; /* rajout d'une valeur dans la 6ème cellule */
$tab[] = "bonjour"; /* rajout d'un élément à la suite */

print_r($tab); /* affiche le tableau */
var_dump($tab); /*affiche le contenu de la variable + son type */
?>

<?php

for ($i = 0; $i < count($tab); $i++) {
    echo "<br> élément dont l'index est " . $i . " = " . $tab[$i];
}

/* la boucle FOR, dans ce cas n'est pas pertinente car on a des index manquants, à utiliser quand on connaît le nb de tours */

foreach ($tab as $index => $valeur) { /* for each = pour chaque */
    echo "<br> élément dont l'index est " . $index . " = " . $valeur;
}

/* tableau associatif */

$tab = []; /* déclaration d'un tableau vide */
$tab["prenom"] = "Arnaud";
$tab["nom"] = "Degrave";
$tab["âge"] = 35;

echo "<br>";
foreach ($tab as $index => $valeur) {
    echo $index . " = " . $valeur . "<br>";
};

?>