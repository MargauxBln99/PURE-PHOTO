<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin_space.css">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet" />
    <title>Espace administrateur</title>
</head>

<body>
    <h1>Espace Admin</h1>

    <h2>Ajouter du contenu</h2>
    <form action="admin_space.php" method="POST" class="form_content">
        <label for="titre">Titre : </label>
        <input type="text" name="titre" id="titre" required><br>

        <label for="contenu">Contenu : </label>
        <textarea name="contenu" id="contenu" required></textarea><br>

        <input type="submit" name="ajouter_contenu" value="Ajouter">
    </form>

    <h2>Supprimer du contenu</h2>
    <form action="admin_space.php" method="POST" class="form_content">
        <label for="id_contenu">ID du contenu : </label>
        <input type="text" name="id_contenu" id="id_contenu" required><br>

        <input type="submit" name="supprimer_contenu" value="Supprimer">
    </form>

</body>

</html>

<?php

$host = "localhost";
$dbname = "pure-photography";
$username = "root";
$password = "";

$connexion = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_error()) {
    echo "Echec de la connexion à la base de données : " . mysqli_connect_error();
    exit();
}

// traitement du formulaire d'ajout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter_contenu'])) {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    $queryInsert = "INSERT INTO contenu (TitreContenu, Contenu) VALUES (?, ?)";
    $statementInsert = mysqli_prepare($connexion, $queryInsert);
    mysqli_stmt_bind_param($statementInsert, "ss", $titre, $contenu);

    if (mysqli_stmt_execute($statementInsert)) {
        // réussite
        header("Location: admin_space.php");
        exit();
    } else {
        // échec
        echo "Erreur lors de l'ajout du contenu : " . mysqli_error($connexion);
    }
}

// traitement du formulaire de suppression
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['supprimer_contenu'])) {
    $idContenu = $_POST['contenu'];

    $querySuppression = "DELETE FROM contenu WHERE id = ?";
    $statementSuppression = mysqli_prepare($connexion, $querySuppression);
    mysqli_stmt_bind_param($statementSuppression, "i", $idContenu);

    if (mysqli_stmt_execute($statementSuppression)) {
        // réussite
        header("Location: admin_space.php");
        exit();
    } else {
        // échec
        echo "Erreur lors de la suppression du contenu : " . mysqli_error($connexion);
    }
}

mysqli_close($connexion);
?>