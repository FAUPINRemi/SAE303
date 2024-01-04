<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
    // Récupérer les données du formulaire
    $civilite = $_POST["civilite"];
    $user_name = $_POST["user_name"];
    $user_firstname = $_POST["user_firstname"];
    $dateNaissance = $_POST["user_date"];
    $numRue = $_POST["numRue"];
    $rue = $_POST["rue"];
    $codePostal = $_POST["codePostal"];
    $ville = $_POST["ville"];
    $situationFamiliale = $_POST["situationFamiliale"];
    $dateDebut = $_POST["dateDebut"];
    $dateFin = $_POST["dateFin"];
    $mineur = $_POST["mineur"];
    $majeur = $_POST["majeur"];
    $parent = $_POST["parent"];
    $handicap = $_POST["handicap"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    try {
        // Requête SQL pour insérer les données dans la table appropriée
        $sql = "INSERT INTO utilisateurs (user_email, civilite, nom, prenom, date_naissance, numRue, rue, codePostal, ville, situationFamiliale, dateDebut, dateFin, mineur, majeur, parent, handicap, telephone) VALUES (:user_email, :civilite, :nom, :prenom, :date_naissance, :num_rue, :rue, :code_postal, :ville, :situation_familiale, :date_debut, :date_fin, :mineur, :majeur, :parent, :handicap, :telephone)";

        // Préparation de la requête
        $stmt = $conn->prepare($sql);

        // Liaison des paramètres
        $stmt->bindParam(':user_email', $email);
        $stmt->bindParam(':civilite', $civilite);
        $stmt->bindParam(':nom', $user_name);
        $stmt->bindParam(':prenom', $user_firstname);
        $stmt->bindParam(':date_naissance', $dateNaissance);
        $stmt->bindParam(':num_rue', $numRue);
        $stmt->bindParam(':rue', $rue);
        $stmt->bindParam(':code_postal', $codePostal);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':situation_familiale', $situationFamiliale);
        $stmt->bindParam(':date_debut', $dateDebut);
        $stmt->bindParam(':date_fin', $dateFin);
        $stmt->bindParam(':mineur', $mineur);
        $stmt->bindParam(':majeur', $majeur);
        $stmt->bindParam(':parent', $parent);
        $stmt->bindParam(':handicap', $handicap);
        $stmt->bindParam(':telephone', $phone);

        // Exécution de la requête
        $stmt->execute();

        echo "Les données ont été insérées avec succès dans la base de données.";

        // Envoi de l'e-mail via SMTP Gmail
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'acfl52995@gmail.com'; // Remplacez par votre adresse Gmail
            $mail->Password   = 'm0t2p4sse';    // Remplacez par votre mot de passe Gmail
            $mail->SMTPAutoTLS = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            // Recipient
            $mail->setFrom($email, $user_name);
            $mail->addAddress('acfl52995@gmail.com'); // Adresse de destination

            // Content
            $mail->isHTML(false);  // Le contenu du message est en texte brut
            $mail->Subject = 'Formulaire d\'inscription - Récapitulatif';

            // Construction du corps du message
            $message = "Nouvelle inscription :\n";
            $message .= "Civilite: $civilite\n";
            $message .= "Nom: $user_name\n";
            $message .= "Prénom: $user_firstname\n";

            $mail->Body    = $message;

            $mail->send();
            echo "L'e-mail a été envoyé avec succès.";
        } catch (Exception $e) {
            echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
        }

    } catch (PDOException $e) {
        echo "Erreur lors de l'insertion des données dans la base de données : " . $e->getMessage();
    }
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
