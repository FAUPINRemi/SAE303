<?php
// Informations de connexion à la base de données (à personnaliser)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "acf2l";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

if (isset($_POST['valider'])) {
    // Récupération des valeurs du formulaire
    $user_email = $_POST['email'];
    $user_password = $_POST['user_password'];

    // Votre requête SQL pour vérifier l'authentification
    $sql = "SELECT * FROM utilisateurs WHERE email='$user_email' AND password='$user_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Utilisateur authentifié avec succès, rediriger vers la page d'accueil
        header("Location: index.html");
        exit(); // Assure que le script s'arrête après la redirection
    } else {
        echo "Identifiants incorrects";
    }
}

// Fermeture de la connexion à la base de données
$conn->close();


session_start();


if(isset($_SESSION['user_id'])) {
    
    $userRole = getRoleByEmail($_SESSION['email']);

    
    if($userRole == 'admin') {
        header("Location: indexadmin.php");
        exit();
    } else {
        header("Location: indexconnecte.php");
        exit();
    }
}

?>

<?php

// Fonction pour obtenir le rôle d'un utilisateur à partir de son email
function getRoleByEmail($email) {
    // Connexion à la base de données (à ajuster selon votre configuration)
    $pdo = new PDO('mysql:host=localhost;dbname=acf2l', 'root', '');

    // Requête pour obtenir le rôle à partir de l'email
    $query = $pdo->prepare("SELECT email FROM utilisateurs WHERE email = :email");
    $query->bindParam(':email', $email);
    $query->execute();

    // Récupération du résultat
    $result = $query->fetch(PDO::FETCH_ASSOC);

    // Si l'utilisateur est trouvé, retourne le rôle, sinon retourne null
    if ($result) {
        return $result['email'];
    } else {
        return null;
    }
}

$userEmail = 'john.doe@example.com';
$userRole = getRoleByEmail($userEmail);

if ($userRole !== null) {
    echo "Le rôle de l'utilisateur avec l'email $userEmail est : $userRole";
} else {
    echo "Utilisateur non trouvé.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, init-ial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg bg-dark bg-opacity-25 text-white">
    <a class="navbar-brand" href="index.php"><img style="width: 100px; height: 100px;" src="./ACF2L/images/logoaf2l.png" alt="logoaf2l"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-white z-3 container" id="navbarSupportedContent">
  
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white p-10 nav-underline">
            <li class="nav-item">
                <a class="nav-link text-white text-reset" aria-current="page" href="index.php">Informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-reset" href="reservation.php">Réserver</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-reset" href="index.php">Contact</a>
            </li>
         
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img style="width: 40px; height: 40px;" src="./ACF2L/images/Log_white_icon.png" alt="logicon">
                </button>
                <ul class="dropdown-menu bg-dark bg-opacity-25 container dropdown-menu-end w-100">
                    <li><a class="dropdown-item text-white text-reset" href="connexion.php">Se connecter</a></li>
                    <li><a class="dropdown-item text-white text-reset" href="inscription.php">S'inscrire</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-white text-reset" href="#">Admin réservations</a></li>
                </ul>
            </div>
        </ul>
    </div>
</nav>
    <div id="conn" class="formulaire col-md-3  mx-auto  text-white  " style="margin-top:150px;">
        <form class="box col-md-6 mx-auto mb-4 mt-4 " action="" method="post">
            <h2 class="text-center mb-4">Connexion</h2>
            <label for="user_email">Email</label>
            <input type="text" name="user_email" placeholder="Email" class="form-control">
            <br>
            <label for="user_password">Mot de passe</label>
            <input type="password" name="user_password" placeholder="Mot de passe" class="form-control">
            <p>Pas encore inscrit ?<a href="inscription.php"><br>S'inscrire</a></p>
            
            <label for="Cookie">Souhaitez-vous l'utilisation de cookies?  </label>
            <br>
            <div class="text-center mb-5">
                <input type="submit" class="btn btn-light mt-5 mx-auto " name="valider" value="valider"> 
            </div>
                
            
        </form>
    </div>
</body>
</html>
