






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, init-ial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./ACF2L/images/logoaf2l.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>INSCRIPTION</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<body >
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

    <div id="ins" class="container p-1 rounded-5 bg text-white" style="margin-top:150px;">
    
        <form class="box col-md-5 mt-5 mx-auto mb-5  formulaire"  action="traitement-inscription.php" method="post" >
            <!-- formulaire inscription -->
            <h2 class="text-center mb-5 mt-4">Inscription</h2>
            <div class=" mx-auto col-md-6">
            <fieldset class="Civilité ">
                
                    <legend>Civilité</legend>
                    <label for="civilite">Monsieur</label>
                    <input type="radio" id="civilite1" name="civilite" value="Monsieur" class="form-check-input" />
                    <label for="civilite">Madame</label>
                    <input type="radio" id="civilite2" name="civilite" value="Madame" class="form-check-input"/>
                 <br> <br>
                
            </fieldset>
            </div>
            
            <div class=" col-md-6 mx-auto">
            <fieldset class="NomPrenomDate ">
                <label for="user_name">Nom </label>
                <input type="text" name="user_name" id="user_name" placeholder="Nom" required class="form-control mb-2">

                <label for="user_firstname">Prénom </label>
                <input type="text" class="form-control mb-2" name="user_firstname" id="user_firstname" placeholder="Prénom" required>

                <label for="user_date">Date de naissance </label><br>
                <input type="date" class="form-control mb-5" name="user_date" id="user_date" placeholder="Date de naissance" required>
            </fieldset>
            </div>
            

            <fieldset class="adresse col-md-6 mx-auto">
                <legend>Adresse</legend>
                <label>Numero</label>
                <input id="numRue" class="form-control mb-2" name="numRue" type="numRue" placeholder="N°"/>
                <label>Nom de rue</label>
                <input id="rue" class="form-control mb-2" name="rue" placeholder="Nom de rue" type="text" />
                <label>Code postal</label>
                <input id="codePostal" class="form-control mb-2" name="codePostal" placeholder="Code postal" type="text" />
                <label>Ville</label>
                <input id="ville" name="ville" class="form-control mb-2" placeholder="Ville" type="text" />
            </fieldset>

            <fieldset class="situation col-md-6 mx-auto ">
                <label for="situationFamiliale">Votre situation familiale</label><br>
                <select id="situationFamiliale" class="form-control" name="situationFamiliale" onchange="toggleDates()" required> 
                    <option value="celibataire ">Célibataire</option>
                    <option value="marie">Marié(e)</option>
                    <option value="unionLibre">Union Libre</option>
                    <option value="pacs">PACS</option>
                    <option value="divorce">Divorcé(e)</option>
                </select><br>
                <label for="dateDebut" id="dateDebutLabel" class="hidden ">Date de début :</label>
                <input type="date" id="dateDebut" name="dateDebut" class="hidden "><br>

                <label for="dateFin" id="dateFinLabel" class="hidden">Date de fin :</label>
                <input type="date" id="dateFin" name="dateFin" class="hidden ">
            </fieldset>

            <fieldset class="charge col-md-6 mx-auto">
                <legend>Personne à charge</legend>
                <label>Enfant mineur</label>
                <input id="min" name="mineur" class="form-control mb-2" type="number" min="0" required/>
                <label>Enfant majeur</label>
                <input id="maj" name="majeur" class="form-control mb-2" type="number"  min="0" required/>
                <label>Parent à charge</label>
                <input id="parent" name="parent" class="form-control mb-2" type="number"  min="0" required/>
                <label>Cause de handicap</label>
                <input id="handicap" name="handicap" class="form-control mb-2" type="text"  /> 
            </fieldset><br>

            <fieldset class="col-md-6 mx-auto">
            <label for="phone" class="col-md-6 mx-auto">Téléphone</label>
            <input type="tel" id="phone" name="phone" class="col-md-6 mx-auto form-control mb-2" placeholder="Téléphone" required/> 
            <label for="email" class="col-md-6 mx-auto">Email :</label>
<input type="email" name="email" id="email" class="col-md-6 mx-auto form-control mb-2" placeholder="email" required>

         

            <label for="password" class="col-md-6 mx-auto">Mot de passe </label>
            <input type="password" name="password" id="password" class="col-md-6 mx-auto form-control mb-2" placeholder="Mot de passe" required>
        
            
            
            </fieldset>
            
            <div class="text-center mb-5 ">
            <input type="submit" name="valider" value="Valider" class="btn btn-light mt-5 col-md-6 mx-auto mb-1"> 
                <p>Déjà inscrit ?<a href="connexion.php"><br>Se connecter</a></p> <!-- lien page de connexion -->
            </div>
            
        </form>

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
