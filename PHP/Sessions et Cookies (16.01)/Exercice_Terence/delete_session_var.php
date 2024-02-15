<?php

session_start();
unset($_SESSION["username"]);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP : Les sessions & cookies</title>
</head>
<body>

    <?php
    if(isset($_SESSION["username"])){
        echo "Bonjour,". $_SESSION["username"];
    } else {
    echo "Erreur : aucun utilisateur enregistré.";
    }
    ?>

</body>
</html>