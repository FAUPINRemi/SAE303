<?php


// Paramètres de connexion à la base de données
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "acf2l";

// Connexion à la base de données
try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    // Configuration de PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    die();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire de réservation ULM
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $activites = $_POST["activites"];

    // Construction du corps du mail de réservation
    $message = "Nom : $nom\n";
    $message .= "Email : $email\n";
    $message .= "Activités réservées :\n";

    // Ajouter chaque activité sélectionnée
    foreach ($activites as $activite) {
        $message .= "- $activite\n";
    }

    // Envoyer l'e-mail de réservation
    $to = "acf2l@hotmail.com"; // Remplacer par notre adresse e-mail
    $subject = "Demande de réservation ULM - Récapitulatif";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "L'e-mail de réservation a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi de l'e-mail de réservation.";
    }
}
?>
