<?php
// Add geo_identity Shortcode
function geo_shortcode() {
    ob_start();

    $ip = $_SERVER['REMOTE_ADDR'];

    //echo $ip;
    echo '<div style="text-align:center">';
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

    //var_dump($details); exit();

    echo 'City ->     '.$details->city.'<br>'; // -> "Mountain View"
    echo 'State ->    '.$details->region.'<br>'; 
    echo 'Country ->  '.$details->country.'<br>'; 


    //read temperature
    $jsonurl = "http://api.openweathermap.org/data/2.5/weather?q={$details->region},{$details->country}&appid=0750750b055a073cc3cc11b9c58d4812";

    //echo $jsonurl;

    echo "<br>";

    $json = file_get_contents($jsonurl);

    $weather = json_decode($json);
    $kelvin = $weather->main->temp;
    $celcius = $kelvin - 273.15;

    echo 'Temperature ->   '.$celcius.'degree Celcius';

    echo '</div>';

    return ob_get_clean();

}
add_shortcode( 'geo-identity', 'geo_shortcode' );