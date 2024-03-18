<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin_form.css">
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