<?php
// Constantes pour les noms de cookies
define('LOGGED_USER_COOKIE', 'LOGGED_USER');
define('PASSWORD_USER_COOKIE', 'PASSWORD_USER');
define('COOKIES_ACCEPTED_COOKIE', 'cookiesAccepted');

// Vérifie si l'utilisateur a accepté les cookies
if (!isset($_COOKIE[COOKIES_ACCEPTED_COOKIE]) || $_COOKIE[COOKIES_ACCEPTED_COOKIE] !== 'true') {
    // Affiche un message d'erreur et redirige vers la page d'accueil avec une erreur 403
    http_response_code(403);
    echo 'Erreur 403 : L\'accès à cette page nécessite l\'acceptation des cookies.';
    exit;
}

// retenir l'email de la personne connectée pendant 1 an
setcookie(
    LOGGED_USER_COOKIE,
    'utilisateur@exemple.com',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);

// Mot de passe réel de l'utilisateur (à remplacer par le vrai mot de passe)
$userPassword = 'motdepasse123';

// Hachage du mot de passe
$hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

// retenir le mot de passe haché de la personne connectée pendant 1 an
setcookie(
    PASSWORD_USER_COOKIE,
    $hashedPassword,
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);

// Affiche un message pour indiquer que les cookies ont été acceptés
echo 'Les cookies ont été acceptés.';

?>


