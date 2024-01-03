<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACF2L - Bienvenue</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                <a class="nav-link text-white text-reset" href="#">Contact</a>
            </li>
         
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img style="width: 40px; height: 40px;" src="./ACF2L/images/Log_white_icon.png" alt="logicon">
                </button>
                <ul class="dropdown-menu bg-dark bg-opacity-25 container dropdown-menu-end w-100">
                    <li><a class="dropdown-item text-white text-reset" href="connexion.php">Se connecter</a></li>
                    <li><a class="dropdown-item text-white text-reset" href="inscription.php">S'inscrire</a></li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
            </div>
        </ul>
    </div>
</nav>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active position-relative">
            <img style="filter: brightness(65%);" src="./ACF2L/images/slide2.jpg" class="d-block w-100" alt="Slide1">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle text-center w-100">
                <h1>Bienvenue dans notre association ! <br>Aéro club de Frotey-Les-Lures</h1>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img style="filter: brightness(65%);" src="./ACF2L/images/pendulaire1.jpg" class="d-block w-100" alt="Slide2">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle text-center w-100">
                <h1>L'association vous offre la chance de pratiquer <br>L'aviation légère dans un environnement <br>exceptionnel</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img style="filter: brightness(65%);" src="./ACF2L/images/slide-3.jpg" class="d-block w-100" alt="Slide3">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle text-center w-100">
                <h1>Venez piloter un ULM !<br></h1>
                <button class="btn btn-outline-light">Réserver maintenant !</button>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto bg-white z-10 w-50 mt-5">
    <h1 class="text-center" style="color: #FF5722;">Nos activités <br><br></h1>
    <p class="text-center" >L’aéro-club est une Association Loi 1901, agréée Jeunesse et Sports, adhérente à la FFULM (Fédération Française d’ULM). Association enregistrée n°04674 - - Agrément n° AS70986858 Le siège social demeure 62, Avenue de la République, 70200 Lure.
        <br><p class="font-weight-bold">L’aéro-club assure la formation de pilotes et d’instructeurs. Et propose également des baptêmes de l’air.</p></p>
</div>

<div class="container mx-auto bg-white z-10 w-50 mt-5 pt-5">
    <h3>Pour cela, il assure les prestations complémentaires suivantes :<br></h3>
    <ul>
        <li>
        Maintenance des ULM moteur, structure…
        </li>
        <li>
        Montage des ULM et de tout instrument de navigation : Compas, radio, transpondeur…
        </li>
        <li>
        Un service de restauration rapide.
        </li>
        <li>
        Un hébergement en proposant trois studios et six chambres pour les élèves stagiaires.
        </li>
        <li>
        Location d’emplacement ULM dans des hangars pour les particuliers.
        </li>
    </ul>
</div>
<div id="sectioninfo"></div>
<div class="container d-flex justify-content-center w-50 text-center mt-5 pt-5">
    <div class="container" id="section1">
        <img src="./ACF2L/images/restauranticon.png" alt="iconrestaurant" style="width: 60px; height:auto;">
        <h5>Restauration et hébergement</h5>
        <p class="mt-3">Nous proposons de la restauration rapide sur place, un service d’hébergement pour les élèves stagiaires</p>
    </div>
    <div class="container" id="section2">
        <img src="./ACF2L/images/clockicon.png" alt="iconorloge" style="width: 60px; height:auto;">
        <h5>Leçons d’ULM</h5>
        <p class="mt-5">Nous proposons des cours pour la prise en main des ULM</p>
    </div>
    <div class="container" id="section3">
        <img src="./ACF2L/images/calendriericon.png" alt="iconcalendrier" style="width: 60px; height:auto;">
        <h5>Bus</h5>
        <p class="mt-5">Des bus sont disponibles pour se rendre sur le lieu de décollage</p>
    </div>
</div>

<div class="container mx-auto bg-white z-10 w-50 mt-5">
    <h1 class="text-center mt-5" style="color: #FF5722;">Catégories d'ULM<br><br></h1>
    <h4 class="text-center font-weight-bold">Nous vous proposons</h4>
</div>

<div class="container d-flex justify-content-center">
<div class="card m-5" style="width: 18rem; background-color:#8FD200; rounded">
<h5 class="card-title text-center p-2 rounded text-white" style="background-color:#78B000;">Hélicoptère Ultra Léger</h5>
  <img src="./ACF2L/images/course-1.jpg" class="card-img-top w-75 mx-auto" alt="hélico_ultra_léger">
  <div class="card-body">
    <p class="card-text text-white text-center">Cet ULM offrent une grande manœuvrabilité et une grande capacité d'ascension. <br>Ils peuvent être utilisés pour des vols de loisirs, de tourisme ou de compétition.</p>
    <a href="reservation.php" class="btn rounded w-50 text-white" style="background-color:#FF5722; margin-top:55px;">Réserver</a>
    <p class="card-text text-white text-left font-weight-bold d-flex flex-row-reverse">79€</p>
  </div>
