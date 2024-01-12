<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./ACF2L/images/logoaf2l.png">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="style2.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Réservation ULM</title>
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
                    <li><a class="dropdown-item text-white text-reset" href="index.php">Se deconnecter</a></li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
            </div>
        </ul>
    </div>
</nav>
  <div class="formulaire col-md-4 mx-auto mb-5  text-white " style="margin-top:150px;">
  <form action="traitement-reservation.php" class=" col-md-6 mx-auto mt-4 mb-4" method="post">
  <h2 class="text-center mb-4">Réservation</h2>

    <fieldset>
        <label for="nom">Nom :</label>
        <input class="form-control"  type="text" id="nom" name="nom" required >
        </br>

        <label for="email">Email :</label>
        <input class="form-control mb-4" type="email" id="email" name="email" required class="mb-4">
        

        <label>Activités :</label>
        </br>

        <input type="checkbox" id="vol_initiation" name="vol_initiation[]" value="Vol initiation " class="form-check-input">
        <label for="vol_initiation">Vol d'initiation</label>
        </br>

         
        <input type="checkbox" id="cours_pilotage" name="cours_pilotage[]" value="Cours pilotage "  class="form-check-input">
        <label for="cours_pilotage">Cours de pilotage</label>
        </br>
        
        

        <input type="checkbox" id="balade_aerienne" name="balade_aerienne[]" value="Balade aerienne " class="form-check-input">
        <label for="balade_aerienne">Balade aérienne</label>
        </br> 

        <input class="form-check-input" type="checkbox" id="formation_pilote" name="formation_pilote[]" value="Formation pilote " >
        <label for="formation_pilote">Formation de pilote</label>
        </br>
        </br>
        
        <label for="dateDebut" id="dateDebutLabel" class="  ">Date:</label>
        <input type="date" id="dateDebut" name="dateDebut" class="form-control mb-5 "><br>

        <div class="text-center mb-5">
            <button type="submit" class="btn btn-light mb-1 mx-auto">Réserver</button>
        </div>

        
        
    </fieldset>

  </form>
  </div>
  <div class=" formulaire  col-md-5 mt-5 mx-auto p-2 mb-5 " >
        <p class="w-75 text-white text-center mx-auto">Veuillez à faire vos réservation de vol en fonction de la météo. <br>Un ciel éclaircie est à privilégier pour le vol. </p>
        <iframe style="margin: top 50px" id="widget_autocomplete_preview"  class="w-50 h-50 mx-auto  "  frameborder="0" src="https://meteofrance.com/widget/prevision/772840"></iframe>
        
  </div>
 

</body>
</html>