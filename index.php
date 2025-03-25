<?php
$base_url = '/repo/Warehouse-2.0';
require 'functions.php';

$uri = urlIs();
echo "URI: $uri<br>"; // Debugowanie

if ($uri === '/about.php') {
    echo "Ładuję about.php<br>";
    require (dirname(__DIR__) .'/controllers/about.php');
} elseif ($uri === '/contact.php') {
    echo "Ładuję contact.php<br>";
    require '/controllers/index.php';
} else {
    echo "Ładuję index.php<br>";
    require 'controllers/index.php';
}