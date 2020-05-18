<?php

//Ce fichier est pour vérifier l'utlisateur dans le database



$PHP_AUTH_EMAIL = $_POST['email'];
$PHP_AUTH_PW = $_POST['pwd'];


    if($PHP_AUTH_EMAIL=="" || $PHP_AUTH_PW==""){
        echo '<script type="text/javascript">alert("Faux email ou mot de pass");';
        exit("location.href='./login.php';</script>");
    }else{
        echo $PHP_AUTH_EMAIL;
        echo $PHP_AUTH_PW;
        include "fragmentDataBaseConfig.php";
        $requete2 = "select username from utilisateur where mail = '$PHP_AUTH_EMAIL' and passwd = '$PHP_AUTH_PW' ";
        $requete = "select username from utilisateur where mail = '$PHP_AUTH_EMAIL' ";
        $statement = $database->query($requete);
        $statement2 = $database->query($requete2);

        $row = $statement->fetch(PDO::FETCH_BOTH);
        $row2 = $statement2->fetch(PDO::FETCH_BOTH);

        if( empty($row[0]) ){
            echo '<script type="text/javascript">alert(" No existing email  ");';
            exit("location.href='./login.php';</script>");
        }else if( empty($row2[0]) ){
            echo '<script type="text/javascript">alert(" Faux mot de pass  ");';
            exit("location.href='./login.php';</script>");
        }else{
            echo '<script type="text/javascript">alert(" Welcome");';
            exit("location.href='./Homepage.php';</script>");
        }


    }




