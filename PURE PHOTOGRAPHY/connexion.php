<?php

session_start();

$host = "localhost";
$dbname = "pure-photography";
$username = "root";
$password = "";

$utilisateur = "new_admin";
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

        // accès autorisé
    } else {

        // mdp incorrect
        echo "Mot de passe incorrect";
    }
}

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {

    // rediriger vers l'espace admin

    header("Location: admin_space.php");
}
