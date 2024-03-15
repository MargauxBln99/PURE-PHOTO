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
        <label for="user">Utilisateur : </label>
        <input type="text" name="user" id="user" required><br />
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="password" id="password" required /><br />
        <input type="submit" value="Connexion" />
    </form>
</body>

</html>

<?php

$host = "localhost";
$dbname = "test";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Echec de la connexion à la base de données");
}
?>

<?php

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["role"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "Aucun utilisateur n'est enregistré.";
}
?>