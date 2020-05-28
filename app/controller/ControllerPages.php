<?php


class ControllerPages{

    public static function accueil(){
        // --- page d'acceuil
            include 'config.php';
            $vue = $root . '/app/view/pageAccueil.php';
            if (DEBUG)
                echo ("ControllerPages : pageAccueil : vue = $vue");
            require ($vue);

    }



}