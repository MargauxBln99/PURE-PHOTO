<?php

session_start();

$host = "localhost";
$dbname = "pure-photography";
$username = "root";
$password = "";

$utilisateur = "NomUtilisateur";
$mdp = "MDP";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// vérifier si l'utilisateur est un admin

$username = $_POST['user'];
$password = $_POST['password'];

$verif = "SELECT * FROM admin WHERE NomUtilisateur = '$username' AND MDP = '$password'";
$result = $conn->query($verif);

if ($result->num_rows > 0) {
    // l'utilisateur est un admin
    header("Location: admin_space.php");
} else {
    // l'utlisateur n'est pas un admin
    echo "Identifiants invalides, veuillez réessayer.";
}

$conn->close();
