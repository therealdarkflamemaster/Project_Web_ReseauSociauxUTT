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

    public static function homepage(){
        // --- page personnelle
        include 'config.php';
        $vue = $root . '/app/view/pages/Homepage.php';
        if (DEBUG)
            echo ("ControllerPages : pageAccueil : vue = $vue");
        require ($vue);

    }

    public static function login(){
        // --- page de LOG IN
        include 'config.php';
        $vue = $root . '/app/view/pages/login.php';
        if (DEBUG)
            echo ("ControllerPages : pageAccueil : vue = $vue");
        require ($vue);

    }

    public static function register(){
        // --- page de register
        include 'config.php';
        $vue = $root . '/app/view/pages/register.php';
        if (DEBUG)
            echo ("ControllerPages : pageAccueil : vue = $vue");
        require ($vue);

    }



}