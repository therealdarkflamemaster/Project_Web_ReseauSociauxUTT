<?php


class ServiceController{

    public static function getweather(){
        include_once '../module/weather.php';
    }

    public static function shareTwitter(){
        include_once '../module/shareTwitter.php';
        exit("<script>location.href='http://localhost/ReseauSociauxUTT/app/router/router.php?action=register'</script>");
    }

    public static function googleMap(){
        include_once '../module/apiGoogleMap.php';
        exit("<script>location.href='http://localhost/ReseauSociauxUTT/app/router/router.php?action=register'</script>");

    }




}