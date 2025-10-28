<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');

$db = new Database($config['database']);

$heading = 'Note create';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if (! Validator:: string($_POST['body'], 1, 1000)){ //valida que no ens introdueixin un body buid
        $errors['body'] = 'A of no more than 1000 characters is required';
    }

    if (empty($errors)){
        $db ->query('insert into notes(body, user_id) values(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

view("notes/create.view.php", [
    'heading' => 'Create note',
    'errors' => $errors,
]);