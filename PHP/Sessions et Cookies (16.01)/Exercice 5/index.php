<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice n°5</title>
    <link rel=stylesheet href=style.css>
</head>
<body>
<fieldset>
<form method="post" action="index.php">
    <label for="username">Nom : </label>
    <input type="text" name="username">
        <br>
    <label for="password">Mot de passe : </label>
    <input type="password" name="password">
        <br>
    <input type="submit">
</form>
</fieldset>

<?php

if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        $_SESSION["login"] = $_POST["username"];
        header("location: info.php");
    }
}

?>
    
</body>
</html>