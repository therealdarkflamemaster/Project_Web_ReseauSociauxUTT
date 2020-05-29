
<!-- ----- debut Router-->
<?php
require ('../controller/ControllerPages.php');

error_reporting(E_ALL ^ E_NOTICE);

error_reporting(E_ALL ^ E_WARNING);
// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

$action = $param['action'];

unset($param['action']);

$arg = $param;

// --- Liste des méthodes autorisées
switch ($action) {
    case "accueil" :
    case "homepage" :
    case "login" :
    case "register" :


        ControllerPages::$action($arg);
        break;




    // Tache par défaut
    default:
        $action = "accueil";
        ControllerPages::$action();
}
?>
<!-- ----- Fin Router -->

