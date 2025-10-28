<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);


$heading = 'Note';


$note = $db -> query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

$currentUserId = 3;

autorize($note['user_id'] === $currentUserId);


view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note,
]);