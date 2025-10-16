<?php



$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];


function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code = 404){ //404 com a valor predetereminat, si passam per parametre un altre ens agafa el que hem passat
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);