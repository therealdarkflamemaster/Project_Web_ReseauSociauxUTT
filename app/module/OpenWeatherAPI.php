<?php


class OpenWeatherAPI
{
    public static function generateRequest($format){
        $format ='xml';
        if($format == 'json'){
            include_once 'weather.php';
        }else if ($format == 'xml'){
            include_once 'XMLopenWeather.php';
        }else { // $format == 'html'
            include_once 'HTMLopenWeather.php';
        }
    }

}