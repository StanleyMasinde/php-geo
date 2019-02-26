<?php
require_once('vendor/autoload.php');
use GeoController\GeoController;


$geolocation = new GeoController;

$counties = $geolocation->getCounties();

echo "<h2>Counties</h2>";
foreach ($counties as $county) {
    echo $county. "<br>";
}