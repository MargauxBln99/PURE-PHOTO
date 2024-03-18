<?php

$host = "localhost";
$dbname = "pure-photography";
$username = "root";
$password = "";

$utilisateur = "admin";
$mdp = "password";

$connexion = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_error()) {
    echo "Echec de la connexion à la base de données : " . mysqli_connect_error();
    exit();
}

// vérifier si l'admin existe

$requeteExist = "SELECT * FROM admin WHERE NomUtilisateur = ?";
$stmtExist = mysqli_prepare($connexion, $requeteExist);
mysqli_stmt_bind_param($stmtExist, "s", $utilisateur);
mysqli_stmt_execute($stmtExist);
$resultatExist = mysqli_stmt_get_result($stmtExist);

if ($resultatExist && mysqli_num_rows($resultatExist) > 0) {

    // utilisateur trouvé
    $row = mysqli_fetch_assoc($resultatExist);

    // vérifier le mdp
    if (password_verify($mdp, $row['password'])) {

        // retour à la page de connexion si "retour"
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {

        // mdp incorrect
        echo "Mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet" />
    <title>Espace administrateur</title>
</head>

<body>
    <h1>Espace Admin</h1>

    <form action="connexion.php" method="POST" class="connexion_form">
        <label for="user">Utilisateur :</label>
        <input type="text" name="user" id="user" required><br />
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="password" id="password" required /><br />
        <input type="submit" value="Connexion" />
    </form>
</body>

</html>