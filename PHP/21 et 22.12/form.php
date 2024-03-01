<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires</title>
</head>
<body>

<h1>Exemple formulaire et PHP</h1>

<h2>Superglobals:</h2>
$_REQUEST:
<?php print_r($_REQUEST)?>
<br>
$_GET:
<?php print_r($_GET)?>
<br>
$_POST:
<?php print_r($_POST)?>
<br>
<?php
$mavariable = "test";
print_r($GLOBALS);

$GLOBALS ["mavariable"] = "toto";
$mavariable = "toto";
?>

<h2>Forms:</h2>
<form method="GET" action="action.php">
GET Form: <input type="text" name="get_name">
<input type="submit" value="Submit GET">
</form>

<!--ajouter dans form l'attribut enctype="multipart/form-data" ajouter un input de type file-->

<form method="post" enctype="multipart/form-data" action="action_test.php">
POST Form: <input type="text" name="post_name">
<input type="file" name="fichier">
<?php
print_r($_FILES);
?>

<!--ajouter un input de type file-->
<input type="submit" value="Submit POST">
</form>
<a href="index.php">Reset</a>

<!-- $_SESSION -->
<br>
<br>
<?php
session_start();
print_r($_SESSION);
$_SESSION["nom"] = "Toto";
print_r($_SESSION);
?>

</body>
</html>