<?php


class OpenWeatherAPI
{
    public static function generateRequest($format){
        if($format == 'JSON'){
            include_once 'weather.php';
        }else if ($format == 'XML'){
            include_once 'XMLopenWeather.php';
        }else if ($format == 'HTML'){
            include_once 'HTMLopenWeather.php';
        }else if ($format == 'Semaine'){
            include_once 'SemaineopenWeather.php';
        }else {
            echo ("Wrong type of $format");
        }
    }

}