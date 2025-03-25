<?php

function urlIs(){
    $shortName = $_SERVER['REQUEST_URI'];
    $shortName = parse_url($shortName, PHP_URL_PATH);
    $shortName = str_replace('/repo/Warehouse-2.0', '', $shortName);
    $shortName = trim($shortName, '/');
    $shortName = pathinfo($shortName, PATHINFO_FILENAME);
    
    return $shortName ? '/' . $shortName : '/';
}

function urlIsChceck(){
    $shortName = $_SERVER['REQUEST_URI'];
    $shortName = parse_url($shortName, PHP_URL_PATH);
    $shortName = str_replace('/repo/Warehouse-2.0', '', $shortName);
    // $shortName = pathinfo($shortName, PATHINFO_FILENAME);


    
    return $shortName;
}
