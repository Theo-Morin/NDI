<?php

class MeteoAPI {
    private static $weatherKey = "f301ac13c620464b952172921200312";
    static function getCurrentWeather($city) {
        $url = "http://api.weatherapi.com/v1/current.json?key=".MeteoAPI::$weatherKey."&q=$city";
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $datas = (array) json_decode(curl_exec($ch));
        return [
            "location" => $datas["location"]->name,
            "wind_dir" => $datas["current"]->wind_dir,
            "wind_kph" => $datas["current"]->wind_kph,
            "icon" => $datas["current"]->condition->icon,
            "temp" => $datas["current"]->temp_c,
            "precip" => $datas["current"]->precip_mm
        ];
    }
}

?>