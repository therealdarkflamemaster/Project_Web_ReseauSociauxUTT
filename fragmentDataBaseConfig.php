<?php

$dsn = 'mysql:host=localhost:3308;dbname=reseauxsociauxutt;charset=utf8';
$username_base = 'root';
$password_base = '';
$options = array();

try{
    $database = new PDO($dsn, $username_base, $password_base, $options);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("Connecté à base de donnée.");

} catch ( PDOException $e ) {

    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage() );
}
