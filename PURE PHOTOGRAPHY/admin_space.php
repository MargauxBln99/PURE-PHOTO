<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin_space.css">
    <link rel="stylesheet" href="styles/footer.css" />
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet" />
    <title>Espace administrateur</title>
</head>

<body>
    <div class="header">
        <div class="home-icon">
            <a href="index.html"><img alt="home" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAsMCwyNTYsMjU2IgpzdHlsZT0iZmlsbDojMDAwMDAwOyI+CjxnIGZpbGw9IiM1YjUzNTIiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxnIHRyYW5zZm9ybT0ic2NhbGUoNS4xMiw1LjEyKSI+PHBhdGggZD0iTTI0Ljk2Mjg5LDEuMDU0NjljLTAuMjA5ODcsMC4wMDcyNCAtMC40MTIxNCwwLjA4MDM2IC0wLjU3ODEyLDAuMjA4OThsLTIzLDE3Ljk0NzI3Yy0wLjQzNTc5LDAuMzM5NzggLTAuNTEzNjEsMC45Njg1MSAtMC4xNzM4MywxLjQwNDNjMC4zMzk3OCwwLjQzNTc5IDAuOTY4NTEsMC41MTM2MSAxLjQwNDMsMC4xNzM4M2wxLjM4NDc3LC0xLjA4MDA4djI2LjI5MTAyYzAuMDAwMDYsMC41NTIyNiAwLjQ0Nzc0LDAuOTk5OTQgMSwxaDEzLjgzMjAzYzAuMTA3OTksMC4wMTc4NSAwLjIxODE4LDAuMDE3ODUgMC4zMjYxNywwaDExLjY3MzgzYzAuMTA3OTksMC4wMTc4NSAwLjIxODE4LDAuMDE3ODUgMC4zMjYxNywwaDEzLjg0MThjMC41NTIyNiwtMC4wMDAwNiAwLjk5OTk0LC0wLjQ0Nzc0IDEsLTF2LTI2LjI5MTAybDEuMzg0NzcsMS4wODAwOGMwLjI4MTksMC4yMTk4MyAwLjY1OTY3LDAuMjcyNTcgMC45OTEsMC4xMzgzM2MwLjMzMTMzLC0wLjEzNDIzIDAuNTY1ODYsLTAuNDM1MDQgMC42MTUyNiwtMC43ODkxYzAuMDQ5NCwtMC4zNTQwNiAtMC4wOTM4NiwtMC43MDc1NyAtMC4zNzU3OSwtMC45MjczNmwtNy42MTUyMywtNS45NDE0MXYtNy4yNjk1M2gtNnYyLjU4NTk0bC05LjM4NDc3LC03LjMyMjI3Yy0wLjE4NjA3LC0wLjE0NDI4IC0wLjQxNzA3LC0wLjIxODI4IC0wLjY1MjM0LC0wLjIwODk4ek0yNSwzLjMyMjI3bDE5LDE0LjgyNjE3djI2Ljg1MTU2aC0xMnYtMTloLTE0djE5aC0xMnYtMjYuODUxNTZ6TTM3LDhoMnYzLjcwODk4bC0yLC0xLjU2MjV6TTIwLDI4aDEwdjE3aC0xMHoiPjwvcGF0aD48L2c+PC9nPgo8L3N2Zz4=" /></a>
        </div>
        <h1>Espace Administrateur</h1>
    </div>

    <h2>Ajouter du contenu</h2>
    <form action="admin_space.php" method="POST" class="form_content" enctype="multipart/form-data">
        <label for="titre">Titre : </label>
        <input type="text" name="titre" id="titre" required><br>

        <label for="contenu">Contenu : </label>
        <div class="file_input">
            <input type="file" name="fichier" id="fichier" required>
            <label for="fichier" class="file_label">Choisir un fichier</label>
        </div>
        <input type="submit" name="ajouter_contenu" value="Ajouter">
    </form>

    <h2>Supprimer du contenu</h2>
    <form action="admin_space.php" method="POST" class="form_content">
        <label for="id_contenu">ID du contenu : </label>
        <input type="text" name="id_contenu" id="id_contenu" required><br>

        <input type="submit" name="supprimer_contenu" value="Supprimer">
    </form>
    <br>
    <br>
    <br>
    <br>
    <footer class="footer-container">
        <p>&copy; Pure Photography - Tous droits réservés</p>
    </footer>

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