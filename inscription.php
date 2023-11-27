
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, init-ial-scale=1.0">
    <style>@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&family=Licorice&family=Roboto:wght@500&family=Satisfy&family=Shadows+Into+Light&family=Vujahday+Script&display=swap');</style>
    <style>@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&family=Libre+Baskerville:ital@1&family=Licorice&family=Roboto:wght@500&family=Satisfy&family=Shadows+Into+Light&family=Vujahday+Script&display=swap');</style>
    <link rel="stylesheet" href="Styles/page1_sae203.css" type="text/css">
    <title>INSCRIPTION</title>
</head>
<body>
    
  

    <div id="ins">
    <form class="box" action="" method="post">
        <!-- formulaire inscription -->
    <h1>INSCRIPTION</h1>

    <fieldset class="Civilité">
        <legend>Civilité</legend>
        <label for="civilite1">Homme</label>
        <input type="radio" id="civilite1" name="civilite" value="Homme"/>
        <label for="civilite1">Femme</label>
        <input type="radio" id="civilite2" name="civilite" value="femme"/>
    </fieldset>

    <fieldset class="NomPrenomDate">
        <label for="user_name1">Nom :</label>
        <input type="text" name="user_name1" id="user_name1" placeholder="Nom" required>

        <label for="user_name2">Prénom :</label>
        <input type="text" name="user_name2" id="user_name2" placeholder="Prénom" required>

        <label for="user_date">Date de naissance :</label>
        <input type="date" name="user_date" id="user_date" placeholder="Date de naissance" required>
    </fieldset>

    <fieldset class="adresse">
          <legend>Adresse</legend>
          <label>Numero</label>
          <input id="numRue" name="numRue" type="numRue" /><br />
          <label>Rue</label>
          <input id="rue" name="rue" type="text" /><br />
          <label>Code postal</label>
          <input id="code-postal" name="code-postal" type="text" /><br />
          <label>Ville</label>
          <input id="ville" name="ville" type="text" />
    </fieldset>

     
    <label for="user_email">Email :</label>
    <input type="email" name="user_email" id="user_email" placeholder="Email" required>

    <label for="phone">Téléphone</label>
    <input type="tel" id="phone" name="phone"/>
    
    <input type="submit" name="valider" value="Valider">
    <p>Déjà <a href="page2_sae203.html">inscrit ?</a></p> <!-- lien page de connexion -->
</form>

        
    </div>


      
</body>
</html>