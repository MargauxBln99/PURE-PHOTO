<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/styles_recherche.css" />
    <title>Recherche d'annonces</title>
</head>

<body>
    <h1>Recherche d'annonces</h1>

    <nav>
        <ul class="menu">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="categories.php">Catégories</a></li>
            <li><a href="#">Recherche</a></li>
            <li><a href="#">Mon Compte</a></li>
            <li><a href="#">Ajouter une annonce</a></li>
        </ul>
    </nav>
    <br />

    <div class="search-container">
        <form action="recherche.php" method="GET">
            <input type="text" name="keywords" placeholder="Mots-clés" />
            <button type="submit">Rechercher</button>
        </form>

        <?php

        function effectuerRechercheAnnonces($keywords)
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_annonces";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Erreur de connexion à la base de données : " . $conn->connect_error);
            }

            $keywords = $conn->real_escape_string($keywords);

            $sql = "SELECT * FROM annonces WHERE titre LIKE '%$keywords%' OR description LIKE '%$keywords%'";

            $result = $conn->query($sql);

            $results = array();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $annonce = array(
                        'titre' => $row['titre'],
                        'image' => $row['image'],
                        'description' => $row['description']
                    );
                    $results[] = $annonce;
                }
            }

            $conn->close();

            return $results;
        }
        ?>

        <?php

        if (isset($_GET['keywords'])) {
            $keywords = $_GET['keywords'];

            $results = effectuerRechercheAnnonces($keywords);

            if (count($results) > 0) {
                echo "<h2>Résultats de la recherche :</h2>";

                foreach ($results as $annonce) {
                    echo "<div class='annonce'>";
                    echo "<h3>" . $annonce['titre'] . "</h3>";
                    echo "<img src='" . $annonce['image'] . "' alt='Image' />";
                    echo "<p>" . $annonce['description'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Aucun résultat trouvé pour les mots-clés : " . $keywords . "</p>";
            }
        }
        ?>

    </div>

    <!-- afficher les résultats de la recherche ici -->

    <footer>
        <p>&copy; 2024 Margaux BALIN</p>
    </footer>
</body>

</html>