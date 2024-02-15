<h1>LES PDG DES PLUS GRANDES ENTREPRISES DE LA TECH</h1>
<h2>Ajouter une nouvelle personne</h2>
<br>

<?php
if (!empty($_POST)) {

    //instructions
    if (empty($_POST['nom'])) {
        echo '- Nom manquant ! <br>';
    }

    if (empty($_POST['prenom'])) {
        echo '- Prénom manquant ! <br>';
    }

    if (empty($_POST['date_naissance'])) {
        echo '- Date de naissance manquante ! <br>';
    }

    if (empty($_POST['entreprise'])) {
        echo '- Entreprise manquante ! <br>';
    }

    // faire appel à addPerson si PAS D'ERREUR (tous les champs sont remplis)

    if ($error) {
        if (addPerson($_POST['prenom'], $_POST['nom'], $_POST['date_naissance'], $_POST['entreprise'], 'photo_1.jpg')) {
            echo 'Utilisateur enregistré avec succès';
        } else {
            echo 'Erreur lors de l\'enregistrement';
        }
    }
}

?>


<form action="" method="post">
    <label for="nom"> Nom : </label>
    <input type="text" name="nom" id="nom" value="<?php if (!empty($_POST['nom'])) echo $_POST['nom']; ?>">

    <label for="prenom"> Prénom : </label>
    <input type="text" name="prenom" id="prenom" value="<?php if (!empty($_POST['prenom'])) echo $_POST['prenom']; ?>">

    <label for="naissance"> Date de naissance : </label>
    <input type="text" name="date_naissance" id="naissance" value="<?php if (!empty($_POST['date_naissance'])) echo $_POST['date_naissance']; ?>">

    <label for="entreprise"> Entreprise : </label>
    <input type="text" name="entreprise" id="entreprise" value="<?php if (!empty($_POST['entreprise'])) echo $_POST['entreprise']; ?>">

    <input type="submit" value="Envoyer">
</form>
<br>
<br>

<?php

// Ajout d'une nouvelle personne - appel de la fonction

addPerson('Steve', 'Jobs', '24/02/1955', 'Apple', 'photo_3.jpg');
addPerson('Jeff', 'Bezos', '12/01/1964', 'Amazon', 'photo_4.jpg');
addPerson('Mark', 'Zuckerberg', '14/01/1984', 'Facebook', 'photo_5.jpg');
addPerson('Elon', 'Musk', '28/03/1971', 'Tesla', 'photo_6.jpg');

?>

<h2>Liste des personnes</h2>
<div class="row">

    <?php foreach ($persons as $person) { ?>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="img/photo_1.jpg" class="card-img-top" alt="Photo de <?php echo $person['nom'] . ' ' . $person['prenom']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $person['prenom'] . ' ' . $person['nom']; ?></h5>
                    <p class="card-text">Né le <?php echo $person['date_naissance']; ?><br> Poste : CEO chez <?php echo $person['entreprise']; ?></p>
                </div>
            </div>
        </div>
    <?php } ?>

</div>