</div>

<div class="card m-5" style="width: 18rem; background-color:#8FD200; rounded">
<h5 class="card-title text-center p-2 rounded text-white" style="background-color:#78B000;">Paramoteur</h5>
  <img src="./ACF2L/images/course-2.jpg" class="card-img-top w-75 mx-auto" alt="paramoteur">
  <div class="card-body">
    <p class="card-text text-white text-center">Le paramoteur est léger et maniable, ce qui le rend facile et maniable.<br>Avec sa petite taille, il vous permet d'aatterrir dand des espaces restraints.</p>
    <a href="connexion.php" class="btn rounded w-50 text-white" style="background-color:#FF5722;">Réserver</a>
    <p class="card-text text-white text-left font-weight-bold d-flex flex-row-reverse">129€</p>
  </div>
</div>

<div class="card m-5" style="width: 18rem; background-color:#8FD200; rounded">
<h5 class="card-title text-center p-2 rounded text-white" style="background-color:#78B000;">Le multiaxes</h5>
  <img src="./ACF2L/images/course-3.jpg" class="card-img-top w-75 mx-auto" alt="Multilaxes">
  <div class="card-body">
    <p class="card-text text-white text-center" style="margin-top:55px;">Il est apprécié pour sa maniabilité, sa facilité de pilotage et son prix abordable.</p>
    <a href="connexion.php.php" class="btn rounded w-50 text-white" style="background-color:#FF5722; margin-top:145px;">Réserver</a>
    <p class="card-text text-white text-left font-weight-bold d-flex flex-row-reverse">229€</p>
  </div>
</div>
</div>

<div class="container mx-auto bg-white z-10 w-50 mt-5">
    <h1 class="text-center mt-5" style="color: #FF5722;">Tarifs<br><br></h1>
</div>

<div class="container d-flex justify-content-center">
<div class="card m-5" style="width: 18rem; background-color:#8FD200; rounded">
<h5 class="card-title text-center p-2 rounded text-white" style="background-color:#78B000;">Vol découverte</h5>
  <div class="card-body">
    <h4 class="text-center text-white">60€ - 30min</h4>
    <p class="card-text text-white text-center">Vol découverte de 30 min<br>Balade Chateau de Chantilly<br>Essence comprise <br>Possibilité de promenade à la carte </p>
    <a href="connexion.php" class="btn rounded w-50 text-white mx-auto" style="background-color:#FF5722;">Go</a>
  </div>
</div>

<div class="card m-5" style="width: 18rem; background-color:#8FD200; rounded">
<h5 class="card-title text-center p-2 rounded text-white" style="background-color:#78B000;">Forfait initiation</h5>
  <div class="card-body">
  <h4 class="text-center text-white">500€ - 5h de vol</h4>
    <p class="card-text text-white text-center">Pour commencer à apprendre à piloter pendant 5 vos avec un instructeur du club.<br> C’est vous qui pilotez ! <br> L’idéal pour se faire une idée</p>
    <a href="connexion.php" class="btn rounded w-50 text-white" style="background-color:#FF5722;">Go</a>
  </div>
</div>

<div class="card m-5" style="width: 18rem; background-color:#8FD200; rounded">
<h5 class="card-title text-center p-2 rounded text-white" style="background-color:#78B000;">Membre</h5>
  <div class="card-body">
  <h4 class="text-center text-white">90€ - 1h</h4>
    <p class="card-text text-white text-center">Prix pour les 10 premières heures.<br>La cotisation pour le club est de 105€.<br>Assurance comprise<br>Avoir licence FFPLUM ou FFW</p>
    <a href="connexion.php" class="btn rounded w-50 text-white" style="background-color:#FF5722;">Go</a>
  </div>
</div>

<div class="card m-5" style="width: 18rem; background-color:#8FD200; rounded">
<h5 class="card-title text-center p-2 rounded text-white" style="background-color:#78B000;">Vol découverte </h5>
  <div class="card-body">
  <h4 class="text-center text-white">64€ - 1h</h4>
    <p class="card-text text-white text-center" >+10h = 75 €/h<br>
+20h = 71 €/h<br>
+30h = 67 €/h<br>
Pour les moins de 25ans il y a une remise de 20%</p>
    <a href="connexion" class="btn rounded w-50 text-white" style="background-color:#FF5722;">Go</a>
  </div>
</div>
</div>

<div class="container w-50 mx-auto">
    <h4>Météo</h4>
<iframe id="widget_autocomplete_preview"  class="w-100 h-50"  frameborder="0" src="https://meteofrance.com/widget/prevision/772840"></iframe>
    </div>
</body>
</html>
