<?php
    define ("PFC", ["Pierre", "Feuille", "Ciseaux"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierre Feuile Ciseaux</title>
    <style>
    * {
        font-family: system-ui;
    }
    #button {
        width : 100px;
    }
</style>
</head>

<body>
<!-- Pierre Feuille Ciseaux -> constante
        
Choix joueur 1 -> formulaire
Choix jouer 2 -> rand / index

Pierre gagne Ciseaux
Ciseaux gagne Feuille
Feuille gagne Pierre -->
<?php
if ($_SERVER ["REQUEST_METHOD"]==="POST") { 
$joueur = $_POST ["jeu"];
$ordi = PFC [rand(0,2)];
}
?>

<form method="POST">
    <input type="radio" id="choix0" name="jeu" value="Pierre">
    <label for="choix0">Pierre</label><br>
    <input type="radio" id="choix1" name="jeu" value="Feuille">
    <label for="choix1">Feuille</label><br>
    <input type="radio" id="choix2" name="jeu" value="Ciseaux">
    <label for="choix2">Ciseaux</label><br>
    <input type="submit" id="button" value="Jouer">
</form>

<?php
    echo "L'ordinateur a joué : ".$ordi."<br>";
    if (($joueur == "Pierre" && $ordi == "Feuille") 
      || ($joueur == "Feuille" && $ordi == "Ciseaux")
      || ($joueur == "Ciseaux" && $ordi == "Pierre")) {
       echo "L'ordinateur a gagné ! "."<br>";
} elseif (($joueur == "Feuille" && $ordi == "Pierre")
        || ($joueur == "Ciseaux" && $ordi == "Feuille")
        || ($joueur == "Pierre" && $ordi == "Ciseaux")) {
         echo "Vous avez gagné ! "."<br>";
} else {
    echo "Egalité "."<br>";
}
?>


</body>
</html>