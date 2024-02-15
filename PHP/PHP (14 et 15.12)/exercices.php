<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traduction Exercices</title>
    <style>
    * {
        font-family: system-ui;
    }
</style>
</head>
<body>

<h4> Exercice 4 </h4>
<?php
$nombre1;
$operateur;
$nombre2;

echo "Saisir un nombre :"."<br>";
$nombre1 = 5;

echo "Ecrire en toutes lettres, l'opération voulue dans la liste suivante : multiplication, addition, soustraction, division"."<br>";
$operateur = "soustraction";

echo "Saisir un autre nombre :"."<br>";
$nombre2 = 2;

switch ($operateur) {
    case "multiplication":
        echo "Voici le résultat : ".($nombre1 * $nombre2);
    break;
    case "addition":
        echo "Voici le résultat : ".($nombre1 + $nombre2);
    break;
    case "soustraction":
        echo "Voici le résultat : ".($nombre1 - $nombre2);
    break;
    case "division":
        echo "Voici le résultat : ".($nombre1 / $nombre2);
    break;
    };
?>

<h4> Exercice 5 </h4>
<?php
echo "Saisissez un chiffre : "."<br>";
$x = 10;
if ($x < 15) {
    echo ("La valeur ".$x." est : ".$x*2);
} elseif ($x > 15) {
    echo ("La valeur ".$x." est : ".$x*4);
} else 
echo ("La valeur n'est pas bonne");
?>

<h4> Multiple de 33 entre 0 et 100 </h4>
<?php
$n = 1;
while ($n <= 100) {
    if ($n % 33 == 0) echo $n." ";
    $n++;
}
?>

<h4> Plante </h4>
<p> Une plante grandit de 1cm par jour. Elle est mature et produit des fruits à partir de 30cm.<br>
Afficher sa taille jusqu'à sa maturité et avertir quand elle est productive </p>
<?php
$plante = 0;
while ($plante < 30) {
    echo "La plante mesure ".($plante+1)." cm"."<br>";
    $plante++;
}
    echo "La plante est arrivée à maturité";
?>

<h4> Compte à rebours </h4>
<p>Écrire un compte à rebours à partir de 10 qui fini par "À vos marques, Prêt, Partez !"</p>
<?php
$compteur = 10;
while ($compteur > 1) {
    echo ($compteur - 1)."<br>";
    $compteur--;
}
    echo "A vos marques... Prêt... Partez!";
?>

<h4> Tableau des jours </h4>
<?php
$days = 
["Lundi" => "Monday",
"Mardi" => "Thursday",
"Mercredi" => "Wenesday",
"Jeudi" => "Tuesday",
"Vendredi" => "Friday",
"Samedi" => "Saturday",
"Dimanche" => "Sunday"];

foreach ($days as $day => $jour) {
    echo "$day se dit $jour en anglais";
};

?>

<h4> 

<h4> Exercice Fizz Buzz </h4>
<p> C'est une question fréquente d'entretien pour développeur
    Faire un code qui écrit les nombres de 1 à 100 inclus sauf dans ces cas : 
<ul>
    <li>Si le nombre est un multiple de 3, écrire Fizz</li>
    <li>Si le nombre est un multiple de 5, écrire Buzz</li>
    <li>Si le nombre est un multiple de 3 et de 5, écrire FizzBuzz</li>
</ul>

<?php
$n = 10;
while ($n <= 50) {
    if (($n % 3 == 0) & ($n % 5 == 0)) {
        echo "FizzBuzz ";
    }
    elseif ($n % 3 == 0) {
        echo "Fizz ";
    } elseif ($n % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $n." ";
    }
    $n++;
}
?>

<h4> Menu des délices </h4>
<p> On veut créer un menu en HTML pour le café des délices. Il y aura 2 sections : les boissons et les pâtisseries.
    Chaque boissons à un prix unique mais toutes les pâtisseries sont au même prix.
    Les boissons et pâtisseries seront stockées dans des tableaux.
    Chaques sections sera composée d'une liste réalisée avec une boucle FOREACH pour les boissons et FOR pour les pâtisseries.</p>
<?php
$boissons = [
    "Eau" => "1€",
    "Thé" => "1.50€",
    "Soda" => "2€",
];

foreach ($boissons as $boisson => $prix) {
    echo "<li>$boisson - $prix</li>";
};

$patisseries = [
    "Croissant" => "1€",
    "Pain au chocolat" => "1€",
    "Muffin" => "1€",
];
?>

<h4> Magic 8 Ball </h4>

