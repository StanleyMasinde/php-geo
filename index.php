<?php
require_once('vendor/autoload.php');
use GeoController\GeoController;


$geolocation = new GeoController;

$counties = $geolocation->getCounties();

echo "<h2>Counties</h2>";
foreach ($counties as $county) {
    echo $county. "<br>";
}


$cities = $geolocation->getCities();

echo "<h2>Cities</h2>";
foreach ($cities as $city) {
    echo $city['name']." ". $city['code'] ."". "<br>";
}