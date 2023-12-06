
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, init-ial-scale=1.0">
    <style>@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&family=Licorice&family=Roboto:wght@500&family=Satisfy&family=Shadows+Into+Light&family=Vujahday+Script&display=swap');</style>
    <style>@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&family=Libre+Baskerville:ital@1&family=Licorice&family=Roboto:wght@500&family=Satisfy&family=Shadows+Into+Light&family=Vujahday+Script&display=swap');</style>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>INSCRIPTION</title>
</head>
<body>
    
  

    <div id="ins">
        <form class="box" action="traitement-inscription.php" method="post">
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
                <input id="numRue" name="numRue" type="numRue" placeholder="N°"/><br />
                <label>Nom de rue</label>
                <input id="rue" name="rue" placeholder="Nom de rue" type="text" /><br />
                <label>Code postal</label>
                <input id="code-postal" name="code-postal" placeholder="Code postal" type="text" /><br />
                <label>Ville</label>
                <input id="ville" name="ville" placeholder="Ville" type="text" />
            </fieldset>

            <fieldset class="situation">
                <label for="situationFamiliale">Votre situation familiale :</label>
                <select id="situationFamiliale" name="situationFamiliale" onchange="toggleDates()" required>
                    <option value="celibataire">Célibataire</option>
                    <option value="marie">Marié(e)</option>
                    <option value="unionLibre">Union Libre</option>
                    <option value="pacs">PACS</option>
                    <option value="divorce">Divorcé(e)</option>
                </select>
                <label for="dateDebut" id="dateDebutLabel" class="hidden">Date de début :</label>
                <input type="date" id="dateDebut" name="dateDebut" class="hidden">

                <label for="dateFin" id="dateFinLabel" class="hidden">Date de fin :</label>
                <input type="date" id="dateFin" name="dateFin" class="hidden">
            </fieldset>

            <fieldset class="charge">
                <legend>Personne à charge</legend>
                <label>Enfant mineur</label>
                <input id="min" name="mineur" type="number" min="0" required/><br />
                <label>Enfant majeur</label>
                <input id="maj" name="majeur" type="number"  min="0" required/><br />
                <label>Parent à charge</label>
                <input id="parent" name="parent" type="number"  min="0" required/>
                <label>Cause de handicap</label>
                <input id="handicap" name="handicap" type="text"  />
            </fieldset>

            
            <label for="user_email">Email :</label>
            <input type="email" name="user_email" id="user_email" placeholder="Email" required>

            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="phone" placeholder="Téléphone" required/>
            
            <input type="submit" name="valider" value="Valider">
            <p>Déjà <a href="connexion.php">inscrit ?</a></p> <!-- lien page de connexion -->
        </form>

    </div>

    <script>
        function toggleDates() {
            var situationFamiliale = document.getElementById("situationFamiliale").value;
            var dateDebutLabel = document.getElementById("dateDebutLabel");
            var dateDebut = document.getElementById("dateDebut");
            var dateFinLabel = document.getElementById("dateFinLabel");
            var dateFin = document.getElementById("dateFin");

            if (situationFamiliale === "celibataire" || situationFamiliale === "unionLibre") {
                dateDebutLabel.classList.add("hidden");
                dateDebut.classList.add("hidden");
                dateFinLabel.classList.add("hidden");
                dateFin.classList.add("hidden");
            } else if (situationFamiliale === "marie" || situationFamiliale === "pacs") {
                dateDebutLabel.classList.remove("hidden");
                dateDebut.classList.remove("hidden");
                dateFinLabel.classList.add("hidden");
                dateFin.classList.add("hidden");
            } else {
                dateDebutLabel.classList.remove("hidden");
                dateDebut.classList.remove("hidden");
                dateFinLabel.classList.remove("hidden");
                dateFin.classList.remove("hidden");
            }
        }

    </script>
      
</body>
</html>