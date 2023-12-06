<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Réservation ULM</title>
</head>
<body>

  <form action="traitement-reservation.php" method="post">
  <h1>Réservation</h1>

    <fieldset>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        </br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        </br>

        <label>Activités :</label>
        </br>

        <input type="checkbox" id="vol_initiation" name="activites[]" value="vol_initiation">
        <label for="vol_initiation">Vol d'initiation</label>
        </br>

        <input type="checkbox" id="cours_pilotage" name="activites[]" value="cours_pilotage">
        <label for="cours_pilotage">Cours de pilotage</label>
        </br>

        <input type="checkbox" id="balade_aerienne" name="activites[]" value="balade_aerienne">
        <label for="balade_aerienne">Balade aérienne</label>
        </br>

        <input type="checkbox" id="formation_pilote" name="activites[]" value="formation_pilote">
        <label for="formation_pilote">Formation de pilote</label>
        </br>

        <button type="submit">Réserver</button>
    </fieldset>

  </form>

</body>
</html>