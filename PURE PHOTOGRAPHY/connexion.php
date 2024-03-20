<?php

session_start();

$host = "localhost";
$dbname = "pure-photography";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// vérifier si l'utilisateur est un admin

$username = $_POST['user'];
$password = $_POST['password'];

try {
    $stmt = $conn->prepare("SELECT * FROM admin WHERE NomUtilisateur = :username AND MDP = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $rowCount = $stmt->rowCount();

    if ($rowCount > 0) {
        // l'utilisateur est un admin
        header("Location: admin_contenu.php");
        exit;
    } else {
        // l'utilisateur n'est pas un admin
        echo "Identifiants invalides, veuillez réessayer.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
