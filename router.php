<?php

$base_url ='/repo/Warehouse-2.0';
$heading = 'Warehouse';

// router.php
$script = $_SERVER["REQUEST_URI"];
$script = parse_url($script, PHP_URL_PATH); // Pobierz tylko część ścieżki
$script = trim($script, '/'); // Usuń początkowe i końcowe ukośniki
$script = str_replace('repo/Warehouse-2.0', '', $script); // Usuń nazwę folderu projektu
$path = pathinfo($script);
if (empty($path["extension"])) {
    $php = $script . ".php"; // Poprawna nazwa pliku
    if (file_exists($php)) {
        include($php);
    } else {
        return FALSE;
    }
} else {
    return FALSE;
}