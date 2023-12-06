<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $civilite = $_POST["civilite"];
    $nom = $_POST["user_name1"];
    $prenom = $_POST["user_name2"];
    $dateNaissance = $_POST["user_date"];
    $numRue = $_POST["numRue"];
    $rue = $_POST["rue"];
    $codePostal = $_POST["code-postal"];
    $ville = $_POST["ville"];
    $situationFamiliale = $_POST["situationFamiliale"];
    $dateDebut = $_POST["dateDebut"];
    $dateFin = $_POST["dateFin"];
    $mineur = $_POST["mineur"];
    $majeur = $_POST["majeur"];
    $parent = $_POST["parent"];
    $handicap = $_POST["handicap"];
    $email = $_POST["user_email"];
    $phone = $_POST["phone"];

    // Construction du corps du mail
    $message = "Civilité: $civilite\n";
    $message .= "Nom: $nom\n";
    $message .= "Prénom: $prenom\n";
    $message .= "Date de naissance: $dateNaissance\n";
    $message .= "Adresse: $numRue $rue, $codePostal $ville\n";
    $message .= "Situation familiale: $situationFamiliale\n";
    $message .= "Date de début: $dateDebut\n";
    $message .= "Date de fin: $dateFin\n";
    $message .= "Enfant mineur: $mineur\n";
    $message .= "Enfant majeur: $majeur\n";
    $message .= "Parent à charge: $parent\n";
    $message .= "Cause de handicap: $handicap\n";
    $message .= "Email: $email\n";
    $message .= "Téléphone: $phone\n";

    // Envoyer l'e-mail
    $to = "acf2l@hotmail.com"; // Remplacer par notre adresse e-mail
    $subject = "Formulaire d'inscription - Récapitulatif";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "L'e-mail a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi de l'e-mail.";
    }
}
?>
