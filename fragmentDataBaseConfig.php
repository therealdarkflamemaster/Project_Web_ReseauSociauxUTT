<?php

$dsn = 'mysql:host=localhost:3308;dbname=reseauxsociauxutt;charset=utf8';
$username = 'root';
$password = '';
$options = array();

try{
    $database = new PDO($dsn, $username, $password, $options);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("Connecté à base de donnée.");

} catch ( PDOException $e ) {

    printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage() );
}
