<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class){

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

require base_path('Core/router.php');

/*
$config = require ('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id;"; //no s'ha de permetre que l'entrada de l'usuari formi part de la consulta

$posts = $db ->query($query, [':id' => $id]) -> fetch();

dd($posts['title']);
*/