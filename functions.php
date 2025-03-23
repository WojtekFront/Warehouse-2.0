<?php

function urlIs($value){
    $shortName = $_SERVER['REQUEST_URI'];
    $shortName = parse_url($shortName, PHP_URL_PATH);
    $shortName = str_replace('/repo/Warehouse-2.0', '', $shortName);
    // $shortName = pathinfo($shortName, PATHINFO_FILENAME);


    $shortName === $value;
    return $shortName;
}