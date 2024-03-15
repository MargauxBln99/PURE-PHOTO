<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // adresse e-mail professionnelle de destination
    $adresseProfessionnelle = "nehlidiagaming@gmail.com";

    // sujet de l'e-mail
    $sujet = "Nouveau message de contact";

    // créer le corps de l'e-mail
    $corpsEmail = "Vous avez reçu un nouveau message de contact :\n\n";
    $corpsEmail .= "Nom : $nom\n";
    $corpsEmail .= "Prénom : $prenom\n";
    $corpsEmail .= "E-mail : $email\n";
    $corpsEmail .= "Message : $message\n";

    // en-tête de l'e-mail
    $header = "De : $email" . "\r\n";

    // envoyer l'e-mail
    mail($adresseProfessionnelle, $sujet, $corpsEmail, $headers);

    // afficher un message de succès
    echo "Merci ! Votre message a été envoyé avec succès.";
}
