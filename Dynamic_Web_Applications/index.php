<?php

require 'functions.php';

require 'Database.php';

//require 'router.php';
$config = require ('config.php');

$db = new Database($config['database']);

$posts = $db ->query("select * from posts where id = 2;") -> fetch();

dd($posts['title']);