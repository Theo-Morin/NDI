<?php

class MeteoAPI {
    private static $weatherKey = "f301ac13c620464b952172921200312";
    static function getCurrentWeather($city) {
        $url = "http://api.weatherapi.com/v1/current.json?key=$weatherKey&q=$city";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $datas = curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        return [
            "location" => $datas['locations']['name'],
            "wind_dir" => $datas['current']['wind_dir'],
            "wind_kph" => $datas['current']['wind_kph'],
            "icon" => $datas['current']['condition']['icon'],
            "temp" => $datas['current']['temp_c'],
            "precip" => $datas['current']['precip_mm']
        ];
    }
}

?>