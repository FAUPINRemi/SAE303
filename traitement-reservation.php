
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="formulaire col-md-3 mt-5 mx-auto  text-white p-3">
        Merci d'avoir reservé, un récapitulatif vous a été envoyer par mail.
    </div>
</body>
</html>




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
