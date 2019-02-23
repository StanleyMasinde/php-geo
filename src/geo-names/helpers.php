<?php

require_once('../GeoController.php');

function getCities()
{
    return GeoController::getCities();
}

getCities();