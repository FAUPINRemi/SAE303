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
        <!-- Left links -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white p-10 ">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Réserver</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
            </li>
            <!-- Navbar dropdown -->
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img style="width: 40px; height: 40px;" src="./ACF2L/images/Log_white_icon.png" alt="logicon">
                </button>
                <ul class="dropdown-menu bg-dark bg-opacity-25 container dropdown-menu-end">
                    <li><a class="dropdown-item text-white" href="#">Login</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-white" href="#">Consulter réservations</a></li>
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
                <h1>Venez piloter un ULM !</h1>
                <button class="btn btn-outline-light">Réserver maintenant !</button>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto bg-white z-10 w-50 mt-5">
    <h1 class="text-center" style="color: #FF5722;">Nos activités <br><br></h1>
    <p class="text-center" >L’aéro-club est une Association Loi 1901, agréée Jeunesse et Sports, adhérente à la FFULM (Fédération Française d’ULM). Association enregistrée n°04674 - - Agrément n° AS70986858 Le siège social demeure 62, Avenue de la République, 70200 Lure.
        <br>L’aéro-club assure la formation de pilotes et d’instructeurs. Et propose également des baptêmes de l’air.</p>
</div>

</body>
</html>
