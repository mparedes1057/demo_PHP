<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class){

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

$router = new \Core\Router();

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

/*
$config = require ('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id;"; //no s'ha de permetre que l'entrada de l'usuari formi part de la consulta

$posts = $db ->query($query, [':id' => $id]) -> fetch();

dd($posts['title']);
*/