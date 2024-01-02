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
    $user_email = $_POST['user_email'];
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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, init-ial-scale=1.0">
    <link rel="stylesheet" href="" type="text/css">
    <title>Connexion</title>
</head>
<body>
    <div id="conn">
        <form class="box" action="" method="post">
            <h1>Connexion</h1>
            <input type="text" name="user_email" placeholder="Email">
            <br>
            <input type="password" name="user_password" placeholder="Mot de passe">
            <br>
            <br>
            <label for="Cookie">Souhaitez-vous l'utilisation de cookies?  </label>
            <br>
            <input type="submit" name="valider" value="valider"> 
            <p>Pas encore <a href="inscription.php">inscrit ?</a></p>
        </form>
    </div>
</body>
</html>
