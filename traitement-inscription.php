<?php
// Connexion à la base de données (à ajuster avec vos informations de connexion)
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "acf2l";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? $connexion->real_escape_string($_POST["email"]) : "";
    $raw_password = isset($_POST["password"]) ? $_POST["password"] : "";
    $password = password_hash($raw_password, PASSWORD_DEFAULT);
    
    if (empty($email)) {
        die("L'e-mail est vide");
    }

    // Autres données du formulaire
    $civilite = $connexion->real_escape_string($_POST["civilite"]);
    $nom = $connexion->real_escape_string($_POST["user_name"]);
    $prenom = $connexion->real_escape_string($_POST["user_firstname"]);
    $date_naissance = $connexion->real_escape_string($_POST["user_date"]);
    $numRue = $connexion->real_escape_string($_POST["numRue"]);
    $rue = $connexion->real_escape_string($_POST["rue"]);
    $codePostal = $connexion->real_escape_string($_POST["codePostal"]);
    $ville = $connexion->real_escape_string($_POST["ville"]);
    $situationFamiliale = $connexion->real_escape_string($_POST["situationFamiliale"]);
    $dateDebut = $connexion->real_escape_string($_POST["dateDebut"]);
    $dateFin = $connexion->real_escape_string($_POST["dateFin"]);
    $mineur = $connexion->real_escape_string($_POST["mineur"]);
    $majeur = $connexion->real_escape_string($_POST["majeur"]);
    $parent = $connexion->real_escape_string($_POST["parent"]);
    $handicap = $connexion->real_escape_string($_POST["handicap"]);
   
    // Requête d'insertion des données dans la base de données
    $requete = "INSERT INTO utilisateurs (civilite, nom, prenom, date_naissance, numRue, rue, codePostal, ville, situationFamiliale, dateDebut, dateFin, mineur, majeur, parent, handicap, email, password) 
    VALUES ('$civilite', '$nom', '$prenom', '$date_naissance', '$numRue', '$rue', '$codePostal', '$ville', '$situationFamiliale', '$dateDebut', '$dateFin', '$mineur', '$majeur', '$parent', '$handicap', '$email', '$password')";


if ($connexion->query($requete) === TRUE) {
    // Envoi d'e-mail
    $destinataire = $email; // Utilisez l'e-mail de l'utilisateur
    $sujet = "Bienvenue sur notre site";
    $message = "Merci de vous être inscrit sur notre site. Votre compte a été créé avec succès.";

    $headers = "From: expediteur@example.com\r\n";
    $headers .= "Reply-To: expediteur@example.com\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Envoi de l'e-mail
    mail($destinataire, $sujet, $message, $headers);

    // Redirection vers une page de confirmation
    header("Location: confirmation-inscription.php");
    exit();
} else {
    echo "Erreur lors de l'ajout des données : " . $connexion->error;
}

    if ($connexion->query($requete) === TRUE) {
        // Redirection vers une page de confirmation
        header("Location: confirmation-inscription.php");
        exit();
    } else {
        echo "Erreur lors de l'ajout des données : " . $connexion->error;
    }
    error_reporting(E_ALL);
    // Fermeture de la connexion
    $connexion->close();
}


?>
