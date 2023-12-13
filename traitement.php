

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
    // Récupérer les données du formulaire
    // ...

    // Votre code pour traiter le formulaire et insérer les données dans la base de données ici

    try {
        // Requête SQL pour insérer les données dans la table appropriée
        $sql = "INSERT INTO votre_table (civilite, nom, prenom, date_naissance, num_rue, rue, code_postal, ville, situation_familiale, date_debut, date_fin, mineur, majeur, parent, handicap, email, telephone) VALUES (:civilite, :nom, :prenom, :dateNaissance, :numRue, :rue, :codePostal, :ville, :situationFamiliale, :dateDebut, :dateFin, :mineur, :majeur, :parent, :handicap, :email, :phone)";

        // Préparation de la requête
        $stmt = $conn->prepare($sql);

        // Liaison des paramètres
        $stmt->bindParam(':civilite', $civilite);
        $stmt->bindParam(':nom', $nom);
        $stmt->binParam(':prenom',$prenom);
        $stmt->binParam(':date_naissance',$dateNaissance);
        $stmt->binParam(':num_rue',$numRue);
        $stmt->binParam(':rue',$rue);
        $stmt->binParam(':code_postal',$codePostal);
        $stmt->binParam(':ville',$ville);
        $stmt->binParam(':situation_familiale',$situationFamiliale);
        $stmt->binParam(':date_debut',$dateDebut);
        $stmt->binParam(':date_fin',$dateFin);
        $stmt->binParam(':mineur',$mineur);
        $stmt->binParam(':majeur',$majeur);
        $stmt->binParam(':parent',$parent);
        $stmt->binParam(':handicap',$handicap);
        $stmt->binParam(':email',$email);
        $stmt->binParam(':telephone',$phone);



        // Exécution de la requête
        $stmt->execute();

        echo "Les données ont été insérées avec succès dans la base de données.";
    } catch (PDOException $e) {
        echo "Erreur lors de l'insertion des données dans la base de données : " . $e->getMessage();
    }
}

// Fermeture de la connexion à la base de données
$conn = null;

// ... (le reste de votre code)

?>


<?php

