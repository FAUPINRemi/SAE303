<?php
if (isset($_POST['cookie'])) {
    // retenir l'email de la personne connectée pendant 1 an
    setcookie(
        'user_email', // nom de la variable
        $_POST['user_email'], // valeur de la variable (utilisation de $_POST au lieu de $_GET)
        [
            'expires' => time() + 365 * 24 * 3600, // expiration du cookie
            'secure' => true, // sécurise le cookie
            'httponly' => true, // sécurise le cookie
        ]
    );

    // retenir le mot de passe de la personne connectée pendant 1 an
    setcookie(
        'user_password', // nom de la variable
        $_POST['user_password'], // valeur de la variable (utilisation de $_POST au lieu de $_GET)
        [
            'expires' => time() + 365 * 24 * 3600, // expiration du cookie
            'secure' => true, // sécurise le cookie
            'httponly' => true, // sécurise le cookie
        ]
    );
}
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
            <br>            <br>
            <label for="Cookie">Souhaitez-vous l'utilisation de cookies?  </label>
            <br>
            <input type="submit" name="valider" value="valider"> 
            
            
            <p>Pas encore <a href="inscription.php">inscris ?</a></p>
        </form>
        
    </div>

  
        
      
</body>
</html>