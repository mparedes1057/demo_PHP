<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class){
    require base_path("Core/{$class}.php");
});

require base_path('router.php');

/*
$config = require ('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id;"; //no s'ha de permetre que l'entrada de l'usuari formi part de la consulta

$posts = $db ->query($query, [':id' => $id]) -> fetch();

dd($posts['title']);
*/