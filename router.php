<?php

$base_url ='/repo/Warehouse-2.0';
$heading = 'Warehouse';

// router.php
$script = $_SERVER["REQUEST_URI"];
$script = parse_url($script, PHP_URL_PATH);
$script = trim($script, '/');
$script = str_replace('repo/Warehouse-2.0', '', $script);
$path = pathinfo($script);
if (empty($path["extension"])) {
    $php = $script . ".php";
    if (file_exists($php)) {
        include($php);
    } else {
        return FALSE;
    }
} else {
    return FALSE;
}