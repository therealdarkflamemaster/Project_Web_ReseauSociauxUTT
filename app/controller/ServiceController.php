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

    public static function generateQRcode($link,$nom){
        echo ("<p><img src='https://api.qrserver.com/v1/create-qr-code/?data=$link&size=150x150' alt='' title='go to $nom' /></p>");
        echo (" <p><a href='$link'>Link</a></p>");

    }

    public static function openweather($format){
        include_once '../module/XMLopenWeather.php';

    }




}