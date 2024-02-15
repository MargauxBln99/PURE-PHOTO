<?php

// Exercice 1 : Validation d'une adresse email
// Objectif : écrire une fonction PHP qui valide si une adresse email est correcte en utilisant une expression régulière

// Instructions : 
// - créez un formulaire HTML simple, avec un champ de saisie pour l'adresse email
// - utilisez PHP pour récupérer la valeur soumise
// - appliquez une expression régulière pour valider si l'adresse email est correcte
// - affichez un message approprié selon si l'adresse est valide ou non

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'adresse e-mail</title>
</head>

<body>

    <form method="post" action="">
        <label for="email">Adresse e-mail </label>
        <input type="text" id="email" name="email" required>
        <input type="submit" value="Vérifier">
    </form>

    <?php

    // on vérifie que le champ email est soumis et présent dans $_POST 

    if (!empty($_POST['email'])) {
        if (preg_match('^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-.]+\.[a-zA-Z]+$', $_POST['email'])) {
            echo "L'adresse email est correcte.";
        } else {
            echo "L'adresse email est incorrecte.";
        }
    }
    ?>

</body>

</html>

<?php

// Exercice 2 : recherche de noms dans une base de données
// Objectif : écrire un script PHP qui intéragit avec une base de données à l'aide de PDO pour rechercher des noms correspondant des noms correspondant à un modèle spécifique

// Instructions : 
// - créez une base de données simple avec une table contenant des noms
// - écrivez un formulaire HTML avec un champ de saisie pour le modèle de recherche
// - utilisez PHP et PDO pour interroger la base de données en utilisant une expression régulière pour trouver des noms correspondant au modèle
// - affichez les résultats

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Recherche de noms </title>
</head>

<body>
    <form action="" method="post">
        <label for="prenom">Chercher un utilisateur par son prénom : </label>
        <input type="text" name="prenom" id="prenom" required>
        <input type="submit" value="Rechercher">
    </form>

    <?php

    function connect()
    {
        $servername = 'localhost';
        $dbname = 'test';
        $username = 'root';
        $password = '';
        $dsn = 'mysql:host=$username;dbname=$dbname';
        $conn = new PDO($dsn, $username, $password);
        return $conn;
    }

    // on vérifie que le champ prénom est soumis et présent dans $_POST 

    if (!empty($_POST['prenom'])) {
        if (preg_match('^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-.]+\.[a-zA-Z]+$', $_POST['prenom'])) {
            $db = connect();
            $query = $db->prepare("SELECT * FROM produits WHERE prenom = :prenom");
            $query->execute(
                [":prenom" => $_POST['prenom'],]
            );
            $datas = $query->fetchAll(); // on récupère plusieurs lignes
            $nb_datas = count($datas);
            echo "Il y a '.$nb_datas.' résultats<br>";
            if ($nb_datas > 0) {
                foreach ($datas as $data) {
                    echo "Le prénom est : " . $data['prenom'] . "<br>";
                }
            }
        } else {
            echo "Prénom incorrect : le prénom doit comporter uniquement des lettres.";
        }
    }
    ?>
</body>

</html>

<?php

// Exercice 3 : validation d'un numéro de téléphone
// Objectif : créer une fonction en PHP qui valide si un numéro de téléphone est correct en utilisant une expression régulière

// Instructions :
// - créez un formulaire HTML avec un champ de saisie pour le numéro de téléphone
// - utilisez PHP pour récupérer la valeur soumise
// - appliquez une expression régulière pour valider si le numéro de téléphone est correct
// - affichez un message approprié selon si le numéro est valide ou non

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Validation d'un numéro de téléphone </title>
</head>

<body>
    <form action="" method="">
        <label for="tel"> Téléphone : </label>
        <input type="text" name="tel" id="tel" required>
        <input type="submit" value="Envoyer">
    </form>

    <?php

    if (!empty($_POST['tel'])) {
        if (preg_match('^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-.]+\.[a-zA-Z]+$', $_POST['email'])) {
            echo "Téléphone correct.";
        } else {
            echo "Téléphone incorrect.";
        }
    }
    ?>
</body>

</html>

<?php

// Exercice 4 : Filtrage de mots interdits dans une base de données
// Objectif : écrire un script PHP qui utilise PDO pour intéragir avec une base de données et filtrer des mots interdits dans une liste de commentaires

// Instructions : 
// - créez une base de données avec une table pour stocker des commentaires
// - ajoutez un formulaire HTML avec un champ de saisie pour les commentaires
// - utilisez PHP et PDO pour insérer les commentaires dans la base de données
// - appliquez une expression régulière pour filtrer les mots interdits avant l'insertion
// - affichez les commentaires filtrés

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Filtrage de mots interdits </title>
</head>

<body>
    <h2> Poster un commentaire </h2>
    <form action="" method="post">
        <label for="nom"> Nom : </label>
        <input type="text" name="nom" id="nom" required>
        <label for="commentaire"> Commentaire : </label>
        <textarea name="commentaire" id="commentaire"></textarea>
        <input type="submit" value="Envoyer">
    </form>

    <?php

    function connect2()
    {
        $servername = 'localhost';
        $dbname = 'test';
        $username = 'root';
        $password = '';
        $dsn = "mysql:host=$servername;dbname=$dbname";
        $conn = new PDO($dsn, $username, $password);
        return $conn;
    }

    //on vérifie que $_POST existe et n'est pas vide

    if (!empty($_POST)) {
        if (!empty($_POST['nom']) && !empty($_POST['commentaire'])) {
            if (!preg_match('(connard|salope)', $_POST['commentaire'])) {
                $db = connect2();
                $query = $db->prepare("INSERT INTO categories (nom, commentaire) VALUES (:nom, :commentaire)");
                $resultat = $query->execute(
                    [
                        ":nom" => $_POST['nom'],
                        ":commentaire" => $_POST['commentaire']
                    ]
                );
                if ($resultat) echo 'Commentaire ajouté avec succès';
                else echo 'Erreur lors de l\'ajout du commentaire';
            } else {
                echo 'Attention : utilisation de mots interdits.';
            }
        } else {
            echo 'Attention : le nom et le commentaire sont deux champs obligatoires';
        }
    }
    ?>

</body>

</html>