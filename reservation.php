<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Réservation ULM</title>
</head>
<body>
  <div class="formulaire col-md-3 mt-5 mx-auto  text-white">
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

        <input type="checkbox" id="vol_initiation" name="activites[]" value="vol_initiation" class="form-check-input">
        <label for="vol_initiation">Vol d'initiation</label>
        </br>

         
        <input type="checkbox" id="cours_pilotage" name="activites[]" value="cours_pilotage"  class="form-check-input">
        <label for="cours_pilotage">Cours de pilotage</label>
        </br>
        
        

        <input type="checkbox" id="balade_aerienne" name="activites[]" value="balade_aerienne" class="form-check-input">
        <label for="balade_aerienne">Balade aérienne</label>
        </br>

        <input class="mb-5 form-check-input" type="checkbox" id="formation_pilote" name="activites[]" value="formation_pilote" >
        <label for="formation_pilote">Formation de pilote</label>
        
        <div class="text-center mb-5">
            <button type="submit" class="btn btn-light mb-1 mx-auto">Réserver</button>
        </div>
        
    </fieldset>

  </form>
  </div>
  

</body>
</html>