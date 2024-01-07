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
<nav class="navbar fixed-top navbar-expand-lg bg-dark bg-opacity-25 text-white">
    <a class="navbar-brand" href="index.php"><img style="width: 100px; height: 100px;" src="./ACF2L/images/logoaf2l.png" alt="logoaf2l"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-white z-3 container" id="navbarSupportedContent">
  
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white p-10 nav-underline">
            <li class="nav-item">
                <a class="nav-link text-white text-reset" aria-current="page" href="#sectioninfo">Informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-reset" href="connexion.php">Réserver</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-reset" href="#footer">Contact</a>
            </li>
         
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img style="width: 40px; height: 40px;" src="./ACF2L/images/Log_white_icon.png" alt="logicon">
                </button>
                <ul class="dropdown-menu bg-dark bg-opacity-25 container dropdown-menu-end w-100">
                    <li><a class="dropdown-item text-white text-reset" href="connexion.php">Se connecter</a></li>
                    <li><a class="dropdown-item text-white text-reset" href="inscription.php">S'inscrire</a></li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
            </div>
        </ul>
    </div>
</nav>


<div class="reservation" style='margin-top:150px; margin-bottom:150px'>
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
        

        echo "<table class='formulaire col-md-3 mt-5 mx-auto text-white border-0 mt-4' ";
        echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Vol_Ini</th><th>Cours_pilot</th><th>Balade</th><th>Formation_pilote</th><th>Date_reserv</th></tr>";
        foreach ($rows as $row) {
            echo "<tr class='mx-auto w-50'>";
            echo "<td class='p-5'> " . $row['id'] . "</td>";
            echo "<td class='p-5'>" . $row['nom'] . "</td>";
            echo "<td class='p-5'>" . $row['email'] . "</td>";
            echo "<td class='p-5'>" . $row['vol_initiation'] . "</td>";
            echo "<td class='p-5'>" . $row['cours_pilotage'] . "</td>";
            echo "<td class='p-5'>" . $row['balade_aerienne'] . "</td>";
            echo "<td class='p-5'>" . $row['formation_pilote'] . "</td>";
            echo "<td class='p-5'>" . $row['date_reservation'] . "</td>";
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
<footer id="footer" class="text-white bg-black mx-auto">
        <h3 class="mx-auto text-center pt-5 mt-5 ">Contacter nous</h3>
        <div class="pb-5">
            <div class="d-flex justify-content-center w-100 text-center">
                <img src="./ACF2L/images/phone icon.png" alt="phoneicon">
                <p>+ 33 01 60 56 60 60</p>
            </div>
            <div class="d-flex justify-content-center w-100 text-center">
                <p>acf2l@gmail.com</p>
            </div>
            <div class="d-flex justify-content-center w-100 text-center">
                <img src="./ACF2L/images/xicon.png" alt="xicon" style="width: 50px; height:auto;">
                <img src="./ACF2L/images/linkdinicon.png" alt="linkdlnicon" style="width: 50px; height:auto;">
                <img src="./ACF2L/images/instaicon.png" alt="instaicon" style="width: 50px; height:auto;">
            </div>
        </div>
    </footer>