<?php
switch (rand(1, 20)) {
    case 1:
        $phrase = "C'est certain";
    break;
    case 2:
        $phrase = "C'est complètement ça";
    break;
    case 3:
        $phrase = "Sans aucun doute";
    break;
    case 4:
        $phrase = "Oui, vraiment";
    break;
    case 5:
        $phrase = "Tu peux compter dessus";
    break;
    case 6:
        $phrase = "Augure favorable";
    break;
    case 7:
        $phrase = "Très probablement";
    break;
    case 8:
        $phrase = "Ça m'a l'air de bien se présenter";
    break;
    case 9:
        $phrase = "Oui";
    break;
    case 10:
        $phrase = "Les signes indiquent que oui";
    break;
    case 11:
        $phrase = "La réponse est floue, essaye encore";
    break;
    case 12:
        $phrase = "Redemande plus tard";
    break;
    case 13:
        $phrase = "Il ne vaut mieux pas que je réponde tout de suite";
    break;
    case 14:
        $phrase = "Impossible à prévoir pour l'instant";
    break;
    case 15:
        $phrase = "Concentre toi et redemande";
    break;
    case 16:
        $phrase = "Ne compte pas dessus";
    break; 
    case 17:
        $phrase = "Ma réponse est non";
    break;
    case 18:
        $phrase = "Mes sources disent non";
    break;
    case 19:
        $phrase = "Ça ne se présente pas bien";
    break;
    case 20:
        $phrase  ="Très peu probable";
} echo $phrase;
?>

<h4> TP Variables </h4>
<?php
$riel = 2105943;
$kyat = 19098;
$krone = 109;
$lek = 9038;

$riel_en_euros = $riel * 0.00022;
$kyat_en_euros = $kyat * 0.00044;
$krone_en_euros = $krone * 0.095;
$lek_en_euros = $lek * 0.0097;

echo "Montant en riels : ".$riel."<br>";
echo "Montant en kyats : ".$kyat."<br>";
echo "Montant en krones : ".$krone."<br>";
echo "Montant en leks : ".$lek."<br>";

echo "Riels convertis en euros : ".$riel_en_euros."€ "."<br>";
echo "Kyats convertis en euros : ".$kyat_en_euros."€ "."<br>";
echo "Krones convertis en euros : ".$krone_en_euros."€ "."<br>";
echo "Leks convertis en euros : ".$lek_en_euros."€ "."<br>";

$montant_final = $riel_en_euros + $kyat_en_euros + $krone_en_euros + $lek_en_euros - 4;
echo "Montant final : ".$montant_final."€";
?>

<h4> Laboratoire d'ADN </h4>
<?php
$resultats = [20, 23, 53];
[$sim, $age1, $age2] = $resultats;
if ($sim < 1) {
	echo "non génétiquement reliés";
} elseif ($sim < 3) {
	echo "cousins 1er degré";
} elseif ($sim < 6) {
	echo "cousins 2nd degré";	
} elseif ($sim < 14) {
	echo "cousins germains";	
} elseif ($sim < 35) {
	if (abs($age1-$age2)>40) echo "gd parents/ptt enfants";
	elseif (abs($age1-$age2)>20) echo "oncles - tantes/ neveux - nièces";
	else echo "1/2 frères et soeurs";	
} elseif ($sim < 100) {
	if (abs($age1-$age2)>20) echo "parents/enfants";
	else echo "frères et soeurs";	
} else {
	echo "jumeaux";
}
?>

<h4> Saisons </h4>
<?php

$mois = date("F");

// avec SWITCH //

switch ($mois) {
    case "Décembre":
    case "Janvier":
    case "Février":
        echo "Hiver";
    case "Mars":
    case "Avril":
    case "Mai":
        echo "Printemps";
    case "Juin":
    case "Juillet":
    case "Août":
        echo "Eté";
    case "Septembre":
    case "Octobre":
    case "Novembre":
        echo "Automne";
        break;
    default : echo "Êtes-vous sûr que c'est un mois ?";
}
?>

<?php

// avec MATCH //

echo match ($mois) {
    "Décembre", "Janvier", "Février" => "Hiver",
    "Mars", "Avril", "Mai" => "Printemps",
    "Juin", "Juillet", "Août" => "Eté",
    "Septembre", "Octobre", "Novembre" => "Automne",
    default => "Êtes-vous sûr que c'est un mois ?",
};
?>

<h4> Tables de multiplication </h4>
<?php
$nb = 4;
echo "Table de " . $nb . " : " . "<br>";

for ($i = 1; $i <= 10; $i++) {
    $resultat = $nb * $i;
    echo $nb . " x " . $i . " = " . $resultat . "<br>";
}
?>

</body>
</html>