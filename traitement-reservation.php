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


    <div class="formulaire col-md-3 mt-5 mx-auto  text-white p-5">
        Merci d'avoir réservé, un récapitulatif vous a été envoyé par mail.
    </div>
<div class="mx-auto text-center">
    <a href="indexconnecte.php"><button class="btn btn-outline-light mx-auto">Retour à la page d'accueil</button></a>
    </div>
</body>
</html>

<?php
// Paramètres de connexion à la base de données
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "acf2l"; // Nom de la base de données
$table_name = "reservations"; // Nom de la table

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

    // Vérifier si des activités sont cochées
    $vol_initiation = isset($_POST["vol_initiation"]) ? 1 : 0;
    $cours_pilotage = isset($_POST["cours_pilotage"]) ? 1 : 0;
    $balade_aerienne = isset($_POST["balade_aerienne"]) ? 1 : 0;
    $formation_pilote = isset($_POST["formation_pilote"]) ? 1 : 0;

    // Date de réservation (à adapter selon votre formulaire)
    $date_reservation = $_POST["dateDebut"];

    // Insertion des données dans la table 'reservations'
    try {
        $sql = "INSERT INTO $table_name  (nom, email, vol_initiation, cours_pilotage, balade_aerienne, formation_pilote, date_reservation) VALUES (:nom, :email, :vol_initiation, :cours_pilotage, :balade_aerienne, :formation_pilote, :date_reservation)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':vol_initiation', $vol_initiation);
        $stmt->bindParam(':cours_pilotage', $cours_pilotage);
        $stmt->bindParam(':balade_aerienne', $balade_aerienne);
        $stmt->bindParam(':formation_pilote', $formation_pilote);
        $stmt->bindParam(':date_reservation', $date_reservation);
        $stmt->execute();

        echo "Les données ont été insérées avec succès dans la base de données.";
    } catch (PDOException $e) {
        echo "Erreur lors de l'insertion dans la base de données : " . $e->getMessage();
    }
}
?>
