<?php


$input_city = $_GET["city"];

$input_city = str_replace(" ", "-", $input_city);

 $meta_content = file_get_contents("http://www.weather-forecast.com/locations/".$input_city."/forecasts/latest");

 //preg_match("/3 Day Weather Forecast Summary:/i", $meta_content, $matched_content);

 preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)<\/span>/s', $meta_content, $matched_content);

 //print_r($matched_content);

 echo $matched_content[1];

?>