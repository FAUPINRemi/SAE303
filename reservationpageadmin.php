<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/x-icon" href="./ACF2L/images/logoaf2l.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Gestion réservations</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
</body>
</html>
 


<div class="reservation">
<?php
// Paramètres de connexion à la base de données
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "acf2l";

try {
    // Connexion à la base de données
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    
    // Configuration de PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour sélectionner toutes les lignes de la table
    $query = "SELECT * FROM reservations";
    $result = $conn->query($query);

    // Vérifier si la requête a réussi
    if ($result) {
        // Récupérer toutes les lignes sous forme d'objets
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        // Afficher les données (vous pouvez personnaliser cette partie selon vos besoins)
        echo "<table class='formulaire col-md-3 mt-5 mx-auto text-white border-0'";
        echo "<tr><th>ID</th><th>Nom</th><th>Email</th></tr>";
        foreach ($rows as $row) {
            echo "<tr class='mx-auto w-50'>";
            echo "<td class='p-1'> " . $row['id'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['date_reservation'] . "</td>";
            echo "<td>" . $row['vol_initiation'] . "</td>";
            echo "<td>" . $row['cours_pilotage'] . "</td>";
            echo "<td>" . $row['balade_aerienne'] . "</td>";
            echo "<td>" . $row['formation_pilote'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Erreur lors de l'exécution de la requête.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Fermer la connexion
$conn = null;
?>
</div>

