<?php

require_once 'controller/testFunction.php';

$routes = [
    '/' => 'homepage',
    '/contact' => 'contactView',
    '/about' => 'aboutViews',
    '/reservation' => 'reservationView'
];

// Obtenir le chemin de l'URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Si le chemin correspond à une route, appeler la fonction correspondante
if (array_key_exists($path, $routes)) {
    $action = $routes[$path];
    if (function_exists($action)) {
        $action(); // Appeler la fonction de traitement
    } else {
        homePage();
    }
} else {
    homePage();
}


