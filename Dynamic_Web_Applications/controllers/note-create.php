<?php

$config = require ('config.php');

$db = new Database($config['database']);

$heading = 'Note create';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];

    if (strlen($_POST['body']) === 0){ //valida que no ens introdueixin un body buid
        $errors['body'] = 'A body is required';
    }

    if (strlen($_POST['body']) > 1000){ //valida que no ens introdueixin més de 1000 caracters
        $errors['body'] = 'The body can not be more than 1.000 character.';
    }

    if (empty($errors)){
        $db ->query('insert into notes(body, user_id) values(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require "views/note-create.view.php";