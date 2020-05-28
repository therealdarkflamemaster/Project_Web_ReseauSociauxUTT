
<!-- ----- debut config -->
<?php

// Utile pour le débugage car c'est un interrupteur pour les echos et print_r.
const DEBUG = FALSE;

// Configuration de la base de données
$dsn = 'mysql:host=localhost:3308;dbname=reseauxsociauxutt;charset=utf8';
$username_base = 'root';
$password_base = '';

// chemin absolu vers le répertoire du projet
$root = "F:\wamp64\www\ReseauSociauxUTT";

if (DEBUG) {
    echo ("<ul>");
    echo ("<li>root = $root</li>");
    echo ("<li>---</li>");
    echo ("<li>dsn = $dsn</li>");
    echo ("<li>username = $username_base</li>");
    echo ("<li>password = $password_base</li>");
    echo ("</ul>");
}

?>

<!-- ----- fin config -->



